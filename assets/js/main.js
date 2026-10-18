/**
 * CHAUDHARY ASSOCIATES — CORE INTERACTION JAVASCRIPT
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initThemeToggle();
    initMobileMenu();
    initHeroCarousel();
    initStoryHighlights();
    initBlueprintSlider();
    initBlueprintHotspots();
    initProjectFilters();
    initMonographModal();
    initRoomWallStudio();
    initCostCalculator();
    initTestimonialsSlider();
    initModals();
    initInquiryForm();
    initScrollAnimations();
});

/* ==========================================================================
   1. STICKY HEADER ON SCROLL
   ========================================================================== */
function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    const navLinks = document.querySelectorAll('.nav-links .nav-link');
    const isHomePage = window.location.search === '' || window.location.search === '?page=home';

    const sectionMap = [
        { id: 'instagram', href: 'index.php?page=contact' },
        { id: 'about', href: 'index.php?page=about' },
        { id: 'testimonials', href: '' },
        { id: 'calculator', href: 'index.php?page=calculator' },
        { id: 'within-walls', href: 'index.php?page=within-walls' },
        { id: 'portfolio', href: 'index.php?page=portfolio' },
        { id: 'blueprint-slider', href: 'index.php?page=process' },
        { id: 'pillars', href: 'index.php?page=process' },
        { id: 'home', href: 'index.php' }
    ];

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        if (scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        if (isHomePage) {
            let matchedHref = null;
            for (const item of sectionMap) {
                const el = document.getElementById(item.id);
                if (el) {
                    const top = el.offsetTop - 180;
                    if (scrollY >= top) {
                        matchedHref = item.href;
                        break;
                    }
                }
            }

            if (matchedHref !== null && matchedHref !== '') {
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === matchedHref) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            } else if (scrollY < 200) {
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === 'index.php') {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
        }
    }, { passive: true });
}

/* ==========================================================================
   2. THEME TOGGLE (DARK / LIGHT LUXURY)
   ========================================================================== */
function initThemeToggle() {
    const toggleBtns = document.querySelectorAll('.theme-toggle');
    if (!toggleBtns.length) return;

    const savedTheme = localStorage.getItem('ca_theme') || 'dark';
    document.documentElement.setAttribute('data-theme', savedTheme);
    document.body.setAttribute('data-theme', savedTheme);
    updateThemeDisplays(savedTheme);

    toggleBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', newTheme);
            document.body.setAttribute('data-theme', newTheme);
            localStorage.setItem('ca_theme', newTheme);
            updateThemeDisplays(newTheme);
        });
    });
}

function updateThemeDisplays(theme) {
    const isLight = theme === 'light';
    const toggleBtns = document.querySelectorAll('.theme-toggle');
    const tooltip = document.getElementById('themeTooltip');
    const iconContainer = document.getElementById('themeToggleIcon');

    toggleBtns.forEach(btn => {
        btn.setAttribute('aria-label', isLight ? 'Switch to Dark Mode (Obsidian)' : 'Switch to Light Mode (Alabaster)');
        btn.setAttribute('title', isLight ? 'Switch to Dark Mode (Obsidian)' : 'Switch to Light Mode (Alabaster)');
        if (isLight) {
            btn.classList.add('is-light');
        } else {
            btn.classList.remove('is-light');
        }
    });

    if (tooltip) {
        tooltip.textContent = isLight ? 'Switch to Dark Mode' : 'Switch to Light Mode';
    }

    if (iconContainer) {
        if (isLight) {
            iconContainer.innerHTML = `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;
        } else {
            iconContainer.innerHTML = `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;
        }
    }
}

/* ==========================================================================
   3. MOBILE NAVIGATION DRAWER
   ========================================================================== */
function initMobileMenu() {
    const mobileBtn = document.querySelector('.mobile-toggle');
    const navLinks = document.querySelector('.nav-links');
    if (!mobileBtn || !navLinks) return;

    mobileBtn.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');
        mobileBtn.classList.toggle('active', isOpen);
        mobileBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
            mobileBtn.classList.remove('active');
            mobileBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    });
}

/* ==========================================================================
   4. INTERACTIVE BLUEPRINT TO REALITY SLIDER
   ========================================================================== */
