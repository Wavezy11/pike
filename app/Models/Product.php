<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function images() {
        return $this->hasMany(Image::class);
    }
    protected $fillable = ['shoe_name', 'description', 'price', 'size']; // Voeg 'shoe_name' toe aan de fillable array
}
