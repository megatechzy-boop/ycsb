// Yashwantrao Chavan Smruti Bhavan - site interactions
(function () {
    const toMarathi = (n) => String(n).replace(/\d/g, (d) => '०१२३४५६७८९'[d]);

    // Mobile menu
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.main-nav');
    toggle?.addEventListener('click', () => {
        const open = nav.classList.toggle('open');
        toggle.setAttribute('aria-expanded', open);
    });

    // Dropdowns (click for touch / keyboard)
    document.querySelectorAll('.dropdown-toggle').forEach((btn) => {
        btn.addEventListener('click', () => {
            const li = btn.parentElement;
            const open = li.classList.toggle('open');
            btn.setAttribute('aria-expanded', open);
        });
    });
    document.addEventListener('click', (e) => {
        document.querySelectorAll('.has-dropdown.open').forEach((li) => {
            if (!li.contains(e.target)) {
                li.classList.remove('open');
                li.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false');
            }
        });
    });

    // Close mobile menu after choosing an in-page link
    nav?.querySelectorAll('a').forEach((a) => a.addEventListener('click', () => {
        nav.classList.remove('open');
        toggle?.setAttribute('aria-expanded', 'false');
    }));

    // Count-up numbers in Marathi digits
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const countUp = (el) => {
        const target = +el.dataset.count;
        const start = performance.now();
        const step = (now) => {
            const p = Math.min((now - start) / 1400, 1);
            el.textContent = toMarathi(Math.round(target * (1 - Math.pow(1 - p, 3))));
            if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    };

    // Reveal on scroll
    const revealTargets = document.querySelectorAll('.section-head, .card, .hall-card, .student-card, .timeline li, .partner-list li, .about-grid > *, .statue-grid > *');
    if ('IntersectionObserver' in window && !reduceMotion) {
        revealTargets.forEach((el) => el.classList.add('reveal'));
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('visible');
                io.unobserve(entry.target);
            });
        }, { threshold: 0.15 });
        revealTargets.forEach((el) => io.observe(el));

        const factsIo = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.querySelectorAll('[data-count]').forEach(countUp);
                factsIo.unobserve(entry.target);
            });
        }, { threshold: 0.4 });
        document.querySelectorAll('.facts').forEach((el) => factsIo.observe(el));
    }

    // 3D tilt of the hero statue following the pointer
    const stage = document.querySelector('.stage-3d');
    const hero = document.querySelector('.hero');
    if (stage && hero && !reduceMotion && window.matchMedia('(hover: hover)').matches) {
        hero.addEventListener('pointermove', (e) => {
            const r = hero.getBoundingClientRect();
            const x = (e.clientX - r.left) / r.width - 0.5;
            const y = (e.clientY - r.top) / r.height - 0.5;
            stage.style.setProperty('--ry', (x * 16).toFixed(2) + 'deg');
            stage.style.setProperty('--rx', (-y * 8).toFixed(2) + 'deg');
        });
        hero.addEventListener('pointerleave', () => {
            stage.style.setProperty('--ry', '0deg');
            stage.style.setProperty('--rx', '0deg');
        });
    }

    // Gallery page category filter
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const cat = btn.dataset.filter;
            filterBtns.forEach((b) => {
                b.classList.toggle('active', b === btn);
                b.setAttribute('aria-pressed', b === btn);
            });
            document.querySelectorAll('.masonry-item').forEach((item) => {
                item.hidden = cat !== 'all' && item.dataset.cat !== cat;
            });
        });
    });

    // Gallery lightbox
    const lightbox = document.querySelector('.lightbox');
    const lbImg = lightbox?.querySelector('img');
    const closeLightbox = () => { lightbox.hidden = true; lbImg.src = ''; };
    document.querySelectorAll('.gallery-item').forEach((item) => {
        item.addEventListener('click', () => {
            lbImg.src = item.dataset.full;
            lbImg.alt = item.querySelector('img').alt;
            lightbox.hidden = false;
            lightbox.querySelector('.lightbox-close').focus();
        });
    });
    lightbox?.addEventListener('click', (e) => { if (e.target !== lbImg) closeLightbox(); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && lightbox && !lightbox.hidden) closeLightbox(); });

    // Pre-select inquiry type from CTA buttons
    document.querySelectorAll('[data-interest]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const select = document.querySelector('.inquiry-form select[name="interest"]');
            if (select) select.value = btn.dataset.interest;
        });
    });
})();
