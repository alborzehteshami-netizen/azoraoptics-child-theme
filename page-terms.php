<?php /* Template Name: Azora Terms */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Terms of Service — Azora Optics</title>
<meta name="description" content="Terms of service for Azora Optical Solutions website and consulting services.">
<?php wp_head(); ?>
</head>
<body class="ao">

<!-- NAV -->
<nav class="ao-nav">
  <div class="ao-nav-inner">
    <a href="<?php echo home_url(); ?>" class="ao-logo">
      <div class="ao-logo-mark">A</div>
      <span>Azora Optics</span>
    </a>
    <button class="ao-menu-btn" aria-label="Menu">
      <span></span><span></span>
    </button>
    <ul class="ao-nav-links">
      <li><a href="<?php echo home_url(); ?>/#services">Services</a></li>
      <li><a href="<?php echo home_url(); ?>/#why">Why Azora</a></li>
      <li><a href="<?php echo home_url(); ?>/#expertise">Expertise</a></li>
      <li><a href="<?php echo home_url(); ?>/#process">Process</a></li>
      <li><a href="<?php echo home_url(); ?>/#tools">Tools</a></li>
      <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
    </ul>
    <div class="ao-nav-cta">
      <a href="<?php echo home_url('/booking'); ?>">Book Consultation</a>
    </div>
  </div>
</nav>

<!-- PAGE HEADER -->
<section class="ao-hero" style="padding-bottom:40px;">
  <p class="ao-eyebrow">Legal</p>
  <h1 class="ao-hero-h" style="font-size:clamp(36px,6vw,64px);">Terms of Service</h1>
  <p class="ao-hero-sub">Last updated: <?php echo date('F j, Y'); ?></p>
</section>

<!-- CONTENT -->
<section class="ao-section ao-bg-white" style="padding-top:40px;">
  <div class="ao-legal-content">

    <h2>1. Agreement to Terms</h2>
    <p>By accessing or using the Azora Optics website (azoraoptics.com) or engaging our consulting services, you agree to be bound by these Terms of Service. If you do not agree, please do not use our website or services.</p>

    <h2>2. Services</h2>
    <p>Azora Optical Solutions Inc. provides optical design consulting services including, but not limited to, optical system design, custom lens design, stray light analysis, component sourcing, optics characterization, and design review. All consulting engagements are governed by individual project agreements that specify scope, deliverables, timeline, and pricing.</p>

    <h2>3. Intellectual Property</h2>
    <h3>Client Work</h3>
    <p>Unless otherwise specified in a project agreement, all deliverables created for a client engagement become the property of the client upon full payment. Azora Optics retains the right to use general knowledge, skills, and experience gained during engagements.</p>
    <h3>Website Content</h3>
    <p>All content on this website, including text, graphics, logos, and design, is the property of Azora Optical Solutions Inc. and is protected by intellectual property laws. You may not reproduce, distribute, or create derivative works without our written permission.</p>

    <h2>4. Confidentiality</h2>
    <p>We treat all client project information as confidential. Specific confidentiality terms are outlined in individual project agreements or non-disclosure agreements (NDAs) as required.</p>

    <h2>5. Payment Terms</h2>
    <p>Payment terms, including pricing, milestones, and due dates, are specified in individual project proposals. Unless otherwise agreed, invoices are due within 30 days of issuance. Late payments may be subject to interest charges as specified in the project agreement.</p>

    <h2>6. Limitation of Liability</h2>
    <p>To the fullest extent permitted by law, Azora Optical Solutions Inc. shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from or related to the use of our website or services. Our total liability for any claim shall not exceed the total fees paid by you for the specific engagement giving rise to the claim.</p>

    <h2>7. Warranty Disclaimer</h2>
    <p>Our website is provided "as is" without warranties of any kind, either express or implied. While we strive for accuracy, we do not guarantee that the website will be error-free, uninterrupted, or free of harmful components.</p>
    <p>Consulting deliverables are provided in accordance with the specifications outlined in the project agreement. We warrant that our work will be performed in a professional and workmanlike manner consistent with industry standards.</p>

    <h2>8. Indemnification</h2>
    <p>You agree to indemnify and hold harmless Azora Optical Solutions Inc., its officers, directors, employees, and agents from any claims, damages, losses, or expenses arising from your use of our website or violation of these Terms.</p>

    <h2>9. Governing Law</h2>
    <p>These Terms shall be governed by and construed in accordance with the laws of the Province of Ontario, Canada, without regard to conflict of law principles. Any disputes shall be resolved in the courts of Ontario, Canada.</p>

    <h2>10. Termination</h2>
    <p>We reserve the right to terminate or suspend access to our website at any time, without notice, for any reason. Termination of consulting engagements is governed by the terms of individual project agreements.</p>

    <h2>11. Changes to Terms</h2>
    <p>We may update these Terms from time to time. Changes will be posted on this page with an updated revision date. Continued use of the website after changes constitutes acceptance of the updated Terms.</p>

    <h2>12. Contact</h2>
    <p>For questions about these Terms of Service, please contact:</p>
    <p><strong>Azora Optical Solutions Inc.</strong><br>
    Email: <a href="mailto:info@azoraoptics.com">info@azoraoptics.com</a></p>

  </div>
</section>

<!-- FOOTER -->
<footer class="ao-footer">
  <div class="ao-footer-inner">
    <div class="ao-footer-grid">
      <div>
        <div class="ao-footer-brand">
          <div class="ao-logo-mark ao-logo-mark-sm">A</div>
          <span>Azora Optics</span>
        </div>
        <p class="ao-footer-tagline">Where optical design meets practical innovation.</p>
      </div>
      <div class="ao-footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo home_url(); ?>/#services">Optical Design</a></li>
          <li><a href="<?php echo home_url(); ?>/#services">Lens Design</a></li>
          <li><a href="<?php echo home_url(); ?>/#services">Stray Light</a></li>
          <li><a href="<?php echo home_url(); ?>/#services">Sourcing</a></li>
          <li><a href="<?php echo home_url(); ?>/#services">Characterization</a></li>
        </ul>
      </div>
      <div class="ao-footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
          <li><a href="<?php echo home_url('/booking'); ?>">Book Consultation</a></li>
        </ul>
      </div>
      <div class="ao-footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="mailto:info@azoraoptics.com">info@azoraoptics.com</a></li>
          <li><a href="<?php echo home_url('/booking'); ?>">Schedule a Call</a></li>
        </ul>
      </div>
    </div>
    <div class="ao-footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Azora Optical Solutions Inc. All rights reserved.</p>
      <div class="ao-footer-legal">
        <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
        <a href="<?php echo home_url('/terms'); ?>">Terms</a>
      </div>
    </div>
  </div>
</footer>

<script>
(function(){
  var btn=document.querySelector('.ao-menu-btn');
  var nav=document.querySelector('.ao-nav-links');
  if(btn&&nav){btn.addEventListener('click',function(){
    nav.classList.toggle('ao-nav-open');
    btn.classList.toggle('ao-menu-open');
  });}
  var navEl=document.querySelector('.ao-nav');
  window.addEventListener('scroll',function(){
    navEl.classList.toggle('ao-nav-scrolled',window.scrollY>10);
  });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
