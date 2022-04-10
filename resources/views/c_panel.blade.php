<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/loader.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/c_home.css') }}" rel="stylesheet">
</head>
<body onload="myFunction()">


<!-- The sidebar -->
<div class="sidebar">
  <a href="{{ URL::to('/client/home')}}">Home</a>
  <a href="{{ URL::to('/c_message')}}">Wiadomość</a>
  <a href="{{ URL::to('/c_order')}}">Zgłoszenie</a>
  <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"> Wyloguj</a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
  </form>
  
</div>

<div id="loader"></div>

<!-- Page content -->
<div class="content">
  <div style="display:none;" id="myDiv" class="animate-bottom">
    @include('flash-message')

    @yield('content')
  </div>
</div>


</body>
</html>