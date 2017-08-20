@extends('main')

@section('title', '| Add Post')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@stop

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>New Post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=>'']) !!}
        {{ Form::label('title', 'Title: ') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255'))}}
        {{ Form::label('slug', 'Slug: ') }}
        {{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5','maxlength'=>'255', 'placeholder'=>'Please use dashes (-) instead of spaces. Only alphanumeric characters allowed'))}}
        {{ Form::label('body', 'Post Body: ')}}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'required'=>''))}}
        {{ Form::submit('New Post', array('class' => 'btn btn-success btn-block','style'=>'margin: 20px 0px;'))}}
      {!! Form::close() !!}
    </div>
  </div>

@stop

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@stop