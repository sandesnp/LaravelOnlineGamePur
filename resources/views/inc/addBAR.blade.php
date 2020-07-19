
{{-- AJAX WILL SEE THIS AND REMEMBER/PRINT THIS ON THE DESIGNATED AKA WITH ID "SHOW" ELEMENT of the destination page. --}}
<datalist id="productName">
        @foreach($productser as $products)  
        <option value="{{$products->product_name}}">      
        @endforeach
</datalist>

