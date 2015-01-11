
<!DOCTYPE html>
<html>
<head> 
    <title><?php echo $title ?> - Scoopda</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/masterstyle.css">
    <link rel="stylesheet" href=<?php echo '"/css/'.$page.'.css"' ?> >




</head>

<body>
    <div id="site-header">
    <header>


      <form action="home" method="GET">
            Username: <input type="text" id="" name="city">
            <input type="submit" id="submit" name="submit" value="Go">
     

        </form> 

        <a href="/index.php/home"><img src="/images/scoopdalogo.png" alt="KarKar"> </a> 

    <p>Welcome <?php echo $username; ?>!</p>
    <a href="home/logout">Logout</a>
    </div>
    </div>
    </header>





<div class="main-container">

