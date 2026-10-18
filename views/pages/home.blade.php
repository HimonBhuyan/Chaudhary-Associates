@extends('layouts.app')

@section('title', 'Chaudhary Associates | Architects • Interior Designers • Design & Build')

@section('content')

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<!-- ==========================================================================
     HERO SECTION — CINEMATIC FULL-BLEED ARCHITECTURAL MASTHEAD
     ========================================================================== -->
<section id="home" class="hero-section">
    <!-- Cinematic Full-Bleed Carousel (4 Premier Architectural Works) -->
    <div class="hero-carousel" id="heroCarousel">
        <div class="hero-slide active" data-index="0" data-project="The Palm Sanctuary Villa" data-meta="Gurugram &bull; 6,200 sq.ft &bull; Cantilevered Architecture & Pool">
            <img src="assets/img/curated/hero_villa.jpg" alt="The Palm Sanctuary Villa - Chaudhary Associates">
        </div>
        <div class="hero-slide" data-index="1" data-project="Alabaster Sky Penthouse" data-meta="DLF Phase 5 &bull; 4,800 sq.ft &bull; Minimalist Architectural Interior">
            <img src="assets/img/curated/hero_minimal_interior.jpg" alt="Alabaster Sky Penthouse - Chaudhary Associates">
        </div>
        <div class="hero-slide" data-index="2" data-project="Pavilion Residence & Facade" data-meta="South Delhi &bull; 5,800 sq.ft &bull; Monolithic Travertine & Louvers">
            <img src="assets/img/curated/project_facade.jpg" alt="Pavilion Residence & Facade - Chaudhary Associates">
        </div>
        <div class="hero-slide" data-index="3" data-project="The Azure Velvet Living Lounge" data-meta="Signature 'A room to unwind' &bull; Parisian Mouldings & Millwork">
            <img src="assets/img/curated/project_living_teal.jpg" alt="The Azure Velvet Living Lounge - Chaudhary Associates">
        </div>
    </div>

    <!-- Soft Architectural Vignette: Leaves Center Crystal Clear -->
    <div class="hero-overlay-vignette"></div>

    <!-- Drafting Grid Markings / Architectural HUD Elements -->
    <div class="hero-drafting-hud">
        <div class="hud-coords">
            <span>COORD: 28&deg;36'N 77&deg;12'E</span>
            <span class="hud-sep">/</span>
            <span>SCALE 1:100</span>
            <span class="hud-sep">/</span>
            <span>DELHI NCR & PAN-INDIA</span>
        </div>
        <div class="hud-status">
            <span class="hud-pulse-dot"></span>
            <span>ATELIER ACTIVE &bull; ACCEPTING 2026/27 COMMISSIONS</span>
        </div>
    </div>

    <!-- Bottom Stage: Anchored at the bottom left & right -->
    <div class="container hero-bottom-stage">
        <!-- Left Side: Editorial Masthead -->
        <div class="hero-masthead">
            <div class="hero-kicker-strip">
                <span>CHAUDHARY ASSOCIATES</span>
                <span class="sep">&bull;</span>
                <span>EST. 2018</span>
                <span class="sep">&bull;</span>
                <a href="https://www.instagram.com/designbychaudharyassociates_/" target="_blank" rel="noopener" class="hero-insta-kicker" title="Visit our Instagram Atelier">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span>@designbychaudharyassociates_</span>
                </a>
            </div>

            <h1 class="hero-masthead-title">
                Designing Spaces.<br>
                <span class="hero-serif-italic">Delivering Legacies.</span>
            </h1>

            <p class="hero-masthead-sub">
                <span>Architects</span>
                <span class="dot">&bull;</span>
                <span>Interior Designers</span>
                <span class="dot">&bull;</span>
                <span>Planners</span>
                <span class="dot">&bull;</span>
                <span class="text-gold">Turnkey Design & Build</span>
            </p>

            <div class="hero-actions">
                <a href="#portfolio" class="btn btn-primary">
                    <span>Explore Portfolio</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="#calculator" class="btn btn-outline">
                    <span>Cost Estimator</span>
                </a>
                <a href="#consultation" class="btn btn-outline" data-open-consultation>
                    <span>Book Site Visit</span>
                </a>
            </div>
        </div>

        <!-- Right Side: Interactive Project HUD -->
        <div class="hero-project-hud">
            <div class="hud-counter">
                <span>FEATURED COMMISSION</span>
                <span id="hudIndex">01 / 04</span>
            </div>
            <h3 class="hud-project-title" id="hudTitle">The Palm Sanctuary Villa</h3>
            <p class="hud-project-meta" id="hudMeta">Gurugram &bull; 6,200 sq.ft &bull; Cantilevered Architecture & Pool</p>

            <div class="hud-controls">
                <div class="hud-progress-track">
                    <div class="hud-progress-bar" id="hudProgressBar"></div>
                </div>
                <div class="hud-nav-buttons">
                    <button class="hud-arrow-btn" id="heroPrevBtn" aria-label="Previous Project">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button class="hud-arrow-btn" id="heroNextBtn" aria-label="Next Project">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     INSTAGRAM STORY HIGHLIGHTS TRACK (DIRECT FROM @designbychaudharyassociates_)
     Lively, interactive, engaging
     ========================================================================== -->
