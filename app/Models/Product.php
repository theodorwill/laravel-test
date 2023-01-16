<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function skuData()
    {
        return $this->hasOne(SkuData::class);
    }

    public function productVersions()
    {
        return $this->hasMany(Product_version::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
