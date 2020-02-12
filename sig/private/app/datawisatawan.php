<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datawisatawan extends Model
{
    protected $table = 'wisatawan';
    protected $fillable = ['id', 'namawisatawan', 'alamat', 'email', 'jeniskelamin',  'umur'];
}