function initBlueprintSlider() {
    const wrapper = document.querySelector('.comparison-wrapper');
    const afterEl = document.querySelector('.comparison-after');
    const handle = document.querySelector('.comparison-slider-handle');
    if (!wrapper || !afterEl || !handle) return;

    let isDragging = false;

    function setSliderPosition(x) {
        const rect = wrapper.getBoundingClientRect();
        let posX = x - rect.left;
        if (posX < 0) posX = 0;
        if (posX > rect.width) posX = rect.width;

        const percentage = (posX / rect.width) * 100;
        afterEl.style.width = `${percentage}%`;
        handle.style.left = `${percentage}%`;
    }

    handle.addEventListener('mousedown', () => isDragging = true);
    window.addEventListener('mouseup', () => isDragging = false);
    wrapper.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        setSliderPosition(e.clientX);
    });

    // Touch support
    handle.addEventListener('touchstart', () => isDragging = true);
    window.addEventListener('touchend', () => isDragging = false);
    wrapper.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        setSliderPosition(e.touches[0].clientX);
    });

    wrapper.addEventListener('click', (e) => {
        setSliderPosition(e.clientX);
    });
}

/* ==========================================================================
   5. PROJECT PORTFOLIO FILTERS
   ========================================================================== */
function initProjectFilters() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');
    if (!filterBtns.length || !projectItems.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            projectItems.forEach(item => {
                const category = item.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    item.style.display = 'flex';
                    setTimeout(() => item.style.opacity = '1', 50);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
        });
    });
}

/* ==========================================================================
   6. "WITHIN WALLS" PALETTE EXPLORER
   ========================================================================== */
function initPaletteExplorer() {
    const swatches = document.querySelectorAll('.swatch-card');
    const previewStage = document.querySelector('.palette-preview-stage img');
    const previewTitle = document.querySelector('.palette-preview-title');
    const previewText = document.querySelector('.palette-preview-text');

    if (!swatches.length) return;

    swatches.forEach(swatch => {
        swatch.addEventListener('click', () => {
            swatches.forEach(s => s.classList.remove('active'));
            swatch.classList.add('active');

            const name = swatch.getAttribute('data-name');
            const description = swatch.getAttribute('data-desc');
            const image = swatch.getAttribute('data-image');

            if (previewTitle) previewTitle.textContent = name;
            if (previewText) previewText.textContent = description;
            if (previewStage && image) {
                previewStage.style.opacity = '0.5';
                setTimeout(() => {
                    previewStage.src = image;
                    previewStage.style.opacity = '1';
                }, 200);
            }
        });
    });
}

/* ==========================================================================
   7. TURNKEY COST & ESTIMATOR CALCULATOR
   ========================================================================== */
function initCostCalculator() {
    const areaSlider = document.getElementById('calcAreaSlider');
    const areaDisplay = document.getElementById('calcAreaDisplay');
    const typeButtons = document.querySelectorAll('.calc-type-btn');
    const tierButtons = document.querySelectorAll('.calc-tier-btn');
    
    const priceDisplay = document.getElementById('calcTotalEstimate');
    const sqftDisplay = document.getElementById('calcRatePerSqft');
    const timelineDisplay = document.getElementById('calcTimeline');

    if (!areaSlider || !priceDisplay) return;

    let currentArea = parseInt(areaSlider.value, 10) || 2400;
    let currentTypeMultiplier = 1.0; // Interior: 1.0, Architecture: 0.6, Turnkey: 1.8
    let currentTierMultiplier = 1.0; // Luxury: 1.0, Ultra-Luxury: 1.45
    let baseRate = 2200; // Base INR per sq.ft

    function updateCalculations() {
        if (areaDisplay) areaDisplay.textContent = `${currentArea.toLocaleString('en-IN')} sq.ft`;
        
        const effectiveRate = Math.round(baseRate * currentTypeMultiplier * currentTierMultiplier);
        const totalCost = currentArea * effectiveRate;
        
        let timelineMonths = Math.max(3, Math.round((currentArea / 600) * (currentTypeMultiplier > 1.2 ? 1.4 : 1.0)));
        if (timelineMonths > 18) timelineMonths = 18;

        if (sqftDisplay) sqftDisplay.textContent = `₹${effectiveRate.toLocaleString('en-IN')} / sq.ft`;
        if (priceDisplay) priceDisplay.textContent = `₹${(totalCost / 100000).toFixed(2)} Lakhs`;
        if (timelineDisplay) timelineDisplay.textContent = `${timelineMonths} - ${timelineMonths + 2} Months`;
    }

    areaSlider.addEventListener('input', (e) => {
        currentArea = parseInt(e.target.value, 10);
        updateCalculations();
    });

    typeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            typeButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentTypeMultiplier = parseFloat(btn.getAttribute('data-multiplier')) || 1.0;
            updateCalculations();
        });
    });

    tierButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            tierButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentTierMultiplier = parseFloat(btn.getAttribute('data-multiplier')) || 1.0;
            updateCalculations();
        });
    });

    updateCalculations();
}

