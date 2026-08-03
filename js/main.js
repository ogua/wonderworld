(function () {
  'use strict';

  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- Nav scroll state ---------- */
  var nav = document.getElementById('site-nav');
  if (nav) {
    var onScroll = function () {
      nav.classList.toggle('site-nav--scrolled', window.scrollY > 20);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---------- Mobile menu ---------- */
  var toggle = document.getElementById('site-nav-toggle');
  var mobile = document.getElementById('site-nav-mobile');
  if (toggle && mobile) {
    toggle.addEventListener('click', function () {
      var isOpen = mobile.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', String(isOpen));
    });
    mobile.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobile.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ---------- Scroll reveal ---------- */
  var revealTargets = document.querySelectorAll('[data-reveal]');
  if (revealTargets.length) {
    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
      revealTargets.forEach(function (el) {
        el.classList.add('is-visible');
      });
    } else {
      var io = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              io.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.15, rootMargin: '0px 0px -10% 0px' }
      );
      revealTargets.forEach(function (el) {
        // Anything already on screen at load (e.g. the section right below
        // a page hero, on a short inner page) must appear immediately;
        // waiting on the observer's async threshold left it blank for a
        // few real seconds on first paint. Only content genuinely below the
        // fold gets the animated on-scroll reveal.
        var rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          el.classList.add('is-visible');
        } else {
          el.classList.add('reveal-pending');
          io.observe(el);
        }
      });

      // Safety net: content must never stay permanently invisible if the
      // observer never fires for some reason (stalled script, an unusual
      // embedding/iframe context, a crawler that doesn't scroll). Force
      // everything visible shortly after this script runs, regardless of
      // the page's load state (main.js runs at the end of body, so the
      // `load` event may already have fired by the time we get here).
      setTimeout(function () {
        revealTargets.forEach(function (el) {
          el.classList.add('is-visible');
        });
        io.disconnect();
      }, 1200);
    }
  }

  /* ---------- Hero slide rotation ---------- */
  var heroSlides = document.querySelectorAll('.home-hero__slide');
  var heroDots = document.querySelectorAll('.home-hero__dot');
  if (heroSlides.length > 1) {
    var current = 0;
    var heroTimer = null;
    var HERO_INTERVAL = 6000; // must match the .home-hero__dot-fill animation duration in home.css

    // A reschedulable setTimeout (not setInterval) so a manual dot click
    // always restarts the full 6s countdown, keeping the dot's fill
    // animation an honest reflection of time left until the next slide.
    var scheduleHero = function () {
      if (prefersReducedMotion) return;
      clearTimeout(heroTimer);
      heroTimer = setTimeout(function () {
        goToSlide((current + 1) % heroSlides.length);
      }, HERO_INTERVAL);
    };

    var goToSlide = function (index) {
      heroSlides[current].classList.remove('is-active');
      if (heroDots[current]) heroDots[current].classList.remove('is-active');
      current = index;
      heroSlides[current].classList.add('is-active');
      if (heroDots[current]) heroDots[current].classList.add('is-active');
      scheduleHero();
    };
    heroDots.forEach(function (dot, index) {
      dot.addEventListener('click', function () {
        goToSlide(index);
      });
    });
    scheduleHero();
  }

  /* ---------- FAQ accordion ---------- */
  document.querySelectorAll('.accordion__trigger').forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      var expanded = trigger.getAttribute('aria-expanded') === 'true';
      var panel = document.getElementById(trigger.getAttribute('aria-controls'));
      trigger.setAttribute('aria-expanded', String(!expanded));
      if (panel) panel.setAttribute('data-open', String(!expanded));
    });
  });

  /* ---------- Core values "show more" ---------- */
  var valuesToggle = document.getElementById('values-toggle');
  var valuesMore = document.getElementById('values-more');
  if (valuesToggle && valuesMore) {
    valuesToggle.addEventListener('click', function () {
      var isOpen = valuesMore.classList.toggle('is-open');
      valuesToggle.textContent = isOpen ? 'Show fewer values' : 'See all 8 core values';
      valuesToggle.setAttribute('aria-expanded', String(isOpen));
    });
  }

  /* ---------- Featured video: click-to-play ---------- */
  var videoPlay = document.getElementById('video-play');
  var video = document.getElementById('featured-video');
  if (videoPlay && video) {
    videoPlay.addEventListener('click', function () {
      videoPlay.classList.add('is-hidden');
      video.setAttribute('controls', '');
      video.play();
    });
  }

  /* ---------- Shared AJAX form submit (newsletter, contact, any future form) ----------
     Every form on the site posts to the same partials/mailer.php handler (see
     CLAUDE.md: all forms reach the school's real inbox). This one function
     drives all of them so the success/error/spam-guard logic is written once. */
  function bindAjaxForm(formId, noteId, formType, successMessage) {
    var form = document.getElementById(formId);
    var note = document.getElementById(noteId);
    if (!form || !note) return;

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = form.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      note.dataset.state = '';
      note.textContent = 'Sending…';

      var data = new FormData(form);
      data.append('form_type', formType);

      fetch('partials/mailer.php', { method: 'POST', body: data })
        .then(function (res) {
          return res.json();
        })
        .then(function (json) {
          if (json.ok) {
            note.dataset.state = 'success';
            note.textContent = successMessage;
            form.reset();
          } else {
            note.dataset.state = 'error';
            note.textContent = json.error || 'Something went wrong. Please try again.';
          }
        })
        .catch(function () {
          note.dataset.state = 'error';
          note.textContent = 'Something went wrong. Please try again.';
        })
        .finally(function () {
          submitBtn.disabled = false;
        });
    });
  }

  bindAjaxForm('newsletter-form', 'newsletter-note', 'newsletter', "Thanks, you're on the list.");
  bindAjaxForm('contact-form', 'contact-note', 'contact', "Thanks, we've received your message and will be in touch soon.");

  /* ---------- Gallery: filter + lightbox ---------- */
  var galleryMasonry = document.querySelector('.gallery-masonry');
  if (galleryMasonry) {
    var galleryItems = Array.prototype.slice.call(galleryMasonry.querySelectorAll('.gallery-item'));
    var filterBtns = Array.prototype.slice.call(document.querySelectorAll('.gallery-filters__btn'));

    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterBtns.forEach(function (b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-pressed', 'true');
        var category = btn.dataset.filter;
        galleryItems.forEach(function (item) {
          var show = category === 'all' || item.dataset.category === category;
          item.classList.toggle('is-hidden', !show);
        });
      });
    });

    var lightbox = document.getElementById('lightbox');
    var lightboxImg = document.getElementById('lightbox-img');
    var lightboxCaption = document.getElementById('lightbox-caption');
    var lightboxIndex = 0;

    function visibleItems() {
      return galleryItems.filter(function (item) {
        return !item.classList.contains('is-hidden');
      });
    }

    function openLightbox(item) {
      var items = visibleItems();
      lightboxIndex = items.indexOf(item);
      showLightboxItem(items);
    }

    function showLightboxItem(items) {
      var item = items[lightboxIndex];
      if (!item) return;
      var img = item.querySelector('img');
      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt;
      lightboxCaption.textContent = img.alt;
      lightbox.classList.add('is-open');
    }

    galleryItems.forEach(function (item) {
      item.addEventListener('click', function () {
        openLightbox(item);
      });
    });

    var closeBtn = document.getElementById('lightbox-close');
    if (closeBtn) {
      closeBtn.addEventListener('click', function () {
        lightbox.classList.remove('is-open');
      });
    }

    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox) {
        lightbox.classList.remove('is-open');
      }
    });

    var prevBtn = document.getElementById('lightbox-prev');
    var nextBtn = document.getElementById('lightbox-next');
    if (prevBtn && nextBtn) {
      prevBtn.addEventListener('click', function () {
        var items = visibleItems();
        lightboxIndex = (lightboxIndex - 1 + items.length) % items.length;
        showLightboxItem(items);
      });
      nextBtn.addEventListener('click', function () {
        var items = visibleItems();
        lightboxIndex = (lightboxIndex + 1) % items.length;
        showLightboxItem(items);
      });
    }

    document.addEventListener('keydown', function (e) {
      if (!lightbox.classList.contains('is-open')) return;
      if (e.key === 'Escape') lightbox.classList.remove('is-open');
      if (e.key === 'ArrowLeft' && prevBtn) prevBtn.click();
      if (e.key === 'ArrowRight' && nextBtn) nextBtn.click();
    });
  }

  /* ---------- Testimonials: filter + slider ---------- */
  var testimonialTrack = document.getElementById('testimonial-track');
  if (testimonialTrack) {
    var testimonialCards = Array.prototype.slice.call(testimonialTrack.querySelectorAll('.testimonial-card'));
    var testimonialFilterBtns = Array.prototype.slice.call(document.querySelectorAll('.testimonial-filters__btn'));
    var testimonialPrev = document.getElementById('testimonial-prev');
    var testimonialNext = document.getElementById('testimonial-next');

    function updateTestimonialArrows() {
      var atStart = testimonialTrack.scrollLeft <= 0;
      var atEnd = testimonialTrack.scrollLeft + testimonialTrack.clientWidth >= testimonialTrack.scrollWidth - 1;
      if (testimonialPrev) testimonialPrev.disabled = atStart;
      if (testimonialNext) testimonialNext.disabled = atEnd;
    }

    function testimonialStep() {
      var firstVisible = testimonialCards.filter(function (c) {
        return !c.classList.contains('is-hidden');
      })[0];
      if (!firstVisible) return testimonialTrack.clientWidth;
      var gap = parseFloat(getComputedStyle(testimonialTrack).columnGap || getComputedStyle(testimonialTrack).gap || 0);
      return firstVisible.getBoundingClientRect().width + gap;
    }

    testimonialFilterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        testimonialFilterBtns.forEach(function (b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-pressed', 'true');
        var category = btn.dataset.filter;
        testimonialCards.forEach(function (card) {
          var show = category === 'all' || card.dataset.category === category;
          card.classList.toggle('is-hidden', !show);
        });
        testimonialTrack.scrollTo({ left: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
        updateTestimonialArrows();
      });
    });

    if (testimonialPrev) {
      testimonialPrev.addEventListener('click', function () {
        testimonialTrack.scrollBy({ left: -testimonialStep(), behavior: prefersReducedMotion ? 'auto' : 'smooth' });
      });
    }
    if (testimonialNext) {
      testimonialNext.addEventListener('click', function () {
        testimonialTrack.scrollBy({ left: testimonialStep(), behavior: prefersReducedMotion ? 'auto' : 'smooth' });
      });
    }

    testimonialTrack.addEventListener('scroll', updateTestimonialArrows, { passive: true });
    window.addEventListener('resize', updateTestimonialArrows);
    updateTestimonialArrows();
  }
})();
