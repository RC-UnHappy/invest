<a class="das-nav nav-item {{menuActive('user.home')}} " href="{{route('user.home')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/db_nav_icon_1.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Dashboard')</span>
    </div>
</a>


<a class="das-nav nav-item {{menuActive(['user.invest-history'])}}" href="{{route('user.invest-history')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/db_nav_icon_5.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Invest History')</span>
    </div>
</a>


<a class="das-nav nav-item {{menuActive(['user.addFund', 'user.addFund.confirm'])}}" href="{{route('user.addFund')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/dashboard_acc_3.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Add Fund')</span>
    </div>
</a>


<a class="das-nav nav-item {{menuActive(['user.fund-history', 'user.fund-history.search'])}}" href="{{route('user.fund-history')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/db_nav_icon_3.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Fund History')</span>
    </div>
</a>




<a class="das-nav nav-item {{menuActive(['user.money-transfer'])}}" href="{{route('user.money-transfer')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/dashboard_3.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Transfer')</span>
    </div>
</a>



<a class="das-nav nav-item {{menuActive(['user.transaction', 'user.transaction.search'])}}" href="{{route('user.transaction')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/dashboard_1.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Transaction')</span>
    </div>
</a>





<a class="das-nav nav-item  {{menuActive(['user.payout.money','user.payout.preview'])}}" href="{{route('user.payout.money')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/refferal_3.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Payout') </span>
    </div>
</a>

<a class="das-nav nav-item  {{menuActive(['user.payout.history','payout.history.search'])}}" href="{{route('user.payout.history')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/feature_2.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Payout History')</span>
    </div>
</a>

<a class="das-nav nav-item {{menuActive(['user.referral'])}}" href="{{route('user.referral')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/dashboard_acc_4.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('My Referral')</span>
    </div>
</a>


<a class="das-nav nav-item {{menuActive(['user.referral.bonus', 'user.referral.bonus.search'])}}" href="{{route('user.referral.bonus')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/db_nav_icon_4.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Referral Bonus')</span>
    </div>
</a>


<a class="das-nav nav-item {{menuActive(['user.profile'])}}" href="{{route('user.profile')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/feature_1.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Profile Settings')</span>
    </div>
</a>


<a class="das-nav nav-item {{menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])}}" href="{{route('user.ticket.list')}}">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="{{asset($themeTrue.'images/icon/feature_3.png')}}" alt="Icon Missing">
        </div>
        <span>@lang('Support Ticket')</span>
    </div>
</a>
