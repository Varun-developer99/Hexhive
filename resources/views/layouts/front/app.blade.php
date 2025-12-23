<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    {{-- <meta name="author" content="themesflat.com"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{-- <meta name="description" content="Themesflat Modave, Multipurpose eCommerce Template"> --}}

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('front_assets/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/fonts/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/sib-styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/styles.css') }}">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('front_assets/images/logo/fidelity-icon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front_assets/images/logo/fidelity-icon.png') }}">
    @yield('css')
    <style>
        .tf-btn:hover {
            color: #000000 !important;
        }
        .text-clear *{
            list-style: revert;
        }
        .notify-alert button{
            padding: 0px 10px !important;
        }
        .notify-alert{
            z-index: 9999999999 !important;
        }
        .disabled { 
            background-color: #e9ecef !important; /* Bootstrap's default disabled background */
            cursor: not-allowed !important;   /* Shows a disabled cursor */
        }
    </style>
</head>

<body class="preload-wrapper">


    <!-- Scroll Top -->
    <button id="scroll-top">
        <svg width="24" height="25" viewbox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_15741_24194)">
                <path
                    d="M3 11.9175L12 2.91748L21 11.9175H16.5V20.1675C16.5 20.3664 16.421 20.5572 16.2803 20.6978C16.1397 20.8385 15.9489 20.9175 15.75 20.9175H8.25C8.05109 20.9175 7.86032 20.8385 7.71967 20.6978C7.57902 20.5572 7.5 20.3664 7.5 20.1675V11.9175H3Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <defs>
                <clippath id="clip0_15741_24194">
                    <rect width="24" height="24" fill="white" transform="translate(0 0.66748)"></rect>
                </clippath>
            </defs>
        </svg>
    </button>

    {{-- <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload --> --}}

    <div id="wrapper">
        <!-- Top bar -->

        @include('layouts.front.header')

        @yield('content')
        <!-- Footer -->
        @include('layouts.front.footer')
        <!-- End Footer -->

        <!-- toolbar-bottom -->
        {{-- <div class="tf-toolbar-bottom">
            <div class="toolbar-item">
                <a href="#">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewbox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.125 3.125H4.375C4.04348 3.125 3.72554 3.2567 3.49112 3.49112C3.2567 3.72554 3.125 4.04348 3.125 4.375V8.125C3.125 8.45652 3.2567 8.77446 3.49112 9.00888C3.72554 9.2433 4.04348 9.375 4.375 9.375H8.125C8.45652 9.375 8.77446 9.2433 9.00888 9.00888C9.2433 8.77446 9.375 8.45652 9.375 8.125V4.375C9.375 4.04348 9.2433 3.72554 9.00888 3.49112C8.77446 3.2567 8.45652 3.125 8.125 3.125ZM8.125 8.125H4.375V4.375H8.125V8.125ZM15.625 3.125H11.875C11.5435 3.125 11.2255 3.2567 10.9911 3.49112C10.7567 3.72554 10.625 4.04348 10.625 4.375V8.125C10.625 8.45652 10.7567 8.77446 10.9911 9.00888C11.2255 9.2433 11.5435 9.375 11.875 9.375H15.625C15.9565 9.375 16.2745 9.2433 16.5089 9.00888C16.7433 8.77446 16.875 8.45652 16.875 8.125V4.375C16.875 4.04348 16.7433 3.72554 16.5089 3.49112C16.2745 3.2567 15.9565 3.125 15.625 3.125ZM15.625 8.125H11.875V4.375H15.625V8.125ZM8.125 10.625H4.375C4.04348 10.625 3.72554 10.7567 3.49112 10.9911C3.2567 11.2255 3.125 11.5435 3.125 11.875V15.625C3.125 15.9565 3.2567 16.2745 3.49112 16.5089C3.72554 16.7433 4.04348 16.875 4.375 16.875H8.125C8.45652 16.875 8.77446 16.7433 9.00888 16.5089C9.2433 16.2745 9.375 15.9565 9.375 15.625V11.875C9.375 11.5435 9.2433 11.2255 9.00888 10.9911C8.77446 10.7567 8.45652 10.625 8.125 10.625ZM8.125 15.625H4.375V11.875H8.125V15.625ZM15.625 10.625H11.875C11.5435 10.625 11.2255 10.7567 10.9911 10.9911C10.7567 11.2255 10.625 11.5435 10.625 11.875V15.625C10.625 15.9565 10.7567 16.2745 10.9911 16.5089C11.2255 16.7433 11.5435 16.875 11.875 16.875H15.625C15.9565 16.875 16.2745 16.7433 16.5089 16.5089C16.7433 16.2745 16.875 15.9565 16.875 15.625V11.875C16.875 11.5435 16.7433 11.2255 16.5089 10.9911C16.2745 10.7567 15.9565 10.625 15.625 10.625ZM15.625 15.625H11.875V11.875H15.625V15.625Z"
                                fill="#4D4E4F"></path>
                        </svg>
                    </div>
                    <div class="toolbar-label">Shop</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#shopCategories" data-bs-toggle="offcanvas" aria-controls="shopCategories">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewbox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5 10C17.5 10.1658 17.4342 10.3247 17.3169 10.4419C17.1997 10.5592 17.0408 10.625 16.875 10.625H3.125C2.95924 10.625 2.80027 10.5592 2.68306 10.4419C2.56585 10.3247 2.5 10.1658 2.5 10C2.5 9.83424 2.56585 9.67527 2.68306 9.55806C2.80027 9.44085 2.95924 9.375 3.125 9.375H16.875C17.0408 9.375 17.1997 9.44085 17.3169 9.55806C17.4342 9.67527 17.5 9.83424 17.5 10ZM3.125 5.625H16.875C17.0408 5.625 17.1997 5.55915 17.3169 5.44194C17.4342 5.32473 17.5 5.16576 17.5 5C17.5 4.83424 17.4342 4.67527 17.3169 4.55806C17.1997 4.44085 17.0408 4.375 16.875 4.375H3.125C2.95924 4.375 2.80027 4.44085 2.68306 4.55806C2.56585 4.67527 2.5 4.83424 2.5 5C2.5 5.16576 2.56585 5.32473 2.68306 5.44194C2.80027 5.55915 2.95924 5.625 3.125 5.625ZM16.875 14.375H3.125C2.95924 14.375 2.80027 14.4408 2.68306 14.5581C2.56585 14.6753 2.5 14.8342 2.5 15C2.5 15.1658 2.56585 15.3247 2.68306 15.4419C2.80027 15.5592 2.95924 15.625 3.125 15.625H16.875C17.0408 15.625 17.1997 15.5592 17.3169 15.4419C17.4342 15.3247 17.5 15.1658 17.5 15C17.5 14.8342 17.4342 14.6753 17.3169 14.5581C17.1997 14.4408 17.0408 14.375 16.875 14.375Z"
                                fill="#4D4E4F"></path>
                        </svg>
                    </div>
                    <div class="toolbar-label">Categories</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#search" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewbox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.9419 17.058L14.0302 13.1471C15.1639 11.7859 15.7293 10.04 15.6086 8.27263C15.488 6.50524 14.6906 4.85241 13.3823 3.65797C12.074 2.46353 10.3557 1.81944 8.58462 1.85969C6.81357 1.89994 5.12622 2.62143 3.87358 3.87407C2.62094 5.12671 1.89945 6.81406 1.8592 8.5851C1.81895 10.3561 2.46304 12.0745 3.65748 13.3828C4.85192 14.691 6.50475 15.4884 8.27214 15.6091C10.0395 15.7298 11.7854 15.1644 13.1466 14.0306L17.0575 17.9424C17.1156 18.0004 17.1845 18.0465 17.2604 18.0779C17.3363 18.1094 17.4176 18.1255 17.4997 18.1255C17.5818 18.1255 17.6631 18.1094 17.739 18.0779C17.8149 18.0465 17.8838 18.0004 17.9419 17.9424C17.9999 17.8843 18.046 17.8154 18.0774 17.7395C18.1089 17.6636 18.125 17.5823 18.125 17.5002C18.125 17.4181 18.1089 17.3367 18.0774 17.2609C18.046 17.185 17.9999 17.1161 17.9419 17.058ZM3.12469 8.75018C3.12469 7.63766 3.45459 6.55012 4.07267 5.6251C4.69076 4.70007 5.56926 3.9791 6.5971 3.55336C7.62493 3.12761 8.75593 3.01622 9.84707 3.23326C10.9382 3.4503 11.9405 3.98603 12.7272 4.7727C13.5138 5.55937 14.0496 6.56165 14.2666 7.6528C14.4837 8.74394 14.3723 9.87494 13.9465 10.9028C13.5208 11.9306 12.7998 12.8091 11.8748 13.4272C10.9497 14.0453 9.86221 14.3752 8.74969 14.3752C7.25836 14.3735 5.82858 13.7804 4.77404 12.7258C3.71951 11.6713 3.12634 10.2415 3.12469 8.75018Z"
                                fill="#4D4E4F"></path>
                        </svg>
                    </div>
                    <div class="toolbar-label">Search</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#wishlist" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewbox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.4215 4.45326C16.5724 3.60627 15.4225 3.12997 14.2231 3.1285C13.0238 3.12704 11.8727 3.60054 11.0215 4.44545L9.99965 5.39467L8.97699 4.44232C8.12602 3.59373 6.9728 3.11795 5.77103 3.11963C4.56926 3.12132 3.41738 3.60034 2.56879 4.45131C1.7202 5.30228 1.24441 6.4555 1.2461 7.65727C1.24778 8.85904 1.7268 10.0109 2.57777 10.8595L9.55824 17.9423C9.6164 18.0014 9.68572 18.0483 9.76217 18.0803C9.83862 18.1123 9.92067 18.1288 10.0036 18.1288C10.0864 18.1288 10.1685 18.1123 10.2449 18.0803C10.3214 18.0483 10.3907 18.0014 10.4489 17.9423L17.4215 10.8595C18.2707 10.0098 18.7477 8.85768 18.7477 7.65639C18.7477 6.45509 18.2707 5.30296 17.4215 4.45326ZM16.5348 9.98139L9.99965 16.6095L3.46059 9.97514C2.8452 9.35975 2.49948 8.52511 2.49948 7.65482C2.49948 6.78454 2.8452 5.9499 3.46059 5.33451C4.07597 4.71913 4.91061 4.37341 5.7809 4.37341C6.65118 4.37341 7.48583 4.71913 8.10121 5.33451L8.11684 5.35014L9.57387 6.7056C9.68953 6.81324 9.84166 6.87307 9.99965 6.87307C10.1576 6.87307 10.3098 6.81324 10.4254 6.7056L11.8825 5.35014L11.8981 5.33451C12.5139 4.71954 13.3488 4.37438 14.219 4.37497C15.0893 4.37555 15.9237 4.72184 16.5387 5.33764C17.1537 5.95344 17.4988 6.78831 17.4983 7.6586C17.4977 8.52888 17.1514 9.36329 16.5356 9.97826L16.5348 9.98139Z"
                                fill="#4D4E4F"></path>
                        </svg>
                        <!-- <div class="toolbar-count">1</div> -->
                    </div>
                    <div class="toolbar-label">Wishlist</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#shoppingCart" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewbox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.75 8.23389V4.48389C13.75 3.48932 13.3549 2.5355 12.6517 1.83224C11.9484 1.12897 10.9946 0.733887 10 0.733887C9.00544 0.733887 8.05161 1.12897 7.34835 1.83224C6.64509 2.5355 6.25 3.48932 6.25 4.48389V8.23389M3.4375 6.35889H16.5625L17.5 17.6089H2.5L3.4375 6.35889Z"
                                stroke="#4D4E4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                    <div class="toolbar-label">Cart</div>
                </a>
            </div>
        </div>
        <!-- /toolbar-bottom -->

    </div> --}}

    <!-- modalDemo -->
    {{-- <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-womenswear.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-womenswear.jpg') }}"
                                        alt="home-fashion-womenswear">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span>Trend</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion Womenswear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-eleganceNest.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-eleganceNest.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-eleganceNest.jpg') }}"
                                        alt="home-fashion-eleganceNest">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion EleganceNest</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-main.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-main.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-main.jpg') }}"
                                        alt="home-fashion-main">
                                    <div class="demo-label">
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion Main</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-trendset.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-trendset.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-trendset.jpg') }}"
                                        alt="home-fashion-trendset">
                                </div>
                                <span class="demo-name">Fashion TrendsetHome</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-vogueLing.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-vogueLiving.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-vogueLiving.jpg') }}"
                                        alt="home-fashion-vogueLiving">
                                </div>
                                <span class="demo-name">Fashion VogueLiving</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-elegantAbode.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-elegantAbode.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-elegantAbode.jpg') }}"
                                        alt="home-fashion-elegantAbode">
                                </div>
                                <span class="demo-name">Fashion ElegantAbode</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-glamDwell.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-glamDwell.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-glamDwell.jpg') }}"
                                        alt="home-fashion-glamDwell">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Fashion GlamDwell</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-classyCove.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-classycove.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-classycove.jpg') }}"
                                        alt="home-fashion-classyCove">
                                </div>
                                <span class="demo-name">Fashion ClassyCove</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-chicHaven.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-chicHaven.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-chicHaven.jpg') }}"
                                        alt="home-fashion-chicHaven1">
                                </div>
                                <span class="demo-name">Fashion ChicHaven 1</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-chicHaven-02.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-chicHaven2.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-chicHaven2.jpg') }}"
                                        alt="home-fashion-chicHaven2">
                                </div>
                                <span class="demo-name">Fashion ChicHaven 2</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-tiktok.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-tiktok.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-tiktok.jpg') }}"
                                        alt="home-fashion-tiktok">
                                </div>
                                <span class="demo-name">Fashion TikTok</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-luxeLiving.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-luxeLiving.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-luxeLiving.jpg') }}"
                                        alt="home-fashion-luxeLiving">
                                </div>
                                <span class="demo-name">Fashion LuxeLiving</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-modernRetreat.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-fashion-modernRetreat.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-fashion-modernRetreat.jpg') }}"
                                        alt="home-fashion-modernRetreat">
                                </div>
                                <span class="demo-name">Fashion ModernRetreat</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-beauty.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-beauty.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-beauty.jpg') }}"
                                        alt="home-beauty">
                                </div>
                                <span class="demo-name">Beauty</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-skinCare.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-skinCare.jpg') }}"
                                        alt="home-skincare">
                                </div>
                                <span class="demo-name">Skin Care</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-cosmetic.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-cosmetic.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-cosmetic.jpg') }}"
                                        alt="home-cosmetic">
                                </div>
                                <span class="demo-name">Cosmetic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-decor.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-decor.jpg') }}"
                                        alt="home-decor">
                                </div>
                                <span class="demo-name">Decor</span>
                            </a>
                        </div>
                        <div class="demo-item active">
                            <a href="home-furniture.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-furniture.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-furniture.jpg') }}"
                                        alt="home-furniture">
                                </div>
                                <span class="demo-name">Furniture</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry-01.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-jewelry.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-jewelry.jpg') }}"
                                        alt="home-jewelry-elegantGems">
                                </div>
                                <span class="demo-name">Jewelry ElegantGems</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry-02.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-jewelry2.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-jewelry2.jpg') }}"
                                        alt="home-jewelry-glitterGlam">
                                </div>
                                <span class="demo-name">Jewelry GlitterGlam</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-activewear.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-activewear.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-activewear.jpg') }}"
                                        alt="home-activewear">
                                </div>
                                <span class="demo-name">Activewear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-organic.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-organic.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-organic.jpg') }}"
                                        alt="home-organic">
                                </div>
                                <span class="demo-name">Organic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sock.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-sock.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-sock.jpg') }}"
                                        alt="home-sock">
                                </div>
                                <span class="demo-name">Socks</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-camping.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-camping.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-camping.jpg') }}"
                                        alt="home-camping">
                                </div>
                                <span class="demo-name">Camping</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-electronic.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-electronic.jpg') }}"
                                        alt="home-electronic">
                                </div>
                                <span class="demo-name">Electronic Market</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-store.html">
                                <div class="demo-image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/demo/home-pet-store.jpg') }}"
                                        src="{{ asset('front_assets/images/demo/home-pet-store.jpg') }}"
                                        alt="home-pet-store">
                                </div>
                                <span class="demo-name">Pet Store</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- /modalDemo -->

    @include('layouts.front.mobile_header')

    <!-- Categories -->
    {{-- <div class="offcanvas offcanvas-start canvas-filter canvas-categories" id="shopCategories">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <span class="icon-left icon-filter"></span>
                <h5>Categories</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>
            <div class="canvas-body">
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#forWomen"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="forWomen">
                        <img class="avt" src="{{ asset('front_assets/images/avatar/women.jpg') }}"
                            alt="avt">
                        <span class="title">For Women</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div id="forWomen" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/new-in.jpg') }}"
                                        alt="avt"><span class="title-sub text-caption-1 text-secondary">New
                                        in</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/promotion.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Promotion</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/clothing.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Clothing</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/shoes.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Shoes</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/bags.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Bags</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/accessories.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Accessories</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/jewelry.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Jewelry</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#forMen"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="forMen">
                        <img class="avt" src="{{ asset('front_assets/images/avatar/men.jpg') }}"
                            alt="avt">
                        <span class="title">For Men</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div id="forMen" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/men.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Men</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/men.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Men</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#forKid"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="forKid">
                        <img class="avt" src="{{ asset('front_assets/images/avatar/kid.jpg') }}"
                            alt="avt">
                        <span class="title">For Kid</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div id="forKid" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/kid.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Kid</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/kid.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Kid</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wd-facet-categories">
                    <div role="dialog" class="facet-title collapsed" data-bs-target="#accessories"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="accessories">
                        <img class="avt" src="{{ asset('front_assets/images/avatar/accessories.jpg') }}"
                            alt="avt">
                        <span class="title">Accessories</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div id="accessories" class="collapse">
                        <ul class="facet-body">
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/accessories.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Accessories</span></a>
                            </li>
                            <li>
                                <a href="#" class="item link"><img class="avt"
                                        src="{{ asset('front_assets/images/avatar/accessories.jpg') }}"
                                        alt="avt"><span
                                        class="title-sub text-caption-1 text-secondary">Accessories</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /Categories -->

    <!-- quickView -->
    {{-- <div class="modal fullRight fade modal-quick-view" id="quickView">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="tf-quick-view-image">
                    <div class="wrap-quick-view wrapper-scroll-quickview">
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}" src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}" alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">
                            <img class="lazyload"
                                data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">
                            <img class="lazyload"
                                data-src="{{ asset('front_assets/images/products/womens/women-4.jpg') }}"
                                src="{{ asset('front_assets/images/products/womens/women-4.jpg') }}"
                                alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">
                            <img class="lazyload"
                                data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                alt="">
                        </div>
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">
                            <img class="lazyload"
                                data-src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="header">
                        <h5 class="title">Quick View</h5>
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <div class="tf-product-info-name">
                                <div class="text text-btn-uppercase">Clothing</div>
                                <h3 class="name">Stretch Strap Top</h3>
                                <div class="sub">
                                    <div class="tf-product-info-rate">
                                        <div class="list-star">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <div class="text text-caption-1">(134 reviews)</div>
                                    </div>
                                    <div class="tf-product-info-sold">
                                        <i class="icon icon-lightning"></i>
                                        <div class="text text-caption-1">18 sold in last 32 hours</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-desc">
                                <div class="tf-product-info-price">
                                    <h5 class="price-on-sale font-2">$79.99</h5>
                                    <div class="compare-at-price font-2">$98.99</div>
                                    <div class="badges-on-sale text-btn-uppercase">
                                        -25%
                                    </div>
                                </div>
                                <p>The garments labelled as Committed are products that have been produced using
                                    sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="tf-product-info-liveview">
                                    <i class="icon icon-eye"></i>
                                    <p class="text-caption-1"><span class="liveview-count">28</span> people are
                                        viewing this right now</p>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-info-choose-option">
                            <div class="variant-picker-item">
                                <div class="variant-picker-label mb_12">
                                    Colors:<span class="text-title variant-picker-label-value">Beige</span>
                                </div>
                                <div class="variant-picker-values">
                                    <input id="values-beige1" type="radio" name="color2" checked="">
                                    <label
                                        class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview active"
                                        data-slide="0" data-price="79.99" for="values-beige1" data-value="Beige"
                                        data-scroll-quickview="beige">
                                        <span class="btn-checkbox bg-color-beige1"></span>
                                        <span class="tooltip">Beige</span>
                                    </label>
                                    <input id="values-gray1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview"
                                        data-slide="1" data-price="79.99" for="values-gray1" data-value="Gray"
                                        data-scroll-quickview="gray">
                                        <span class="btn-checkbox bg-color-gray"></span>
                                        <span class="tooltip">Gray</span>
                                    </label>
                                    <input id="values-grey1" type="radio" name="color2">
                                    <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview"
                                        data-slide="2" data-price="89.99" for="values-grey1" data-value="Grey"
                                        data-scroll-quickview="grey">
                                        <span class="btn-checkbox bg-color-grey"></span>
                                        <span class="tooltip">Grey</span>
                                    </label>
                                </div>
                            </div>
                            <div class="variant-picker-item">
                                <div class="d-flex justify-content-between mb_12">
                                    <div class="variant-picker-label">
                                        Size:<span class="text-title variant-picker-label-value">L</span>
                                    </div>
                                    <a class="size-guide text-title link show-size-guide">Size Guide</a>
                                </div>
                                <div class="variant-picker-values gap12">
                                    <input type="radio" name="size2" id="values-s1">
                                    <label class="style-text size-btn" for="values-s1" data-value="S">
                                        <span class="text-title">S</span>
                                    </label>
                                    <input type="radio" name="size2" id="values-m1">
                                    <label class="style-text size-btn" for="values-m1" data-value="M">
                                        <span class="text-title">M</span>
                                    </label>
                                    <input type="radio" name="size2" id="values-l1" checked="">
                                    <label class="style-text size-btn" for="values-l1" data-value="L"
                                        data-price="89.99">
                                        <span class="text-title">L</span>
                                    </label>
                                    <input type="radio" name="size2" id="values-xl1">
                                    <label class="style-text size-btn" for="values-xl1" data-value="XL"
                                        data-price="89.99">
                                        <span class="text-title">XL</span>
                                    </label>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="title mb_12">Quantity:</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease">-</span>
                                    <input class="quantity-product" type="text" name="number"
                                        value="1">
                                    <span class="btn-quantity btn-increase">+</span>
                                </div>
                            </div>
                            <div>
                                <div class="tf-product-info-by-btn mb_10">
                                    <a class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 show-shopping-cart"><span>Add
                                            to cart -&nbsp;</span><span
                                            class="tf-qty-price total-price">$79.99</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                        class="box-icon hover-tooltip compare btn-icon-action show-compare">
                                        <span class="icon icon-gitDiff"></span>
                                        <span class="tooltip text-caption-2">Compare</span>
                                    </a>
                                    <a href="javascript:void(0);"
                                        class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip text-caption-2">Wishlist</span>
                                    </a>
                                </div>
                                <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /quickView -->

    <!-- shoppingCart -->
    <div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex flex-column flex-grow-1 h-100">
                    <div class="header">
                        <h5 class="title">You're shopping with a NewZealand company</h5>
                        
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="wrap" id="shoppingCart_html">
                        @auth
                            {!! cart_items_html(auth()->user()->id) !!}
                        @else
                            <div class="container">
                                <div class="row align-items-center justify-content-center py-5">
                                    <div class="col-8">
                                        <div class="tf-page-cart-checkout">
                                            <div class="d-flex gap-10 align-items-center mb_20">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M15.32 3H8.68c-.26 0-.52.11-.7.29L3.29 7.98c-.18.18-.29.44-.29.7v6.63c0 .27.11.52.29.71l4.68 4.68c.19.19.45.3.71.3h6.63c.27 0 .52-.11.71-.29l4.68-4.68c.19-.19.29-.44.29-.71V8.68c0-.27-.11-.52-.29-.71l-4.68-4.68c-.18-.18-.44-.29-.7-.29zM12 17.3c-.72 0-1.3-.58-1.3-1.3s.58-1.3 1.3-1.3 1.3.58 1.3 1.3-.58 1.3-1.3 1.3zm0-4.3c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1s1 .45 1 1v4c0 .55-.45 1-1 1z"></path></svg>
                                                <h5 class="fw-5">Cart is empty</h5>
                                            </div>
                                            <p class="mb_20">You have no items in your cart.</p>
                                            <a href="{{ route('front.shop') }}" class="btn-style-2 mb_20 w-100 radius-3 justify-content-center">
                                                <span class="text text-btn-uppercase">Continue Shopping</span>
                                            </a>
                                            {{-- <p>Have a question? <a href="contact.html" class="text-primary">Contact Support</a></p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /shoppingCart -->

    <!-- quickAdd -->
    <div class="modal fade modal-quick-add" id="global_modal">
        <div id="global_modal_size" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header" >
                    <span class="icon-close icon-close-popup" style="z-index: 999999" data-bs-dismiss="modal"></span>
                </div>
                <div id="gloab_modal_ajax_html">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- /quickAdd -->

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/lazysize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/count-down.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/multiple-modal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/maintwo.js') }}"></script>
    

    <script>
        function login_modal() {
            $('#global_modal_size').removeClass();
            $('#global_modal_size').addClass('modal-dialog modal-dialog-centered modal-xl');
            $('#gloab_modal_ajax_html').html('<div class="d-flex align-items-center justify-content-center p-5"><div class="spinner-border text-dark"></div></div>');
            $.get('{{ route('ajax.login_modal') }}', function(data){
                $('#gloab_modal_ajax_html').html(data);
            });
        }
        function register_modal() {
            $('#global_modal_size').removeClass();
            $('#global_modal_size').addClass('modal-dialog modal-dialog-centered modal-xl');
            $('#gloab_modal_ajax_html').html('<div class="d-flex align-items-center justify-content-center p-5"><div class="spinner-border text-dark"></div></div>');
            $.get('{{ route('ajax.register_modal') }}', function(data){
                $('#gloab_modal_ajax_html').html(data);
            });
        }
        function remove_from_cart(cart_id) {
            $.get('{{ route('ajax.remove_from_cart') }}',{ cart_id:cart_id }, function(data){
                if(data.status == 200){
                    $('#shoppingCart_html').html(data.html);
                    $('.nav-icon-item .count-box').text(data.cart_count);
                    $.notify({ title:'Success', message:data.message }, { type:'success', });
                }else{
                    $.notify({ title:'Error', message:data.message }, { type:'danger', });
                }
            });
        }
    </script>

    @if ($errors->any())
      @foreach ($errors->all() as $error)
        <script>
            $.notify({ title:'Error', message:'{{ $error }}' }, { type:'danger', });
        </script>
        @endforeach
    @endif
    @if (session('error'))
        <script>
            $.notify({ title:'<b>Message: </b>', message:'{{ session('error') }}' }, { type:'danger', });
        </script>
    @endif
    @if (session('success'))
        <script>
            $.notify({ title:'<b>Message: </b>', message:'{{ session('success') }}' }, { type:'success', });
        </script>
    @endif

    @yield('scripts')
</body>

</html>
