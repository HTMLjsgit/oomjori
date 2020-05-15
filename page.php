<?php get_header(); ?>
	<div class="sidebardisplayBox">
			<?php if ( have_posts() ) : ?>
			  <?php while( have_posts() ) : the_post(); ?>

			      <div class="singleBox">
					<div class="thumbnailsingleBox">
			      	  <?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('thumbnail') ?>
					  <?php else : ?>
					 	<img src="<?php bloginfo('template_directory') ?>/img/404.png">
					  <?php endif; ?>
					</div>
				      <h1 class="singleTitleText"><?php the_title(); ?></h1>
				      <p><?php the_content(); ?></p>
			  	  </div>
			  <?php endwhile;?>
			<?php endif; ?>
	</div>
<?php get_footer(); ?>