<?php
include("../temp/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
           session_start();
           $_SESSION['username'] = $username;
            header("Location: ../home");
            exit();

        } else {
            echo "Parola yanlış.";
        }
    } else {
        echo "Kullanıcı bulunamadı.";
    }

    $conn->close();
}
?>