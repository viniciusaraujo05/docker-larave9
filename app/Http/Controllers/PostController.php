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

    /**
     * Update method
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function update(Request $request)
    {
        $post = Post::where('id','>', 0)->update([
            'author' => 'Quiabo marcelo'
        ]);

        return $post;
    }

    public function delete(Request $request)
    {
        $post = Post::find(5);

        if($post) {
            return $post->delete();
        }

        return "post not found
" ;
    }
}
