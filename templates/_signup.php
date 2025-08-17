  <?php include '../includes/_head.php'?>
<!-- 1 validate data using javascript are jquery 
 2 send http request to server 
 3 save the data to db using php 
 4 and redirect to dashboard -->
<div class="auth-form-container">
    <div class="sign-up">
    <h3>Sign-up</h3>
    <p>Sign up to create your store easily!</p>
    <div class="signup-form"><form>
      <label for="name">Name*</label>
      <input type="text" placeholder="Enter your name" name="name" required="" value="">
      <label for="email">Email*</label>
      <input type="email" placeholder="Enter your email" name="email" required="" value="">
      <label for="password">Password*</label>
      <div class="password-input-container">
        <input type="password" placeholder="Create a password" name="password" required="" value="">
      </div>
      <button class="btn-form-signup" id="submitButton" type="submit">Create account</button>
    
        <div class="btn-form-login">
    <p>Already have an account?<a href="<?php echo $baseUrl ?> /templates/_login.php" data-discover="true">Login</a></p>
  </div>
</div>
</form>
</div>
</div>

<?php include  '../includes/_footer.php' ?>