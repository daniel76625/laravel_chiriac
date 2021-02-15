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
        $this->h1 = "Hello, world!";   
        $this->h2 = "This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.";
        
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
