<?php /* Template Name: Azora Homepage */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Azora Optics — Optical Design & Engineering Consulting</title>
<meta name="description" content="Expert optical design consulting, lens design, stray light analysis, lens sourcing, and custom optics characterization.">
<?php wp_head(); ?>
</head>
<body class="ao">

<!-- ═══ NAV ═══ -->
<nav class="ao-nav">
  <div class="ao-nav-inner">
    <a href="<?php echo home_url(); ?>" class="ao-nav-logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" alt="Azora Optics" onerror="this.style.display='none'">
      <span>Azora Optics</span>
    </a>
    <ul class="ao-nav-links">
      <li><a href="#services">Services</a></li>
      <li><a href="#expertise">Expertise</a></li>
      <li><a href="#process">Process</a></li>
      <li><a href="#tools">Tools</a></li>
      <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
    </ul>
    <div class="ao-nav-book">
      <a href="<?php echo home_url('/booking'); ?>">Book Consultation ›</a>
    </div>
  </div>
</nav>

<!-- ═══ HERO ═══ -->
<section class="ao-hero">
  <p class="ao-hero-eye">Optical Engineering Consulting</p>
  <h1 class="ao-hero-h1">Precision optics.<br>Practical results.</h1>
  <p class="ao-hero-sub">Expert optical design, lens design, stray light analysis, and sourcing — for your most demanding applications.</p>
  <div class="ao-hero-btns">
    <a href="<?php echo home_url('/booking'); ?>" class="ao-btn ao-btn-blue">Book a free consultation</a>
    <a href="#services" class="ao-btn ao-btn-text">Explore services ›</a>
  </div>
</section>

<div class="ao-divider"></div>

<!-- ═══ SERVICES ═══ -->
<section class="ao-card ao-card-gray" id="services">
  <p class="ao-card-eye">Services</p>
  <h2 class="ao-card-h2">Everything your optical project needs.</h2>
  <p class="ao-card-sub">End-to-end consulting led by a senior optical engineer — no juniors, no outsourcing.</p>
  <div class="ao-svc-grid">
    <div class="ao-svc">
      <div class="ao-svc-n">01</div>
      <h3 class="ao-svc-h">Optical Design Consulting</h3>
      <p class="ao-svc-p">System-level design for imaging, illumination, and sensing. From feasibility to final tolerancing.</p>
    </div>
    <div class="ao-svc">
      <div class="ao-svc-n">02</div>
      <h3 class="ao-svc-h">Lens Design</h3>
      <p class="ao-svc-p">Custom lens design optimized for MTF, distortion, and aberration control using Zemax OpticStudio.</p>
    </div>
    <div class="ao-svc">
      <div class="ao-svc-n">03</div>
      <h3 class="ao-svc-h">Stray Light Analysis</h3>
      <p class="ao-svc-p">Non-sequential ray tracing to identify and eliminate parasitic light paths before production.</p>
    </div>
    <div class="ao-svc">
      <div class="ao-svc-n">04</div>
      <h3 class="ao-svc-h">Lens Sourcing</h3>
      <p class="ao-svc-p">Identify and source optics from qualified manufacturers worldwide. Spec writing and QC support.</p>
    </div>
    <div class="ao-svc">
      <div class="ao-svc-n">05</div>
      <h3 class="ao-svc-h">Optics Characterization</h3>
      <p class="ao-svc-p">Measurement of optical assemblies — wavefront error, MTF, transmission, and surface quality.</p>
    </div>
    <div class="ao-svc">
      <div class="ao-svc-n">06</div>
      <h3 class="ao-svc-h">Design Review</h3>
      <p class="ao-svc-p">Independent review of existing designs or vendor proposals. Expert second opinion before you commit.</p>
    </div>
  </div>
</section>

<div class="ao-divider"></div>

<!-- ═══ EXPERTISE ═══ -->
<section class="ao-card ao-card-dark" id="expertise">
  <div class="ao-exp-wrap">
    <div class="ao-exp-intro">
      <p class="ao-card-eye">Expertise</p>
      <h2 class="ao-card-h2">Deep knowledge.<br>Real-world experience.</h2>
      <p class="ao-card-sub">Azora Optics serves clients across defense, medical, industrial, and consumer markets.</p>
      <div style="margin-top:36px;">
        <a href="<?php echo home_url('/about'); ?>" class="ao-btn ao-btn-blue">About Azora ›</a>
      </div>
    </div>
    <div class="ao-exp-list">
      <div class="ao-exp-row">
        <span class="ao-exp-icon">🔭</span>
        <div class="ao-exp-body">
          <strong>Imaging & Illumination</strong>
          <span>System design for visible, NIR, and SWIR spectral bands.</span>
        </div>
      </div>
      <div class="ao-exp-row">
        <span class="ao-exp-icon">⚙️</span>
        <div class="ao-exp-body">
          <strong>Zemax OpticStudio Expert</strong>
          <span>Sequential and non-sequential ray tracing, tolerance analysis.</span>
        </div>
      </div>
      <div class="ao-exp-row">
        <span class="ao-exp-icon">📐</span>
        <div class="ao-exp-body">
          <strong>Tolerance & Alignment</strong>
          <span>Optical tolerance analysis and alignment procedure development.</span>
        </div>
      </div>
      <div class="ao-exp-row">
        <span class="ao-exp-icon">🏥</span>
        <div class="ao-exp-body">
          <strong>Regulated Industries</strong>
          <span>Medical device, defense, and industrial optics standards.</span>
        </div>
      </div>
      <div class="ao-exp-row">
        <span class="ao-exp-icon">🌐</span>
        <div class="ao-exp-body">
          <strong>Global Vendor Network</strong>
          <span>Qualified manufacturers across North America, Europe, and Asia.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ao-divider"></div>

