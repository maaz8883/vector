

$('.logo-slider .owl-carousel').owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  dots: false,
   lazyLoad: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplaySpeed: 1000,
  autoplayHoverPause: false,
  responsive: {
    0:    { items: 2 },
    576:  { items: 3 },
    768:  { items: 4 },
    1024: { items: 6 }
  }
});
// Staggered stack reveal — each row slides up when scrolled into view
const stackRows = document.querySelectorAll('.project-boxes .stack-row');

const stackObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      stackObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

stackRows.forEach(row => stackObserver.observe(row));

// ── RUNNING COUNTERS ──
// Fires once when the about-counters section scrolls into view
var countersDone = false;

var counterObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting && !countersDone) {
            countersDone = true;

            // Integer counters
            document.querySelectorAll('.counter').forEach(function(el) {
                var target = parseInt(el.getAttribute('data-target'), 10);
                var duration = 1800;
                var start = null;
                function step(timestamp) {
                    if (!start) start = timestamp;
                    var progress = Math.min((timestamp - start) / duration, 1);
                    // ease out
                    var eased = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.floor(eased * target);
                    if (progress < 1) requestAnimationFrame(step);
                    else el.textContent = target;
                }
                requestAnimationFrame(step);
            });

            // Decimal counter (4.9)
            document.querySelectorAll('.counter-decimal').forEach(function(el) {
                var target = parseFloat(el.getAttribute('data-target'));
                var duration = 1800;
                var start = null;
                function step(timestamp) {
                    if (!start) start = timestamp;
                    var progress = Math.min((timestamp - start) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    el.textContent = (eased * target).toFixed(1);
                    if (progress < 1) requestAnimationFrame(step);
                    else el.textContent = target.toFixed(1);
                }
                requestAnimationFrame(step);
            });

            counterObserver.disconnect();
        }
    });
}, { threshold: 0.3 });

var countersEl = document.querySelector('.about-counters');
if (countersEl) counterObserver.observe(countersEl);
// Animations call 

// AOS.init({
//     duration: 1200,
//     once: true,
// })

// new WOW().init();


// end Animation 






// counter start at six-wrap class 
// JS 

// $(window).on('scroll', function () {
//     if ($(window).scrollTop() >= $('.six-wrap').offset().top + $('.six-wrap').outerHeight() - window.innerHeight){
//         counterrr();
//     }
// });


// function counterrr() {
//     $('.counter').each(function () {
//         $(this).prop('Counter', 0).animate({
//             Counter: $(this).text()
//         }, {
//             duration: 3000,
//             easing: 'swing',
//             step: function (now) {
//                 $(this).text(Math.ceil(now));
//             }
//         });
//     });
//     $('.counter1').removeClass('counter');
// }

// close 











// scroll behavior 
// window.scroll({
//     behavior: 'smooth'
// });




// collapse hide on complete body click expert header-menulink-main 

// $(document).on('click', function (event) {
//     if (!$(event.target).closest('.header-menulinks-main').length) {
//         $('.collapse').collapse('hide');
//     }
// });


// inner click closing in  industry-inner class 

// $(".industry-inner").click(function () {
//     $('.collapse').collapse('hide');
// });

// RESPONSIVE NAVIGATION
// OPEN BTN
$(document).ready(function () {
    $("#navbar").on("click", function() {
      $(".nveMenu").addClass("is-opened");
      $(".overlay").addClass("is-on");
    });

    $(".overlay").on("click", function() {
      $(this).removeClass("is-on");
      $(".nveMenu").removeClass("is-opened");
    });

    // Mobile nav — tap "Our Services" to expand/collapse dropdown
    $(".mobile-menu .nav-has-dropdown > a").on("click", function(e) {
        e.preventDefault();
        $(this).closest(".nav-has-dropdown").toggleClass("open");
    });
  });
