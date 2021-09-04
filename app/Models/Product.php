<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'description',
        'parent_id',
        'image'
    ];
    public function compositions(){
        return $this->hasMany(Product::class,'parent_id', 'id');
    }
}
