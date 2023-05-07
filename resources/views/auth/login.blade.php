<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    

    {{-- <section>
        <div class="logo">Expedia</div>
    </section>
    <section class="login__card" style="margin-top: 65px;">
        <div class="card__body">
            <form action="" method="get" style="left:20%; right:20%;">
                <div class="form__group">
                    <!-- <label for="email">Email</label> -->
                    <input type="text" name="" placeholder="example@gmail.com" id="" class="form__contro"><br>
                    <!-- <label for="paasword">Password</label> -->
                    <input type="password" name="" id="" class="form__contro">
                </div>
                <span class="forget__password">
                    <a href="#" class="forget">Forget Password?</a>
                </span>
                <div class="login__btn">
                   <!-- HTML !-->
                    <button class="button-31" role="button">Login</button>
                </div>
                <span class="google">
                    <button class="loginwithGoogle">Login with Google</button>
                </span>
                <p class="reg">No Account? <a href="#">Register</a></p>
            </form>
            <span id="support" class="support">
                <button id="support__btn" class="support__btn">Support <i class="bi bi-headphone"></i></button>
            </span>
        </div>
    </section>
    
    <nav class="mobile-bottom-nav">
        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <div class="mobile-bottom-nav__item-content">
                <i class="material-icons">home</i>
                one
            </div>		
        </div>
        <div class="mobile-bottom-nav__item">		
            <div class="mobile-bottom-nav__item-content">
                <i class="material-icons">mail</i>
                two
            </div>
        </div>
        <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
                <i class="material-icons">person</i>
                three
            </div>		
        </div>
        
        <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
                <i class="material-icons">phone</i>
                four
            </div>		
        </div>
    </nav> --}}

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
