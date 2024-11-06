<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $fillable =['title','description','price', 'category_id','user_id'];

    public function categories():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
