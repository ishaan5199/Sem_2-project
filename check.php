<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "Styles/login.css">
    <script type="text/javascript" src = "Js/index.js"></script>
    <title>Document</title>
</head>
<body>
    <p style = "text-align: center;color: azure;font: 20px small-caps bold Roboto">
        <?php

            /* Connection */
            $conn = new mysqli("localhost","root","","pegasus");
            if($conn->connect_errno){
                echo "Connection Failed";
                echo '<script>',
                'setTimeout( () =>{
                alert("Redirecting to welcome page");
                window.location.replace("/Project_Pegasus/index.php");},1500)',
                '</script>'
                ;
            }
            else{
                echo "<br><br>Connection Successful<br><br>";
        
                if($_SESSION['location'] == "/Project_Pegasus/create_user.php"){
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    
                    /* Create */

                    $sql = "select * from login_details where name='$name';";   //check for duplicates
                    $result = $conn->query($sql);
                    if(mysqli_num_rows($result) > 0){
                        echo "Username already exists";
                        echo '<script>',
                        'setTimeout( () =>{
                        alert("Redirecting to sign up page");
                        window.location.replace("/Project_Pegasus/create_user.php");},1500)',
                        '</script>'
                        ;
                    }

                    else{
                        $sql = "insert into login_details values('$name',$phone,'$pass','$email');";    //query
                        $result = $conn->query($sql);
                        if($result == true){
                            echo "<br>User Creation Successful<br>";
                            echo '<script>',
                            'setTimeout( () =>{
                            alert("Directing to home page");
                            window.location.replace("/Project_Pegasus/home.php");},1500)',
                            '</script>'
                            ;
                            $_SESSION['name'] = $name;
                            $_SESSION['phone'] = $phone;
                        }
                        else{
                            echo "User Creation unsuccessful";
                            echo '<script>',
                            'setTimeout( () =>{
                            alert("Redirecting to sign up page");
                            window.location.replace("/Project_Pegasus/create_user.php");},1500)',
                            '</script>'
                            ;
                        }
                    }
                }
                else if($_SESSION['location'] == "/Project_Pegasus/login.php"){
                    $name = $_POST['name'];
                    $pass = $_POST['pass'];
                    
                    
                    /* Read */
                    $sql = "select password from login_details where name='$name';";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if($row == null){
                        echo "<br>User with this name does not exist";
                        echo '<script>',
                        'setTimeout( () =>{
                        alert("Redirecting to Login page");
                        window.location.replace("/Project_Pegasus/login.php");},1000)',
                        '</script>'
                        ;
                    }
                    else{
                        $counter = 1;
                        $num = mysqli_num_rows($result);
                        while($row){               
                            if($row['password'] == $pass){
                                echo "<br>Login Successful";
                                echo '<script>',
                                'setTimeout( () =>{
                                alert("Directing to home page");
                                window.location.replace("/Project_Pegasus/home.php");},1000)',
                                '</script>'
                                ;
                                $_SESSION['name'] = $name;
                                break;
                            }
                            if($counter == $num){
                                echo "<br>Password is incorrect";
                                echo '<script>',
                                'setTimeout( () =>{
                                alert("Redirecting to Login page");
                                window.location.replace("/Project_Pegasus/login.php");},1000)',
                                '</script>'
                                ;
                                break;
                            }
                            $counter++;
                        }
                    }
                }
                else if($_SESSION['location'] == "/Project_Pegasus/booking.php"){
                    $name = $_SESSION['name'];
                    $movie = $_SESSION['movie'];
                    $date = $_POST['date'];
                    $venue = $_POST['venue'];
                    $seats = $_POST['seats'];
                    $amount = $_POST['amount'];

                    $sql = "insert into booking values('$name','$movie','$date','$venue',$seats,$amount);";    //query
                    $result = $conn->query($sql);
                    if($result == true){
                        echo "<br><br>Your tickets have been booked<br><br>Enjoy the show !";
                        echo '<script>',
                        'setTimeout( () =>{
                        alert("Directing to Home page");
                        window.location.replace("/Project_Pegasus/home.php");},1500)',
                        '</script>'
                        ;
                    }
                    else{
                        echo "There's some problem please try again, the amount will be refunded within 7 business days";
                        echo '<script>',
                        'setTimeout( () =>{
                        alert("Directing to home page");
                        window.location.replace("/Project_Pegasus/home.php");},3000)',
                        '</script>'
                        ;
                    }
                }
                else if($_SESSION['location'] == "/Project_Pegasus/details.php"){
                    $mov = $_POST['movnam'];
                    $sql = "delete from booking where movie='$mov';";
                    $result = $conn->query($sql);
                    if($result == true){
                        echo '<br><br>Your ticket for the movie : '.$mov.' has been canceled';
                    }
                    else{
                        echo '<br><br>Your ticket for the movie : '.$mov.' was not canceled';
                    ;
                    }
                    
                }
            } 
        ?>
    </p>
</body>
</html>