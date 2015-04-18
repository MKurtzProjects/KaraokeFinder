
<style>
#filter{font-size:  20px;} #cityselect{width: 100%;}
 .repeat{color:#009933}
/* .img-thumbnail{min-height: 100px; min-width: 100px;} */
  #card_title h4 {padding-top:0px; margin-top: 0px}
  #title_box {max-height: 60px;}
  #venue_name {padding: 0px;}
</style>

<!-- Google analytics tracking -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15626733-2', 'auto');
  ga('send', 'pageview');

</script>

<?php 
$test=" ";
if (isset($_GET['select'])){
    $test = 'collapse'; echo "<br><br><br>";
}
echo "<div class='jumbotron row ".$test." hidden-xs'>";
?>


    <div class="col-sm-2">
    </div>

    <div class= "col-sm-9">
        <h1> Scoopda
            <?php 
                if (isset($_GET['select'])) {
                echo ": ".$_GET["select"]; }
            ?>
        </h1>          
        <h1 class = 'lead'> Find local pub events</h1>
        <form class="hidden-sm hidden-xs" action="/" method="get" id="">
            <div class="btn-group btn-group-lg " role="group" aria-label="...">
                <button type="submit"  name="select" value="Trivia" class="btn btn-default"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Trivia Nights</button>
                <button type="submit" name="select" value="Karaoke" class="btn btn-default"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Karaoke Nights</button>

                <!--    <div class="btn-group btn-group-lg" role="group">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      Dancing
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Disco Night</a></li>        
                      <li><a href="#">80s Night</a></li>

                    </ul>
                  </div>
                   <div class="btn-group btn-group-lg" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      Live Music
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Bluegrass</a></li>
                      <li><a href="#">Folk</a></li>        
                      <li><a href="#">Rock</a></li>
                      <li><a href="#">Jazz</a></li>
                    </ul>
                  </div>
                -->
            </div>
        </form>

        <form action="/" method="get" id="" class="hidden-lg hidden-md">
            <div class="btn-group  btn-group" role="group" aria-label="...">
                <button type="submit"  name="select" value="Trivia" class="btn btn-default"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Trivia Nights</button>
                <button type="submit" name="select" value="Karaoke" class="btn btn-default"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Karaoke Nights</button>

                <!--    <div class="btn-group btn-group-lg" role="group">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      Dancing
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Disco Night</a></li>        
                      <li><a href="#">80s Night</a></li>

                    </ul>
                  </div>
                   <div class="btn-group btn-group-lg" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      Live Music
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Bluegrass</a></li>
                      <li><a href="#">Folk</a></li>        
                      <li><a href="#">Rock</a></li>
                      <li><a href="#">Jazz</a></li>
                    </ul>
                  </div>
                -->
            </div>
        </form>
    </div>
</div>
<div class="hidden-lg hidden-md">
<br><br>
</div>
<?php 
if (isset($_GET['select'])){
    echo "";
}

?>


<!--
       <h2>Beta Access Login</h2>
       <div class="form-group">
          <span class="text-warning"> <?php /// echo validation_errors(); ?> </span>
        

       <?php //echo form_open('verifylogin'); ?>-->
        
 <!--        <label for="username">Username:</label>
         <input class="form-control" type="text" size="" id="username" name="username"/>
         <br/>
         <label for="password">Password:</label>
         <input class="form-control" type="password" size="" id="password" name="password"/>
         <br/>
         <input type="submit" class="btn btn-default" value="Login"/>
     </div>
    </div>
    <div>
    </div>
</div>
-->

</div>
<div class="container">

    <div id="" class="col-sm-3"> 
    <br>
<br>
<!-- Mobile Medu -->


    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    </span><h3 class="panel-title hidden-lg hidden-md hidden-sm"> <span class="glyphicon glyphicon glyphicon-filter" aria-hidden="true"></span> Refine </h3>
    </a>

  <div class="collapse panel panel-default hidden-lg hidden-md" id="collapseExample">
  <div class="panel-headireng">
  </div>
  <form class= "" id="" action="#" method="GET" id="" >   
    <ul class="list-group"  >
        <li class="list-group-item">
            <div class="container-fluid" id="">
            <select id="select-form" name="city" class="" placeholder="City">
                <option value="" disabled selected>City</option>
  
                <option value="Boston">Boston</option>
                <option value="Cambridge">Cambridge</option>
                <option value="Jamaica Plan">Jamaica Plain</option>
                <option value="Somerville">Somerville</option>

            </select>  
        </div>

<style>
#select-input {width: 10px;}
</style>
        </li>

        <li class="list-group-item">
         
            <div class="container">
                <h4> 
                <a class="dropdown-toggle" data-toggle="collapse" href="#day">
                Day <span class="caret"></span>
                </a> 
                </h4>
               
                <div id="day" class="collapse" role="menu">
                    <input type="radio" name="day" value="Sunday"> Sunday
                    <br>
                    <input type="radio" name="day" value="Monday"> Monday
                    <br>
                    <input type="radio" name="day" value="Tuesday"> Tuesday
                    <br>
                    <input type="radio" name="day" value="Wednesday"> Wednesday
                    <br>
                    <input type="radio" name="day" value="Thursday"> Thursday
                    <br>
                    <input type="radio" name="day" value="Friday"> Friday
                    <br>
                    <input type="radio" name="day" value="Saturday"> Saturday
                    <br>
                </div>
            </div>
        </li>
        <!--<li class="list-group-item">Morbi leo risus</li>-->        
        <input type="hidden" name="select" value= <?php echo "'".htmlspecialchars($select, ENT_QUOTES)."'"; ?> />
 
    <div class="panel-body"><input type="submit" value="Submit"></div>
      </ul>
        



<script>
        $('#select-form').selectize({
    create: true,
    sortField: 'text'
});
</script>
</div>
</form>
         

   <!-- Web MENU -->



<div class="panel panel-default hidden-xs" >

  <div class="panel-heading">

    <h3 class="panel-title"> <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Add Filter </h3>

  </div>
<form class= "" id="" action="#" method="GET" id="" >   
    <ul class="list-group"  >
        <li class="list-group-item">
            <div class="container-fluid" id="">
            <select id="select-form2" name="city" class="" placeholder="City">
                <option value="" disabled selected>City</option>
  
                <option value="Boston">Boston</option>
                <option value="Cambridge">Cambridge</option>
                <option value="Jamaica Plan">Jamaica Plain</option>
                <option value="Somerville">Somerville</option>
            </select>  
        </div>

<style>
#select-input {width: 10px;}
</style>
        </li>

        <li class="list-group-item">
         
            <div class="container">
                <h4> 
                <a class="dropdown-toggle" data-toggle="collapse" href="#day2" >
                Day <span class="caret"></span>
                </a> 
                </h4>
               
                <div id="day2" class="collapse" role="menu">
                    <input type="radio" name="day" value="Sunday"> Sunday
                    <br>
                    <input type="radio" name="day" value="Monday"> Monday
                    <br>
                    <input type="radio" name="day" value="Tuesday"> Tuesday
                    <br>
                    <input type="radio" name="day" value="Wednesday"> Wednesday
                    <br>
                    <input type="radio" name="day" value="Thursday"> Thursday
                    <br>
                    <input type="radio" name="day" value="Friday"> Friday
                    <br>
                    <input type="radio" name="day" value="Saturday"> Saturday
                    <br>
                </div>
            </div>
        </li>
        <!--<li class="list-group-item">Morbi leo risus</li>-->        
        <input type="hidden" name="select" value= <?php echo "'".htmlspecialchars($select, ENT_QUOTES)."'"; ?> />
 
    <div class="panel-body"><input type="submit" value="Submit"></div>
      </ul>
        



<script>
        $('#select-form2').selectize({
    create: true,
    sortField: 'text'
});
</script>
</div>
</form>

<!--List of events -->
</ul>
    </div>
    <div id="" class="list-unstyled col-sm-9"> 
        <h2 class='text-muted'> <?php echo $select ?> </h2>
        <?php 
            if (isset($_GET['day']) || isset($_GET['event_type']) || isset($_GET['select'])){
            echo "<div class=' list-inline' id='filters'>";

            if (isset($_GET['select'])){
            echo "<li class='gray'><h4><small>".$_GET["select"]."</h4></small></li>";

            }
            if (isset($_GET['day'])){
            echo "<li><h4><small>".$_GET["day"]."</h4></small></li>";  
            }

            if (isset($_GET['event_type'])){
            echo "<li><h4><small>".$_GET["event_type"]."</h4></small></li>";  
            }
            
            if (isset($_GET['city'])){
            echo "<li><h4><small>".$_GET["city"]."</h4></small></li>";  
            }
            
            echo "<li list-inline> <form action=' ' method='get'>
            <button type='submit' class= 'btn-default' id='clear'> Clear Filters </button>   
            </form></li></ul> ";
        }
        ?>
        


        <ol class="list-unstyled">
            <?php 
            $query1 = $this->db->query($search_filter); 

                if ($query1->num_rows() == 0) {
                  echo "<br /><br /> <h3><small> No events match this search.</small></h3></div>";
                }
            $start_times = array();

            foreach ($query1->result() as $row) {
            $start_times[] = $row->upcoming_start;
            }

            array_multisort($start_times, SORT_ASC); 
            ?>
     
            <?php foreach ($query1->result() as $row): ?>

                    
                    <li class="event_content list-unstyled"> 
                        <div class="row" id="card">
                        <div class="col-lg-12">
                            <h4 id=''>      
                                <form action="index.php/eventpage" method="GET">
                                <span class=''> </span> <button class='btn-link text-left' id='venue_name' name="event_id" type="submit" value=<?php echo "'".$row->event_id."'"; ?>><?php echo $row->event_type; ?> at  
                                <?php echo $row->venue_name; ?> </button>
                                </form>   
                                </h4>
                        </div>


                            <div class="col-lg-3 col-xs-4 col-sm-3 col-md-3  list-inline">

                                    <img class="img-thumbnail" src=<?php 
                                    
                                    if ($row->image == 'images/')
                                    {
                                        echo "'/images/yellowback.jpg'";;
                                    }
                                    else {
                                        echo $row->image; }
                                    ?> alt=Image>
                            </div>
                            <div class="col-lg-9 col-xs-8 col-sm-9 col-md-9  list-inline">

                     
                                
                            <div class="row">
                                    <p> <span class='text-danger'> <!--<span class="glyphicon glyphicon-calendar"></span>--> <?php $d=strtotime($row->upcoming_start);
                                        //Below echos the date as well as day
                                        //echo date("l", $d). "<br>".date("M d", $d)." ".date("g:iA", $d);
                                    echo date("l", $d). " ".date("g:iA", $d);
                                    ?> </span>
                                        <br>
                                        <span class="repeat"> Repeats: Weekly</p></span>     
                          


                                <div class="text-muted"> 

                             <img class="pull-left hidden-xs" src="/images/location.png"> <p class="pull-left block"><?php echo $row->street.", ".$row->city?>
                            </p> 

              

  </div>

                

                    </div>
                    <div class="break"></div>

            <?php endforeach ?>


</li>
        </ol>

</div>






 </body>
</html>