<section class="stories-strip-section">
    <div class="container">
        <div class="stories-header-strip">
            <div class="stories-live-tag">
                <span class="live-dot"></span>
                <span>INSTAGRAM STORIES &amp; HIGHLIGHTS</span>
            </div>
            <a href="https://www.instagram.com/designbychaudharyassociates_/" target="_blank" rel="noopener" class="stories-profile-link">
                <span>@designbychaudharyassociates_</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            </a>
        </div>

        <div class="stories-track">
            <!-- Story 1: 1M Views -->
            <button class="story-circle-item" data-story-id="1m-views" data-story-title="1M+ Views Series" data-story-tag="Viral Architectural Walkthroughs" data-story-img="assets/img/curated/hero_villa.jpg" data-story-caption="Over 1,000,000 architectural lovers inspired. Highlighting cantilevered residential villas and twilight illumination designed & built by Chaudhary Associates.">
                <div class="story-ring">
                    <div class="story-avatar-thumb">
                        <img src="assets/img/curated/hero_villa.jpg" alt="1M Views Highlight">
                    </div>
                </div>
                <span class="story-label">1M Views 🎬</span>
            </button>

            <!-- Story 2: Details -->
            <button class="story-circle-item" data-story-id="details" data-story-title="Details & Joinery" data-story-tag="Millimeter Precision" data-story-img="assets/img/posts/design_notes.png" data-story-caption="God is in the details. Exploring custom fluted marble claddings, precision teak shadowlines, and architectural brass reveals executed on site.">
                <div class="story-ring">
                    <div class="story-avatar-thumb">
                        <img src="assets/img/posts/design_notes.png" alt="Details Highlight">
                    </div>
                </div>
                <span class="story-label">Details 📐</span>
            </button>

            <!-- Story 3: People -->
            <button class="story-circle-item" data-story-id="people" data-story-title="The Atelier Team" data-story-tag="Partners & Craftsmen" data-story-img="assets/img/curated/partner_sumaira.jpg" data-story-caption="Meet partners Sumaira & Anji Siddiqui alongside our dedicated structural engineers, site supervisors, and master artisans who craft every square foot.">
                <div class="story-ring">
                    <div class="story-avatar-thumb">
                        <img src="assets/img/curated/partner_sumaira.jpg" alt="People Highlight">
                    </div>
                </div>
                <span class="story-label">People 👷</span>
            </button>

            <!-- Story 4: Sites -->
            <button class="story-circle-item" data-story-id="sites" data-story-title="Active Site Visits" data-story-tag="Turnkey Execution" data-story-img="assets/img/posts/site_inspection.png" data-story-caption="Zero tolerance for structural compromise. Regular on-site inspection protocols, RCC curing quality checks, and client walkthroughs.">
                <div class="story-ring">
                    <div class="story-avatar-thumb">
                        <img src="assets/img/posts/site_inspection.png" alt="Sites Highlight">
                    </div>
                </div>
                <span class="story-label">Sites 🏗️</span>
            </button>

            <!-- Story 5: Living -->
            <button class="story-circle-item" data-story-id="living" data-story-title="Signature Living" data-story-tag="A Room to Unwind" data-story-img="assets/img/posts/room_to_unwind.png" data-story-caption="'A room to unwind.' Transforming blank living areas into deeply tranquil, tactile sanctuaries tailored to individual client lifestyles.">
                <div class="story-ring">
                    <div class="story-avatar-thumb">
                        <img src="assets/img/posts/room_to_unwind.png" alt="Living Highlight">
                    </div>
                </div>
                <span class="story-label">Living 🛋️</span>
            </button>

            <!-- Story 6: Within Walls -->
            <button class="story-circle-item" data-story-id="within-walls" data-story-title="Within Walls Palettes" data-story-tag="Sensory Palette" data-story-img="assets/img/posts/within_walls.png" data-story-caption="Warm Alabaster, Deep Peacock Teal, Aged Brass, and Tactile Boucl&eacute;. Our signature design language crafted for timeless emotional resonance.">
                <div class="story-ring">
                    <div class="story-avatar-thumb">
                        <img src="assets/img/posts/within_walls.png" alt="Within Walls Highlight">
                    </div>
                </div>
                <span class="story-label">Within Walls 🎨</span>
            </button>
        </div>
    </div>
</section>

<!-- ==========================================================================
     METRICS STRIP (SLEEK ARCHITECTURAL TICKER)
     ========================================================================== -->
<section class="atelier-metrics-ticker">
    <div class="container">
        <div class="metrics-grid">
            <div class="metric-block">
                <span class="metric-val">260+</span>
                <span class="metric-caption">Bespoke Projects Completed</span>
            </div>
            <div class="metric-block">
                <span class="metric-val">100%</span>
                <span class="metric-caption">On-Time Turnkey Delivery</span>
            </div>
            <div class="metric-block">
                <span class="metric-val">6,190+</span>
                <span class="metric-caption">Instagram Design Community</span>
            </div>
            <div class="metric-block">
                <span class="metric-val">1M+</span>
                <span class="metric-caption">Video Impressions Worldwide</span>
            </div>
        </div>
    </div>
</section>


<!-- ==========================================================================
     CORE PILLARS (DESIGN • BUILD • DELIVER)
     Matches the 3 pinned posts from client's Instagram
     ========================================================================== -->
<section id="pillars" class="pillars-section">
    <div class="container">
        <span class="eyebrow">Our Guiding Philosophy</span>
        <h2 class="section-title">Design &bull; Build &bull; Deliver</h2>
        <p class="section-subtitle">
            A cohesive three-stage methodology ensuring visionary concepts translate into structurally enduring, flawlessly completed architectural realities.
        </p>

        <div class="pillars-grid">
            <!-- Pillar 1: DESIGN -->
            <div class="pillar-card">
                <div class="pillar-media">
                    <img src="assets/img/posts/design.png" alt="Design by Chaudhary Associates">
                    <div class="pillar-badge">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <span>Pillar 01 &bull; Pinned</span>
                    </div>
                </div>
                <div class="pillar-body">
                    <span class="pillar-step">Stage 01</span>
                    <h3 class="pillar-title">Design</h3>
                    <p class="pillar-quote">"Design is where ideas take shape."</p>
                    <button type="button" class="pillar-toggle-btn mobile-pillar-toggle" aria-expanded="false">
                        <span class="toggle-text">Explore Stage Details</span>
                        <span class="toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="pillar-collapsible-content">
                        <p class="pillar-desc">
                            Our expert architects and engineers blend boundless creativity with pragmatic functionality. We tailor each blueprint to your unique lifestyle while respecting site orientation, solar paths, and sustainability.
                        </p>
                        <ul class="pillar-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Architectural Concept Sketches & Master Planning</span>
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>High-Resolution 3D Photorealistic Visualizations</span>
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Detailed Working & Structural Engineering Drawings</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pillar 2: BUILD -->
            <div class="pillar-card">
                <div class="pillar-media">
                    <img src="assets/img/posts/build.png" alt="Build with Chaudhary Associates">
                    <div class="pillar-badge">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <span>Pillar 02 &bull; Pinned</span>
                    </div>
                </div>
                <div class="pillar-body">
                    <span class="pillar-step">Stage 02</span>
                    <h3 class="pillar-title">Build</h3>
                    <p class="pillar-quote">"Where the magic happens."</p>
                    <button type="button" class="pillar-toggle-btn mobile-pillar-toggle" aria-expanded="false">
                        <span class="toggle-text">Explore Stage Details</span>
                        <span class="toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="pillar-collapsible-content">
                        <p class="pillar-desc">
                            Bringing designs to life with unmatched precision and craftsmanship. We maintain the highest benchmarks of structural safety, sourcing premium materials and managing on-site contractors with military discipline.
                        </p>
                        <ul class="pillar-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Flawless Civil Execution & Structural Integrity</span>
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Rigorous Multi-Tier Quality Assurance Audits</span>
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Seamless Project Management On-Time & Budget</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pillar 3: DELIVER -->
            <div class="pillar-card">
                <div class="pillar-media">
                    <img src="assets/img/posts/deliver.png" alt="Deliver with Chaudhary Associates">
                    <div class="pillar-badge">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <span>Pillar 03 &bull; Pinned</span>
                    </div>
                </div>
                <div class="pillar-body">
                    <span class="pillar-step">Stage 03</span>
                    <h3 class="pillar-title">Deliver</h3>
                    <p class="pillar-quote">"We make it real."</p>
                    <button type="button" class="pillar-toggle-btn mobile-pillar-toggle" aria-expanded="false">
                        <span class="toggle-text">Explore Stage Details</span>
                        <span class="toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="pillar-collapsible-content">
                        <p class="pillar-desc">
                            Our commitment doesn't stop at construction—it extends to handing over a flawless, ready-to-inhabit sanctuary. From snag-free inspections to smart home commissioning, every detail is verified for lasting perfection.
                        </p>
                        <ul class="pillar-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Comprehensive Snag-Free Final Client Inspection</span>
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Turnkey Key Handover Ready for Immediate Living</span>
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Post-Handover Warranty & Extended Care Support</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     INTERACTIVE BLUEPRINT TO REALITY SLIDER
     ========================================================================== -->
