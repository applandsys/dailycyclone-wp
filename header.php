<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
        <meta name="author" content="<?php bloginfo( 'name' ); ?>" />
        <title><?php bloginfo( 'name' ); ?> | <?php echo wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="headroom-wrapper py-2">
                            <a href="<?php echo site_url();?>"><img class="" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"> </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <?php
                                            wp_nav_menu(array(
                                                'menu'				=> "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                                                'menu_class'		=> "navbar-nav  mb-2 mb-lg-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                                                'menu_id'			=> "primary-1", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                                            ) );
                                    ?>
                                </div>
                                <div class="right_nav">
                                    <div class="nav-item" > 
                                        <div class="right-nav-item-text"> <a href="<?php bloginfo( 'url' ); ?>search"> <i class="bi bi-search"></i> খুজুন </a></div>
                                    </div>
                                    <div class="nav-item"> 
                                        <div class="right-nav-item-text"> <a href="<?php bloginfo( 'url' ); ?>"> <i class="bi bi-newspaper"></i> ই-পেপার </a></div>
                                    </div>    
                                    <div class="nav-item"> 
                                        <div class="right-nav-item-text"> <a href="<?php bloginfo( 'url' ); ?>/wp-login.php"> <i class="bi bi-person-fill-lock"></i> Login </a></div>
                                    </div>    
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="search-box">
                        <div class="container">
                            <div class="search">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <div class="search-2"> <i class='bx bxs-map' ></i> 
                                                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" required>
                                                    <input type="search" class="search-field"
                                                        placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                                        value="<?php echo get_search_query() ?>" name="s"
                                                        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"> 
                                                    <button>Search</button> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </header>