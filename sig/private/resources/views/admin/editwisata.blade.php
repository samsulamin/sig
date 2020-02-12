@extends('admin.templateAdmin')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                               <h4>Home / Tambah Data / Tambah Wisata </h4>
                            </div>
                                <h4>Add Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        @foreach($wisata as $wisata)
                                            <form method="POST" action="{{url('addwisata/store')}}" enctype="multipart/form-data" >
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email">Nama Wisata</label>
                                                            <input id="namawisata" type="text" class="form-control" value="{{$wisata->namawisata}}" name="namawisata" tabindex="1" required >
                                                            <div class="invalid-feedback">
                                                                Masukan nama wisata!
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Alamat</label>
                                                            <input id="alamat" type="text" class="form-control" value="{{$wisata->alamatwisata}}" name="alamat" tabindex="1" required autofocus>
                                                            <div class="invalid-feedback">
                                                                Masukan Alamat wisata!
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Informasi / Sejarah</label>
                                                                <textarea class="form-control" id="informasi" name="informasi" value="{{$wisata->informasi}}" rows="1"></textarea>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Masukan Informasi wisata!
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="video">Video</label>
                                                                <input id="video" name="video" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Masukan Video wisata!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="wilayahwisata">Wilayah Wisata</label>
                                                                    <select class="form-control" id="wilayahwisata" name="wilayahwisata">
                                                                        $wilayah={{$wisata->wilayah}};
                                                                        if ($agama== "ISLAM") echo "<option value='ISLAM' selected>ISLAM</option>";
                                                                        else echo "<option value='ISLAM'>ISLAM</option>";
                                                                        if ($agama== "KRISTEN") echo "<option value='KRISTEN' selected>KRISTEN</option>";
                                                                        else echo "<option value='KRISTEN'>KRISTEN</option>";
                                                                        <option value="Kota">Kota</option>
                                                                        <option value="Kabupaten">Kabupaten</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="kategoriwisata">Kategori Wisata</label>
                                                                    <select class="form-control" id="kategoriwisata" name="kategoriwisata">
                                                                        <option value="Edukuasi">Edukuasi</option>
                                                                        <option value="Alam">Alam</option>
                                                                        <option value="Kuliner">Kuliner</option>
                                                                        <option value="Religi">Religi</option>
                                                                        <option value="Buatan">Buatan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fasilitas">Fasilitas</label>
                                                            <input id="fasilitas" type="text" class="form-control" name="fasilitas" tabindex="1" required autofocus>
                                                            <div class="invalid-feedback">
                                                                Masukan Fasilitas Wisata!
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="lat">Lattitude</label>
                                                                    <input id="lat" type="text" class="form-control" name="lat" tabindex="1" required autofocus>
                                                                    <div class="invalid-feedback">
                                                                        Masukan Titik Latitude 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="long">Longitude</label>
                                                                    <input id="long" type="text" class="form-control" name="long" tabindex="1" required autofocus>
                                                                    <div class="invalid-feedback">
                                                                        Masukan Titik Longitude 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="foto">Foto / Gambar</label>
                                                            <label class="control-label">Select File</label>
                                                            <input id="foto" name="foto" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                                        Simpan Data Wisata
                                                    </button>
                                                </div>
                                            </form>
                                        @endforeach
                                    </div>
                                    <div class="col-sm-4">
                                        <div id="mapid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

