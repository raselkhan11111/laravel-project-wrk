<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brand()
    {
        return $this->hasMany(Brand::class);
    }

    public function products()
    {
        return $this->BelongsToMany(Product::class);
    }
}
