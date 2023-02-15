<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 dashboardContainer" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-5 pt-3">
            <x-input-label class="text-dark" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-white btn-outline-light border-0 text-dark" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

      
        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-dark" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full bg-white btn-outline-light border-0 text-dark"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center ">
                <input id="remember_me" type="checkbox" class="rounded  border-gray-300 text-indigo-600 shadow-sm " name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="ml-3 btn btn-primary">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>
