<?php if('exhibition' == get_post_type()) { ?>
	<!--*-->
	<ul class="sideMenu02">
			<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'exhibition_cat') ); ?>
		</ul>
	<!--*-->
<?php } elseif('event' == get_post_type()) { ?>
	<!--*-->
	<ul class="sideMenu02">
		<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'event_cat') ); ?>
	</ul>
	<!--*-->
<?php } elseif(is_page()) { ?>
	<?php if (is_subpage()) { //固定ページ親取得
		$parent_id = $post->post_parent;
		$pageTitle = get_post($parent_id)->post_title;
		$parentName = get_post($parent_id)->post_name;
	?>
	<nav class="sideMenu">
		<h4 class="sideTtl"><section><span><i class="fa fa-angle-right" aria-hidden="true"></i></span><span><?php echo $pageTitle; ?></span></section></h4>
		<?php wp_nav_menu( array(
			'theme_location'=> $parentName.'-menu',
			'container'     =>'',
			'menu_class'    =>'',
			'items_wrap'    =>'<ul>%3$s</ul>'));
		?>
	</nav>
	<?php } ?>
<?php } else { ?>



<?php } ?>
<?php dynamic_sidebar(sidebar1); ?>
