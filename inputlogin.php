<html>
    <head><title>Form Login By Reynaldi</title></head>
        <body>
    <h1><center>Halaman Login "Filmku Aja"<center></h1>
    <FORM ACTION="" METHOD="POST" NAME="input">
    <h3>Username : <input type="text" name="username"></h3><br>
    <h3>Password : <input type="password" name="password"></h3><br>
    <input type="submit" name="input" value="Login"><br>
    <h1><center>Yang Berhasil Login Akan Mendapatkan Piring Cantik ^_^<center><h1>
    </FORM>
        </body>
</html>
<?php
    if (isset($_POST['input'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
    if ($user == "rey" && $pass == "123") {
        $masuk = $_POST['Login'];
        header("Location: Website Film Kelompok 4 By Reky/Home.html");
    } else {
        header("Location: https://shafou.com/");
        }
}
?>  