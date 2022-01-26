<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenso extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function Images()
    {
        return $this->hasMany(TensoImage::class, 'tenso_id', 'id');
    }
}
