<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Post\StoreFormRequest;

class PostController extends Controller
{

    public function create()
    {
        $id = auth()->user()->id;
        return view('post.create', compact('id'));
    }

    public function store(StoreFormRequest $request)
    {

        $payload = $request->validated();
        Post::create([
            'title' => $payload['title'],
            'content' => $payload['content'],
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('home');
    }
}
