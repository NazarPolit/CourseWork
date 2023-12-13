<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = "Authorization";
        require_once "blocks/head.php";
    ?>
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 d-flex justify-content-center">
    <div class="text-center">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <h1>Authorization</h1>
        <form action = "validation-form/auth.php" method = "post">
            <input type = "text" class = "form-control" name = "login" id = "login" placeholder = "Type login"><br>
            <input type = "password" class = "form-control" name = "pass" id = "pass" placeholder = "Type password"><br>
            <p>If you don't have an account type here to<a href = "/reg.php"> register</a>.<br>
           <br><button class = "btn btn-success" type = "submit">Authorize</button><br>
        </form>  
        <!-- <?php else:?>
            <p>Hi <?=$_COOKIE['user']?>. Fot exiting type<a href = "validation-form/exit.php">here</a>.</p> -->
        <?php endif;?>
    </div>
    </div>
</body>
</html>