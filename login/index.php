<?php
require_once '../temp/gohome.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Giriş Yap</h2>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label>Kullanıcı Adı:</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>Parola:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
        <p>Hala kayıt olmadın mı ?  <a href="../register">Buraya Tıkla </a></p>
    </div>
</body>
</html>
