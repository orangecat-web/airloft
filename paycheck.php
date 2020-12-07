<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
	</head>
	<body>
		<?php include("header.php") ?>

		<div class="CONTAINER p-lg-5">
			<div class="row mx-md-auto">
				<div class="col-md-6 paycheckInfo">
					<h3 class="title">太好了！您即將在您的事業上邁進一大步。</h3>
					<p>您選擇訂閱的是 <!--會因選擇方案版本更換--><b>Top Sales 版</b></p>
					<p><b>1. 付費週期</b></p>
					<p><i class="far fa-circle"></i> <!--會因選擇方案版本更換-->月付 新台幣 $999元
					</p>
					<dl class="row mx-auto memberLog">
						<dd class="col-sm-6 mb-5 pl-0"><b>2. 建立帳戶</b></dd>
						<dd class="col-sm-6 mb-5 pr-0">使用 <a class="fancybox" href="#LOGIN"><b>現有的看房去帳戶</b></a></dd>
						<dd class="col-sm-6">
							<label for="">名字</label>
							<input type="text">
						</dd>
						<dd class="col-sm-6">
							<label for="">姓氏</label>
							<input type="text">
						</dd>
						<dd class="col-sm-6">
							<label for="">電子郵件</label>
							<input type="text">
						</dd>
						<dd class="col-sm-6">
							<label for="">密碼</label>
							<input type="password">
						</dd>
						<dd class="col-12">
							<label for="">輸入優惠代碼</label>
							<input type="text"><button>確認輸入</button>
						</dd>
					</dl>
				</div>
				<div class="col-md-6">
					<div class="p-md-4 p-3 checkOut">
						<h3 class="title mb-4"><!--會因選擇方案版本更換-->Top Sales 版</h3>
						<h4 class="title mb-4">立即付費：<!--會因選擇方案版本更換--><b>新台幣 $999 元</b> 您已取得多一個月免費</h4>
						<p>我們每月會向您收取 <!--會因選擇方案版本更換--><b>新台幣 $999 元</b> 的費用，直到您取消訂購方案為止。退訂之後，除非法律強制規定，否則先前所收取的費用並不會退還給您。您的付款資料已經過加密處理，安全無虞。這裡所列的價格均以 TWD 台幣 計價。</p>
						<input type="checkbox"> <a href="#"><b>我同意 看房去 條款</b></a>
						<button onclick="window.open('#')">立即購買</button>
					</div>
					<div class="checkInterests mt-4">
						<h4 class="title">Top Sales版內容包含了什麼？</h4>
						<dl class="row mx-0">
							<dd class="col-6"><i class="fas fa-check"></i> 30 件房源</dd>
							<dd class="col-6"><i class="fas fa-check"></i> 首月免費</dd>
							<dd class="col-6"><i class="fas fa-check"></i> 專屬優惠代碼</dd>
							<dd class="col-6"><i class="fas fa-check"></i> 房源自由更換</dd>
						</dl>
					</div>
				</div>
			</div>
		</div><!--CONTAINER-->

		<?php include("footer.php") ?>

		<!--全站彈跳視窗內容頁-->
		<?php include("member_box.php") ?>

		<?php include("footer_js.php") ?>
	</body>

</html>