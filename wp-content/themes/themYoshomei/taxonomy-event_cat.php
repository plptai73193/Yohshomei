<?php get_header(); ?>



<!-- //▼CONTAINER▼// -->
<div id="container">
	<article class="inner clearfix">


		<!-- ▼MAINAREA▼ -->
		<div class="column2main">

			<div id="exList">
			<?php if( is_category() ) { ?>
				<h2 class="title01"><!--カテゴリー--><?php single_cat_title(); ?></h2>
			<?php } elseif( is_tag() ) { ?>
				<h2 class="title01"><!--タグ--><?php single_tag_title(); ?></h2>
			<?php } elseif( is_tax() ) { ?>
				<h2 class="title01"><!--ターム--><?php single_term_title(); ?></h2>
			<?php } elseif (is_day()) { ?>
				<h2 class="title01"><!--日別アーカイブ--><?php echo get_the_time('Y.m.d'); ?></h2>
			<?php } elseif (is_month()) { ?>
				<h2 class="title01"><!--月別アーカイブ--><?php echo get_the_time('Y.m'); ?></h2>
			<?php } elseif (is_year()) { ?>
				<h2 class="title01"><!--年別アーカイブ--><?php echo get_the_time('Y'); ?></h2>
			<?php } elseif (is_author()) { ?>
				<h2 class="title01"><!--投稿者アーカイブ--><?php echo esc_html(get_queried_object()->display_name); ?></h2>
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="title01">ARCHIVE</h2>
			<?php } ?>
			<?php wp_reset_query();?>


			<?php if (have_posts()) { ?>
				<ul class="list">
					<?php while (have_posts()) : the_post(); ?>
						<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(770, 370), array('class' => 'over') ); ?></a></figure>
							<h3><?php the_title(); ?></h3>
							<div class="txt"><?php echo mb_substr(get_the_excerpt(), 0, 100); ?></div>
							<p class="btn"><a href="<?php the_permalink(); ?>" class="btnStyle01"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>続きを読む</span></a></p>
						</li>
					<?php endwhile; ?>
				</ul>
				<!-- ▼PAGER -->
				<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
				<div class="pager">
				<?php global $wp_rewrite;
				$paginate_base = get_pagenum_link(1);
				if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
					$paginate_format = '';
					$paginate_base = add_query_arg('paged','%#%');
				}
				else{
					$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
					user_trailingslashit('page/%#%/','paged');;
					$paginate_base .= '%_%';
				}
				echo paginate_links(array(
					'base' => $paginate_base,
					'format' => $paginate_format,
					'total' => $wp_query->max_num_pages,
					'mid_size' => 4,
					'current' => ($paged ? $paged : 1),
					'prev_text' => '«',
					'next_text' => '»',
				)); ?>
				</div>
				<?php endif; ?>
				<!-- △PAGER -->
			<?php } ?>
			</div>

		</div>
		<!-- △MAINAREA△ -->
		<!-- ▼SIDEAREA▼ -->
		<div class="column2side">
			<?php get_sidebar(); ?>
		</div>


	</article>
</div>
<!-- //△CONTAINER△// -->



<?php get_footer(); ?>