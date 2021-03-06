<?php
$user = Auth::user();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>fukuun</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/layout.css')}}">
</head>

<body>
    <div id="app">
      <tab-component :user={{$user}}></tab-component>
      <side-bar></side-bar>
      <div class="row">
        <div class="offset-3 col-sm-7 offset-3">
          <router-view></router-view>
        </div>
      </div>
    </div>
    <script src="{{mix('/js/app.js')}}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>

</html>