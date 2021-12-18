<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unbound
 */

?>

        	</div>
        	<!-- #content -->
        </div>
        <!-- #page -->
        
        <?php
        if ( ! class_exists( 'ReduxFrameworkPlugin' ) ) {
            include get_parent_theme_file_path( 'inc/footer/footer-style-default.php' );
        } else {
        	if ( ( unbound_global_var( 'footer-style', '', false ) ) ) {
        		include get_parent_theme_file_path( 'inc/footer/' . unbound_global_var( 'footer-style', '', false ) . '.php' );
        	} else {
        		include get_parent_theme_file_path( 'inc/footer/footer-style-default.php' );
        	}
        }
        ?>

    </div>
    <!-- radiantthemes-website-layout -->

<?php wp_footer(); ?>



</body>
<script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-102453577-1', 'auto');
            ga('send', 'pageview');
</script>
</html>
