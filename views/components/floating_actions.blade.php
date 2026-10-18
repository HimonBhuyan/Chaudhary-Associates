<!-- ==========================================================================
     FLOATING QUICK-ACTION DOCK (BOTTOM-RIGHT ATELIER CONTROLS)
     Positioned: Floating Theme Toggle strictly above the Floating WhatsApp Button
     ========================================================================== -->
<div class="floating-actions-dock" aria-label="Quick Actions">
    <!-- 1. Floating Theme Mode Toggle (Above WhatsApp) -->
    <button class="floating-action-btn floating-theme-toggle theme-toggle" 
            id="floatingThemeToggle" 
            aria-label="Toggle light or dark theme" 
            title="Switch Theme (Dark / Light)">
        <span class="theme-icon-container" id="themeToggleIcon">
            <!-- Icon dynamically updated by JS -->
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
        </span>
        <span class="floating-action-tooltip" id="themeTooltip">Switch to Light Mode</span>
    </button>

    <!-- 2. Floating WhatsApp Direct Atelier Action Button -->
    <a href="https://wa.me/919876543210?text=Hi%20Chaudhary%20Associates,%20I%20would%20like%20to%20discuss%20an%20architectural%20design%20and%20build%20commission." 
       target="_blank" 
       rel="noopener" 
       class="floating-action-btn floating-whatsapp-btn" 
       aria-label="Direct WhatsApp Consultation with Principal Architects" 
       title="Chat with Principal Architects on WhatsApp">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.761.815 2.796.815 3.183 0 5.77-2.586 5.77-5.767 0-3.181-2.587-5.766-5.77-5.766zm9.969 5.766c0 5.518-4.482 10-10 10-1.745 0-3.376-.453-4.802-1.246l-5.198 1.308 1.353-4.947c-.896-1.492-1.353-3.188-1.353-5.115 0-5.518 4.482-10 10-10 5.518 0 10 4.482 10 10z"/>
        </svg>
        <span class="floating-pulse-ring"></span>
        <span class="floating-action-tooltip">Direct WhatsApp</span>
    </a>
</div>
