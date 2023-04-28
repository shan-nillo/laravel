<x-layout>
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
      <header></header>
      
      <div class="center">
         <div class="login-container">
            <div class="text">
               Edit Product
            </div>

            <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="data">
                    <label for="company">Product Name</label>
                    <input
                        type="text"
                        name="name"
                        value="{{$product->name}}"
                    />

                    @error('name')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror   
                </div>

                <div class="data">
                    <label for="title">Description</label>
                    <input
                        type="text"
                        name="description"
                        value="{{$product->description}}"
                    />

                    @error('description')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror   
                </div>

                <div class="data">
                    <label for="image">Image</label>
                    <input
                        type="file"
                        name="image"
                        value="{{$product->image}}"
                    />
                </div>

                <div class="data">
                    <label for="price">Price</label>
                    <input
                        type="text"
                        name="price"
                        value="{{$product->price}}"
                    />

                    @error('price')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror   
                </div>

                <div class="data">
                    <label for="unit">Stock</label>
                    <input
                        type="text"
                        name="unit"
                        value="{{$product->unit}}"
                    />

                    @error('unit')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror   
                </div>

               <div class="btn">
                    <div class="inner"></div>
                    <button type="submit">Update</button>
               </div>
               
            </form>
         </div>
    </div>
</x-layout>