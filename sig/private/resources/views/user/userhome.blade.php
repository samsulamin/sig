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
                        <h4>Home / Data / Data Wisata </h4>
                    </div>
                    <h4>Advanced Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="table_id" class="display table">
                        <thead>
                            <tr>
                                <th>Nama Wisata</th>
                                {{--<th>Foto Wisata</th>--}}
                                <th width="25%">Alamat</th>
                                <th>Kategori</th>
                                <th>Wilayah</th>
                                <th width="12%">fasilitas</th>
                                {{--<th>informasi</th>--}}
                                <th>Lat/long</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($wisata as $wisata)
                            <tr>
                                <td>{{$wisata->namawisata}}</td>
                                {{--<td>
                                  <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Nur Alpiana">
                                </td>--}}
                                <td>{{$wisata->alamatwisata}}</td>
                                <td>{{$wisata->kategori}}</td>
                                <td>{{$wisata->wilayah}}</td>
                                <td>{{$wisata->fasilitas}}</td>
                                <td>{{$wisata->latitude}},{{$wisata->longitude}}</td>
                                <td>
                                  <a href="#" class="btn btn-sm btn-outline-info"><i class="ion ion-edit"></i></a>                                 
                                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="ion ion-trash-a"></i></a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
@stop

