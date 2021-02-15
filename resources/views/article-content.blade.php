@extends('layouts.master')


@section('content')

  <div class="jumbotron">

      
        <div class="container">
          <h2 class="display-3">{{$h1}}</h2>
              <p>{{$h2}} </p>
             
              <p><a class="btn btn-primary btn-lg" href="#" role="button">View details &raquo;</a></p>
        </div>
        
        <div class="container">
           <div class="row">
           @if($article)
           <div>
           <h2>{!!$article->title!!}</h2>
           <p>{!!$article->content!!}</p>
           </div>
           @endif
           </div>
        
        </div>

      <hr>
    </div> <!-- /container -->

  @endsection