<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-ten tab-full left footer-desc">

                <div class="footer-logo"></div>
                Our vision is to pioneer innovative technology solutions that transform industries and enhance user experiences. We're driven by a commitment to excellence, collaboration, and continuous innovation, aiming to leave a lasting impact on the digital world.

            </div>

            <div class="col-two tab-full right footer-subscribe quick-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="<?php echo $current_page == 'index.php' ? '#home' : 'index.php#home'; ?>">Home</a></li>
                    <li><a href="<?php echo $current_page == 'about.php' ? '#about' : 'about.php'; ?>">About</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="<?php echo $current_page == 'index.php' ? '#services' : 'index.php#services'; ?>">Services</a></li>
                    <li><a href="<?php echo $current_page == 'index.php' ? '#works' : 'index.php#works'; ?>">Works</a></li>
                    <li><a href="<?php echo $current_page == 'index.php' ? '#clients' : 'index.php#clients'; ?>">Clients</a></li>
                </ul>
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
