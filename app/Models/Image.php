<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images'; // Dit is de aangepaste tabelnaam

    protected $fillable = ['name']; // Dit geeft aan welke kolommen massaal toegewezen kunnen worden

    public $timestamps = true; // Dit zorgt ervoor dat Laravel automatisch de created_at en updated_at timestamps bijwerkt
}
