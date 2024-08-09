<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }

    public function pinjam()
    {
        return $this->HasMany(pinjam::class, 'buku_id', 'id');
    }

    public function koleksi()
    {
        return $this->hasMany(koleksi::class, 'koleksi_id', 'id');
    }

    public function ulasan()
    {
        return $this->hasMany(ulasan::class, 'ulasan_id', 'id');
    }
}
