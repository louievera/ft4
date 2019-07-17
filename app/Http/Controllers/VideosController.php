<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    public function index(){
        $videos = Video::orderBy('updated_at','desc')
                    ->paginate(15);

        return json_encode($videos);
    }

    public function showVideo($slug)
    {
        $video = Video::where('slug','=',$slug
                    )->firstOrFail();
        return view('video.show',['video' => $video]);
    }
}
