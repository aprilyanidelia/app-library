<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function HaveUser()
    {
        return $this->BelongsTo(User::class,'user_id','id');
    }
    public function HaveBuku()
    {
        return $this->BelongsTo(buku::class,'buku_id','id');
    }
}
