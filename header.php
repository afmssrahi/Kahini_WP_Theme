<!DOCTYPE html>
<html <?php language_attributes(  );?>>

<head>
    <meta <?php bloginfo( "charset" ) ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(  );?>

</head>

<body>
    <!-- Header Area Start -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <!-- Navbar Areae Start -->
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <!--Site Logo -->
                        <a class="navbar-brand" href="#">
                            <?php 
                                the_custom_logo();
                            ?>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php 
                                // Display primay menu
                                if (has_nav_menu( 'primary-menu' )) {
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary-menu',
                                        'container' => '',
                                        'items_wrap' => '<ul class="navbar-nav mx-auto mb-2 mb-lg-0">%3$s</ul>',
                                    ) );
                                }
                            ?>

                            <?php 
                                // Get the searchForm.php template file using "get_search_form()" tag
                                get_search_form(); 
                            ?>

                        </div>
                    </div>
                </nav>
                <!-- Navbar Areae End -->
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Main Site Area Start -->
    <main>