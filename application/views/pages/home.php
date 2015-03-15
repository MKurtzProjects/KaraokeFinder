
<style>
#filter{font-size:  20px;}
</style>

<div class="jumbotron row">
    <div class="col-sm-2">
    </div>

    <div class= "col-sm-9">
        <h1> Scoopda
            <?php 
                if (isset($_GET['select'])) {
                echo ": ".$_GET["select"]; }
            ?>
        </h1>          
        <h3 class = 'lead'> Your guide to nightly pub events: Boston.</h3>
        <form action="/" method="get" id="">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
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
        <h3 class='text-muted'> Add Filter </h3>
        <ul class="nav nav-pills nav-stacked nav-justified">
            <form action="" method="" id="" >
                <li class="dropdown">
                    <a class="dropdown-toggle lg" data-toggle="dropdown" href="#" id="filter">  Day 
                    <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <input type="hidden" name="select" value="<?php echo htmlspecialchars($select, ENT_QUOTES); ?>" />

                        <li> <button type="submit" name = "day" value = "Sunday" class= "btn-link" id=""> Sundays </button> </li>
                        <li> <button type="submit" name = "day" value = "Monday" class= "btn-link" id="">  Mondays </button> </li>      
                        <li> <button type="submit" name = "day" value = "Tuesday" class= "btn-link" id="">  Tuesdays </button> </li>
                        <li> <button type="submit" name = "day" value = "Wednesday" class= "btn-link" id="">  Wednesdays </button> </li> 
                        <li> <button type="submit" name = "day" value = "Thursday" class= "btn-link" id="">  Thursdays </button> </li>
                        <li> <button type="submit" name = "day" value = "Friday" class= "btn-link" id="">  Fridays </button> </li>
                        <li> <button type="submit" name = "day" value = "Saturday" class= "btn-link" id="">  Saturdays </button> </li>   
                    </ul>
                </li>


<!--  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activity Type
    <span class="caret"></span></a>
    <ul class="dropdown-menu">

                        <input type="hidden" name="select" value= <?php echo "'".htmlspecialchars($select, ENT_QUOTES)."'"; ?> />
                        <li> <button type="submit" name = "event_type" value = "Trivia" class= "btn-link" id=""> Trivia </button> </li>
                        <li> <button type="submit" name = "event_type" value = "Karaoke" class= "btn-link" id="">  Karaoke </button> </li>      
                        <li> <button type="submit" name = "event_type" value = "" class= "btn-link" id="">  Any </button> </li>

        </ul>
    </li>  -->
            </form>
</ul>
    </div>
    <div id="" class="list-unstyled col-sm-9"> 
        <h2 class='text-muted'> <?php echo $select ?> Boston</h2>
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
                            <div class="col-sm-9 list-inline">
                                <h3>      
                                <form action="index.php/eventpage" method="GET">
                                <span class=''> </span> <button class='btn-link card-header' name="event_id" type="submit" value=<?php echo "'".$row->event_id."'"; ?>><?php echo $row->event_type; ?> at  
                                <?php echo $row->venue_name; ?> </button>

                                </form>   
                                </h3>
                        <div>
                        <div class="containter">
                            <div class="col-lg-3 col-xs-5 list-inline">

                                    <img class="img-thumbnail" src=<?php echo "'".$row->image."'"?> alt=Image>
                            </div>
                        

                            <div class="col-lg-3 list-inline">

                                    <h4 class='text-muted'> <!--<span class="glyphicon glyphicon-calendar"></span>--> <?php $d=strtotime($row->upcoming_start);
                                        echo date("D", $d). ", ".date("M d", $d)."<br />".date("g:iA", $d)."</h4>";
                                    ?>
                                    <p><span class="repeat"> Repeats: Weekly</p></span>
                                    <style> .repeat{color:#009933} </style>
                            </div>
              
                                <div class="col-lg-5 text-muted"> 
                                    <h5> <!--<span class="glyphicon glyphicon-road"></span>--><?php echo $row->street."<br /> ".$row->city.", ".$row->state." ".$row->zip ?>
                                    </h5> 
                                </div>
                                </div>
                            

                            <div class="col-sm-6">
                            <div class="row">

                            <!--    <div class="description col-sm-3">
                                    <div class="content">
                                        <?php //echo implode(' ', array_slice(explode(' ', $row->description), 20, 300)); ?>
                                    </div>
                                </div>
                            -->
                            </div>

                

                    <div class="location_image">

                    </div>
                    </div>
                    <div class="break"></div>

            <?php endforeach ?>

        </ol>

</div>
</div>        
</div>



 </body>
</html>

