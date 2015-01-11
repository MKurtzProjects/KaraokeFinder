<h1> <?php echo $event_type ?> & <?php echo $location_name ?> </h1>

<div class="exemple">
 
   <!-- in this exemple, 12 is the average and 1 is the id of the line to update in DB -->
   <div class="basic" data-average="12" data-id="1"></div>
 
    <!-- in this other exemple, 8 is the average and 2 is the id of the line to update in DB 
   <div class="basic" data-average="8" data-id="2"></div>-->
 
</div>


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


<h2> 9:00pm Tuesday - 1:00am Wednesday </h2>

<hr/>






<div id="info_container">

<img id="event_image" src=<?php echo "'".$image."'" ?> </div>
<div id="info_container_box">


<a class="location" href="'https://www.google.com/maps/place/'">  </a> <a href= <?php echo $street."?".$city."?".$state ?> >  <?php echo $street."<br />".$city.", ".$state." ".$zip  ?> </a>
<p><?php echo $telephone ?></p>
<a href=<?php echo "'".$website_url."'" ?>> Visit </a>

</div>
</div>

<hr/>


<!-- appends google maps image -->
<script>
var search = "Boston, MA"
var streetviewUrl = 'https://maps.googleapis.com/maps/api/streetview?size=600x400&location=' + search + '';
console.log(streetviewUrl);
$("#location_map").append('<img class="img" src="' + streetviewUrl + '">');
</script>


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
