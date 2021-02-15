@extends('layouts.master')


@section('content')
  <div style="height: 50px;"></div>
  <div class="row">

      @foreach($articles as $article)
      <div style="height: 50px;"></div>
        <div class="col-md-4">
          <h2>{!!$article->title!!}</h2>
              <p>{!!$article->description!!} </p>
             
              <p><a class="btn btn-secondary" href="{{route('articleshow',['id'=>$article->id])}}" role="button">View details &raquo;</a></p>
              <img src="{!!$article->img!!}" alt="" width="100%" border="0">
        </div>
        <div style="height: 50px;"></div>
        @endforeach

      <hr>
    </div> <!-- /container -->

    <div style="height: 50px;"></div>

  @endsection