<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamars';
    protected $guarded = [''];

    // protected function kategori(){
    //     return $this->belongsTo(kategori::class);
    // }
}
