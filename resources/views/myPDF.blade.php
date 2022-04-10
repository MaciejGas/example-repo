<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    <h1>Raport z zakresu {{ $start }} do {{ $end }}</h1>
    <p>{{ $date }}</p>
    <h3>Informacje o klientach</h3>
    <p> Nowi klienci  {{ $new_clients }}</p>
    <p> Wszyscy klienci {{ $total_clients }}</p>
    <p> Nowe Rezerwacje {{ $new_orders }} </p>
    <p> Wszystkie rezerwacje {{ $total_orders }}</p>
    <h3>Stan Akcesoriów</h3>
    @foreach ($accessories as $accessory)
      <p>{{$accessory->name }} : {{$accessory->amount }}</p>
    @endforeach
</body>
</html>