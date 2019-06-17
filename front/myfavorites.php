 <!DOCTYPE html>
 <html>
 <head>

	<meta charset="UTF-8">
    <link rel="shortcut icon" href="imgs/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\reset.css">
	<!-- header -->
	<link rel="stylesheet" type="text/css" href="css/menu_styles.css">
	<!------追蹤清單的css------>
	<link rel="stylesheet" type="text/css" href="css/myfavorites.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')
    </script>
    <script src="js/loginBox.js"></script>
	<title>ESSAIMS</title>
 </head>
 <body>
 	
	 <header id="oneheader">
        <h1><img src="imgs/Logo_2.png" alt=""></h1>
        <nav>
            <a href="index.html" class="cd-logo"><img src="imgs/sec_Logo.png" alt="Logo"></a>
            <a href="HomeFragrances.html" class="hover">居家香氛</a>
            <a href="essentialOil.html" class="hover">按摩精油</a>
            <a href="perfumeList.html"class="hover">香　水</a>
            <a href="diyCourse.html" class="hover">DIY體驗活動</a>
            <a href="story.html" class="hover">品牌故事</a>
            <div class="secNav">
                <div>
                    <a href="myfavorites.php"><i class="fa fa-heart"></i></a>
                    <a href="CartShow.php"><i class="fa fa-shopping-cart"></i></a>
                    <i class="fa fa-user member"></i>
                </div>
                <div class="secNavList">
                    <a href="order.html"><i class="fa fa-file-text"></i></a>
                    <a href="memdata.php"><i class="fa fa-pencil-square-o"></i></a>
                    <a><i class="fa fa-sign-in"></i></a>
                </div>
            </div>
        </nav>

        <!--手機板header-->
        <a href="index.html" class="mobilecd-logo"><img src="imgs/sec_Logo.png" alt="Logo"></a>
         <div id="mobile"><i class="fa fa-bars fa-2x"></i></div> 
        
         <div id="mobileNav">
            <a href="HomeFragrances.html" class="hover">居家香氛</a>
            <a href="essentialOil.html" class="hover">按摩精油</a>
            <a href="perfumeList.html"class="hover">香　水</a>
            <a href="diyCourse.html" class="hover active">DIY體驗活動</a>
            <a href="story.html" class="hover">品牌故事</a>
            <a href="myfavorites.php">追蹤清單</a>
            <a href="CartShow.php">購物車</a>
            <a href="order.html">訂單專區</a>
            <a href="memdata.php">修改會員資料</a>
            <a><i class="fa fa-sign-in">  登入</i></a>
        </div>
    </header>


	<div class="topborder">
		<object data="imgs/borderflower1.png" id="leftflower"></object>
		<object data="imgs/borderflower.png" id="rightflower"></object>
		<br clear="both">
	</div>

	<table border="1" class="myfavtable eBgBlur">
		<caption>訪客你好，這是您的追蹤清單</caption>
		<tr>
			<th>品項</th>
			<th colspan="2" >商品</th>
			<th>價格</th>
			<th>庫存</th>
			<th>變更</th>
		</tr>

		<tr>
			<td>1</td>
			<td id="productimg"><img src="imgs/6220d1f001123270427559338a0457d9.jpg" height="537" width="350" alt=""></td>
			<td>秘密經典</td>
			<td>4500</td>
			<td>有</td>
			<td><button name="delect">取消追蹤</button>
				<button name="tocart">加入購物車</button>
			</td>
		<tr>
			<td>2</td>
			<td id="productimg"><img src="imgs/0792f0630f0004531d77715097bbd3b3.jpg" height="537" width="350" alt=""></td>
			<td>極致綻放</td>
			<td>4500</td>
			<td>有</td>
			<td><button name="delect">取消追蹤</button>
				<button name="tocart">加入購物車</button>
		</td>

		<tr>
			<td>3</td>
			<td id="productimg"><img src="imgs/6220d1f001123270427559338a0457d9.jpg" alt=""></td>
			<td>秘密經典</td>
			<td>4500</td>
			<td>有</td>
			<td><button name="delect">取消追蹤</button>
				<button name="tocart">加入購物車</button>
			</td>

		<tr>
			<td>4</td>
			<td id="productimg"><img src="imgs/0792f0630f0004531d77715097bbd3b3.jpg" alt=""></td>
			<td>極致綻放</td>
			<td>4500</td>
			<td>有</td>
			<td><button name="delect">取消追蹤</button>
				<button name="tocart">加入購物車</button>
			</td>
		</tr>
	</table>

	<div class="pagerow">
		<span>頁數:<a href="">第一頁</a>1,2,3
			<a href="">最末頁</a>
		</span>	

		<object data="imgs/borderflower2.png" id="bottomflower"></object>
	</div>

	<!-- footer -->
   <footer id="onefooter">
        <div class="footerWrapper">
            <div class="block">
                <h4>門市資訊 <br>Story Info</h4>
                <br>
                <div>
                    <img src="imgs/tp.png" alt="台北誠品信義門市">
                    <br>
                    <span>營業時間： 11:00–22:00<br>
                          地址： 110台北市信義區<br>
                    　　　松高路11號<br>
                          電話：02-8789-3388
                    </span>
                </div>
                <div>
                    <img src="imgs/ks.png" alt="高雄漢神門市">
                    <br>
                    <span>營業時間： 11:00–22:00<br>
                          地址： 403台中市西區<br>
                    　　　公益路68號<br>
                          電話：04-2328-1000
                    </span>
                </div>
                <div>
                    <img src="imgs/tc.png" alt="台中誠品勤美門市">
                    <br>
                    <span>營業時間： 11:00–22:00<br>
                          地址： 801高雄市前金區<br>
                    　　　成功一路266-1號<br>
                          電話：07-215-7266
                    </span>
                </div>
            </div>
            <!-- Rt -->
            <div>
                <h4>聯絡我們 <br>Contant</h4>
                <br>
                <div>
                    <table>
                        <tr>
                            <th>Tel ：</th>
                            <td>02-2987-6050</td>
                        </tr>
                        <tr>
                            <th>Mail：</th>
                            <td>AAA@gmail.com</td>
                        </tr>
                        <tr>
                            <th>MON - FRI：</th>
                            <td>AM 9:30 ~ 12:00
                                <br> 　　　　　　 PM 13:30 ~ 17:30</td>
                        </tr>
                    </table>
                </div>
                <div>
                    <span>
                    
                  </span>
                </div>
            </div>
        </div>
    </footer>
	 <!--登入彈出式表單-->
    <div class="login_box hide" id="login_box">
        <div>
            
            <span class="setclosebtn"><i class="fa fa-times-circle closebtn"></i></span>
        </div>
        <nav class="mark">
                <img src="imgs/Logo_2.png">
            </nav>
        <form>
            
            <session class="logindata">
            <input type="text" name="memId" id="memId" class="memId">
            <input type="password" name="memPsw" id="memPsw">
            </session>

            <footer class="r-btnarea">
                <form action="">
                    <button type="submit" class="rebtn">登入</button>
                </form>

                <form action="Register.php">    
                    <button type="submit" class="logbtn" >註冊</button>
                </form>
            </footer>
        </form>
    </div>  
 </body>
   <!----------------------header下滑變小效果-------------------------->
   
 <script>
    $(function() {
        $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            if (winTop >= 30) {
                $('#oneheader').addClass('sticky-header');
                $(' #oneheader .mobilecd-logo').css({'opacity':'1'});
                $('.cd-logo').css({'opacity':'1'});
                $('.secNavList').css({'background':'rgb(245, 230, 212)'});
            } else {
                $('#oneheader').removeClass('sticky-header');
                $('.cd-logo').css({'opacity':'0'});
                $(' #oneheader .mobilecd-logo').css({'opacity':'0'});
                $('.secNavList').css({'background':'#cbb3b7'});
            }
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".member").click(function() {
            $(".secNavList").slideToggle();
        });
    });
    </script>
     <script type="text/javascript">
    $(document).ready(function() {
        $("#mobile").click(function() {
            $("#mobileNav").slideToggle();
        });
    });
</script>
 </html>