/* ===============================================
# プルダウンメニュー
=============================================== */
$(function() {

	$('#gnavi li').hover(function(){
		$("ul:not(:animated)", this).slideDown();
	}, function(){
		$("ul.child",this).slideUp();
	});

});

/* ===============================================
# フッターサイトマップ
=============================================== */
$(function() {

	$('#footSiteMap h3').on("click", function(){
		if($(this).hasClass('open')) {
			$(this).removeClass('open');
			$('#footSiteMap h3 i').removeClass('fa-angle-up');
			$('#footSiteMap h3 i').addClass('fa-angle-down');
			$('#footMenu').slideUp(200);
		}else{
			$(this).addClass('open');
			$('#footSiteMap h3 i').removeClass('fa-angle-down');
			$('#footSiteMap h3 i').addClass('fa-angle-up');
			$('#footMenu').slideDown(200);
		}
	});

});
/* ===============================================
# スムーススクロール
=============================================== */
$(function() {
	var topBtn = $('#footer #pageTop');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});

	// #で始まるアンカーをクリックした場合に処理
	$('a[href^=#]:not(.inline)').click(function() {
		// スクロールの速度
		var speed = 400;// ミリ秒
		// アンカーの値取得
		var href= $(this).attr("href");
		// 移動先を取得
		var target = $(href == "#" || href == "" ? 'html' : href);
		// 移動先を数値で取得
		var position = target.offset().top;
		// スムーススクロール
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});

/* ===============================================
# class="imgover" の要素に、マウスオーバーで
　"_o.gif" の画像と入れ替える
=============================================== */
function initRollovers() {
	if (!document.getElementById) return

	var aPreLoad = new Array();
	var sTempSrc;
	var aImages = document.getElementsByTagName('img');

	for (var i = 0; i < aImages.length; i++) {
		if (aImages[i].className == 'imgover') {
			var src = aImages[i].getAttribute('src');
			var ftype = src.substring(src.lastIndexOf('.'), src.length);
			var hsrc = src.replace(ftype, '_o'+ftype);

			aImages[i].setAttribute('hsrc', hsrc);
			aPreLoad[i] = new Image();
			aPreLoad[i].src = hsrc;
			aImages[i].onmouseover = function() {
				sTempSrc = this.getAttribute('src');
				this.setAttribute('src', this.getAttribute('hsrc'));
			}
			aImages[i].onmouseout = function() {
				if (!sTempSrc) sTempSrc = this.getAttribute('src').replace('_o'+ftype, ftype);
				this.setAttribute('src', sTempSrc);
			}
		}
	}
}
window.onload = initRollovers;
try{
	window.addEventListener("load",initRollovers,false);
}catch(e){
	window.attachEvent("onload",initRollovers);
}

/* ===============================================
# ポップアップ
=============================================== */
function win01(URL,Winname,Wwidth,Wheight){
    var WIN;
    WIN = window.open(URL,Winname,"width="+Wwidth+",height="+Wheight+",scrollbars=no,resizable=no,toolbar=no,location=no,directories=no,status=no");
    WIN.focus();
}