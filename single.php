<?php get_header(); ?>
	<div class="sidebardisplayBox">
		<?php if ( have_posts() ) : ?>
		  <?php while( have_posts() ) : the_post(); ?>
		      <div class="singleBox">
		      	<h5 class="dateText"><?php echo get_the_date(); ?></h5>
		      	<p class="tagText"><?php echo the_tags(); ?></p>
			    <h1 class="singleTitleText"><?php the_title(); ?></h1>
				<div class="thumbnailsingleBox">
			      <?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('thumbnail') ?>
				  <?php else : ?>
				 	<img src="<?php bloginfo('template_directory') ?>/img/404.png">
				  <?php endif; ?>
				</div>
			   	<p><?php the_content(); ?></p>
		  	  </div>
		  <?php endwhile;?>
		<?php endif; ?>
		<div class="comments_template_smart_box">
			<?php comments_template(); ?>
		</div>
		<?php get_sidebar(); ?>		
	</div>
	<div class="comments_template_box">
		<?php comments_template(); ?>
	</div>
<?php get_footer(); ?>

