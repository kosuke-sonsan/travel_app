<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/loginHome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/articleView.css') }}">
  <link rel="stylesheet" href="{{ asset('css/articleEdit.css') }}">
  <link rel="stylesheet" href="{{ asset('css/article.css') }}">
  <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/list.css') }}">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  @component('components.header')
  @endcomponent
  @yield('content')
</body>
</html>