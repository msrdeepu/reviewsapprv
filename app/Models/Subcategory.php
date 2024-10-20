<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Subcategory extends Model
{
    use HasFactory;
    
     use Sluggable;
     
      protected $fillable = [
        'subcategory', 
    ];
    
    public function Sluggable():array
    {
        return [
            'slug' => 
            [
                'source' => 'subcategory'
            ]
        ];
    }
}
