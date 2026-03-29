<?php /* Template Name: Azora Contact */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Contact — Azora Optics</title>
<meta name="description" content="Get in touch with Azora Optics for optical design consulting, lens design, stray light analysis, and more. Book a free consultation or send us an inquiry.">
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
<section class="ao-hero" style="padding-bottom:60px;">
  <p class="ao-eyebrow">Contact</p>
  <h1 class="ao-hero-h" style="font-size:clamp(44px,7vw,80px);">Let's talk optics.</h1>
  <p class="ao-hero-sub">Have a project in mind? Need a second opinion on a design? Reach out and we'll get back to you within one business day.</p>
</section>

<!-- CONTACT OPTIONS -->
<section class="ao-section ao-bg-gray">
  <div class="ao-contact-grid">
    <div class="ao-contact-card">
      <h3 class="ao-contact-card-title">Email Us</h3>
      <p class="ao-contact-card-desc">Send us your project details and we'll respond within one business day.</p>
      <a href="mailto:info@azoraoptics.com" class="ao-link-arrow">info@azoraoptics.com ›</a>
    </div>
    <div class="ao-contact-card">
      <h3 class="ao-contact-card-title">Book a Call</h3>
      <p class="ao-contact-card-desc">Schedule a free 30-minute consultation to discuss your optical project.</p>
      <a href="<?php echo home_url('/booking'); ?>" class="ao-link-arrow">Schedule now ›</a>
    </div>
    <div class="ao-contact-card">
      <h3 class="ao-contact-card-title">Quick Question?</h3>
      <p class="ao-contact-card-desc">Use the form below for general inquiries, RFQ requests, or partnership discussions.</p>
      <a href="#contact-form" class="ao-link-arrow">Go to form ›</a>
    </div>
  </div>
</section>

<!-- CONTACT FORM -->
<section class="ao-section ao-bg-white" id="contact-form">
  <div class="ao-form-wrap">
    <h2 class="ao-heading" style="font-size:clamp(32px,5vw,48px);">Send us a message.</h2>
    <p class="ao-subhead" style="margin-bottom:48px;">We'll get back to you within one business day.</p>
    <?php
    // If Contact Form 7 is active, use it. Otherwise show a simple form.
    if ( shortcode_exists('contact-form-7') ) {
      // Replace with your actual CF7 form shortcode ID
      echo do_shortcode('[contact-form-7 id="contact-form" title="Contact Form"]');
    } else {
    ?>
    <form class="ao-form" action="mailto:info@azoraoptics.com" method="post" enctype="text/plain">
      <div class="ao-form-row">
        <div class="ao-form-field">
          <label for="ao-name">Name</label>
          <input type="text" id="ao-name" name="Name" required>
        </div>
        <div class="ao-form-field">
          <label for="ao-email">Email</label>
          <input type="email" id="ao-email" name="Email" required>
        </div>
      </div>
      <div class="ao-form-field">
        <label for="ao-company">Company (optional)</label>
        <input type="text" id="ao-company" name="Company">
      </div>
      <div class="ao-form-field">
        <label for="ao-subject">Subject</label>
        <select id="ao-subject" name="Subject">
          <option value="General Inquiry">General Inquiry</option>
          <option value="Optical Design">Optical Design Consulting</option>
          <option value="Lens Design">Custom Lens Design</option>
          <option value="Stray Light">Stray Light Analysis</option>
          <option value="Component Sourcing">Component Sourcing</option>
          <option value="Characterization">Optics Characterization</option>
          <option value="Design Review">Design Review</option>
          <option value="Partnership">Partnership</option>
        </select>
      </div>
      <div class="ao-form-field">
        <label for="ao-message">Message</label>
        <textarea id="ao-message" name="Message" rows="6" required></textarea>
      </div>
      <button type="submit" class="ao-btn-pill">Send message</button>
    </form>
    <?php } ?>
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
