<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        } elseif ($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }

?>


<form action="login.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" size="20"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="password" size="20"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="login" value="proses"></td>
        </tr>
    </table>
</form>
    
</body>



</html>