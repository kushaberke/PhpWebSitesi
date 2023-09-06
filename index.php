<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hoş Geldiniz, <?php echo $username; ?></h2>
        <!-- Ana sayfa içeriği buraya eklenebilir -->
        <a href="logout.php" class="btn btn-danger">Çıkış Yap</a>
    </div>
</body>
</html>