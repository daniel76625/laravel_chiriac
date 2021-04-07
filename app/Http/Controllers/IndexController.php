<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class IndexController extends Controller
{
    protected $h1;
    protected $h2;

    public function __construct(){
        $this->h1 = "   Mai bun,
        mai rapid,
        mai puternic";   
        $this->h2 = "StarNet este o companie privată, 100% capital local, fondată în anul 2003, fiind unul dintre liderii pieței de tehnologii informaționale și comunicații electronice din Republica Moldova.";
        
    }
    public function index(){
        $articles = DB::select('select * from articles');
        //dd($articles);
        return view('index')->with(['h1' => $this->h1,'h2' => $this->h2, 'articles'=>$articles]);
    }
    public function show($id){
        $article = Article::select(['id','title','content'])->where('id',$id)->first();

        return view('article-content',$article)->with(['h1'=> $this->h1,'h2' => $this->h2, 'article'=>$article]);
    }
}
