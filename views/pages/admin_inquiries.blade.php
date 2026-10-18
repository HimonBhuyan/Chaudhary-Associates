@extends('layouts.app')

@section('title', 'Studio Leads & Inquiries | Chaudhary Associates Portal')

@section('content')

<!-- Header Banner -->
<section style="padding: 9rem 0 3rem; background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); position: relative;">
    <div class="container">
        <span class="eyebrow">Studio Internal Portal</span>
        <h1 class="section-title" style="font-size: clamp(2.2rem, 4vw, 3.2rem); margin-bottom: 0.5rem;">Client Consultation Inquiries</h1>
        <p style="color: var(--color-text-secondary);">
            Real-time inquiries received from prospective clients via the website booking forms and calculators.
        </p>
    </div>
</section>

<!-- Leads Table -->
<section style="padding: 4rem 0 6rem;">
    <div class="container">
        @if(empty($inquiries))
        <div style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 4rem 2rem; text-align: center;">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--color-gold)" stroke-width="1.5" style="margin-bottom: 1rem;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem;">No Inquiries Yet</h3>
            <p style="color: var(--color-text-secondary); max-width: 500px; margin: 0 auto 1.5rem;">
                When prospective clients book a consultation or request a BOQ through the site, their submissions will be displayed here in real time.
            </p>
            <a href="index.php#consultation" class="btn btn-primary btn-sm" data-open-consultation>Submit Test Consultation</a>
        </div>
        @else
        <div style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-md); overflow-x: auto; box-shadow: var(--shadow-md);">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem;">
                <thead>
                    <tr style="background: var(--color-bg-alt); border-bottom: 1px solid var(--color-border); text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.1em; color: var(--color-gold);">
                        <th style="padding: 1.25rem 1.5rem;">Date & Time</th>
                        <th style="padding: 1.25rem 1.5rem;">Client Name</th>
                        <th style="padding: 1.25rem 1.5rem;">Phone / WhatsApp</th>
                        <th style="padding: 1.25rem 1.5rem;">Email</th>
                        <th style="padding: 1.25rem 1.5rem;">Typology</th>
                        <th style="padding: 1.25rem 1.5rem;">Area / Location</th>
                        <th style="padding: 1.25rem 1.5rem;">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inquiries as $inq)
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <td style="padding: 1.25rem 1.5rem; color: var(--color-text-muted); font-size: 0.8rem; white-space: nowrap;">
                            {{ $inq['timestamp'] }}
                        </td>
                        <td style="padding: 1.25rem 1.5rem; font-weight: 600; color: var(--color-text-primary);">
                            {{ $inq['name'] }}
                        </td>
                        <td style="padding: 1.25rem 1.5rem;">
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inq['phone']) }}" target="_blank" style="color: var(--color-gold); font-weight: 500;">
                                {{ $inq['phone'] }}
                            </a>
                        </td>
                        <td style="padding: 1.25rem 1.5rem; color: var(--color-text-secondary);">
                            <a href="mailto:{{ $inq['email'] }}">{{ $inq['email'] }}</a>
                        </td>
                        <td style="padding: 1.25rem 1.5rem;">
                            <span style="background: var(--color-bg-alt); padding: 0.3rem 0.6rem; border-radius: var(--radius-sm); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; border: 1px solid var(--color-border);">
                                {{ str_replace('_', ' ', $inq['project_type']) }}
                            </span>
                        </td>
                        <td style="padding: 1.25rem 1.5rem; color: var(--color-text-secondary);">
                            {{ $inq['area'] ?? '-' }} &bull; {{ $inq['location'] ?? '-' }}
                        </td>
                        <td style="padding: 1.25rem 1.5rem; color: var(--color-text-secondary); max-width: 250px;">
                            {{ $inq['notes'] ?? '-' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</section>

@endsection
