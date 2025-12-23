<!-- card product 1 -->

{{-- @dd($item); --}}
<div class="card-product grid" data-availability="Out of stock" data-brand="adidas">
    <div class="card-product-wrapper">
        <a href="{{ route('front.product', $product->slug) }}" class="product-img">
            {{-- <img class="img-product ls-is-cached lazyloaded"
                    data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                    src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}" alt="image-product">
                <img class="img-hover ls-is-cached lazyloaded"
                    data-src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                    src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}" alt="image-product"> --}}

            @if (($product ?? '') != '')
                @if (count($product->getMedia('main_img')) > 0)
                    <img class="img-product ls-is-cached lazyloaded" data-src="{{ $product->getMedia('main_img')->first()->getURL() ?? '#' }}" src="{{ $product->getMedia('main_img')->first()->getURL() ?? '#' }}" alt="image-product">
                @endif
                @if (count($product->getMedia('gallery_img')) > 0)
                    <img class="img-hover ls-is-cached lazyloaded" data-src="{{ $product->getMedia('gallery_img')->first()->getURL() ?? '#' }}" src="{{ $product->getMedia('gallery_img')->first()->getURL() ?? '#' }}" alt="image-product">
                @else
                    @if (count($product->getMedia('main_img')) > 0)
                    <img class="img-hover ls-is-cached lazyloaded" data-src="{{ $product->getMedia('main_img')->first()->getURL() ?? '#' }}" src="{{ $product->getMedia('main_img')->first()->getURL() ?? '#' }}" alt="image-product">
                    @endif
                @endif
            @endif
        </a>
        {{-- <div class="list-product-btn">
            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                <span class="icon icon-heart"></span>
                <span class="tooltip">Wishlist</span>
            </a>
            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                class="box-icon compare btn-icon-action">
                <span class="icon icon-gitDiff"></span>
                <span class="tooltip">Compare</span>
            </a>
            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                <span class="icon icon-eye"></span>
                <span class="tooltip">Quick View</span>
            </a>
        </div> --}}
        {{-- <div class="list-btn-main">
            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
        </div> --}}
    </div>
    <div class="card-product-info">
        <a href="{{ route('front.product', $product->slug) }}" class="title link">{{ $product->name }}</a>
        <div class="price">
            {{-- @if($product->mrp_price ?? 0)
            <span class="old-price">{{ price($product->mrp_price ?? 0) }}</span> 
            @endif --}}
            <span class="current-price">{{ price($product->mrp_price ?? 0) }}</span>
        </div>
    </div>
</div>



<!-- card product 1 -->
