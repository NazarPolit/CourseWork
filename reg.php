<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once "functions/functions.php";
        $title = "Registration";
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
        <h1>Registration</h1>
        <form action = "validation-form/check.php" method = "post">
            <input type = "text" class = "form-control" name = "login" id = "login" placeholder = "Type login"><br>
            <input type = "text" class = "form-control" name = "name" id = "name" placeholder = "Type name"><br>
            <input type = "password" class = "form-control" name = "pass" id = "pass" placeholder = "Type password"><br>
            <p>If you are already registered click here to<a href = "/"> authorize</a><br>
           <br><button class = "btn btn-success" type = "submit">Register</button><br>
        </form>  
        <?php else:?>
            <script>
                window.location.href = 'main.php';
            </script>
        <?php endif;?>
    </div>
    </div>
</body>
</html>