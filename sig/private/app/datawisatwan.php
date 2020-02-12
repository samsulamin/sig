<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datawisatwan extends Model
{
    protected $table = 'wisatawan';
    protected $fillable = ['id', 'namawisatawan', 'wisatawan_id', 'alamat', 'email', 'jeniskelamin',  'umur'];
}
