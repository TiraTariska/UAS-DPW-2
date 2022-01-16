<?php

namespace App\Models;

use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;

class Desa extends Model {
    protected $table ='desa';

    function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

}