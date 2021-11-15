<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Post;

class FavoriteController extends Controller
{
    public function index(Favorite $favorite)
    {
        return view('posts.favorites', [
            'favorite' => $favorite,
        ]);
    }

    public function checkFavorite(Post $post)
    {
        if (auth()->user()->favorites->where('post_id', $post->id)->first() == null) {
            return $this->store($post);
        } else {
            return $this->delete($post);
        }
    }

    public function store(Post $post)
    {
        //$value = DB::table('favorites')->where('post_id', $post->id)->first();
        $post->favorite()->create([
            'user_id' => request()->user()->id,
        ]);
        return back()->with('success', 'Post Favorited!');
    }

    public function delete(Post $post)
    {
        $favorite = auth()->user()->favorites->where('post_id', $post->id)->first();
        $favorite->delete();
        return back()->with('success', 'Post Unfavorited');
    }
}