/* ==========================================================================
   8. ARCHITECTURAL MONOGRAPH MODAL (DEEP PROJECT STORIES)
   ========================================================================== */
let monographGallery = [];
let monographGalleryIndex = 0;

function openProjectMonograph(data) {
    const modal = document.getElementById('projectDetailModal');
    if (!modal) return;

    const titleEl = document.getElementById('modalProjectTitle');
    const catEl = document.getElementById('modalProjectCat');
    const specsEl = document.getElementById('modalProjectSpecs');
    const locEl = document.getElementById('modalProjectLocation');
    const areaEl = document.getElementById('modalProjectArea');
    const timeEl = document.getElementById('modalProjectTimeline');
    const archEl = document.getElementById('modalProjectArchitects');
    const scopeEl = document.getElementById('modalProjectScope');
    const descEl = document.getElementById('modalProjectDesc');
    const bpImg = document.getElementById('modalBlueprintImg');

    if (titleEl) titleEl.textContent = data.title || 'Architectural Monograph';
    if (catEl) catEl.textContent = (data.category || 'RESIDENTIAL VILLA').toUpperCase();
    if (specsEl) specsEl.innerHTML = data.specs || `${data.area || ''} &bull; ${data.location || ''}`;
    if (locEl) locEl.textContent = data.location || 'DLF Phase 5, Gurugram';
    if (areaEl) areaEl.textContent = data.area || '6,200 sq.ft';
    if (timeEl) timeEl.textContent = data.timeline || '10 Months (Turnkey)';
    if (archEl) archEl.innerHTML = data.architects || 'Sumaira &amp; Anji Siddiqui';
    if (scopeEl) scopeEl.innerHTML = data.scope || 'Turnkey Architecture, Structural Engineering &amp; Interior Design';
    if (descEl) descEl.textContent = data.desc || '';
    if (bpImg) bpImg.src = data.blueprint || 'assets/img/curated/project_blueprint.jpg';

    // Parse gallery
    if (Array.isArray(data.gallery)) {
        monographGallery = data.gallery;
    } else if (typeof data.gallery === 'string' && data.gallery.length) {
        monographGallery = data.gallery.split(',').map(s => s.trim()).filter(Boolean);
    } else {
        monographGallery = [data.img || 'assets/img/curated/hero_villa.jpg'];
    }

    if (monographGallery.length === 0) {
        monographGallery = [data.img || 'assets/img/curated/hero_villa.jpg'];
    }

    monographGalleryIndex = 0;
    renderMonographGallery();
    switchMonographTab('gallery');

    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function renderMonographGallery() {
    const mainImg = document.getElementById('modalProjectImg');
    const badge = document.getElementById('monoImgBadge');
    const thumbsStrip = document.getElementById('monoThumbnailsStrip');

    if (!monographGallery.length) return;

    if (mainImg) {
        mainImg.style.opacity = '0.4';
        setTimeout(() => {
            mainImg.src = monographGallery[monographGalleryIndex];
            mainImg.style.opacity = '1';
        }, 150);
    }

    if (badge) {
        const perspectiveLabels = [
            'Exterior Facade & Volume',
            'Double-Height Living & Interior',
            'Architectural Monolith & Light',
            'Tactile Material Detail'
        ];
        const label = perspectiveLabels[monographGalleryIndex] || 'Atelier Perspective';
        badge.innerHTML = `${label} &bull; 0${monographGalleryIndex + 1} / 0${monographGallery.length}`;
    }

    if (thumbsStrip) {
        thumbsStrip.innerHTML = '';
        monographGallery.forEach((url, idx) => {
            const thumb = document.createElement('button');
            thumb.className = `mono-thumb ${idx === monographGalleryIndex ? 'active' : ''}`;
            thumb.setAttribute('aria-label', `Perspective 0${idx + 1}`);
            thumb.innerHTML = `<img src="${url}" alt="Thumbnail 0${idx + 1}">`;
            thumb.addEventListener('click', (e) => {
                e.stopPropagation();
                monographGalleryIndex = idx;
                renderMonographGallery();
            });
            thumbsStrip.appendChild(thumb);
        });
    }
}

function switchMonographTab(tab) {
    const galleryContainer = document.getElementById('monoGalleryContainer');
    const bpContainer = document.getElementById('monoBlueprintContainer');
    const tabGallery = document.getElementById('monoTabGallery');
    const tabBp = document.getElementById('monoTabBlueprint');
    const thumbsStrip = document.getElementById('monoThumbnailsStrip');

    if (tab === 'blueprint') {
        if (galleryContainer) galleryContainer.style.display = 'none';
        if (bpContainer) bpContainer.style.display = 'block';
        if (tabGallery) tabGallery.classList.remove('active');
        if (tabBp) tabBp.classList.add('active');
        if (thumbsStrip) thumbsStrip.style.opacity = '0.35';
    } else {
        if (galleryContainer) galleryContainer.style.display = 'block';
        if (bpContainer) bpContainer.style.display = 'none';
        if (tabGallery) tabGallery.classList.add('active');
        if (tabBp) tabBp.classList.remove('active');
        if (thumbsStrip) thumbsStrip.style.opacity = '1';
    }
}

function initMonographModal() {
    const modal = document.getElementById('projectDetailModal');
    if (!modal) return;

    // Project Cards click listeners
    document.querySelectorAll('.project-item').forEach(card => {
        card.addEventListener('click', (e) => {
            e.preventDefault();
            const data = {
                id: card.getAttribute('data-id'),
                title: card.getAttribute('data-title'),
                category: card.getAttribute('data-category'),
                specs: card.getAttribute('data-specs'),
                location: card.getAttribute('data-location'),
                area: card.getAttribute('data-area'),
                timeline: card.getAttribute('data-timeline'),
                architects: card.getAttribute('data-architects'),
                scope: card.getAttribute('data-scope'),
                desc: card.getAttribute('data-desc'),
                img: card.getAttribute('data-img'),
                blueprint: card.getAttribute('data-blueprint'),
                gallery: card.getAttribute('data-gallery')
            };
            openProjectMonograph(data);
        });
    });

    // Arrow navigation
    const prevBtn = document.getElementById('monoPrevBtn');
    const nextBtn = document.getElementById('monoNextBtn');

    if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (!monographGallery.length) return;
            monographGalleryIndex = (monographGalleryIndex - 1 + monographGallery.length) % monographGallery.length;
            renderMonographGallery();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (!monographGallery.length) return;
            monographGalleryIndex = (monographGalleryIndex + 1) % monographGallery.length;
            renderMonographGallery();
        });
    }

    // View tabs
    const tabGallery = document.getElementById('monoTabGallery');
    const tabBp = document.getElementById('monoTabBlueprint');

    if (tabGallery) {
        tabGallery.addEventListener('click', (e) => {
            e.stopPropagation();
            switchMonographTab('gallery');
        });
    }

    if (tabBp) {
        tabBp.addEventListener('click', (e) => {
            e.stopPropagation();
            switchMonographTab('blueprint');
        });
    }

    // Inquire CTA button from Monograph modal
    const inquireBtn = document.getElementById('monoInquireBtn');
    if (inquireBtn) {
        inquireBtn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.remove('active');
            document.body.style.overflow = '';

            const consultationModal = document.getElementById('consultationModal');
            if (consultationModal) {
                consultationModal.classList.add('active');
                const titleEl = document.getElementById('modalProjectTitle');
                const projectTitle = titleEl ? titleEl.textContent.trim() : 'a portfolio project';
                const notesField = consultationModal.querySelector('textarea');
                if (notesField) {
                    notesField.value = `I am inquiring about commissioning a bespoke residence/interior similar to "${projectTitle}".`;
                }
            }
        });
    }

    // Keyboard navigation when monograph is active
    document.addEventListener('keydown', (e) => {
        if (!modal.classList.contains('active')) return;

        if (e.key === 'ArrowLeft') {
            if (!monographGallery.length) return;
            monographGalleryIndex = (monographGalleryIndex - 1 + monographGallery.length) % monographGallery.length;
            renderMonographGallery();
        } else if (e.key === 'ArrowRight') {
            if (!monographGallery.length) return;
            monographGalleryIndex = (monographGalleryIndex + 1) % monographGallery.length;
            renderMonographGallery();
        } else if (e.key === 'Escape') {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
}

/* ==========================================================================
   9. INTERACTIVE ROOM DESIGN & WALL COLOR STUDIO ("WITHIN WALLS")
   ========================================================================== */
function initRoomWallStudio() {
    const roomBtns = document.querySelectorAll('.room-card-btn');
    const colorChips = document.querySelectorAll('.wall-swatch-chip');
    const stageImg = document.getElementById('visPrimaryImg');
    const roomLabel = document.getElementById('visActiveRoomLabel');
    const colorDot = document.getElementById('visActiveColorDot');
    const colorName = document.getElementById('visActiveColorName');
    const finishLabel = document.getElementById('visActiveFinishLabel');
    const colorDesc = document.getElementById('visColorDesc');
    const colorCode = document.getElementById('visColorCode');
    const colorLRV = document.getElementById('visColorLRV');
    const colorUndertone = document.getElementById('visColorUndertone');
    const roomTrim = document.getElementById('visRoomTrim');
    const consultBtn = document.getElementById('visConsultBtn');

    if (!roomBtns.length || !colorChips.length || !stageImg) return;

    // Config with all room renders and palette specs
    const studioConfig = {
        rooms: {
            bedroom: {
                id: 'bedroom',
                name: 'Master Bedroom Sanctuary',
                trim: 'Champagne Brass & Bouclé Linen',
                images: {
                    alabaster: 'assets/img/within_walls/bedroom_alabaster.jpg',
                    charcoal: 'assets/img/within_walls/bedroom_charcoal.jpg',
                    terracotta: 'assets/img/within_walls/bedroom_terracotta.jpg',
                    sage: 'assets/img/within_walls/bedroom_sage.jpg',
                    teal: 'assets/img/within_walls/bedroom_teal.jpg'
                }
            },
            sofa: {
                id: 'sofa',
                name: 'Azure Velvet Sofa Lounge',
                trim: 'French Brass Sconces & Herringbone Parquet',
                images: {
                    alabaster: 'assets/img/within_walls/sofa_alabaster.jpg',
                    charcoal: 'assets/img/within_walls/sofa_charcoal.jpg',
                    terracotta: 'assets/img/within_walls/sofa_terracotta.jpg',
                    sage: 'assets/img/within_walls/sofa_sage.jpg',
                    teal: 'assets/img/within_walls/sofa_teal.jpg'
                }
            }
        },
        colors: {
            alabaster: {
                id: 'alabaster',
                name: 'Parisian Alabaster',
                hex: '#F4EFE6',
                code: 'CA-WALL-01',
                finish: 'Roman Limewash',
                lrv: '78%',
                undertone: 'Warm Chalk & Calcite Mineral',
                desc: 'Reflective mineral limewash that maximizes natural daylight bounce and accentuates sculptural shadowlines.'
            },
            charcoal: {
                id: 'charcoal',
                name: 'Obsidian Charcoal',
                hex: '#21262D',
                code: 'CA-WALL-02',
                finish: 'Velveteen Matte',
                lrv: '12%',
                undertone: 'Volcanic Basalt & Carbon Slate',
                desc: 'Intimate cocooning richness that anchors statement brass luminaires and brings cinematic drama.'
            },
            terracotta: {
                id: 'terracotta',
                name: 'Tuscan Terracotta',
                hex: '#B85D3B',
                code: 'CA-WALL-03',
                finish: 'Hand-Troweled Clay',
                lrv: '28%',
                undertone: 'Baked Mediterranean Clay & Spiced Saffron',
                desc: 'Artisanal earthy grounding that harmonizes rich timber millwork, bringing organic warmth and tactile depth.'
            },
            sage: {
                id: 'sage',
                name: 'Biophilic Sage',
                hex: '#586D5C',
                code: 'CA-WALL-04',
                finish: 'Eucalyptus Wash',
                lrv: '34%',
                undertone: 'Silver Eucalyptus & Forest Lichen',
                desc: 'Soothing organic hue designed to lower cognitive fatigue and connect high-end interiors directly to nature.'
            },
            teal: {
                id: 'teal',
                name: 'Ocean Teal',
                hex: '#1D3D46',
                code: 'CA-WALL-05',
                finish: 'Moody Peacock',
                lrv: '18%',
                undertone: 'Deep Aegean Sea & Malachite Mineral',
                desc: 'Regal architectural statement providing a hypnotic, opulent backdrop for contemporary velvet seating and art.'
            }
        }
    };

    // Preload all 10 images for instant, smooth transitions
    Object.values(studioConfig.rooms).forEach(room => {
        Object.values(room.images).forEach(src => {
            const preImg = new Image();
            preImg.src = src;
        });
    });

    let currentRoom = 'bedroom';
    let currentColor = 'alabaster';

    function updateStudio() {
        const roomData = studioConfig.rooms[currentRoom];
        const colorData = studioConfig.colors[currentColor];
        if (!roomData || !colorData) return;

        // Update labels and telemetry
        if (roomLabel) roomLabel.textContent = roomData.name;
        if (colorDot) {
            colorDot.style.backgroundColor = colorData.hex;
            colorDot.style.boxShadow = `0 0 12px ${colorData.hex}`;
        }
        if (colorName) colorName.textContent = `${colorData.name} (${colorData.hex})`;
        if (finishLabel) finishLabel.textContent = colorData.finish;
        if (colorDesc) colorDesc.textContent = colorData.desc;
        if (colorCode) colorCode.textContent = colorData.code;
        if (colorLRV) colorLRV.textContent = colorData.lrv;
        if (colorUndertone) colorUndertone.textContent = colorData.undertone;
        if (roomTrim) roomTrim.textContent = roomData.trim;

        // Update consultation modal trigger context
        if (consultBtn) {
            consultBtn.setAttribute('data-subject', `Consultation: ${roomData.name} in ${colorData.name} (${colorData.code})`);
        }

        // Smooth image transition
        const targetSrc = roomData.images[currentColor];
        if (stageImg.getAttribute('src') === targetSrc) return;

        stageImg.style.opacity = '0.35';
        stageImg.style.transform = 'scale(0.99)';

        setTimeout(() => {
            stageImg.src = targetSrc;
            stageImg.onload = () => {
                stageImg.style.opacity = '1';
                stageImg.style.transform = 'scale(1)';
            };
            // Fallback in case onload already fired from browser cache
            setTimeout(() => {
                stageImg.style.opacity = '1';
                stageImg.style.transform = 'scale(1)';
            }, 60);
        }, 120);
    }

    // Room Selection
    roomBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const roomKey = btn.getAttribute('data-room');
            if (roomKey === currentRoom) return;

            roomBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentRoom = roomKey;
            updateStudio();
        });
    });

    // Color Swatch Selection
    colorChips.forEach(chip => {
        chip.addEventListener('click', (e) => {
            e.preventDefault();
            const colorKey = chip.getAttribute('data-color');
            if (colorKey === currentColor) return;

            colorChips.forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
            currentColor = colorKey;
            updateStudio();
        });
    });
}

