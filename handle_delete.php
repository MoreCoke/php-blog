<?php
session_start();
require_once('conn.php');
require_once('utils.php');
$username = isSessionUser();
$id = (int)$_GET['id'];
$page = $_GET['page'];
$sql = 'UPDATE MoreCoke_w11_blog_posts SET is_deleted=1 WHERE id=? AND username=?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('is', $id, $username);
$result = $stmt->execute();
if (!$result) {
  die($conn->error);
}
if ($page === 'index') {
  header('Location: index.php');
}
if ($page === 'admin') {
  header('Location: admin.php');
}
