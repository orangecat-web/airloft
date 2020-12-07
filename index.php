<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>

		<!--輪播-->
		<link rel="stylesheet" type="text/css" href="js/bxslider/jquery.bxslider.css">

		<style>
			header{position: absolute;top:20px;z-index: 55;width: 100%; padding: 0 3%;border-bottom:none;}
			.NAV li a { color: #fff; text-shadow: 2px 2px 5px #666;}
			.cd-dropdown-wrapper{position: absolute !important; margin: 20px 0 0 2%;}
			.cd-dropdown-trigger::before, .cd-dropdown-trigger::after { background: #fff;}
		</style>
	</head>

	<body>

		<?php include("header_index.php") ?>


		<div class="BANNER deskTopTablets">

			<p>HOME SWEET HOME</p>

			<ul class="bxslider">
				<li><img src="images/banner.jpg" alt=""></li>
				<li><img src="images/banner.jpg" alt=""></li>
			</ul>

			<div class="SEARCH_BOX">
				<div class="SEARCH">
					<a href="" class="select">買房</a>
					<a href="">租房</a>
					<div>
						<input type="text" name="search" value="" placeholder="">
						<a href="search.php" class="BTN">搜尋</a>
					</div>
				</div>
			</div><!--search-->
		</div>
		<!--手機板輪播-->
		<div class="BANNER Mobile">

			<p>HOME SWEET HOME</p>

			<ul class="bxsliderM Moblie">
				<li><img src="images/house02-1.jpg" alt=""></li>
				<li><img src="images/house02-1.jpg" alt=""></li>
			</ul>

			<div class="SEARCH_BOX">
				<div class="SEARCH">
					<a href="" class="select">買房</a>
					<a href="">租房</a>
					<div>
						<input type="text" name="search" value="" placeholder="">
						<a href="search.php" class="BTN">搜尋</a>
					</div>
				</div>
			</div><!--search-->
		</div>


		<div class="HOME_CONTAINER">

			<!--精選房源 ===============================-->
			<div class="HOME_BOX">

				<div class="HOME_TITLE"><a href="house.php">精選房源</a></div>

				<ul class="COLUMN4">
					<li>
						<a href="house-forsale.php">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="house-forrent.php">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<div class="CLEAR"></div>
				</ul>

			</div><!--HOME_BOX-->



			<!--新建案 ===============================-->
			<div class="HOME_BOX">

				<div class="HOME_TITLE">新建案</div>

				<ul class="COLUMN4">
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<div class="CLEAR"></div>
				</ul>

			</div><!--HOME_BOX-->



			<!--推薦地點 ===============================-->
			<div class="HOME_BOX">

				<div class="HOME_TITLE">推薦地點</div>

				<ul class="COLUMN4">
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案說</p>
						</a>
					</li>
					<div class="CLEAR"></div>
				</ul>

			</div><!--HOME_BOX-->


		</div><!--HOME_CONTAINER-->


		<?php include("footer.php") ?>



		<!--登入.註冊.忘記密碼-->
		<?php include("member_box.php") ?>




		<!---JS↓↓↓--->
		<!--<script src="js/jquery1.8.3.min.js"></script>-->
		<script src="js/bxslider/jquery.bxslider.js"></script>

		<!--banner輪播圖-->
		<script>
			$(document).ready(function() {
				$('.bxslider').bxSlider({
					mode: 'fade',
					auto: true,
					speed: 3000,
					pause: 5000,
					controls : true
				});
			});	
			$(document).ready(function() {
				$('.bxsliderM').bxSlider({
					mode: 'fade',
					auto: true,
					speed: 3000,
					pause: 5000,
					controls : true
				});
			});	
		</script>



		<!--手機menu-->
		<script src="js/dropdown/modernizr.js"></script> <!-- Modernizr -->
		<script src="js/dropdown/jquery.menu-aim.js"></script> <!-- menu aim -->
		<script src="js/dropdown/main.js"></script> <!-- Resource jQuery -->



		<!--文字超過就變省略號-->
		<script>
			$(function(){
				var len = 72; // 超過72個字
				$(".ellipsis").each(function(i){
					if($(this).text().length>len){
						$(this).attr("title",$(this).text());
						var text=$(this).text().substring(0,len-1)+"..."; //以"..."取代
						$(this).text(text);
					}
				});
			});
		</script>



	</body>

</html>
