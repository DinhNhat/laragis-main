{{--<x-layout>--}}
{{--  <x-card class="p-10 max-w-lg mx-auto mt-24">--}}
{{--    <header class="text-center">--}}
{{--      <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>--}}
{{--      <p class="mb-4">Log into your account to post gigs</p>--}}
{{--    </header>--}}

{{--    <form method="POST" action="{{ url('/users/authenticate') }}">--}}
{{--      @csrf--}}

{{--      <div class="mb-4">--}}
{{--        <label for="email" class="inline-block text-lg mb-2">Email</label>--}}
{{--        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />--}}

{{--        @error('email')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--      <div class="mb-4">--}}
{{--        <label for="password" class="inline-block text-lg mb-2">--}}
{{--            Password--}}
{{--        </label>--}}
{{--        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"--}}
{{--          value="{{old('password')}}" />--}}

{{--        @error('password')--}}
{{--        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--        @enderror--}}
{{--      </div>--}}

{{--        <div class="mb-4">--}}
{{--            <span class="form-label-description">--}}
{{--                <a href="{{ url('/auth/forgot-password') }}" class="text-laravel">I forgot password</a>--}}
{{--            </span>--}}
{{--        </div>--}}

{{--      <div class="mb-6">--}}
{{--        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">--}}
{{--          Sign In--}}
{{--        </button>--}}
{{--      </div>--}}

{{--      <div class="mt-8">--}}
{{--        <p>--}}
{{--          Don't have an account?--}}
{{--          <a href="{{ url('/register') }}" class="text-laravel">Register</a>--}}
{{--        </p>--}}
{{--      </div>--}}
{{--    </form>--}}
{{--  </x-card>--}}
{{--</x-layout>--}}

<x-auth.main-layout>
    <div class="card">
        <div class="card-body p-4">

            <!-- Logo -->
            <h4 class="font-24 mb-30">Login.</h4>

            <form action="#">
                <div class="form-group">
                    <input class="form-control login" type="email" id="emailaddress" required="" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <a href="forget-password.html" class="text-dark float-right"></a>
                    <input class="form-control login" type="password" required="" id="password" placeholder="Enter your password">
                </div>

                <div class="form-group d-flex justify-content-between align-items-center mb-3">
                    <div class="checkbox d-inline mb-0">
                        <input type="checkbox" name="checkbox-1" id="checkbox-8">
                        <label for="checkbox-8" class="cr mb-0 font-13">Remember me</label>
                    </div>
                    <span><a class="font-12 text-success" href="forget-password.html">Forgot your password?</a></span>
                </div>

                <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                </div>

                <div class="text-center mt-15"><span class="mr-2 font-12">Don't have an account?</span><a class="font-12" href="register.html">Sign up</a></div>

            </form>

            <!-- end card -->
        </div>
    </div>
</x-auth.main-layout>
