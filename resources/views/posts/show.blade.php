@extends('main')

@section('title', '| View Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p class="lead">{{ $post->body }}</p>
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <label>URL:</label>
          <a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a>
        </dl>
        <dl class="dl-horizontal">
          <label>Created At:</label>
          <p>{{ date('M jS, Y h:ia', strtotime($post->created_at)) }}</p>
        </dl>
        <dl class="dl-horizontal">
          <label>Last Updated:</label>
          <p>{{ date('M jS, Y h:ia', strtotime($post->updated_at)) }}</p>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
          {{-- What we're doing with linkRoute is linking the button to the controller to either edit or delete the post with the post->id. So instead of using a bunch of get requests we link it with linkRoute. --}}
            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route'=>['posts.destroy', $post->id],'method'=>'DELETE']) !!}
            {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) }} 
            {!! Form::close()!!}
            {{-- Two ways to delete: AJAX and FORM --}}           
            </div>
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <hr>
              {{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class'=>'btn btn-default btn-block btn-h1-margin'])}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@stop