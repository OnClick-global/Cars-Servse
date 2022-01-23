<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getImagesAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/client') . '/' . $image;
        }
        return asset('uploads/default.jpg');
    }
}
