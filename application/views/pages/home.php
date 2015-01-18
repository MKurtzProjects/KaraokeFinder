        <div id = "filter_container">
            <div id = "filter_menu">
            
            <div   id="event_filter"> 
                <form action="" method="" id="">
                    <h3> What day? </h3>

                        <input type="hidden" name="select" value="<?php echo htmlspecialchars($select, ENT_QUOTES); ?>" />
                        <button type="submit" name = "day" value = "Sunday" class= "days" id=""> Sundays </button>
                        <button type="submit" name = "day" value = "Monday" class= "days" id="">  Mondays </button>         
                        <button type="submit" name = "day" value = "Tuesday" class= "days" id="">  Tuesdays </button>
                        <button type="submit" name = "day" value = "Wednesday" class= "days" id="">  Wednesdays </button>  
                        <button type="submit" name = "day" value = "Thursday" class= "days" id="">  Thursdays </button> 
                        <button type="submit" name = "day" value = "Friday" class= "days" id="">  Fridays </button> 
                        <button type="submit" name = "day" value = "Saturday" class= "days" id="">  Saturdays </button>     
                </form>
            </div>
        </div>  
    </div>





    <div id="events_container"> 
        <h1>Boston</h1>
        <?php 
            if (isset($_GET['day']) || isset($_GET['select'])){
            echo "<div id='filters'><ul>";

            if (isset($_GET['select'])){
            echo "<li>".$_GET["select"]."</li>";

            }
            if (isset($_GET['day'])){
            echo "<li>".$_GET["day"]."</li>";  
            }
            
            echo "<li> <form action='home' method='get'>
            <button type='submit' class= 'button-clear' id=''> Clear Filters </button>   
            </form></li></ul></div> ";
        }
        ?>
        


        <ol>
            <?php 
            $query1 = $this->db->query($search_filter); 

                if ($query1->num_rows() == 0) {
                  echo "<br /><br /> <p> No events match this search.</p>";
                }
            $start_times = array();

            foreach ($query1->result() as $row) {
            $start_times[] = $row->start_time;
            }

            array_multisort($start_times, SORT_ASC); 
            ?>
            
            <?php foreach ($query1->result() as $row): ?>

                    <li class="event_content"> 
                        <div class="box">
                            <h3 class = "location_name">      
                                <form action="eventpage" method="GET">
                            <button class='location_button' name="event_id" type="submit" value=<?php echo "'".$row->event_id."'"; ?>><?php echo $row->event_type; ?> at  
                            <?php echo $row->location_name; ?> </button>

                            </form>   
                             </h3>
                            <div class="location">
                                <a href= <?php echo "'https://www.google.com/maps/place/".$row->street."?".$row->city."?".$row->state."'" ?> > <?php echo $row->street."<br /> ".$row->city.", ".$row->state." ".$row->zip ?> </a>
                            </div>
                          <div class="description">
                           <div class="content">
                                <?php // echo implode(' ', array_slice(explode(' ', $row->description), 20, 300)); ?>
                            </div>
                            </div>
                            <div class="description"> 
                            </div>
                        </div>
                        <div class='time'>
                            <?php 
                                    $d=strtotime($row->start_time);
                                    echo "<p>".date("D", $d). " ".date("g:iA", $d)."</p>";
                            ?>
                        </div>
                    <div class="location_image">
                    <div id="event_image_box">
                    <img src=<?php echo "'".$row->image."'"?> alt=Image>
                    </div>
                    </div>
                    <div class="break"></div>
                    </li>
            <?php endforeach ?>
        </ol>

</div>
        



