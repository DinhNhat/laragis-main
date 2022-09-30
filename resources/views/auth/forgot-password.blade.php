<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Forgot Password</h2>
            <p class="mb-4">Enter your email address and your password will be reset and emailed to you</p>
        </header>

        <form method="POST" action="{{ url('/auth/forgot-password') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="inline-block text-lg mb-2">Email address</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Send me new password
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Forget it,
                    <a href="{{ url('/register') }}" class="text-laravel">Send me back</a>
                    to the sign in screen.
                </p>
            </div>

        </form>
    </x-card>
</x-layout>
