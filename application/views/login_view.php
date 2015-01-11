 <body>

<div id = "banner">
<img id='banner' src="/images/scoopdabanner.png" alt="Scoopda">
</div>



     <div id="space"> </div>
    <div id = "scoopda_overview">
        <h1> Welcome to Scoopda </h1>
        <p> Scoopda helps you discover the best activities in town - from the craziest karaoke to the tastiest Brunch spot - any day of the week.  </p>

  <h3> Join the Beta </h3>
    <p> Are you a city adventurer?  Come join us!  Just email us with an introduction and what interests you in Scoopda. </p> 

    <form action="mailto:Mike@scoopda.com?Subject=Contact%20Scoopda">
            <button type="submit" id="contact-button">
                Contact 
            </button>
    </form>
</div>

   <h2>Beta Access Login</h2>
      <span id="errors"> <?php echo validation_errors(); ?> </span>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
     <input type="submit" value="Login"/>



 </body>
</html>

