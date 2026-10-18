@extends('layouts.app')

@section('title', 'Within Walls — Curated Tactile Material Flatlays & Palettes | Chaudhary Associates')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 4rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative;">
    <div class="container">
        <span class="eyebrow">Sensory Material &amp; Mood Atelier</span>
        <h1 class="section-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem;">Within Walls</h1>
        <p class="section-subtitle" style="margin-bottom: 0; max-width: 720px;">
            A curated atelier series exploring modern heritage, organic minimalism, and refined comfort. Experience tactile physical materials paired alongside light-calibrated interior color palettes.
        </p>
    </div>
</section>

<!-- Interactive Flatlay & Palette Studio -->
<section class="palette-section" style="padding: 5rem 0 7rem;">
    <div class="container">
        <!-- View Switcher -->


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

@endsection
