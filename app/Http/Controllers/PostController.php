<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   public function show($slug)
   {
       return view('post', [
           'post' => Post::where('slug', '=', $slug)->first()
       ]);
   }

   public function store(Request $request)
  {
      $post = new Post;

      $post->no = $request->no;
      $post->ad = $request->ad;
      $post->sifre = $request->sifre;

      $post->save();

      return response()->json(["result" => "ok"], 201);
  }

}
