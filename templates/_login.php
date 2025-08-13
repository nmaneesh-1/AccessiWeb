<?php include '../includes/header.php'?> 
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
<?php include  '../includes/footer.php' ?>