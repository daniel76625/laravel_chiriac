@extends('layouts.master')


@section('content')
  <div style="height: 50px;"></div>
  <div class="row">

      @foreach($articles as $article)
      <div style="height: 50px;"></div>
        <div class="col-md-4">
        <img src="{!!$article->img!!}" alt="" width="100%" height="150" border="0">
          <h2>{!!$article->title!!}</h2>
              <p>{!!$article->description!!} </p>
             
              <p><a class="btn btn-secondary" href="{!!$article->link!!}" target="_blank" role="button">Vezi detalii &raquo;</a></p>
            
        </div>
        <div style="height: 50px;"></div>
        @endforeach

      <hr>
    </div> <!-- /container -->

    <div style="height: 50px;"></div>

  @endsection