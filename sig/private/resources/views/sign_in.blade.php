@extends('templateLogin')

@section('main')
    <div id="homepage">
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('public/img/auth/login-bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href=""><img src="{{asset('public/src/img/portfolio-1.jpg')}}" alt=""></a>
                            </div>
                            <h3>Sign In Admin</h3>
                            <p>Gunakan Username dan Password yang valid ya!</p>
                            <form action="{{url('/postlogin')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Username/Email" required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme">Sign In</button>
                                </div>
                                <br>
                                <div class="text-center">
                                    <a href="{{route('password.request')}}">Forgot Password ?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')

@stop