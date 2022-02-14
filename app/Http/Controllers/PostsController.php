<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;


class PostsController extends Controller
{
    public function store(Request $request)
    {
        $video = new Video();
        $video->fill($request->all());
        $video->user_id = Auth::id();
        $video->save();

        return redirect()->route('video');
    }
}