<section id="blueprint-slider" class="comparison-section">
    <div class="container">
        <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem;">
            <span class="eyebrow" style="justify-content: center;">From Line to Life</span>
            <h2 class="section-title">Blueprint to Turnkey Reality</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem;">
                Drag the interactive slider to experience how Chaudhary Associates' precise architectural schematics seamlessly translate into luxury built environments.
            </p>
        </div>

        <div class="comparison-wrapper">
            <!-- Before: Technical Blueprint -->
            <div class="comparison-before"></div>
            <span class="comparison-label before">Architectural Drafting</span>

            <!-- After: Built Reality -->
            <div class="comparison-after"></div>
            <span class="comparison-label after">Completed Turnkey Space</span>

            <!-- Drag Handle -->
            <div class="comparison-slider-handle">
                <div class="handle-circle">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-left: -8px;">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     FROM CAD BLUEPRINT TO LIVING REALITY (INTERACTIVE FLOORPLAN HOTSPOTS)
     ========================================================================== -->
<section id="blueprint-hotspots" class="blueprint-hotspots-section">
    <div class="container">
        <div style="text-align: center; max-width: 820px; margin: 0 auto;">
            <span class="eyebrow" style="justify-content: center;">Technical Rigor to Bespoke Sanctum</span>
            <h2 class="section-title">From Blueprint to Living Reality</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem; line-height: 1.7;">
                Explore an authentic Chaudhary Associates technical floor plan. Hover or click the glowing coordinate pins to witness how millimeter drafting calculations materialize into finished spatial poetry.
            </p>
        </div>

        <div class="blueprint-stage-wrapper">
            <!-- Left: Drafting Floor Plan Canvas with Glowing Coordinate Hotspots -->
            <div class="blueprint-canvas-box" id="blueprintCanvasBox">
                <img src="assets/img/curated/project_blueprint.jpg" alt="Chaudhary Associates Architectural Blueprint" class="blueprint-drafting-img">
                <div class="blueprint-drafting-grid-overlay"></div>
                <div class="blueprint-watermark-stamp">
                    <span>CA ATELIER DRAFT // REF: 2025-VILLA-04 // SCALE 1:100</span>
                </div>

                <!-- Hotspot Pin 1: Double-Height Living -->
                <button class="hotspot-pin active" style="top: 54%; left: 48%;" data-id="living" 
                    data-title="Double-Height Living Pavilion"
                    data-zone="Zone 01 &bull; Central Core"
                    data-desc="14-foot glass apertures framed by Parisian mouldings and custom peacock velvet seating. Engineered for cross-ventilation and natural daylighting."
                    data-area="850 sq.ft &bull; Ceiling Height: 14'6&quot;"
                    data-img="assets/img/curated/project_living_teal.jpg"
                    data-project="The Azure Velvet Living Lounge"
                    aria-label="Hotspot: Double-Height Living">
                    <span>01</span>
                </button>

                <!-- Hotspot Pin 2: Cantilevered Pool & Terrace -->
                <button class="hotspot-pin" style="top: 28%; left: 24%;" data-id="pool"
                    data-title="Floating Cantilevered Terrace &amp; Pool"
                    data-zone="Zone 02 &bull; Exterior Sanctuary"
                    data-desc="Reinforced post-tensioned concrete slab floating over a reflective infinity pool. Illuminated with warm twilight step profiles."
                    data-area="1,400 sq.ft &bull; Structural Cantilever: 18ft"
                    data-img="assets/img/curated/hero_villa.jpg"
                    data-project="The Palm Sanctuary Villa"
                    aria-label="Hotspot: Cantilevered Pool">
                    <span>02</span>
                </button>

                <!-- Hotspot Pin 3: Master Suite -->
                <button class="hotspot-pin" style="top: 32%; left: 78%;" data-id="master"
                    data-title="The Midnight Master Suite"
                    data-zone="Zone 03 &bull; Private Quarters"
                    data-desc="Acoustically isolated private enclave featuring tactile Belgian linen, fluted navy headboard, and hidden dressing portals."
                    data-area="1,200 sq.ft &bull; Acoustic STC: 58dB"
                    data-img="assets/img/curated/project_bedroom_navy.jpg"
                    data-project="The Midnight Velvet Master Suite"
                    aria-label="Hotspot: Master Suite">
                    <span>03</span>
                </button>

                <!-- Hotspot Pin 4: Carrara Dining Atelier -->
                <button class="hotspot-pin" style="top: 78%; left: 54%;" data-id="dining"
                    data-title="Carrara Marble Dining Atelier"
                    data-zone="Zone 04 &bull; Formal Entertaining"
                    data-desc="Sculptural Italian Statuario marble dining centerpiece with bespoke champagne brass chandelier and fluted acoustic walnut millwork."
                    data-area="680 sq.ft &bull; Statuario Stone"
                    data-img="assets/img/curated/project_dining_marble.jpg"
                    data-project="Carrara Marble Dining Atelier"
                    aria-label="Hotspot: Dining Atelier">
                    <span>04</span>
                </button>

                <!-- Hotspot Pin 5: Monolithic Stone Facade -->
                <button class="hotspot-pin" style="top: 72%; left: 18%;" data-id="facade"
                    data-title="Monolithic Travertine Facade"
                    data-zone="Zone 05 &bull; Architectural Skin"
                    data-desc="Precision cut honed travertine with integrated architectural privacy louvers and cascading biophilic planter boxes."
                    data-area="Monolithic Civil Engineering &bull; Delivered"
                    data-img="assets/img/curated/project_facade.jpg"
                    data-project="Pavilion Residence & Modern Facade"
                    aria-label="Hotspot: Monolithic Facade">
                    <span>05</span>
                </button>
            </div>

            <!-- Right: Interactive Room Inspector Card -->
            <div class="hotspot-inspector-card" id="hotspotInspectorCard">
                <div class="hotspot-preview-img-wrap">
                    <img id="hotspotPreviewImg" src="assets/img/curated/project_living_teal.jpg" alt="Finished Space Preview">
                </div>
                <div class="hotspot-inspector-body">
                    <div class="hotspot-legend-buttons">
                        <button class="hotspot-legend-btn active" data-target="living">01 Living</button>
                        <button class="hotspot-legend-btn" data-target="pool">02 Pool</button>
                        <button class="hotspot-legend-btn" data-target="master">03 Master</button>
                        <button class="hotspot-legend-btn" data-target="dining">04 Dining</button>
                        <button class="hotspot-legend-btn" data-target="facade">05 Facade</button>
                    </div>

                    <span class="hotspot-zone-badge" id="hotspotZone">Zone 01 &bull; Central Core</span>
                    <h3 class="hotspot-room-title" id="hotspotTitle">Double-Height Living Pavilion</h3>
                    <p class="hotspot-room-desc" id="hotspotDesc">
                        14-foot glass apertures framed by Parisian mouldings and custom peacock velvet seating. Engineered for cross-ventilation and natural daylighting.
                    </p>

                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--color-border); padding-top: 1.25rem;">
                        <span id="hotspotArea" style="font-size: 0.8rem; color: var(--color-gold); font-weight: 500;">
                            850 sq.ft &bull; Ceiling Height: 14'6"
                        </span>
                        <a href="#portfolio" class="btn btn-outline btn-sm" id="hotspotMonographBtn">
                            <span>View Monograph</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     PORTFOLIO SHOWCASE (ARCHITECTURAL MONOGRAPHS)
     ========================================================================== -->
