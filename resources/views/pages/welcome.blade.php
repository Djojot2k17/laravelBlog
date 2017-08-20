@extends('main')
@section('title','| Home Page')
@section('content')
    <div class="row">
     <div class="jumbotron">
       <div class="container">
        <h1>Hello, Welcome to my Blog</h1>
        <p class="lead">Thankyou for being a part of my test blog</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
      </div>
    </div>
  </div><!-- end row -->
  <div class="row">
    <div class="col-md-8">
      <div class="post">
        @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{substr($post->body,0,300)}}{{ strlen($post->body) > 300?'...':''}}</p>
        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read more</a>
      </div>
      
      <hr/>

      @endforeach 

    </div>
    <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
    </div>
  </div>
</div>
<hr/><br/>
<!-- end-main-content -->
<!--footer -->
<footer>
  <div class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Quick Links </h3>
          <ul>
            <li> <a href="#"> Popular Post </a> </li>
            <li> <a href="#"> Latest Posts </a> </li>
            <li> <a href="#"> About Me </a> </li>
            <li> <a href="#"> Contact Me </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row--> 
    </div>
    <!--/.container--> 
  </div>
 @stop