</main>
<!-- Main Site Area End -->

<!--Footer Area Start -->
<footer>
    <div class="container">
        <div class="row">
            <?php the_custom_logo(); ?>
            <?php 
                if (is_active_sidebar( 'footer-widgests' )) {

                    dynamic_sidebar( 'footer-widgests' );
                }
            ?>
        </div>

        <hr>
        <div class="copyright-section text-center text-muted">
            Wordpress Theme By <a href="https://github.com/afmssrahi">MD Shahriar Rahi </a>&copy; <?php echo get_the_date('Y'); ?>
        </div>
    </div>
</footer>
<!--Footer Area End -->


</body>

</html>
