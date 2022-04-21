<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'commentable_id',
        'commentable_type',
        'comments',
        'post_id',
    ];
    /**
     * Get the parent commentable model (post or video).
     */
    public function commentable()
    {
        return $this->morphTo();
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}