/* ==========================================================================
   10. INTERACTIVE ARCHITECTURAL BLUEPRINT / FLOORPLAN HOTSPOTS
   ========================================================================== */
function initBlueprintHotspots() {
    const pins = document.querySelectorAll('.hotspot-pin');
    const legendBtns = document.querySelectorAll('.hotspot-legend-btn');
    const previewImg = document.getElementById('hotspotPreviewImg');
    const zoneEl = document.getElementById('hotspotZone');
    const titleEl = document.getElementById('hotspotTitle');
    const descEl = document.getElementById('hotspotDesc');
    const areaEl = document.getElementById('hotspotArea');
    const monographBtn = document.getElementById('hotspotMonographBtn');

    if (!pins.length) return;

    let currentHotspotData = null;

    function activateHotspot(pin) {
        if (!pin) return;
        const id = pin.getAttribute('data-id');

        pins.forEach(p => p.classList.remove('active'));
        legendBtns.forEach(b => b.classList.remove('active'));

        pin.classList.add('active');
        const matchingBtn = document.querySelector(`.hotspot-legend-btn[data-target="${id}"]`);
        if (matchingBtn) matchingBtn.classList.add('active');

        const title = pin.getAttribute('data-title');
        const zone = pin.getAttribute('data-zone');
        const desc = pin.getAttribute('data-desc');
        const area = pin.getAttribute('data-area');
        const img = pin.getAttribute('data-img');
        const project = pin.getAttribute('data-project');

        currentHotspotData = { id, title, zone, desc, area, img, project };

        if (titleEl) titleEl.textContent = title;
        if (zoneEl) zoneEl.innerHTML = zone || '';
        if (descEl) descEl.textContent = desc || '';
        if (areaEl) areaEl.innerHTML = area || '';

        if (previewImg && img) {
            previewImg.style.opacity = '0.35';
            previewImg.style.transform = 'scale(0.98)';
            setTimeout(() => {
                previewImg.src = img;
                previewImg.style.opacity = '1';
                previewImg.style.transform = 'scale(1)';
            }, 160);
        }
    }

    pins.forEach(pin => {
        pin.addEventListener('click', () => activateHotspot(pin));
        pin.addEventListener('mouseenter', () => activateHotspot(pin));
    });

    legendBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-target');
            const matchingPin = document.querySelector(`.hotspot-pin[data-id="${targetId}"]`);
            if (matchingPin) activateHotspot(matchingPin);
        });
    });

    if (monographBtn) {
        monographBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (!currentHotspotData) return;

            let targetCard = null;
            document.querySelectorAll('.project-item').forEach(card => {
                const cardTitle = card.getAttribute('data-title') || '';
                if (currentHotspotData.project && cardTitle.toLowerCase().includes(currentHotspotData.project.toLowerCase().slice(0, 10))) {
                    targetCard = card;
                }
            });

            if (targetCard) {
                targetCard.click();
            } else {
                openProjectMonograph({
                    title: currentHotspotData.project || currentHotspotData.title,
                    category: 'Residential Villa',
                    specs: currentHotspotData.area,
                    location: 'Gurugram &bull; Delhi NCR',
                    area: currentHotspotData.area,
                    timeline: '10 Months Turnkey',
                    architects: 'Sumaira &amp; Anji Siddiqui',
                    scope: 'Bespoke Architecture, Interior Execution &amp; Turnkey Handover',
                    desc: currentHotspotData.desc,
                    img: currentHotspotData.img,
                    blueprint: 'assets/img/curated/project_blueprint.jpg',
                    gallery: [
                        currentHotspotData.img,
                        'assets/img/curated/hero_villa.jpg',
                        'assets/img/curated/project_facade.jpg',
                        'assets/img/materials/calacatta_marble.jpg'
                    ]
                });
            }
        });
    }

    if (pins[0]) activateHotspot(pins[0]);
}

