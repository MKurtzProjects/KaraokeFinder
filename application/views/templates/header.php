
<!DOCTYPE html>
<html>
<head> 
    <title><?php echo $title ?> - Scoopda</title>

    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/masterstyle.css">
        <link rel="stylesheet" href="/css/selectize.css">
                <link rel="stylesheet" href="/css/selectize.default.css">
    <link rel="stylesheet" href=<?php echo '"/css/'.$page.'.css"' ?> >
    <script src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jRating.jquery.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="/js/jquery-1.11.2.min.js"></script>         
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/expander.js"></script>
    <script src="/js/ratings.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/selectize.min.js"></script>    



</head>

<body>
    <div id="site-header">
    <header>

        <a href="/index.php/home"><img id="logo" src="/images/scoopdalogo.png" alt="Scoopda"> </a> 
    <div id = "user_info">
    <p>Welcome <?php echo $username; ?>!</p>
    <a href="home/logout">Logout</a>
    </div>


<div id="header_menu">

<p id="city_select"> Now Serving Boston </p>    

<form  action="home" method=""  id="firstF">


    <select id="select-gear" name="select" class="" placeholder="Find an event..."  onchange="this.form.submit()">
    <option value="">Find an Event...</option>
    <optgroup label="Events">
    <option value="Karaoke">Karaoke</option>
    <option value="Trivia">Trivia Night </option>
    </optgroup>


    <optgroup label="Locations">
    <?php 
    $query1 = $this->db->query("SELECT * FROM event_info"); 
    ?>
    <?php foreach ($query1->result() as $row): ?>
    <option type="hidden" value=<?php echo "'".$row->location_name."'"?>> <?php echo '<div id="list-item">'.$row->location_name.'</div>'?> </option>


    <?php endforeach ?>
    </optgroup>

  </select>
    <button value="Submit" id="submit-button" alt="Submit"> <img src="/images/search_icon.png" alt="Search"> </button>
</form>


</div>

                    </div>
                    <script class="show">
                    $('#select-gear').selectize({
                       
                    });
                    </script>

</div>
    </div>
    </header>




<div class="main-container">

