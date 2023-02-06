<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Create method
     *
     * @param Request $request
     *
     * @return void
     */
    public function create(Request $request)
    {
        $new_post = [
            'title' => 'Vini boy',
            'description' => 'A book about life',
            'author' => 'Vini Boy'
        ];

        $posts = new Post($new_post);
        $posts->save();

        dd($posts);
    }

    /**
     * Read method
     *
     * @param Request $r
     *
     * @return void
     */
    public function read(Request $r)
    {
        $post = new Post();

        $posts = $post->find(1);

        return $posts;
    }

    /**
     * ReadAll method
     *
     * @param Request $r
     *
     * @return Collection
     */
    public function readAll(Request $r): Collection
    {
        return Post::all();
    }
}
