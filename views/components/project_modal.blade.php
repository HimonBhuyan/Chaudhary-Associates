<!-- ==========================================================================
     ARCHITECTURAL MONOGRAPH MODAL (DEEP PROJECT STORIES)
     ========================================================================== -->
<div class="modal-overlay monograph-modal-overlay" id="projectDetailModal" role="dialog" aria-modal="true" aria-labelledby="modalProjectTitle">
    <div class="modal-box monograph-modal-box">
        <button class="modal-close" aria-label="Close monograph">&times;</button>
        
        <!-- Monograph Header Strip -->
        <div class="monograph-header-strip">
            <div class="monograph-tagline">
                <span class="mono-kicker">CHAUDHARY ASSOCIATES &bull; MONOGRAPH ARCHIVE</span>
                <span class="mono-id" id="modalProjectCat">Residential Villa</span>
            </div>
            
            <!-- View Mode Switcher -->
            <div class="monograph-view-tabs">
                <button class="mono-tab-btn active" id="monoTabGallery" data-tab="gallery">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                    <span>Photography Gallery</span>
                </button>
                <button class="mono-tab-btn" id="monoTabBlueprint" data-tab="blueprint">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line><circle cx="12" cy="12" r="10"></circle></svg>
                    <span>Architectural Blueprint</span>
                </button>
            </div>
        </div>

        <div class="monograph-layout">
            <!-- Left Stage: Visuals Viewport & Thumbnails -->
            <div class="monograph-stage">
                <!-- Gallery View Container -->
                <div class="monograph-media-viewport" id="monoGalleryContainer">
                    <img id="modalProjectImg" src="" alt="Project Photo" class="mono-main-img">
                    <div class="mono-nav-arrows">
                        <button class="mono-arrow-btn" id="monoPrevBtn" aria-label="Previous Photo">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </button>
                        <button class="mono-arrow-btn" id="monoNextBtn" aria-label="Next Photo">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                    </div>
                    <div class="mono-img-badge" id="monoImgBadge">Exterior Perspective &bull; 01 / 04</div>
                </div>

                <!-- Blueprint View Container -->
                <div class="monograph-blueprint-viewport" id="monoBlueprintContainer" style="display: none;">
                    <img id="modalBlueprintImg" src="assets/img/curated/project_blueprint.jpg" alt="Architectural Blueprint Drawing" class="mono-blueprint-img">
                    <div class="mono-blueprint-overlay">
                        <span class="blueprint-seal">OFFICIAL ATELIER DRAFT &bull; SCALE 1:100</span>
                        <div class="blueprint-specs-note">Approved for Structural Execution &bull; Zero Deviation</div>
                    </div>
                </div>

                <!-- Thumbnail Scrubber Bar -->
                <div class="monograph-thumbnails" id="monoThumbnailsStrip">
                    <!-- Dynamically populated via JS -->
                </div>
            </div>

            <!-- Right Stage: Editorial Project Monograph Story & Metadata -->
            <div class="monograph-sidebar">
                <span class="eyebrow" id="modalProjectSpecs">6,200 SQ.FT &bull; DLF PHASE 5</span>
                <h2 id="modalProjectTitle" class="monograph-title">The Palm Sanctuary Villa</h2>
                
                <div class="monograph-meta-grid">
                    <div class="mono-meta-item">
                        <span class="mono-meta-label">Location</span>
                        <strong class="mono-meta-val" id="modalProjectLocation">DLF Phase 5, Gurugram</strong>
                    </div>
                    <div class="mono-meta-item">
                        <span class="mono-meta-label">Built-up Area</span>
                        <strong class="mono-meta-val" id="modalProjectArea">6,200 sq.ft</strong>
                    </div>
                    <div class="mono-meta-item">
                        <span class="mono-meta-label">Turnkey Timeline</span>
                        <strong class="mono-meta-val" id="modalProjectTimeline">10 Months (Zero Delay)</strong>
                    </div>
                    <div class="mono-meta-item">
                        <span class="mono-meta-label">Lead Principals</span>
                        <strong class="mono-meta-val" id="modalProjectArchitects">Sumaira &amp; Anji Siddiqui</strong>
                    </div>
                </div>

                <div class="mono-scope-box">
                    <span class="mono-meta-label">Scope of Commission</span>
                    <p class="mono-scope-text" id="modalProjectScope">
                        Turnkey Architecture, Structural Engineering &amp; Interior Design
                    </p>
                </div>

                <div class="mono-narrative-box">
                    <h4 class="mono-narrative-title">Architectural Concept &amp; Execution</h4>
                    <p id="modalProjectDesc" class="mono-narrative-text">
                        A striking contemporary residence featuring floating cantilevered concrete volumes, floor-to-ceiling glass pavilions, a central reflecting pool, and serene landscaped courtyards.
                    </p>
                </div>

                <!-- Action Footer -->
                <div class="monograph-actions">
                    <button class="btn btn-primary" id="monoInquireBtn" data-open-consultation style="width: 100%;">
                        <span>Inquire About Similar Commission</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                    <a href="https://wa.me/919876543210?text=Hi%20Chaudhary%20Associates,%20I%20am%20inquiring%20about%20a%20project%20similar%20to%20your%20portfolio." target="_blank" rel="noopener" class="btn btn-outline" style="width: 100%; justify-content: center;">
                        <span>Discuss via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
