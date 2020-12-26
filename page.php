<?php 
    //get header.php file
    get_header('dark');
?>



<!-- Post Area Start -->
<section class="post-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-3">

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
                                <?php the_content();?>
                            </div>
                        </div>

                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                             <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="article-img" alt="">
                            <?php endif; ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php esc_html_e( 'Sorry, no posts were found.', 'kahini' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Post Area End -->

<?php 
    //get footer.php file
    get_footer();
?>

