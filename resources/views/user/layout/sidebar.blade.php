<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first text-muted">Main Menu</li>
            
            <li>
                <a href="{{ route('user.account') }}" class="text-dark" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">User Account</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user.deposit') }}" class="text-dark" aria-expanded="false">
                    <i class="la la-money"></i>
                    <span class="nav-text">Make a Deposit</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user.withdraw') }}" class="text-dark" aria-expanded="false">
                    <i class="la la-credit-card"></i>
                    <span class="nav-text">Withdrawal</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user.transactions') }}" class="text-dark" aria-expanded="false">
                    <i class="la la-money"></i>
                    <span class="nav-text">User Transactions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ledger.history') }}" class="text-dark" aria-expanded="false">
                    <i class="la la-money"></i>
                    <span class="nav-text">Report</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user.account') }}" class="text-dark" aria-expanded="false">
                    <i class="la la-life-ring"></i>
                    <span class="nav-text">Support</span>
                </a>
            </li>
        </ul>
    </div>
</div>
