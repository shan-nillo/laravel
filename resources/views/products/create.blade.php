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
                        for="company"
                        >Company Name</label
                    >

                    <input
                        type="text"
                        name="company"
                        value="{{old('company')}}"
                    />

                    @error('company')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        for="company"
                        >Company Name</label
                    >
                    
                    <input
                        type="text"
                        name="company"
                        value="{{old('company')}}"
                    />

                    @error('company')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        for="company"
                        >Company Name</label
                    >
                    
                    <input
                        type="text"
                        name="company"
                        value="{{old('company')}}"
                    />

                    @error('company')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        for="company"
                        >Company Name</label
                    >
                    
                    <input
                        type="text"
                        name="company"
                        value="{{old('company')}}"
                    />

                    @error('company')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="data">
                    <label
                        for="company"
                        >Company Name</label
                    >
                    
                    <input
                        type="text"
                        name="company"
                        value="{{old('company')}}"
                    />

                    @error('company')
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