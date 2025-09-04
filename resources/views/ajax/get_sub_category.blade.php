<option value="" disabled selected>Select Sub Category...</option>
@foreach ($sub_categories as $sub_category)
    <option value="{{ $sub_category->id }}" {{ ($product->sub_category_id ?? 0) == $sub_category->id ? 'selected':'' }}>{{ $sub_category->name }}</option>
@endforeach