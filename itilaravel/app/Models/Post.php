<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;



class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'created_by',
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'id']           
                 ]
        ];
    }


}