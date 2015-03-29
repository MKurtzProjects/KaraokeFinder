<br><br><br><br>
<div class="container">
<div class="col-lg-6">
   <h2>Log in to add an event</h2>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
</div>
<div class="col-lg-6">
  <h3>Not yet a user?</h3>
  <p> Contact Scoopda to join the Beta list! </p>
    <form action="mailto:Mike@scoopda.com?Subject=Contact%20Scoopda">
            <button type="submit" id="contact-button">
                Contact 
            </button>
    </form>
</div>

</div>