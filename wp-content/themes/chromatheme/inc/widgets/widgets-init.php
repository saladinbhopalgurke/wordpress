<?php

// Load widget base.
require_once get_template_directory() . '/inc/widgets/widgets-base.php';

/* Theme Widget sidebars. */
require get_template_directory() . '/inc/widgets/widgets-register-sidebars.php';

/* Theme Widget sidebars. */
require get_template_directory() . '/inc/widgets/widgets-common-functions.php';

/* Theme Widgets*/
require get_template_directory() . '/inc/widgets/du-meme-artiste.php';

/* Register site widgets */
if ( ! function_exists( 'covernews_widgets' ) ) :
    /**
     * Load widgets.
     *
     * @since 1.0.0
     */
    function covernews_widgets() {
        register_widget( 'CoverNews_Posts_Slider' );
    }
endif;
add_action( 'widgets_init', 'covernews_widgets' );
