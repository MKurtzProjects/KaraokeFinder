
<div class="container">



<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54e8a97e294146d4" async="async"></script>
-->

<div id="centered" class="">
  <h1> <?php echo $event_type ?> at <?php echo $location_name ?> </h1> 
<?php $d=strtotime($start_time); echo "<h3>".date("D", $d). " at ".date("g:iA", $d)."</h3>" ?>



</div>



<div class='col-sm-1 col-md-1'>
</div>

<div class="col-sm-4 col-md-4 img-thumbnail">
  <a href= <?php echo "'https://www.google.com/maps/dir/".$street.",+".$city.",+".$state."'"?>> <img id="map" src= <?php echo "'http://maps.googleapis.com/maps/api/staticmap?center=".$street.",+".$city.",+".$state."zoom=17&size=350x350&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:red%7Clabel:%7C".$street.",+".$city.",+".$state."'" ?> >   </a>        
  <div class='row'>
    <div class="col-sm-12">
      <h4>Info</h4>
    </div>  
    <div class='col-lg-5 col-sm-5x'>  
      <p> <?php echo $street."<br />".$city.", ".$state." ".$zip  ?> </p> </a>
    </div>
    <div class='col-sm-5'>  
    <a href=<?php echo "'".$website_url."'" ?>> Go to Website <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
    <p><?php echo $telephone ?></p>
    </div>
  </div>
</div>



<div class='col-sm-1 col-md-1'> 
</div> 

<div id="" class="col-sm-4 col-md-4  img-thumbnail"> <style> h4 {text-align: center;} #event_image {width: 100%; max-width: 350px;} #description {width:100%; max-width: 350px; padding-left: 14px; padding-right: 5px;} </style>
  <img id="event_image" src=<?php echo "'".$image."'" ?>>
  <div class='row'>
    <div class="col-sm-12"  id ='description'>
    <h4> Description </h4>
    <p> <?php echo $description; ?> <p>

    </div>
  </div>
</div>

<div class='col-sm-1 col-md-1'> 
</div> 



   

   <!-- <div class="exemple">
 
in this exemple, 12 is the average and 1 is the id of the line to update in DB -->
   <!--   <div class="basic" data-average="12" data-id="1"></div>
 
    <!-- in this other exemple, 8 is the average and 2 is the id of the line to update in DB 
   <div class="basic" data-average="8" data-id="2"></div>-->
 
  <!-- </div> 



<script type="text/javascript">
$(document).ready(function(){
      // simple jRating call
      $(".basic").jRating();
 
      // more complex jRating call
      $(".basic").jRating({
         step:true,
         length : 20, // nb of stars
         onSuccess : function(){
           alert('Success : your rate has been saved :)');
         }
       });
 
      // you can rate 3 times ! After, jRating will be disabled
      $(".basic").jRating({
         canRateAgain : true,
         nbRates : 3
       });
 
      // get the clicked rate !
      $(".basic").jRating({
        onClick : function(element,rate) {
         alert(rate);
        }
      });
});
</script>

-->



<div class='col-sm-2'>
</div>
<style> #description {padding-bottom: 20px;} #map {width: 100%;} #centered {text-align: center; margin-top: 100px; background-color: ; color:#00838F; padding: 10px; margin-bottom:30px;}</style>






<!-- comment count -->
    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'scoopda'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>

<!-- comment thread -->
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'scoopda'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>

</div>

