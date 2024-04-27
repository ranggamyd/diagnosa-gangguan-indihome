<?php
session_start();
if (!isset($_SESSION['agent_forum']) || ($_SESSION['agent_forum'] != md5($_SERVER['HTTP_USER_AGENT']))) {
    header("location: index.php");
    exit();
}
$sesi = $_SESSION['user_forum'];
