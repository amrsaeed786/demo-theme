<?php
/*
 * Template Name: Home Page
 * Description: A custom home page template for myTheme.
 * Author: Amir Saeed git branch -M main
 * Version: 1.0
 */
?>
<?php get_header(); ?>
<section class="services-section mt-2 mb-2">
    <h1 class="text-center">Services</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="services-items">
                    <?php if (is_active_sidebar('service-1')): ?>
                        <?php dynamic_sidebar('service-1'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="services-items">
                    <?php if (is_active_sidebar('service-2')): ?>
                        <?php dynamic_sidebar('service-2'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="services-items">
                    <?php if (is_active_sidebar('service-3')): ?>
                        <?php dynamic_sidebar('service-3'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="services-items">
                    <?php if (is_active_sidebar('service-3')): ?>
                        <?php dynamic_sidebar('service-3'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="services-items">
                    <?php if (is_active_sidebar('service-3')): ?>
                        <?php dynamic_sidebar('service-3'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="services-items">
                    <?php if (is_active_sidebar('service-3')): ?>
                        <?php dynamic_sidebar('service-3'); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="homepage-post">
    <?php
    $arg = array(
        "post_type" => "post",
        "posts_per_page" => 3,
        "category_name" => "web-design"
    );
    $query = new WP_Query($arg);
    ?>
    <div class="container">
        <div class="row">


            <?php if ($query->have_posts()): ?>

                <?php while ($query->have_posts()):
                    $query->the_post(); ?>
                    <div class="col-sm-12 justify-content-center">
                        <h2><?php the_title(); ?></h2>
                        <p> <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                            <a href="<?php the_permalink(); ?>">Read more</a>
                        </p>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>

            <?php else: ?>
                <p>No posts found</p>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>