@extends('layouts.auth')

@section('content')

  <div class="login_main">
    
    <div class="login_text">たび跡ログ</div>
    
    <p class="login_title">ログイン</p>
    
    <form action="/login" method="post">
      @csrf
      <input type="email" class="login_email" placeholder="メールアドレス" name="email" value="{{ old('email') }}">
      <input type="password" class="login_password" placeholder="パスワード" name="password" value="{{ old('password') }}">
      <button class="login_button" type="submit">ログイン</button>
    </form>
    
    <p class="login_attention">アカウントをお持ちでない方はこちら</p>
    <a href="/register" style="text-decoration: none;">
      <p class="login_register">会員登録</p>
    </a>
    
  </div>

@endsection('content’)