<?php
session_start();
function isSessionUser()
{
  $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
  if (!$username) {
    header('Location: index.php');
  }
}
