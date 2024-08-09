<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function HaveUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function HaveBuku()
    {
        return $this->belongsTo(buku::class,'buku_id','id');
    }
}
