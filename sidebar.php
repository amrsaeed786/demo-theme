<?php
/*
this is sidebar file
*/

get_header(); ?>

<?php if (is_active_sidebar('sidebar-blog')): ?>
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar('sidebar-blog'); ?>
    </aside>
<?php endif; ?>






<?php get_footer(); ?>