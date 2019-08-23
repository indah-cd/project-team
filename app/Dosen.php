<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table='dosen';
    protected $fillable = ['nidn', 'nama','jenis_kelamin','agama','alamat','email','fakultas','program_studi','jadwal'];
}
