<?php

namespace App\Models;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function listings () {
        return $this->hasMany(Listing::class);
    }
}
