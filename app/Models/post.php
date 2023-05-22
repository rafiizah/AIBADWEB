<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // protected $fillable = ['quote'];

    public function kategory()
    {
        return $this->belongsTo(kategory::class);
    }
}
