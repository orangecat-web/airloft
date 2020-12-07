<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
	</head>
	<body>
		<?php include("header.php") ?>
		<div class="CONTAINER MEMBER">
			<link rel="stylesheet" href="css/member.css">
			<ul class="LEFT_MENU">
				<li><a href="member-edit.php">編輯個人資料</a></li>
				<li class="select"><a href="member-bank.php">銀行帳戶資料</a></li>
				<li><a href="member_order.php">方案訂購紀錄</a></li>
				<li><a href="#">查看個人資料</a></li>
			</ul>
			<div class="RIGHT_PAGE">
				<div class="title">收款銀行帳戶資料</div>

				<div class="BOX">
					<form id="memberform" name="form" method="post" action="">

						<dl class="row mx-auto Receipt">
							<dd class="col-lg-5 col-md-4 align-self-end">
								<label for="">收款人姓名</label>
								<input type="text">
							</dd>
							<dd class="col-lg-7 col-md-8">
								<label for="">輸入簡訊驗證碼<span>（使用 Email 電子郵箱進行驗證）</span></label>
								<input type="text">
							</dd>
							<dd class="col-12 row mx-auto px-0">
								<dl class="col-lg-5 col-md-6 mt-4">
									<dt>收款人銀行帳號</dt>
									<dd>
										<label for="">銀行名稱</label>
										<input type="text">
									</dd>
									<dd>
										<label for="">銀行代碼</label>
										<input type="text">
									</dd>
									<dd>
										<label for="">銀行存戶號碼</label>
										<input type="text">
									</dd>
								</dl>
								<div class="col-lg-7 col-md-6 mt-md-5 pt-md-5">
									<p><b>指定收款帳戶說明：</b></p>
									<p>在您提領獎金時，我們會使用您設定的收款銀行帳戶，作為指定的匯款對象。</p>
								</div>
							</dd>
						</dl>


					<div class="PADDING20_0 CENTER">
						<input class="BTN" name="" type="button" value="　儲存　" onclick='document.forms["contactform"].submit(); return false;' />
					</div>

					</form>

			</div><!--BOX-->

		</div><!--PAGE_RIGHT-->

		<div class="CLEAR"></div>

		</div><!--CONTAINER-->


	<?php include("footer.php") ?>

	<!--登入.註冊.忘記密碼-->
	<?php include("member_box.php") ?>

	<?php include("footer_js.php") ?>

	</body>
</html>
