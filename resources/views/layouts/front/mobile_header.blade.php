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
                        @php
                            $categories = \App\Models\Category::orderBy('name')->get();
                        @endphp
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-three" class="mb-menu-link collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dropdown-menu-three">
                                <span>Products</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-three" class="collapse " style="">
                                <ul class="sub-nav-menu">
                                    <li>
                                        @foreach($categories as $category)
                                        <a href="#category-{{ $category->id }}" class="sub-nav-link collapsed" data-bs-toggle="collapse"
                                            aria-expanded="false"
                                            aria-controls="category-{{ $category->id }}">
                                                <span>{{ $category->name }}</span>
                                                <span class="btn-open-sub"></span>
                                            </a>
                                        
                                        <div id="category-{{ $category->id }}" class="collapse" >
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                @forelse($category->products as $product)
                                                    <li>
                                                        <a href="{{ route('front.product', $product->slug) }}"
                                                        class="sub-nav-link">
                                                            {{ $product->name }}
                                                        </a>
                                                    </li>
                                                @empty
                                                    <li>
                                                        <span class="text-muted">No products available</span>
                                                    </li>
                                                @endforelse
                                            </ul>
                                        </div>
                                        @endforeach
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="{{ route('front.blog') }}" class="mb-menu-link" >
                                <span>Blog</span>
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
                        <p class="text-caption-1">Admin Block, Mega Food Park.</p>
                    </div>
                    <ul class="mb-info">
                        <li>
                            <i class="icon icon-mail"></i>
                            <p>ecom@hexhive.in</p>
                        </li>
                        <li>
                            <i class="icon icon-phone"></i>
                            <p>+91 95016 26125</p>
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