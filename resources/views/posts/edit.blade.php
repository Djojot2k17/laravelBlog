@extends('main')

@section('title','| Edit Post')

@section('content')

  <div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PUT']) !!} {{-- Be sure to include the method GET, PUT, POST, or DELETE you can find which method to use in your php artisan route:list. This only applies if you are using a method that isn't a default method. --}}

    <div class="col-md-8">
      {{ Form::label('title', 'Title: ')}}
      {{ Form::text('title', null, ['class'=>'form-control input-lg']) }}
    <hr>
      {{ Form::label('slug', 'Slug: ')}}
      {{ Form::text('slug', null, ['class'=>'form-control']) }}
    <hr>
      {{ Form::label('body', 'Body: ') }}
      {{ Form::textarea('body', null, ['class'=>'form-control']) }}
    </div>


    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <label>Created At:</label>
          <p>{{ date('M jS, Y h:ia', strtotime($post->created_at)) }}</p>
        </dl>
        <dl class="dl-horizontal">
          <label>Last Updated:</label>
          <p>{{ date('M jS, Y h:ia', strtotime($post->updated_at)) }}</p>
        </dl>
        <div class="row">
          <div class="col-sm-6">
          {{-- What we're doing with linkRoute is linking the button to the controller to either edit or delete the post with the post->id. So instead of using a bunch of get requests we link it with linkRoute. --}}
            {{ Form::submit('Save Changes',array('class'=>'btn btn-success btn-block'))}}
          </div>
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!} 
            {{-- Form::submit actually submits the form. 
            Html::linkRoute just takes you to the view from the route --}}
          </div>
        </div>
      </div>
    </div>

    {!! Form::close() !!}
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
    
  </div>

@stop