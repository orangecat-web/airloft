<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php") ?>
    </head>

    <body>

        <?php include("header.php") ?>


        <div class="CONTAINER MEMBER ORDER">


            <ul class="LEFT_MENU">
                <li><a href="member-edit.php">編輯個人資料</a></li>
				<li><a href="member-bank.php">銀行帳戶資料</a></li>
				<li class="select"><a href="member_order.php">方案訂購紀錄</a></li>
				<li><a href="#">查看個人資料</a></li>
            </ul>


            <div class="RIGHT_PAGE">
                <div class="title">歷史訂單</div>

                <ul class="LIST_ORDER">
                    <li>
                        <div>日期</div>
                        <div>方案內容</div>
                        <div>訂購期間</div>
                    </li>
                    <li>
                        <div class="DATE">2018-03-29</div>
                        <div><span class="RED">每月$299</span><br>可上架10個物件</div>
                        <div>2018-3~2018-6</div>
                    </li>
                    <li>
                        <div class="DATE">2017-12-01</div>
                        <div><span class="RED">每月$699</span><br>可上架30個物件</div>
                        <div>2017-12~2018-2</div>
                    </li>
                    <li>
                        <div class="DATE">2017-10-20</div>
                        <div><span class="RED">免費</span><br>每月可上架1件</div>
                        <div>2017-11~2017-11</div>
                    </li>
                </ul>

            </div><!--PAGE_RIGHT-->

            <div class="CLEAR"></div>

        </div><!--CONTAINER-->


        <?php include("footer.php") ?>



        <!--登入.註冊.忘記密碼-->
        <?php include("member_box.php") ?>



        <?php include("footer_js.php") ?>



    </body>

</html>
