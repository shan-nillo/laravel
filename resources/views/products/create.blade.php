<x-layout>
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
      <header></header>
      
      <div class="center">
         <div class="login-container">
            <div class="text">
                Create New Posting
            </div>

            <form method="POST" action="/product" enctype="multipart/form-data">
                @csrf
                <div class="data">
                    <label
                        for="name"
                        >Product Name</label
                    >

                    <input
                        type="text"
                        name="name"
                        placeholder="Example: Framed illustration, watercolor, brush"
                        value="{{old('name')}}"
                    />

                    @error('name')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        for="description"
                        >Description</label
                    >
                    
                    <input
                        type="text"
                        name="description"
                        placeholder="Include size, color, etc."
                        value="{{old('description')}}"
                    />

                    @error('description')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        >Image</label
                    >
                    
                    <input
                        type="file"
                        name="image"
                    />

                    @error('image')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        for="price"
                        >Product Price</label
                    >
                    
                    <input
                        type="number"
                        min="1"
                        name="price"
                        value="{{old('price')}}"
                    />

                    @error('price')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        for="Unit"
                        >Stock</label
                    >
                    
                    <input
                        type="number"
                        name="unit"
                        value="{{old('unit')}}"
                    />

                    @error('unit')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

               <div class="btn">
                    <div class="inner"></div>
                    <button type="submit">Post</button>
               </div>
               
            </form>
         </div>
    </div>
</x-layout>