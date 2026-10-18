<!-- Consultation Booking Modal -->
<div class="modal-overlay" id="consultationModal" role="dialog" aria-modal="true" aria-labelledby="consultModalTitle">
    <div class="modal-box">
        <button class="modal-close" aria-label="Close dialog">&times;</button>
        
        <span class="eyebrow">Studio Consultation</span>
        <h3 id="consultModalTitle" class="section-title" style="font-size: 2rem; margin-bottom: 0.75rem;">Discuss Your Vision</h3>
        <p style="color: var(--color-text-secondary); margin-bottom: 2rem; font-size: 0.95rem;">
            Connect directly with Principal Architects Sumaira & Anji Siddiqui. We review site conditions, architectural feasibility, and bespoke material palettes.
        </p>

        <form id="consultationForm">
            <div class="form-group">
                <label class="form-label" for="clientName">Full Name *</label>
                <input type="text" id="clientName" name="name" class="form-control" placeholder="e.g. Vikram Malhotra" required>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label" for="clientPhone">Phone / WhatsApp *</label>
                    <input type="tel" id="clientPhone" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="clientEmail">Email Address *</label>
                    <input type="email" id="clientEmail" name="email" class="form-control" placeholder="vikram@domain.com" required>
                </div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label" for="projectType">Project Typology *</label>
                    <select id="projectType" name="project_type" class="form-control">
                        <option value="residential_villa">Luxury Residential Villa</option>
                        <option value="penthouse_interior">Penthouse / Apartment Interior</option>
                        <option value="commercial_studio">Commercial Studio / Office</option>
                        <option value="turnkey_design_build" selected>Turnkey Design & Build (Complete)</option>
                        <option value="renovation_expansion">Luxury Renovation & Expansion</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="approxArea">Built-up Area (Sq.Ft)</label>
                    <input type="text" id="approxArea" name="area" class="form-control" placeholder="e.g. 3,500 sq.ft">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="projectLocation">Location & Site Details</label>
                <input type="text" id="projectLocation" name="location" class="form-control" placeholder="e.g. DLF Phase 5, Gurugram / Greater Kailash, Delhi">
            </div>

            <div class="form-group">
                <label class="form-label" for="projectNotes">Design Preferences & Vision</label>
                <textarea id="projectNotes" name="notes" class="form-control" placeholder="Tell us about your spatial aspirations, timeline, or preferred interior aesthetics..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                <span>Schedule Studio Consultation</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </button>
        </form>
    </div>
</div>
