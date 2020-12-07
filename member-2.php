<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php") ?>
    </head>

    <body>

        <?php include("header.php") ?>


        <div class="CONTAINER MEMBER">


            <ul class="LEFT_MENU">
                <li class="select"><a href="#">編輯個人資料</a></li>
                <li><a href="member_order.php">方案訂購紀錄</a></li>
            </ul>


            <div class="RIGHT_PAGE">
                <div class="title">編輯個人資料</div>

                <div class="BOX">
                    <form id="memberform" name="form" method="post" action="">
                        <input type='hidden' name='saveit' value='yes'>
                        <input type='hidden' name='id' value='{id}'>
                        <input type='hidden' name='token' value='{token}'>

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
                                <label class="LIST_LEFT">電子郵件</label>
                                <span class="LIST_RIGHT">
                                    <input name="mail" type="text" value="ming@gmail.com" size="30"/>
                                </span>
                            </li>
                            <li>
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
                            </li>
                            <li>
                                <label class="LIST_LEFT">聯絡電話</label>
                                <span class="LIST_RIGHT">
                                    <input name="phone" type="text" value="0912345678" size="20"/>
                                </span>
                            </li>
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
