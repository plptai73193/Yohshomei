<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- //▼CONTAINER▼// -->
<div id="container" <?php post_class(); ?>>
	<article class="inner clearfix">

		<!-- ▼MAINAREA▼ -->
		<div class="column2main">

			<div id="exDetail">
				<figure><?php the_post_thumbnail(); ?></figure>
				<h2><?php echo get_the_title(); ?></h2>
				<?php the_content(); ?>
			</div>

		</div>
		<!-- △MAINAREA△ -->
		<!-- ▼SIDEAREA▼ -->
		<div class="column2side">
			<?php get_sidebar(); ?>
		</div>
		<!-- △SIDEAREA△ -->

	</article>
</div>
<!-- //△CONTAINER△// -->
<?php endwhile; else: ?>
<div id="container" <?php post_class(); ?>>
	<article class="inner clearfix">
		<?php if (is_main_site()) { ?>
			<p class="alignC tsp50 bsp50">記事はありません</p>
		<?php } else { ?>
			<p class="alignC tsp50 bsp50">NOT FOUND</p>
		<?php } ?>

	</article>
</div>
<?php endif; ?>



<?php get_footer(); ?>