/* ==========================================================================
   11. CLIENT TESTIMONIALS & EDITORIAL QUOTES SLIDER
   ========================================================================== */
function initTestimonialsSlider() {
    const slider = document.getElementById('testimonialSlider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('#testimonialDots .testimonial-dot');
    if (!slides.length) return;

    let currentIndex = 0;
    let timer = null;
    const duration = 7000;

    function goToTestimonial(index) {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));

        currentIndex = (index + slides.length) % slides.length;
        slides[currentIndex].classList.add('active');
        if (dots[currentIndex]) dots[currentIndex].classList.add('active');
    }

    function startTimer() {
        clearInterval(timer);
        timer = setInterval(() => {
            goToTestimonial(currentIndex + 1);
        }, duration);
    }

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            goToTestimonial(idx);
            startTimer();
        });
    });

    slider.addEventListener('mouseenter', () => clearInterval(timer));
    slider.addEventListener('mouseleave', () => startTimer());

    startTimer();
}

/* ==========================================================================
   12. GENERAL MODALS & POPUPS HANDLER
   ========================================================================== */
function initModals() {
    const consultationTriggers = document.querySelectorAll('[data-open-consultation]');
    const consultationModal = document.getElementById('consultationModal');
    const projectModal = document.getElementById('projectDetailModal');
    const closeButtons = document.querySelectorAll('.modal-close, .modal-overlay');

    consultationTriggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            if (consultationModal) consultationModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    closeButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            if (e.target === btn || btn.classList.contains('modal-close')) {
                if (consultationModal) consultationModal.classList.remove('active');
                if (projectModal) projectModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (consultationModal && consultationModal.classList.contains('active')) {
                consultationModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });
}

