  <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <div class="mb-content-top">
                    <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                        <li class="nav-mb-item active">
                            <a href="{{ url('/') }}" class="mb-menu-link">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-mb-item">
                            <a href="{{ route('front.shop') }}" class="mb-menu-link" >
                                <span>Shop</span>
                            </a>
                        </li>
                        <li class="nav-mb-item">
                            <a href="{{ route('front.shop') }}" class="mb-menu-link" >
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="nav-mb-item">
                            <a href="{{ route('front.contact_us') }}" class="mb-menu-link" >
                                <span>Contact us</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-other-content">
                   
                    <div class="mb-notice">
                        <a href="contact.html" class="text-need">Need Help?</a>
                    </div>
                    <div class="mb-contact">
                        <p class="text-caption-1">183 A Rajguru Nagar , Ludhiana</p>
                    </div>
                    <ul class="mb-info">
                        <li>
                            <i class="icon icon-mail"></i>
                            <p>ksk@hexhive.in</p>
                        </li>
                        <li>
                            <i class="icon icon-phone"></i>
                            <p>+91 9058800025</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <div class="bottom-bar-language">
                    {{-- <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option selected="" data-thumbnail="{{ asset('front_assets/images/country/us.svg') }}">USD</option>
                            <option data-thumbnail="{{ asset('front_assets/images/country/vn.svg') }}">VND</option>
                        </select>
                    </div> --}}
                    {{-- <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>Hindi</option>
                        </select>
                    </div> --}}
                </div>
            </div>
        </div>       
    </div>