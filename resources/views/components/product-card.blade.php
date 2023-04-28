@props(['product'])

<x-card>
    <!-- item -->
    <div class = "design-item">
        <div class = "design-img">
            <img
                src="{{ $product->image ? asset('storage/'.$product->image) : asset('/images/coding.png') }}"
                alt=""
            />
            <span><i class = "fa fa-shopping-cart"></i> {{ $product['unit']}}</span>
            <span>₱ {{ $product['price'] }}</span>
        </div>
        <div class = "design-title">
            <a href="/product/{{ $product->id }}" >{{ $product['name'] }}</a>
            <p href=""> {{ $product['description'] }}</p>
        </div>
    </div>
    <!-- end of item -->
</x-card>