/* ==========================================================================
   9. INQUIRY FORM SUBMISSION
   ========================================================================== */
function initInquiryForm() {
    const form = document.getElementById('consultationForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = `<span>Booking Appointment...</span>`;
        submitBtn.disabled = true;

        setTimeout(() => {
            submitBtn.innerHTML = `<span>✓ Consultation Requested!</span>`;
            submitBtn.style.backgroundColor = '#4CAF50';
            submitBtn.style.color = '#fff';

            setTimeout(() => {
                const consultationModal = document.getElementById('consultationModal');
                if (consultationModal) consultationModal.classList.remove('active');
                form.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                submitBtn.style.backgroundColor = '';
                submitBtn.style.color = '';
                alert('Thank you! Chaudhary Associates principal architects will connect with you within 24 hours.');
            }, 1200);
        }, 800);
    });
}

/* ==========================================================================
   10. SCROLL ANIMATIONS / REVEALS
   ========================================================================== */
function initScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.pillar-card, .project-item, .insta-card, .founder-card').forEach(el => {
        observer.observe(el);
    });
}

/* ==========================================================================
   11. CINEMATIC HERO CAROUSEL & PROJECT HUD
   ========================================================================== */
function initHeroCarousel() {
    const slides = document.querySelectorAll('.hero-slide');
    if (!slides.length) return;

    const hudIndex = document.getElementById('hudIndex');
    const hudTitle = document.getElementById('hudTitle');
    const hudMeta = document.getElementById('hudMeta');
    const progressBar = document.getElementById('hudProgressBar');
    const prevBtn = document.getElementById('heroPrevBtn');
    const nextBtn = document.getElementById('heroNextBtn');

    let currentSlide = 0;
    const totalSlides = slides.length;
    const slideDuration = 6000;
    let slideInterval = null;
    let progressStartTime = null;
    let animFrameId = null;

    function goToSlide(index) {
        slides[currentSlide].classList.remove('active');
        currentSlide = (index + totalSlides) % totalSlides;
        const activeSlide = slides[currentSlide];
        activeSlide.classList.add('active');

        if (hudIndex) {
            hudIndex.textContent = `0${currentSlide + 1} / 0${totalSlides}`;
        }
        if (hudTitle) {
            hudTitle.textContent = activeSlide.getAttribute('data-project') || '';
        }
        if (hudMeta) {
            hudMeta.innerHTML = activeSlide.getAttribute('data-meta') || '';
        }

        resetProgress();
    }

    function resetProgress() {
        if (animFrameId) cancelAnimationFrame(animFrameId);
        progressStartTime = performance.now();

        function animateProgress(now) {
            const elapsed = now - progressStartTime;
            const progress = Math.min(elapsed / slideDuration, 1);
            if (progressBar) {
                progressBar.style.width = `${progress * 100}%`;
            }
            if (progress < 1) {
                animFrameId = requestAnimationFrame(animateProgress);
            }
        }
        animFrameId = requestAnimationFrame(animateProgress);
    }

    function startAutoSlide() {
        clearInterval(slideInterval);
        resetProgress();
        slideInterval = setInterval(() => {
            goToSlide(currentSlide + 1);
        }, slideDuration);
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            goToSlide(currentSlide - 1);
            startAutoSlide();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            goToSlide(currentSlide + 1);
            startAutoSlide();
        });
    }

    startAutoSlide();
}