<section id="portfolio" class="projects-section">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2.5rem; flex-wrap: wrap; gap: 1.5rem;">
            <div>
                <span class="eyebrow">Selected Works</span>
                <h2 class="section-title">Curated Project Portfolio</h2>
            </div>
            
            <!-- Category Filter Buttons -->
            <div class="portfolio-filter-bar">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="residential">Residential Villas</button>
                <button class="filter-btn" data-filter="interior">Luxury Interiors</button>
                <button class="filter-btn" data-filter="commercial">Commercial Studios</button>
                <button class="filter-btn" data-filter="turnkey">Turnkey Design & Build</button>
            </div>
        </div>

        <div class="projects-masonry">
            <!-- Project 1: Residential Villa -->
            <div class="project-item" 
                data-id="palm-sanctuary"
                data-category="residential" 
                data-title="The Palm Sanctuary Villa" 
                data-specs="6,200 sq.ft &bull; DLF Phase 5" 
                data-location="DLF Phase 5, Gurugram"
                data-area="6,200 sq.ft"
                data-timeline="10 Months (Turnkey Delivery)"
                data-architects="Sumaira &amp; Anji Siddiqui"
                data-scope="Turnkey Architecture, Structural Engineering &amp; Interior Design"
                data-desc="A striking contemporary residence featuring floating cantilevered concrete volumes, floor-to-ceiling glass pavilions, a central reflecting pool, and serene landscaped courtyards designed for seamless indoor-outdoor tropical living." 
                data-img="assets/img/curated/hero_villa.jpg"
                data-blueprint="assets/img/curated/project_blueprint.jpg"
                data-gallery="assets/img/curated/hero_villa.jpg,assets/img/curated/hero_minimal_interior.jpg,assets/img/curated/project_facade.jpg,assets/img/materials/calacatta_marble.jpg">
                <div class="project-thumbnail">
                    <img src="assets/img/curated/hero_villa.jpg" alt="The Palm Sanctuary Villa">
                    <span class="project-badge-tag">Residential Villa</span>
                </div>
                <div class="project-info">
                    <span class="project-meta">Gurugram &bull; Full Architecture</span>
                    <h3 class="project-name">The Palm Sanctuary Villa</h3>
                    <p class="project-summary">Modern cantilevered concrete residence with ambient twilight illumination, private courtyards, and floor-to-ceiling panoramic glass.</p>
                    <div class="project-footer">
                        <span class="project-specs">6,200 sq.ft &bull; Delivered</span>
                        <div class="project-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2: Interior Living ("A room to unwind") -->
            <div class="project-item" 
                data-id="azure-penthouse"
                data-category="interior" 
                data-title="The Azure Velvet Living Lounge" 
                data-specs="3,400 sq.ft &bull; DLF Phase 5" 
                data-location="DLF Phase 5, Gurugram"
                data-area="3,400 sq.ft"
                data-timeline="5 Months (Interior Turnkey)"
                data-architects="Sumaira (Interior Atelier) &amp; Anji Siddiqui"
                data-scope="Interior Architecture, Custom Millwork &amp; Bespoke Styling"
                data-desc="Directly inspired by our viral 'A room to unwind' design series. Parisian wall moulding wainscoting frames rich peacock blue velvet upholstery, custom fluted walnut joinery, and hand-turned marble centerpieces." 
                data-img="assets/img/curated/project_living_teal.jpg"
                data-blueprint="assets/img/curated/project_blueprint.jpg"
                data-gallery="assets/img/curated/project_living_teal.jpg,assets/img/curated/project_dining_marble.jpg,assets/img/materials/champagne_brass.jpg,assets/img/posts/room_to_unwind.png">
                <div class="project-thumbnail">
                    <img src="assets/img/curated/project_living_teal.jpg" alt="The Azure Velvet Living Lounge">
                    <span class="project-badge-tag">Luxury Interior</span>
                </div>
                <div class="project-info">
                    <span class="project-meta">DLF Phase 5 &bull; Interior Styling</span>
                    <h3 class="project-name">The Azure Velvet Living Lounge</h3>
                    <p class="project-summary">A room to unwind. Deep peacock blue velvet seating paired with tailored French wall mouldings and hand-turned marble centerpieces.</p>
                    <div class="project-footer">
                        <span class="project-specs">3,400 sq.ft &bull; Turnkey</span>
                        <div class="project-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3: Turnkey Facade -->
            <div class="project-item" 
                data-id="pavilion-facade"
                data-category="turnkey" 
                data-title="Pavilion Residence & Modern Facade" 
                data-specs="5,800 sq.ft &bull; South Delhi" 
                data-location="South Delhi"
                data-area="5,800 sq.ft"
                data-timeline="11 Months (Full Civil &amp; Facade)"
                data-architects="Anji Siddiqui (Build Director) &amp; Sumaira"
                data-scope="Complete Civil Construction, Facade Engineering &amp; Turnkey Handover"
                data-desc="A masterclass in turnkey execution. Monolithic stone facade with integrated privacy louvers, automated ambient illumination, and cascading green planters delivered 15 days ahead of schedule." 
                data-img="assets/img/curated/project_facade.jpg"
                data-blueprint="assets/img/curated/project_blueprint.jpg"
                data-gallery="assets/img/curated/project_facade.jpg,assets/img/curated/hero_villa.jpg,assets/img/materials/fluted_teak.jpg,assets/img/curated/project_construction.jpg">
                <div class="project-thumbnail">
                    <img src="assets/img/curated/project_facade.jpg" alt="Pavilion Residence Facade">
                    <span class="project-badge-tag">Turnkey Design & Build</span>
                </div>
                <div class="project-info">
                    <span class="project-meta">South Delhi &bull; Design & Build</span>
                    <h3 class="project-name">Pavilion Residence & Facade</h3>
                    <p class="project-summary">Complete turnkey construction showcasing monolithic facade engineering, precision metal privacy screens, and integrated landscape architecture.</p>
                    <div class="project-footer">
                        <span class="project-specs">5,800 sq.ft &bull; Delivered</span>
                        <div class="project-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4: Interior Bedroom ("Within Walls") -->
            <div class="project-item" 
                data-id="midnight-suite"
                data-category="interior" 
                data-title="The Midnight Velvet Master Suite" 
                data-specs="1,200 sq.ft &bull; Vasant Vihar" 
                data-location="Vasant Vihar, New Delhi"
                data-area="1,200 sq.ft"
                data-timeline="4 Months (Bespoke Suite)"
                data-architects="Sumaira (Principal Architect)"
                data-scope="Master Bedroom Architecture, Lighting Design &amp; Walk-in Wardrobe"
                data-desc="An intimate sanctuary exploring our 'Within Walls' concept. Fluted deep navy velvet headboard, warm alabaster plaster walls, and hand-finished bronze sconces creating an unbroken sense of calm." 
                data-img="assets/img/curated/project_bedroom_navy.jpg"
                data-blueprint="assets/img/curated/project_blueprint.jpg"
                data-gallery="assets/img/curated/project_bedroom_navy.jpg,assets/img/materials/acoustic_boucle.jpg,assets/img/materials/belgian_linen.jpg,assets/img/curated/project_living_teal.jpg">
                <div class="project-thumbnail">
                    <img src="assets/img/curated/project_bedroom_navy.jpg" alt="The Midnight Velvet Master Suite">
                    <span class="project-badge-tag">Interior Design</span>
                </div>
                <div class="project-info">
                    <span class="project-meta">Vasant Vihar &bull; Master Suite</span>
                    <h3 class="project-name">The Midnight Velvet Master Suite</h3>
                    <p class="project-summary">Exploring refined comfort and organic minimalism. Tactile fabrics, recessed ambient cove lighting, and acoustic oak wall paneling.</p>
                    <div class="project-footer">
                        <span class="project-specs">1,200 sq.ft &bull; Completed</span>
                        <div class="project-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 5: Commercial Studio -->
            <div class="project-item" 
                data-id="verdant-studio"
                data-category="commercial" 
                data-title="Verdant Executive Creative Studio" 
                data-specs="4,500 sq.ft &bull; Cyber City" 
                data-location="Cyber City, Gurugram"
                data-area="4,500 sq.ft"
                data-timeline="90 Days (Fast-Track Turnkey)"
                data-architects="Anji Siddiqui &amp; Sumaira"
                data-scope="Corporate Workplace Architecture, Acoustic Engineering &amp; Build"
                data-desc="Contemporary corporate workspace with acoustic felt panels, fluted glass executive cabins, open collaboration hubs, and lush indoor biophilia engineered with circadian lighting systems." 
                data-img="assets/img/curated/project_commercial.jpg"
                data-blueprint="assets/img/curated/project_blueprint.jpg"
                data-gallery="assets/img/curated/project_commercial.jpg,assets/img/curated/project_dining_marble.jpg,assets/img/materials/fluted_teak.jpg,assets/img/curated/hero_minimal_interior.jpg">
                <div class="project-thumbnail">
                    <img src="assets/img/curated/project_commercial.jpg" alt="Verdant Executive Studio">
                    <span class="project-badge-tag">Commercial Space</span>
                </div>
                <div class="project-info">
                    <span class="project-meta">Cyber City &bull; Commercial</span>
                    <h3 class="project-name">Verdant Creative Studio</h3>
                    <p class="project-summary">Ergonomic human-centric office design featuring natural oak conference tables, diffused architectural task lighting, and open layout harmony.</p>
                    <div class="project-footer">
                        <span class="project-specs">4,500 sq.ft &bull; Delivered</span>
                        <div class="project-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 6: Dining Atelier -->
            <div class="project-item" 
                data-id="carrara-atelier"
                data-category="interior" 
                data-title="Carrara Marble Dining Atelier" 
                data-specs="2,800 sq.ft &bull; Noida" 
                data-location="Noida Expressway, UP"
                data-area="2,800 sq.ft"
                data-timeline="4.5 Months (Atelier Millwork)"
                data-architects="Sumaira (Design Atelier)"
                data-scope="Formal Dining Architecture, Custom Wine Vitrine &amp; Lighting"
                data-desc="Sculptural Italian Statuario marble dining table accompanied by bespoke contemporary brass chandelier, curved bouclé chairs, and temperature-controlled wine vitrine." 
                data-img="assets/img/curated/project_dining_marble.jpg"
                data-blueprint="assets/img/curated/project_blueprint.jpg"
                data-gallery="assets/img/curated/project_dining_marble.jpg,assets/img/materials/calacatta_marble.jpg,assets/img/materials/champagne_brass.jpg,assets/img/curated/project_living_teal.jpg">
                <div class="project-thumbnail">
                    <img src="assets/img/curated/project_dining_marble.jpg" alt="Carrara Marble Dining Atelier">
                    <span class="project-badge-tag">Interior Architecture</span>
                </div>
                <div class="project-info">
                    <span class="project-meta">Noida Expressway &bull; Interior</span>
                    <h3 class="project-name">Carrara Marble Dining Atelier</h3>
                    <p class="project-summary">A culinary theater combining dramatic natural stone, bespoke brass joinery, and tailored acoustic mood lighting.</p>
                    <div class="project-footer">
                        <span class="project-specs">2,800 sq.ft &bull; Turnkey</span>
                        <div class="project-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     "WITHIN WALLS" INTERACTIVE ROOM DESIGN & WALL COLOR STUDIO
     ========================================================================== -->
