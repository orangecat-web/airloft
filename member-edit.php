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
				<li class="select"><a href="member-edit.php">編輯個人資料</a></li>
				<li><a href="member-bank.php">銀行帳戶資料</a></li>
				<li><a href="member_order.php">方案訂購紀錄</a></li>
				<li><a href="#">查看個人資料</a></li>
			</ul>
			<div class="RIGHT_PAGE">
				<div class="title">編輯個人資料</div>

				<div class="BOX">
					<form id="memberform" name="form" method="post" action="">
						<input type='hidden' name='saveit' value='yes'>
						<input type='hidden' name='id' value='{id}'>
						<input type='hidden' name='token' value='{token}'>

						<dl class="row mx-auto memPic">
							<dd class="col-md-4 pl-0">
								<figure>
									<figcaption>
										<img src="https://previews.123rf.com/images/butsaya/butsaya1507/butsaya150700086/42241460-unknown-short-hair-businesswoman-silhouette-.jpg" alt="">
									</figcaption>
								</figure>
							</dd>
							<dd class="col-md-8 pr-0">
								<p class="mb-md-5 pb-md-3">一張清楚的正面照可以拉近您與看房者的距離，請上傳一張清楚顯示面部的照片，也請注意不要包含您不希望看房者看到的敏感資訊。</p>
								<input class="mt-md-4" type="text" placeholder="從電腦上傳檔案">
							</dd>
						</dl>

						<ul class="LIST LIST_MEMBER">
							<li>
								<label class="LIST_LEFT">姓名</label>
								<span class="LIST_RIGHT">
									<input name="name" type="text" value="林小明" size="30"/>
								</span>
							</li>
							<li>
								<label class="LIST_LEFT">性別</label>
								<span class="LIST_RIGHT">
									<input name="gender" type="radio" value="male" checked="checked"/> 男
									<input name="gender" type="radio" value="female"/> 女
								</span>
							</li>
							<li>
								<label class="LIST_LEFT">生日</label>
								<span class="LIST_RIGHT">
									<select name="" id="">
										<option value="">2018</option>
									</select>
									年
									<select name="" id="">
										<option value="">1</option>
									</select>
									月
									<select name="" id="">
										<option value="">1</option>
									</select>
									日
								</span>
							</li>
							<li>
								<label class="LIST_LEFT">電子郵件</label>
								<span class="LIST_RIGHT">
									<input name="mail" type="text" value="ming@gmail.com" size="30"/>
								</span>
							</li>
							<li>
								<label class="LIST_LEFT">聯絡電話</label>
								<span class="LIST_RIGHT">
									<input name="phone" type="text" value="0912345678" size="20"/>
								</span>
							</li>
							<li>
								<label class="LIST_LEFT">職業身份</label>
								<span class="LIST_RIGHT">
									<input name="gender" type="radio" value="male" checked="checked"/> 屋主
									<input name="gender" type="radio" value="female"/> 房仲
								</span>
							</li>
							<li>
								<label class="LIST_LEFT">房仲所屬公司</label>
								<span class="LIST_RIGHT">
									<input name="phone" type="text" value="房仲所屬公司" size="20"/>
								</span>
							</li>
							<li>
								<label class="LIST_LEFT">房仲登記字號</label>
								<span class="LIST_RIGHT">
									<input name="phone" type="text" value="房仲登記字號" size="20"/>
								</span>
							</li>
							<!--<li>
								<label class="LIST_LEFT">居住地址</label>
								<span class="LIST_RIGHT">
									<select name="" id="">
										<option value="">台北市</option>
										<option value="">新北市</option>
									</select>
									<select name="" id="">
										<option value="">信義區</option>
										<option value="">大安區</option>
									</select>
									<input type="text" name="" value="111" size="5" class="CODE">
									<input type="text" name="addr" size="30" value="基隆路一段155號" style="margin-top:10px;">
								</span>
							</li>-->
						</ul>

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
