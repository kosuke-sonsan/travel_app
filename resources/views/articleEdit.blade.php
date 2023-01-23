@extends('layouts.app')

@section('content')

<div class="edit-view">
  <p class="edit-title">のレポート</p>
  <p>(content挿入)</p><br>
  <div>(画像挿入)</div><br>
  
  <textarea class="comment" id=""></textarea>
  
  <div class="button_position">
    <a href="">
      <button class="css-button-3d--grey">再投稿</button>
    </a>
    <a href="">
      <button class="css-button-sharp--sky">戻る</button>
    </a>
  </div>
</div>

@endsection('content’)