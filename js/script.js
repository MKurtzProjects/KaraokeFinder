


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
        $.get("/index.php/city", function (city) {
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
      });
    });