// CLOSE BTN
  $(".overlay").on("click", function() {
    $(this).removeClass("is-on");
    $(".nveMenu").removeClass("is-opened");
  });

  $(".close-btn-nav").click(function(){
  $(".nveMenu").removeClass("is-opened");
  $(".overlay").removeClass("is-on");
  });
  // RESPONSIVE NAVIGATION

$('.classname .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    animateOut: 'fadeOut',
    autoplayHoverPause: false,
    lazyLoad: true,
    autoplayTimeout: 5000,
    autoplay: true,
    pagination: false,
    dots: true,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
  });

// ── SERVICES IMAGE FADE SLIDER ──
(function () {
    document.querySelectorAll('.svc-slider').forEach(function (slider) {
        var pairs = slider.querySelectorAll('.svc-pair');
        if (!pairs.length) return;
        var current = 0;
        setInterval(function () {
            pairs[current].classList.remove('active');
            current = (current + 1) % pairs.length;
            pairs[current].classList.add('active');
        }, 2000);
    });
})();

// ── SERVICES STICKY STACK — dynamic top/z-index for unlimited cards ──
(function () {
    var BASE_TOP = 90;   // px from top of viewport for first card
    var STEP     = 10;   // px increment per card
    document.querySelectorAll('.services-box').forEach(function (box, i) {
        box.style.top    = (BASE_TOP + i * STEP) + 'px';
        box.style.zIndex = i + 1;
    });
})();








  let mybutton = document.getElementById("btn-back-to-top");

// When the user clicks on the button, scroll to the top of the document
if (mybutton) {
    mybutton.addEventListener("click", backToTop);
}

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// ── TESTIMONIALS SLIDER ──
(function () {
    var slides = document.querySelectorAll('.testi-slide');
    var dots   = document.querySelectorAll('.testi-dot');
    if (!slides.length) return;

    var current = 0;
    var timer;

    function goTo(index) {
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (index + slides.length) % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
    }

    function next() { goTo(current + 1); }

    // Auto-advance every 4s
    function startTimer() { timer = setInterval(next, 4000); }
    function resetTimer()  { clearInterval(timer); startTimer(); }

    // Dot clicks
    dots.forEach(function (dot) {
        dot.addEventListener('click', function () {
            goTo(parseInt(this.getAttribute('data-index')));
            resetTimer();
        });
    });

    startTimer();
})();

// ── FAQ ACCORDION ──
(function () {
    document.querySelectorAll('.faq-question').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item = this.closest('.faq-item');
            var isOpen = item.classList.contains('open');

            // Close all
            document.querySelectorAll('.faq-item.open').forEach(function (el) {
                el.classList.remove('open');
                el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });

            // Open clicked if it was closed
            if (!isOpen) {
                item.classList.add('open');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });
})();


// ── ABOUT IMAGE — cursor tilt parallax ──
(function () {
    var img = document.querySelector('.about-image img');
    if (!img) return;

    var wrapper = img.closest('.about-image');
    var MAX_TILT  = 15;   // max degrees of rotation
    var MAX_LIFT  = 12;   // max px translateZ lift
    var rafId;

    // Target and current values for smooth lerp
    var target = { rx: 0, ry: 0 };
    var current = { rx: 0, ry: 0 };

    function lerp(a, b, t) { return a + (b - a) * t; }

    function animate() {
        current.rx = lerp(current.rx, target.rx, 0.1);
        current.ry = lerp(current.ry, target.ry, 0.1);

        img.style.transform =
            'rotateX(' + current.rx + 'deg) ' +
            'rotateY(' + current.ry + 'deg) ' +
            'translateZ(' + MAX_LIFT + 'px)';

        rafId = requestAnimationFrame(animate);
    }

    wrapper.addEventListener('mousemove', function (e) {
        var rect = wrapper.getBoundingClientRect();
        // Normalise mouse position to -1 … +1
        var nx = ((e.clientX - rect.left) / rect.width  - 0.5) * 2;
        var ny = ((e.clientY - rect.top)  / rect.height - 0.5) * 2;

        target.ry =  nx * MAX_TILT;   // left/right tilt
        target.rx = -ny * MAX_TILT;   // up/down tilt
    });

    wrapper.addEventListener('mouseenter', function () {
        cancelAnimationFrame(rafId);
        animate();
        img.style.filter = 'drop-shadow(0 30px 80px rgba(120,60,220,0.6))';
    });

    wrapper.addEventListener('mouseleave', function () {
        // Smoothly return to flat
        target.rx = 0;
        target.ry = 0;
        img.style.filter = 'drop-shadow(0 20px 60px rgba(120,60,220,0.35))';

        // Stop loop once close enough to zero
        function settle() {
            current.rx = lerp(current.rx, 0, 0.1);
            current.ry = lerp(current.ry, 0, 0.1);
            img.style.transform =
                'rotateX(' + current.rx + 'deg) ' +
                'rotateY(' + current.ry + 'deg) ' +
                'translateZ(' + MAX_LIFT + 'px)';

            if (Math.abs(current.rx) > 0.05 || Math.abs(current.ry) > 0.05) {
                rafId = requestAnimationFrame(settle);
            } else {
                cancelAnimationFrame(rafId);
                img.style.transform = '';
            }
        }
        cancelAnimationFrame(rafId);
        settle();
    });
})();

