<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel = "stylesheet" href = "Styles/login.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" href = "https://image.flaticon.com/icons/png/512/686/686458.png">
    <script type="text/javascript" src = "Js/index.js"></script>
</head>
<body>
    <header>
        <span class = "head">The _ Theatre</span>
        <span class = "head1"><span style = "padding: 10px"><?php echo "Welcome ".$_SESSION['name']?></span></span>
    </header>

    <div class = "container" style = "margin-top: 0px; margin-bottom: 0px;">
        
        <div class = "buttons">
            <div class="intro">Tickets for <label style = "text-decoration:underline" id = "movie"><?php $_SESSION['movie'] = $_POST['movnam'] ; echo $_POST['movnam']?></label><br><br>Cost/ticket : &#8377 <label id = "cost1">
                <?php
                    $conn = new mysqli("localhost","root","","pegasus");
                    $name = $_POST['movnam'];
                    $sql = "select amount from cost where movie='$name';";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo $row['amount'];
                ?>
            </label></div><br>
            <form action="check.php" method = "post" class="loginform" id = "form2" onclick= "calc()">
                <input type="date" class="inp" name = "date"  required = "required">
                <br>
                <select class = "inp" style = "text-align:center" name = "venue" required = "required">
                    <option selected>Choose a venue</option>
                    <option>PVR Cinemas : Crown Plaza, Sector-15</option>
                    <option>SRS Cinemas : Station 1 ELDECO, Sector-12</option>
                    <option>PVR Cinemas : Logix Mall, Sector-41</option>
                    <option>INOX : EF3 Mall, Sector-20A</option>
                    <option>INOX : Crown Interiorz, Sector-35</option>
                    <option>Wave Cinemas : Wave Mall, Sector-18</option>
                </select>
                <br>
                <input type="number" class="inp" name = "seats"  required = "required" placeholder="Choose number of seats" value = 1  required = "required">
                <br>
                <input type = "hidden" name = "amount" id = "data">
                <button class="btn user" style = "padding:5px" onclick = "load()">Book : amount-> &#8377 <label id = "cost2">0</label></button>
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