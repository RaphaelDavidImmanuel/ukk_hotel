<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table = 'pemesanans';
    protected $guarded = [''];

    // protected function kategori(){
    //     return $this->belongsTo(Kategori::class);
    // }
}