// ── PORTFOLIO FILTER + VIEW TOGGLE ──
(function () {
    var dropdown = document.getElementById('portfolioFilter');
    var grid     = document.getElementById('portfolioGrid');
    var btnGrid  = document.getElementById('viewGrid');
    var btnList  = document.getElementById('viewList');
    var countEl  = document.getElementById('portfolioCount');
    if (!dropdown || !grid) return;

    function updateCount() {
        if (!countEl) return;
        var visible = grid.querySelectorAll('.pf-item:not(.hidden)').length;
        var total   = grid.querySelectorAll('.pf-item').length;
        countEl.textContent = visible === total
            ? 'Showing all ' + total + ' works'
            : 'Showing ' + visible + ' of ' + total + ' works';
    }

    // Filter by dropdown
    dropdown.addEventListener('change', function () {
        var filter = this.value;
        grid.querySelectorAll('.pf-item').forEach(function (item) {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
        updateCount();
    });

    // Grid view
    btnGrid.addEventListener('click', function () {
        grid.classList.remove('list-view');
        btnGrid.classList.add('active');
        btnList.classList.remove('active');
    });

    // List view
    btnList.addEventListener('click', function () {
        grid.classList.add('list-view');
        btnList.classList.add('active');
        btnGrid.classList.remove('active');
    });

    // Init count on load
    updateCount();
})();

// ── INDUSTRIES SLIDER ──
$('.industries-owl').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    lazyLoad: true,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplaySpeed: 800,
    autoplayHoverPause: true,
    responsive: {
        0:    { items: 1 },
        576:  { items: 2 },
        768:  { items: 3 },
        1024: { items: 4 }
    }
});

// ── PROCESS CARDS — dynamic sticky top/z-index ──
(function () {
    var BASE_TOP = 100;
    var STEP     = 10;
    document.querySelectorAll('.process-card').forEach(function (card, i) {
        card.style.top    = (BASE_TOP + i * STEP) + 'px';
        card.style.zIndex = i + 1;
    });
})();

