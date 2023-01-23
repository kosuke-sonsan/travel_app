loginhome

@extends('layouts.app')

@section('content')

  <div class="total-count">
    <p class="total-count-text">さんの訪れた都道府県はつです！</p>
  </div>
  
  <div id="japan-map" class="clearfix">

<div id="hokkaido-touhoku" class="clearfix">
  <p class="area-title">北海道・東北</p>
  <div class="area">
    <a href="#">
      <div id="hokkaido">
        <p>北海道</p>
      </div>
    </a>
    <a href="#">
      <div id="aomori">
        <p>青森</p>
      </div>
    </a>
    <a href="#">
      <div id="akita">
        <p>秋田</p>
      </div>
    </a>
    <a href="#">
      <div id="iwate">
        <p>岩手</p>
      </div>
    </a>
    <a href="#">
      <div id="yamagata">
        <p>山形</p>
      </div>
    </a>
    <a href="#">
      <div id="miyagi">
        <p>宮城</p>
      </div>
    </a>
    <a href="#">
      <div id="fukushima">
        <p>福島</p>
      </div>
    </a>
  </div>
</div>

<div id="kantou">
  <p class="area-title">関東</p>
  <div class="area">
    <a href="#">
      <div id="gunma">
        <p>群馬</p>
      </div>
    </a>
    <a href="#">
      <div id="tochigi">
        <p>栃木</p>
      </div>
    </a>
    <a href="#">
      <div id="ibaraki">
        <p>茨城</p>
      </div>
    </a>
    <a href="#">
      <div id="saitama">
        <p>埼玉</p>
      </div>
    </a>
    <a href="#">
      <div id="chiba">
        <p>千葉</p>
      </div>
    </a>
    <a href="#">
      <div id="tokyo">
        <p>東京</p>
      </div>
    </a>
    <a href="#">
      <div id="kanagawa">
        <p>神奈川</p>
      </div>
    </a>
  </div>
</div>

<div id="tyubu" class="clearfix">
  <p class="area-title">中部</p>
  <div class="area">
    <a href="#">
      <div id="nigata">
        <p>新潟</p>
      </div>
    </a>
    <a href="#">
      <div id="toyama">
        <p>富山</p>
      </div>
    </a>
    <a href="#">
      <div id="ishikawa">
        <p>石川</p>
      </div>
    </a>
    <a href="#">
      <div id="fukui">
        <p>福井</p>
      </div>
    </a>
    <a href="#">
      <div id="nagano">
        <p>長野</p>
      </div>
    </a>
    <a href="#">
      <div id="gifu">
        <p>岐阜</p>
      </div>
    </a>
    <a href="#">
      <div id="yamanashi">
        <p>山梨</p>
      </div>
    </a>
    <a href="#">
      <div id="aichi">
        <p>愛知</p>
      </div>
    </a>
    <a href="#">
      <div id="shizuoka">
        <p>静岡</p>
      </div>
    </a>
  </div>
</div>

<div id="kinki" class="clearfix">
  <p class="area-title">近畿</p>
  <div class="area">
    <a href="#">
      <div id="kyoto">
        <p>京都</p>
      </div>
    </a>
    <a href="#">
      <div id="shiga">
        <p>滋賀</p>
      </div>
    </a>
    <a href="#">
      <div id="osaka">
        <p>大阪</p>
      </div>
    </a>
    <a href="#">
      <div id="nara">
        <p>奈良</p>
      </div>
    </a>
    <a href="#">
      <div id="mie">
        <p>三重</p>
      </div>
    </a>
    <a href="#">
      <div id="wakayama">
        <p>和歌山</p>
      </div>
    </a>
    <a href="#">
      <div id="hyougo">
        <p>兵庫</p>
      </div>
    </a>
  </div>
</div>

<div id="tyugoku" class="clearfix">
  <p class="area-title">中国</p>
  <div class="area">
    <a href="#">
      <div id="tottori">
        <p>鳥取</p>
      </div>
    </a>
    <a href="#">
      <div id="okayama">
        <p>岡山</p>
      </div>
    </a>
    <a href="#">
      <div id="shimane">
        <p>島根</p>
      </div>
    </a>
    <a href="#">
      <div id="hiroshima">
        <p>広島</p>
      </div>
    </a>
    <a href="#">
      <div id="yamaguchi">
        <p>山口</p>
      </div>
    </a>
  </div>
</div>

<div id="shikoku" class="clearfix">
  <p class="area-title">四国</p>
  <div class="area">
    <a href="#">
      <div id="kagawa">
        <p>香川</p>
      </div>
    </a>
    <a href="#">
      <div id="ehime">
        <p>愛媛</p>
      </div>
    </a>
    <a href="#">
      <div id="tokushima">
        <p>徳島</p>
      </div>
    </a>
    <a href="#">
      <div id="kouchi">
        <p>高知</p>
      </div>
    </a>
  </div>
</div>

<div id="kyusyu" class="clearfix">
  <p class="area-title">九州・沖縄</p>
  <div class="area">
    <a href="#">
      <div id="fukuoka">
        <p>福岡</p>
      </div>
    </a>
    <a href="#">
      <div id="saga">
        <p>佐賀</p>
      </div>
    </a>
    <a href="#">
      <div id="nagasaki">
        <p>長崎</p>
      </div>
    </a>
    <a href="#">
      <div id="oita">
        <p>大分</p>
      </div>
    </a>
    <a href="#">
      <div id="kumamoto">
        <p>熊本</p>
      </div>
    </a>
    <a href="#">
      <div id="miyazaki">
        <p>宮崎</p>
      </div>
    </a>
    <a href="#">
      <div id="kagoshima">
        <p>鹿児島</p>
      </div>
    </a>
    <a href="#">
      <div id="okinawa">
        <p>沖縄</p>
      </div>
    </a>
  </div>
</div>

</div>
@endsection
