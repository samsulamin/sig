<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petawisata extends Model
{
    //
    protected $table = 'wisata';
    protected $fillable = ['id', 'namawisata', 'alamatwisata', 'kategori', 'wilayah',  'fasilitas', 'latitude', 'longitude', 'foto', 'video', 'status'];
}
