<?php get_header(); ?>
	<div class="arciveBox">

		<?php wp_get_archives(); ?>
	</div>
	<div class="sidebardisplayBox">
		<div class="postAllBox">
			<?php if(have_posts()): ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="tyouseiBox">
						<a href="<?php the_permalink(); ?>" class="postAtag">
							<div class="postBox">
								<h5 class="dateText"><?php the_time('Y年n月j日'); ?></h5>
								<div class="thumbnailBox">
									<?php if(has_post_thumbnail()):?>
										<?php the_post_thumbnail(); ?>
									<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/img/404.png">
									<?php endif; ?>
								</div>
								<h2 class="postTitle"><?php the_title(); ?></h2>
								<p class="postexcerpt"><?php the_excerpt(); ?></p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
				<h1>記事が見つかりませんでした。</h1>
			<?php endif; ?>
		</div>
		<!-- スマートフォンだった場合 -->
		<div class="smart_nav_links">
			<div class="nav_previous">
				<?php previous_posts_link(); ?>
			</div>
			<div class="nav_next">
				<?php next_posts_link(); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="nav_links">
		<div class="nav_previous">
			<?php previous_posts_link(); ?>
		</div>
		<div class="nav_next">
			<?php next_posts_link(); ?>
		</div>
	</div>
<?php get_footer(); ?>

<script>
	$('.arciveBox a').click(function(e){
		e.preventDefault();
	});
</script>