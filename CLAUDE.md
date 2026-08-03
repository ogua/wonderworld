# WonderWorld School Website — Complete Redesign

## Project Status

**Implementation is underway** (started 2026-07-29 on explicit user go-ahead). This note was
stale for a while — the lines below describing "only empty scaffold folders" predate a large
build-out. As of 2026-07-29 the site has real PHP pages, shared partials (`partials/head.php`,
`nav.php`, `footer.php`, `page-hero.php`, `icons.php`, `mailer.php`), a CSS token/component
system (`css/tokens.css`, `base.css`, `components.css`, `home.css`), populated `asset/` images
and video, and most of the page inventory below already built with real content. Treat future
work as *continuing* an in-progress build, not starting from scratch — read the actual files
in this directory before assuming something doesn't exist yet.

`workfiles/` holds the raw, unvetted camera-roll source described further below; the site's
served `asset/images/` folder holds already-selected, optimized derivatives — don't confuse
the two when looking for "what images exist."

The **old/existing site** lives at the sibling directory:
`C:\xampp\htdocs\Projects\website\wonderworld` (PHP, has real content/copy across many
pages, plus a git repo). Treat it as the source of truth for existing text content, real
contact details, and logos (`logo.png`, `toplogo.png`) — but not for visual design or brand
color; the redesign should not reuse its CSS/layout or its old palette (see below).

## School Identity (verified from the old site — use as real content, not placeholder)

- Legal/brand name: **Wonder World International School**
- Location: Adjiriganor, East Legon (Father Odai Kwabina Street), GD-210-9384 — Accra, Ghana
- Domain: `wonderworldinternationalschool.com`
- Official contact email: **`wonderworldintsch@gmail.com`** — this is the single destination
  for all site form submissions (see Forms & Email below)
- Principal: Mrs. Jalia Dekyi
- Founded: July 2017, originally launched as a summer camp
- Programs/services (from `our-service.php`): Regular Admission, Summer School, Online
  School, After School Club, Saturday Care, Extra-Curricular Activities (Super Readers
  Club, Swimming, Tennis, Ballet, Abacus with BraiNest). **Discrepancy with the 2026-07-29
  client write-up** (see below): its co-curricular list is robotics, coding, music, ballet,
  karate and abacus — meaningfully different (no swimming/tennis, adds robotics/coding/karate).
  Confirm the current, actually-offered list with the school before publishing either version
  — don't merge/guess a combined list.
- **Old brand palette was gold/mustard (`#cd8d12`) + dark teal (`#103741`)** — not blue.
  The new blue/white/yellow direction is a deliberate rebrand the client is asking for, not
  a continuation of the old identity. Do not pull colors from the old CSS.

### Content source documents (client-provided, 2026-07-29)

Two files in this directory now supersede prior guesswork about site structure and page
copy — treat them as authoritative inputs, same tier as the old site's verified facts above:

- **`nav-structure.txt`** — the client's stated "standard for international-school websites":
  a 10-section site map (Homepage, About the School, Curriculum, Accreditation and Licensing,
  Admissions, Leadership, School Life, Safeguarding and Learner Support, Parent Information,
  Contact) with the essentials expected under each. It supersedes the old flat "Internal pages"
  inventory below — see the rebuilt Site Structure section. Note: the file itself cuts off
  mid-sentence at "A clean main menu could be:" with no menu actually listed after it — the
  literal proposed nav label set was never provided. The Site Structure section below infers
  a main menu from the 10 numbered section headings; confirm the exact final label wording
  with the client rather than treating it as already-approved copy.
- **`write-up.txt`** — full client-drafted page copy for all 10 sections (homepage welcome
  copy, About/vision/mission/values, Curriculum, Accreditation & Licensing, Admissions,
  Leadership, School Life, Safeguarding, Parent Information, Contact). This is real,
  ready-to-use copy — use it verbatim per page rather than paraphrasing or inventing
  alternative copy, subject to the accreditation/licensing wording caveat below.
