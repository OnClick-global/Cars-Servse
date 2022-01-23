<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function Images()
    {
        return $this->hasMany(CarsImages::class, 'car_id', 'id');
    }

}
