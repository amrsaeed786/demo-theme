<?php
/**
 * The template for displaying comments
 *
 * Place this file in your theme and make sure single.php calls:
 * <?php comments_template(); ?>
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area mt-5">

    <?php if (have_comments()): ?>
        <h3 class="mb-4">
            <?php
            printf(
                _nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'),
                number_format_i18n(get_comments_number())
            );
            ?>
        </h3>

        <ul class="list-unstyled">
            <?php
            wp_list_comments(array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => 50,
                'callback' => function ($comment, $args, $depth) {
                    ?>
                <li <?php comment_class('media mb-4'); ?> id="comment-<?php comment_ID(); ?>">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <?php echo get_avatar($comment, 50, '', '', ['class' => 'rounded-circle']); ?>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mt-0 mb-1">
                                <?php echo get_comment_author(); ?>
                                <small class="text-muted">
                                    <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()); ?>
                                </small>
                            </h6>
                            <?php if ($comment->comment_approved == '0'): ?>
                                <em class="text-warning"><?php _e('Your comment is awaiting moderation.'); ?></em><br />
                            <?php endif; ?>
                            <?php comment_text(); ?>
                        </div>
                    </div>
                </li>
                <?php
                }
            ));
            ?>
        </ul>

        <?php
        // Comment navigation
        the_comments_navigation();
        ?>

    <?php endif; ?>

    <?php
    // If comments are closed
    if (!comments_open() && get_comments_number()):
        echo '<p class="text-muted">Comments are closed.</p>';
    endif;
    ?>

    <?php
    // Comment form with Bootstrap 5 classes
    $fields = array(
        'author' => '<div class="mb-3">
                        <label for="author" class="form-label">Name *</label>
                        <input id="author" name="author" type="text" class="form-control" required />
                     </div>',
        'email' => '<div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input id="email" name="email" type="email" class="form-control" required />
                     </div>',
        'url' => '', // Remove website field
    );

    $args = array(
        'fields' => $fields,
        'title_reply' => '<h3 class="mb-4">💬 Leave a Comment</h3>',
        'label_submit' => 'Post Now',
        'class_submit' => 'btn btn-primary',
        'comment_field' => '<div class="mb-3">
                               <label for="comment" class="form-label">Your Comment *</label>
                               <textarea id="comment" name="comment" class="form-control" rows="5" required></textarea>
                            </div>',
    );

    comment_form($args);
    ?>

</div>