<?php
/**
 * Homepage template — Azora Optics
 * Template Name: Azora Homepage
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azora Optics — Expert Optical Design & Engineering Consulting</title>
  <meta name="description" content="Professional optical design consulting, lens design, stray light analysis, lens sourcing, and custom optics characterization. Built for demanding optical engineering applications.">
  <?php wp_head(); ?>
</head>
<body class="ao-page">

<!-- ══════════════════════════════════
     NAVIGATION
══════════════════════════════════ -->
<nav class="ao-nav">
  <div class="ao-nav-inner">
    <a href="<?php echo home_url(); ?>" class="ao-nav-logo">
      <div class="ao-nav-logo-icon">A</div>
      <span>Azora Optics</span>
    </a>
    <ul class="ao-nav-links">
      <li><a href="#services">Services</a></li>
      <li><a href="#about">Expertise</a></li>
      <li><a href="#process">Process</a></li>
      <li><a href="#tools">Tools</a></li>
      <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
    </ul>
    <div class="ao-nav-cta">
      <a href="<?php echo home_url('/booking'); ?>" class="ao-btn ao-btn-primary">
        Book Consultation
      </a>
    </div>
  </div>
</nav>

<!-- ══════════════════════════════════
     HERO
══════════════════════════════════ -->
<section class="ao-hero">
  <div class="ao-hero-inner">
    <div class="ao-hero-content">
      <div class="ao-hero-badge">
        <span class="ao-hero-badge-dot"></span>
        Precision Optical Engineering
      </div>
      <h1 class="ao-hero-title">
        Expert Optical Design
        <span>&amp; Engineering</span>
        Consulting
      </h1>
      <p class="ao-hero-subtitle">
        From concept to characterization — high-precision optical system design, stray light analysis, lens sourcing, and custom optics solutions for your most demanding applications.
      </p>
      <div class="ao-hero-actions">
        <a href="<?php echo home_url('/booking'); ?>" class="ao-btn ao-btn-primary">
          Book a Free Consultation
        </a>
        <a href="#services" class="ao-btn ao-btn-outline">
          View Services
        </a>
      </div>
      <div class="ao-hero-stats">
        <div>
          <div class="ao-hero-stat-num">10+</div>
          <div class="ao-hero-stat-label">Years Experience</div>
        </div>
        <div>
          <div class="ao-hero-stat-num">50+</div>
          <div class="ao-hero-stat-label">Projects Delivered</div>
        </div>
        <div>
          <div class="ao-hero-stat-num">100%</div>
          <div class="ao-hero-stat-label">Client Satisfaction</div>
        </div>
      </div>
    </div>
    <div class="ao-hero-visual">
      <div class="ao-hero-graphic">
        <div class="ao-orbit"><div class="ao-orbit-dot"></div></div>
        <div class="ao-lens-icon">🔬</div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     SERVICES
══════════════════════════════════ -->
<section class="ao-section ao-services" id="services">
  <div class="ao-container">
    <div class="ao-center">
      <span class="ao-label">What I Offer</span>
      <h2 class="ao-title">Optical Engineering Services</h2>
      <p class="ao-subtitle">
        End-to-end optical consulting — from early-stage feasibility to full system characterization and production support.
      </p>
    </div>
    <div class="ao-services-grid">

      <div class="ao-service-card">
        <div class="ao-service-icon">🔭</div>
        <h3 class="ao-service-title">Optical Design Consulting</h3>
        <p class="ao-service-desc">
          System-level optical design and analysis for imaging, illumination, and sensing applications. From concept definition to final tolerancing.
        </p>
      </div>

      <div class="ao-service-card">
        <div class="ao-service-icon">🔍</div>
        <h3 class="ao-service-title">Lens Design</h3>
        <p class="ao-service-desc">
          Custom lens design optimized for your performance requirements — MTF, distortion, aberration control, and manufacturability using Zemax OpticStudio.
        </p>
      </div>

      <div class="ao-service-card">
        <div class="ao-service-icon">💡</div>
        <h3 class="ao-service-title">Stray Light Analysis</h3>
        <p class="ao-service-desc">
          In-depth stray light and ghost analysis using non-sequential ray tracing. Identify and eliminate parasitic light paths before they reach your detector.
        </p>
      </div>

      <div class="ao-service-card">
        <div class="ao-service-icon">📦</div>
        <h3 class="ao-service-title">Lens Sourcing</h3>
        <p class="ao-service-desc">
          Identify, evaluate, and source off-the-shelf or custom optics from qualified manufacturers worldwide. Specification writing, vendor communication, and QC support.
        </p>
      </div>

      <div class="ao-service-card">
        <div class="ao-service-icon">📐</div>
        <h3 class="ao-service-title">Optics Characterization</h3>
        <p class="ao-service-desc">
          Custom measurement and characterization of optical components and assemblies — wavefront error, MTF, transmission, surface quality, and more.
        </p>
      </div>

      <div class="ao-service-card">
        <div class="ao-service-icon">📋</div>
        <h3 class="ao-service-title">Optical System Review</h3>
        <p class="ao-service-desc">
          Independent technical review of existing optical designs, specifications, or vendor proposals. Get an expert second opinion before committing to production.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     ABOUT / EXPERTISE
══════════════════════════════════ -->
<section class="ao-section ao-about" id="about">
  <div class="ao-container">
    <div class="ao-about-inner">
      <div class="ao-about-visual">
        <div class="ao-about-visual-title">Azora Optical Solutions Inc.</div>
        <div class="ao-about-visual-sub">Where Optical Design Meets Practical Innovation</div>
      </div>
      <div class="ao-about-content">
        <span class="ao-label">Expertise</span>
        <h2 class="ao-title">Deep Optical Engineering Knowledge</h2>
        <p class="ao-subtitle">
          Azora Optics brings hands-on optical engineering expertise to clients across defense, medical, industrial, and consumer markets. Every engagement is led by an experienced optical engineer — no junior consultants, no outsourcing.
        </p>
        <ul class="ao-expertise-list">
          <li>
            <span class="ao-check">✓</span>
            Imaging and illumination system design for visible, NIR, and SWIR bands
          </li>
          <li>
            <span class="ao-check">✓</span>
            Zemax OpticStudio (sequential & non-sequential) expert user
          </li>
          <li>
            <span class="ao-check">✓</span>
            Tolerance analysis and optical alignment procedure development
          </li>
          <li>
            <span class="ao-check">✓</span>
            Experience with medical device, defense, and industrial optics standards
          </li>
          <li>
            <span class="ao-check">✓</span>
            End-to-end project support from feasibility to production handoff
          </li>
          <li>
            <span class="ao-check">✓</span>
            Strong vendor network across North America, Europe, and Asia
          </li>
        </ul>
        <div style="margin-top: 36px;">
          <a href="<?php echo home_url('/about'); ?>" class="ao-btn ao-btn-outline-dark">
            Learn More About Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     HOW IT WORKS
══════════════════════════════════ -->
<section class="ao-section ao-process" id="process">
  <div class="ao-container">
    <div class="ao-center">
      <span class="ao-label">How It Works</span>
      <h2 class="ao-title">Simple, Structured Engagement</h2>
      <p class="ao-subtitle">
        From your first message to project delivery — a clear, transparent process every step of the way.
      </p>
    </div>
    <div class="ao-process-steps">
      <div class="ao-step">
        <div class="ao-step-num">1</div>
        <h3 class="ao-step-title">Initial Consultation</h3>
        <p class="ao-step-desc">Book a free 30-minute call to discuss your project scope, requirements, and timeline.</p>
      </div>
      <div class="ao-step">
        <div class="ao-step-num">2</div>
        <h3 class="ao-step-title">Proposal & Scope</h3>
        <p class="ao-step-desc">Receive a detailed proposal with deliverables, timeline, and fixed pricing — no surprises.</p>
      </div>
      <div class="ao-step">
        <div class="ao-step-num">3</div>
        <h3 class="ao-step-title">Design & Analysis</h3>
        <p class="ao-step-desc">Engineering work begins with regular check-ins and milestone reviews to keep you informed.</p>
      </div>
      <div class="ao-step">
        <div class="ao-step-num">4</div>
        <h3 class="ao-step-title">Delivery & Support</h3>
        <p class="ao-step-desc">Receive complete documentation, design files, and post-delivery support as needed.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     TOOLS / SOFTWARE
══════════════════════════════════ -->
<section class="ao-section ao-tools" id="tools">
  <div class="ao-container ao-center">
    <span class="ao-label" style="color:#7EB8FF;">Tools & Software</span>
    <h2 class="ao-title">Industry-Standard Optical Engineering Tools</h2>
    <p class="ao-subtitle" style="margin:0 auto;">
      Work is performed using the same professional tools used by leading optical engineering teams worldwide.
    </p>
    <div class="ao-tools-grid">
      <span class="ao-tool-pill">Zemax OpticStudio</span>
      <span class="ao-tool-pill">CODE V</span>
      <span class="ao-tool-pill">LightTools</span>
      <span class="ao-tool-pill">FRED</span>
      <span class="ao-tool-pill">TracePro</span>
      <span class="ao-tool-pill">SolidWorks</span>
      <span class="ao-tool-pill">MATLAB</span>
      <span class="ao-tool-pill">Python</span>
      <span class="ao-tool-pill">Oslo</span>
      <span class="ao-tool-pill">VirtualLab Fusion</span>
      <span class="ao-tool-pill">ISO 10110</span>
      <span class="ao-tool-pill">GD&T</span>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     CTA BANNER
══════════════════════════════════ -->
<section class="ao-cta">
  <div class="ao-container">
    <h2 class="ao-cta-title">Ready to Start Your Optical Project?</h2>
    <p class="ao-cta-sub">Book a free 30-minute consultation — no commitment required.</p>
    <div class="ao-cta-actions">
      <a href="<?php echo home_url('/booking'); ?>" class="ao-btn ao-btn-white">
        Book Free Consultation
      </a>
      <a href="<?php echo home_url('/contact'); ?>" class="ao-btn ao-btn-outline">
        Send an Inquiry
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     FOOTER
══════════════════════════════════ -->
<footer class="ao-footer">
  <div class="ao-container">
    <div class="ao-footer-grid">
      <div>
        <div class="ao-footer-brand-name">
          <div class="ao-nav-logo-icon" style="width:32px;height:32px;font-size:14px;">A</div>
          Azora Optics
        </div>
        <p class="ao-footer-desc">
          Expert optical design and engineering consulting. Where optical design meets practical innovation.
        </p>
      </div>
      <div>
        <div class="ao-footer-heading">Services</div>
        <ul class="ao-footer-links">
          <li><a href="#services">Optical Design</a></li>
          <li><a href="#services">Lens Design</a></li>
          <li><a href="#services">Stray Light Analysis</a></li>
          <li><a href="#services">Lens Sourcing</a></li>
          <li><a href="#services">Characterization</a></li>
        </ul>
      </div>
      <div>
        <div class="ao-footer-heading">Company</div>
        <ul class="ao-footer-links">
          <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
          <li><a href="<?php echo home_url('/booking'); ?>">Book Consultation</a></li>
        </ul>
      </div>
      <div>
        <div class="ao-footer-heading">Contact</div>
        <ul class="ao-footer-links">
          <li><a href="mailto:info@azoraoptics.com">info@azoraoptics.com</a></li>
          <li><a href="<?php echo home_url('/booking'); ?>">Schedule a Call</a></li>
        </ul>
      </div>
    </div>
    <div class="ao-footer-bottom">
      <div class="ao-footer-copy">
        &copy; <?php echo date('Y'); ?> Azora Optical Solutions Inc. All rights reserved.
      </div>
      <div class="ao-footer-copy">
        <a href="<?php echo home_url('/privacy-policy'); ?>" style="color:rgba(255,255,255,0.3);margin-right:16px;">Privacy Policy</a>
        <a href="<?php echo home_url('/terms'); ?>" style="color:rgba(255,255,255,0.3);">Terms</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
