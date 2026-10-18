@extends('layouts.app')

@section('title', 'Turnkey Cost & Timeline Estimator | Chaudhary Associates')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 4rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative;">
    <div class="container">
        <span class="eyebrow">Financial Transparency</span>
        <h1 class="section-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem;">Turnkey Cost Estimator</h1>
        <p class="section-subtitle" style="margin-bottom: 0;">
            Calculate instant, realistic budgetary projections and project delivery schedules tailored to your plot or apartment footprint.
        </p>
    </div>
</section>

<!-- Calculator -->
<section class="calculator-section" style="padding-top: 5rem;">
    <div class="container">
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

                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <button class="btn btn-primary" data-open-consultation style="width: 100%;">
                        <span>Request Detailed BOQ & Schedule Visit</span>
                    </button>
                    <a href="https://wa.me/919876543210?text=Hi%20Chaudhary%20Associates,%20I%20used%20your%20online%20estimator%20and%20would%20like%20a%20detailed%20BOQ." target="_blank" rel="noopener" class="btn btn-outline" style="width: 100%;">
                        <span>Share on WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
