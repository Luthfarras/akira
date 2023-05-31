<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }

}
