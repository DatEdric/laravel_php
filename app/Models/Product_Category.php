<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    use HasFactory;
    protected $table = 'product_category';

    // protected $fillable = [
    //     'name' , 'status', 'slug'
    // ];
    // public $timestamps = true;
    protected $guarded = [];
}
