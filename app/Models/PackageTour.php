<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageTour extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'name', 
        'slug',
        'thumbnail',
        'about',
        'fasilitas',
        'location',
        'price',
        'category_id',
        'photo',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function package_photos(){
        return $this->hasMany(PackagePhoto::class);
    }
}
