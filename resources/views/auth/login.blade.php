<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="index.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="wrapper">

      <!-- Integration of the provided PHP code -->
      <x-guest-layout>
        <x-authentication-card>
          @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
              </div>
          @endif
          <div class="login-container">
              <form class="login-form" method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group">
                      <x-label for="email" value="{{ __('Email') }}" />
                      <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                  </div>

                  <div class="form-group">
                      <x-label for="password" value="{{ __('Password') }}" />
                      <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                  </div>

                  <div  class="block mt-4">
                      <label for="remember_me" class="flex items-center">
                          <x-checkbox id="remember_me" name="remember" />
                          <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                      </label>
                  </div>

                  <div class="flex items-center justify-end mt-4">
                      @if (Route::has('password.request'))
                          <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                              {{ __('Forgot your password?') }}
                          </a>
                      @endif

                      <x-button class="login-btn">
                          {{ __('Log in') }}
                      </x-button>
                  </div>
                  
      <div class="register-link">
        <p>Don't have an account? <a href="register">Register</a></p>
      </div>
              </form>
          </div>
      </x-authentication-card>
      </x-guest-layout>
      <!-- End of integration -->

    </div>
  </body>
</html>

