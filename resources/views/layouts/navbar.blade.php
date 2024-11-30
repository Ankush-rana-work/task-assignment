<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid d-flex">
        <div class="search-container">
            <input type="text" placeholder="Search Product" class="search-input" id="search-input">
            <button type="submit" class="search-button">
                <i class="fa fa-search"></i>
            </button>
        </div>

        <!-- Notification Icon -->
        <div class="d-flex align-items-center">
            <div class="nav-icons mt-1">
                <ul>
                    <li>
                        <a href="">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="notificaton-wrapper">
                            <span>2</span>
                            <i class="fa fa-bell" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- User Profile Dropdown -->
            <div class="dropdown user-info">
                @if(auth()->check())
                <a class="d-flex align-items-center text-decoration-none gap-2" href="#" id="dropdownUser" data-bs-toggle="dropdown">
                    <i class="fa fa-user user-dummy" aria-hidden="true"></i>
                    {{ ucfirst(auth()->user()->name)}}
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
                @else
                <a href="{{ route('register') }}" class="register_stl">Register</a>
                @endif
            </div>
        </div>
    </div>
</nav>