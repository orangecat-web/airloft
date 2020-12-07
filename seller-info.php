<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
		<!--點小圖顯示大圖===============-->
		<link rel="stylesheet" href="js/flexslider/flexslider.css" type="text/css" media="screen" />
	</head>
	<body>
		<?php include("header.php") ?>
		<div class="row mx-auto CONTAINER">
			<!--房仲 屋主評價-->
			<div class="row sellerRank">
				<div class="col-md-3">
					<div class="sellerImg">
						<img src="https://previews.123rf.com/images/butsaya/butsaya1507/butsaya150700086/42241460-unknown-short-hair-businesswoman-silhouette-.jpg" alt="">
					</div>
					<div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-rank-tab" data-toggle="pill" href="#v-pills-rank" role="tab" aria-controls="v-pills-rank" aria-selected="true">評價</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">賣房源 (100)</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">租房源 (100)</a>
						<!--<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">團隊數量 (10)</a>-->
					</div>
				</div>
				<div class="col-md-9">
					<dl class="sellerInfo">
						<dd><h3>您好，我是 James!</h3></dd>
						<dd>我是房仲  |  加入時間：2018年1月</dd>
						<dd>ＸＸ房屋  |  房仲登記字號：12345678</dd>
					</dl>
					<div class="row mx-0 Room">
						<div class="col-12 assess">
							<p><b>25 評價</b></p>
							<p>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</p>
						</div>
						<p class="col-md-6 assess">
							專業能力
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
						</p>
						<p class="col-md-6 assess">
							推薦精準度
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
						</p>
						<p class="col-md-6 assess">
							服務態度
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
						</p>
						<p class="col-md-6 assess">
							照片精美度
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
						</p>
					</div>
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-rank" role="tabpanel" aria-labelledby="v-pills-rank-tab">
							<div class="row mx-0 pb-3 Room Appraiser">
								<div class="col-3">
									<div class="bigHead mx-auto"><img src="https://previews.123rf.com/images/butsaya/butsaya1507/butsaya150700086/42241460-unknown-short-hair-businesswoman-silhouette-.jpg" alt=""></div>
								</div>
								<dl class="col-md-3 col-6 Appraiser">
									<dd><b>Ｍark</b></dd>
									<dd>2018年1月</dd>
								</dl>
								<p class="col-12 mt-4 Message">回覆速度快，介紹用心。</p>
							</div>
							<div class="row mx-0 pb-3 Room Appraiser">
								<div class="col-3">
									<div class="bigHead mx-auto"><img src="https://previews.123rf.com/images/butsaya/butsaya1507/butsaya150700086/42241460-unknown-short-hair-businesswoman-silhouette-.jpg" alt=""></div>
								</div>
								<dl class="col-md-3 col-6 Appraiser">
									<dd><b>Ｍark</b></dd>
									<dd>2018年1月</dd>
								</dl>
								<p class="col-12 mt-4 Message">回覆速度快，介紹用心。</p>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<dl class="row sellerHouse">
								<dd class="col-md-4">
									<p><b>案件名稱</b></p>
									<p>242新北市新莊區福美街128巷</p>
									<p>總金額：＄58,000,000元</p>
								</dd>
								<dd class="col-md-8">
									<p><img src="images/house12.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4">
									<p><b>案件名稱</b></p>
									<p>242新北市新莊區福美街128巷</p>
									<p>總金額：＄58,000,000元</p>
								</dd>
								<dd class="col-md-8">
									<p><img src="images/house12.jpg" alt=""></p>
								</dd>
							</dl>
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<dl class="row sellerHouse">
								<dd class="col-md-4">
									<p><b>案件名稱</b></p>
									<p>242新北市新莊區福美街128巷</p>
									<p>租金：＄58,000元</p>
								</dd>
								<dd class="col-md-8">
									<p><img src="images/house12.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4">
									<p><b>案件名稱</b></p>
									<p>242新北市新莊區福美街128巷</p>
									<p>租金：＄58,000元</p>
								</dd>
								<dd class="col-md-8">
									<p><img src="images/house12.jpg" alt=""></p>
								</dd>
							</dl>
						</div>
						<!--<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>-->
					</div>
				</div>
			</div>
		</div><!--CONTAINER-->
		<?php include("footer.php") ?>
		<!--登入.註冊.忘記密碼-->
		<?php include("member_box.php") ?>
		<?php include("footer_js.php") ?>
	</body>
</html>
