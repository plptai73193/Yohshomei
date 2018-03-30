<?php
	global $current_blog;
	$blog_id = $current_blog->blog_id;
	if (is_subpage()) { //固定ページ親取得
		$parent_id = $post->post_parent;
		$pageTitle = get_post($parent_id)->post_title;
		$parentName = get_post($parent_id)->post_name;
	}
?>

<!doctype html>
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<?php if ($blog_id == 1){ ?>
<html <?php language_attributes(); ?>>
<?php } else if ($blog_id == 2){ ?>
<html lang="en">
<?php } else if ($blog_id == 3){ ?>
<html lang="zh-cmn-Hans-CN">
<?php } else if ($blog_id == 4){ ?>
<html lang="zh-cmn-Hant-TW">
<?php } ?>
<!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="Keywords" content="葉祥明, 葉祥明美術館,母親というものは, 絵本, 版画, アートグラフ">
<meta name="Description" content="葉祥明美術館は北鎌倉に1990(平成2)年に開館した美術館。イタリア・ボローニャ国際児童図書展グラフィック賞を受賞している絵本作家・葉祥明の初期の作品から水彩画・油彩画・デッサンなどの原画を展示。絵本作家・葉祥明による安らぎの世界を、毎日の暮らしの中へお届けします。">
<?php if(is_404()) { ?>
<meta name="robots" content="noindex">
<?php } ?>

<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php if(is_front_page()) { ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/common/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/common/css/top.css">
<?php } ?>

<!--[if gte IE 9]><!-->
<script src="<?php bloginfo('template_directory');?>/common/js/jquery-2.1.4.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory');?>/common/js/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/common/js/html5shiv-printshiv.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/common/js/selectivizr-min.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_directory');?>/common/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/common/js/heightLine.js"></script>
<script src="<?php bloginfo('template_directory');?>/common/js/common.js"></script>
<?php wp_head(); ?>
</head>
<?php if (is_main_site()) { ?>
<body <?php body_class(); ?>>
<?php } else { ?>
<body id="enPage" <?php body_class(); ?>>
<?php } ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96485286-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">



<!-- //▼HEADER▼// -->
<header>
	<article class="inner clearfix">
		<?php if(!is_front_page()) { ?>
		<h1 id="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/logo.png" alt="<?php bloginfo('name'); ?>" width="315" height="9" class="over"></a></h1>
		<?php } ?>
		<nav id="headNavi" class="clearfix">
			<?php if (is_main_site()) { ?>
				<ul class="clearfix">
					<li><a href="<?php echo get_site_url(1); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_japanese.png" alt="japanese" class="over"></a></li>
					<li><a href="<?php echo get_site_url(2); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_english.png" alt="English" class="over"></a></li>
					<li><a href="<?php echo get_site_url(3); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_chinak.png" alt="japanese" class="over"></a></li>
					<li><a href="<?php echo get_site_url(4); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_chinah.png" alt="japanese" class="over"></a></li>
					<li><a href="<?php echo home_url('/'); ?>contact/index.html"><img src="<?php bloginfo('template_directory');?>/common/img/hm_contact_en.png" alt="お問い合わせ" class="over"></a></li>
					<li><a href="<?php echo home_url('/'); ?>access/index.html"><img src="<?php bloginfo('template_directory');?>/common/img/hm_access_en.png" alt="アクセス" class="over"></a></li>
				</ul>
			<?php } else { ?>
				<ul class="clearfix">
					<li><a href="<?php echo get_site_url(1); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_japanese.png" alt="japanese" class="over"></a></li>
					<li><a href="<?php echo get_site_url(2); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_english.png" alt="English" class="over"></a></li>
					<li><a href="<?php echo get_site_url(3); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_chinak.png" alt="japanese" class="over"></a></li>
					<li><a href="<?php echo get_site_url(4); ?>"><img src="<?php bloginfo('template_directory');?>/common/img/hm_chinah.png" alt="japanese" class="over"></a></li>
					<li><a href="<?php echo home_url('/'); ?>contact/index.html"><img src="<?php bloginfo('template_directory');?>/common/img/hm_contact_en.png" alt="Contact" class="over"></a></li>
					<li><a href="<?php echo home_url('/'); ?>access/index.html"><img src="<?php bloginfo('template_directory');?>/common/img/hm_access_en.png" alt="Access" class="over"></a></li>
				</ul>
			<?php } ?>
		</nav>
	</article>
	<?php if(!is_front_page()) { ?>
		<?php if(is_page()) { ?>
		<h2 id="pageTitle"><?php the_post_thumbnail(); ?></h2>
		<?php } elseif('exhibition' == get_post_type()) { ?>
			<h2 id="pageTitle"><img src="<?php bloginfo('template_directory');?>/images/exhibition/ttl_exhibition.png"></h2>
		<?php } elseif('event' == get_post_type()) { ?>
			<h2 id="pageTitle"><img src="<?php bloginfo('template_directory');?>/images/event/ttl_event.png"></h2>
		<?php } ?>
	<?php } ?>
