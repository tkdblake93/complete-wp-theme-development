<?php
/**
 * The template for displaying the footer
 *
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
?>
        <div id="site-footer">
            <div class="container">
                <footer>
                    <span class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </span>
				    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>">
				        <?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?>
				    </a>
                </footer>
            </div>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>