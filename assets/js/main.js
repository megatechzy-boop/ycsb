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