- **Motto** (from the write-up's homepage copy): *"Integrity and Excellence"* / *"In God We
  Trust"*. Use in the footer and homepage hero per the existing Footer spec below.
- **Vision**: "To empower learners to excel academically and holistically, locally and
  globally, while nurturing leaders grounded in integrity, valuing excellence and dedicated
  to making a positive impact."
- **Mission**: "To provide transformative education that develops academic success, critical
  thinking, problem-solving, leadership and integrity through engaging, learner-centred
  educational experiences."
- **Nine core values**: Global Leadership, Respect, Excellence, Accountability, Teamwork,
  Wonder, Wisdom, Integrity, Service.
- **Curriculum model — exact name matters**: the school's own curriculum is the **"WWIS
  Values-Based Hybrid Curriculum"**, combining elements of the Ghanaian, British and American
  curricula alongside the **Oxford International Curriculum (OIC)**. Update any prior
  reference to a generic "Hybrid Curriculum" page to this full name. See the Accreditation &
  Compliance Language section below before writing any copy that describes OIC status.

## Accreditation & Compliance Language (critical — legal/reputational risk)

The client's `nav-structure.txt` brief is explicit and non-negotiable on this point: *"Use
the precise official wording. Do not describe the school as 'Oxford accredited' unless that
specific accreditation has formally been granted."* The `write-up.txt` copy itself is careful
about this — mirror its wording exactly, don't loosen it for marketing punch:

- **Oxford International Curriculum (OIC)**: the school has *adopted* OIC as part of its
  curriculum and is *"currently progressing through the Oxford International Curriculum
  accreditation process."* It is **not yet accredited**. Never write "Oxford-accredited
  school," "accredited by Oxford," or similar on any page, nav label, meta description, or
  schema.org markup — including on the Curriculum and Accreditation & Licensing pages
  themselves. Use "progressing through accreditation" / "pursuing OIC accreditation."
- **NaSIA (National Schools Inspectorate Authority)**: the write-up says the school *"works
  towards compliance with the standards and requirements of"* NaSIA — this is not the same
  claim as "NaSIA-licensed" or "NaSIA-approved." Don't upgrade the wording. If the school's
  actual current licence status is confirmed separately (see Open Questions), update the
  copy to match reality at that point — don't infer or round up from this planning doc.
- This constraint applies everywhere the school's academic standing is mentioned, not just
  the dedicated Accreditation and Licensing page: homepage hero/trust badges, footer,
  Admissions page, meta descriptions, and any future press/marketing copy.

## Goal

Redesign the entire school website into a modern, premium, world-class educational website
— comparable in quality to international/Cambridge/IB schools and top universities. Every
page must share one consistent design language. The client rejected the current design as
unprofessional and wants a complete visual overhaul, not incremental polish.

## Design Inspiration (reference only — do not copy)

`https://html.rrdevs.net/edcare/index-5.html` is inspiration only, for professionalism,
animation style, spacing, typography, layout rhythm, and UX. The final site must be an
original design with its own identity — no copied markup, class names, or asset reuse from
that template.

The inspiration template (EdCare) is a generic LMS/course marketplace demo with 30
alternate homepages plus a shared set of inner pages. Only some of its inner pages are
relevant to a school site — course/shop/pricing/cart pages are not. Pages worth studying
for layout patterns, mapped to our page inventory:

| EdCare page | Layout patterns worth borrowing | Maps to our page |
|---|---|---|
| `about.html` | Hero with breadcrumb → media/video block + headline → stat counters → 3 feature cards → team preview grid → testimonial → video/opportunity blocks → newsletter CTA | About, Vision & Mission |
| `teachers.html` | Breadcrumb banner → grid of instructor cards (photo, name, role, social links) | Teachers, Management Team |
| `event.html` | Breadcrumb banner → repeating card: image + date badge + time + title + location + "View Details" CTA | Events |
| `contact.html` | Breadcrumb banner + subheading → form (subject select + submit) alongside office-info cards (phone/email, address, hours) → newsletter → footer | Contact |

Note the EdCare pages lean on generic filler copy and duplicate stat blocks ("0k+", "0%") —
that's template laziness to avoid, not a pattern to copy. Take the *structural* idea (e.g.
"breadcrumb banner + card grid" for Teachers), not the literal content or generic copy.
Design each of our internal pages using this same "study the analogous EdCare page for
structure, then build an original layout" approach even for pages EdCare doesn't have
(History, Academics, Admissions, Facilities, legal/policy pages) — for those, follow the
general design system instead.

