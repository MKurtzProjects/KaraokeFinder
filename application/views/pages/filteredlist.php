        <h4 id="city" class="city">Boston</h4>       
            
<!--
            <ul class="schedule">
                <li class="schedule-list"><a>SUN</a></li>
                <li class="schedule-list"><a>MON</a></li>
                <li class="schedule-list"><a>TUE</a></li>
                <li class="schedule-list"><a>WED</a></li>
                <li class="schedule-list"><a>THU</a></li>
                <li class="schedule-list"><a>FRI</a></li>
                <li class="schedule-list"><a>SAT</a></li>
            </ul>
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
                            <h3 class = "location_name"><a href=<?php echo $row->website_url; ?> > <?php echo $row->event_type; ?>  at <?php echo $row->location_name; ?> </a></h3>
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



        <div id="contact-container">
            <h5> Get In Touch </h5>
            <p> Would you like to add an event?</p> Do you spot incorrect information?</p> <p> Connect with the Scoopda team. We'd love to hear from you! </p>
        
        <form action="mailto:michaelkurtz10@gmail.com?Subject=Contact%20CityHive">
                <button type="submit" id="contact-button">
                    Contact 
                </button>
        </form>
        </div>  
    </div>
  
<h4> 
 <ul>
    Join Events in Your City

  <li class="event_filters" id="button-karaoke">
        <img src="/images/karaoke_nights.png" alt="Karaoke">
  </li>
  <li class="event_filters" id="button-trivia">
        <img src="/images/trivia_nights.png" alt="Trivia Nights">
  </li>
</ul>