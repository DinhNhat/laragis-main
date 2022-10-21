<x-auth.main-layout>
    <div class="card">
        <div class="card-body p-4">

            <!-- Logo -->
            <h4 class="font-24 mb-30">Log into your account to post gigs </h4>

            <form method="POST" action="{{ url('/users/authenticate') }}">
                @csrf

                <div class="form-group">
                    <input class="font-18 form-control login" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <a href="forget-password.html" class="text-dark float-right"></a>
                    <input class="font-18 form-control login" type="password" required="" id="password" placeholder="Enter your password" name="password" value="{{ old('password') }}">
                    @error('password')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group d-flex justify-content-between align-items-center mb-3">
                    <div class="checkbox d-inline mb-0">
                        <input type="checkbox" name="checkbox-1" id="checkbox-8">
                        <label for="checkbox-8" class="font-15 cr mb-0 font-13">Remember me</label>
                    </div>
                    <span><a class="font-15 text-success" href="forget-password.html">Forgot your password?</a></span>
                </div>

                <div class="form-group mb-0">
                    <button class="font-15 btn btn-primary btn-block" type="submit"> Log In </button>
                </div>

                <div class="font-15 text-center mt-15"><span class="mr-2">Don't have an account?</span><a href="{{ url('/register') }}">Sign up</a></div>

            </form>

            <!-- end card -->
        </div>
    </div>
</x-auth.main-layout>