<!-- ═══ PROCESS ═══ -->
<section class="ao-card ao-card-gray" id="process">
  <p class="ao-card-eye">How It Works</p>
  <h2 class="ao-card-h2">Simple. Transparent. Structured.</h2>
  <p class="ao-card-sub">A clear engagement process from first contact to final delivery.</p>
  <div class="ao-steps">
    <div class="ao-step">
      <div class="ao-step-n">01</div>
      <h3 class="ao-step-h">Initial Consultation</h3>
      <p class="ao-step-p">Free 30-minute call to discuss your project scope, requirements, and timeline.</p>
    </div>
    <div class="ao-step">
      <div class="ao-step-n">02</div>
      <h3 class="ao-step-h">Proposal & Scope</h3>
      <p class="ao-step-p">Detailed proposal with deliverables, timeline, and fixed pricing — no surprises.</p>
    </div>
    <div class="ao-step">
      <div class="ao-step-n">03</div>
      <h3 class="ao-step-h">Design & Analysis</h3>
      <p class="ao-step-p">Engineering work with regular check-ins and milestone reviews to keep you informed.</p>
    </div>
    <div class="ao-step">
      <div class="ao-step-n">04</div>
      <h3 class="ao-step-h">Delivery & Support</h3>
      <p class="ao-step-p">Complete documentation, design files, and post-delivery support as needed.</p>
    </div>
  </div>
</section>

<div class="ao-divider"></div>

<!-- ═══ TOOLS ═══ -->
<section class="ao-card ao-card-white" id="tools">
  <p class="ao-card-eye">Tools & Software</p>
  <h2 class="ao-card-h2">Industry-standard tools.</h2>
  <p class="ao-card-sub">The same professional tools used by leading optical engineering teams worldwide.</p>
  <div class="ao-tools-list">
    <span class="ao-tool">Zemax OpticStudio</span>
    <span class="ao-tool">CODE V</span>
    <span class="ao-tool">LightTools</span>
    <span class="ao-tool">FRED</span>
    <span class="ao-tool">TracePro</span>
    <span class="ao-tool">VirtualLab Fusion</span>
    <span class="ao-tool">SolidWorks</span>
    <span class="ao-tool">MATLAB</span>
    <span class="ao-tool">Python</span>
    <span class="ao-tool">Oslo</span>
    <span class="ao-tool">ISO 10110</span>
    <span class="ao-tool">GD&amp;T</span>
  </div>
</section>

<div class="ao-divider"></div>

<!-- ═══ CTA ═══ -->
<section class="ao-card ao-card-dark">
  <p class="ao-card-eye">Get Started</p>
  <h2 class="ao-card-h2">Ready to start your optical project?</h2>
  <p class="ao-card-sub">Book a free 30-minute consultation — no commitment required.</p>
  <div class="ao-card-btns" style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
    <a href="<?php echo home_url('/booking'); ?>" class="ao-btn ao-btn-blue">Book free consultation</a>
    <a href="<?php echo home_url('/contact'); ?>" class="ao-btn ao-btn-outline">Send an inquiry</a>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer class="ao-footer">
  <div class="ao-footer-inner">
    <div class="ao-footer-top">
      <div>
        <div class="ao-footer-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" alt="Azora Optics" onerror="this.style.display='none'">
          <span>Azora Optics</span>
        </div>
        <p class="ao-footer-desc">Where optical design meets practical innovation.</p>
      </div>
      <div class="ao-footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="#services">Optical Design</a></li>
          <li><a href="#services">Lens Design</a></li>
          <li><a href="#services">Stray Light</a></li>
          <li><a href="#services">Lens Sourcing</a></li>
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
          <li><a href="<?php echo home_url('/booking'); ?>">Schedule a call</a></li>
        </ul>
      </div>
    </div>
    <div class="ao-footer-bottom">
      <p class="ao-footer-copy">&copy; <?php echo date('Y'); ?> Azora Optical Solutions Inc. All rights reserved.</p>
      <div class="ao-footer-legal">
        <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
        <a href="<?php echo home_url('/terms'); ?>">Terms</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
