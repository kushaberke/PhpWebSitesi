<?php
session_start();

// Oturumu sonlandır
session_destroy();

// Giriş sayfasına yönlendirin
header("Location: login.php");
exit();
?>