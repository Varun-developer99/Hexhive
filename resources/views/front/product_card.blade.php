<div class="card-product card-product-size wow fadeInUp" data-wow-delay="0s">
    <div class="card-product-wrapper">
        <!-- Discount Badge -->
        @if($product->sale_price < $product->mrp_price)
            @php
                $discount = round((($product->mrp_price - $product->sale_price) / $product->mrp_price) * 100);
            @endphp
            <div class="discount-badge">{{ $discount }}% OFF</div>
        @endif
        
        <a href="{{ route('front.product', $product->slug) }}" class="product-img">
            <img class="lazyload img-product" data-src="{{ $product->thumb_url }}" src="{{ $product->thumb_url }}" alt="image-product">
            <img class="lazyload img-hover" data-src="{{ $product->thumb_url }}" src="{{ $product->thumb_url }}" alt="image-product">
        </a>
        <div class="list-btn-main">
            <a href="#quickView" data-bs-toggle="modal" class="btn-main-product" onclick="quick_view_product({{ $product->id }}, 'Single', 'Add to cart')">Quick View</a>
        </div> 
    </div>
    <div class="card-product-info">
        <div class="product-meta">
            @if(isset($product->brand) && $product->brand)
                <span class="brand-name " title="{{ $product->brand->name ?? $product->brand }}">{{ Str::limit(ucwords(strtolower($product->brand->name ?? $product->brand)), 10, '...') }}</span>
            @endif
            @if(isset($product->category) && $product->category)
                @if(isset($product->brand) && $product->brand)
                    <span class="separator">•</span>
                @endif
                <span class="category-name" title="{{ $product->category->name ?? $product->category }}">{{ Str::limit(ucwords(strtolower($product->category->name ?? $product->category)), 10, '...') }}</span>
            @endif
        </div>
        <a href="{{ route('front.product', ($product->slug ?? '#')) }}" class="title link">{{ $product->name }}</a>
        
        <!-- Price and Add Button in Same Line -->
        <div class="price-action-row">
            <div class="price-wrapper">
                <span class="price-1">₹{{ $product->sale_price }}</span>
                <del class="original-price">₹{{ $product->mrp_price }}</del>
                <p class="save-text">You save ₹{{ $product->mrp_price - $product->sale_price }}</p>
            </div>
            @auth
            <a href="#shoppingCart" class="btn-add-cart" data-bs-toggle="modal" onclick="add_to_cart({{ $product->id }}, 'Single', 'Add to cart')">
                <span class="plus-icon">+</span> Add
            </a>
            @else
                <a href="#" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="login_modal()" class="btn-add-cart">
                    <span class="plus-icon">+</span> Add
                </a>
            @endauth
        </div>
    </div>
</div>