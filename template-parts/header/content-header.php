<div id="page" class="site">
    <header class="contentHeader">
        <div class="contentHeader__wrapper">
            <div class="contentLogo">
                <?php
                $site_name = get_bloginfo('name');
                $site_logo = get_theme_mod('custom_logo'); // Obtain the current theme logo
                if ($site_logo) { ?>
                    <img src="<?php echo esc_url(wp_get_attachment_image_src($site_logo, 'full')[0]); ?>"
                         alt="<?php echo esc_attr($site_name); ?>" class="logo__img">

                <?php } else { ?>
                    <span><?php echo esc_html($site_name); ?></span>
                <?php } ?>

            </div>

            <nav class="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        // 'menu_id' => 'primary-menu',
                    )
                );
                ?>

                <div class="container-cta-btn-mobile">
                    <a href="#" class="btn-try">Try it free!</a>
                    <a href="#" class="btn-login">Log in</a>
                </div>

            </nav>

            <div class="container-cta-btn-desktop">
                <a href="#" class="btn-try">Try it free!</a>
                <a href="#" class="btn-login">Log in</a>
            </div>

            <span class="btn-open btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px">
                    <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" fill="#3662D4"/>
                </svg>
            </span>
            <span class="btn-close btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="20px">
                    <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" fill="#3662D4"/>
                </svg>
            </span>
        </div>
    </header>

