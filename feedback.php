<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "Feedback";
        require_once "blocks/head.php";
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        $(document).ready (function (){
            $("#done").click (function (){
                $('#messageShow').hide ();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();
                var fail = "";
                if(email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
                    fail = "You typed incorrect email";
                else if(subject.length < 5) 
                    fail = "Subject must include at least 5 symbols";
                else if(message.length < 10) 
                    fail = "Message must include at least 10 symbols";
                if (fail != ""){ 
                    $('#messageShow').html (fail + "<div class='clear'><br></div>");
                    $('#messageShow').show ();
                    return false;
                }
                $.ajax({
                        url: '/ajax/feedback.php',
                        type: 'POST',
                        cache: false,
                        data: {email: email, subject: subject, message: message},
                        dataType: 'html',
                            success: function (data) {
                            $('#messageShow').html(data);
                            $('#messageShow').show();
                        }
                    });
            });
        });
    </script>
</head>
<body>
    <?php require_once "blocks/header.php"?>
    <div id = "wrapper">
        <div id="leftCol">
            <input type = "text" placeholder = "Email" id = "email" name = "email"><br />
            <input type = "text" placeholder = "Subject" id = "subject" name = "subject"><br />
            <textarea name = "message" id = "message" placeholder = "Type your massage here"></textarea><br/>
            <input type = "button" name = "done" id = "done" value = "Done">
            <div id = "messageShow"></div>
        </div>
        <?php require_once "blocks/rightCol.php"?>
    </div>
    <?php require_once "blocks/footer.php"?>
</body>
</html>