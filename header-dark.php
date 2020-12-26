<!DOCTYPE html>
<html <?php language_attributes(  );?>>

<head>
    <meta <?php bloginfo( "charset" ) ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(  );?>

    <style>
*{-webkit-box-sizing:border-box;box-sizing:border-box}body{padding:0;margin:0}#notfound{position:relative;height:100vh;background:#030005}#notfound .notfound{position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound{max-width:767px;width:100%;line-height:1.4;text-align:center}.notfound .notfound-404{position:relative;height:180px;margin-bottom:20px;z-index:-1}.notfound .notfound-404 h1{font-family:montserrat,sans-serif;position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);font-size:224px;font-weight:900;margin-top:0;margin-bottom:0;margin-left:-12px;color:#030005;text-transform:uppercase;text-shadow:-1px -1px 0 #8400ff,1px 1px 0 #ff005a;letter-spacing:-20px}.notfound .notfound-404 h2{font-family:montserrat,sans-serif;position:absolute;left:0;right:0;top:110px;font-size:42px;font-weight:700;color:#fff;text-transform:uppercase;text-shadow:0 2px 0 #8400ff;letter-spacing:13px;margin:0}.notfound a{font-family:montserrat,sans-serif;display:inline-block;text-transform:uppercase;color:#ff005a;text-decoration:none;border:2px solid;background:0 0;padding:10px 40px;font-size:14px;font-weight:700;-webkit-transition:.2s all;transition:.2s all}.notfound a:hover{color:#8400ff}@media only screen and (max-width:767px){.notfound .notfound-404 h2{font-size:24px}}@media only screen and (max-width:480px){.notfound .notfound-404 h1{font-size:182px}}
</style>

</head>

<body>
    <!-- Header Area Start -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <!-- Navbar Areae Start -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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