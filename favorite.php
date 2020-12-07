<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
	</head>
	<body>
		<?php include("header.php") ?>
		<div class="CONTAINER HOUSE">
			<div class="HOME_BOX">
				<ul class="COLUMN4 favorite">
					<li>
						<button><i class="far fa-heart"></i></button>
						<a href="house-forrent.php">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</a>
					</li>
					<li>
						<button><i class="far fa-heart"></i></button>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</a>
					</li>
					<li>
						<button><i class="far fa-heart"></i></button>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</a>
					</li>
					<li>
						<button><i class="far fa-heart"></i></button>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/4.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</a>
					</li>
					<li>
						<button><i class="far fa-heart"></i></button>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/1.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</a>
					</li>
					<li>
						<button><i class="far fa-heart"></i></button>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/2.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</a>
					</li>
					<li>
						<button><i class="far fa-heart"></i></button>
						<a href="">
							<div class="img-contain">
								<div class="img-shiv bg" style="background-image:url(images/home/3.jpg);"></div>
							</div>
							<h3>建案名稱</h3>
							<p>建案說明簡述建案說明簡述建案</p>
						</a>
					</li>
					<li>
						<button><i class="far fa-heart"></i></button>
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


				<!--頁碼-->
				<div class="PAGES CENTER">             
					<!--<a href="javascript:;" class="page gradient">&lt;</a>-->
					<span class="page active">1</span> 
					<a href="#" class="page">2</a> 
					<a href="#" class="page">3</a> 
					<a href="javascript:;" class="page gradient">&gt;</a>           
				</div>

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
					type: "single",
					min: 10,
					max: 200,
					from: 10,
					step: 10
				});
			});
			$(function () {
				$("#rangePrive").ionRangeSlider({
					type: "double",
					min: 0,
					max: 10000,
					grid: true
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

	</body>

</html>
