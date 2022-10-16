<x-auth.main-layout>
    <div class="card">
        <div class="card-body p-4">
            <h4 class="font-24 mb-30">Create account</h4>

            <form method="POST" action="{{ url('/users') }}">
                @csrf

                <div class="form-group">
                    <label for="username">User name</label>
                    <input id="username" class="form-control" name="name" type="text" required placeholder="Enter your user name" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="emailaddress">Email address</label>
                    <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Enter your email" value="{{old('email')}}">
                    @error('email')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password1">Password</label>
                    <input class="form-control" type="password" name="password" required id="password1" placeholder="Enter your password">
                    @error('password')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input class="form-control" type="password"
                           name="password_confirmation"
                           required id="password2"
                           placeholder="Enter your password"
                    >
                    @error('password_confirmation')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-0 mt-15">
                    <button class="btn btn-primary btn-block" type="submit">Create my account</button>
                </div>

                <div class="text-center mt-15"><span class="mr-2 font-13">Already have an account?</span><a class="font-13" href="{{ url('/login') }}">Sign in</a></div>

            </form>

            <!-- end card -->
        </div>
    </div>
</x-auth.main-layout>
