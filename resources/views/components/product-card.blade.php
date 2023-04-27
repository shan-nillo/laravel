@props(['product'])

<x-card>
    <!-- item -->
    <div class = "design-item">
        <div class = "design-img">
            <img
                src="{{ $product->logo ? asset('storage/'.$product->logo) : asset('/images/coding.png') }}"
                alt=""
            />
            <span><i class = "fa fa-shopping-cart"></i> 22</span>
            <span>Art & Design</span>
        </div>
        <div class = "design-title">
            <a href="/product/{{ $product->id }}" >{{ $product['title'] }}</a>
            <a href=""> {{ $product['company'] }}</a>
        </div>
    </div>
    <!-- end of item -->
</x-card>