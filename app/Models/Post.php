<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    
     use Sluggable;
    
     protected $fillable = [
        'seotitle', 
    ];
    
    public function Sluggable():array
    {
        return [
            'slug' => 
            [
                'source' => 'seotitle'
            ]
        ];
    }
}
