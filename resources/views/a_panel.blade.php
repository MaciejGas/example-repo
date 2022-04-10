<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/loader.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="myFunction()">


<!-- The sidebar -->
<div class="sidebar">
  <a href="{{ URL::to('/admin/home')}}">Home</a>
  <a href="{{ URL::to('/a_messages')}}">Wiadomości</a>
  <a href="{{ URL::to('/a_orders')}}">Zgłoszenia</a>
  <a href="{{ URL::to('/a_clients')}}">Klienci</a>
  <a href="{{ URL::to('/a_plans')}}">Plan</a>
  <a href="{{ URL::to('/a_accessories')}}">Akcesoria</a>
  <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"> Wyloguj</a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
  </form>

</div>

<!-- Page content -->
<div class="content">

<div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    @include('flash-message')

    @yield('content')
  </div>

</div>


</body>
</html>