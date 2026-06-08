   <!-- ============================================================
        GET STARTED POPUP MODAL
   ============================================================ -->
   <div class="gs-popup-overlay" id="gsPopup" role="dialog" aria-modal="true" aria-labelledby="gsPopupTitle">
       <div class="gs-popup">

           <!-- Pastel blobs -->
           <div class="gs-popup-orb gs-popup-orb--1"></div>
           <div class="gs-popup-orb gs-popup-orb--2"></div>
           <div class="gs-popup-orb gs-popup-orb--3"></div>

           <!-- CSS Sparks -->
           <span class="gs-spark gs-spark--1"></span>
           <span class="gs-spark gs-spark--2"></span>
           <span class="gs-spark gs-spark--3"></span>
           <span class="gs-spark gs-spark--4"></span>
           <span class="gs-spark gs-spark--5"></span>
           <span class="gs-spark gs-spark--6"></span>
           <span class="gs-spark gs-spark--7"></span>
           <span class="gs-spark gs-spark--8"></span>

           <!-- Close button -->
           <button class="gs-popup-close" id="gsPopupClose" aria-label="Close">
               <i class="fa fa-times"></i>
           </button>

           <!-- Header -->
           <div class="gs-popup-head">
               <div class="gs-popup-badge">🚀 Let's Build Something Great</div>
               <h2 class="gs-popup-title" id="gsPopupTitle">
                   Start Your <span>Project</span> Today
               </h2>
               <p class="gs-popup-subtitle">
                   Tell us about your vision — we'll turn it into a brand that stands out.
               </p>
           </div>

           

           <!-- Form -->
           <form class="gs-popup-form" id="gsPopupForm" action="inc/form.php" method="POST">
               <input type="hidden" name="cta1" value="1">
               <input type="hidden" name="subject" value="New Lead - Get Started Popup">
               <input type="hidden" name="url" value="">
               <input type="hidden" name="domain" value="">
               <input type="hidden" name="ip" value="">
               <input type="hidden" name="city" value="">
               <input type="hidden" name="region" value="">
               <input type="hidden" name="country" value="">
               <input type="hidden" name="first_source" value="">
               <input type="hidden" name="first_medium" value="">
               <input type="hidden" name="first_campaign" value="">
               <input type="hidden" name="last_source" value="">
               <input type="hidden" name="last_medium" value="">
               <input type="hidden" name="last_campaign" value="">

               <div class="gs-form-row">
                   <!-- Name -->
                   <div class="gs-form-group">
                       <label for="gs_name">Full Name</label>
                       <div class="gs-input-wrap">
                           <i class="fa fa-user gs-input-icon"></i>
                           <input type="text" id="gs_name" name="name" placeholder="Your full name" autocomplete="name">
                       </div>
                   </div>
                   <!-- Email -->
                   <div class="gs-form-group">
                       <label for="gs_email">Email Address</label>
                       <div class="gs-input-wrap">
                           <i class="fa fa-envelope gs-input-icon"></i>
                           <input type="email" id="gs_email" name="email" placeholder="you@example.com" autocomplete="email">
                       </div>
                   </div>
                   <!-- Phone — full width -->
                   <div class="gs-form-group gs-form-group--full">
                       <label for="gs_phone">Phone Number</label>
                       <div class="gs-input-wrap">
                           <i class="fa fa-phone gs-input-icon"></i>
                           <input type="tel" id="gs_phone" name="phone" placeholder="+1 (555) 000-0000" autocomplete="tel">
                       </div>
                   </div>
               </div>

               <!-- Message -->
               <div class="gs-form-group">
                   <label for="gs_message">Tell Us About Your Project</label>
                   <div class="gs-input-wrap gs-textarea-wrap">
                       <i class="fa fa-comment-dots gs-input-icon gs-textarea-icon"></i>
                       <textarea id="gs_message" name="message" rows="3" placeholder="Describe your project, goals, or any questions..."></textarea>
                   </div>
               </div>

               <!-- Submit -->
               <button type="submit" class="gs-popup-submit">
                   <span class="gs-submit-text">Send My Request</span>
                   <span class="gs-submit-arrow">
                       <svg viewBox="0 0 24 24" fill="none"><line x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><polyline points="12 5 19 12 12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
                   </span>
               </button>

               <!-- Trust indicators -->
               <div class="gs-trust-row">
                   <span class="gs-trust-item"><i class="fas fa-lock"></i> 100% Secure</span>
                   <span class="gs-trust-item"><i class="fas fa-bolt"></i> Fast Response</span>
                   <span class="gs-trust-item"><i class="fas fa-star"></i> 4.9★ Rated</span>
               </div>
           </form>

       </div>
   </div>
   <!-- END POPUP -->

   <!-- ============================================================
        PRICING / START YOUR PROJECT POPUP
   ============================================================ -->
   <div class="pricing-popup-overlay" id="pricingPopup" role="dialog" aria-modal="true" aria-labelledby="pricingPopupTitle">
       <div class="pricing-popup">

           <!-- Top accent stripe -->
           <div class="pricing-popup-stripe"></div>

           <!-- Close -->
           <button class="pricing-popup-close" id="popupClose" aria-label="Close">
               <i class="fa fa-times"></i>
           </button>

           <!-- Header -->
           <div class="pricing-popup-head">
               <div class="pricing-popup-badge">🎯 Selected Package</div>
               <h2 class="pricing-popup-title" id="pricingPopupTitle">
                   Start Your <span id="popupPkgName">Project</span>
               </h2>
               <div class="pricing-popup-price-row">
                   <span class="pricing-popup-price" id="popupPkgPrice"></span>
               </div>
               <p class="pricing-popup-subtitle">Fill in your details and we'll get back to you within a few hours.</p>
           </div>

           <!-- Form -->
           <form class="pricing-popup-form" action="inc/form.php" method="POST">
               <input type="hidden" name="cta1" value="1">
               <input type="hidden" name="subject" value="New Lead - Pricing Package">
               <input type="hidden" name="url" value="">
               <input type="hidden" name="domain" value="">
               <input type="hidden" name="ip" value="">
               <input type="hidden" name="city" value="">
               <input type="hidden" name="region" value="">
               <input type="hidden" name="country" value="">
               <input type="hidden" name="first_source" value="">
               <input type="hidden" name="first_medium" value="">
               <input type="hidden" name="first_campaign" value="">
               <input type="hidden" name="last_source" value="">
               <input type="hidden" name="last_medium" value="">
               <input type="hidden" name="last_campaign" value="">

               <div class="pp-form-row">
                   <div class="pp-form-group">
                       <label for="pp_name">Full Name</label>
                       <div class="pp-input-wrap">
                           <i class="fa fa-user pp-input-icon"></i>
                           <input type="text" id="pp_name" name="name" placeholder="Your full name" autocomplete="name">
                       </div>
                   </div>
                   <div class="pp-form-group">
                       <label for="pp_email">Email Address</label>
                       <div class="pp-input-wrap">
                           <i class="fa fa-envelope pp-input-icon"></i>
                           <input type="email" id="pp_email" name="email" placeholder="you@example.com" autocomplete="email">
                       </div>
                   </div>
               </div>

               <div class="pp-form-group">
                   <label for="pp_phone">Phone Number</label>
                   <div class="pp-input-wrap">
                       <i class="fa fa-phone pp-input-icon"></i>
                       <input type="tel" id="pp_phone" name="phone" placeholder="+1 (555) 000-0000" autocomplete="tel">
                   </div>
               </div>

               <div class="pp-form-group">
                   <label for="pp_message">Message <span style="font-weight:400;text-transform:none;">(optional)</span></label>
                   <div class="pp-input-wrap">
                       <i class="fa fa-comment-dots pp-input-icon" style="top:14px;align-self:flex-start;"></i>
                       <textarea id="pp_message" name="message" rows="3" placeholder="Any extra details about your project..."></textarea>
                   </div>
               </div>

               <button type="submit" class="pp-submit">
                   <span>Claim This Package</span>
                   <svg viewBox="0 0 24 24" fill="none"><line x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><polyline points="12 5 19 12 12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
               </button>

               <div class="pp-trust-row">
                   <span class="pp-trust-item"><i class="fas fa-lock"></i> Secure</span>
                   <span class="pp-trust-item"><i class="fas fa-undo"></i> Money-Back Guarantee</span>
                   <span class="pp-trust-item"><i class="fas fa-headset"></i> 24/7 Support</span>
               </div>
           </form>

       </div>
   </div>
   <!-- END PRICING POPUP -->

   <!-- FAQ -->
    <section>
        <div class="faq-section">
            <div class="container">
                <div class="faq-header">
                    <span class="faq-badge">Frequently</span>
                    <h2>Asked Questions</h2>
                </div>

                <div class="faq-list">

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>How long does it take to design a logo?</span>
                            <span class="faq-icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="faq-answer">
                            <p>Most logo design projects are completed within 3–7 business days, depending on the complexity of the project and revision requirements.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Do you provide source files with the logo?</span>
                            <span class="faq-icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. All final logo packages include high-resolution files and editable source files suitable for print and digital use.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>How long does it take to build a website?</span>
                            <span class="faq-icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="faq-answer">
                            <p>A standard business website typically takes 1–3 weeks, while larger custom or ecommerce websites may require additional time depending on functionality and content.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Will my website be mobile-friendly?</span>
                            <span class="faq-icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="faq-answer">
                            <p>Absolutely. Every website we create is fully responsive and optimized for desktops, tablets, and mobile devices.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Do you offer website maintenance after launch?</span>
                            <span class="faq-icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. We provide ongoing website maintenance services including updates, security monitoring, backups, performance optimization, and technical support.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- LET'S DISCUSS CTA -->
    <section>
        <div class="lets-discuss">
            <div class="container">
                <div class="ld-inner">
                    <!-- Text -->
                    <div class="ld-text">
                        <p>Don't Waste Your Time, Business Can't Wait!</p>
                        <h2>LET'S DISCUSS</h2>
                    </div>

                    <!-- Device mockup -->
                    <div class="ld-devices">
                        <img class="lozad" data-src="assets/images/iMac-and-iPhone.webp" alt="iMac and iPhone mockup">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <!-- Cursor decoration -->
        <img data-src="assets/images/glassy-blue-cursor-3d.webp" class="footer-cursor lozad" alt="cursor">

        <!-- Top: copyright + newsletter -->
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12">
                        <p class="footer-copy">@ 2026 Logo Vector Design</p>
                        <p class="footer-desc">From Logos to Digital Growth—We've Got Your Brand Covered.</p>
                    </div>
                    <div class="col-md-2 col-12"></div>
                    <div class="col-md-7 col-12">
                        <div class="footer-newsletter">
                            <h3>Subscribe To Our <br><span>Newsletter</span></h3>
                            <form class="newsletter-form" onsubmit="return false;">
                                <input type="email" placeholder="Enter your email address" aria-label="Email address">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="footer-divider"></div>

        <!-- Bottom: logo + nav columns + contact -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-md-3 col-12">
                        <div class="footer-logo">
                            <img class="lozad" data-src="assets/images/logo.webp" alt="Logo Vector Design">
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="col-md-2 col-6">
                        <h4 class="footer-col-title">Navigation</h4>
                        <ul class="footer-links">
                            <li><a href="home">Home</a></li>
                            <li><a href="about-us">About</a></li>
                            <li><a href="testimonials">Testimonials</a></li>
                        </ul>
                    </div>

                    <!-- Our Services -->
                    <div class="col-md-2 col-6">
                        <h4 class="footer-col-title">Our Services</h4>
                        <ul class="footer-links">
                            <li><a href="logo-design">Logo Design</a></li>
                            <li><a href="website-design">Website Design</a></li>
                            <li><a href="website-maintenance">Website Maintenance</a></li>
                        </ul>
                    </div>

                    <!-- More Services -->
                    <div class="col-md-2 col-6">
                        <h4 class="footer-col-title">&nbsp;</h4>
                        <ul class="footer-links">
                            <li><a href="video-animation">Video Animation</a></li>
                            <li><a href="ecommerce-website">Ecommerce Website</a></li>
                            <li><a href="digital-marketing">Digital Marketing</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-3 col-6">
                        <h4 class="footer-col-title">Contact</h4>
                        <a href="mailto:info@logovectordesign.com" class="footer-email">info@logovectordesign</a>
                        <div class="footer-socials">
                            <a href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Back to top -->
        <button id="btn-back-to-top" aria-label="Back to top">
            <i class="fa fa-arrow-up"></i>
        </button>

    </footer>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/anime.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/font.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/video.min.js"></script>
<script>
    const observer = lozad('.lozad', {
        rootMargin: '200px 0px',
        loaded: function(el) { el.classList.add('lozad-loaded'); }
    });
    observer.observe();
</script>
<script src="assets/js/custom.js"></script>

</body>
</html>