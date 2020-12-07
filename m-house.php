<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
	</head>

	<body>

		<?php include("header.php") ?>

		<div class="CONTAINER MEMBER">
			<link rel="stylesheet" href="css/member.css">
			<div class="pageTitle">
				<h1>我的房源</h1>
			</div>
			<div class="houseList">
				<div class="col-md-3 ml-auto addHouse">
					<button onclick="location.href='add-house.php'"><i class="fas fa-plus"></i> 新增房屋</button>
				</div>
				<dl class="row mx-0 align-items-center houseList">
					<dt class="col-12">賣屋列表</dt>
					<dd class="col-md-2">
						<img src="images/house01.jpg" alt="">
					</dd>
					<dd class="col-md-6">物件名稱物件名稱物件名稱物件名稱物件名稱物件名稱</dd>
					<dd class="col-md-2 col-6">總價：3688 萬</dd>
					<dd class="col-md-2 col-6">
						<button><i class="fas fa-upload"></i></button>
						<button><i class="fas fa-download"></i></button>
						<button onclick="location.href='edit-house.php'"><i class="fas fa-pencil-alt"></i></button>
					</dd>
					<dd class="w-100"></dd>
					<dd class="col-md-2">
						<img src="images/house03.jpg" alt="">
					</dd>
					<dd class="col-md-6">物件名稱物件名稱物件名稱物件名稱物件名稱物件名稱</dd>
					<dd class="col-md-2 col-6">總價：3688 萬</dd>
					<dd class="col-md-2 col-6">
						<button><i class="fas fa-upload"></i></button>
						<button><i class="fas fa-download"></i></button>
						<button onclick="location.href='edit-house.php'"><i class="fas fa-pencil-alt"></i></button>
					</dd>
					<dd class="w-100"></dd>
					<dd class="col-md-2">
						<img src="images/house04.jpg" alt="">
					</dd>
					<dd class="col-md-6">物件名稱物件名稱物件名稱物件名稱物件名稱物件名稱</dd>
					<dd class="col-md-2 col-6">總價：3688 萬</dd>
					<dd class="col-md-2 col-6">
						<button><i class="fas fa-upload"></i></button>
						<button><i class="fas fa-download"></i></button>
						<button onclick="location.href='edit-house.php'"><i class="fas fa-pencil-alt"></i></button>
					</dd>
					<dd class="w-100"></dd>
				</dl>
				<dl class="row mx-0 align-items-center houseList">
					<dt class="col-12">租屋列表</dt>
					<dd class="col-md-2">
						<img src="images/house01.jpg" alt="">
					</dd>
					<dd class="col-md-6">物件名稱物件名稱物件名稱物件名稱物件名稱物件名稱</dd>
					<dd class="col-md-2 col-6">租金：36000</dd>
					<dd class="col-md-2 col-6">
						<button><i class="fas fa-upload"></i></button>
						<button><i class="fas fa-download"></i></button>
						<button onclick="location.href='editrent.php'"><i class="fas fa-pencil-alt"></i></button>
					</dd>
					<dd class="w-100"></dd>
					<dd class="col-md-2">
						<img src="images/house03.jpg" alt="">
					</dd>
					<dd class="col-md-6">物件名稱物件名稱物件名稱物件名稱物件名稱物件名稱</dd>
					<dd class="col-md-2 col-6">租金：36000</dd>
					<dd class="col-md-2 col-6">
						<button><i class="fas fa-upload"></i></button>
						<button><i class="fas fa-download"></i></button>
						<button onclick="location.href='editrent.php'"><i class="fas fa-pencil-alt"></i></button>
					</dd>
					<dd class="w-100"></dd>
					<dd class="col-md-2">
						<img src="images/house04.jpg" alt="">
					</dd>
					<dd class="col-md-6">物件名稱物件名稱物件名稱物件名稱物件名稱物件名稱</dd>
					<dd class="col-md-2 col-6">租金：36000</dd>
					<dd class="col-md-2 col-6">
						<button><i class="fas fa-upload"></i></button>
						<button><i class="fas fa-download"></i></button>
						<button onclick="location.href='editrent.php'"><i class="fas fa-pencil-alt"></i></button>
					</dd>
					<dd class="w-100"></dd>
				</dl>
			</div>
		</div><!--CONTAINER-->
		<?php include("footer.php") ?>
		<!--彈跳視窗.登入.註冊.忘記密碼-->
		<?php include("member_box.php") ?>

		<?php include("footer_js.php") ?>
	</body>
</html>
