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
                    <label for="company">Company Name</label>
                    <input
                        type="text"
                        name="company"
                        value="{{$product->company}}"
                    />

                    @error('company')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror   
                </div>

                <div class="data">
                    <label for="title">Job Title</label>
                    <input
                        type="text"
                        name="title"
                        value="{{$product->title}}"
                    />

                    @error('title')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror   
                </div>

                <div class="data">
                    <label for="Logo">Company Logo</label>
                    <input
                        type="file"
                        name="logo"
                        value="{{$product->logo}}"
                    />
                </div>

                <div class="data">
                    <label for="company">Company Name</label>
                    <input
                        type="text"
                        name="company"
                        value="{{$product->company}}"
                    />

                    @error('company')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror   
                </div>

                <div class="data">
                    <label for="title">Job Title</label>
                    <input
                        type="text"
                        name="title"
                        value="{{$product->title}}"
                    />

                    @error('title')
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