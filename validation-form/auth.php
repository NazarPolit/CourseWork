<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $pass = md5($pass."qwertyuio123456");

   $mysql = new mysqli("localhost", "root", "", "newsbase");
   $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
   $user = $result->fetch_assoc();  
   if(count($user) == 0){
    echo "The user hasn't been found";
    exit();
   }

   setcookie('user', $user['name'], time() + 3600, "/");

   $mysql->close();

   header('Location: /main.php');
?>