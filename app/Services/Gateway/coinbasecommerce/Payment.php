<?php

namespace App\Services\Gateway\coinbasecommerce;

use Facades\App\Services\BasicCurl;
use Facades\App\Services\BasicService;


class Payment
{
    public static function prepareData($order, $gateway)
    {
        // var_dump(route('ipn', [$gateway->code, $order->transaction]));
        // die;
        $basic = (object) config('basic');
        $apiKey = $gateway->parameters->api_key ?? '';
        $postParam = [
            'name' => optional($order->user)->name ?? $basic->site_title,
            'description' => "Pay to {$basic->site_title} account",
            'local_price' => [
                'amount' => $order->final_amount,
                'currency' => $order->gateway_currency
            ],
            'metadata' => [
                'trx' => $order->transaction
            ],
            'pricing_type' => "fixed_price",
            'redirect_url' => route('ipn', [$gateway->code, $order->transaction]),
            'cancel_url' => route('failed')
        ];

        $url = 'https://api.commerce.coinbase.com/charges';
        $headers = [
            'Content-Type:application/json',
            'X-CC-Api-Key: ' . "$apiKey",
            'X-CC-Version: 2018-03-22'
        ];
        $response = BasicCurl::curlPostRequestWithHeaders($url, $headers, $postParam);
        $response = json_decode($response);
        // var_dump($response->data->hosted_url);
        // die;

        if (@$response->error == '') {
            $send['redirect'] = true;
            $send['redirect_url'] = $response->data->hosted_url;
        } else {
            $send['error'] = true;
            $send['message'] = 'Some Problem Occured. Try Again';
        }
        return json_encode($send);
    }

    public static function ipn($request, $gateway, $order = null, $trx = null, $type = null)
    {
        // Verifica en el header si existe esteparámetro, ya revise en el request y si lo envía
        $sentSign = $request->header('X-Cc-Webhook-Signature');
        $sig = hash_hmac('sha256', $request->getContent(), $gateway->parameters->secret);
        
        // error_log('$sentSign');
        // die;
        // error_log($sig);
        // error_log('sig');
        
        // var_dump($sentSign);
        // var_dump($sig);
        // die;
        
        // error_log($sentSign == $sig);
        // error_log('$sentSign == $sig');
        $request = json_decode($request->getContent());
        // error_log($esto->event->type);
        // error_log('$request->event->type');
        // // error_log($order->status);
        // // error_log('$order->status');
        // die;
        if ($sentSign == $sig) {
            if ($request->event->type == 'charge:confirmed' && $order->status == 0) {
                BasicService::preparePaymentUpgradation($order);

                $data['status'] = 'success';
                $data['msg'] = 'Transaction was successful.';
                $data['redirect'] = route('success');
            } else {
                $data['status'] = 'error';
                $data['msg'] = 'Invalid response.';
                $data['redirect'] = route('failed');
            }
        } else {
            $data['status'] = 'error';
            $data['msg'] = 'Invalid response.';
            $data['redirect'] = route('failed');
        }
        return $data;
    }
}
