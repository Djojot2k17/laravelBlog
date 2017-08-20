@extends('main')
@section('title', '| About')
@section('content')
    <!-- Introduction Row -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">About Us
          <small>It's Nice to Meet You!</small>
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
      </div>
    </div>

    <!-- Team Members Row -->
    <div class="row">
      <div class="col-lg-12">
        <h2 class="page-header">Our Team</h2>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <small>Job Title</small>
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <small>Job Title</small>
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <small>Job Title</small>
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <small>Job Title</small>
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <small>Job Title</small>
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <small>Job Title</small>
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
    </div>
  </div>
  <hr>
  <!-- end-main-content -->

  
  <script>
    $(document).ready(function(){ 
      $('#characterLeft').text('140 characters left');
      $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
          $('#characterLeft').text('You have reached the limit');
          $('#characterLeft').addClass('red');
          $('#btnSubmit').addClass('disabled');            
        } 
        else {
          var ch = max - len;
          $('#characterLeft').text(ch + ' characters left');
          $('#btnSubmit').removeClass('disabled');
          $('#characterLeft').removeClass('red');            
        }
      });    
    });

  </script>
@stop