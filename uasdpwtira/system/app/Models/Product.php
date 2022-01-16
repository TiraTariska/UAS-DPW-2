<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
use Illuminate\Support\Str;

class Product extends Model{

    use ProdukAttributes, ProdukRelations;
    protected $table ='product';
    public $incrementing = false;
    protected $primaryKey ='uuid';
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($item){
            $item->uuid = (string) Str::uuid();
        });

    }

}