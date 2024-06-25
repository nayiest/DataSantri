{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4"> 
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

 --}}

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register - Mazer Admin Dashboard</title>
     
     <link rel="shortcut icon" href="{{ asset('template/dist/assets/compiled/svg/favicon.svg') }}" type="image/x-icon">
     <link rel="stylesheet" href="{{ asset('template/dist/assets/compiled/css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('template/dist/assets/compiled/css/app-dark.css') }}">
     <link rel="stylesheet" href="{{ asset('template/dist/assets/compiled/css/auth.css') }}">
     <style>
         #auth-right {
             height: 100%;
             display: flex;
             justify-content: center;
             align-items: center;
         }
     
         .flip-card {
             width: 200px;
             height: 200px;
             perspective: 1000px; /* memberikan perspektif untuk efek 3D */
         }
     
         .flip-card-inner {
             position: relative;
             width: 100%;
             height: 100%;
             text-align: center;
             transition: transform 0.6s;
             transform-style: preserve-3d;
         }
     
         .flip-card:hover .flip-card-inner {
             transform: rotateY(180deg);
         }
     
         .flip-card-front, .flip-card-back {
             position: absolute;
             width: 100%;
             height: 100%;
             backface-visibility: hidden; /* menghindari double-sided efek */
         }
     
         .flip-card-front {
             color: black;
         }
     
         .flip-card-back {
             color: white;
             transform: rotateY(180deg);
         }
     
         .flip-card h1 {
             font-size: 15px;
             line-height: 200px;
             margin: 0;
             color: white;
         }
     
         .flip-card img {
             max-width: 100%;
             max-height: 100%;
         }
     </style>
     
     
     
 </head>
 
 <body>
     <script src="{{ asset('template/dist/assets/static/js/initTheme.js') }}"></script>
     <div id="auth">
         
         <div class="row h-100">
             <div class="col-lg-5 col-12">
                 <div id="auth-left">
                     <div class="auth-logo">
                         <a href="index.html"><img src="{{ asset('template/dist/assets/compiled/svg/logo.svg') }}" alt="Logo"></a>
                     </div>
                     <h1 class="auth-title">Sign Up</h1>
                     <p class="auth-subtitle mb-5">Input your data to register to our website.</p>
 
                     <form method="POST" action="{{ route('santri') }}">
                        @method('GET') 
                        @csrf
                         <div class="form-group position-relative has-icon-left mb-4">
                             <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="username">
                             <div class="form-control-icon">
                                 <i class="bi bi-envelope"></i>
                             </div>
                         </div>
                         <div class="form-group position-relative has-icon-left mb-4">
                             <input type="text" class="form-control form-control-xl" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                             <div class="form-control-icon">
                                 <i class="bi bi-person"></i>
                             </div>
                         </div>
                         <div class="form-group position-relative has-icon-left mb-4">
                             <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required autocomplete="new-password">
                             <div class="form-control-icon">
                                 <i class="bi bi-shield-lock"></i>
                             </div>
                         </div>
                         <div class="form-group position-relative has-icon-left mb-4">
                             <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                             <div class="form-control-icon">
                                 <i class="bi bi-shield-lock"></i>
                             </div>
                         </div>
                         <x-input-error :messages="$errors->get('email')" class="mt-2" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                         <x-input-error :messages="$errors->get('password')" class="mt-2" />
                         <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                         <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                     </form>
                     <div class="text-center mt-5 text-lg fs-4">
                         <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}" class="font-bold">Log in</a>.</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-7 d-none d-lg-block">
                 <div id="auth-right">
                     <div class="flip-card" id="flip-card">
                         <div class="flip-card-inner">
                             <div class="flip-card-front">
                                 <img src="{{ asset('template/dist/assets/images/logo.png') }}" alt="Logo">
                             </div>
                             <div class="flip-card-back">
                                 <h1>Indonesia Berkah</h1>
                             </div>
                         </div>
                     </div>
                 </div>
                 
                 
                 
             </div>
         </div>
     </div>
 
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const flipCard = document.getElementById("flip-card");
             const flipCardInner = flipCard.querySelector(".flip-card-inner");
     
             flipCard.addEventListener("click", function() {
                 flipCardInner.classList.toggle("is-flipped");
             });
         });
     </script>
     
     
     
 </body>
 
 </html>
 
    {{-- <script src="{{ asset('template/dist/')}}/assets/static/js/initTheme.js"></script>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="assets/compiled/svg/logo.svg" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Sign Up</h1>
            <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

            <form action="index.html">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Confirm Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Already have an account? <a href="auth-login.html" class="font-bold">Log
                        in</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div> --}}

