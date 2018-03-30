<!-- //▼FOOTER▼// -->
<footer id="footer">
	<div id="footSiteMap">
		<article class="inner">
			<h3 class="en"><i class="fa fa-angle-down" aria-hidden="true"></i>SITE MAP<i class="fa fa-angle-down" aria-hidden="true"></i></h3>
			<nav id="footMenu" class="clearfix">
				<div class="fmBox">
				<?php if ( has_nav_menu( 'footer-menu1' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu1',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				<?php if ( has_nav_menu( 'footer-menu2' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu2',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				</div>
				<div class="fmBox">
				<?php if ( has_nav_menu( 'footer-menu3' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu3',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				<?php if ( has_nav_menu( 'footer-menu4' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu4',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				</div>
				<div class="fmBox">
				<?php if ( has_nav_menu( 'footer-menu5' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu5',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				<?php if ( has_nav_menu( 'footer-menu6' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu6',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				</div>
				<div class="fmBox">
				<?php if ( has_nav_menu( 'footer-menu7' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu7',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				<?php if ( has_nav_menu( 'footer-menu8' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu8',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				</div>
				<div class="fmBox">
				<?php if ( has_nav_menu( 'footer-menu9' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu9',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				<?php if ( has_nav_menu( 'footer-menu10' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location'=>'footer-menu10',
						'container'     =>'',
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				<?php } ?>
				</div>
			</nav>
		</article>
	</div>
	<div id="footInfo">
		<article class="inner">
			<p class="logo"><a href="/"><img src="<?php bloginfo('template_directory');?>/common/img/foot_logo.png" alt="葉祥明美術館" width="236" height="60" class="over"></a></p>
			<ul class="snsBtn">
				<li><a href="https://www.tripadvisor.jp/Attraction_Review-g303156-d5062639-Reviews-Yo_Shomei_Art_Museum-Kamakura_Kanagawa_Prefecture_Kanto.html" target="_blank"><img src="<?php bloginfo('template_directory');?>/common/img/icon_tripad.png" alt="TripAdvisor" width="29" height="29" class="over"></a></li>
				<li><a href="https://www.facebook.com/kitakamakura.yohshomei.art.museum/" target="_blank"><img src="<?php bloginfo('template_directory');?>/common/img/icon_facebook.png" alt="Facebook" width="29" height="29" class="over"></a></li>
				<li><a href="#" target="_blank"><img src="<?php bloginfo('template_directory');?>/common/img/icon_twitter.png" alt="Twitter" width="29" height="29" class="over"></a></li>
			</ul>
			<?php if (!is_main_site()) { ?>
			<p id="bunnka"><img src="<?php bloginfo('template_directory');?>/common/img/logo_bunka.png" alt="文化庁"></p>
			<?php } ?>
			<p id="copy">Copyright &copy; 2017 BIRD CO.,LTD.All rights reserved.</p>
		</article>
	</div>
	<p id="pageTop"><a href="#"><img src="<?php bloginfo('template_directory');?>/common/img/pagetop.png" alt="TOP" width="96" height="95" class="over"></a></p>
</footer>
<!-- //△FOOTER△// -->



</div><!-- End of wrapper -->
<?php wp_footer(); ?>
</body>
</html>
