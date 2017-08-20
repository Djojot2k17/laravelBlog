<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the blog posts in it from the database
        $posts = Post::orderBy('id', 'desc')->paginate(5); //argument for paginate is limit page results to 5. Too easy... 

        //return a view and pass in the above variable
        return view('posts.index')->withPosts($posts);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
      $this->validate($request, array(
       'title'=>'required|max:255',
       'body'=>'required',
       'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug'   
       ));
        //store in database
      $post = new Post;
      $post->title = $request->title;
      $post->slug = $request->slug;
      $post->body = $request->body;
      $post->save();

        //session flash success
      Session::flash('success','The blog post was successfully saved!');

        //redirect
      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      $post = Post::find($id);

      return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database where id = $id and save it as a variable
      $post = Post::find($id);

        // return view with above variable
      return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate data
      $post = Post::find($id);
      if ($request->input('slug') == $post->slug) {
        $this->validate($request, array(
       'title'=>'required|max:255',
       'body'=>'required'   
       ));
      } else {
        $this->validate($request, array(
       'title'=>'required|max:255',
       'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
       'body'=>'required'   
       ));
      }
      
        //store in database
      $post = Post::find($id);
      $post->title = $request->input('title');
      $post->slug = $request->input('slug');
      $post->body = $request->input('body');
      $post->save();

        //session flash success
      Session::flash('success','The post was successfully saved!');
        //redirect to the updated posts.show
      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      $post = Post::find($id);
      $post->delete();
      Session::flash('success', 'The post was successfully deleted');
      return redirect()->route('posts.index');
    }
  }
