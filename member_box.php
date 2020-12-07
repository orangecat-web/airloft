<!--登入視窗 fancybox =======================-->
<div id="LOGIN" style="display: none;">
	<div>登入</div>
	<dl class="titleBtn">
		<dd><a class="fancybox active" href="#LOGIN">登入</a></dd>
		<dd><a class="fancybox" href="#JOIN">註冊</a></dd>
	</dl>
	<ul>
		<li>
			<input type="email" name="email" placeholder="電子郵件地址">
		</li>
		<li>
			<input type="text" name="" placeholder="密碼">
		</li>
	</ul>
	<div>
		<label class="" for="email-login-remember-me-checkbox">
			<input type="checkbox" class="_190a5qn" id="email-login-remember-me-checkbox" name="remember_me" value="1">
			<span>記住我</span>
		</label>
	</div>
	<button type="submit" onclick="location.href='member.php'">登入</button>
	<a href="#FORGOT" class="fancybox">忘記密碼</a>
</div>
<!--LOGIN-->

<!--忘記密碼視窗 fancybox =======================-->
<div id="FORGOT" style="display: none;">
	<div>忘記密碼</div>
	<p>請填寫註冊的電子郵件，我們將會寄送密碼給您。</p>
	<input type="email" name="email" placeholder="電子郵件">
	<button type="submit">送出</button>
</div>
<!--FORGOT-->

<!--註冊視窗 fancybox =======================-->
<div id="JOIN" style="display: none;">
	<div>加入我們</div>
	<ul>
		<li>
			<input type="radio" name="cate" value="customer" checked="checked"> 訪客會員　　
			<input type="radio" name="cate" value="agency"> 仲介會員
		</li>

		<dl class="titleBtn">
			<dd><a class="fancybox" href="#LOGIN">登入</a></dd>
			<dd><a class="fancybox active" href="#JOIN">註冊</a></dd>
		</dl>

		<li>
			<input type="email" name="email" placeholder="電子郵件地址">
		</li>
		<li>
			<input type="text" name="name" placeholder="姓名">
		</li>
		<li>
			<input type="password" name="password" placeholder="建立密碼">
		</li>
		<li>
			<input type="password" name="password" placeholder="回饋號碼">
		</li>
	</ul>
	<input type="checkbox" name=""> 我同意<a href="terms.php" target="_blank">服務條款</a>
	<div class="goPLAN"><a href="subscribe.php">註冊</a></div>
</div>
<!--signup-->

<!--刊登方案 fancybox =======================-->
<!--<div id="PLAN" style="display: none;">
<div>刊登方案</div>
<table class="planInfo">
<tr>
<th>體驗版</th>
<th>精英版</th>
<th>企業版</th>
</tr>
<tr>
<td>每月可上架 1 個物件</td>
<td>每月可上架 10 個物件</td>
<td>每月可上架 30 個物件</td>
</tr>
<tr>
<td>免費</td>
<td>299 / 月</td>
<td>699 / 月</td>
</tr>
<tr>
<td colspan="3">
訂閱以一年為期，按月扣款。第一次訂閱填寫<span>回饋號碼</span>再多送 2 個月免費刊登。
</td>
</tr>
<tr>
<td colspan="3">
<p>請選擇訂購方案：<input type="radio"> 體驗版 <input type="radio"> 精英版 <input type="radio"> 企業版</p>
<p>
個人付款資料：<br>
<input type="text" placeholder="請輸入姓名">
<input type="text" placeholder="請輸入電話">
</p>
<p>付款方式：智富通</p>
</td>
</tr>
</table>
<button type="submit">送出訂單</button>
</div>-->
<!--刊登方案-->

<!--我的團隊 fancybox =======================-->
<div id="MYTEAM" style="display: none;">
	<div>我的團隊</div>
	<table class="planInfo myTeam">
		<tr>
			<th>姓名</th>
			<th>訂閱日期</th>
			<th>訂閱方案</th>
		</tr>
		<tr>
			<td>王小明</td>
			<td><p>2018/05/08</p></td>
			<td>菁英版</td>
		</tr>
		<tr>
			<td>王小明</td>
			<td><p>2018/05/08</p></td>
			<td>菁英版</td>
		</tr>
		<tr>
			<td>王小明</td>
			<td><p>2018/05/08</p></td>
			<td>Top Sales</td>
		</tr>
		<tr>
			<td>王小明</td>
			<td><p>2018/05/08</p></td>
			<td>菁英版</td>
		</tr>
		<tr>
			<td>王小明</td>
			<td><p>2018/05/08</p></td>
			<td>菁英版</td>
		</tr>
		<tr>
			<td>王小明</td>
			<td><p>2018/05/08</p></td>
			<td>菁英版</td>
		</tr>
		<tr>
			<td>王小明</td>
			<td><p>2018/05/08</p></td>
			<td>菁英版</td>
		</tr>
	</table>
</div>
<!--我的團隊-->

