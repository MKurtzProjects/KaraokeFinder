<style> .container {padding-top: 100px; background-color: ;}  </style>
<br /> <br /><br /><br />
<!--

<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '559532060851170',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>
-->
<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.


<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
-->


<div class="container">

<div class="alert alert-warning alert-dismissible" role="alert">
	 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p> Your event will appear on Scoopda once it has been verified and approved by our moderators. </p>

</div>



 



<?php 
$attributes = array('class' => 'form-horizontal');
echo form_open_multipart('new_event', $attributes); ?>




  <div class="form-group col-lg-6">

<h2> Add Event Information </h2>

<?php echo form_label('Event Title (Optional):'); ?> <?php echo form_error('event_title'); ?>
<?php echo form_input(array('class' => 'form-control','id' => 'event_title', 'name' => 'event_title','placeholder'=>'e.g. Disco Karaoke Night')); ?>

<br>


<?php echo form_label('Event Description (Optional):'); ?> <?php echo form_error('description'); ?>
<?php echo form_input(array('class' => 'form-control', 'id' => 'description', 'name' => 'description','placeholder'=>'Disco themed karaoke with free nachos...')); ?>

<br>

<?php echo form_label('Event Type :'); ?> <?php echo form_error('event_type'); ?>
<br>
<?php
$options = array(
'Trivia' => 'Trivia',	
'Karaoke' => 'Karaoke',
);

echo form_dropdown('event_type', $options);
if (isset($result)) {
$db_value = array();

foreach ($result as $value) {
$db_value[] = $value;
}
$single_sel = $db_value[0];
//Converting string to array
$mul_selection = unserialize($db_value[1]);
}

$this->input->post('options');
?>
<br>
<br>
<?php echo form_label('Day of the Week:'); ?> <?php echo form_error('day_of_week'); ?>
<br>


<?php
$options = array(
'Sunday' => 'Sunday',	
'Monday' => 'Monday',
'Tuesday' => 'Tuesday',
'Wednesday' => 'Wednesday',
'Thursday' => 'Thursday',
'Friday' => 'Friday',
'Saturday' => 'Saturday',
);

echo form_dropdown('day_of_week', $options);
if (isset($result)) {
$db_value = array();

foreach ($result as $value) {
$db_value[] = $value;
}
$single_sel = $db_value[0];
//Converting string to array
$mul_selection = unserialize($db_value[1]);
}

$this->input->post('options');
?>
<br>
<br>
<?php echo form_label('Start Time'); ?> <?php echo form_error('event_title'); ?>
<?php echo form_input(array('class' => 'form-control', 'type'=>'time', 'name' => 'time', 'placeholder'=>'9:00 PM')); ?>
<br>





<hr />
<h2> Add Venue Information </h2>
<?php echo form_label('Venue Name:'); ?> <?php echo form_error('venue_name'); ?>
<?php echo form_input(array('class' => 'form-control', 'id' => 'venue_name', 'name' => 'venue_name','placeholder'=>'Dannys Bar')); ?>
<br>
<?php echo form_label('City:'); ?> <?php echo form_error('city'); ?>
<?php echo form_input(array('class' => 'form-control', 'id' => 'city', 'name' => 'city','placeholder'=>'Boston')); ?>
<br>
<?php echo form_label('State:'); ?> <?php echo form_error('city'); ?>
<p class='text-muted'> Scoopda is currently taking events in Massachusetts only </p>

<?php
$options = array(
'MA' => 'Massachusetts',	
);

echo form_dropdown('state', $options);
if (isset($result)) {
$db_value = array();

foreach ($result as $value) {
$db_value[] = $value;
}
$single_sel = $db_value[0];
//Converting string to array
$mul_selection = unserialize($db_value[1]);
}

$this->input->post('options');
?>
<br>
<br>
<?php echo form_label('Street:'); ?> <?php echo form_error('street'); ?>
<?php echo form_input(array('class' => 'form-control', 'id' => 'street', 'name' => 'street','placeholder'=>'123 Fake Street')); ?>
<br>

<?php echo form_label('Website:'); ?> <?php echo form_error('website_url'); ?>
<?php echo form_input(array('class' => 'form-control', 'id' => 'website_url', 'name' => 'website_url','placeholder'=>'Enter web address')); ?>
<br>

<?php echo form_label('Telephone:'); ?> <?php echo form_error('telephone'); ?>
<?php echo form_input(array('class' => 'form-control', 'id' => 'telephone', 'name' => 'telephone','placeholder'=>'Enter web address')); ?>

<br>

<?php echo "<input type='file' name='userfile' size='20' />"; ?>

<br>
<br>

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit'));?>
<?php echo form_close(); ?>

<br>
</form>
 


<div class="col-lg-2">
</div>
</div>
  </div>