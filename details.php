<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel = "stylesheet" href = "Styles/login.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel = "icon" href = "https://image.flaticon.com/icons/png/512/686/686458.png">

</head>
<body>
    <div class = "final" style = "text-align: center;color: beige;font: 20px  bold Roboto">
        <?php
            $row;
            $conn = new mysqli("localhost","root","","pegasus");   
            if($conn->connect_errno){
                echo "Connection Failed";
                echo '<script>',
                'setTimeout( () =>{
                alert("Redirecting to Home page");
                window.location.replace("/Project_Pegasus/home.php");},1500)',
                '</script>'
                ;
            }
            else{
                echo "<br><br>Connection Successful<br><br><br>";
                $name = $_SESSION['name'];

                /* Search in booking table */
                $sql = "select * from booking where name='$name';";
                $result = $conn->query($sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = $result->fetch_assoc()){
                        echo '<h1>'.$row['movie'].'</h1>';
                        echo '
                        <table>
                            <tr><td>Name</td><td>'.$_SESSION['name'].'</td></tr>
                            <tr><td>Movie</td><td>'.$row['movie'].'</td></tr>
                            <tr><td>Date</td><td>'.$row['date'].'</td></tr>
                            <tr><td>Venue</td><td>'.$row['venue'].'</td></tr>
                            <tr><td>Seats</td><td>'.$row['seats'].'</td></tr>
                            <tr><td>Amount</td><td>'.$row['amount'].'</td></tr>
                        </table>
                        ';
                        $_SESSION['movie'] = $row['movie'];
                        
                        echo '<form action = "check.php" method = "post" id = "form3"><input type = "hidden" name = "movnam" id = "data"></form><button class="btn user" style = "padding:5px" onclick = "load()">Cancel ticket</button><br><br><br>';
                    }
                }
                else{
                    echo '<h1>No Tickets yet :(</h1>';
                }
                
            }
        ?>
        
        
    </p>
    
    <script type="text/javascript">
        var x = "<?php echo $_SESSION['movie']?>";
        function load(){
            var choose = confirm("Do you really want to cancel this ticket ?");
            if(choose == true){
                var inp = document.getElementById("data");
                inp.value = x;
                document.getElementById("form3").submit();
            }
            
        }
    </script>


    <?php
        $_SESSION['location'] = $_SERVER['PHP_SELF'];
    ?>
</body>
</html>