</header>
<!-- //△HEADER△// -->



<?php if(is_front_page()) { ?>
<?php if( have_rows('top_main_area') ): ?>
<!-- //▼TOPIMG▼// -->
<div id="topImg">
	<ul>
	<?php while( has_sub_field('top_main_area') ): ?>
		<li style="background: url(<?php the_sub_field('top_main_img'); ?>) no-repeat center center;"></li>
	<?php endwhile; ?>
	</ul>
	<script>
		$(document).ready(function(){
			$('#topImg ul').slick({
				accessibility: false,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 4000,
				cssEase: 'linear',
				draggable: false,
				fade: true,
				pauseOnHover: false,
				touchMove: false
			});
		});
	</script>
</div>
<!-- //△TOPIMG△// -->
<?php endif; ?>
<?php } ?>



<!-- //▼GLOBAL-NAVI▼// -->
<nav id="gnavi">
<?php if ($blog_id == 1){ ?>
	<ul class="inner clearfix">
		<li><a href="<?php echo home_url('/'); ?>"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn01.png" alt="トップ" width="150" height="36" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>info/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn02.png" alt="ご利用案内" width="150" height="36" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>info/index.html#infoDetailWrap"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>開館時間等</a></li>
				<li><a href="<?php echo home_url('/'); ?>info/index.html#couponBox"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>割引クーポン</a></li>
				<li><a href="<?php echo home_url('/'); ?>info/index.html#memberInfo"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>メルマガ申し込み</a></li>
				<li><a href="<?php echo home_url('/'); ?>info/index.html#memberInfo02"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアム会員</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>about/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn03.png" alt="当館について" width="150" height="36" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>about/index.html#aboutPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>葉祥明について</a></li>
				<li><a href="<?php echo home_url('/'); ?>about/index.html#message"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>美術館からのごあいさつ</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>enjoy/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn04.png" alt="美術館を楽しむ" width="150" height="36" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#enjoyPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>コンセプト</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#kannai"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>館内図</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#voice"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>お客様の声</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/kitakamakura.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>北鎌倉を楽しむ</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>exhibition/"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn05.png" alt="展覧会" width="150" height="36" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>schedule/index.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>年間スケジュール</a></li>
				<li><a href="<?php echo home_url('/'); ?>exhibition/category/exhibition1.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>開催中の企画展</a></li>
				<li><a href="<?php echo home_url('/'); ?>exhibition/category/exhibition2.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>次回の企画展</a></li>
				<li><a href="<?php echo home_url('/'); ?>exhibition/category/exhibition3.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>常設展の紹介</a></li>
				<li><a href="<?php echo home_url('/'); ?>exhibition/category/exhibition4.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>過去の展示案内</a></li>
				<li><a href="<?php echo home_url('/'); ?>exhibition/category/column.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>学芸員のおすすめコラム</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>event/"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn06.png" alt="イベント" width="150" height="36" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>event/category/event0.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>開催中のイベント</a></li>
				<li><a href="<?php echo home_url('/'); ?>event/category/event0/event2.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>他館での原画展</a></li>
				<li><a href="<?php echo home_url('/'); ?>event/category/event0/event3.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアムトーク</a></li>
				<li><a href="<?php echo home_url('/'); ?>event/category/event0/event4.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアムミュージック</a></li>
				<li><a href="<?php echo home_url('/'); ?>event/category/event0/event5.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアムイベント</a></li>
				<li><a href="<?php echo home_url('/'); ?>event/category/event0/event6.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>講演会</a></li>
				<li><a href="<?php echo home_url('/'); ?>event/category/event0/event7.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>フェア＆サイン会</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>shimaikan/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn07.png" alt="姉妹館" width="150" height="36" class="over"></span></a></li>
		<li><a href="http://yohshomei-netshop.com/" target="_blank"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn08.png" alt="ショップ" width="150" height="36" class="over"></span></a></li>
	</ul>
<?php } else if ($blog_id == 2){ ?>
	<ul class="inner clearfix">
		<li><a href="<?php echo home_url('/'); ?>"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn01en.png" alt="Top Page" class="over"></span></a></li>
		<!--
		<li><a href="<?php echo home_url('/'); ?>info/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn02en.png" alt="Facilities Guide" width="150" height="39" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>info/index.html#infoDetailWrap"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Information</a></li>
				<li><a href="<?php echo home_url('/'); ?>info/index.html#couponBox"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>割引クーポン</a></li>
				<li><a href="<?php echo home_url('/'); ?>info/index.html#memberInfo"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>メルマガ申し込み</a></li>
				<li><a href="<?php echo home_url('/'); ?>info/index.html#memberInfo02"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアム会員</a></li>
			</ul>
		</li>
	-->
		<li><a href="<?php echo home_url('/'); ?>about/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn03en.png" alt="About us" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>about/index.html#aboutPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>About Yoh Shomei</a></li>
				<li><a href="<?php echo home_url('/'); ?>about/index.html#message"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Our Message</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>enjoy/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn04en.png" alt="Enjoying the Museum" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#enjoyPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>concept</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#kannai"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Tour of the Rooms</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#voice"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Visitor’s Comments</a></li>
				<!--<li><a href="<?php echo home_url('/'); ?>enjoy/kitakamakura.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Guide of Kitakamakura</a></li>-->
			</ul>
		</li>
		<!--
		<li><a href="<?php echo get_site_url(1); ?>/exhibition/"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn05en.png" alt="Exhibition（JPN only）" width="150" height="39" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>schedule/index.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>年間スケジュール</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/exhibition/category/exhibition1.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>開催中の原画展</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/exhibition/category/exhibition2.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>次回の企画展</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/exhibition/category/exhibition3.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>常設展の紹介</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/exhibition/category/exhibition4.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>過去の展示案内</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/exhibition/category/column.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>学芸員のおすすめコラム</a></li>
			</ul>
		</li>
		<li><a href="<?php echo get_site_url(1); ?>/event/"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn06en.png" alt="EVEVT（JPN only）" width="150" height="39" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo get_site_url(1); ?>/event/category/event0.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>開催中のイベント</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/event/category/event0/event2.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>他館での原画展</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/event/category/event0/event3.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアムトーク</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/event/category/event0/event4.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアムミュージック</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/event/category/event0/event5.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ミュージアムイベント</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/event/category/event0/event6.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>講演会</a></li>
				<li><a href="<?php echo get_site_url(1); ?>/event/category/event0/event7.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>フェア＆サイン会</a></li>
			</ul>
		</li>
	-->
		<li><a href="<?php echo home_url('/'); ?>access/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn09en.png" alt="Access" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>contact/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn10en.png" alt="Contact" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>shimaikan/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn07en.png" alt="Our sister museum" class="over"></span></a></li>
		<li><a href="http://yohshomei-netshop.com/" target="_blank"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn08en.png" alt="Our Net Shop" class="over"></span></a></li>
	</ul>
<?php } else if ($blog_id == 3){ ?>
	<ul class="inner clearfix chi_nav">
		<li><a href="<?php echo home_url('/'); ?>"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn01chi.png" alt="首页" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>about/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn02chi.png" alt="参观指南" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>about/index.html#aboutPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>关于叶祥明</a></li>
				<li><a href="<?php echo home_url('/'); ?>about/index.html#message"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>致辞</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>enjoy/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn03chi.png" alt="参观美术馆" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#enjoyPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>理念</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#kannai"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>参观美术馆</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#voice"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>来客的心声</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>access/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn04chi.png" alt="交通" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>contact/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn05chi.png" alt="联系我们" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>shimaikan/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn06chi.png" alt="姐妹馆" class="over"></span></a></li>
		<li><a href="http://yohshomei-netshop.com/" target="_blank"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn07chi.png" alt="网上商店-日本语-" class="over"></span></a></li>
	</ul>
<?php } else if ($blog_id == 4){ ?>
	<ul class="inner clearfix chi_nav">
		<li><a href="<?php echo home_url('/'); ?>"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn01chi.png" alt="首页" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>about/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn02chi2.png" alt="参观指南" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>about/index.html#aboutPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>关于叶祥明</a></li>
				<li><a href="<?php echo home_url('/'); ?>about/index.html#message"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>致辞</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>enjoy/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn03chi2.png" alt="参观美术馆" class="over"></span></a>
			<ul class="child">
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#enjoyPage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>理念</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#kannai"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>参观美术馆</a></li>
				<li><a href="<?php echo home_url('/'); ?>enjoy/index.html#voice"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>来客的心声</a></li>
			</ul>
		</li>
		<li><a href="<?php echo home_url('/'); ?>access/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn04chi2.png" alt="交通" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>contact/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn05chi2.png" alt="联系我们" class="over"></span></a></li>
		<li><a href="<?php echo home_url('/'); ?>shimaikan/index.html"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn06chi.png" alt="姐妹馆" class="over"></span></a></li>
		<li><a href="http://yohshomei-netshop.com/" target="_blank"><span><img src="<?php bloginfo('template_directory');?>/common/img/gn07chi2.png" alt="网上商店-日本语-" class="over"></span></a></li>
	</ul>
<?php } ?>
</nav>
<!-- //△GLOBAL-NAVI△// -->
