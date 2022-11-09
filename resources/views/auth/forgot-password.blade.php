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
                                    <p class="mb-3 text-center">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
                                    <!-- end row -->
                                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="email" :value="__('Email')">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required placeholder="Enter email">
                                                </div>
                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">{{ __('Email Password Reset Link') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        
</x-guest-layout>
