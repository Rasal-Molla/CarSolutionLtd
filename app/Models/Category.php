<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'service_center_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id','id');
    }

}
