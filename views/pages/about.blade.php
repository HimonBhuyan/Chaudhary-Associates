@extends('layouts.app')

@section('title', 'About Us & Principals | Chaudhary Associates')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 4rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative;">
    <div class="container">
        <span class="eyebrow">Studio Origin & Leadership</span>
        <h1 class="section-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem;">Chaudhary Associates</h1>
        <p class="section-subtitle" style="margin-bottom: 0;">
            A partnership between visionary architectural design and uncompromising construction discipline.
        </p>
    </div>
</section>

<!-- Studio Story -->
<section style="padding: 6rem 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div>
                <span class="eyebrow">Our Ethos</span>
                <h2 class="section-title" style="font-size: 2.4rem;">Where Ideas Take Shape & Excellence is Delivered</h2>
                <p style="color: var(--color-text-secondary); line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.05rem;">
                    Chaudhary Associates was founded to bridge the critical void between architectural imagination and on-site engineering execution. While conventional firms hand off drawings to third-party contractors, our practice orchestrates every stage under one unified vision: <strong>Design • Build • Deliver</strong>.
                </p>
                <p style="color: var(--color-text-secondary); line-height: 1.8; margin-bottom: 2rem;">
                    With over 260 completed projects across residential villas, luxury penthouses, and commercial institutions, our work is defined by spatial harmony, climate sensitivity, timeless material palettes, and absolute adherence to client budgets and deadlines.
                </p>
                <div style="display: flex; gap: 2.5rem; padding-top: 1.5rem; border-top: 1px solid var(--color-border);">
                    <div>
                        <span style="font-family: var(--font-heading); font-size: 2rem; color: var(--color-gold); font-weight: 600;">260+</span>
                        <p style="font-size: 0.8rem; text-transform: uppercase; color: var(--color-text-muted);">Delivered Spaces</p>
                    </div>
                    <div>
                        <span style="font-family: var(--font-heading); font-size: 2rem; color: var(--color-gold); font-weight: 600;">100%</span>
                        <p style="font-size: 0.8rem; text-transform: uppercase; color: var(--color-text-muted);">On-Time Record</p>
                    </div>
                    <div>
                        <span style="font-family: var(--font-heading); font-size: 2rem; color: var(--color-gold); font-weight: 600;">6.2K+</span>
                        <p style="font-size: 0.8rem; text-transform: uppercase; color: var(--color-text-muted);">Design Community</p>
                    </div>
                </div>
            </div>

            <div style="border-radius: var(--radius-lg); overflow: hidden; height: 500px; border: 1px solid var(--color-border); box-shadow: var(--shadow-lg);">
                <img src="assets/img/posts/site_inspection.png" alt="Chaudhary Associates Studio Culture" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>

        <!-- Principals Section -->
        <div>
            <div style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem;">
                <span class="eyebrow" style="justify-content: center;">Studio Leadership</span>
                <h2 class="section-title">Principal Architects & Partners</h2>
                <p style="color: var(--color-text-secondary);">Directing creative vision and civil construction precision across India.</p>
            </div>

            <div class="founders-grid">
                @foreach($partners as $partner)
                <div class="founder-card">
                    <div class="founder-photo">
                        <img src="{{ $partner['image'] }}" alt="{{ $partner['name'] }}">
                    </div>
                    <div class="founder-details">
                        <span class="founder-role">{{ $partner['role'] }}</span>
                        <h3 class="founder-name">{{ $partner['name'] }}</h3>
                        <p class="founder-bio">{{ $partner['bio'] }}</p>
                        <div class="founder-social">
                            <span>{{ $partner['handle'] }}</span> &bull;
                            <span>Chaudhary Associates</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