## Design Process & Skills

The project-scoped **`frontend-design`** skill (`.claude/skills/frontend-design`) applies to
all visual/UI work on this site and should be invoked before producing any page design or
component. Key points from it, specific to this project:

- Explicitly avoid the three generic "AI-default" looks it warns about (warm cream + serif +
  terracotta; near-black + neon accent; broadsheet/newspaper hairline-rule layout) — none of
  these fit a blue/white/yellow school brand anyway, but the risk is defaulting to a generic
  "template" edu-site look instead of a distinctive one built for WonderWorld specifically.
- Before building each page, do the brainstorm → token system → critique → build → critique
  pass the skill describes: name the 4–6 hex palette (anchored on `#1E40AF` blue + white +
  accent yellow), the type pairing, a layout concept (ASCII wireframe is fine), and one
  "signature" element for that page — then check the plan doesn't read as a generic default
  before writing code.
- Ground every page in WonderWorld's real subject matter (its actual programs, campus,
  students, staff from `workfiles/`, and the real facts captured above) rather than
  placeholder LMS-style copy — this is the main failure mode visible in the EdCare
  inspiration pages themselves.
- Respect the skill's quality floor: responsive to mobile, visible keyboard focus, reduced
  motion respected, watch CSS selector specificity conflicts between section-level and
  element-level classes (called out explicitly since this site has many repeating
  section/card patterns).

## Tech Stack

**Plain PHP, no framework** (matches the old site's stack, avoids introducing build tooling
for a static-content marketing site). Use `include`/`require` for shared partials — head/meta,
nav, footer, repeating card markup — so common markup is written once and reused across
pages, the way the old site already did with `nav.php`/`footer.php`. Do **not** carry forward
the old site's cruft pattern of parallel `-old.php` / duplicate files left in place
(`footer-old.php`, `index-old.php`, `indexnn.php`, `our-service-old.php`, etc.) — one
canonical partial per shared component, old versions removed once replaced.

**Content-update workflow is out of scope for this build.** News, Blog, and Events pages
will be static/hardcoded PHP for now — no CMS or admin panel. This is an explicit future
enhancement the client has deferred, not a gap to solve now; don't design in a
database/admin layer prematurely.

## Forms & Email

Every form on the site — contact form, admission/preliminary inquiry, newsletter signup —
must deliver to **`wonderworldintsch@gmail.com`**. No other destination.

- The Contact Us page (per `write-up.txt`) should offer five enquiry types as subject options
  on a single form rather than five separate forms: General Enquiries, Admissions Enquiries,
  Request an Admission Form, Book a School Tour, Schedule an Admissions Consultation — all
  route to the same address; the subject selection just tags the email so staff can triage.
- Use PHP `mail()` or SMTP (e.g. PHPMailer) to send; confirm which is reliable on the actual
  production host before launch — `mail()` frequently fails silently on shared hosting and
  needs local mail-catching for testing under XAMPP.
- Add basic spam protection (honeypot field and/or CAPTCHA) since this address is public.
- Show a clear on-page success/error state after submission — don't just redirect silently.

## SEO & Social

The old site already set per-page `<title>` and a `schema.org` `WebPage` JSON-LD block on
every page (with a shared `banner.jpg` OG-style image) — the redesign should keep that
discipline and go further:

- Per-page unique `<title>` and meta description; canonical URL tag on every page.
- Structured data: `schema.org` **`EducationalOrganization`** (with real address, email,
  founding date) on the homepage — an upgrade from the old site's generic `WebPage` schema
  — plus `WebPage`/`Article` schema on content pages and `Event` schema on the events page.
