        <h4 id="city" class="city">Boston</h4>       
            
<!--

-->
    
    <div id="mid-container"> 
        <ol>
            <?php 
            $query1 = $this->db->query("SELECT * FROM event_info WHERE event_type = '".$event_type."'"); 

            $start_times = array();

            foreach ($query1->result() as $row) {
            $start_times[] = $row->start_time;
            }

            array_multisort($start_times, SORT_ASC); 
            ?>
            
            <?php foreach ($query1->result() as $row): ?>

                    <li class="event_content"> 
                        <div class="box">
                            <h3 class = "location_name"><a href=<?php echo $row->website_url; ?> >  <?php echo $row->event_type; ?> <span class="at_emphasis"> at </span>  <?php echo $row->location_name; ?> </a></h3>
                            <div class="location">
                                <a href= <?php echo "'https://www.google.com/maps/place/".$row->street.",".$row->city."'" ?> > <?php echo $row->street.", ".$row->city  ?> </a>
                            </div>
                            <div class="description">
                                <?php echo implode(' ', array_slice(explode(' ', $row->description), 0, 20)); ?>
                            <a class="expandable" href="#">



                               <?php
    
                                if (str_word_count($row->description) > 20) {
                                  echo "[...]";}
                                ?>
                            </a>
                            <div class="content">
                                <?php echo implode(' ', array_slice(explode(' ', $row->description), 20, 300)); ?>
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
                    <span class="location_image">
                    <img src=<?php echo "'".$row->image."'"?> alt=Image>
                    </span>
                    <div class="break"></div>
                    </li>
            <?php endforeach ?>
        </ol>


        


        <div id = "menu_section">
            <div id = "filter_menu">
            <h3> Find an Activity </h3>
            <ul   id="day_filter"> <h4> By Day: </h4>
                <li>
                    <span> Coming Soon! </span>
                </li>
            </ul>
            <ul   id="event_filter"> <h4> By Type: </h4>
                  <li id="button-karaoke"> <a href="#"> KARAOKE </a> </li>
                  <li id="button-trivia"> <a href="#"> TRIVIA </a> </li>
            </ul>




            <div id="add_event">
            <h5> Want to Add an Event? </h5>
            <p> We'll help you! </p>
            <form action="mailto:michaelkurtz10@gmail.com?Subject=Contact%20CityHive">
                    <button type="submit" id="contact-button">
                        Contact 
                    </button>
            </form>
            </div>
        </div>  
    </div>
