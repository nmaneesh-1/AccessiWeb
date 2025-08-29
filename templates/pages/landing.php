 <?php
$baseUrl = '/Accessiweb';
?>

<?php include './templates/components/meta_links.php' ?>
<body> 
<?php include './templates/components/header.php' ?>
  
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
    <section class="features-section" id="feature-section">
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
<?php include './templates/components/footer.php'?>
<script src="../assets/js/script.js"></script>
</body>
</html>