<?php /* Template Name: Azora Homepage */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Azora Optics — Optical Design & Engineering Consulting</title>
<meta name="description" content="Professional optical design consulting, custom lens design, stray light analysis, component sourcing, and optics characterization for demanding applications.">
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
      <li><a href="#services">Services</a></li>
      <li><a href="#why">Why Azora</a></li>
      <li><a href="#expertise">Expertise</a></li>
      <li><a href="#process">Process</a></li>
      <li><a href="#tools">Tools</a></li>
      <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
    </ul>
    <div class="ao-nav-cta">
      <a href="<?php echo home_url('/booking'); ?>">Book Consultation</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="ao-hero">
  <p class="ao-eyebrow">Optical Engineering Consulting</p>
  <h1 class="ao-hero-h">Precision optics.<br>Practical results.</h1>
  <p class="ao-hero-sub">Expert optical design, lens sourcing, stray light analysis, and characterization — for your most demanding applications.</p>
  <div class="ao-hero-cta">
    <a href="<?php echo home_url('/booking'); ?>" class="ao-btn-pill">Book a free consultation</a>
    <a href="#services" class="ao-link-arrow">Explore services ›</a>
  </div>
</section>

<!-- SERVICES -->
<section class="ao-section ao-bg-gray" id="services">
  <p class="ao-eyebrow">Services</p>
  <h2 class="ao-heading">Everything your optical<br>project needs.</h2>
  <p class="ao-subhead">End-to-end consulting led by a senior optical engineer — no juniors, no outsourcing.</p>
  <div class="ao-grid-3">
    <div class="ao-card">
      <span class="ao-card-num">01</span>
      <h3 class="ao-card-title">Optical Design Consulting</h3>
      <p class="ao-card-desc">System-level design for imaging, illumination, and sensing. From feasibility studies to final tolerancing.</p>
    </div>
    <div class="ao-card">
      <span class="ao-card-num">02</span>
      <h3 class="ao-card-title">Custom Lens Design</h3>
      <p class="ao-card-desc">Lens optimization for MTF, distortion, and aberration control using Zemax OpticStudio. Designed for manufacturability.</p>
    </div>
    <div class="ao-card">
      <span class="ao-card-num">03</span>
      <h3 class="ao-card-title">Stray Light Analysis</h3>
      <p class="ao-card-desc">Non-sequential ray tracing to identify and eliminate parasitic light paths and ghost images before production.</p>
    </div>
    <div class="ao-card">
      <span class="ao-card-num">04</span>
      <h3 class="ao-card-title">Component Sourcing</h3>
      <p class="ao-card-desc">Identify and source optics from qualified manufacturers worldwide. Spec writing, vendor evaluation, and QC support.</p>
    </div>
    <div class="ao-card">
      <span class="ao-card-num">05</span>
      <h3 class="ao-card-title">Optics Characterization</h3>
      <p class="ao-card-desc">Measurement of optical assemblies — wavefront error, MTF, transmission, and surface quality verification.</p>
    </div>
    <div class="ao-card">
      <span class="ao-card-num">06</span>
      <h3 class="ao-card-title">Design Review</h3>
      <p class="ao-card-desc">Independent review of existing designs or vendor proposals. Expert second opinion before you commit to production.</p>
    </div>
  </div>
</section>

<!-- WHY AZORA -->
<section class="ao-section ao-bg-white" id="why">
  <p class="ao-eyebrow">Why Azora</p>
  <h2 class="ao-heading">One senior engineer.<br>Zero compromises.</h2>
  <p class="ao-subhead">Every engagement is personal, transparent, and built on deep technical expertise.</p>
  <div class="ao-grid-2">
    <div class="ao-value">
      <h3 class="ao-value-title">Direct Expert Access</h3>
      <p class="ao-value-desc">Every project is led by a senior optical engineer with hands-on experience across defense, medical, industrial, and consumer optics.</p>
    </div>
    <div class="ao-value">
      <h3 class="ao-value-title">Fixed Pricing</h3>
      <p class="ao-value-desc">No hourly surprises. Clear scope, clear deliverables, clear cost — agreed before work begins.</p>
    </div>
    <div class="ao-value">
      <h3 class="ao-value-title">No Outsourcing</h3>
      <p class="ao-value-desc">Your project stays with the engineer you hired. No hand-offs, no junior substitutions. Period.</p>
    </div>
    <div class="ao-value">
      <h3 class="ao-value-title">Global Vendor Network</h3>
      <p class="ao-value-desc">Qualified optical manufacturers across North America, Europe, and Asia — vetted and ready for your project.</p>
    </div>
  </div>
</section>

