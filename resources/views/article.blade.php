@extends('layouts.app')

@section('content')

  <div class="article">
    <div class="article-report">
      　レポート
    </div>
    
    <textarea id="" class="memory" placeholder="想い出を書き込みもう！"></textarea><br>
    
    <label>
      <input type="file" class="file-position">
    </label>
    
    <a href="" style="text-decoration:none;" class="article-text">
      <div class="css-button-shadow-border-sliding--sky">投稿する</div>
    </a>
  </div>


@endsection('content’)