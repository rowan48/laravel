<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'comments',
        'user_id',
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
    public function user(){
        return $this->belongsTo(User::class);

    }
}