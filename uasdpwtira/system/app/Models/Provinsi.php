<?php
namespace App\Models;

use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;

class Provinsi extends Model {
    protected $table ='provinsi';

    function kecamatan(){
        return $this->hasMany(Kecamatan::class, 'id_kabupaten');
    }

    function provinsi(){
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }


}