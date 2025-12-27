  <header id="header" class="header-default">
            <div class="container">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 d-xl-none">
                        <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                            <i class="icon icon-categories"></i>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <a href="{{ url('/') }}" class="logo-header">
                            <img src="{{ asset('front_assets/images/logo/logo_dark.png') }}" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                                <li class="menu-item {{ url()->current() == url('/') ? 'active' : '' }}"> 
                                    <a href="{{ url('/') }}" class="item-link">Home</a>
                                </li>
                                <li class="menu-item position-relative {{ Route::is('front.about_us') ? 'active' : '' }}">
                                    <a href="{{ route('front.about_us') }}" class="item-link">About Us</a>
                                </li>
                                <li class="menu-item {{ Route::is('front.shop') ? 'active' : '' }}">
                                    <a href="{{ route('front.shop') }}" class="item-link">Shop</a>
                                </li>
                                <li class="menu-item position-relative {{ Route::is('front.contact_us') ? 'active' : '' }}">
                                    <a href="{{ route('front.contact_us') }}" class="item-link">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center">
                            <li class="nav-search"><a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                                <svg class="icon" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>    
                            </a></li>
                             <li class="nav-account">
                                <a href="#" class="nav-icon-item">
                                    <svg class="icon" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                                            stroke="#181818" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                            stroke="#181818" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                @auth
                                    <div class="dropdown-account">
                                        <ul class="list-menu-item">
                                            <li><a href="{{ route('dashboard') }}" class="body-text-1 link">My Dashboard</a></li>
                                            <li><a href="{{ route('customer.order') }}" class="body-text-1 link">My Order</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="body-text-1 link">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <div class="dropdown-account dropdown-login">
                                        <div class="sub-top">
                                            <a href="#" class="tf-btn btn-reset" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="login_modal()">Login</a>
                                            <p class="text-center text-secondary-2">Don’t have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="register_modal()">Register</a></p>
                                        </div>
                                        {{-- <div class="sub-bot">
                                            <span class="body-text-">Support</span>
                                        </div> --}}
                                    </div>
                                @endauth
                            </li>
                            <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item">
                                <svg class="icon" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5078 10.8734V6.36686C16.5078 5.17166 16.033 4.02541 15.1879 3.18028C14.3428 2.33514 13.1965 1.86035 12.0013 1.86035C10.8061 1.86035 9.65985 2.33514 8.81472 3.18028C7.96958 4.02541 7.49479 5.17166 7.49479 6.36686V10.8734M4.11491 8.62012H19.8877L21.0143 22.1396H2.98828L4.11491 8.62012Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>  
                                <span class="count-box">{{ auth()->check() ? cart_items_data(auth()->user()->id ?? 0)->count():0 }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>