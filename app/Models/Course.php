<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }

}
