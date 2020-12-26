<?php 
    //get header.php file
    get_header();
?>


<!-- Banner Area Start -->
<section class="banner-area">
    <div class="container-fluid">
        <div class="banner">
            <!-- Banner Image -->
            <?php if(get_theme_mod('header_image')): ?>
                <img src="<?php echo esc_url(get_theme_mod('header_image')); ?>" alt="banner-img" />
            <?php endif; ?>
            <div class="img-overlay"></div>
        </div>
        <div class="banner-text">
            <?php if(get_theme_mod('header_text_field')): ?>
                <h1><?php echo get_theme_mod('header_text_field');?></h1>
            <?php endif; ?>
            <?php if(get_theme_mod('header_description_field')): ?>
                <p><?php echo get_theme_mod('header_description_field');?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Banner Area End -->


<!-- Categories Section Start -->
<section class="categories">
    <div class="container">
        <div class="categories-items">
            <?php 
                get_template_part( 'templates/categories', 'content' );
            ?>
        </div>
    </div>
</section>

<!-- Categories Section End -->

<!-- Post Area Start -->
<section class="post-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12 px-3">

                <!-- Mian Post Start -->
                <div class="mesonary">
                    <?php 
                        get_template_part( 'templates/post', 'content' );
                    ?>
                </div>

                <!-- Pagination Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <?php 
                                        echo paginate_links( array(
                                            'mid_size' => 3,
                                            'prev_text' => 'Previous',
                                            'next_text' => 'Next'
                                        ) );
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Pagination End -->

                <!-- Mian Post End -->


            </div>

            <!-- Sidebar Area Start -->
            <div class="col-md-4 col-sm-12">

                <?php get_sidebar(); ?>

            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</section>
<!-- Post Area End -->

<?php 
    //get footer.php file
    get_footer();
?>

