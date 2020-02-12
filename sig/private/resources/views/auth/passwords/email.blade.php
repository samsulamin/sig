@extends('templateLogin')

@section('main')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            sig wisata tegal
                        </div>
                        <div class="card card-primary">
                            <div class="card-header text-center"><h4>Forgot Password</h4></div>
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{route('password.email')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email" tabindex="1" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" tabindex="4">
                                                Forgot Password
                                            </button>
                                        </div>
                                    </form>
                                <p><a href="{{url('/')}}">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
