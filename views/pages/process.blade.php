@extends('layouts.app')

@section('title', 'Methodology & Process | Design • Build • Deliver | Chaudhary Associates')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 4rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative;">
    <div class="container">
        <span class="eyebrow">The Studio Methodology</span>
        <h1 class="section-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem;">Design &bull; Build &bull; Deliver</h1>
        <p class="section-subtitle" style="margin-bottom: 0;">
            A rigorous, end-to-end framework translating spatial dreams into enduring built legacies with zero contractor fragmentation.
        </p>
    </div>
</section>

<!-- The Three Pillars Breakdown -->
<section class="pillars-section" style="padding-top: 5rem;">
    <div class="container">
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
</section>

<!-- Interactive Blueprint Comparison -->
<section class="comparison-section">
    <div class="container">
        <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem;">
            <span class="eyebrow" style="justify-content: center;">Technical Precision</span>
            <h2 class="section-title">Blueprint to Built Reality</h2>
            <p style="color: var(--color-text-secondary); font-size: 1.05rem;">
                Experience the translation of precision schematic drafting into tactile, illuminated architectural spaces.
            </p>
        </div>

        <div class="comparison-wrapper">
            <div class="comparison-before"></div>
            <span class="comparison-label before">Architectural Drafting</span>

            <div class="comparison-after"></div>
            <span class="comparison-label after">Completed Turnkey Space</span>

            <div class="comparison-slider-handle">
                <div class="handle-circle">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-left: -8px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
