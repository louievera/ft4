<?php

namespace App\Http\Controllers;

use App\Post;
use App\Video;
use App\Lyric;
use App\Page;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function getIndex() {
        //$posts = Post::all();
        $posts = Post::where('featured',1)->orderBy('updated_at','desc')->limit(6)->get();
        $videos = Video::where('featured',1)->orderBy('updated_at','desc')->limit(6)->get();
        return view('welcome')->with('posts',$posts)->with('videos',$videos);
        //return view('welcome')->with('posts',$posts);
    }

    public function indexPost()
    { 
      $search = isset($_GET['search']) ? $_GET['search'] : "";
      $posts = Post::orderBy('updated_at','desc')->paginate(15);

      if($search){
        $posts = Post::where('author_name','like','%'.$search.'%')
        ->orwhere('title','like','%'.$search.'%')
        ->orwhere('body','like','%'.$search.'%')
        ->orderBy('updated_at','desc')->paginate(15);
      }
      return view('post.index')->with('posts',$posts);
    }

    public function showPost($slug)
    {
        $post = Post::where('slug','=',$slug)->firstOrFail();
        return view('post.show',['post' => $post]);
    }

    public function indexVideo()
    {
      $search = isset($_GET['search']) ? $_GET['search'] : "";
        $videos = Video::orderBy('updated_at','desc')->paginate(15);
      if($search){
        $videos = Video::where('title','like','%'.$search.'%')
        ->orderBy('updated_at','desc')->paginate(15);
      }
        
        return view('video.index')->with('videos',$videos);
    }

    public function showVideo($slug)
    {
        $video = Video::where('slug','=',$slug)->firstOrFail();
        return view('video.show',['video' => $video]);
    }

    public function indexLyric()
    {
      $search = isset($_GET['search']) ? $_GET['search'] : "";
        $lyrics = Lyric::orderBy('title')->paginate(20);
        if($search){
          $lyrics = Lyric::where('title','like','%'.$search.'%')
          ->orwhere('artist','like','%'.$search.'%')
          ->orderBy('updated_at','desc')->paginate(15);
        }
        //$lyrics = Lyric::paginate(20)->orderbyDesc();
        return view('lyric.index')->with('lyrics',$lyrics);
    }

    public function showLyric($slug)
    {
      $search = isset($_GET['search']) ? $_GET['search'] : "";

        $lyric = Lyric::where('slug','=',$slug)->firstOrFail();
        return view('lyric.show')->withLyric($lyric);
    }

    public function showPage($slug)
    {
      $page = Page::where('slug','=',$slug)->firstOrFail();
      switch ($slug) {
        case 'fliptop_radio_station1':
          return view('pages.ftradio1',['page' => $page]);
          break;

        case 'fliptop_radio_station2':
          return view('pages.ftradio2',['page' => $page]);
          break;

        case 'fliptop_radio_station3':
          return view('pages.ftradio3',['page' => $page]);
          break;

        default:
          return view('pages.dynamic_page',['page' => $page]);
          break;
      }

    }

}
