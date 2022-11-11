<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baron_Insulation
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'baron-insulation' ); ?></a>

    <header class="header">
        <div class="header__top dis-md">
            <div class="container">
                <?php
                    $email = get_field('email', 'options');
                    $phone = get_field('phone', 'options');
                    $address = get_field('address', 'options');
                    ?>
                <div class="inner">
                    <div class="header__notes">
                        <span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span>
                        <span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></span>
                        <span><?php echo $address; ?></span>
                    </div>
                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="header__search">
                        <input type="text" placeholder="Search" name="s" id="s" >
                    </form>
                </div>
            </div>
        </div>
        <div class="header__bot">
            <div class="container">
                <div class="inner">
                    <div class="logo">
                        <?php $logo = get_field('logo','options'); ?>
                        <a href="<?php echo home_url( '/' ); ?>">
                            <?php if(!empty($logo)) { ?>
                                <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri();?>/./images/logo.svg" alt="Baron Logo">
                            <?php } ?>
                        </a>
                    </div>
                    <div class="header__nav dis-md">
                        <?php
                            if ( has_nav_menu( 'menu-1' ) ) :
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_class'        => 'navigation',
                                        'walker'          => new wp_bootstrap_navwalker(),
                                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                    )
                                );
                            endif;
					    ?>
                    </div>
                    <div class="header__btns app-md">
                        <span class="header__btn header__btn-call">
                            <a href="tel:<?php echo $phone; ?>">
                                <img src="<?php echo get_template_directory_uri();?>/./images/icons/Icon-ionic-ios-call.svg" alt="">
                            </a>
                        </span>
                        
                        <span class="header__btn header__btn-menu">
                            <img src="<?php echo get_template_directory_uri();?>/./images/icons/icon-menu.svg" alt="" class="open">
                            <img src="<?php echo get_template_directory_uri();?>/./images/icons/menu-close.svg" alt="" class="close">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="sidemenu app-md">
        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" >
            <div class="sidemenu__search">
                <input type="text" name="s" id="s" placeholder="Search Site" class="sidemenu__search-input">
                <button type="submit" class="sidemenu__search-submit"><img src="<?php echo get_template_directory_uri();?>/./images/icons/icon-search.svg"
                        alt=""></button>
            </div>
        </form>
        <div class="sidemenu__nav">
            <?php
                if ( has_nav_menu( 'menu-1' ) ) :
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class'        => 'navigation',
                            'walker'          => new wp_bootstrap_navwalker(),
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        )
                    );
                endif;
            ?>
        </div>
        <div class="sidemenu__footer">
            <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
            <p><?php echo $address; ?></p>
        </div>
    </div>

    <div class="sitecontent">
