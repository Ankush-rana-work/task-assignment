    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column justify-content-between">
        <div class="logo d-flex justify-content-center align-items-center">
            <i class="fa fa-shopping-bag mr-2" aria-hidden="true"></i>
            OnShop
        </div>
        <ul>
            <li>
                <a href="{{ route('home')}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Categories
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    Wallet
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Cart
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    User Profile
                </a>
            </li>
            @if(Auth::check())
            <li>
                <a href="{{ route('my-account')}}">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    My account
                </a>
            </li>
            @endif
            <li>
                <a href="#">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    Setting
                </a>
            </li>
        </ul>

        <ul>
            @if(Auth::check())
            <li>

                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-link">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Logout
                    </button>
                </form>
            </li>
            @else
            <li>
                <a href="{{ route('login') }}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Login
                </a>

            </li>
            @endif
        </ul>

    </div>