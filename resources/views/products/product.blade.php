<x-layout>
        <nav class = "navbar">
          <div class = "container">
            <a href = "/" class = "navbar-brand">Art.Design</a>
            <div class = "navbar-nav">
              @auth
                  <a href = "">Welcome {{auth()->user()->name}}!</a>
                  <a href = "">home</a>
                  <a href = "">add</a>
                  <a href = "">about</a>
                  <form class="inline" method="POST" action="/logout">
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
                        src="{{ $product->logo ? asset('storage/'.$product->logo) : asset('/images/coding.png') }}"
                        alt=""
                    />
                </div>

                <div class = "about-text">
                    <div class = "title">
                        <h2>Catherine Doe</h2>
                        <p>art & design is my passion</p>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id totam voluptatem saepe eius ipsum nam provident sapiente, natus et vel eligendi laboriosam odit eos temporibus impedit veritatis ut, illo deserunt illum voluptate quis beatae quod. Necessitatibus provident dicta consectetur labore!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corrupti natus, eos quia recusandae voluptatem veniam modi officiis minima provident rem sint porro fuga quos tempora ea suscipit vero velit sed laudantium eaque necessitatibus maxime!</p>

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