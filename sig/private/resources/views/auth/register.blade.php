@extends('templateLogin')

@section('main')
    <div id="app">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 ">
                        <div class="login-brand">
                            SIG Wisata Tegal
                        </div>
                        <div class="card card-primary">
                            <div class="card-header text-center"><h4>Silahkan Daftar</h4></div>
                                <div class="card-body">
                                    <form method="POST" action="{{url('register/store')}}" class="needs-validation" novalidate="">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label> 
                                                    <input id="nama" type="text" class="form-control" name="nama" tabindex="1" required autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                        Masukan Nama Anda
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">Alamat</label> 
                                                    <input id="alamat" type="text" class="form-control" name="alamat" tabindex="1" required autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                        Masukan Alamat
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label> 
                                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                        Masukan Email
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="password">Password</label> 
                                                    <input id="password" type="password" class="form-control" name="password" tabindex="1" required autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                        Masukan Password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="umur">Umur</label> 
                                                    <input id="umur" type="text" class="form-control" name="umur" tabindex="1" required autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                        Masukan Umur
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="jk">Jenis Kelamin</label> 
                                                    <select class="form-control" id="jk" name="jk">
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                        Pilih Jenis Kelamin
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                            Register
                                            </button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p>punya akun ya? <a href="{{url('/login')}}">Login</a></p>
                                    </div> 
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('footer')

@stop