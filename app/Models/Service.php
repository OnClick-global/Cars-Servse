<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/service') . '/' . $image;
        }
        return asset('uploads/default.jpg');
    }
}
