@forelse ($products as $product)
    @include('front.product_card')
@empty
    <div class="alert alert-danger">No Products Found</div>
@endforelse

@if ($products->hasPages())
<script>
    $('#load_more_btn').show();
    $('#load_more_btn a').attr('onclick', 'get_product_filter('+{{ $products->currentPage() + 1 }}+')');
</script>
@endif