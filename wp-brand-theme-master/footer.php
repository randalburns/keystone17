<?php
/**
 * jhu_id template for displaying the footer
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>

                <footer class="site-footer row" role="footer">
                    <div class="footer-brand columns medium-3 medium-offset-1">
                        <h1 class="brand-logo">
                            <a class="brand-mark" href="//jhu.edu">Johns Hopkins University</a>
                        </h1>
                    </div>
                    <nav class="footer-nav columns medium-5">
                        <ul class="nav footer_nav">
                            <li><a href="/" title="Brand Guidelines Homepage">Guideline Homepage</a></li>
                           <?php get_template_part('template-part', 'site_nav'); ?>
                       </ul>
                    </nav><!-- /.footer-nav -->
                    <div class="footer-contact columns medium-2 end">
                        <p>Johns Hopkins University<br>
                            Office of Communications</p>
                        <p>3910 Keswick Road, Suite N2600<br>
                            Baltimore, MD 21211</p>
                        <p>443-997-0170 (main)<br>
                            443-997-9009 (media)</p>
                    </div><!-- /.footer-contact -->
                </footer><!-- /.site-footer -->
                <a class="exit-off-canvas"></a>
            </div><!-- /.inner-wrap -->
        </div><!-- /.off-canvas-wrap -->

        <?php get_template_part('template-part', 'logos') ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-26641937-7');ga('send','pageview');
        </script>

        <!-- build:js /content/themes/jhu_id/scripts/main.js -->
        <!-- bower:js -->
        <script src="/content/themes/jhu_id/bower_components/jquery/dist/jquery.js"></script>
        <script src="/content/themes/jhu_id/bower_components/jquery-migrate/jquery-migrate.js"></script>
        <script src="/content/themes/jhu_id/bower_components/foundation/js/vendor/fastclick.js"></script>
        <script src="/content/themes/jhu_id/bower_components/foundation/js/foundation.min.js"></script>
        <script src="/content/themes/jhu_id/bower_components/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="/content/themes/jhu_id/bower_components/fancybox/source/jquery.fancybox.js"></script>
        <script src="/content/themes/jhu_id/bower_components/fancybox/source/helpers/jquery.fancybox-media.js"></script>
        <script src="/content/themes/jhu_id/bower_components/jquery-waypoints/waypoints.js"></script>
        <script src="/content/themes/jhu_id/bower_components/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky.js"></script>
        <script src="/content/themes/jhu_id/bower_components/jquery.scrollTo/jquery.scrollTo.js"></script>
        <script src="/content/themes/jhu_id/bower_components/jquery.localScroll/jquery.localScroll.js"></script>
        <!-- endbower -->
        <script src="/ts/js/jquery.typeshow.js"></script>
        <script src="/content/themes/jhu_id/scripts/main.js"></script>
        <!-- endbuild -->
	</body>
</html>
