<x-layout>
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
      <header></header>

      <div class="center">
         <div class="login-container">
            <a href="/" for="show" class="close-btn fas fa-times" title="close"></a>
            <div class="text">
               Login
            </div>
            <form  method="POST" action="/users/authenticate">
               @csrf
               <div class="data">
                  <label>Email</label>
                  <input
                     type="email"
                     name="email"
                     value="{{ old('email')}}"
                  />
                  @error('email')
                     <p class="text-red-500 text-xs mt-1">
                           {{ $message }}
                     </p>
                  @enderror
               </div>

               <div class="data">
                  <label
                     for="password"
                  >
                     Password
                  </label>
                  <input
                     type="password"
                     name="password"
                     value="{{ old('password')}}"
                  />
                  @error('password')
                     <p>
                           {{ $message }}
                     </p>
                  @enderror
               </div>

               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Login</button>
               </div>

               <div class="signup-link">
                  Don't have an account? <a href="/register">Sign up</a>
               </div>
               
            </form>
         </div>
      </div>
</x-layout>