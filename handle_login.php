<?php
require_once('conn.php');


$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = 'INSERT INTO morecoke_blog_users (username, password) VALUE (?,?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $username, $password);
$result = $stmt->execute();
if (!$result) {
  die(header('Location: login.php?errCode=1'));
}
header('Location: index.php');
