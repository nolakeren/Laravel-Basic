<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Post extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
    public function index()
    {

	//get posts
    $posts = Post::latest()->paginate(5);

    //render view with posts
    return view('posts.index', compact('posts'));
	
    }
}