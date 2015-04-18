<style>
#add_event {margin-right: 10px;}
</style> 


<!DOCTYPE html>
<html>
<head>
    <title>Scoopda</title>
<!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="icon" href="/images/favicon.png" type="image/png" sizes="16x16">

      <link rel="stylesheet" href="/css/selectize.css">

    <link rel="stylesheet" href="/css/masterstyle.css">
    <link rel="stylesheet" href="/css/login_view.css">

    <link rel="stylesheet" href="/css/login_view.css">
    <script src="/js/selectize.min.js"></script>    


    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/src/js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
</head>

    <body>


<nav class="navbar navbar-fixed-top">
      <div class="navbar-inner">
    <div class="container-fluid">
    <div class="">
    <a class="navbar-brand hidden-xs" href="/"><img id="logo" src="/images/scoopdalogo.jpg" alt="Scoopda"> </a>
    <a class="navbar-brand hidden-lg hidden-md hidden-sm col-xs-4" href="/"><img id="logo" src="/images/smallscoopdalogo.png" alt="Scoopda"> </a>





<form  action="" class = "navbar-right col-lg-6 col-md-5 col-sm-6 col-xs-8" method=""  id="firstF">
    <div id="input" class="">
    <select id="select-gear" name="select" class="" placeholder="Trivia & karaoke events"  onchange="this.form.submit()">
    <option value="">Find an Event...</option>
    <optgroup label="Events">
    <option value="Karaoke"></span></span>Karaoke Nights</option>
    <option value="Trivia">Trivia Nights </option>
    </optgroup>


  <!--  <optgroup label="Locations">
    <?php 
    // $query1 = $this->db->query("SELECT DISTINCT venue_name FROM venues"); 
    ?>
    <?php // foreach ($query1->result() as $row): ?>
    <option type="hidden" value=<?php echo "'".$row->venue_name."'"?>> <?php echo '<div id="list-item">'.$row->venue_name.'</div>'?> </option>


    <?php// endforeach ?>
    </optgroup>-->

    </select>

                      <script >
                    $('#select-gear').selectize({
                       
                    });
                    </script>
</div>

</form>
<?php if($this->session->userdata('logged_in'))
   {
    echo '<a class="navbar-brand navbar-right" href="home/logout">Logout</a>';
   }    
?> 
</div>
<div class="navbar-right hidden-sm hidden-xs">
<a href= "/index.php/new_event">
<button id="add_event" type="button" class="btn btn-warning " href= "./new_event">  
Add Event  </button>
</a>
</div>
  
</nav>



