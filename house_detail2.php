<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
		<!--點小圖顯示大圖===============-->
		<link rel="stylesheet" href="js/flexslider/flexslider.css" type="text/css" media="screen" />
	</head>
	<body>
		<!--fb分享-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.12';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		<!--fb end-->
		<!--line分享-->
		<script type="text/javascript">LineIt.loadButton();</script>
		<?php include("header.php") ?>
		<div class="row mx-auto CONTAINER HOUSE2">
			<div class="col-8"><h2 class="title">建物名稱</h2></div>
			<div class="col-md-2 ml-auto mb-3">
				<!--社群分享 =============-->
				<section class="share_box">
					<!--fb分享-->
					<div style="margin-top:.25rem" class="fb-share-button" data-href="http://new.web-maker.com.tw/airloft/house_detail.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a></div>
					<!--line分享-->
					<div>
						<a href='javascript: void(window.open(&apos;https://lineit.line.me/share/ui?url=&apos; .concat(encodeURIComponent(location.href)) ));' title='分享給 LINE 好友' style="vertical-align: bottom;display: inline-flex;">
							<i class="fab fa-line"></i>
						</a>
					</div>
					<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
					<!--加到最愛-->
					<div><a href="" class="favorite"><i class="fas fa-heart"></i></a></div>
					<div class="CLEAR"></div>
				</section><!--share_box-->
			</div>
			<!--房屋圖輪播-->
			<div class="col-md-8">
				<div class="SLIDER">
					<div id="slider" class="flexslider">
						<ul class="slides">
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house01.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house02.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house03.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house04.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house05.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house06.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house07.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house08.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house09.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house10.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house11.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house12.jpg"/>
									</div>
								</div>
							</li>
							<li>
								<div class="img-contain">
									<div class="img-shiv">
										<img src="images/house13.jpg"/>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!--小圖備用-->
					<!--<div id="carousel" class="flexslider">
<ul class="slides">
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house01.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house02.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house03.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house04.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house05.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house06.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house07.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house08.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house09.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house10.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house11.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house12.jpg"/>
</div>
</div>
</li>
<li>
<div class="img-contain">
<div class="img-shiv">
<img src="images/house13.jpg"/>
</div>
</div>
</li>
</ul>
</div>-->
				</div><!--SLIDER-->
			</div>
			<div class="col-md-4 RIGHT">
				<dl class="houseInfo">
					<dt class="price">3688<span>萬</span><span>屋主急售</span></dt>
					<dd>4 房 2 廳 3 衛</dd>
					<dd>150 坪 (含車位)</dd>
					<dd>主建物 65 坪 附屬建物 30 坪</dd>
					<dd>形式：電梯大樓</dd>
					<dd>樓層：12F / 28F</dd>
					<dd>地區：台北市 / 信義區</dd>
					<dd>社區：松江一呈院</dd>
					<dd>現況：住宅</dd>
					<dd>座向：坐南朝北</dd>
					<dd>車位：坡道平面</dd>
					<dd>管理費：5600 元</dd>
				</dl>
				<dl class="row align-self-center contactInfo">
					<dd class="col-3 pl-0"><img src="http://griefline.org.au/wp-content/uploads/2015/02/icon-user-default.png" alt=""></dd>
					<dd class="col-9 pt-4 pr-0">
						張先生 <a href="tel:0912345678" class="RED">0912-345678</a> 屋主
					</dd>
					<dd class="col-12"><i class="fas fa-exclamation-circle"></i> 屋主自售，仲介勿擾</dd>
				</dl>
			</div>
			<div class="CLEAR"></div>
			<!--我要出價-->
			<div class="col-md-8 mr-auto">
				<dl class="row goBargain">
					<dd class="col-md-2"><span>我要出價</span></dd>
					<dd class="col-md-10"><input type="text" id="range" value="" name="range"></dd>
				</dl>
			</div>
			<div class="col-12 DETAIL_TITLE">建案詳情</div>
			<!--編輯器-->
			<div class="col-12 HTML">
				<h4 style="font-size:1.2em;font-weight:500;margin-bottom:10px;">建築規劃</h4>
				<p>公 設 比 31%</p>
				<p>建 蔽 率 31%</p>
				<p>交屋屋況 標準配備</p>

				<br>
				<h4 style="font-size:1.2em;font-weight:500;margin-bottom:10px;">周邊配套</h4>
				<p>2個捷運站，12個公車站</p>
				<p>3所國小，2所中學</p>
				<p>4家醫院，6家銀行</p>
			</div>

			<!--google map-->
			<div class="col-12 MAP">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.760920175817!2d121.5632241150065!3d25.042186383968538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abbeaafbd60b%3A0x56567afa690d1a84!2zMTEw5Y-w5YyX5biC5L-h576p5Y2A5Z-66ZqG6Lev5LiA5q61MTU16Jmf!5e0!3m2!1szh-TW!2stw!4v1522379181012" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<!--留言-->
			<div class="col-12 MESSAGE">
				<textarea name="message" id="" cols="30" rows="10" placeholder="我想留言" style="width:100%;"></textarea>
				<div class="CENTER"><input type="submit" value="送出" class="BTN"></div>
			</div>

		</div><!--CONTAINER-->
		<?php include("footer.php") ?>

		<link rel="stylesheet" href="js/ionRangeSlider/css/normalize.css">
		<link rel="stylesheet" href="js/ionRangeSlider/css/ion.rangeSlider.css">
		<link rel="stylesheet" href="js/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">
		<script src="js/ionRangeSlider/js/jquery-1.12.3.min.js"></script>
		<script src="js/ionRangeSlider/js/ion.rangeSlider.js"></script>
		<script>
			$(function () {
				$("#range").ionRangeSlider({
					hide_min_max: true,
					keyboard: true,
					min: 3000,
					max: 3688,
					from: 3000,
					to: 3688,
					type: 'double',
					step: 1,
					prefix: "$",
					grid: true,
				});
			});
		</script>
		<!--登入.註冊.忘記密碼-->
		<?php include("member_box.php") ?>
		<?php include("footer_js.php") ?>

		<!--點小圖顯示大圖 ===================-->
		<!-- FlexSlider -->
		<script defer src="js/flexslider/jquery.flexslider.js"></script>
		<script>
			$(window).load(function() {
				// The slider being synced must be initialized first
				$('#carousel').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					itemWidth: 125,
					itemMargin: 3,
					asNavFor: '#slider'
				});

				$('#slider').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					sync: "#carousel"
				});
			});
		</script>
	</body>

</html>
