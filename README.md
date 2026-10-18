# Chaudhary Associates — Architecture & Luxury Interior Design

> **"Designing Spaces That Inspire. Delivering Legacies That Last."**  
> Architects • Interior Designers • Planners • Design & Build  
> *Official website inspired by [@designbychaudharyassociates_](https://www.instagram.com/designbychaudharyassociates_/)*

Chaudhary Associates is an architecture, interiors, planning, and design-and-build practice with 261 posts and 6,190 followers on Instagram.

---

## 🏛️ Overview

**Chaudhary Associates** is an architectural and interior design atelier specializing in bespoke residential villas, luxury penthouses, modern duplexes, and commercial sanctuaries. This repository contains the official high-performance web experience featuring rich architectural aesthetics, dynamic interactivity, and signature design tools.

---

## ✨ Key Features

1. **Editorial Hero Showcase & Carousel**
   - Immersive full-viewport architectural hero slider with smooth transitions and project metadata overlays.
   - Quick inquiry triggers with animated CTA buttons.

2. **Within Walls Studio — Interactive Room Design & Wall Color Visualizer**
   - Inspired directly by the studio's Instagram series.
   - **Step 1 (Room Selection)**: Toggle between *Master Bedroom Sanctuary* and *Azure Velvet Sofa Lounge*.
   - **Step 2 (Wall Finish Selection)**: Real-time photorealistic wall updates across 5 signature mineral finishes (*Parisian Alabaster*, *Obsidian Charcoal*, *Tuscan Terracotta*, *Biophilic Sage*, and *Ocean Teal*).
   - Dynamic architectural telemetry badge displaying LRV %, paint formula code, undertone notes, and trim pairings.

3. **Curated Portfolio & Editorial Monograph Lightbox**
   - High-definition project showcase with multi-category filtering (*All*, *Architecture*, *Interior Design*, *Turnkey Build*, *Commercial*).
   - Interactive editorial monograph modals featuring multi-photo galleries, floor plans, and turnkey specs.

4. **Turnkey Budget & Execution Estimator**
   - Interactive cost calculator allowing clients to estimate turnkey investment and timeline based on project typology, built-up area (sq.ft), and finish tier.

5. **Architectural Blueprint & Floorplan Hotspots**
   - Interactive SVG floor plan viewer with interactive pinpoint hotspots showcasing room zones, lighting, and materiality.

6. **Interactive Instagram Story Highlights**
   - Micro-story modal viewer showcasing studio updates, project walkthroughs, and design sketches.

7. **Theme Switcher (Dark & Light Mode)**
   - Dark Obsidian mode for nighttime elegance.
   - Warm Alabaster Light mode for daytime architectural crispness.

---

## 🛠️ Technology Stack

- **Backend**: PHP (Modern OOP / BladeOne Templating Engine)
- **Frontend**: Vanilla CSS (Tailored Design System, Custom Properties, Glassmorphism) & Vanilla JavaScript (Zero bloated frameworks)
- **Architecture**: Component-based layout structure (`views/layouts/`, `views/components/`, `views/pages/`)
- **Assets**: Curated high-resolution architectural photography and vector assets

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.0+
- XAMPP / WAMP or built-in PHP CLI development server

### Running Locally

1. Clone the repository:
   ```bash
   git clone git@github.com:HimonBhuyan/Chaudhary-Associates.git
   cd Chaudhary-Associates
   ```

2. Start the built-in PHP development server:
   ```bash
   php -S 127.0.0.1:8090
   ```

3. Open your browser and navigate to:
   ```
   http://127.0.0.1:8090/
   ```

---

## 📂 Directory Structure

```
├── assets/
│   ├── css/           # Design system tokens and responsive stylesheet
│   ├── js/            # Interaction scripts (Wall Studio, Estimator, Modals, Sliders)
│   └── img/           # Curated architectural imagery, renders, and logos
│       └── within_walls/  # Photorealistic room renders for wall color studio
├── cache/             # Compiled Blade template cache
├── data/              # Projects, services, and studio content data
├── views/
│   ├── layouts/       # Base HTML shell and global metadata
│   ├── components/    # Reusable partials (Navbar, Footer, Modals)
│   └── pages/         # Page templates (Home, Portfolio, Process, Within Walls, etc.)
├── index.php          # Application entry point and view router
├── composer.json      # PHP dependencies (BladeOne)
└── README.md
```

---

## 📜 Credits & License

Designed & Developed for **Chaudhary Associates**. All architectural photography and design concepts belong to Chaudhary Associates.