<!-- EXPERTISE -->
<section class="ao-section ao-bg-dark" id="expertise">
  <div class="ao-split">
    <div class="ao-split-left">
      <p class="ao-eyebrow ao-eyebrow-light">Expertise</p>
      <h2 class="ao-heading ao-heading-white">Deep knowledge.<br>Real-world experience.</h2>
      <p class="ao-subhead ao-subhead-muted">Azora Optics serves clients across defense, medical, industrial, and consumer markets.</p>
      <div style="margin-top:40px;">
        <a href="<?php echo home_url('/about'); ?>" class="ao-btn-pill">About Azora ›</a>
      </div>
    </div>
    <div class="ao-split-right">
      <div class="ao-exp-row">
        <strong>Imaging & Illumination</strong>
        <span>System design for visible, NIR, and SWIR spectral bands.</span>
      </div>
      <div class="ao-exp-row">
        <strong>Zemax OpticStudio Expert</strong>
        <span>Sequential and non-sequential ray tracing, tolerance analysis.</span>
      </div>
      <div class="ao-exp-row">
        <strong>Tolerance & Alignment</strong>
        <span>Optical tolerance analysis and alignment procedure development.</span>
      </div>
      <div class="ao-exp-row">
        <strong>Regulated Industries</strong>
        <span>Medical device, defense, and industrial optics standards compliance.</span>
      </div>
      <div class="ao-exp-row">
        <strong>End-to-End Support</strong>
        <span>From project definition and feasibility through to production handoff.</span>
      </div>
      <div class="ao-exp-row">
        <strong>Global Vendor Network</strong>
        <span>Qualified manufacturers across North America, Europe, and Asia.</span>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="ao-section ao-bg-gray" id="process">
  <p class="ao-eyebrow">How It Works</p>
  <h2 class="ao-heading">Simple. Transparent.<br>Structured.</h2>
  <p class="ao-subhead">A clear engagement process from first contact to final delivery.</p>
  <div class="ao-grid-4">
    <div class="ao-step">
      <div class="ao-step-num">01</div>
      <h3 class="ao-step-title">Initial Consultation</h3>
      <p class="ao-step-desc">Free 30-minute call to discuss your project scope, requirements, and timeline.</p>
    </div>
    <div class="ao-step">
      <div class="ao-step-num">02</div>
      <h3 class="ao-step-title">Proposal & Scope</h3>
      <p class="ao-step-desc">Detailed proposal with deliverables, timeline, and fixed pricing — no surprises.</p>
    </div>
    <div class="ao-step">
      <div class="ao-step-num">03</div>
      <h3 class="ao-step-title">Design & Analysis</h3>
      <p class="ao-step-desc">Engineering work with regular check-ins and milestone reviews to keep you informed.</p>
    </div>
    <div class="ao-step">
      <div class="ao-step-num">04</div>
      <h3 class="ao-step-title">Delivery & Support</h3>
      <p class="ao-step-desc">Complete documentation, design files, and post-delivery support as needed.</p>
    </div>
  </div>
</section>

<!-- TOOLS -->
<section class="ao-section ao-bg-white" id="tools">
  <p class="ao-eyebrow">Tools & Software</p>
  <h2 class="ao-heading">Industry-standard tools.</h2>
  <p class="ao-subhead">The same professional software used by leading optical engineering teams worldwide.</p>
  <div class="ao-pills">
    <span class="ao-pill">Zemax OpticStudio</span>
    <span class="ao-pill">CODE V</span>
    <span class="ao-pill">LightTools</span>
    <span class="ao-pill">FRED</span>
    <span class="ao-pill">TracePro</span>
    <span class="ao-pill">VirtualLab Fusion</span>
    <span class="ao-pill">SolidWorks</span>
    <span class="ao-pill">MATLAB</span>
    <span class="ao-pill">Python</span>
    <span class="ao-pill">Oslo</span>
    <span class="ao-pill">ISO 10110</span>
    <span class="ao-pill">GD&amp;T</span>
  </div>
</section>

<!-- CTA -->
<section class="ao-cta">
  <p class="ao-eyebrow ao-eyebrow-on-blue">Get Started</p>
  <h2 class="ao-heading ao-heading-white">Ready to start your<br>optical project?</h2>
  <p class="ao-subhead ao-subhead-on-blue">Book a free 30-minute consultation — no commitment required.</p>
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
          <li><a href="#services">Optical Design</a></li>
          <li><a href="#services">Lens Design</a></li>
          <li><a href="#services">Stray Light</a></li>
          <li><a href="#services">Sourcing</a></li>
          <li><a href="#services">Characterization</a></li>
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
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click',function(e){
      var t=document.querySelector(this.getAttribute('href'));
      if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});
        if(nav.classList.contains('ao-nav-open')){nav.classList.remove('ao-nav-open');btn.classList.remove('ao-menu-open');}
      }
    });
  });
  var navEl=document.querySelector('.ao-nav');
  window.addEventListener('scroll',function(){
    navEl.classList.toggle('ao-nav-scrolled',window.scrollY>10);
  });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
