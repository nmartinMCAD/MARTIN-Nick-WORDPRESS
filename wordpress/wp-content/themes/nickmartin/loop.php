<!--<?php echo basename(__FILE__); ?>-->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>">
      <article <?php post_class(); ?>>
        <?php the_title( '<h2>', '</h2>' );?>
        <?php the_content();?>
      </article>
    </a>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
