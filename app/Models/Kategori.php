<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $guarded = [''];

    protected function kamar(){
        return $this->hasMany(Kamar::class);
    }
    
    // protected function pemesanan(){
    //     return $this->hasMany(Pemesanan::class);
    // }
}
