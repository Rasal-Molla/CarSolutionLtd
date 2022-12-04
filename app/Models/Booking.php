<?php

namespace App\Models;
use App\Models\Service;
use App\Models\Service_center;
use App\Models\Brand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function serviceCenter(){
       return $this->belongsTo(Service_center::class);
    }
    public function brand(){
       return $this->belongsTo(Brand::class);
    }
    public function service(){
       return $this->belongsTo(Service::class);
    }
}
