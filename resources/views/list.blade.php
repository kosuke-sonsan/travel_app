@extends('layouts.app')

@section('content')

<div class="list">
  <div class="keyword">
    <form method="get" action="#" class="search_container">
      <input type="text" size="25" placeholder="都道府県検索">
      <input type="submit" value="Search">
    </form>
  </div>

  <table class="list_table">
    <tr>
      <th>日付</th>
      <th>都道府県</th>
      <th>記事</th>
    </tr>
  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
@endsection('content’)