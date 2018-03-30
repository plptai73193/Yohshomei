<?php get_header(); ?>



<!-- //▼CONTAINER▼// -->
<div id="container">
	<article class="inner clearfix">

		<!-- ▼MAINAREA▼ -->
		<div class="column2main">


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>


<?php if (is_main_site()) { ?>
			<!--****-->
			<?php
				$wp_query = new WP_Query();
				$param = array(
					'posts_per_page' => '1',
					'post_type' => 'exhibition',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$wp_query->query($param);
				if($wp_query->have_posts()):
			?>
			<div id="topExhibition">
				<?php if (is_main_site()) { ?>
				<h2><img src="<?php bloginfo('template_directory');?>/images/top/ttl_exhibition.png" alt="企画展" width="260" height="27"></h2>
				<?php } else { ?>
				<h2><img src="<?php bloginfo('template_directory');?>/images/top/ttl_exhibition.png" alt="EXHIBITIONS"></h2>
				<?php } ?>
				<ul>
					<?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li>
						<figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(770, 370), array('class' => 'over') ); ?></a></figure>
						<h3><?php the_title(); ?></h3>
						<div class="txt"><?php echo mb_substr(get_the_excerpt(), 0, 100); ?></div>
						<p class="btn"><a href="<?php the_permalink(); ?>" class="btnStyle01"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>続きを読む</span></a></p>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			<!--****-->
			<!--****-->
			<?php
				$wp_query = new WP_Query();
				$param = array(
					'posts_per_page' => '2',
					'post_type' => 'event',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$wp_query->query($param);
				if($wp_query->have_posts()):
			?>
			<div id="topEvent">
				<h2><img src="<?php bloginfo('template_directory');?>/images/top/ttl_event.png" alt="イベント" width="260" height="26"></h2>
				<ul class="clearfix">
					<!--**-->
					<?php while($wp_query->have_posts()) : $wp_query->the_post(); $terms = get_the_terms($post->ID,'event_cat'); ?>
					<li>
						<dl class="clearfix">
							<dt><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(246, 310), array('class' => 'over') ); ?></a></dt>
							<dd>
								<div class="cate"><?php foreach($terms as $term1) : echo $term1->name; endforeach; ?></div>
								<h3><?php the_title(); ?></h3>
								<div class="txt"><?php echo mb_substr(get_the_excerpt(), 0, 100); ?></div>
								<p class="btn"><a href="<?php the_permalink(); ?>" class="btnStyle01"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>続きを読む</span></a></p>
							</dd>
						</dl>
					</li>
					<?php endwhile; ?>
					<!--**-->
				</ul>
			</div>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			<!--****-->
<?php } ?>



		</div>
		<!-- △MAINAREA△ -->
		<!-- ▼SIDEAREA▼ -->
		<div class="column2side">
			<?php the_field('top_right'); ?>
		</div>
		<!-- △△SIDEAREA△△ -->

	</article>
	<figure><img src="<?php bloginfo('template_directory');?>/common/img/bg_topfooter.gif" alt=""></figure>
</div>
<!-- //△CONTAINER△// -->



<?php get_footer(); ?>