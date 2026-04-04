<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main" style="max-width: 1200px;">

            <div class="col-five tab-full left footer-desc">

                <div class="footer-logo"></div>
                Our vision is to pioneer innovative technology solutions that transform industries and enhance user experiences. We're driven by a commitment to excellence, collaboration, and continuous innovation, aiming to leave a lasting impact on the digital world.

            </div>


            <div class="col-seven tab-full right footer-subscribe quick-links" style="display: flex; flex-wrap: wrap; gap: 4rem; justify-content: flex-end;">
                <div style="flex: 1; min-width: 120px; text-align: left;">
                    <h4 style="text-align: left;">Quick Links</h4>
                    <ul style="text-align: left; padding-left: 0; margin-left: 0; list-style: none;">
                        <li><a href="<?php echo $current_page == 'index.php' ? '#home' : 'index.php#home'; ?>">Home</a></li>
                        <li><a href="<?php echo $current_page == 'about.php' ? '#about' : 'about.php'; ?>">About</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="<?php echo $current_page == 'index.php' ? '#services' : 'index.php#services'; ?>">Services</a></li>
                        <li><a href="<?php echo $current_page == 'index.php' ? '#works' : 'index.php#works'; ?>">Works</a></li>
                        <li><a href="<?php echo $current_page == 'index.php' ? '#clients' : 'index.php#clients'; ?>">Clients</a></li>
                    </ul>
                </div>
                <div style="flex: 1; min-width: 160px; text-align: left;">
                    <h4 style="text-align: left;">Legal</h4>
                    <ul style="white-space: nowrap; display: block; text-align: left; padding-left: 0; margin-left: 0; list-style: none;">
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li style="margin-top: 0.5rem;"><a href="terms-conditions.php">Terms & Conditions</a></li>
                        <li style="margin-top: 0.5rem; color: inherit; font-size: 1.4rem; font-weight: 400; padding-left: 0; text-align: left;">
                            &nbsp;BR: PV00306298
                        </li>
                        <li style="margin-top: 0.5rem; color: inherit; font-size: 1.4rem; font-weight: 400; padding-left: 0; text-align: left;">
                            &nbsp;TIN: 159050610
                        </li>
                    </ul>
                </div>
                <div style="flex: 1; min-width: 160px; text-align: left;">
                    <h4 style="text-align: left;">Contact Us</h4>
                    <div style="display: flex; justify-content: flex-start; gap: 1.2rem; margin-top: 1.2rem; flex-wrap: wrap; align-items: center;">
                        <a href="https://www.linkedin.com/company/brainvave-software-studios/" target="_blank" rel="noopener" title="LinkedIn" style="color: inherit; font-size: 2.6rem; display: flex; align-items: center;"><i class='bx bxl-linkedin-square'></i></a>
                        <a href="mailto:hello@brainvave.com" title="Mail" style="color: inherit; font-size: 2.6rem; display: flex; align-items: center;"><i class='bx bxl-gmail'></i></a>
                        <a href="https://wa.me/94741175199" target="_blank" rel="noopener" title="WhatsApp" style="color: inherit; font-size: 2.6rem; display: flex; align-items: center;"><i class='bx bxl-whatsapp'></i></a>
                        <a href="sms:+94741175199?&body=Hey%20I%20like%20to%20build%20a%20website." title="Message" style="color: inherit; font-size: 2.6rem; display: flex; align-items: center;"><i class='bx bx-message-rounded-dots'></i></a>
                        <a href="tel:+94741175199" title="Call" style="color: inherit; font-size: 2.6rem; display: flex; align-items: center;"><i class='bx bx-phone'></i></a>
                    </div>
                </div>
            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Brainvave Digital Studios (Pvt) Ltd - <?= date("Y") ?></span>
                </div>

                <div class="go-top">
                    <?php if ($current_page == 'index.php'): ?>
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                    <?php else: ?>
                        <a title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                    <?php endif; ?>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.min.js?v=1"></script>

</body>

</html>
