@extends('layouts.app')

@section('title', 'Practice Areas & Services | Chaudhary Associates')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 4rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative;">
    <div class="container">
        <span class="eyebrow">Disciplines of Excellence</span>
        <h1 class="section-title" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem;">Practice Areas</h1>
        <p class="section-subtitle" style="margin-bottom: 0;">
            Integrated architectural design, interior architecture, and turnkey civil construction engineered to create enduring value.
        </p>
    </div>
</section>

<!-- Services Grid -->
<section style="padding: 6rem 0;">
    <div class="container">
        <div style="display: flex; flex-direction: column; gap: 4.5rem;">
            @foreach($services as $index => $srv)
            <div style="display: grid; grid-template-columns: {{ $index % 2 === 0 ? '1.2fr 1fr' : '1fr 1.2fr' }}; gap: 3.5rem; align-items: center; padding-bottom: 4.5rem; border-bottom: 1px solid var(--color-border);">
                @if($index % 2 === 0)
                <div>
                    <span class="eyebrow">Practice Area 0{{ $index + 1 }}</span>
                    <h2 style="font-size: 2.2rem; margin-bottom: 0.5rem; font-family: var(--font-heading);">{{ $srv['title'] }}</h2>
                    <p style="font-family: var(--font-serif); font-size: 1.15rem; color: var(--color-gold); font-style: italic; margin-bottom: 1.25rem;">
                        "{{ $srv['subtitle'] }}"
                    </p>
                    <p style="color: var(--color-text-secondary); line-height: 1.7; margin-bottom: 1.75rem;">
                        {{ $srv['summary'] }}
                    </p>

                    <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold); margin-bottom: 1rem;">Core Deliverables</h4>
                    <ul class="pillar-features" style="border: none; padding: 0; margin-bottom: 2rem;">
                        @foreach($srv['deliverables'] as $item)
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <a href="#consultation" class="btn btn-outline btn-sm" data-open-consultation>Inquire About This Service</a>
                </div>
                <div style="border-radius: var(--radius-md); overflow: hidden; height: 420px; border: 1px solid var(--color-border); box-shadow: var(--shadow-md);">
                    <img src="{{ $srv['image'] }}" alt="{{ $srv['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                @else
                <div style="border-radius: var(--radius-md); overflow: hidden; height: 420px; border: 1px solid var(--color-border); box-shadow: var(--shadow-md);">
                    <img src="{{ $srv['image'] }}" alt="{{ $srv['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div>
                    <span class="eyebrow">Practice Area 0{{ $index + 1 }}</span>
                    <h2 style="font-size: 2.2rem; margin-bottom: 0.5rem; font-family: var(--font-heading);">{{ $srv['title'] }}</h2>
                    <p style="font-family: var(--font-serif); font-size: 1.15rem; color: var(--color-gold); font-style: italic; margin-bottom: 1.25rem;">
                        "{{ $srv['subtitle'] }}"
                    </p>
                    <p style="color: var(--color-text-secondary); line-height: 1.7; margin-bottom: 1.75rem;">
                        {{ $srv['summary'] }}
                    </p>

                    <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold); margin-bottom: 1rem;">Core Deliverables</h4>
                    <ul class="pillar-features" style="border: none; padding: 0; margin-bottom: 2rem;">
                        @foreach($srv['deliverables'] as $item)
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <a href="#consultation" class="btn btn-outline btn-sm" data-open-consultation>Inquire About This Service</a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
