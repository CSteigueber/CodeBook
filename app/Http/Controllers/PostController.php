<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user, Profile $profile)
    {
        return view('/main/home', compact('user', 'profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user, Profile $profile)
    {
        // validate the data from form

        $data = $request->validate([
            'title' => 'required|max:255',
            'body' => '',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // if the user uploads an image in post

        if (array_key_exists("image",$data)){

            $imagePath = request('image')->store('uploads', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();
        };

        // persist to database

        auth()->user()->post()->create([
            'title' => $data['title'],
            'body' => $data['body'],
            'image' => $data['image']

        ]);

        // return view

        return view('/main/home', compact('profile', 'user'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

    }
    
}
