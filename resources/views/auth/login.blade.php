<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="bg-gray-100">
    <div class="wrapper">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Login</h1>
        <!-- Email Address -->
        <div class="input-email">
            <x-input-label class="text-email" for="email" :value="__('Email')" />
            <x-text-input id="email" class="input-box-email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-password">
            <x-input-label class="text-password" for="password" :value="__('Password')" />

            <x-text-input id="password" class="input-box-password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="remember">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" class="check-remember-me" name="remember">
                <span class="text-remember-me">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="forgot flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="forgot-text forgot-text underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="tombol-login">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    </div>
</body>
</html>
