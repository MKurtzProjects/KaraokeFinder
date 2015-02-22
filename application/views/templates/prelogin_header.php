
<!DOCTYPE html>
<html>
<head>
    <title>Beta Login - Scoopda</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/selectize.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/masterstyle.css">
    <link rel="stylesheet" href="/css/login_view.css">
        <link rel="stylesheet" href="/css/eventinfo.css">
    <script src="/js/selectize.min.js"></script>    
   
</head>

    <body>


<nav class="navbar navbar-fixed-top">
      <div class="navbar-inner">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " href="/"><img id="logo" src="/images/scoopdalogo.jpg" alt="Scoopda"> </a>

</div>
    <div = "row">
    <div class="" >
<a href= "/index.php/new_event"><div class="navbar-right"> <button id="add_event" type="button" class="btn btn-warning" href= "./new_event">  <style>
#add_event a {color:white;}
</style> Add Event  </button></a>
   <!--   <ul class="nav navbar-nav navbar-right">
        <li><button class="btn-link" data-toggle="" href="#searchbox" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-user" ></span> Sign up</button></li>
        <li><button class="btn-link" data-toggle="" href="#searchbox" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-log-in" ></span> Login</button></li>

       
      </ul> -->


</div> 
    <button value="Submit" class="btn-link hidden-sm hidden-xs navbar-right" id="submit-button" alt="Submit"> <img src="/images/search_icon.png" alt="Search"> </button>

<div class="" id='search_bar'>
<form  action="" class = "navbar-right" method=""  id="firstF">
    <div id="input">
    <select id="select-gear" name="select" class="" placeholder="Find an event..."  onchange="this.form.submit()">
    <option value="">Find an Event...</option>
    <optgroup label="Events">
    <option value="Karaoke"></span></span>Karaoke Nights</option>
    <option value="Trivia">Trivia Nights </option>
    </optgroup>


    <optgroup label="Locations">
    <?php 
    $query1 = $this->db->query("SELECT DISTINCT venue_name FROM venues"); 
    ?>
    <?php foreach ($query1->result() as $row): ?>
    <option type="hidden" value=<?php echo "'".$row->venue_name."'"?>> <?php echo '<div id="list-item">'.$row->venue_name.'</div>'?> </option>


    <?php endforeach ?>
    </optgroup>

    </select>

                      <script >
                    $('#select-gear').selectize({
                       
                    });
                    </script>
</div>
</div>
</form>
</div>





        
</nav>



