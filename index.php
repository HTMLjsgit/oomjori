<?php get_header(); ?>
	<div class="sidebardisplayBox">
		<div class="postAllBox">
			<?php if(have_posts()): ?>
				<?php while(have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="postAtag">
						<div class="postBox">
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
				<?php endwhile; ?>
			<?php else: ?>
				<h1>記事が見つかりませんでした。</h1>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
