<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    protected $fillable = [
        'comment_content', 'rating', 'product_id', 'bill_detail_id', 'status',
    ];
}