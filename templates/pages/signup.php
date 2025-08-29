  <?php include '../components/meta_links.php';
  ?>

<div class="auth-form-container">
    <div class="signup-container">
  <h3>Sign-up</h3>
  <p>Sign up to create your store easily!</p>
  <form action="" method="" id="signupForm" class="form">
    <label for="name">Name</label>
    <input type="text" id="signup-name" class="input" name="name" placeholder="Enter your name" required 
      minlength="3" maxlength="30">
    <span class="name-error"></span>

    <label for="email">Email</label>
    <input type="email" id="signup-email" class="input" name="email" placeholder="Enter your email" required
   >
    <span class="email-error"></span>

    <label for="password">Password</label>
    <input type="password" id="signup-password" class="input" name="password" placeholder="Create a password" required
     >
    <span class="password-error"></span>

    <button class="btn" type="submit">Create account</button>
    <p class="redirect">Already have an account?
      <a href="login.php">Login</a>
    </p>
  </form>
</div>
</div>

<script src="/accessiweb/assets/js/main.js"></script>