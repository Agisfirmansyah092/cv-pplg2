# CV Dashboard Design System

The dashboard presents a class of student developers and their CVs. Its visual direction is a calm, premium light interface with subtle glass surfaces, soft reflections, and selective color glow. It should feel crafted and welcoming—not like a generic AI-generated landing page or a neon-heavy developer tool.

## File structure

- `index.html` is the static main page and displays the class dashboard directly.
- `dashboard.html` is the static class dashboard. Its search and category filters use `script.js`.
- `style.css` contains the shared dashboard and landing-page styles.
- Static CV pages are saved as `src/<student-slug>/cv.html`; Yoga's profile is `src/yoga/index.html`.
- Student photos and other local assets live beside the corresponding profile page and use paths relative to that folder.
- `index.php` redirects PHP-enabled local servers to `index.html`. Other `.php` files are retained as local source/templates. GitHub Pages serves the `.html` files and does not execute PHP.

## Visual principles

- Keep student names, roles, skills, and profile actions more prominent than decoration.
- Use a soft white canvas with translucent white surfaces, fine borders, and restrained inset highlights inspired by polished glass.
- Place cyan, mint, and violet light sparingly: behind the hero, on focused controls, and on active or hovered states.
- Keep the code preview dark as a contained accent surface; the page canvas and profile cards remain light.
- Prefer natural Indonesian copy, meaningful labels, and real class information over invented marketing claims.
- Keep motion quick and purposeful. Respect `prefers-reduced-motion`.

## Tokens

```css
:root {
  --page: #f7f9fc;
  --panel: #ffffff;
  --panel-2: #f0f4f9;
  --line: rgba(39, 62, 91, 0.12);
  --text: #172235;
  --muted: #53647b;
  --dim: #5c6d84;
  --green: #167d68;
  --blue: #3478bd;
  --glass: rgba(255, 255, 255, 0.76);
  --glow-cyan: rgba(77, 190, 224, 0.13);
  --glow-violet: rgba(133, 116, 224, 0.1);
}
```

Use `--text` for names and headings, `--muted` for supporting information, and `--dim` for metadata. Deep mint is the primary interactive accent; blue and violet are secondary light reflections, not competing brand colors.

## Typography

- Use the system sans-serif stack for readable interface text and headings.
- Use the monospace stack only for small technical metadata, profile numbers, and code details.
- Headings should be expressive but restrained, with tight tracking and comfortable line height.
- Avoid uppercase labels for long or important content.

## Surfaces and components

- **Header:** compact, translucent white, and readable over the page backdrop; preserve clear navigation and visible keyboard focus.
- **Primary action:** rounded, high-contrast mint surface with a small highlight and gentle glow. Use it for the main action only.
- **Search and category filters:** provide clear focus, active, and empty states. Filters must remain usable on narrow screens.
- **Student cards:** use a fine border, light glass surface, legible portrait/monogram area, name, role, availability, skills, and one clear link to the CV.
- **Code preview:** retain a darker editor surface to give the light page contrast and preserve code readability.
- **Hover:** a small lift, brighter border, or controlled reflection is enough. Never hide essential actions until hover.
- **Focus:** provide a clearly visible keyboard focus ring with adequate contrast.

## Layout and responsive behavior

- Keep content centered with a comfortable maximum width and generous spacing between sections.
- Display student cards in an auto-fitting grid; reduce to a single column on small screens.
- Allow filter chips to scroll horizontally on mobile without shrinking their tap targets.
- Keep the search input full-width on mobile and ensure the navigation does not crowd the brand.
- Use spacing consistently and avoid dense, dashboard-like micro-panels that compete with the profiles.

## Avoid

- Excessive neon, large blurred glows, strong blur that harms contrast, or constant animated scans.
- Decorative numbers, fabricated student details, or marketing language that distracts from the class directory.
- Tiny low-contrast text, hover-only information, and interaction states communicated only by color.
- Unnecessary gradients on every component; reserve reflections for a few important surfaces.
