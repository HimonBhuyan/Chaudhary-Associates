@extends('layouts.app')

@section('title', 'Contact & Studio Atelier | Chaudhary Associates')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 4rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative;">
    <div class="container">
        <span class="eyebrow">Studio Atelier & Coordinates</span>
        <h1 class="section-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem;">Let's Connect</h1>
        <p class="section-subtitle" style="margin-bottom: 0;">
            Schedule an in-person studio consultation or book an on-site feasibility evaluation with our principal architects.
        </p>
    </div>
</section>

<!-- Contact Details & Form -->
<section style="padding: 6rem 0;">
    <div class="container">
        <div class="contact-page-grid">
            <!-- Studio Information -->
            <div>
                <span class="eyebrow">Studio Coordinates</span>
                <h2 class="section-title" style="font-size: 2.2rem; margin-bottom: 1.5rem;">Chaudhary Associates</h2>

                <div style="display: flex; flex-direction: column; gap: 2rem; margin-bottom: 3rem;">
                    <div>
                        <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold); margin-bottom: 0.4rem;">Studio Locations</h4>
                        <p style="color: var(--color-text-secondary); line-height: 1.6;">
                            Design Atelier: Delhi NCR &bull; Gurugram &bull; Noida &bull; Pan-India Projects
                        </p>
                    </div>

                    <div>
                        <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold); margin-bottom: 0.4rem;">Direct Contact</h4>
                        <p style="color: var(--color-text-secondary); line-height: 1.6;">
                            Phone: <a href="tel:+919876543210" style="color: var(--color-gold); font-weight: 600;">+91 98765 43210</a><br>
                            WhatsApp: <a href="https://wa.me/919876543210" target="_blank" rel="noopener" style="color: var(--color-gold); font-weight: 600;">+91 98765 43210</a><br>
                            Email: <a href="mailto:design@chaudharyassociates.com">design@chaudharyassociates.com</a>
                        </p>
                    </div>

                    <div>
                        <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold); margin-bottom: 0.4rem;">Official Instagram</h4>
                        <a href="https://www.instagram.com/designbychaudharyassociates_/" target="_blank" rel="noopener" class="btn btn-outline btn-sm">
                            <span>@designbychaudharyassociates_</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                    </div>

                    <div>
                        <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold); margin-bottom: 0.4rem;">Principals & Partners</h4>
                        <p style="color: var(--color-text-secondary);">
                            Sumaira (Principal Architect) &bull; Anji Siddiqui (Partner & Build Director)
                        </p>
                    </div>
                </div>

                <!-- Studio Image Preview -->
                <div style="border-radius: var(--radius-md); overflow: hidden; height: 260px; border: 1px solid var(--color-border);">
                    <img src="assets/img/posts/deliver.png" alt="Chaudhary Associates Studio" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>

            <!-- In-Page Consultation Form -->
            <div class="contact-form-card">
                <span class="eyebrow">Project Inquiry</span>
                <h3 class="section-title" style="font-size: 2rem; margin-bottom: 0.75rem;">Discuss Your Vision</h3>
                <p style="color: var(--color-text-secondary); margin-bottom: 2rem;">
                    Please share a few preliminary details about your land, property, or interior space.
                </p>

                <form id="consultationForm">
                    <div class="form-group">
                        <label class="form-label" for="contactName">Full Name *</label>
                        <input type="text" id="contactName" name="name" class="form-control" placeholder="e.g. Vikram Malhotra" required>
                    </div>

                    <div class="form-row-2col">
                        <div class="form-group">
                            <label class="form-label" for="contactPhone">Phone / WhatsApp *</label>
                            <input type="tel" id="contactPhone" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contactEmail">Email Address *</label>
                            <input type="email" id="contactEmail" name="email" class="form-control" placeholder="vikram@domain.com" required>
                        </div>
                    </div>

                    <div class="form-row-2col">
                        <div class="form-group">
                            <label class="form-label" for="contactType">Project Typology *</label>
                            <select id="contactType" name="project_type" class="form-control">
                                <option value="residential_villa">Luxury Residential Villa</option>
                                <option value="penthouse_interior">Penthouse / Apartment Interior</option>
                                <option value="commercial_studio">Commercial Studio / Office</option>
                                <option value="turnkey_design_build" selected>Turnkey Design & Build (Complete)</option>
                                <option value="renovation_expansion">Luxury Renovation & Expansion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contactArea">Built-up Area (Sq.Ft)</label>
                            <input type="text" id="contactArea" name="area" class="form-control" placeholder="e.g. 3,500 sq.ft">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contactLocation">Location & Site Details</label>
                        <input type="text" id="contactLocation" name="location" class="form-control" placeholder="e.g. DLF Phase 5, Gurugram / Greater Kailash, Delhi">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contactNotes">Design Preferences & Vision</label>
                        <textarea id="contactNotes" name="notes" class="form-control" placeholder="Tell us about your spatial aspirations, timeline, or preferred interior aesthetics..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                        <span>Schedule Studio Consultation</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
