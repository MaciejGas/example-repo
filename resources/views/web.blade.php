<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/web.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container-fluid">
  <div class="row bg-img">
    <div class="mybox">
      <div class="topnav">
        <a href="{{ URL::to('/login')}}">Login</a>
        <a href="{{ URL::to('/register')}}">Register</a>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-6 fs-2 text-center">
      @foreach ($Left as $item)
        {{ $item->content}}
      @endforeach
    </div>
    <div class="col-6 fs-2 text-center">
      @foreach ($Right as $item)
        {{ $item->content}}
      @endforeach
    </div>
  </div>

</div>

</body>
</html>