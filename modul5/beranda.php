 <?php
    session_start();
    include("function.php");
    echo check_login();
?>

<html>
    <head><title>praktek login session</title></head>
    <body>
        <center><h1>Login Berhasil!</h1></center>
        <!-- <h3><a href="profil.php">Edit Profil</a></h3> -->
        <center><h3><a href="logout.php">Logout!</a></h3></center>
    </body>
</html>