/* ==========================================================================
   12. INSTAGRAM STORY HIGHLIGHTS LIGHTBOX VIEWER
   ========================================================================== */
function initStoryHighlights() {
    const storyButtons = document.querySelectorAll('.story-circle-item');
    const modal = document.getElementById('storyModal');
    if (!storyButtons.length || !modal) return;

    const modalImg = document.getElementById('storyModalImg');
    const modalTitle = document.getElementById('storyModalTitle');
    const modalDesc = document.getElementById('storyModalDesc');
    const authorSub = document.getElementById('storyAuthorSub');
    const progFill = document.getElementById('storyProgFill');
    const closeBtn = document.getElementById('closeStoryBtn');

    let storyTimer = null;
    let storyProgFrame = null;
    let currentIndex = 0;
    const storyDuration = 5500;

    function openStory(index) {
        currentIndex = index;
        const btn = storyButtons[currentIndex];
        if (!btn) return;

        const title = btn.getAttribute('data-story-title');
        const tag = btn.getAttribute('data-story-tag');
        const img = btn.getAttribute('data-story-img');
        const caption = btn.getAttribute('data-story-caption');

        if (modalImg) modalImg.src = img;
        if (modalTitle) modalTitle.textContent = title;
        if (modalDesc) modalDesc.textContent = caption;
        if (authorSub) authorSub.textContent = `${tag} • Story Highlight`;

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';

        startStoryProgress();
    }

    function startStoryProgress() {
        if (storyProgFrame) cancelAnimationFrame(storyProgFrame);
        clearTimeout(storyTimer);

        if (progFill) progFill.style.width = '0%';
        const startTime = performance.now();

        function step(now) {
            const elapsed = now - startTime;
            const pct = Math.min((elapsed / storyDuration) * 100, 100);
            if (progFill) progFill.style.width = `${pct}%`;

            if (elapsed < storyDuration) {
                storyProgFrame = requestAnimationFrame(step);
            }
        }
        storyProgFrame = requestAnimationFrame(step);

        storyTimer = setTimeout(() => {
            if (currentIndex + 1 < storyButtons.length) {
                openStory(currentIndex + 1);
            } else {
                closeStory();
            }
        }, storyDuration);
    }

    function closeStory() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        if (storyProgFrame) cancelAnimationFrame(storyProgFrame);
        clearTimeout(storyTimer);
        if (progFill) progFill.style.width = '0%';
    }

    storyButtons.forEach((btn, idx) => {
        btn.addEventListener('click', () => {
            openStory(idx);
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', closeStory);
    }

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeStory();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeStory();
        }
    });
}