- Open Graph + Twitter Card tags on every page, with a proper share image (replace the old
  single reused `banner.jpg` with per-section imagery where it makes sense).
- `sitemap.xml` and `robots.txt` at the site root.
- Favicon + apple-touch-icon + a dedicated social-share image, all derived from the new
  logo/brand once designed (old site's `logo.png`/`toplogo.png` are legacy branding —
  confirm with the client whether the logo itself is being redesigned too).

## Assets Policy

- Use only real assets from `workfiles/` (school/student/staff/campus images, logos,
  videos) once populated. Never substitute stock/placeholder imagery if a suitable real
  asset exists.
- Use provided videos for hero backgrounds, campus tour sections, and promotional/video
  popup sections.
- If `workfiles/` is still empty when implementation starts, flag it — don't fabricate
  images.

### Workfiles inventory (checked 2026-07-17) and asset vetting rules

`workfiles/` has since been populated: `workfiles/images/` holds 1,695 JPGs (~2.0GB total,
camera filenames `IMG_0001.jpg`–`IMG_9998.jpg` with gaps, dated Dec 2025 — real event/campus/
student photography) and `workfiles/videos/` holds one file, `wonder-world.mp4` (15MB).

This is a raw, unsorted camera-roll dump, not a curated set — verified issues found by an
automated pass (exact MD5 hashing + perceptual/average-hash similarity), each spot-checked
by actually viewing the flagged images rather than trusting the hash alone:

- **7 files inside `workfiles/images/` are not new school photography at all** —
  `logo.jpg`, `logo.png`, `logo-medium.png`, `toplogo.psd`, `favicon.ico`, `blog.jpg`,
  `test.png` are byte-for-byte the same files as `wonderworld/assets/images/*` on the old
  site, evidently carried along in the same copy/export as the real photos. Don't treat
  these as freshly-provided real content: `logo*`/`toplogo.psd`/`favicon.ico` are the same
  legacy brand files already discussed above (subject to the logo-redesign open question),
  and `blog.jpg`/`test.png` look like old-template placeholder art — they must **not** be
  used per the no-placeholder-imagery rule already in this doc.
- **One true exact duplicate**: `IMG_3589.jpg` and `IMG_3589(1).jpg` are MD5-identical —
  the `(1)` copy is a redundant re-copy and can be dropped.
- **~74 small clusters (2–8 images each, ~110 files) of near-identical burst shots** — same
  scene taken seconds apart. Spot-checked (e.g. `IMG_6524.jpg` vs `IMG_6525.jpg`: same three
  students on a sports-day medal podium) and confirmed these are visually near-identical —
  but *not* interchangeable: that pair actually differs in a meaningful way (one frame
  posing, the next showing the medals to camera). This is the concrete reason burst-mode
  clusters can't be auto-collapsed to "keep one, delete the rest" — treat them as **review
  candidates**, not automatic duplicates.
- Caveat on method: a looser similarity pass also produced two very large clusters (300+ and
  100+ images) grouped by overall lighting/background similarity across an entire event —
  that is **not** reliable duplicate evidence (it's "same session," not "same shot") and is
  excluded from the findings above. Don't treat "shot at the same event" as "duplicate."

**Hard rule for implementation** (this is the actual point, not just cleanup trivia): no
image gets wired into a page by filename pattern, folder sweep, or bulk copy. Every image
that ends up on a page must be individually opened and viewed first, so what it actually
shows (who/what/event/context, framing, quality) is confirmed rather than assumed from the
camera filename — don't pick blind. Keep a running per-page asset manifest (filename → one-
line description of what's actually in the shot → page/section it's used on) so selections
are traceable and don't need to be re-guessed later.

**Size/perf consequence**: raw camera JPEGs here average ~1.2MB each and are not web-ready
as-is. Every image actually selected for use must be resized/compressed to fit the ≤300KB
budget already defined under Performance budget below — `workfiles/` stays the untouched
raw source; only optimized derivatives go into the site's served asset folders.

