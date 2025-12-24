<footer id="footer" class="footer">
    <div class="footer-wrap border-0">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-infor">
                            <div class="footer-logo">
                                <a href="/">
                                    <img style="max-width:60%; width:100%;" src="{{ asset(env('APP_LOGO_DARK')) }}" alt="">
                                </a>
                                <p class="mb-0 mt-3">Proudly NewZealand Owned & Operated</p>
                                <p class="mb-0">All prices are in NewZealand Dollars ( )</p>
                            </div>
                            <div class="footer-address">
                                <p>70 Tatariki Street, Rosehill, Auckland 2113, NewZealand</p>
                                <a href="https://maps.app.goo.gl/MyWBbXaCWYF5Yt936" class="tf-btn-default fw-6" target="_blank">GET DIRECTION<i class="icon-arrowUpRight"></i></a>
                            </div>
                            <ul class="footer-info">
                                <li>
                                    <i class="icon-mail"></i>
                                    <p>sales@hexhive.co.nz</p>
                                </li>
                                <li>
                                    <i class="icon-phone"></i>
                                    <p>(+64) 0273 999 911</p>
                                </li>
                            </ul>
                            {{-- <ul class="tf-social-icon">
                                <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                <li><a href="#" class="social-twiter"><i class="icon icon-x"></i></a></li>
                                <li><a href="#" class="social-instagram"><i class="icon icon-instagram"></i></a></li>
                                <li><a href="#" class="social-tiktok"><i class="icon icon-tiktok"></i></a></li>
                                <li><a href="#" class="social-amazon"><i class="icon icon-amazon"></i></a></li>
                                <li><a href="#" class="social-pinterest"><i class="icon icon-pinterest"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-menu">
                            <div class="footer-col-block">
                                <div class="footer-heading text-button footer-heading-mobile">
                                    Information
                                </div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li class="text-caption-1">
                                            <a href="{{ route('front.about_us') }}" class="footer-menu_item">About Us</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="{{ route('front.contact_us') }}" class="footer-menu_item">Contact Us</a>
                                        </li>
                                        {{-- <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Size Guide</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="contact.html" class="footer-menu_item">Contact us</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Career</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="my-account.html" class="footer-menu_item">My Account</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col-block">
                                <div class="footer-heading text-button footer-heading-mobile">
                                    Customer Services
                                </div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        @foreach (policy_pages() as $policy_page)
                                        <li class="text-caption-1">
                                            <a href="{{ route('front.policy_page.show', $policy_page->slug) }}" class="footer-menu_item">{{ $policy_page->title }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-col-block">
                            <div class="footer-heading text-button footer-heading-mobile">
                                Newsletter
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-newsletter">
                                    <p class="text-caption-1">Sign up for our newsletter and get 10% off your first purchase</p>
                                    <div class="sib-form">
                                        <div id="sib-form-container" class="sib-form-container">
                                            <div id="error-message" class="sib-form-message-panel">
                                                <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                                    <span class="sib-form-message-panel__inner-text">
                                                        Your subscription could not be saved. Please try again.
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="success-message" class="sib-form-message-panel">
                                                <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                                    <span class="sib-form-message-panel__inner-text">
                                                        Your subscription has been successful.
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="sib-container" class="sib-container--large sib-container--vertical">
                                                <form method="POST" class="form-newsletter" action="{{ route('front.newsletter.insert') }}">
                                                    @csrf
                                                    <div>
                                                        <div class="sib-form-block">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="sib-form-block">
                                                            <div class="sib-text-form-block">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="sib-input sib-form-block">
                                                            <div class="form__entry entry_block">
                                                                <div class="form__label-row ">
                                                                    <label class="entry__label" for="EMAIL">
                                                                    </label>
                                                                    <div class="entry__field">
                                                                        <input class="input radius-60" type="text" id="EMAIL" name="email" autocomplete="off" placeholder="Enter your e-mail..." data-required="true" required="">
                                                                    </div>
                                                                </div>
                                                                <label class="entry__error entry__error--primary"></label>
                                                                <label class="entry__specification">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="sib-optin sib-form-block">
                                                            <div class="form__entry entry_mcq">
                                                                <div class="form__label-row ">
                                                                    <div class="entry__choice">
                                                                        <label>
                                                                            <input type="hidden" class="input_replaced" value="0" id="OPT_IN" name="id">
                                                                            <span class="checkbox checkbox_tick_positive"></span>
                                                                            <span>
                                                                                <p></p>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <label class="entry__error entry__error--primary">
                                                                </label>
                                                                <label class="entry__specification">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="sib-form-block">
                                                            <button class="sib-form-block__button sib-form-block__button-with-loader subscribe-button radius-60" type="submit">
                                                                <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewbox="0 0 512 512">
                                                                    <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z"></path>
                                                                </svg>
                                                                <i class="icon icon-arrowUpRight"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="email_address_check" value="" class="input--hidden">
                                                    <input type="hidden" name="locale" value="en">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-cart-checkbox">
                                        <div class="tf-checkbox-wrapp">
                                            <input class="" type="checkbox" id="footer-Form_agree" name="agree_checkbox" value="1" required>
                                            <div>
                                                <i class="icon-check"></i>
                                            </div>
                                        </div>
                                        <label class="text-caption-1" for="footer-Form_agree">
                                            By clicking subcribe, you agree to the <a class="fw-6 link" href="{{ url('') }}/p/terms-and-conditions">Terms of Service</a> and <a class="fw-6 link" href="{{ url('') }}/p/privacy-policy">Privacy Policy</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-wrap">
                            <div class="left">
                                <p class="text-caption-1">©{{ date("Y") }} Hexhive. All Rights Reserved.Made with ❤️ by <a href="https://digitaldarzee.com/" target="_blank" rel="noopener noreferrer">DigitalDarzee</a></p>
                            </div>
                            <div class="tf-payment">
                                <p class="text-caption-1">Payment:</p>
                                <ul>
                                    <li>
                                        <img src="{{ asset('front_assets/images/payment/img-1.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('front_assets/images/payment/img-2.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('front_assets/images/payment/img-3.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('front_assets/images/payment/img-4.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('front_assets/images/payment/img-5.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('front_assets/images/payment/img-6.png') }}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
