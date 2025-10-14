<?php get_header(); ?>

<div class="container my-5">
    <h2 class="mb-4">
        Search Results for: <span class="text-primary"><?php echo get_search_query(); ?></span>
    </h2>

    <?php if (have_posts()): ?>
        <div class="row g-4">
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                         
                           
                        <?php  
                       if(has_post_thumbnail()) {
                        ?>
                         <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                            </a>
                        <?php
                       }else {
                        ?>
                        <img src="https://placehold.co/414x245?text=No+image+found" alt="No image found">
                        <?php
                       }
                       ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <?php the_title(); ?>
                                </a>
                            </h5>
                            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('« Prev', 'textdomain'),
                'next_text' => __('Next »', 'textdomain'),
                'class' => 'pagination justify-content-center',
            ));
            ?>
        </div>

    <?php else: ?>
        <div class="alert alert-warning">
            <h5>No results found for "<strong><?php echo get_search_query(); ?></strong>"</h5>
            <p>Try again with different keywords.</p>
            <?php get_search_form(); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>