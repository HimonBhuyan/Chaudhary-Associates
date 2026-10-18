@extends('layouts.app')

@section('title', 'Portfolio | Chaudhary Associates Architecture & Interiors')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 4rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative; overflow: hidden;">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="eyebrow">Curated Project Archive</span>
        <h1 class="section-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem;">Architectural Works</h1>
        <p class="section-subtitle" style="margin-bottom: 0;">
            A selective retrospective of bespoke private residences, penthouses, commercial studios, and turnkey developments executed across India.
        </p>
    </div>
</section>

<!-- Filter & Grid -->
<section class="projects-section" style="padding-top: 4rem;">
    <div class="container">
        <!-- Category Filter Tabs -->
        <div class="portfolio-filter-bar" style="margin-bottom: 3.5rem;">
            <button class="filter-btn active" data-filter="all">All Works ({{ count($projects) }})</button>
            <button class="filter-btn" data-filter="residential">Residential Villas</button>
            <button class="filter-btn" data-filter="interior">Luxury Interiors</button>
            <button class="filter-btn" data-filter="commercial">Commercial Studios</button>
            <button class="filter-btn" data-filter="turnkey">Turnkey Design & Build</button>
        </div>

        <div class="projects-masonry">
            @foreach($projects as $proj)
            <div class="project-item" 
                 data-category="{{ $proj['category'] }}" 
                 data-title="{{ $proj['title'] }}" 
                 data-specs="{{ $proj['area'] }} &bull; {{ $proj['location'] }}" 
                 data-location="{{ $proj['location'] }}"
                 data-area="{{ $proj['area'] }}"
                 data-timeline="{{ $proj['timeline'] ?? '8 Months' }}"
                 data-architects="{{ $proj['architects'] ?? 'Sumaira &amp; Anji Siddiqui' }}"
                 data-scope="{{ $proj['scope'] }}"
                 data-desc="{{ $proj['details'] }}" 
                 data-img="{{ $proj['image'] }}"
                 data-blueprint="{{ $proj['blueprint'] ?? 'assets/img/curated/project_blueprint.jpg' }}"
                 data-gallery="{{ isset($proj['gallery']) ? implode(',', $proj['gallery']) : $proj['image'] }}">
                <div class="project-thumbnail">
                    <img src="{{ $proj['image'] }}" alt="{{ $proj['title'] }}">
                    <span class="project-badge-tag">{{ $proj['category_label'] }}</span>
                </div>
                <div class="project-info">
                    <span class="project-meta">{{ $proj['location'] }} &bull; {{ $proj['year'] }}</span>
                    <h3 class="project-name">{{ $proj['title'] }}</h3>
                    <p class="project-summary">{{ $proj['summary'] }}</p>
                    <div class="project-footer">
                        <span class="project-specs">{{ $proj['area'] }} &bull; {{ $proj['scope'] }}</span>
                        <div class="project-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section style="padding: 6rem 0; background: var(--color-surface); border-top: 1px solid var(--color-border); text-align: center;">
    <div class="container" style="max-width: 700px;">
        <span class="eyebrow" style="justify-content: center;">Have a site or property in mind?</span>
        <h2 class="section-title" style="font-size: 2.2rem; margin-bottom: 1rem;">Let's Design Your Future Sanctuary</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 2rem;">
            From bare plot feasibility to turnkey key handover, Chaudhary Associates provides complete single-point architectural execution.
        </p>
        <a href="#consultation" class="btn btn-primary" data-open-consultation>Book Studio Consultation</a>
    </div>
</section>

@endsection
