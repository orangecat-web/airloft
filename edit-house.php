<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php") ?>
	</head>

	<body>

		<?php include("header.php") ?>

		<div class="CONTAINER MEMBER">
			<link rel="stylesheet" href="css/member.css">
			<div class="col-lg-8 mx-auto px-md-3 px-0 editHouse">
				<div class="row houseTitle mb-4">
					<h1 class="col-auto title">房源編輯</h1>
				</div>
				<div class="houseInfo px-3">
					<!--標籤-->
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="sale">賣屋</li>
						<li class="nav-item">
							<a class="nav-link Sale active" id="pills-sale-tab" data-toggle="pill" href="#pills-sale" role="tab" aria-controls="pills-sale" aria-selected="true">&nbsp;&nbsp;</a>
						</li>
						<li class="nav-item">
							<a class="nav-link Rent" id="pills-rent-tab" data-toggle="pill" href="#pills-rent" role="tab" aria-controls="pills-rent" aria-selected="false">&nbsp;&nbsp;</a>
						</li>
						<li class="rent">租屋</li>
					</ul>
					<!--標籤內容-->
					<div class="tab-content" id="pills-tabContent">
						<!--賣屋-->
						<div class="tab-pane fade show active" id="pills-sale" role="tabpanel" aria-labelledby="pills-sale-tab">
							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dd class="col-12">
									<label for="">標題</label>
									<input type="text">
								</dd>
								<dd class="col-12 row mx-0 px-0">
									<label class="col-12" for="">房源地址</label>
									<dl class="row col-12 mx-0 px-0 Address">
										<dd class="col-md-3 pr-md-3 px-0">
											<select name="" id="">
												<option value="">台北市</option>
											</select>
										</dd>
										<dd class="col-md-3 px-md-3 px-0">
											<select name="" id="">
												<option value="">信義區</option>
											</select>
										</dd>
										<dd class="col-md-6 pl-md-3 pl-0 pr-0">
											<input type="text">
										</dd>
									</dl>
								</dd>
								<dd class="col-12">
									<label for="">社區名稱</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">總坪數</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">總價</label>
									<input type="text">
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>房源介紹</dt>
								<dd class="col-12 Room">
									<select class="col-3" name="" id="">
										<option value="">1</option>
									</select> 房
									<select class="col-3" name="" id="">
										<option value="">1</option>
									</select> 廳
									<select class="col-3" name="" id="">
										<option value="">1</option>
									</select> 衛
								</dd>
								<dd class="col-12 Size">
									<label for="">主建物/附件物面積</label>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">1</option>
									</select> 坪 /  
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">1</option>
									</select> 坪
								</dd>
								<dd class="col-12">
									<label for="">屋齡</label>
									<input class="col-lg-3 col-md-4 col-10" type="text"> 年
								</dd>
								<dd class="col-12">
									<label for="">樓層</label>
									<input class="col-lg-5 col-md-4 col-4" type="text"> 樓 /  
									<input class="col-lg-5 col-md-4 col-4" type="text"> 樓
								</dd>
								<dd class="col-12">
									<label for="">形式</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">使用用途</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">法定用途<br>
										請填寫您的房源法定用途為住宅、工業住宅等</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">座向</label>
									座
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">東</option>
										<option value="">南</option>
										<option value="">西</option>
										<option value="">北</option>
										<option value="">東北</option>
										<option value="">東南</option>
										<option value="">西北</option>
										<option value="">西南</option>
									</select>
									朝
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">東</option>
										<option value="">南</option>
										<option value="">西</option>
										<option value="">北</option>
										<option value="">東北</option>
										<option value="">東南</option>
										<option value="">西北</option>
										<option value="">西南</option>
									</select>
								</dd>
								<dd class="col-12">
									<label for="">車位</label>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">無</option>
										<option value="">有</option>
									</select>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">坡道平面</option>
										<option value="">機械車位</option>
									</select>
								</dd>
								<dd class="col-12">
									<label for="">捷運站</label>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">板南</option>
									</select>
									線
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">江子翠</option>
									</select>
									站
								</dd>
								<dd class="row no-gutters col-12 rent">
									<label for="">管理費</label> 
									<input type="text">
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>生活機能</dt>
								<dd class="col-12">
									<input type="checkbox"> 近百貨公司
									<input type="checkbox"> 近傳統市場
									<input type="checkbox"> 近綠色公園
									<input type="checkbox"> 近醫療機構
									<input type="checkbox"> 近便利商店
									<input type="checkbox"> 近夜市
									<input type="checkbox"> 近捷運
									<input type="checkbox"> 近學校
									<input type="checkbox"> 近公園
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>房源特色</dt>
								<dd class="col-12">
									<p>發揮你的語言能力，給房源做最好的描述。</p>
									<textarea name="" id="" cols="30" rows="10"></textarea>
								</dd>
							</dl>

							<dl class="row mx-0 addPhoto HouseInfo">
								<dt class="col-md-3" style="text-align: left">相片</dt>
								<dd class="col-md-9">
									<input class="col-md-8 col-7" type="text"> <button><i class="fas fa-images"></i> 新增相片</button>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house01.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house02.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house03.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house04.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house05.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house06.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house07.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house08.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house09.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house10.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house11.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house12.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house01.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house02.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house03.jpg" alt=""></p>
								</dd>
							</dl>
							<button>確認送出</button>
						</div>
						<!--租屋-->
						<div class="tab-pane fade" id="pills-rent" role="tabpanel" aria-labelledby="pills-rent-tab">
							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dd class="col-12">
									<label for="">標題</label>
									<input type="text">
								</dd>
								<dd class="col-12 row mx-0 px-0">
									<label class="col-12" for="">房源地址</label>
									<dl class="row col-12 mx-0 px-0 Address">
										<dd class="col-md-3 pr-md-3 px-0">
											<select name="" id="">
												<option value="">台北市</option>
											</select>
										</dd>
										<dd class="col-md-3 px-md-3 px-0">
											<select name="" id="">
												<option value="">信義區</option>
											</select>
										</dd>
										<dd class="col-md-6 pl-md-3 pl-0 pr-0">
											<input type="text">
										</dd>
									</dl>
								</dd>
								<dd class="col-12">
									<label for="">社區名稱</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">總坪數</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">租金（不含管理費與車費）</label>
									<input type="text">
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>房源介紹</dt>
								<dd class="col-12 Room">
									<select class="col-3" name="" id="">
										<option value="">1</option>
									</select> 房
									<select class="col-3" name="" id="">
										<option value="">1</option>
									</select> 廳
									<select class="col-3" name="" id="">
										<option value="">1</option>
									</select> 衛
								</dd>
								<dd class="col-12 Size">
									<label for="">主建物/附件物面積</label>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">1</option>
									</select> 坪 /  
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">1</option>
									</select> 坪
								</dd>
								<dd class="col-12">
									<label for="">屋齡</label>
									<input class="col-lg-3 col-md-4 col-10" type="text"> 年
								</dd>
								<dd class="col-12">
									<label for="">樓層</label>
									<input class="col-lg-5 col-md-4 col-4" type="text"> 樓 /  
									<input class="col-lg-5 col-md-4 col-4" type="text"> 樓
								</dd>
								<dd class="col-12">
									<label for="">形式</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">使用用途</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">法定用途<br>
										請填寫您的房源法定用途為住宅、工業住宅等</label>
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">座向</label>
									座
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">東</option>
										<option value="">南</option>
										<option value="">西</option>
										<option value="">北</option>
										<option value="">東北</option>
										<option value="">東南</option>
										<option value="">西北</option>
										<option value="">西南</option>
									</select>
									朝
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">東</option>
										<option value="">南</option>
										<option value="">西</option>
										<option value="">北</option>
										<option value="">東北</option>
										<option value="">東南</option>
										<option value="">西北</option>
										<option value="">西南</option>
									</select>
								</dd>
								<dd class="col-12">
									<label for="">車位</label>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">無</option>
										<option value="">有</option>
									</select>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">坡道平面</option>
										<option value="">機械車位</option>
									</select>
								</dd>
								<dd class="col-12">
									<label for="">捷運站</label>
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">板南</option>
									</select>
									線
									<select class="col-lg-5 col-md-4 col-4" name="" id="">
										<option value="">江子翠</option>
									</select>
									站
								</dd>
								<dd class="row no-gutters col-12 rent">
									<label for="">管理費</label> 
									<input type="text">
								</dd>
								<dd class="row no-gutters col-12 rent">
									<label for="">車位費用</label> 
									<input type="text">
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>房源設備</dt>
								<dd class="col-12">
									<input type="checkbox"> 床
									<input type="checkbox"> 桌子
									<input type="checkbox"> 椅子
									<input type="checkbox"> 衣櫃
									<input type="checkbox"> 電視
									<input type="checkbox"> 冰箱
									<input type="checkbox"> 冷氣
									<input type="checkbox"> 網路
									<input type="checkbox"> 沙發
									<input type="checkbox"> 洗衣機
									<input type="checkbox"> 熱水器
									<input type="checkbox"> 第四台
									<input type="checkbox"> 天然瓦斯
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>房源規定</dt>
								<dd class="col-12">
									<input type="checkbox"> 帶寵物
									<input type="checkbox"> 可煮菜
								</dd>
								<dd class="row no-gutters col-12 rent">
									<label for="">押金</label> 
									<input type="text">
								</dd>
								<dd class="col-12">
									<label for="">最短租期</label>
									<select name="" id="">
										<option value="">三個月</option>
										<option value="">六個月</option>
										<option value="">一年</option>
									</select>
								</dd>
								<dd class="col-12">
									<label for="">性別要求</label>
									<select name="" id="">
										<option value="">不拘</option>
										<option value="">男</option>
										<option value="">女</option>
									</select>
								</dd>
								<dd class="col-12">
									<label for="">身份要求</label>
									<select name="" id="">
										<option value="">不拘</option>
										<option value="">學生</option>
										<option value="">上班族</option>
									</select>
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>生活機能</dt>
								<dd class="col-12">
									<input type="checkbox"> 近夜市
									<input type="checkbox"> 近百貨公司
									<input type="checkbox"> 近傳統市場
									<input type="checkbox"> 近綠色公園
									<input type="checkbox"> 近醫療機構
									<input type="checkbox"> 近便利商店
									<input type="checkbox"> 近捷運
									<input type="checkbox"> 近學校
									<input type="checkbox"> 近學校
									<input type="checkbox"> 近公園
								</dd>
							</dl>

							<dl class="row mx-0 px-0 no-gutters HouseInfo">
								<dt>房源特色</dt>
								<dd class="col-12">
									<p>發揮你的語言能力，給房源做最好的描述。</p>
									<textarea name="" id="" cols="30" rows="10"></textarea>
								</dd>
							</dl>

							<dl class="row mx-0 addPhoto HouseInfo">
								<dt class="col-md-3" style="text-align: left">相片</dt>
								<dd class="col-md-9">
									<input class="col-md-8 col-7" type="text"> <button><i class="fas fa-images"></i> 新增相片</button>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house01.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house02.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house03.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house04.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house05.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house06.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house07.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house08.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house09.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house10.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house11.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house12.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house01.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house02.jpg" alt=""></p>
								</dd>
								<dd class="col-md-4 col-6">
									<p class="card card-body h-100 justify-content-center img"><img src="images/house03.jpg" alt=""></p>
								</dd>
							</dl>
							<button>確認送出</button>
						</div>
					</div>

				</div>
			</div>
		</div><!--CONTAINER-->
		<?php include("footer.php") ?>
		<!--彈跳視窗.登入.註冊.忘記密碼-->
		<?php include("member_box.php") ?>

		<?php include("footer_js.php") ?>
	</body>
</html>
