<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function catalogs()
    {
        return $this->belongsToMany(Catalog::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected $fillable = [
        'name', 'price', 'image', 'catalog_id', 'description', 'created', 'expiry', 
    ];
}