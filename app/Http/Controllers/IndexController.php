<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;


class indexController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $username = $user->name;

        return view('home', compact('user', 'username'));
    }

    public function create()
    {
        $user = Auth::user();
        $username = $user->name;

        return view('create', compact('user', 'username'));
    }

    public function video()
    {
        $user = Auth::user();
        $username = $user->name;
        $videos = Video::where('user_id', Auth::id())
            ->get();


        return view('video', compact('user', 'username', 'videos'));
    }

    public function record()
    {
        $user = Auth::user();
        $username = $user->name;

        return view('record', compact('user', 'username'));
    }

    public function spi()
    {
        $user = Auth::user();
        $username = $user->name;

        return view('spi', compact('user', 'username'));
    }
}
