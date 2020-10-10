<?php
session_start();
require_once('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$sql = 'SELECT password FROM MoreCoke_w11_blog_users WHERE username=?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$passwordHash = $row['password'];
$checkPassword = password_verify($password, $passwordHash);
if ($checkPassword) {
  header('Location: index.php');
  $_SESSION['username'] = $username;
} else {
  die(header('Location: login.php?errCode=1'));
}

// 建帳密
// $username = $_POST['username'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// $sql = 'INSERT INTO MoreCoke_w11_blog_users (username, password) VALUE (?,?)';
// $stmt = $conn->prepare($sql);
// $stmt->bind_param('ss', $username, $password);
// $result = $stmt->execute();
// if (!$result) {
//   die(header('Location: login.php?errCode=1'));
// }
// header('Location: index.php');
