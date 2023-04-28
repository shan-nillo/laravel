<x-layout>
        <nav class = "navbar">
          <div class = "container">
            <a href = "/" class = "navbar-brand">Art.Design</a>
            <div class = "navbar-nav">
              @auth
                    <form class="inline" method="POST" action="/logout">
                        <a href = "">Welcome {{auth()->user()->name}}!</a>
                        <a href = "/">home</a>
                        <a href = "/product/create">add</a>
                    
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-ddor-closed"></i>logout
                        </button>
                  </form>
              @else
                  <a href = "/register">sign up</a>
                  <a href = "">login</a>
              @endauth
            </div>
          </div>
        </nav>
    <!-- about -->
    <section class = "about" id = "about">
        <div class = "container">
            <div class = "about-content">
                <div>
                    <img
                        src="{{ $product->image ? asset('storage/'.$product->image) : asset('/images/coding.png') }}"
                        alt=""
                    />
                </div>

                <div class = "about-text">
                    <div class = "title">
                        <h2>{{ $product['name']}}</h2>
                        <p>₱ {{ $product['price']}}</p>
                        <p>Stock: {{ $product['unit']}}</p>
                    </div>

                    <p>{{ $product['description']}}</p>

                    @auth
                        <div class = "title">
                            <a
                                href="/products/{{$product->id}}/edit"
                                >Edit Job</a
                            >

                            <form method="POST" action="/products/{{$product->id}}">
                                @csrf
                                @method('DELETE')
                                <button>
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </section>
    <!-- end of about -->
</x-layout>