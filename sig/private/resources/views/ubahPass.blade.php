@extends('templateLogin')

@section('main')
    <div id="homepage">
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('public/img/kartun.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="../index.html"><img src="../src/img/brand.svg" alt=""></a>
                            </div>
                            <h3>Lupa Password</h3>
                            <p>Password Harus Sama</p>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('ubahPass') }}">
                                @csrf
                                <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    <i class="ik ik-mail"></i>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <i class="ik ik-mail"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <i class="ik ik-mail"></i>
                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme">Reset Password</button>
                                </div>
                            </form>
                            <div class="register">
                                <p>Sudah Punya Akun.? <a href="{{url('/login')}}">Login.!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')

@stop