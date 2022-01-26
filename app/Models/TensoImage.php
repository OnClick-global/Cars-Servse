<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TensoImage extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/tenso') . '/' . $image;
        }
        return asset('uploads/default.jpg');
    }
}
