        <div id = "filter_container">
            <div id = "filter_menu">
            <h3> Find an Activity </h3>
            <div   id="event_filter"> 
                  <button type="button" class= "button-example-blue" id="button-karaoke"> Karaoke </button>
                  <button type="button" class= "button-example-blue" id="button-trivia">  Trivia </button>
            </div>

        </div>  
    </div>


    <div id="events_container"> 
        <h1>Boston</h1>                 
        <ol>
            <?php 
            $query1 = $this->db->query("SELECT * FROM event_info WHERE ".$event_type); 

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
                                <a href= <?php echo "c".$row->street.",".$row->city."'" ?> > <?php echo $row->street."<br /> ".$row->city.", ".$row->state." ".$row->zip  ?> </a>
                            </div>
                          <div class="description">
<!--                                  <?php // echo implode(' ', array_slice(explode(' ', $row->description), 0, 20)); ?>

                            <a class="expandable" href="#">



                               <?php
    
                                // if (str_word_count($row->description) > 20) {
                                //  echo "[...]";}
                                ?>


                            </a>
-->                            <div class="content">
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
                    <img src=<?php echo "'".$row->image."'"?> alt=Image>
                    </div>
                    <div class="break"></div>
                    </li>
            <?php endforeach ?>
        </ol>

</div>
        



