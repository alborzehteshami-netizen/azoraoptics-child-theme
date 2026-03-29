<?php
/**
 * Homepage template — Azora Optics
 * Apple-inspired design
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azora Optics — Expert Optical Design & Engineering Consulting</title>
  <meta name="description" content="Professional optical design consulting, lens design, stray light analysis, lens sourcing, and custom optics characterization.">
  <?php wp_head(); ?>
</head>
<body class="ao-page">

<!-- NAV -->
<nav class="ao-nav">
  <div class="ao-nav-inner">
    <a href="<?php echo home_url(); ?>" class="ao-nav-logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" alt="Azora Optics" onerror="this.style.display='none'">
      <span class="ao-nav-logo-text">Azora Optics</span>
    </a>
    <ul class="ao-nav-links">
      <li><a href="#services">Services</a></li>
      <li><a href="#expertise">Expertise</a></li>
      <li><a href="#process">Process</a></li>
      <li><a href="#tools">Tools</a></li>
      <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
    </ul>
    <div class="ao-nav-cta">
      <a href="<?php echo home_url('/booking'); ?>">Book Consultation ›</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="ao-hero">
  <p class="ao-hero-eyebrow">Optical Engineering Consulting</p>
  <h1 class="ao-hero-title">
    Precision optics.<br>
    <span class="ao-gradient">Practical results.</span>
  </h1>
  <p class="ao-hero-sub">
    From concept to characterization — expert optical design, lens design, stray light analysis, and sourcing for your most demanding applications.
  </p>
  <div class="ao-hero-actions">
    <a href="<?php echo home_url('/booking'); ?>" class="ao-btn ao-btn-blue">Book a free consultation</a>
    <a href="#services" class="ao-btn ao-btn-ghost">Explore services ↓</a>
  </div>
</section>

<!-- TAGLINE -->
<section class="ao-tagline">
  <p class="ao-tagline-text">
    Where <em>optical design</em> meets practical innovation — delivering high-precision solutions for imaging, sensing, and illumination systems.
  </p>
</section>

<!-- SERVICES -->
<section class="ao-services" id="services">
  <div class="ao-wrap">
    <div class="ao-services-header">
      <span class="ao-label">Services</span>
      <h2 class="ao-title">End-to-end optical engineering.</h2>
      <p class="ao-subtitle">Every service is led by a senior optical engineer — no juniors, no outsourcing.</p>
    </div>
    <div class="ao-services-grid">
      <div class="ao-service-item">
        <div class="ao-service-num">01</div>
        <h3 class="ao-service-name">Optical Design Consulting</h3>
        <p class="ao-service-desc">System-level design and analysis for imaging, illumination, and sensing applications. From feasibility to final tolerancing.</p>
      </div>
      <div class="ao-service-item">
        <div class="ao-service-num">02</div>
        <h3 class="ao-service-name">Lens Design</h3>
        <p class="ao-service-desc">Custom lens design optimized for MTF, distortion, and aberration control using Zemax OpticStudio. Built for manufacturability.</p>
      </div>
      <div class="ao-service-item">
        <div class="ao-service-num">03</div>
        <h3 class="ao-service-name">Stray Light Analysis</h3>
        <p class="ao-service-desc">In-depth stray light and ghost analysis via non-sequential ray tracing. Identify and eliminate parasitic light paths before production.</p>
      </div>
      <div class="ao-service-item">
        <div class="ao-service-num">04</div>
        <h3 class="ao-service-name">Lens Sourcing</h3>
        <p class="ao-service-desc">Identify, evaluate, and source optics from qualified manufacturers worldwide. Spec writing, vendor management, and QC support.</p>
      </div>
      <div class="ao-service-item">
        <div class="ao-service-num">05</div>
        <h3 class="ao-service-name">Optics Characterization</h3>
        <p class="ao-service-desc">Custom measurement of optical components and assemblies — wavefront error, MTF, transmission, and surface quality.</p>
      </div>
      <div class="ao-service-item">
        <div class="ao-service-num">06</div>
        <h3 class="ao-service-name">Design Review</h3>
        <p class="ao-service-desc">Independent technical review of existing designs, specifications, or vendor proposals. Expert second opinion before you commit.</p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT / EXPERTISE -->
<section class="ao-about" id="expertise">
  <div class="ao-wrap">
    <div class="ao-about-inner">
      <div>
        <span class="ao-label">Expertise</span>
        <h2 class="ao-title">Deep knowledge. Real-world experience.</h2>
        <p class="ao-subtitle">Azora Optics brings hands-on engineering expertise to clients across defense, medical, industrial, and consumer markets.</p>
        <div style="margin-top:40px;">
          <a href="<?php echo home_url('/about'); ?>" class="ao-btn ao-btn-blue">About Azora Optics ›</a>
        </div>
      </div>
      <div class="ao-expertise">
        <div class="ao-expertise-item">
          <span class="ao-expertise-icon">🔭</span>
          <div class="ao-expertise-text">
            <strong>Imaging & Illumination</strong>
            System design for visible, NIR, and SWIR spectral bands.
          </div>
        </div>
        <div class="ao-expertise-item">
          <span class="ao-expertise-icon">⚙️</span>
          <div class="ao-expertise-text">
            <strong>Zemax OpticStudio Expert</strong>
            Sequential and non-sequential ray tracing, tolerance analysis.
          </div>
        </div>
        <div class="ao-expertise-item">
          <span class="ao-expertise-icon">📐</span>
          <div class="ao-expertise-text">
            <strong>Tolerance & Alignment</strong>
            Optical tolerance analysis and alignment procedure development.
          </div>
        </div>
        <div class="ao-expertise-item">
          <span class="ao-expertise-icon">🏥</span>
          <div class="ao-expertise-text">
            <strong>Regulated Industries</strong>
            Medical device, defense, and industrial optics standards.
          </div>
        </div>
        <div class="ao-expertise-item">
          <span class="ao-expertise-icon">🌐</span>
          <div class="ao-expertise-text">
            <strong>Global Vendor Network</strong>
            Qualified manufacturers across North America, Europe, and Asia.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="ao-process" id="process">
  <div class="ao-wrap">
    <div class="ao-process-header">
      <span class="ao-label">How It Works</span>
      <h2 class="ao-title">Simple. Transparent. Structured.</h2>
      <p class="ao-subtitle">A clear engagement process from first contact to final delivery.</p>
    </div>
    <div class="ao-process-grid">
      <div class="ao-process-step">
        <div class="ao-step-num">01</div>
        <h3 class="ao-step-name">Initial Consultation</h3>
        <p class="ao-step-desc">Free 30-minute call to discuss your project scope, requirements, and timeline.</p>
      </div>
      <div class="ao-process-step">
        <div class="ao-step-num">02</div>
        <h3 class="ao-step-name">Proposal & Scope</h3>
        <p class="ao-step-desc">Detailed proposal with deliverables, timeline, and fixed pricing — no surprises.</p>
      </div>
      <div class="ao-process-step">
        <div class="ao-step-num">03</div>
        <h3 class="ao-step-name">Design & Analysis</h3>
        <p class="ao-step-desc">Engineering work with regular check-ins and milestone reviews to keep you informed.</p>
      </div>
      <div class="ao-process-step">
        <div class="ao-step-num">04</div>
        <h3 class="ao-step-name">Delivery & Support</h3>
        <p class="ao-step-desc">Complete documentation, design files, and post-delivery support as needed.</p>
      </div>
    </div>
  </div>
</section>

<!-- TOOLS -->
<section class="ao-tools" id="tools">
  <div class="ao-wrap">
    <div class="ao-tools-header">
      <span class="ao-label">Tools & Software</span>
      <h2 class="ao-title">Industry-standard tools.</h2>
      <p class="ao-subtitle">Work performed using the same professional tools used by leading optical engineering teams worldwide.</p>
    </div>
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
  </div>
</section>

<!-- CTA -->
<section class="ao-cta">
  <h2 class="ao-cta-title">Ready to start your<br>optical project?</h2>
  <p class="ao-cta-sub">Book a free 30-minute consultation — no commitment required.</p>
  <div class="ao-cta-actions">
    <a href="<?php echo home_url('/booking'); ?>" class="ao-btn ao-btn-dark">Book free consultation</a>
    <a href="<?php echo home_url('/contact'); ?>" class="ao-btn ao-btn-outline">Send an inquiry</a>
  </div>
</section>

<!-- FOOTER -->
<footer class="ao-footer">
  <div class="ao-wrap">
    <div class="ao-footer-top">
      <div>
        <div class="ao-footer-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" alt="Azora Optics" onerror="this.style.display='none'">
          <span class="ao-footer-logo-text">Azora Optics</span>
        </div>
        <p class="ao-footer-tagline">Where optical design meets practical innovation.</p>
      </div>
      <div>
        <div class="ao-footer-col-title">Services</div>
        <ul class="ao-footer-col-links">
          <li><a href="#services">Optical Design</a></li>
          <li><a href="#services">Lens Design</a></li>
          <li><a href="#services">Stray Light</a></li>
          <li><a href="#services">Lens Sourcing</a></li>
          <li><a href="#services">Characterization</a></li>
        </ul>
      </div>
      <div>
        <div class="ao-footer-col-title">Company</div>
        <ul class="ao-footer-col-links">
          <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
          <li><a href="<?php echo home_url('/booking'); ?>">Book Consultation</a></li>
        </ul>
      </div>
      <div>
        <div class="ao-footer-col-title">Contact</div>
        <ul class="ao-footer-col-links">
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
