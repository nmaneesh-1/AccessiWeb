<?php include '../includes/_head.php'?> 
<!-- 1 validate data using javascript are jquery 
 2 send http request to server 
 3 check the data with db using php 
 4 and redirect to dashboard -->
   <div class="auth-form-container">
     <div class="sign-up">
      <h3>Login</h3>
      <p>Log in to access your store!</p>
      <div class="signup-form">
        <form>
          <label for="email">Email*</label>
        <input type="email" placeholder="Enter your email" name="email" class="login-input" required="" value="">
        <label for="password">Password*</label>
        <div class="password-input-container">
        <input type="password" placeholder="Enter your password" name="password" class="login-input" required="" value="">
      </div>
      <button type="submit" class="btn-form-signup">Login</button>
        <div class="btn-form-login">
          <p>Don't have an account? <a href="<?php echo $baseUrl ?> /templates/_signup.php" data-discover="true">Sign up</a></p>
        </div>
        </form>
        </div>
      </div>
    </div>
   </div>
 
</body>
</html>
<?php include  '../includes/_footer.php' ?>