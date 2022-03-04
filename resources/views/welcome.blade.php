<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel-model-controller</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <div class="container">
    @foreach ($appoggio as $item)
      <div class="card">
        <span><strong>Titolo:</strong> {{ $item->title }}</span>
        <span><strong>Titolo originale:</strong> {{ $item->original_title }}</span>
        <span><strong>Nazionalità:</strong> {{ $item->nationality }}</span>
        <span><strong>Data d'uscita:</strong> {{ $item->date }}</span>
        <span><strong>Voto:</strong> {{ $item->vote }}</span>
      </div>
    @endforeach
  </div>
</body>

</html>
