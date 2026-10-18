<header class="site-header">
    <div class="container nav-container">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-logo">
            <div class="brand-emblem">
                <span>CA</span>
            </div>
            <div class="brand-text">
                <span class="brand-title">CHAUDHARY ASSOCIATES</span>
                <span class="brand-subtitle">DESIGN &bull; BUILD &bull; DELIVER</span>
            </div>
        </a>

        <!-- Desktop Navigation - Curated & Spacious -->
        <ul class="nav-links" id="primaryNav">
            <li class="nav-item-home"><a href="index.php" class="nav-link {{ ($activePage ?? 'home') === 'home' ? 'active' : '' }}">Home</a></li>
            <li><a href="index.php?page=portfolio" class="nav-link {{ ($activePage ?? '') === 'portfolio' ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="index.php?page=process" class="nav-link {{ ($activePage ?? '') === 'process' ? 'active' : '' }}">Process</a></li>
            <li><a href="index.php?page=services" class="nav-link {{ ($activePage ?? '') === 'services' ? 'active' : '' }}">Services</a></li>
            <li><a href="index.php?page=within-walls" class="nav-link {{ ($activePage ?? '') === 'within-walls' ? 'active' : '' }}">Within Walls</a></li>
            <li><a href="index.php?page=calculator" class="nav-link {{ ($activePage ?? '') === 'calculator' ? 'active' : '' }}">Estimator</a></li>
            <li><a href="index.php?page=about" class="nav-link {{ ($activePage ?? '') === 'about' ? 'active' : '' }}">About</a></li>
            <li><a href="index.php?page=contact" class="nav-link {{ ($activePage ?? '') === 'contact' ? 'active' : '' }}">Contact</a></li>
            <li class="mobile-drawer-cta" style="display: none;">
                <a href="#consultation" class="btn btn-primary" data-open-consultation>
                    <span>Schedule Consultation</span>
                </a>
            </li>
        </ul>

        <!-- Nav Actions -->
        <div class="nav-actions">
            <!-- Refined Inquire CTA -->
            <a href="#consultation" class="btn btn-primary btn-sm nav-cta" data-open-consultation>
                <span>Inquire</span>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>

            <!-- Mobile Hamburger -->
            <button class="mobile-toggle" aria-label="Toggle navigation menu" aria-expanded="false" id="mobileNavToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
