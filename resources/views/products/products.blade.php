<x-layout>
    <!-- header -->
    <header>
      <nav class = "navbar">
        <div class = "container">
          <a href = "/" class = "navbar-brand">Designsby.Miru</a>
          <div class = "navbar-nav">
            @auth
              <form class="inline" method="POST" action="/logout">
                  <a href = "">Welcome {{auth()->user()->name}} !</a>
                  <a href = "/">home</a>
                  <a href="/product/create">add</a>
              
                  @csrf
                  <button type="submit">
                    logout
                  </button>
              </form>
            @else
                <a href = "/register">sign up</a>
                <a href = "/login">login</a>
            @endauth
          </div>
        </div>
      </nav>
      <div class = "banner">
        <div class = "container">
          <h1 class = "banner-title">
            <span>Art.</span> Shop
          </h1>
          <p>everything for your aesthetic needs.</p>
          <form>
            <input type = "text" class = "search-input" placeholder="find your stuffs . . .">
            <button type = "submit" class = "search-btn">
              <i class = "fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </header>
    <!-- end of header -->

    <!-- design -->
    <section class = "design" id = "design">
        <div class = "container">
            <div class = "title">
                <h2>Recent Arts & Designs</h2>
                <p>new release crafts and essentials</p>
            </div>
    
            <div class = "design-content">
                @unless (count($products) ==0)
                    @foreach ($products as $product)
                        
                        <x-product-card :product="$product"/>

                    @endforeach
                @else
                    <h2>No Record Found</h2>
                @endunless
            </div>
        </div>
    </section>
      <!-- end of design -->
</x-layout>