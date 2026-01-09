<footer id="footer" class="footer">
    <div class="footer-wrap border-0">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer-infor">
                            <div class="footer-logo">
                                <a href="/">
                                    <img style="max-width:60%; width:100%;" src="{{ asset(env('APP_LOGO_DARK')) }}" alt="">
                                </a>
                                <p class="mb-0 mt-3">At HEXHIVE, we carry forward a legacy of excellence built over four decades in the production</p>
                                
                            </div>
                            <div class="footer-address">
                                <p>Admin Block, Mega Food Park.</p>
                            </div>
                            <ul class="footer-info">
                                <li>
                                    <i class="icon-mail"></i>
                                    <p>ecom@hexhive.in </p>
                                </li>
                                <li>
                                    <i class="icon-phone"></i>
                                    <p>+91 95016 26125</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
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
                                        <li class="text-caption-1">
                                            <a href="{{ route('front.policy_page.show', 'privacy-policy') }}" class="footer-menu_item">Privacy Policy</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="{{ route('front.policy_page.show', 'terms-conditions') }}" class="footer-menu_item">Terms and Conditions</a>
                                        </li>     
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col-block d-none">
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
                                Contact Us
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-contact-form">
                                    <div class="sib-form">
                                        <div id="sib-form-container" class="sib-form-container">
                                            <div id="sib-container" class="sib-container--large sib-container--vertical">
                                                <form method="POST" class="" action="{{ route('front.contact.insert') }}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="0">
                                                    <div class="wrap">
                                                        <div class="cols">
                                                            <div class="mb_8">
                                                                <input type="text" placeholder="Your Name*" name="name" id="name" tabindex="2" value="" aria-required="true" required="">
                                                            </div>
                                                            <div class="mb_8">
                                                                <input type="email" placeholder="Your Email*" name="email" id="email" tabindex="2" value="" aria-required="true" required="">
                                                            </div>
                                                        </div>
                                                        <div class="cols">
                                                            <div class="mb_8">
                                                                <input type="text" placeholder="Your Phone Number*" name="phone" id="phone" tabindex="2" value="" aria-required="true" required="">
                                                            </div>
                                                            <div class="mb_8">
                                                                <input type="text" placeholder="Your Subject*" name="subject" id="subject" tabindex="2" value="" aria-required="true" required="">
                                                            </div>
                                                        </div>
                                                        <fieldset>
                                                            <textarea name="message" id="message" rows="4" placeholder="Your Message*" tabindex="2" aria-required="true" required=""></textarea>
                                                        </fieldset>
                                                    </div>
                                                    
                                                    <button class=" btn-fill" type="submit">
                                                        <span class="text text-button">Send message</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-cart-checkbox d-none">
                                        <div class="tf-checkbox-wrapp">
                                            <input class="" type="checkbox" id="footer-Form_agree" name="agree_checkbox" value="1" required>
                                            <div>
                                                <i class="icon-check"></i>
                                            </div>
                                        </div>
                                        <label class="text-caption-1" for="footer-Form_agree">
                                            By clicking subcribe, you agree to the <a class="fw-6 link" href="#">Terms of Service</a> and <a class="fw-6 link" href="{{ route('front.policy_page.show', 'privacy-policy') }}">Privacy Policy</a>.
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
                                <p class="text-caption-1">©{{ date("Y") }} HEXHIVE FOODS AND BEVERAGES PRIVATE LIMITED. All Rights Reserved.Made with ❤️ by <a href="https://digitaldarzee.com/" target="_blank" rel="noopener noreferrer">DigitalDarzee</a></p>
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
