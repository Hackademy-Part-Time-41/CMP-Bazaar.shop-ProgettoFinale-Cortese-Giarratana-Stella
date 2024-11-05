<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title',
        'price',
        'description'
    ];

    public function categories() {
        return $this->belongsTo(Category::class);
    }
}
