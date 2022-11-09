<x-guest-layout>
    <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="text-center mb-4">
                            <a href="index.html" class="">
                                <img src="/images/grt.png" alt="" height="70" class="auth-logo logo-dark mx-auto">
                                <img src="/images/grt.png" alt="" height="70" class="auth-logo logo-light mx-auto">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <!-- end row -->
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="email" :value="__('Email')">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required placeholder="Enter email">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="password" :value="__('Password')">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password" placeholder="Enter password">
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="remember_me" nmae="remember">
                                                            <label class="form-label" class="form-check-label font-sm" for="remember_me">{{ __('Remember me') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="text-sm-end mt-3 mt-md-0">
                                                            @if (Route::has('password.request'))
                                                            <a href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i>{{ __('Forgot your password?') }}</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">{{ __('Log in') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="text-white-50">Belum mempunyai akun ? <a href="{{ route('register') }}" class="fw-medium text-primary"> Register </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Admin. Crafted with <i class="mdi mdi-heart text-danger"></i> by Dinkes Garut</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        
</x-guest-layout>
