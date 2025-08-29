 
<?php include '../components/meta_links.php';

?> 
   <div class="auth-form-container">
     <div class="login-container">
  <h3>Login</h3>
  <p>Log in to access your store!</p>
  <form action="" method="" id="loginForm" class="form">
    <label for="email">Email</label>
    <input type="email" name="email" id="login-email" class="input" placeholder="Enter your email" required>
  <span class="email-error"></span>
    <label for="password">Password</label>
    <input type="password" name="password" id="login-password" class="input" placeholder="Enter your password" required>
  <span class="password-error"></span>
    <button class="btn" type="submit">Login</button>
    <p class="redirect">Don’t have an account?
      <a href="signup.php">Sign up</a>
    </p>
  </form>
</div>
   </div>
<script src="/accessiweb/assets/js/main.js"></script>
