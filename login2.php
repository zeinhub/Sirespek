<?php
require 'config/koneksi.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user_acc WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">
                    <input type="text" name="username" id="username">
                </label>
            </li>
            <li>
                <label for="password">
                    <input type="password" name="password" id="password">
                </label>
            </li>
            <li>
                <button type="submit" name="login">Submit</button>
            </li>
        </ul>
    </form>
</body>

</html>