// ── HEADER — white background on scroll ──
(function () {
    var header = document.querySelector('.main-header');
    if (!header) return;

    function onScroll() {
        if (window.scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run on load in case page is already scrolled
})();

// ── PRICING SLIDER (carousel with 3 visible + scroll) ──
$('.pricing-slider').owlCarousel({
    loop: true,
    margin: 24,
    nav: false,
    lazyLoad: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    autoplaySpeed: 700,
    responsive: {
        0:    { items: 1 },
        768:  { items: 2 },
        1024: { items: 3 }
    }
});

// ── PRICING POPUP ──
(function () {
    var overlay  = document.getElementById('pricingPopup');
    var closeBtn = document.getElementById('popupClose');
    var pkgName  = document.getElementById('popupPkgName');
    var pkgPrice = document.getElementById('popupPkgPrice');
    if (!overlay) return;

    function openPricingPopup(btn) {
        // Walk up to the pricing-card-wrap to read badge + price
        var wrap = btn.closest('.pricing-card-wrap');
        if (wrap) {
            var badge  = wrap.querySelector('.pricing-plan-badge');
            var amount = wrap.querySelector('.pricing-amount');
            var dollar = wrap.querySelector('.pricing-dollar');
            var oldPrice = wrap.querySelector('.pricing-old');
            if (pkgName)  pkgName.textContent  = badge  ? badge.textContent.trim()  : 'Project';
            if (pkgPrice) pkgPrice.textContent = (dollar ? dollar.textContent.trim() : '$') +
                                                 (amount ? amount.textContent.trim() : '');
        }
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closePricingPopup() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Delegated — works on Owl Carousel clones too
    document.addEventListener('click', function (e) {
        if (e.target === overlay) { closePricingPopup(); return; }

        var btn = e.target.closest('.pricing-btn');
        if (btn) { e.preventDefault(); openPricingPopup(btn); return; }
    });

    closeBtn.addEventListener('click', closePricingPopup);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && overlay.classList.contains('active')) closePricingPopup();
    });
})();

// ── PRICING TABS ──
(function () {
    var tabs = document.querySelectorAll('.pricing-tab');
    if (!tabs.length) return;

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var target = this.getAttribute('data-tab');

            // Update tab buttons
            tabs.forEach(function (t) { t.classList.remove('active'); });
            this.classList.add('active');

            // Update panels
            document.querySelectorAll('.pricing-tab-panel').forEach(function (p) {
                p.classList.remove('active');
            });
            var panel = document.getElementById('tab-' + target);
            if (panel) {
                panel.classList.add('active');
                // Re-trigger owl carousel refresh inside the panel
                var owl = panel.querySelector('.pricing-slider');
                if (owl && $(owl).data('owl.carousel')) {
                    $(owl).trigger('refresh.owl.carousel');
                }
            }
        });
    });
})();


// ── GET STARTED POPUP ──
(function () {
    var overlay  = document.getElementById('gsPopup');
    var closeBtn = document.getElementById('gsPopupClose');
    if (!overlay) return;

    function openPopup() {
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closePopup() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Single delegated listener on the document covers every button —
    // present now or injected later by any carousel/dynamic code.
    document.addEventListener('click', function (e) {

        // 1. Backdrop click → close
        if (e.target === overlay) { closePopup(); return; }

        // 2. Skip pricing-btn — it has its own popup
        if (e.target.closest('.pricing-btn')) return;

        // 3. Any btn-know  (Get Started / Get To Know Us on every service page & about)
        if (e.target.closest('.btn-know'))    { e.preventDefault(); openPopup(); return; }

        // 4. Any btn-support  (Let's Discuss in support section)
        if (e.target.closest('.btn-support')) { e.preventDefault(); openPopup(); return; }

        // 5. data-popup="gs" — generic hook for future buttons
        if (e.target.closest('[data-popup="gs"]')) { e.preventDefault(); openPopup(); return; }

        // 6. btn-contact buttons whose text is "Get Started"
        //    (process sections in service pages)
        var contactBtn = e.target.closest('.btn-contact');
        if (contactBtn && contactBtn.textContent.trim() === 'Get Started') {
            e.preventDefault(); openPopup(); return;
        }

        // 7. Plain <button> (no class) containing "Get Started" text
        //    (home.php hero banner)
        var plainBtn = e.target.closest('button:not([class])');
        if (plainBtn && plainBtn.textContent.trim() === 'Get Started') {
            e.preventDefault(); openPopup(); return;
        }

        // 8. .main-banner-txt button — catches any banner button regardless of class
        if (e.target.closest('.main-banner-txt button')) {
            e.preventDefault(); openPopup(); return;
        }
    });

    // Close button (×)
    closeBtn.addEventListener('click', closePopup);

    // Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closePopup();
    });
})();