<section id="within-walls" class="palette-section" style="padding: 7rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 860px; margin: 0 auto 2.75rem;">
            <span class="eyebrow" style="justify-content: center;">Instagram @designbychaudharyassociates_ &bull; Signature Series</span>
            <h2 class="section-title">Within Walls Studio</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem; line-height: 1.7;">
                Select a signature architectural room design below, then tap each curated mineral wall color to experience how light, finish, and pigmentation transform the atmosphere in real time:
            </p>

        </div>

        <!-- 1. ROOM & WALL COLOR STUDIO VIEW (PRIMARY) -->
        <div class="wall-color-studio-container" id="wallColorStudioView">
            
            <!-- Step 1: Room Design Selector -->
            <div class="room-selector-wrapper">
                <div class="room-selector-header">
                    <span class="room-selector-badge">Step 1: Choose Room Design</span>
                    <span class="room-selector-sub">Select the space you wish to paint</span>
                </div>
                <div class="room-selector-grid">
                    <!-- Room 1: Bedroom -->
                    <button type="button" class="room-card-btn active" data-room="bedroom">
                        <div class="room-card-thumb">
                            <img src="assets/img/within_walls/bedroom_alabaster.jpg" alt="Master Bedroom Sanctuary">
                            <span class="room-active-indicator">ACTIVE DESIGN</span>
                        </div>
                        <div class="room-card-info">
                            <div class="room-card-title-row">
                                <h4 class="room-card-title">Master Bedroom Sanctuary</h4>
                                <span class="room-type-tag">Bedroom</span>
                            </div>
                            <p class="room-card-meta">Fluted Velvet Headboard &bull; Brass Luminaire &bull; Skyline Glazing</p>
                        </div>
                    </button>

                    <!-- Room 2: Sofa Room -->
                    <button type="button" class="room-card-btn" data-room="sofa">
                        <div class="room-card-thumb">
                            <img src="assets/img/within_walls/sofa_teal.jpg" alt="Azure Parisian Sofa Lounge">
                            <span class="room-active-indicator">ACTIVE DESIGN</span>
                        </div>
                        <div class="room-card-info">
                            <div class="room-card-title-row">
                                <h4 class="room-card-title">Azure Velvet Sofa Lounge</h4>
                                <span class="room-type-tag">Living / Sofa Room</span>
                            </div>
                            <p class="room-card-meta">Boiserie Wall Mouldings &bull; Emerald Sofa &bull; Parquet Wood</p>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Step 2: Wall Color Swatches Selector -->
            <div class="wall-swatches-wrapper">
                <div class="wall-swatches-header">
                    <span class="room-selector-badge">Step 2: Choose Architectural Wall Color</span>
                    <span class="room-selector-sub">Tap any shade to update the walls live</span>
                </div>
                <div class="wall-swatches-bar">
                    <!-- Swatch 1: Parisian Alabaster -->
                    <button type="button" class="wall-swatch-chip active" data-color="alabaster">
                        <div class="swatch-bubble" style="background-color: #F4EFE6; border: 1px solid rgba(0,0,0,0.18);"></div>
                        <div class="swatch-chip-text">
                            <strong class="chip-name">Parisian Alabaster</strong>
                            <span class="chip-spec">Roman Limewash</span>
                        </div>
                        <span class="chip-hex">#F4EFE6</span>
                    </button>

                    <!-- Swatch 2: Obsidian Charcoal -->
                    <button type="button" class="wall-swatch-chip" data-color="charcoal">
                        <div class="swatch-bubble" style="background-color: #21262D;"></div>
                        <div class="swatch-chip-text">
                            <strong class="chip-name">Obsidian Charcoal</strong>
                            <span class="chip-spec">Velveteen Matte</span>
                        </div>
                        <span class="chip-hex">#21262D</span>
                    </button>

                    <!-- Swatch 3: Tuscan Terracotta -->
                    <button type="button" class="wall-swatch-chip" data-color="terracotta">
                        <div class="swatch-bubble" style="background-color: #B85D3B;"></div>
                        <div class="swatch-chip-text">
                            <strong class="chip-name">Tuscan Terracotta</strong>
                            <span class="chip-spec">Hand-Troweled Clay</span>
                        </div>
                        <span class="chip-hex">#B85D3B</span>
                    </button>

                    <!-- Swatch 4: Biophilic Sage -->
                    <button type="button" class="wall-swatch-chip" data-color="sage">
                        <div class="swatch-bubble" style="background-color: #586D5C;"></div>
                        <div class="swatch-chip-text">
                            <strong class="chip-name">Biophilic Sage</strong>
                            <span class="chip-spec">Eucalyptus Wash</span>
                        </div>
                        <span class="chip-hex">#586D5C</span>
                    </button>

                    <!-- Swatch 5: Ocean Teal -->
                    <button type="button" class="wall-swatch-chip" data-color="teal">
                        <div class="swatch-bubble" style="background-color: #1D3D46;"></div>
                        <div class="swatch-chip-text">
                            <strong class="chip-name">Ocean Teal</strong>
                            <span class="chip-spec">Moody Peacock</span>
                        </div>
                        <span class="chip-hex">#1D3D46</span>
                    </button>
                </div>
            </div>

            <!-- Visualizer Stage Frame -->
            <div class="wall-visualizer-stage-frame">
                <div class="wall-visualizer-canvas" id="wallVisualizerCanvas">
                    <!-- Dedicated Visual Stage Viewport -->
                    <div class="wall-visualizer-viewport">
                        <!-- Primary Render Image -->
                        <img id="visPrimaryImg" class="vis-stage-img vis-active" src="assets/img/within_walls/bedroom_alabaster.jpg" alt="Within Walls Color Visualizer">
                        
                        <!-- Floating Room Status Badge (Top-Left) -->
                        <div class="vis-floating-badge vis-badge-left">
                            <span class="vis-badge-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                            </span>
                            <div class="vis-badge-content">
                                <span class="vis-badge-sub">Selected Space</span>
                                <strong id="visActiveRoomLabel">Master Bedroom Sanctuary</strong>
                            </div>
                        </div>

                        <!-- Floating Color Spec Badge (Top-Right) -->
                        <div class="vis-floating-badge vis-badge-right">
                            <span class="vis-color-pip" id="visActiveColorDot" style="background-color: #F4EFE6;"></span>
                            <div class="vis-badge-content">
                                <span class="vis-badge-sub" id="visActiveFinishLabel">Roman Limewash</span>
                                <strong id="visActiveColorName">Parisian Alabaster (#F4EFE6)</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Specs Telemetry Bar -->
                    <div class="vis-stage-telemetry-bar">
                        <div class="telemetry-info-group">
                            <div class="telemetry-desc-block">
                                <span class="telemetry-label">Atmosphere &amp; Light Response</span>
                                <p class="telemetry-desc" id="visColorDesc">
                                    Reflective mineral limewash that maximizes natural daylight and highlights intricate moulding relief.
                                </p>
                            </div>
                            <div class="telemetry-stats-row">
                                <div class="telemetry-stat">
                                    <span class="stat-lbl">Architectural Code</span>
                                    <strong class="stat-val" id="visColorCode">CA-WALL-01</strong>
                                </div>
                                <div class="telemetry-stat">
                                    <span class="stat-lbl">Light Reflectance (LRV)</span>
                                    <strong class="stat-val" id="visColorLRV">78%</strong>
                                </div>
                                <div class="telemetry-stat">
                                    <span class="stat-lbl">Undertone Formula</span>
                                    <strong class="stat-val" id="visColorUndertone">Warm Chalk &amp; Calcite</strong>
                                </div>
                                <div class="telemetry-stat">
                                    <span class="stat-lbl">Recommended Trim Accent</span>
                                    <strong class="stat-val" id="visRoomTrim">Champagne Brass &amp; Bouclé Linen</strong>
                                </div>
                            </div>
                        </div>

                        <div class="telemetry-actions">
                            <button type="button" class="btn btn-primary btn-sm" data-open-consultation id="visConsultBtn">
                                <span>Inquire With This Room Spec</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Curated Series Quote -->
            <div class="within-walls-quote-card">
                <div class="quote-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path></svg>
                </div>
                <div class="quote-body">
                    <p class="quote-text">
                        "A room's wall color is never just a shade—it is an architectural skin that absorbs daylight, cradles sound, and dictates emotional presence."
                    </p>
                    <span class="quote-author">&mdash; From our Instagram <em>@designbychaudharyassociates_</em> Within Walls Collection</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================================================
     TURNKEY COST & ESTIMATOR CALCULATOR
     ========================================================================== -->
<section id="calculator" class="calculator-section">
    <div class="container">
        <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem;">
            <span class="eyebrow" style="justify-content: center;">Transparent Financial Planning</span>
            <h2 class="section-title">Turnkey Cost & Timeline Estimator</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem;">
                Get an instant, reliable budgetary estimate and realistic execution timeline tailored to your project scale and scope.
            </p>
        </div>

        <div class="calculator-card">
            <!-- Controls -->
            <div>
                <!-- Step 1: Project Typology -->
                <div class="calc-step">
                    <div class="calc-step-label">
                        <span>01. Select Project Typology</span>
                    </div>
                    <div class="calc-options-grid">
                        <button class="calc-option-btn calc-type-btn" data-multiplier="0.65">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                            <span>Architecture Only</span>
                        </button>
                        <button class="calc-option-btn calc-type-btn active" data-multiplier="1.0">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span>Luxury Interior</span>
                        </button>
                        <button class="calc-option-btn calc-type-btn" data-multiplier="1.85">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            <span>Turnkey Build</span>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Built-up Area Slider -->
                <div class="calc-step">
                    <div class="calc-step-label">
                        <span>02. Built-up Area (Sq.Ft)</span>
                    </div>
                    <div class="calc-slider-wrapper">
                        <input type="range" id="calcAreaSlider" class="calc-slider" min="600" max="10000" step="100" value="2500">
                        <div class="calc-area-display">
                            <span>Area:</span>
                            <span id="calcAreaDisplay" class="calc-area-value">2,500 sq.ft</span>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Finish Specification Tier -->
                <div class="calc-step" style="margin-bottom: 0;">
                    <div class="calc-step-label">
                        <span>03. Material & Finish Specification</span>
                    </div>
                    <div class="calc-tiers-grid">
                        <button class="calc-option-btn calc-tier-btn active" data-multiplier="1.0" style="padding: 1.25rem;">
                            <span style="font-weight: 600; font-size: 0.95rem;">Signature Luxury</span>
                            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Imported Italian marble, veneer, branded hardware, premium automation.</span>
                        </button>
                        <button class="calc-option-btn calc-tier-btn" data-multiplier="1.45" style="padding: 1.25rem;">
                            <span style="font-weight: 600; font-size: 0.95rem; color: var(--color-gold);">Ultra-Luxury Bespoke</span>
                            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Custom artisan millwork, bookmatched quartz, fully integrated smart estate.</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Instant Calculation Results -->
            <div class="calculator-results">
                <div>
                    <h3 class="result-breakdown-title">Estimated Investment</h3>
                    
                    <div class="result-row">
                        <span>Effective Rate</span>
                        <strong id="calcRatePerSqft" style="color: var(--color-text-primary);">₹2,200 / sq.ft</strong>
                    </div>

                    <div class="result-row">
                        <span>Estimated Timeline</span>
                        <strong id="calcTimeline" style="color: var(--color-text-primary);">6 - 8 Months</strong>
                    </div>

                    <div class="result-row">
                        <span>Site Supervision</span>
                        <span style="color: #4CAF50;">Included (Dedicated PM)</span>
                    </div>

                    <div class="result-row highlight">
                        <span>Approximate Total Range</span>
                    </div>

                    <div id="calcTotalEstimate" class="result-price">
                        ₹55.00 Lakhs
                    </div>
                    <p style="font-size: 0.75rem; color: var(--color-text-muted); margin-bottom: 2rem;">
                        *Estimates include architectural planning, structural design, civil finishing, and turnkey handover. Subject to site verification.
                    </p>
                </div>

                <button class="btn btn-primary" data-open-consultation style="width: 100%;">
                    <span>Request Detailed BOQ & Schedule Visit</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CLIENT TESTIMONIALS & EDITORIAL QUOTES + TRUST ASSURANCES
     ========================================================================== -->
<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem;">
            <span class="eyebrow" style="justify-content: center;">Pedigree &amp; Client Legacies</span>
            <h2 class="section-title">Enduring Partnerships</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem;">
                Crafting exceptional residences requires unreserved trust. Here is what our patrons say about our creative vision and turnkey delivery:
            </p>
        </div>

        <!-- Testimonial Carousel -->
        <div class="testimonial-carousel" id="testimonialSlider">
            <!-- Slide 1: Villa Owner -->
            <div class="testimonial-slide active">
                <div class="testimonial-quote-mark">&ldquo;</div>
                <blockquote class="testimonial-quote-text">
                    Chaudhary Associates turned a complex plot into a light-flooded architectural sanctuary. Sumaira’s spatial choreography and Anji’s construction discipline delivered the villa a week ahead of schedule.
                </blockquote>
                <div class="testimonial-author-box">
                    <strong class="testimonial-author-name">Rajesh &amp; Sunita Mehra</strong>
                    <span class="testimonial-author-project">Commissioned The Palm Sanctuary Villa &bull; DLF Phase 5, Gurugram</span>
                </div>
            </div>

            <!-- Slide 2: Penthouse Client -->
            <div class="testimonial-slide">
                <div class="testimonial-quote-mark">&ldquo;</div>
                <blockquote class="testimonial-quote-text">
                    Commissioning a 5,000 sq.ft penthouse from London was daunting until we partnered with Chaudhary Associates. Their transparent weekly video logs, immaculate millwork, and zero-defect handover gave us total peace of mind.
                </blockquote>
                <div class="testimonial-author-box">
                    <strong class="testimonial-author-name">Dr. Kabir &amp; Dr. Ananya Varma</strong>
                    <span class="testimonial-author-project">Commissioned The Alabaster Sky Penthouse &bull; Golf Course Road</span>
                </div>
            </div>

            <!-- Slide 3: Commercial Client -->
            <div class="testimonial-slide">
                <div class="testimonial-quote-mark">&ldquo;</div>
                <blockquote class="testimonial-quote-text">
                    The turnkey execution was executed with military precision. Their 'Design &bull; Build &bull; Deliver' methodology eliminated every contractor hassle and protected our capital outlay down to the last rupee.
                </blockquote>
                <div class="testimonial-author-box">
                    <strong class="testimonial-author-name">Aman Deep Singhania</strong>
                    <span class="testimonial-author-project">Managing Director &bull; Cyber City Executive Commercial Studio</span>
                </div>
            </div>

            <!-- Slider Dots -->
            <div class="testimonial-dots" id="testimonialDots">
                <button class="testimonial-dot active" data-index="0" aria-label="Quote 1"></button>
                <button class="testimonial-dot" data-index="1" aria-label="Quote 2"></button>
                <button class="testimonial-dot" data-index="2" aria-label="Quote 3"></button>
            </div>
        </div>

        <!-- 3 Pillars of Client Assurance (Trust Badges) -->
        <div class="trust-assurances-strip">
            <div class="trust-grid">
                <!-- Trust 1 -->
                <div class="trust-card">
                    <div class="trust-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h3 class="trust-card-title">100% Turnkey Handover Guarantee</h3>
                    <p class="trust-card-desc">
                        Penalty-backed handover milestone commitments. Single-point accountability from foundation excavation to custom styling.
                    </p>
                </div>

                <!-- Trust 2 -->
                <div class="trust-card">
                    <div class="trust-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    </div>
                    <h3 class="trust-card-title">Military-Grade Civil Audits</h3>
                    <p class="trust-card-desc">
                        A strict 140-point technical checklist covering RCC compressive testing, double waterproofing membranes, and acoustic isolation.
                    </p>
                </div>

                <!-- Trust 3 -->
                <div class="trust-card">
                    <div class="trust-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="6" y1="12" x2="18" y2="12"></line></svg>
                    </div>
                    <h3 class="trust-card-title">Fixed-Price BOQ Protection</h3>
                    <p class="trust-card-desc">
                        Exhaustive itemized Bill of Quantities eliminating unexpected budget escalations, contractor disputes, or hidden costs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     STUDIO FOUNDERS & PARTNERS SPOTLIGHT
     Sumaira & Anji Siddiqui
     ========================================================================== -->
<section id="about" class="studio-founders-section">
    <div class="container">
        <div style="text-align: center; max-width: 720px; margin: 0 auto;">
            <span class="eyebrow" style="justify-content: center;">Meet the Leadership</span>
            <h2 class="section-title">Principal Architects & Partners</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem;">
                Founded on the belief that great architecture harmonizes uncompromising beauty with functional longevity. Led by Sumaira and Anji Siddiqui.
            </p>
        </div>

        <div class="founders-grid">
            <!-- Partner 1: Sumaira -->
            <div class="founder-card">
                <div class="founder-photo">
                    <img src="assets/img/curated/partner_sumaira.jpg" alt="Sumaira - Principal Architect">
                </div>
                <div class="founder-details">
                    <span class="founder-role">Partner &bull; Principal Architect</span>
                    <h3 class="founder-name">Sumaira</h3>
                    <p class="founder-bio">
                        Spearheads architectural concept design, spatial choreography, and master planning. Sumaira brings an innate sensitivity to natural daylight, proportions, and bespoke contemporary detailing.
                    </p>
                    <div class="founder-social">
                        <span>@sumaira0024</span> &bull;
                        <span>Architecture &bull; Spatial Planning</span>
                    </div>
                </div>
            </div>

            <!-- Partner 2: Anji Siddiqui -->
            <div class="founder-card">
                <div class="founder-photo">
                    <img src="assets/img/curated/partner_anji.jpg" alt="Anji Siddiqui - Partner & Build Director">
                </div>
                <div class="founder-details">
                    <span class="founder-role">Partner &bull; Build & Delivery Director</span>
                    <h3 class="founder-name">Anji Siddiqui</h3>
                    <p class="founder-bio">
                        Oversees turnkey execution, structural integrity, material procurement, and strict timeline adherence. Anji ensures that every architectural drawing is translated with uncompromising millimeter precision.
                    </p>
                    <div class="founder-social">
                        <span>@anjisiddiqui</span> &bull;
                        <span>Engineering &bull; Turnkey Execution</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     LIVE INSTAGRAM PROFILE FEED
     Mirrors the client's official Instagram profile: @designbychaudharyassociates_
     ========================================================================== -->
<section id="instagram" class="instagram-section">
    <div class="container">
        <!-- Profile Header Bar -->
        <div class="instagram-profile-header">
            <div class="insta-author">
                <div class="insta-avatar">
                    <img src="assets/img/logo_hd.png" alt="Chaudhary Associates">
                </div>
                <div>
                    <h3 class="insta-handle">designbychaudharyassociates_</h3>
                    <p class="insta-tagline">Architectural Designer &bull; Architects &bull; Interior Designers &bull; Design & Build</p>
                </div>
            </div>

            <div class="insta-stats">
                <div class="insta-stat-item">
                    <strong>261</strong>
                    <span>posts</span>
                </div>
                <div class="insta-stat-item">
                    <strong>6,190</strong>
                    <span>followers</span>
                </div>
                <div class="insta-stat-item">
                    <strong>308</strong>
                    <span>following</span>
                </div>
            </div>

            <div>
                <a href="https://www.instagram.com/designbychaudharyassociates_/" target="_blank" rel="noopener" class="btn btn-outline btn-sm">
                    <span>Follow on Instagram</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 9 Posts Grid (Directly cropped from client's actual posts) -->
        <div class="instagram-feed-grid">
            <!-- Post 1: Design -->
            <div class="insta-card">
                <img src="assets/img/posts/design.png" alt="Design Post">
                <div class="insta-overlay">
                    <p class="insta-post-caption">Design is where ideas take shape. Innovative design, custom solutions, creative vision.</p>
                    <div class="insta-post-meta">
                        <span>Pinned Post</span> &bull; <span>Pillar 01</span>
                    </div>
                </div>
            </div>

            <!-- Post 2: Build -->
            <div class="insta-card">
                <img src="assets/img/posts/build.png" alt="Build Post">
                <div class="insta-overlay">
                    <p class="insta-post-caption">BUILD is where the magic happens—bringing designs to life with unmatched precision.</p>
                    <div class="insta-post-meta">
                        <span>Pinned Post</span> &bull; <span>Pillar 02</span>
                    </div>
                </div>
            </div>

            <!-- Post 3: Deliver -->
            <div class="insta-card">
                <img src="assets/img/posts/deliver.png" alt="Deliver Post">
                <div class="insta-overlay">
                    <p class="insta-post-caption">We make it real. Turnkey delivery, client satisfaction, and lasting architectural value.</p>
                    <div class="insta-post-meta">
                        <span>Pinned Post</span> &bull; <span>Pillar 03</span>
                    </div>
                </div>
            </div>

            <!-- Post 4: Behind the Design -->
            <div class="insta-card">
                <img src="assets/img/posts/behind_the_design.png" alt="Behind the Design">
                <div class="insta-overlay">
                    <p class="insta-post-caption">Behind [the] Design &bull; On-site aperture and natural lighting review with our partners.</p>
                    <div class="insta-post-meta">
                        <span>Reel &bull; 48.2K Views</span>
                    </div>
                </div>
            </div>

            <!-- Post 5: Site Inspection -->
            <div class="insta-card">
                <img src="assets/img/posts/site_inspection.png" alt="Site Inspection">
                <div class="insta-overlay">
                    <p class="insta-post-caption">Active site coordination &bull; Reviewing structural working drawings with the site team.</p>
                    <div class="insta-post-meta">
                        <span>Reel &bull; 32.5K Views</span>
                    </div>
                </div>
            </div>

            <!-- Post 6: A Room to Unwind -->
            <div class="insta-card">
                <img src="assets/img/posts/room_to_unwind.png" alt="A room to unwind">
                <div class="insta-overlay">
                    <p class="insta-post-caption">A room to unwind &bull; Teal velvet accents, French wainscoting mouldings, and bespoke coffee table.</p>
                    <div class="insta-post-meta">
                        <span>Carousel &bull; 1.2K Likes</span>
                    </div>
                </div>
            </div>

            <!-- Post 7: Design Notes -->
            <div class="insta-card">
                <img src="assets/img/posts/design_notes.png" alt="Design Notes of the Project">
                <div class="insta-overlay">
                    <p class="insta-post-caption">DESIGN NOTES OF THE PROJECT &bull; Precision hand-finished Italian marble & teakwood joinery.</p>
                    <div class="insta-post-meta">
                        <span>Post &bull; 890 Likes</span>
                    </div>
                </div>
            </div>

            <!-- Post 8: It's a Feeling -->
            <div class="insta-card">
                <img src="assets/img/posts/its_a_feeling.png" alt="It's a Feeling">
                <div class="insta-overlay">
                    <p class="insta-post-caption">IT'S A FEELING &bull; Warmth, Comfort, Love, Softness, Calmness. Nine words, one home.</p>
                    <div class="insta-post-meta">
                        <span>Reel &bull; 74.9K Views</span>
                    </div>
                </div>
            </div>

            <!-- Post 9: Within Walls -->
            <div class="insta-card">
                <img src="assets/img/posts/within_walls.png" alt="Within Walls">
                <div class="insta-overlay">
                    <p class="insta-post-caption">WITHIN WALLS &bull; Curated interior palettes exploring modern heritage and organic minimalism.</p>
                    <div class="insta-post-meta">
                        <span>Carousel &bull; 2.1K Likes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CALL TO ACTION BANNER
     ========================================================================== -->
<section class="cta-banner-section">
    <div class="container" style="max-width: 820px;">
        <span class="eyebrow" style="justify-content: center;">Start Your Journey</span>
        <h2 class="section-title cta-banner-title">
            Ready to Build Your Architectural Sanctuary?
        </h2>
        <p class="cta-banner-desc">
            Whether you are planning a sprawling private residential villa, a turnkey luxury penthouse, or an avant-garde commercial headquarters, our principals are here to guide you from concept to handover.
        </p>
        <div class="cta-banner-actions">
            <a href="#consultation" class="btn btn-primary" data-open-consultation>
                <span>Book Principal Consultation</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="https://wa.me/919876543210?text=Hi%20Chaudhary%20Associates,%20I%20would%20like%20to%20discuss%20an%20architectural%20project." target="_blank" rel="noopener" class="btn btn-outline cta-banner-whatsapp">
                <span>WhatsApp the Studio</span>
            </a>
        </div>
    </div>
</section>

@endsection
