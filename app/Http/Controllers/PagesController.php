<?php 

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

  public function getIndex(){
    $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout(){

    $first = 'Denis';
    $last = 'Jojot';

    $full = $first.' '.$last;
    $email = 'denis.jojot.ferreira@gmail.com';
    $data = array();
    $data['email'] = $email;
    $data['fullname'] = $full;
    return view('pages.about')->withData($data);

    //return view('pages.about')->withFullname($full); shorthand way of doing it.
  }

  public function getContact(){
    return view('pages.contact');
  }

}