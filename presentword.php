<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

if(!empty($_POST)){

  define('MSG01','文字を入れてくれ！！Baby!!!!');

  $err_msg = array();

if(empty($_POST['content'])){

  $err_msg['content'] = MSG01;

  }
}

  if(empty($err_msg)){

  if(!empty($_POST)){
  $content = $_POST['content'];

  $dsn = 'mysql:dbname=presentword;host=localhost;charset=utf8';
  $user = 'root';
  $password = 'root';
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
  );
  //post送信された場合DBに接続する。

  $dbh = new PDO($dsn, $user, $password, $options);
  $stmt = $dbh->prepare('INSERT INTO posts (content) VALUES (:content)');
  $stmt->execute(array(':content' => $content));
  }
}

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

    $(function(){
      $('.fa-3x').on('click',function(){
      document.getElementById("goods-point").innerHTML = $count += 3
      });

      $('.fa-2x').on('click',function(){
      document.getElementById("goods-point").innerHTML = $count += 1
      });
    });

  </script>
</head>
<body>

<header class="header">
  <form action="" method="post">
    <span class="err_msg"><?php if(!empty($err_msg['content'])) echo $err_msg['content']; ?></span>
    <input type="text" name="content" placeholder="Thank you!!!">
    <input type="submit" value="Baby!!!!!" class="submit">
  </form>
</header>
<main class="main">
  <section class="contents">
    <div class="content">
      <div class="goods">
        <span id="goods-point">0</span>いいね
      </div>
      <div class="text">
      <?php if(!empty($content)) echo $content; ?>
      <?php $user = 'root';
            $password = 'root';
            $dbName = 'presentword';
            $host = 'localhost:8889';
            $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM posts";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row){

      echo "<td>", ($row['content']), "</td><br>";

    }
  }catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();

    echo es($row['content']);
  } ?>

      </div>
      <div class="good_wrap">
        <i class="fa fa-thumbs-o-up fa-2x"></i><i class="fa fa-thumbs-o-up fa-3x"></i>
      </div>
    </div>
  </section>
</main>
<footer class="footer">
  &copy; Thank you baby!!
</footer>
</body>
</html>

<style>
  body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .header{
    background: #504180;
    height: 100px;
    color: white;
    width: 588px;
    position: fixed;
    left: calc((100vw - 588px) / 2);
    right: calc((100vw - 588px) / 2);
    top: 0;
    line-height: 100px;
  }
  form{
    width: 200px;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
  }
  form span{
    color: #1da1f2;
  }
  form input{
    display: inline;
  }
  input[type="text"]{
    background: #9F82FF;
    color: #504180;
    border: none;
  }
  .submit{
    background: #504180;
    color: #9F82FF;
    border: none;
  }
  .main{
    background: #9F82FF;
    text-align: center;
    color: #6E6E6E;
    width: 588px;
    padding-top: 100px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    overflow: hidden;
  }
  .content{
    float: left;
    width: 100%;
    border-bottom: 1px solid #8F75E6;
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
    background: #504180;
    height: 80px;
    text-align: center;
    color: white;
    width: 588px;
    margin-left: auto;
    margin-right: auto;
    color: #9F82FF;
    line-height: 80px;
    font-size: 10px;
  }
</style>
