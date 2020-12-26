<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <article class="blog-post">
        <div class="post-thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="article-img" alt="">
            <?php endif; ?>
        </div>
        <div class="post-info pt-4 px-3">
            <div class="post-author py-2">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">by <?php the_author(); ?> <?php echo the_date();?></a>
            </div>
            <div class="post-title">
                <a href="<?php the_permalink(); ?>">
                    <h4><?php the_title(); ?></h4>
                </a>
            </div>
            <div class="post-content">
                <?php the_excerpt(  );?>
            </div>

            <hr>

            <div class="post-categories">
                <?php get_template_part('templates/post', 'categories'); ?>
            </div>
        </div>
    </article>
<?php endwhile; ?>
<?php else : ?>
<?php esc_html_e( 'Sorry, no posts were found.', 'kahini' ); ?>
<?php endif; ?>
