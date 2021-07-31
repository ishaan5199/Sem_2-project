<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel = "stylesheet" href = "Styles/home.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" href = "https://image.flaticon.com/icons/png/512/686/686458.png">
    <script type="text/javascript" src = "Js/index.js"></script>
</head>
<body>
    <header>
        <span class = "head">The _ Theatre</span>
        <span class = "head1"><a href = "details.php" target = "_blank"><span style = "padding: 10px" class = "details">My Tickets</span></a><span style = "padding: 10px"><?php echo "Welcome ".$_SESSION['name']?></span></span>
    </header>

    <div class = "current">
        <h3>Currently Showing -></h3>
        <div class = "grid_container">
            <div class="grid_item"><form action = "booking.php" method = "post" id = "form1"><input type = "hidden" name = "movnam" id = "data"></form><img src = "https://m.media-amazon.com/images/M/MV5BNGM3YzdlOWYtNjViZS00MTE2LWE1MWUtZmE2ZTcxZjcyMmU3XkEyXkFqcGdeQXVyODEyMTI1MjA@._V1_FMjpg_UX1000_.jpg" onclick = "load('Suicide Squad')"><br><label class = "head1" >Suicide Squad</label></div>
            <div class="grid_item"><img src = "https://amc-theatres-res.cloudinary.com/image/upload/f_auto,fl_lossy,h_465,q_auto,w_310/v1622147034/amc-cdn/production/2/movies/66600/66598/PosterDynamic/124544.jpg" onclick = "load('Jungle Cruise')"><br><label class = "head1">Jungle Cruise</label></div>
            <div class="grid_item"><img src = "https://1847884116.rsc.cdn77.org/tamil/home/sarpetta2732021tm.jpg" onclick = "load('Sarpatta Parambarai')"><br><label class = "head1">Sarpatta Parambarai</label></div>
            <div class="grid_item"><img src = "https://amc-theatres-res.cloudinary.com/image/upload/f_auto,fl_lossy,h_465,q_auto,w_310/v1625062614/amc-cdn/production/2/movies/66100/66056/PosterDynamic/125371.jpg" onclick = "load('Black Widow')"><br><label class = "head1">Black Widow</label></div>
            <div class="grid_item"><img src = "https://amc-theatres-res.cloudinary.com/image/upload/f_auto,fl_lossy,h_465,q_auto,w_310/v1624285046/amc-cdn/production/2/movies/55800/55831/PosterDynamic/125156.jpg" onclick = "load('Snake Eyes')"><br><label class = "head1">Snake Eyes</label></div>  
            <div class="grid_item"><img src = "https://m.media-amazon.com/images/M/MV5BMjI0NmFkYzEtNzU2YS00NTg5LWIwYmMtNmQ1MTU0OGJjOTMxXkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_.jpg" onclick = "load('Fast 9')"><br><label class = "head1">Fast 9</label></div>  
        </div>
    </div>

    <div class = "upcoming">
        <h3>Upcoming -></h3>
        <div class = "grid_container">
            <div class="grid_item"><img src = "https://m.media-amazon.com/images/M/MV5BYzM0YjJlMWEtZTg0MS00NjM4LWJkMDktN2VmZGU2ZjQ1YjI2XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg"><br><label class = "head1">Shang-Chi</label></div>
            <div class="grid_item"><img src = "https://m.media-amazon.com/images/M/MV5BYWQ2NzQ1NjktMzNkNS00MGY1LTgwMmMtYTllYTI5YzNmMmE0XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg"><br><label class = "head1">No Time To Die</label></div>
            <div class="grid_item"><img src = "https://upload.wikimedia.org/wikipedia/en/thumb/d/d7/RRR_Poster.jpg/220px-RRR_Poster.jpg"><br><label class = "head1">RRR</label></div> 
            <div class="grid_item"><img src = "https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Eternals_%28film%29_poster.jpeg/220px-Eternals_%28film%29_poster.jpeg"><br><label class = "head1">The Eternals</label></div>  
        </div>
    </div>

    <footer>
        <h3>2017-2021 The _ Theatre© | All Rights Reserved</h3>
    </footer>
</body>
</html>