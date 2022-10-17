<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('main') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-box link-icon">
                    <path
                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
                <span class="menu-title">Author</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/listings') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-bell link-icon">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <span class="menu-title">Job Listing</span>
            </a>

        </li>

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">
                    <i class="fa fa-id-badge">
                        <span class="menu-title">Register</span>
                    </i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">
                    <i class="fa fa-sign-in">
                        <span class="menu-title">Login</span>
                    </i>
                </a>
            </li>
        @endguest

{{--        @auth--}}
{{--            <li>--}}
{{--        <span class="font-bold uppercase">--}}
{{--          Welcome {{auth()->user()->name}}--}}
{{--        </span>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{ url('/listings/manage') }}" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <form class="inline" method="POST" action="{{ url('/logout') }}">--}}
{{--                    @csrf--}}
{{--                    <button type="submit">--}}
{{--                        <i class="fa-solid fa-door-closed"></i> Logout--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li>--}}
{{--                <a href="{{ url('/register') }}" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{ url('/login') }}" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>--}}
{{--            </li>--}}
{{--        @endauth--}}
    </ul>
</nav>