**Video gap**: only one video exists (`wonder-world.mp4`, 15MB), but the brief calls for
hero background + campus tour + promotional sections. One video can't credibly cover all
three uses well — confirm with the client whether more footage is coming before committing
to a video-heavy homepage design.

### Media & consent

The site (old and new) leans heavily on real student and staff photos across galleries and
marketing sections. Before publishing any student imagery on the redesigned site, confirm
with the client whether existing parental consent covers this reuse, and whether any
students are flagged as opt-out. Don't assume old-site usage implies blanket consent for a
newly launched site with a wider footprint (better SEO/social sharing means more reach).

## Brand & Design System

**Color palette** — primary blue, white, accent yellow only. White should dominate; yellow
is reserved for CTAs, highlights, stats, small accents, and icons — never overused.

Primary blue is derived from this gradient (used as hero/overlay treatment):

```css
linear-gradient(90deg,
  rgba(30,64,175,0.92) 0%,
  rgba(30,64,175,0.88) 35%,
  rgba(30,64,175,0.15) 60%,
  transparent 100%)
```

Extracted primary blue: `rgb(30,64,175)` = `#1E40AF`. Use this consistently as the single
source-of-truth brand blue (equivalent to Tailwind `blue-800`).

Accent yellow was left unspecified in the brief — proposed value: **`#FACC15`** (a clean,
saturated yellow that reads clearly as an accent against both `#1E40AF` and white, and is
visibly distinct from the old site's mustard/gold `#cd8d12`, reinforcing the rebrand). The
client has since supplied the real redesigned logo (see below) and it contains no yellow at
all — pure blue (`#0000FE`-ish) and white — so this proposed yellow doesn't need to match
anything in the mark itself; kept as the working accent value.

**Real logo received (2026-07-17)**: the client replaced `asset/logo.png` and
`asset/toplogo.png` with the school's actual redesigned circular badge logo — blue and white,
"WONDER WORLD INT. SCHOOL — Excellence & Integrity," 1600×1600px, already in the new brand
direction. This resolves the "is the logo being redesigned" open question below. Note the
logo's own blue (`rgb(0,0,254)`, a vivid pure blue) is more saturated than the site's chosen
`#1E40AF` (a muted navy derived from the brief's exact gradient formula) — kept `#1E40AF` as
the UI/chrome color since the brief specified it precisely, and the two blues still read as
clearly related; the logo itself doesn't need to pixel-match site chrome. A trimmed web
derivative lives at `asset/images/logo-mark.png`.

**Typography** — modern Google Fonts (e.g. Poppins, Outfit, Manrope, Plus Jakarta Sans).
Bold headings, readable body copy, deliberate line-height/spacing.

**Visual language** — generous whitespace, rounded corners, subtle shadows, smooth hover
animations (fade up/left/right, zoom, slide, parallax, hover-lift, image-zoom, counters),
professional iconography, no clutter. Same spacing/buttons/shadows/radius/icon
style/hover-effects must repeat identically across every page and component — implement as
shared CSS custom properties/variables (colors, spacing scale, radius, shadow) included on
every page via the shared head partial, not re-declared per page.

**Responsive breakpoints** (define explicitly so "pixel-perfect on every device" is
checkable, not aspirational):
- Mobile: up to 575px
- Large mobile / small tablet: 576–767px
- Tablet: 768–991px
- Laptop: 992–1199px
- Desktop: 1200–1439px
- Large screens: 1440px+

**Performance budget**:
- Target Lighthouse performance/SEO/accessibility scores ≥ 90 on the homepage.
- Hero images optimized/served responsively (srcset); no single page-load image over
  ~300KB.
- Hero videos: compressed, muted, `autoplay loop playsinline`, with a static poster image
  as the actual first paint (video swaps in after load) — never block first paint on video.
- On mobile / reduced-data conditions, prefer the poster image over autoplaying video.
- Respect `prefers-reduced-motion`: fall back to the static poster/image and disable
  scroll-triggered/parallax animation for users who request it.

## Site Structure

**Superseded 2026-07-29**: the client's `nav-structure.txt` (their stated "standard for
international-school websites") replaces the previously-drafted flat page inventory below.
The old inventory's real pages/content aren't discarded — each is remapped into one of the
10 new top-level buckets so nothing existing gets dropped, but the *navigation and grouping*
now follows the client standard rather than the old site's flat structure.

**Navigation**: sticky, transparent-over-hero → solid white on scroll, mega menu if
warranted, smooth animation, responsive mobile menu. Main menu (inferred from
`nav-structure.txt`'s 10 numbered sections — confirm exact final label wording with the
client, since the source file cuts off before listing an explicit menu string):

Home · About the School · Curriculum · Accreditation & Licensing · Admissions · Leadership ·
School Life · Safeguarding & Learner Support · Parent Information · Contact Us

**Homepage sections** (in a premium, connected flow) — updated to surface the write-up's
real motto/vision/mission/values/curriculum-name rather than generic placeholders: hero
(welcome copy + motto "Integrity and Excellence" / "In God We Trust"), about the school,
principal's welcome, vision, mission, core values (the 9 values), curriculum highlight (WWIS
Values-Based Hybrid Curriculum + OIC — worded per the Accreditation & Compliance Language
section above), admissions, programs/co-curricular offered, why choose us, campus
facilities, gallery preview, school statistics, testimonials, upcoming events, latest news,
school video, achievements, partners, FAQs, CTA, Google map, contact info, footer.

**Internal pages**, grouped under the client's 10-section standard (each page still needs a
hero banner, breadcrumb, consistent spacing/typography per the general design system):

