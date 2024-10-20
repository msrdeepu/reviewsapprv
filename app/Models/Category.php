<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    
    use Sluggable;
    
     protected $fillable = [
        'category', 
    ];
    
    public function Sluggable():array
    {
        return [
            'slug' => 
            [
                'source' => 'category'
            ]
        ];
    }
    
    
}
