<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
	</head>

	<body>

		<?php include("header.php") ?>

		<div class="CONTAINER MEMBER">
			<link rel="stylesheet" href="css/member.css">
			<dl class="row memberIndex">
				<dd class="col-md col-6 mx-auto">
					<a class="fancybox" href="m-house.php">
						<p><img src="images/icon-m-home.svg" alt=""></p>
						<p>我的房源</p>
					</a>
				</dd>
				<dd class="col-md col-6 mx-auto">
					<a class="fancybox" href="#MYTEAM">
						<p><img src="images/icon-m-team.svg" alt=""></p>
						<p>我的團隊</p>
					</a>
				</dd>
				<dd class="col-md col-6 mx-auto">
					<a class="fancybox" href="#MYWALLET">
						<p><img src="images/icon-m-wallet.svg" alt=""></p>
						<p>我的錢包</p>
					</a>
				</dd>
				<dd class="col-md col-6 mx-auto">
					<a class="fancybox" href="#MYSTARS">
						<p><img src="images/icon-m-stars.svg" alt=""></p>
						<p>我的評分</p>
					</a>
				</dd>
				<dd class="col-md col-6 mx-auto">
					<a class="fancybox" href="member-edit.php">
						<p><img src="images/icon-m-user.svg" alt=""></p>
						<p>我的個人資料</p>
					</a>
				</dd>
			</dl>
		</div><!--CONTAINER-->
		<?php include("footer.php") ?>
		<!--彈跳視窗.登入.註冊.忘記密碼-->
		<?php include("member_box.php") ?>

		<?php include("footer_js.php") ?>
	</body>
</html>
