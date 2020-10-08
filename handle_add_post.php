<?php
session_start();
require_once('conn.php');
require_once('utils.php');
isSessionUser();
$title = isset($_POST['title']) ? $_POST['title'] : null;
$content = isset($_POST['content']) ? $_POST['content'] : null;
if (!$title || !$content) {
  header('Location: add_post.php?errCode=1');
}

$sql = 'INSERT morecoke_blog_posts (title, content) VALUES (?,?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $title, $content);
$result = $stmt->execute();
if ($result) {
  header('Location: add_post.php');
} else {
  die($conn->error);
}
