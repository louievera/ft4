<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use input;

class VideosController extends Controller
{
    public function index(){
        $search = request()->search != null ? request()->search : "";
        
        if($search){
            $videos=Video::where("title","like","%".$search."%")
                            ->orderBy('updated_at','desc')
                            ->paginate(9);
        }
        else{
            $videos = Video::orderBy('updated_at','desc')
                    ->paginate(9);
        }
        
        return json_encode($videos);
    }

    public function showVideo($slug)
    {
        $video = Video::where('slug','=',$slug
                    )->firstOrFail();
        return view('video.show',['video' => $video]);
    }
}
