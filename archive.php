<?php 
    //get header.php file
    get_header('dark');
?>





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
                <div class="single-mesonary">
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="blog-post">
                        
                        <div class="post-title py-2 ps-3">
                            <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                        </div>

                        <div class="post-info pt-1 px-3">
                            
                            <div class="post-content">
                                <?php the_excerpt(  );?>
                            </div>
                        </div>

                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                             <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="article-img" alt="">
                            <?php endif; ?>
                        </div>

                        <div class="post-author text-end pt-1 pe-3">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">by
                                    <?php the_author(); ?> <?php echo the_date();?></a>
                         </div>
                    </article>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php esc_html_e( 'Sorry, no posts were found.', 'kahini' ); ?>
                    <?php endif; ?>
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

                <!-- Mian Post END -->


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

