<?php get_header(); ?>
<div id="primary">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="post-thumbnail-img text-center">
                    <?php the_post_thumbnail("medium"); ?>
                </div>
                <h1 class="text-center mt-2 mb-2"><?php the_title() ?> </h1>
                <?php the_content() ?>
                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>