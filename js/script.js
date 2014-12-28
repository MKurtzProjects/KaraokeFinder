


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
      $("#button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller city.php
        $.get("/index.php/city", function (city) {
          // update the textarea with the time
          $("#text").html("Time on the server is:" + city);
        });
      });
    });