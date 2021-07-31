<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel = "stylesheet" href = "Styles/login.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel = "icon" href = "https://image.flaticon.com/icons/png/512/686/686458.png">
    <script type="text/javascript" src = "Js/index.js"></script>
</head>
<body>
    <header>
        <div class="head" style = "width:inherit">The _ Theatre</div>
    </header>

    <div class = "container" style = "margin-top: 0px; margin-bottom: 0px;">
        
        <div class = "buttons">
            <div class="intro">Enter Credentials</div>
            <form action="check.php" method = "post" class="loginform">
                <input type="text" class="inp" name = "name" placeholder = "Enter Your Name" required = "required" autocomplete = "off">
                <br>
                <label class="pass">
                    <input type="password" class="inp" id = "sec" name = "pass" placeholder = "Enter password" required = "required" maxlength = "6">
                    <i id="icon" class="fa fa-eye-slash""></i>
                </label>
                <br>
                <button class="btn user" style = "padding:5px">Submit</button>
            </form>
        </div>

    </div>

    <footer>
        <h3>2017-2021 The _ Theatre© | All Rights Reserved</h3>
    </footer>
    <?php
        $_SESSION['location'] = $_SERVER['PHP_SELF']; 
    ?>
</body>
</html>