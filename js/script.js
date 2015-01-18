


function loadData() {

    var $body = $('body');
    var $nytHeaderElem = $('#header');

    var $greeting = $('#greeting');

    // clear out old data before new request
    $wikiElem.text("");
    $nytElem.text("");

    //Get entered values for search and display message
    var search = $('#search').val();


//    var streetviewUrl = 'https://maps.googleapis.com/maps/api/streetview?size=600x400&location=' + search + '';
//    console.log(streetviewUrl);
//    $body.append('<img class="img" src="' + streetviewUrl + '">');

    var today = Date.now();
     


};

$('.expandable').simpleexpand();
$('#form-container').submit(loadData);


//city filter with AJAX.  Use with city.php

    $( document ).ready(function () {
      // set an on click on the button
      $("#button-karaoke").click(function () {
        // get the city if clicked via an ajax get queury
        // see the code in the controller city.php
        console.log('working');
        $.get("/index.php/karaokefilter", function (city) {
          // update the textarea with the time
          $("body").html(city);
        });
      });



        $("#button-trivia").click(function () {
      // get the city if clicked via an ajax get queury
        // see the code in the controller city.php
        $.get("/index.php/triviafilter", function (city) {
          // update the textarea with the time
          $("body").html(city);


        });

          $('.rate_widget').each(function(i) {
    var widget = this;
    var out_data = {
        widget_id : $(widget).attr('id'),
        fetch: 1
    };
    $.post(
        'ratings.php',
        out_data,
        function(INFO) {
            $(widget).data( 'fsr', INFO );
            set_votes(widget);
        },
        'json'
    );

    function set_votes(widget) {
 
    var avg = $(widget).data('fsr').whole_avg;
    var votes = $(widget).data('fsr').number_votes;
    var exact = $(widget).data('fsr').dec_avg;
     
    $(widget).find('.star_' + avg).prevAll().andSelf().addClass('ratings_vote');
    $(widget).find('.star_' + avg).nextAll().removeClass('ratings_vote'); 
    $(widget).find('.total_votes').text( votes + ' votes recorded (' + exact + ' rating)' );
}

$('.ratings_stars').bind('click', function() {
    var star = this;
    var widget = $(this).parent();
     
    var clicked_data = {
        clicked_on : $(star).attr('class'),
        widget_id : widget.attr('id')
    };
    $.post(
        'ratings.php',
        clicked_data,
        function(INFO) {
            widget.data( 'fsr', INFO );
            set_votes(widget);
        },
        'json'
    ); 
});
        });
      });
    });


//script for submitting multiple forms in home page
    function doSubmit(id){
    f = document.getElementById(id);
    f.submit();
    }


