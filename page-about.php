<?php /* Template Name: Azora About */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>About — Azora Optics</title>
<meta name="description" content="Azora Optical Solutions provides expert optical design consulting led by a senior engineer. Learn about our approach, experience, and commitment to precision.">
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
<section class="ao-hero" style="padding-bottom:80px;">
  <p class="ao-eyebrow">About Azora</p>
  <h1 class="ao-hero-h" style="font-size:clamp(44px,7vw,80px);">Optical engineering,<br>done right.</h1>
  <p class="ao-hero-sub">Azora Optical Solutions is a consulting practice built on the principle that great optical engineering comes from deep expertise, not large teams.</p>
</section>

<!-- STORY -->
<section class="ao-section ao-bg-gray">
  <div class="ao-page-content">
    <h2 class="ao-heading" style="font-size:clamp(32px,5vw,52px);">The Azora approach.</h2>
    <p class="ao-body-text">Founded to bridge the gap between optical theory and practical product delivery, Azora Optics provides senior-level consulting for organizations that need precision optical design without the overhead of a large engineering firm.</p>
    <p class="ao-body-text">Every engagement is led directly by a senior optical engineer with hands-on experience in defense, medical devices, industrial sensing, and consumer electronics. There are no junior hand-offs, no outsourcing, and no layers of project management between you and the engineer doing the work.</p>
    <p class="ao-body-text">We work with startups refining their first optical prototype and with established companies solving complex stray light or tolerancing challenges in production systems. The scope varies; the standard of work does not.</p>
  </div>
</section>

<!-- PRINCIPLES -->
<section class="ao-section ao-bg-white">
  <p class="ao-eyebrow">Principles</p>
  <h2 class="ao-heading" style="font-size:clamp(32px,5vw,52px);">What we believe.</h2>
  <div class="ao-grid-2">
    <div class="ao-value">
      <h3 class="ao-value-title">Expertise Over Scale</h3>
      <p class="ao-value-desc">One experienced engineer outperforms a team of generalists on optical problems. We keep it lean so you get the best work, not the most billable hours.</p>
    </div>
    <div class="ao-value">
      <h3 class="ao-value-title">Transparency First</h3>
      <p class="ao-value-desc">Fixed pricing, clear deliverables, and honest timelines. You know exactly what you're paying for and when you'll receive it.</p>
    </div>
    <div class="ao-value">
      <h3 class="ao-value-title">Design for Manufacturing</h3>
      <p class="ao-value-desc">A design that can't be manufactured affordably isn't a good design. Every system we create is optimized for real-world production constraints.</p>
    </div>
    <div class="ao-value">
      <h3 class="ao-value-title">Long-Term Relationships</h3>
      <p class="ao-value-desc">We aim to be your ongoing optical engineering partner, not a one-project vendor. Most clients return for multiple engagements.</p>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section class="ao-section ao-bg-dark">
  <p class="ao-eyebrow ao-eyebrow-light">Industries</p>
  <h2 class="ao-heading ao-heading-white" style="font-size:clamp(32px,5vw,52px);">Where we work.</h2>
  <p class="ao-subhead ao-subhead-muted">Azora Optics has delivered projects across these sectors.</p>
  <div class="ao-grid-4" style="margin-top:48px;">
    <div class="ao-industry-card">
      <h3>Defense & Aerospace</h3>
      <p>Targeting, surveillance, and sensor systems for harsh environments.</p>
    </div>
    <div class="ao-industry-card">
      <h3>Medical Devices</h3>
      <p>Imaging and illumination optics for diagnostic and surgical instruments.</p>
    </div>
    <div class="ao-industry-card">
      <h3>Industrial & Machine Vision</h3>
      <p>Inspection, measurement, and automation optical systems.</p>
    </div>
    <div class="ao-industry-card">
      <h3>Consumer Electronics</h3>
      <p>Compact optics for cameras, AR/VR, and display technologies.</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ao-cta">
  <p class="ao-eyebrow ao-eyebrow-on-blue">Work With Us</p>
  <h2 class="ao-heading ao-heading-white">Let's discuss your<br>optical challenge.</h2>
  <p class="ao-subhead ao-subhead-on-blue">Book a free 30-minute consultation to see how Azora can help.</p>
  <div class="ao-cta-btns">
    <a href="<?php echo home_url('/booking'); ?>" class="ao-btn-white">Book free consultation</a>
    <a href="<?php echo home_url('/contact'); ?>" class="ao-btn-outline-white">Send an inquiry</a>
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
