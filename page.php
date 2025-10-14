<?php get_header(); ?>
<div id="content" class="site-content">

    <section class="home-blog">
        <div class="container">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <div class="meta-info">
                        <span class="author"><b>By <?php the_author(); ?></b></span>
                        <span class="date">On <?php the_time(get_option('date_format')); ?></span>
                        <p><b>Category:</b> <?php the_category(', '); ?></p>
                        <p class="tags"><b>Tags:</b> <?php the_tags('', ', '); ?></p>
                    </div>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </section>

</div>
<?php get_footer(); ?>