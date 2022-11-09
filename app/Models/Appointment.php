<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function car_model(){
        return $this->belongsTo(Car_model::class);
    }

    
}
