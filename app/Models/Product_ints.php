<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_ints extends Model
{
    use HasFactory;

    public function productVersions()
    {
        return $this->belongsTo(Product_version::class);
    }
}
