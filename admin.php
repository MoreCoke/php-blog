<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
if (!$username) {
  header('Location: index.php');
}
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
      <li><a class="blog-navlist__item" href="add_post.php">新增文章</a></li>
      <li><a class="blog-navlist__item" href="handle_logout.php">登出</a></li>
    </ul>
  </nav>
  <div class="blog-topic">
    <h1>存放技術之地 - 後台</h1>
    <span>Welcome to my blog</span>
  </div>
  <div class="blog-wrapper">
    <div class="blog-block__admin">
      <div class="admin-post">
        <div>嗨～歡迎來到程式新手村 feat. 胡斯的異想世界</div>
        <div>
          <span class="admin-post__time">2020/07/01 10:15</span>
          <a class="admin-post__setting-btn" href="edit.php">編輯</a>
          <a class="admin-post__setting-btn" href="handle_delete.php">刪除</a>
        </div>
      </div>
      <div class="admin-post">
        <div>嗨～歡迎來到程式新手村 feat. 胡斯的異想世界</div>
        <div>
          <span class="admin-post__time">2020/07/01 10:15</span>
          <a class="admin-post__setting-btn" href="edit.php">編輯</a>
          <a class="admin-post__setting-btn" href="handle_delete.php">刪除</a>
        </div>
      </div>
    </div>

  </div>
</body>

</html>