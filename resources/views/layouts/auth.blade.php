<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainHome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/loginHeader.css') }}">
  <link rel="stylesheet" href="{{ asset('css/articleView.css') }}">
  <link rel="stylesheet" href="{{ asset('css/articleEdit.css') }}">
  <link rel="stylesheet" href="{{ asset('css/article.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <link rel="stylesheet" href="{{ asset('css/article.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  @component('components.login-header')
  @endcomponent
  @yield('content')
</body>
</html>