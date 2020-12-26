<?php 
    if (!is_active_sidebar( 'main-sidebar' )) {
        return;
    }
?>

<aside class="sidebar">
    <!-- Letest Post Secection start -->
    <?php dynamic_sidebar( 'main-sidebar' ) ?>
    <!-- Letest Post Secection  end -->
</aside>