<x-guest-layout>
        <div class="account-pages my-2 pt-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="text-center mb-4">
                            <a href="index.html" class="">
                                <img src="/images/grt.png" alt="" height="60" class="auth-logo logo-dark mx-auto">
                                <img src="/images/grt.png" alt="" height="60" class="auth-logo logo-light mx-auto">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">  
                                <form method="POST" class="form-horizontal" action="{{route('register')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="name" value="__('Username')">Username</label>
                                                <input type="text" class="form-control" id="username" name="username":value="old('usernmae')" required autofocus placeholder="Enter username">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="name" :value="__('Name')">Nama</label>
                                                <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus placeholder="Enter nama">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="email" :value="__('Email')">Email</label>
                                                <input type="email" class="form-control" id="mail" name="email" :value="old('email')" required placeholder="Enter email">        
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="password" :value="__('Password')">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password" placeholder="Enter password">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="password_confirmation" :value="__('Confirm Password')">Konfirmasi Password</label>
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Enter konfirmasi password">
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">{{ __('Register')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">Sudah mempunyai akun ?<a href="{{ route('login')}}" class="fw-medium text-primary"> Login </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Admin. Crafted with <i class="mdi mdi-heart text-danger"></i> by Dinkes Garut</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
</x-guest-layout>
