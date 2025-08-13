<?php include './includes/header.php'?>
   <header>
    <nav>
        <div class="logo">
           <ion-icon class="site-logo" name="accessibility"></ion-icon>
           <p>AcessiWeb</p>
        </div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">About</a></li>
        </ul>
      
        <div class="auth-btn">
            <a class="btn-login" href="<?php echo $baseUrl; ?>/templates/_login.php">Login</a>
    <a class="btn-sign-up" href="<?php echo $baseUrl; ?>/templates/_signup.php" >Sign-up</a>
        </div>
        <ion-icon class="menu-close-icon" name="close-outline"></ion-icon>
        <ion-icon class="menu-open-icon" name="menu-outline"></ion-icon>
    </nav>
   </header> 
   <main>
    <section class="hero-section">
        <h2 class="hero-primary-heading">Build Inclusive Web Experiences</h2>
        <h4 class="hero-secondary-heading">Analyze, Fix, and Ensure WCAG Compliance in Minutes</h4>
        <form class="form-wrapper" action="" method="POST">
            <input type="url" placeholder="Enter your site url">
            <button class="cta-btn">Analyze</button>
        </form>
        <button class="btn-demo"><ion-icon class="eye-icon" name="eye-outline"></ion-icon>Live Demo</button>
          <div class="impact">
     <div class="values">
     <h2 class="value-percentage">20%</h2>
    <p class="value-description">Increase your potential user base by making your site accessible.</p>
  </div>
  <div class="values">
     <h2 class="value-percentage">90%</h2>
    <p class="value-description">Reduction in legal risks associated with non-compliance.</p>
  </div>
   <div class="values">
    <h2 class="value-percentage">15%</h2>
    <p class="value-description">Improvement in SEO rankings due to better accessibility practices.</p>
   </div>
  </div>
    </section>
    <section class="features-section">
        <h3 class="features-primary-heading">Features</h3>
        <h5 class="features-secondary-heading">Our tool provides comprehensive accessibility analysis to ensure your website is inclusive and compliant.</h5>
        <div class="feature-cards">
            <div class="card">
                <div class="feature">
                    <ion-icon class="feature-icon" name="search"></ion-icon>
                    <p class="feature-card-heading">WCAG Compilance</p>
                    <p class="feature-description">Ensure your website meets Web Content Accessibility Guidelines (WCAG) standards.</p>
                </div>
            </div>
            <div class="card">
                <div class="feature">
                    <ion-icon class="feature-icon" name="code-slash"></ion-icon>
                    <p class="feature-card-heading">Code Suggestion</p>
                    <p class="feature-description">Receive actionable code suggestions to improve accessibility.</p>
                </div>
            </div>
            <div class="card">
                <div class="feature">
                    <ion-icon class="feature-icon" name="document-lock"></ion-icon>
                    <p class="feature-card-heading">Secure analysis</p>
                    <p class="feature-description">Your website analysis is conducted securely, protecting your data.</p>
                </div>
            </div>
            <div class="card">
                <div class="feature">
                    <ion-icon class="feature-icon"name="download"></ion-icon>
                    <p class="feature-card-heading">PDF Export</p>
                    <p class="feature-description">Export detailed accessibility reports as PDF for easy sharing and archiving.</p>
                </div>
            </div>
            <div class="card">
                <div class="feature">
                    <ion-icon class="feature-icon"  name="shield-checkmark"></ion-icon>
                    <p class="feature-card-heading">Accessibility Score</p>
                    <p class="feature-description">Get an accessibility score to track your website's compliance progress.</p>
                </div>
            </div>
            <div class="card">
                <div class="feature">
                    <ion-icon class="feature-icon" name="alarm"></ion-icon>
                    <p class="feature-card-heading">Past Report History</p>
                    <p class="feature-description">Access a history of previous accessibility reports for comparison.</p>
                </div>
            </div>
        </div>
    </section>
   
</main>
<footer>
    <div class="footer-container">
            <!-- Company Info -->
            <div class="footer-section">
                <h3 class="footer-title">Accessibility Analyzer</h3>
                <p class="footer-description">Making the web inclusive for everyone through automated WCAG compliance testing.</p>
               
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4 class="footer-heading">Product</h4>
                <ul class="footer-links">
                    <li><a href="#features" class="footer-link">Features</a></li>
                    <li><a href="#pricing" class="footer-link">About</a></li>
                    <li><a href="#demo" class="footer-link">Live Demo</a></li>
                    
                </ul>
            </div>

            <!-- Legal Links -->
            <div class="footer-section">
                <h4 class="footer-heading">Legal</h4>
                <ul class="footer-links">
                    <li><a href="/terms" class="footer-link">Terms & Conditions</a></li>
                    <li><a href="/privacy" class="footer-link">Privacy Policy</a></li>
                    <li><a href="/cookies" class="footer-link">Cookie Policy</a></li>
                   
                </ul>
            </div>

            <!-- Support & Contact -->
            <div class="footer-section">
                <h4 class="footer-heading">Support</h4>
                <ul class="footer-links">
                    <li><a href="/contact" class="footer-link">Contact Us</a></li>
                   
                    <li><a href="mailto:support@accessibilityanalyzer.com" class="footer-link">support@accessibilityanalyzer.com</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p class="copyright">
                    &copy; 2024 Accessibility Analyzer. All rights reserved.
                </p>
                <div class="creator-info">
                    <span>Created by</span>
                    <a href="#" class="creator-link">Maneesh N</a>
                    <span class="separator">|</span>
                    <span>Made in India 🇮🇳</span>
                </div>
            </div>
        </div>
   </footer>
  <?php include 'includes/footer.php'?>