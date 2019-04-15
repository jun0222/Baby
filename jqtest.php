<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

  $dsn = 'mysql:dbname=presentword;host=localhost;charset=utf8';
  $user = 'root';
  $password = 'root';
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
  );


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>present_words</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    var $count = 0

    $('input').on('keyup',function(){
    console.log('hoge')
    });

    function countUpsm() {
      document.getElementById("goods-point").innerHTML = $count += 1
    }
    function countUplg() {
      document.getElementById("goods-point").innerHTML = $count += 3
    }

  </script>
</head>
<body>

<header class="header">
  <form class="input">
    <input placeholder="いつも、ありがとう！！">
    <input type="submit" value="言葉を贈る" class="submit">
  </form>
</header>
<main class="main">
  <section class="contents">

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span id="goods-point">0</span>いいね
        </div>

        <div class="text">
        肩たたきしてあげたい。
        </div>
      <form action="" method="post">
        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x" onclick="countUpsm();"></i><i class="fa fa-thumbs-o-up fa-3x" onclick="countUplg();"></i>
        </div>
      </form>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとうと言いたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        お寿司を奢りたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        明日ご飯作ってあげたい
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        時間をあげたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        褒めたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        就活応援したい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        向き合って話したい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        肩たたきしてあげたい
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとうと言いたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        パン作ってあげたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとー！
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        肩たたきしてあげたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとうと言いたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        お寿司を奢りたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        肩たたきしてあげたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとうと言いたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        お寿司を奢りたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        肩たたきしてあげたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとうと言いたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        お寿司を奢りたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        肩たたきしてあげたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとうと言いたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        お寿司を奢りたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

    <div class="content_col">

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        肩たたきしてあげたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        ありがとうと言いたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>

      <div class="content">

        <div class="goods">
          <span>0</span>いいね
        </div>

        <div class="text">
        お寿司を奢りたい。
        </div>

        <div class="good_wrap">
          <i class="fa fa-thumbs-o-up fa-2x"></i>
          <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>

      </div>
    </div>

  </section>
</main>
<footer class="footer">
  &copy; Look!! want to do it.
</footer>
</body>
</html>

<style>
  body{
    margin: 0;
  }
  .header{
    background: #f0e68c;
    height: 100px;
    color: white;
    width: 980px;
    position: fixed;
    left: calc((100vw - 980px) / 2);
    right: calc((100vw - 980px) / 2);
    line-height: 100px;
  }
  .input{
    width: 250px;
    margin-left: auto;
    margin-right: auto;
  }
  .submit{
    background: #f0e68c;
    color: #6E6E6E;
  }
  .main{
    background: #ffffe0;
    text-align: center;
    color: #6E6E6E;
    width: 980px;
    padding-top: 90px;
    padding-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
  }
  .content_col{
    width: 100%;
    margin-top: 20px;
    overflow: hidden;
  }
  .content{
    float: left;
    width: 30%;
    margin: 0 15px;
    border: 1px solid #6E6E6E;
  }
  .fa-2x{
    margin-right: 10px;
  }
  .fa-thumbs-o-up:hover{
    cursor : pointer;
  }
  .goods{
    margin-bottom: 5px;
  }
  .footer{
    background: #f0e68c;
    height: 80px;
    text-align: center;
    color: white;
    width: 980px;
    margin-left: auto;
    margin-right: auto;
    color: #6E6E6E;
    line-height: 80px;
    font-size: 10px;
  }
</style>
