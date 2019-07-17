<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Video;

class Welcomepage extends Controller
{
    //
    function getPosts()
    {
        $posts = Post::where('featured',1)
                        ->where('status','PUBLISHED')
                        ->orderBy('updated_at','desc')
                        ->limit(5)
                        ->get();

    	return json_encode($posts);
    }

    function getVids()
    {
        $videos = Video::where('featured',1)
                ->orderBy('updated_at','desc')
                ->limit(6)                
                ->get();
        
        return json_encode($videos);
    }
}
