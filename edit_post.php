<?php
session_start();
require_once('conn.php');
require_once('utils.php');
$username = isSessionUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/reset.css" />
  <link rel="stylesheet" href="./css/index.css" />
  <title>Blog</title>
</head>

<body>
  <nav>
    <ul class="blog-navlist">
      <li><a class="logo" href="index.php">Who's Blog</a></li>
      <li><a class="blog-navlist__item" href="#">文章列表</a></li>
      <li><a class="blog-navlist__item" href="#">分類專區</a></li>
      <li><a class="blog-navlist__item" href="#">關於我</a></li>
    </ul>
    <ul class="blog-navlist">
      <?php if ($username) { ?>
        <li><a class="blog-navlist__item" href="admin.php">管理後臺</a></li>
        <li><a class="blog-navlist__item" href="handle_logout.php">登出</a></li>
      <?php } else { ?>
        <li><a class="blog-navlist__item" href="login.php">登入</a></li>
      <?php } ?>
    </ul>
  </nav>
  <div class="blog-topic">
    <h1>存放技術之地</h1>
    <span>Welcome to my blog</span>
  </div>
  <div class="blog-wrapper">
    <div class="blog-block__edit">
      <form class="blog-block__edit-form" method="POST" action="handle_edit_post.php">
        <div class="edit-title">更改文章</div>
        <input class="blog-block__edit-input" type="text" name="title" placeholder="請輸入文章標題...">
        <textarea class="blog-block__edit-textarea" name="content" cols="30" rows="10">請輸入內容</textarea>
        <input class="blog-block__edit-submit" type="submit" value="送出文章">
        <div class="clearboth"></div>
      </form>
    </div>
  </div>
</body>

</html>