1. **Home** — see Homepage sections above.
2. **About the School** — folds in the old site's History, Vision & Mission, and Principal's
   Message pages: school history, vision, mission, core values, Principal/Head of School
   welcome message, what makes the school different.
3. **Curriculum** — replaces the old "WWIS Hybrid Curriculum" page with its full name (WWIS
   Values-Based Hybrid Curriculum): curriculum followed including OIC, subjects and learning
   approach, Early Years/Primary/other levels, assessment and reporting, co-curricular
   activities (see the programs-list discrepancy flagged under School Identity above).
4. **Accreditation and Licensing** — new page, not in the old site's inventory: OIC
   accreditation status, NaSIA licensing status, partnerships/affiliations, certificates —
   copy must follow the Accreditation & Compliance Language rules above exactly.
5. **Admissions** — merges the old site's Admissions / Admission Requirements / Admissions &
   Curricular Process pages: admissions process, entry ages/classes, required documents, fees
   or how to request the fee schedule, application form + tour booking.
6. **Leadership** — folds in the old site's Teachers and Management Team pages: Director/Head
   of School, board/governance structure, academic leadership team, short professional
   profiles. Only the Principal (Mrs. Jalia Dekyi) is currently verified — board/governance
   structure and other leadership profiles are still needed (see Open Questions).
7. **School Life** — folds in Gallery (photo + video), Excursions, Career Day, School
   Premises, Events, and Facilities (Library, ICT Lab, Science Lab, Sports, Clubs) from the
   old site's scattered "services/gallery" cluster: school hours, uniforms, meals/transport/
   after-school care, clubs/competitions/trips/events.
8. **Safeguarding and Learner Support** — new top-level page: child protection statement,
   safeguarding contact, anti-bullying procedures, SEN/learner wellbeing support. Anti-
   Bullying content carries over from the old site (see Legal & compliance pages below);
   the formal Child Protection policy document itself is still pending (see Open Questions).
9. **Parent Information** — new top-level page, folds in Downloads and FAQs: school calendar,
   parent handbook, attendance/behaviour/fee policies, communication and complaints
   procedures.
10. **Contact Us** — general enquiries, admissions enquiries, request an admission form, book
    a school tour, schedule an admissions consultation (all as subject options on one contact
    form, all routing to `wonderworldintsch@gmail.com` per Forms & Email below); full address
    + map; phone/mobile/WhatsApp numbers (currently placeholders in the write-up — see Open
    Questions); email; social links (Facebook, Instagram, LinkedIn, YouTube, WhatsApp); office
    hours (Mon–Fri, 8:00 a.m.–4:00 p.m.).

