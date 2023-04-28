<x-layout>
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
      <header></header>

      <div class="center">
         <div class="login-container">
            <a href="/" for="show" class="close-btn fas fa-times" title="close"></a>
            <div class="text">
               Sign up
            </div>
            <form action="/users" method="Post">
               @csrf
               <div class="data">
                  <label>Name</label>
                  <input
                     type="text"
                     name="name"
                     value="{{ old('name')}}"
                  />
                  @error('name')
                     <p class="text-red-500 text-xs mt-1">
                           {{ $message }}
                     </p>
                  @enderror
               </div>

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

               <div class="data">
                  <label
                     for="password_confirmation"
                  >
                     Confirm Password
                  </label>
                  <input
                     type="password"
                     name="password_confirmation"
                     value="{{ old('password')}}"
                  />
                  @error('password_confirmation')
                     <p>
                           {{ $message }}
                     </p>
                  @enderror
               </div>

               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">sign up</button>
               </div>

               <div class="signup-link">
                  Already have an account? <a href="#">Login</a>
               </div>
               
            </form>
         </div>
      </div>
</x-layout>