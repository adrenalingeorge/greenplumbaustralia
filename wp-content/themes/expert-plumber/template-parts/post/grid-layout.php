<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Expert Plumber
 * @since 1.0
 * @version 1.4
 */
?>

<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="article_content">
      <h3><?php the_title(); ?></h3>
      <?php if(has_post_thumbnail()) { ?>
        <?php the_post_thumbnail(); ?>
      <?php }?>
      <div class="metabox">
        <span class="entry-author"><i class="fas fa-user"></i><?php the_author(); ?></span>
        <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
        <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','expert-plumber'), __('0 Comments','expert-plumber'), __('% Comments','expert-plumber') ); ?></span>
      </div>
      <p><?php the_excerpt(); ?></p>
      <div class="read-btn">
        <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','expert-plumber'); ?><i class="fas fa-long-arrow-alt-right"></i><span class="screen-reader-text"><?php esc_html_e('Read More','expert-plumber'); ?></span></a>
      </div>
      <div class="clearfix"></div>
    </div>
  </article>
</div>