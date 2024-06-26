<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'category_id'];
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