News/Blog isn't one of the client's 10 sections but remains in scope per the existing
Tech Stack note (static/hardcoded PHP, no CMS) — surface it from the homepage/footer rather
than the main nav. Testimonials likewise stays as a homepage section/shared component rather
than a dedicated main-nav page, matching the new standard.

**Legal & compliance pages** (footer-linked, not main-nav items — required given the site
collects parent/child personal data via forms and publishes student imagery):

- Privacy Policy — **new**, required for form data collection
- Terms of Use — **new**
- Safeguarding / Child Protection Policy — surfaced via the new "Safeguarding and Learner
  Support" nav page above; confirm with the client whether a formal policy document already
  exists offline to adapt, rather than drafting from scratch
- Anti-Bullying Policy — carried over from the old site's `anti-bullying-policy.php`
- Health & Safety / COVID Protocols — carried over from `covid-protocols.php`; confirm with
  the client whether this content is still current or needs updating before reuse
- Student & Staff Responsibility and Dress Code — carried over from
  `student-and-staff-responsibility-and-dress-code.php`

**Shared components to (re)build consistently**: cards, buttons, forms, dropdowns,
pagination, testimonials, gallery (filterable masonry + lightbox + lazy loading +
categories), accordions, counters, pricing-style cards, timelines, tables, nav, footer,
sidebar, newsletter signup, search, modals.

