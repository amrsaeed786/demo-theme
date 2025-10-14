<?php get_header(); ?>
<div id="content" class="site-content">


    <section class="home-blog mt-5 mb-5">
        <div class="container">
            <div class="row">

                <!-- Blog Posts -->
                <div class="col-sm-8">
                    <?php if (have_posts()): ?>
                        <div class="row">
                            <?php while (have_posts()):
                                the_post(); ?>
                                <div class="col-sm-6">
                                    <div class="post-thumbnail-img">
                                        <?php the_post_thumbnail("medium"); ?>
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="meta-info">
                                        <span class="author"><b>By <?php the_author(); ?></b></span>
                                        <span class="date">On <?php the_time(get_option('date_format')); ?></span>
                                        <p><b>Category:</b> <?php the_category(', '); ?></p>
                                        <p class="tags"><b>Tags:</b> <?php the_tags('', ', '); ?></p>
                                    </div>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p>No posts found.</p>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <div class="col-sm-4">
                    <aside> <?php if (is_active_sidebar('sidebar-blog')): ?>
                            <?php dynamic_sidebar('sidebar-blog'); ?>
                        <?php endif; ?>
                    </aside>

                </div>

            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>