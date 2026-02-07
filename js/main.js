/**
 * Werbedruck GM - Premium JavaScript
 * Scroll Animations, Counter, Parallax, Header Effects
 */

document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // Scroll Reveal Animations (IntersectionObserver)
    // ============================================
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

    const revealObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(function(el) {
        revealObserver.observe(el);
    });

    // ============================================
    // Animated Counter
    // ============================================
    const counters = document.querySelectorAll('.counter-number[data-target]');

    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-target'));
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 2000;
        const start = 0;
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(start + (target - start) * eased);
            el.textContent = current + suffix;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = target + suffix;
            }
        }

        requestAnimationFrame(update);
    }

    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(function(counter) {
        counterObserver.observe(counter);
    });

    // ============================================
    // Header Scroll Effect (Glasmorphism on scroll)
    // ============================================
    const header = document.getElementById('siteHeader');
    let lastScroll = 0;

    function handleHeaderScroll() {
        const scrollY = window.scrollY;

        if (scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        lastScroll = scrollY;
    }

    window.addEventListener('scroll', handleHeaderScroll, { passive: true });
    handleHeaderScroll();

    // ============================================
    // Mobile Menu Toggle
    // ============================================
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNav = document.getElementById('mobileNav');

    if (mobileMenuBtn && mobileNav) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenuBtn.classList.toggle('active');
            mobileNav.classList.toggle('open');
            document.body.classList.toggle('menu-open');
        });

        mobileNav.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenuBtn.classList.remove('active');
                mobileNav.classList.remove('open');
                document.body.classList.remove('menu-open');
            });
        });
    }

    // ============================================
    // Back to Top Button
    // ============================================
    const backToTop = document.getElementById('backToTop');

    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }, { passive: true });

        backToTop.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ============================================
    // Smooth Scroll for Anchor Links
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                var offset = header ? header.offsetHeight + 20 : 80;
                var targetPos = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });
            }
        });
    });

    // ============================================
    // Parallax Effect on Hero Background
    // ============================================
    const heroBg = document.querySelector('.hero .hero-bg');

    if (heroBg) {
        window.addEventListener('scroll', function() {
            var scrollY = window.scrollY;
            if (scrollY < window.innerHeight) {
                heroBg.style.transform = 'scale(1.1) translateY(' + (scrollY * 0.3) + 'px)';
            }
        }, { passive: true });
    }

    // ============================================
    // Tilt Effect on Cards (Desktop only)
    // ============================================
    if (window.matchMedia('(min-width: 768px)').matches) {
        document.querySelectorAll('.card').forEach(function(card) {
            card.addEventListener('mousemove', function(e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;
                var centerX = rect.width / 2;
                var centerY = rect.height / 2;
                var rotateX = (y - centerY) / 20;
                var rotateY = (centerX - x) / 20;

                card.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-8px)';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
            });
        });
    }

    // ============================================
    // Cursor Glow Effect (Desktop only)
    // ============================================
    if (window.matchMedia('(min-width: 1024px)').matches) {
        var glow = document.createElement('div');
        glow.className = 'cursor-glow';
        document.body.appendChild(glow);

        document.addEventListener('mousemove', function(e) {
            glow.style.left = e.clientX + 'px';
            glow.style.top = e.clientY + 'px';
        });
    }

    // ============================================
    // Cookie Consent Box
    // ============================================
    var cookieConsent = document.getElementById('cookieConsent');
    var cookieAcceptAll = document.getElementById('cookieAcceptAll');
    var cookieAcceptSelected = document.getElementById('cookieAcceptSelected');
    var cookieRejectAll = document.getElementById('cookieRejectAll');
    var cookieAnalytics = document.getElementById('cookieAnalytics');
    var cookieMarketing = document.getElementById('cookieMarketing');

    function getCookieConsent() {
        try {
            return JSON.parse(localStorage.getItem('wgm_cookie_consent'));
        } catch(e) {
            return null;
        }
    }

    function setCookieConsent(consent) {
        consent.timestamp = new Date().toISOString();
        localStorage.setItem('wgm_cookie_consent', JSON.stringify(consent));
    }

    function hideCookieBox() {
        if (cookieConsent) {
            cookieConsent.style.animation = 'cookieSlideDown 0.4s ease-in forwards';
            setTimeout(function() {
                cookieConsent.style.display = 'none';
            }, 400);
        }
    }

    function showCookieBox() {
        if (cookieConsent) {
            cookieConsent.style.display = 'block';
            cookieConsent.style.animation = 'cookieSlideUp 0.5s ease-out';
        }
    }

    // Check if consent already given
    var existingConsent = getCookieConsent();
    if (!existingConsent && cookieConsent) {
        // Show after 1 second delay
        setTimeout(showCookieBox, 1000);
    }

    if (cookieAcceptAll) {
        cookieAcceptAll.addEventListener('click', function() {
            setCookieConsent({ necessary: true, analytics: true, marketing: true });
            hideCookieBox();
        });
    }

    if (cookieAcceptSelected) {
        cookieAcceptSelected.addEventListener('click', function() {
            setCookieConsent({
                necessary: true,
                analytics: cookieAnalytics ? cookieAnalytics.checked : false,
                marketing: cookieMarketing ? cookieMarketing.checked : false
            });
            hideCookieBox();
        });
    }

    if (cookieRejectAll) {
        cookieRejectAll.addEventListener('click', function() {
            setCookieConsent({ necessary: true, analytics: false, marketing: false });
            hideCookieBox();
        });
    }


});