**Footer**: multi-column — quick links, admissions, contact (address/phone/email/WhatsApp),
social media (Facebook, Instagram, LinkedIn, YouTube, WhatsApp), school motto ("Integrity
and Excellence" / "In God We Trust"), newsletter, copyright.

## Non-functional requirements

- Fully responsive/pixel-perfect across mobile, tablet, laptop, desktop, large screens per
  the breakpoints above — no overlap or broken layouts.
- Performance per the budget above: lazy loading, compressed assets, efficient modern
  HTML/CSS/JS, fast load.
- SEO-friendly and accessible per the SEO & Social section above.
- Production-ready code: assets organized (CSS/JS/images/fonts/components separated),
  reusable PHP partials, no duplication, comments only on non-obvious/complex logic.

## Open questions to resolve before implementation

- Confirm real location/inventory of media assets for `workfiles/`. (Now populated — see
  Workfiles inventory above — but confirm whether the 7 old-site-matching files found mixed
  into `workfiles/images/` were an accidental copy artifact or intentional, and whether more
  video footage beyond the single `wonder-world.mp4` is coming.)
- ~~Confirm whether the logo/brand mark itself is being redesigned~~ — resolved 2026-07-17,
  see "Real logo received" note above.
- Confirm parental consent status for student imagery before publishing galleries.
- **Safeguarding/Child Protection policy — still open (2026-07-17)**: `safeguarding-policy.php`
  now exists but deliberately does *not* contain a fabricated procedural policy. It states the
  school's real general commitment, links to the real Anti-Bullying/Health & Safety pages, and
  is honest that the full formal document is pending — with a direct contact path for anyone
  who wants it now. Replace that placeholder once the school confirms whether a formal
  document already exists to adapt, or drafts one (not to be invented by the implementer).
- ~~Anti-Bullying / Health & Safety / Dress Code policy pages~~ — resolved 2026-07-17. Anti-Bullying
  and Dress Code carried over verbatim from the old site's real content. Health & Safety
  deliberately does **not** carry over the old "Covid Protocols" page — it referenced
  Delta-variant-era guidance from 2021 and would be actively misleading presented as current in
  2026 — instead it uses the school's general, evergreen Health Programme/Illness/Emergency
  policy text, which was real and undated in the source. Confirm with the school whether a
  current infectious-illness protocol should be added.
- ~~Privacy Policy / Terms of Use~~ — resolved 2026-07-17. Drafted as standard pages grounded
  in what the site actually does (only collects name/email/message via the contact form and
  email via newsletter signup; no analytics/ad tracking; Google Maps embed is the one
  third-party exception, disclosed as such). Have the school's own legal counsel review before
  launch, as with any drafted legal text.
- Confirm hosting environment (to decide `mail()` vs SMTP for form delivery, and whether
  `wonderworldinternationalschool.com` is the live domain to design against for canonical
  URLs/sitemap — `sitemap.xml`/`robots.txt` are now in place assuming that domain).
- **2026-07-29, second pass**: user explicitly confirmed `write-up.txt` is the *updated* copy and
  the old site's narrative/positioning content is outdated — not just a supplementary document.
  Acted on this by replacing (not just layering onto) the old-site-derived philosophy/positioning
  language across `index.php`, `about.php`, `admissions.php`, `safeguarding-policy.php`,
  `school-life.php`, `management-team.php`, and `hybrid-curriculum.php` with write-up's actual
  wording (Who We Are, Educational Philosophy, Admissions Process/Inclusive Admissions/Partnering
  with Families, Safeguarding framework, School Life lists, Leadership purpose/educator
  development, Teaching & Learning/Wellbeing/Inclusive Learning). **Judgment call, not literal
  "delete everything old"**: kept the old site's operational specifics that write-up.txt doesn't
  address at all and doesn't contradict — GHS fees, the 7-step admission process, document
  checklists, specific after-school hourly rates, school hours/term dates. Those are real
  transactional facts with no write-up.txt equivalent; deleting them would have made the site less
  complete, not more accurate. If this reading is wrong and the client wants those operational
  specifics reviewed/replaced too, that needs a separate real source, not inference from
  write-up.txt's silence on them.
- **From `write-up.txt` (2026-07-29) — updated after implementation pass same day:**
  - ~~Real telephone/WhatsApp numbers~~ — resolved: the already-built site has real, working
    numbers (`+233 55 823 0501` primary/WhatsApp, plus two more on the Contact page) and a
    real Instagram handle (`@wonderworldschoolgh`), independent of the write-up's
    placeholders. Facebook/LinkedIn/YouTube links are still **not** verified — don't add
    those platforms to the footer/contact page until real URLs are confirmed; fabricated
    social links are worse than no link.
  - Confirm actual current OIC accreditation status and NaSIA licensing status in precise
    terms. `accreditation-licensing.php` now exists and uses the write-up's exact
    "progressing through" / "works towards compliance" wording per the Accreditation &
    Compliance Language rules — if status changes, get updated wording from the client
    rather than editing the claim ourselves.
  - Board/governance structure and academic leadership team profiles are still not provided
    — only the Principal (Mrs. Jalia Dekyi) is verified. `management-team.php` (now the
    "Leadership" nav page) has an honest empty-state for this rather than fabricated names.
    Request names/titles/short bios and any headshots (subject to Media & consent above).
  - Co-curricular activities list still conflicts between the old site (Super Readers Club,
    Swimming, Tennis, Ballet, Abacus with BraiNest — currently what's live in `index.php`'s
    Programs section) and the write-up (robotics, coding, music, ballet, karate, abacus).
    Deliberately left unresolved/unmerged during the 2026-07-29 implementation pass — confirm
    the current real offering before changing what's published.
  - ~~`nav-structure.txt`'s missing "clean main menu" list~~ — implemented anyway: `nav.php`
    now uses the 10-section IA inferred from the section headings (Home / About the School /
    Curriculum / Accreditation & Licensing / Admissions / Leadership / School Life /
    Safeguarding & Learner Support / Parent Information / Contact Us). Still worth a final
    label-wording confirmation with the client, but it's live, not just planned.
  - `testimonials.php` still contains clearly-marked placeholder quotes ("Parent Name",
    "Replace with a real parent quote...") — pre-existing, not touched in this pass. Do not
    let this page go live/get more prominent placement (it's currently only linked from the
    footer) until real, attributed quotes replace the placeholders.
