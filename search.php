<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>

		<!--小圖輪播-->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="js/carousel/style.css">

		<!--頁籤 Zozo Tabss-->
		<link href="js/tab/zozo.tabs.min.css" rel="stylesheet" />
		<link href="js/tab/zozo.tabs.flat.min.css" rel="stylesheet" />

	</head>

	<body>

		<?php include("header.php") ?>


		<div class="CONTAINER HOUSE">


			<div class="SEARCH_BOX2">
				<input type="text" value="" name="keywords" id="keywords" placeholder="請輸入關鍵字" data-text="請輸入關鍵字" autocomplete="off"><input type="submit" value="搜尋" class="BTN">
			</div>

			<!--搜尋區-->
			<div class="SEARCH_BOX3">
				<div class="POSITION">
					<div id="qaContent">
						<ul>
							<li>
								<div>選擇地區</div>
								<div>
									<ul class="AREA">
										<li>
											<span>北部</span>
											<ul>
												<li><input type="checkbox" name="area1" value=""> 台北市</li>
												<li><input type="checkbox" name="area1" value=""> 新北市</li>
												<li><input type="checkbox" name="area1" value=""> 桃園市</li>
												<li><input type="checkbox" name="area1" value=""> 新竹縣</li>
												<li><input type="checkbox" name="area1" value=""> 新竹市</li>
												<li><input type="checkbox" name="area1" value=""> 基隆市</li>
												<li><input type="checkbox" name="area1" value=""> 宜蘭縣</li>
											</ul>
										</li>
										<li>
											<span>中部</span>
											<ul>
												<li><input type="checkbox" name="area1" value=""> 台中市</li>
												<li><input type="checkbox" name="area1" value=""> 苗栗縣</li>
												<li><input type="checkbox" name="area1" value=""> 彰化縣</li>
												<li><input type="checkbox" name="area1" value=""> 南投縣</li>
												<li><input type="checkbox" name="area1" value=""> 雲林縣</li>
											</ul>
										</li>
										<li>
											<span>南部</span>
											<ul>
												<li><input type="checkbox" name="area1" value=""> 高雄市</li>
												<li><input type="checkbox" name="area1" value=""> 台南市</li>
												<li><input type="checkbox" name="area1" value=""> 屏東縣</li>
												<li><input type="checkbox" name="area1" value=""> 嘉義市</li>
												<li><input type="checkbox" name="area1" value=""> 嘉義縣</li>
											</ul>
										</li>
										<li>
											<span>東部</span>
											<ul>
												<li><input type="checkbox" name="area1" value=""> 花蓮縣</li>
												<li><input type="checkbox" name="area1" value=""> 台東縣</li>
												<li><input type="checkbox" name="area1" value=""> 金門縣</li>
												<li><input type="checkbox" name="area1" value=""> 澎湖縣</li>
												<li><input type="checkbox" name="area1" value=""> 連江縣</li>
											</ul>
										</li>
									</ul>

								</div>
							</li>

							<li>
								<div>選擇鄉鎮</div>
								<div>
									<ul class="AREA AREA2">
										<li><input type="checkbox" name="area2" value=""> 不限</li>
										<li><input type="checkbox" name="area2" value=""> 松山區</li>
										<li><input type="checkbox" name="area2" value=""> 信義區</li>
										<li><input type="checkbox" name="area2" value=""> 中山區</li>
										<li><input type="checkbox" name="area2" value=""> 大安區</li>
										<li><input type="checkbox" name="area2" value=""> 內湖區</li>
										<li><input type="checkbox" name="area2" value=""> 北投區</li>
										<li><input type="checkbox" name="area2" value=""> 士林區</li>
										<li><input type="checkbox" name="area2" value=""> 中正區</li>
										<li><input type="checkbox" name="area2" value=""> 南港區</li>
										<li><input type="checkbox" name="area2" value=""> 文山區</li>
										<li><input type="checkbox" name="area2" value=""> 萬華區</li>
										<li><input type="checkbox" name="area2" value=""> 大同區</li>
									</ul>
								</div>
							</li>

							<li>
								<div>使用用途</div>
								<div>
									<ul class="AREA AREA2">
										<li><input type="radio" name="use" value=""> 住宅</li>
										<li><input type="radio" name="use" value=""> 商辦</li>
										<li><input type="radio" name="use" value=""> 店面</li>
										<li><input type="radio" name="use" value=""> 土地</li>
										<li><input type="radio" name="use" value=""> 商務中心</li>
									</ul>
								</div>
							</li>

							<li>
								<div>建築類型</div>
								<div>
									<ul class="AREA AREA2">
										<li><input type="checkbox" name="type" value=""> 不限</li>
										<li><input type="checkbox" name="type" value=""> 電梯大樓</li>
										<li><input type="checkbox" name="type" value=""> 公寓</li>
										<li><input type="checkbox" name="type" value=""> 套房</li>
										<li><input type="checkbox" name="type" value=""> 別墅</li>
										<li><input type="checkbox" name="type" value=""> 商務中心</li>
									</ul>
								</div>
							</li>
							<li>
								<div>坪　　數</div>
								<div class="row no-gutters rangeSpace">
									<p class="col-11"><input type="text" id="rangeSpace" value="" name="range"></p>
									<p class="col pt-3 pl-1"><input type="radio">150坪以上</p>
								</div>
							</li>
							<li>
								<div>總　　價</div>
								<div class="row no-gutters rangePrive">
									<p class="col-11"><input type="text" id="rangePrive" value="" name="range"></p>
									<p class="col pt-3 pl-1"><input type="radio">1億以上</p>
								</div>
							</li>
							<li>
								<div>車　　位</div>
								<div>
									<input type="radio" name="parking" value=""> 有
									<input type="radio" name="parking" value=""> 無
								</div>
							</li>
							<li>
								<div>捷　　運</div>
								<div>
									<select name="" id="">
										<option value="">淡水</option>
									</select> 線
									<select name="" id="">
										<option value="">劍潭</option>
									</select> 站
								</div>
							</li>
							<li>
								<div>房&nbsp;&nbsp;間&nbsp;&nbsp;數</div>
								<div>
									<ul class="AREA AREA2">
										<li><input type="radio" name="room" value=""> 不限</li>
										<li><input type="radio" name="room" value=""> 1間</li>
										<li><input type="radio" name="room" value=""> 2間</li>
										<li><input type="radio" name="room" value=""> 3間</li>
										<li><input type="radio" name="room" value=""> 4間</li>
										<li><input type="radio" name="room" value=""> 4間以上</li>
									</ul>
								</div>
							</li>
						</ul>
					</div><!--qaContent-->
					<div class="CLEAR"></div>
				</div>
			</div><!--SEARCH_BOX2-->

			<div class="clearfix"></div>



			<!--精選推薦 ================================-->
			<div class="RECOM">
				<div class="title">精選推薦</div>

				<div class="customNavigation">
					<a class="btn gray prev"><i class="icon ion-ios-arrow-left"></i></a>
					<a class="btn gray next"><i class="icon ion-ios-arrow-right"></i></a>
				</div>


				<div id="slider-carousel" class="owl-carousel">
					<div class="item">
						<a class="hoverfx" href="house-forsale.php">
							<img src="images/home/1.jpg" alt="">
						</a>
						<div class="BOX">
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</div>
					</div>

					<div class="item">
						<a class="hoverfx" href="house-forsale.php">
							<img src="images/home/2.jpg" alt="">
						</a>
						<div class="BOX">
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</div>
					</div>

					<div class="item">
						<a class="hoverfx" href="house-forsale.php">
							<img src="images/home/3.jpg" alt="">
						</a>
						<div class="BOX">
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</div>
					</div>

					<div class="item">
						<a class="hoverfx" href="house-forsale.php">
							<img src="images/home/4.jpg" alt="">
						</a>
						<div class="BOX">
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</div>
					</div>

					<div class="item">
						<a class="hoverfx" href="house-forsale.php">
							<img src="images/home/2.jpg" alt="">
						</a>
						<div class="BOX">
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</div>
					</div>

					<div class="item">
						<a class="hoverfx" href="house-forsale.php">
							<img src="images/home/3.jpg" alt="">
						</a>
						<div class="BOX">
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</div>
					</div>

				</div><!--slider-->
			</div><!--RECOM-->




			<div id="tabbed-nav">

				<!-- Tab Navigation Menu -->
				<ul>
					<li><a alt="" title="">全部</a></li>
					<li><a alt="" title="">住宅</a></li>
					<li><a alt="" title="">商辦</a></li>
					<li><a alt="" title="">新建案</a></li>
				</ul>

				<!-- Content container -->
				<div>

					<!-- 全部 -->
					<div>
						<div class="HOME_BOX">

							<ul class="COLUMN4">
								<li>
									<a href="house-forsale.php">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<div class="CLEAR"></div>
							</ul>

						</div>
					</div>
					<!-- end 全部 -->



					<!-- 住宅 -->
					<div>
						<div class="HOME_BOX">

							<ul class="COLUMN4">
								<li>
									<a href="house-forsale.php">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<div class="CLEAR"></div>
							</ul>

						</div>
					</div>
					<!-- end 住宅 -->




					<!-- 商辦 -->
					<div>
						<div class="HOME_BOX">

							<ul class="COLUMN4">
								<li>
									<a href="house-forsale.php">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<div class="CLEAR"></div>
							</ul>

						</div>
						<!-- end 商辦 -->
					</div>
					
					<!-- 新建案 -->
					<div>
						<div class="HOME_BOX">

							<ul class="COLUMN4">
								<li>
									<a href="house-forsale.php">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="img-contain">
											<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
										</div>
										<h3>建案名稱</h3>
										<p>建案說明簡述建案說明簡述建案</p>
									</a>
								</li>
								<div class="CLEAR"></div>
							</ul>

						</div>
						<!-- end 新建案 -->
					</div>

				</div>
				<!-- Zozo Tabs End-->


			</div><!--HOME_BOX-->

		</div><!--CONTAINER-->


		<?php include("footer.php") ?>


		<link rel="stylesheet" href="js/ionRangeSlider/css/normalize.css">
		<link rel="stylesheet" href="js/ionRangeSlider/css/ion.rangeSlider.css">
		<link rel="stylesheet" href="js/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">
		<script src="js/ionRangeSlider/js/jquery-1.12.3.min.js"></script>
		<script src="js/ionRangeSlider/js/ion.rangeSlider.js"></script>
		<script>
			$(function () {
				$("#rangeSpace").ionRangeSlider({
					type: "double",
					grid: true,
					from: 1,
					to: 9,
					values: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 150, 200]
				});
			});
			$(function () {
				$("#rangePrive").ionRangeSlider({
					type: "double",
					grid: true,
					from: 1,
					to: 9,
					values: [100, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 6500, 7000, 7500, 8000, 8500, 9000, 9500, 1]
				});
			});
		</script>
		<!--登入.註冊.忘記密碼-->
		<?php include("member_box.php") ?>



		<?php include("footer_js.php") ?>


		<!--點選展開-->
		<script type="text/javascript">
			$(function(){
				// 幫 #qaContent 的 ul 子元素加上 .accordionPart
				// 接著再找出 li 中的第一個 div 子元素加上 .qa_title
				// 並幫其加上 hover 及 click 事件
				// 同時把兄弟元素加上 .qa_content 並隱藏起來
				$('#qaContent ul').addClass('accordionPart').find('li div:nth-child(1)').addClass('qa_title').hover(function(){
					$(this).addClass('qa_title_on');
				}, function(){
					$(this).removeClass('qa_title_on');
				}).click(function(){
					// 當點到標題時，若答案是隱藏時則顯示它，同時隱藏其它已經展開的項目
					// 反之則隱藏
					var $qa_content = $(this).next('div.qa_content');
					if(!$qa_content.is(':visible')){
						$('#qaContent ul li div.qa_content:visible').slideUp();
					}
					$qa_content.slideToggle();
				}).siblings().addClass('qa_content').hide();
			});
		</script>


		<!--小圖輪播-->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
		<script  src="js/carousel/index.js"></script>



		<!-- Zozo Tabss -->
		<script src="js/tab/zozo.tabs.min.js"></script>
		<script>
			jQuery(document).ready(function ($) {
				/* jQuery activation and setting options for first tabs*/
				$("#tabbed-nav").zozoTabs({
					position: "top-left",
					theme: "grey",//換底色
					/*style: "underlined",*///拿掉可換底色
					rounded: false,
					shadows: false,
					defaultTab: "tab1",
					/*animation: {
            easing: "easeInOutCirc",
            effects: "slideV"
            },*/
					size: "xxlarge"
				});

			});
		</script>


	</body>

</html>
