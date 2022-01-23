<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getImagesAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/partner') . '/' . $image;
        }
        return asset('uploads/default.jpg');
    }
}
