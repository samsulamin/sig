<?php

namespace App\Http\Controllers;

use DB;
use App\petawisata;
use App\datawisatawan;
use Illuminate\Http\Request;

class adminController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        
        $wisata = petawisata::where('status','1')->get();
        return view('admin.datawisata', compact('wisata'));
    }
    public function petawisata()
    {
        //        
        $wisata = petawisata::where('status','1')->get();
        //$petawisata = petawisata::all();
        return view('admin.petawisata', compact('wisata'));
        //$categories = petawisata::all();
        //return view('admin.petawisata',compact('categories'));
    }
    public function addwisata()
    {
        //
        return view('admin.addwisata');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('wisata')->insert([
            'namawisata' => $request->namawisata,
            'alamatwisata' => $request->alamat,
            'informasi' => $request->informasi,
            'kategori' => $request->kategoriwisata,
            'wilayah' => $request->wilayahwisata,
            'fasilitas' => $request->fasilitas,
            'latitude' => $request->lat,
            'longitude' => $request->long,
            'foto' => $request->foto,
            'video' => $request->video,
            'status' => 1
        ]);

        //foto
        $file = $request->file('foto');
        $namafile = $file->getClientOriginalName();
        // ekstensi file
        $extensi = $file->getClientOriginalExtension();
        // ukuran file
        $size = $file->getSize();
        // isi dengan nama folder tempat kemana file diupload
        $destinationfoto = 'file/gambar';
        // upload file
        $file->move($destinationfoto,$file->getClientOriginalName());
        
        //video
        $filevideo = $request->file('video');
        $namavideo = $filevideo->getClientOriginalName();
        // ekstensi file
        $extensivideo = $filevideo->getClientOriginalExtension();
        // ukuran file
        $sizevideo = $filevideo->getSize();
        // isi dengan nama folder tempat kemana file diupload
        $destinationvideo = 'file/video';
        // upload file
        $filevideo->move($destinationvideo,$filevideo->getClientOriginalName());
        
        // alihkan halaman ke halaman pegawai
        return redirect('/datawisata');
    
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $wisata = DB::table('wisata')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.editwisata',['wisata' => $wisata]);
    }
    public function datawisatawan()
    {
        //     
        $wisatawan = datawisatawan::where('status','1')->get();
        return view('admin.datawisatawan', compact('wisatawan'));
    }
    public function calender()
    {
        //
        return view('admin.calender');
    }
    public function about()
    {
        //
        return view('admin.about');
    }
}
