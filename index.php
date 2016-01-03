<?php get_header(); ?>
<div id="main">
	<div id="content">
		<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<article class="home_article">
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
				<a href="<?php the_permalink(); ?>" class="home_article_thumb_link">
					<div class="home_article_thumb" style="background-image: url('<?php echo $thumb['0']; ?>')">
					</div>
				</a>
				<a href="<?php the_permalink(); ?>" class="home_article_title">
					<?php the_title(); ?>
				</a>
				<span class="home_article_summary">
					<?php the_excerpt(); ?>
				</span>
				<span class="home_article_info">
					<?php echo get_the_date();?> <?php echo get_the_time(); ?>&nbsp;&#183;&nbsp;<?php the_category(', '); ?>
				</span>
			</article>
		<?php endwhile; else: ?>
			<h2>Sorry!</h2>
		<?php endif; ?>
	</div>
	<div class="pagenavi">
		<?php
			global $wp_query;
			$big = 999999999;
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
			) );
		?>
	</div>
	<div class="sidebar">
		<div class="home_sidebar_widget">
			<?php
				wp_nav_menu( array(
				'theme_location' => 'main_menu',
				));
			?>
			<?php if ( ! dynamic_sidebar() ) : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>