<!--我的錢包 fancybox =======================-->
<div id="MYWALLET" style="display: none;">
	<div>我的錢包</div>
	<div class="totalWallet">
		<p>總獎金：1,000,000</p>
		<p>結餘：1,000,000</p>
		<p><a class="fancybox receive" href="#RECEIVE">我要提領</a></p>
	</div>
	<table class="planInfo">
		<tr>
			<th>月/年</th>
			<th>獎金</th>
			<th>領錢</th>
			<th>結餘</th>
		</tr>
		<tr>
			<td>3/2018</td>
			<td>750</td>
			<td>750</td>
			<td>0</td>
		</tr>
		<tr>
			<td>4/2018</td>
			<td>1000</td>
			<td>0</td>
			<td>1000</td>
		</tr>
		<tr>
			<td>5/2018</td>
			<td>1000</td>
			<td>0</td>
			<td>2000</td>
		</tr>
		<tr>
			<td>6/2018</td>
			<td>1250</td>
			<td>1000</td>
			<td>2250</td>
		</tr>
	</table>
	<div>
		<p>每個月限提領一次，請在每個月 5號前申請提領，提領獎金金額至少需超過 新台幣$750元，我們將在當月的10號 - 15號進行匯款，匯費 30元由收款方支付。</p>
	</div>
</div>
<!--我的錢包-->

<!--我要提領 fancybox =======================-->
<div id="RECEIVE" style="display: none;">
	<div>我的錢包</div>
	<div class="row mx-auto Receive">
		<div class="col-md-6 receive">
			<h3 class="title">提領獎金</h3>
			<dl class="receive">
				<dt class="col-auto">總獎金：1,000,000</dt>
				<dt class="col-auto">今日結餘：1,000,000</dt>
				<dd class="col-12 mb-4">
					<p><span>收款人姓名</span></p>
					<p>王大明</p>
				</dd>
				<dt class="col-12">收款人銀行帳號</dt>
				<dd class="col-12">
					<p><span>銀行名稱</span></p>
					<p>玉山銀行</p>
				</dd>
				<dd class="col-12">
					<p><span>銀行代碼</span></p>
					<p>808</p>
				</dd>
				<dd class="col-12">
					<p><span>銀行存戶號碼</span></p>
					<p>1234567890</p>
				</dd>
			</dl>
		</div>
		<div class="col-md-6">
			<dl class="receiveForm">
				<dd>
					<label for="">提領金額</label>
					<input type="text" placeholder="$">
				</dd>
				<dd>
					<label for="">輸入簡訊驗證碼（使用 Email電子郵箱進行驗證）</label>
					<input type="text">
				</dd>
				<dd>
					<button type="submit">確認提領</button>
					<button type="reset">再想一下</button>
				</dd>
				<dd>
					<p>提領說明：</p>
					<p>每個月限提領一次，請在每個月 5號前申請提領，提領獎金金額至少需超過 新台幣$750元，我們將在當月的10號 - 15號進行匯款，匯費 30元由收款方支付。</p>
				</dd>
			</dl>
		</div>
	</div>
</div>
<!--我要提領-->

<!--我的評分 fancybox =======================-->
<div id="MYSTARS" style="display: none;">
	<div>我的評分</div>
	<div class="totalWallet">
		<p>
			總積分：
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="far fa-star"></i>
			<i class="far fa-star"></i>
		</p>
	</div>
	<table class="planInfo">
		<tr>
			<td>
				專業能力
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</td>
			<td>
				推薦精準度
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</td>
		</tr>
		<tr>
			<td>
				服務態度
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</td>
			<td>
				照片精美度
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
			</td>
		</tr>
	</table>
</div>
<!--我的評分-->

<!--我要評價 fancybox =======================-->
<div id="APPRAISE" style="display: none;">
	<div>我要評價</div>
	<div class="col-12 appraise">
		<table class="planInfo">
			<tr>
				<th>相片美醜</th>
				<td>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
				</td>
			</tr>
			<tr>
				<th>服務態度</th>
				<td>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
				</td>
			</tr>
			<tr>
				<th>專業知識</th>
				<td>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
				</td>
			</tr>
			<tr>
				<th>推薦其他房屋的用心</th>
				<td>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
				</td>
			</tr>
		</table>
		<textarea name="" id="" cols="30" rows="10"></textarea>
		<p><button>確認送出</button></p>
	</div>
</div>
<!--我要評價-->

<!--我要分享 fancybox =======================-->
<div id="SHARE" style="display: none;">
	<div>我要分享</div>
	<dl class="col-12 share">
		<dd>嘿！看看這個超讚的看房去房源：小資族豪宅</dd>
		<dd>
			<a href="#"><i class="fab fa-facebook-square"></i></a>
		</dd>
		<dd><a href="#"><i class="fab fa-line"></i></a></dd>
		<dd><a href="#"><i class="fas fa-link"></i></a></dd>
	</dl>
</div>
<!--我要分享-->

<!--facybox-->
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();
		// Set custom style, close if clicked, change title type and overlay color
		$(".fancybox-effects-c").fancybox({
			wrapCSS    : 'fancybox-custom',
			closeClick : true,
			openEffect : 'none',
			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					css : {
						'background' : 'rgba(238,238,238,0.85)'
					}
				}
			}
		});
	});
</script>

