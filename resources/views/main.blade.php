{{-- This is our main layout. All other pages inherit from here. --}}
<!DOCTYPE html>
<html lang="en">
<head> 
@include('partials._head')
</head>
<body>
  @include('partials._nav')  
  <!-- main-content -->
  <div class="container">
    @include('partials._messages')
    @yield('content')
    <!-- end-main-content -->
    @include('partials._footer')
  </div>
  @include('partials._javascript')
  @yield('scripts')
</body>
</html>