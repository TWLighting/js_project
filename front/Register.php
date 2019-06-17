<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="imgs/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\reset.css">
	<!-- header -->
	<link rel="stylesheet" type="text/css" href="css/menu_styles.css">
	<!------註冊表單的css------>
	<link rel="stylesheet" href="css\Register.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>ESSAIMS</title>
	<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')
    </script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/loginBox.js"></script>
	
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
<?php
if(isset($_SESSION['memId'])==true){
$url="essaim_logout.php";
$UserBox="document.getElementById('UserBox')";
$innerHTML=$_SESSION['memName']."您好!已登入"."/<a href=","$url>","登出</a>";
echo "<script>",$UserBox,".","innerHTML=",$innerHTML;
echo "</script>";
 }
?>

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
                	<span id="UserBox"></span>
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
	
	
	<!-------------------------------註冊表單-------------------------------->
	<article class="htmleaf-content">
		<!-- multistep form -->
		<form id="msform" action="EssaimRegister.php" method="post">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active">服務條款</li>
				<li>創建帳號</li>
				<li>電子郵件</li>
				<li>個人詳細資料</li>
			</ul>
			<!-- <input type="hidden" name="hiredate" value="<?php //echo date(y-m-d) ?>"> -->
			<!-- fieldsets -->
			<fieldset>
				<h2 class="fs-title">服務條款</h2>
				<textarea name="servicesspeak" id="servicesspeak" rows="15" readonly cols="75" class="cot">
	一、官網會員服務條款
1.本會員服務條款所稱之「官網會員」，為依照本站所定之加入會員程序加入完成並通過認證者。
2.當您使用本站服務時，即表示您同意及遵守本服務條款的規定事項及相關法律之規定。
3.本站保留有審核加入官網會員資格之權利，另外已加入官網會員者，本站亦保留有解除其會員資格之權利。
4.本官網會員服務條款之修訂，適用於所有官網會員，本站有權於任何時間修改或變更本官網會員修款之內容，
建議您隨時注意本官網會員修款修改或變更。您於任何修改或變更後繼續使用本站，則視為您已閱讀、
瞭解並同意接受本站官網會員條款之修改或變更。如果您不同意本官網會員修款的內容，您應立即停止使用本站。

二、隱私權保護
尊重並依據本網站「隱私權保護聲明」保護您的隱私(請參閱「隱私權保護聲明」條款)。

三、官網會員
1.使用本站所提供之官網會員服務時，於加入會員時所登錄之帳號及密碼使用之。
2.官網會員須善盡帳號及密碼的使用與管理之責任。對於使用該官網會員之帳號及密碼(無關於官網會員本身或其他人)利用本站服務所造成或衍生之所有行為及結果，官網會員須自行負擔全部責任。
3.官網會員之帳號及密碼遺失，或發現無故遭第三者盜用時，應立即通知本站連絡掛失，因未即時通知，導致本站無法有效防止及修改時，所造成的所有損失，官網會員應自負全責。
4.每次結束使用本服務，執行會員之登出並關閉視窗，以確保您的官網會員權益。
5.盜用第三者會員之帳號及密碼，導致第三者或本公司遭其他第三人或行政機關之調查或追訴時，第三者會員或本公司有權向您請求損害賠償，包括但不限於訴訟費用、律師費及商譽損失等。

四、官網會員登錄資料
1.官網會員登錄資料須提供您本人正確、最新及完整的資料，本站將依據您提供的個人資料整合實體通路紅利點數資訊、公主會員生日禮折扣及不定期透過email及聯絡電話行銷好康通知等客戶專屬優惠。
2.官網會員登錄資料不得有偽造、不實等之情事(ex如個人資料及信用卡資料)，一經發現本公司可拒絕其加入官網會員資格之權利。並得以暫停或終止其官網會員資格，若違反中華民國相關法律，亦將依法追究。
3.官網會員基本資料(ex:住址，電話及其他登錄資料)有變更時，請不定期更新相關個人資料，確保其正確及完整性。若您提供的資料有錯誤或不符等現象，本網站有權暫停或終止您的帳號，並拒絕您繼續使用本服務。
4.未經官網會員本人同意，本公司原則上不會將涉及個人隱私之資料開示給第三者，唯資料共用原則…等不在此限(請參閱本站「隱私權保護聲明」相關規定)。
5.官網會員應妥善保管密碼，不可將密碼洩露或提供給他人知道或使用；以同一個官網會員身分證字號和密碼使用本服務所進行的所有行為，都將被認為是該官網會員本人和密碼持有人的行為。
6. 官網會員如果發現或懷疑有第三人使用其身分證字號或密碼，應該立即通知本公司，採取必要的必要的防範措施。但上述通知不得解釋為本公司對官網會員負有任何形式之賠償或補償之責任或義務。

五、使用行為
1.您使用本服務之一切行為必須符合當地或國際相關法令規範；對於使用者的一切行為，您須自行負擔全部責任。
2.您同意絕不為非法之目的或以非法方式使用本服務，與確實遵守中華民國相關法規及網際網路之國際慣例，並保證不得利用本服務從事侵害他人權益或違法之行為。
3.您於使用本站官網會員服務時應遵守以下限制：
 a)有損他人人格或商標權、著作權等智慧財產權或其他權利內容。
 b)使用違反公共秩序或善良風俗或其他不法之文字。
 c)強烈政治、宗教色彩的偏激言論。
 d)未經本公司許可，不得利用本服務或本網站所提供其他資源，包括但不限於圖文資料庫、編寫製作網頁之軟體等，從事任何商業交易行為，或招攬廣告商或贊助人。
 e)其他違反本站「會員服務條款」的內容。

六、本公司專有權利
1.本服務所載，或本服務所連結之一切軟體或內容，或本公司之廣告商或合夥人所提供之內容，均受其著作權或其他專有權利或法律所保障。
2.當您傳輸資料至本公司提供之服務時，您即同意此一資料為全開放性(任何人均可瀏覽)。您授權並許可本公司得以重製、修飾、改編或以其他形式使用該內容之全部或一部分，及利用該內容製作衍生著作。衍生著作之著作權悉歸本公司所有。
3.本公司同意除依本使用條款約定，將前述您的資料及衍生著作置於本網站供網路使用者瀏覽，以及本公司所屬相關媒體外，絕不非法轉供其他直接營利目的或侵害您的權利之使用。
4.所有網頁之頁面出現之廣告看板與活動訊息，所有權及經營權均為本公司所有，使用者除事先取得本公司同意外，不得自行使用所有訊息。
5.官網會員同意並授權本網站，得為提供個人化服務或相關加值服務之目的，提供所需之會員資料給合作單位(第三者)做約定範圍內之運用，如會員不同意將其資料列於合作單位(第三者)產品或服務名單內，可通知本網站於名單中刪除其資料，並同時放棄其本網站以外之購物優惠或獲獎權利。
6.同時為提供行銷、市場分析、統計或研究、或為提供官網會員個人化服務或加值服務之目的，官網會員同意本公司、或本公司之策略合作夥伴，得記錄、保存、並利用會員在本網站所留存或產生之資料及記錄，同時在不揭露各該資料之情形下得公開或使用統計資料。
7.對於官網會員所登錄之個人資料，官網會員同意本網站得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或行銷研究。

七、終止授權
您使用本服務之行為若有任何違反法令或本使用條款或危害本網站或第三者權益之虞時，本公司有權不經告知您，立即暫時或永久終止您使用本服務之授權。

八、免責事項
1.下列情形發生時，本網站有權可以停止、中斷提供本服務：
 a)對本服務相關軟硬體設備進行更換、升級、保養或施工時。
 b)發生突發性之電子通信設備故障時。
 c)天災或其他不可抗力之因素致使本網站無法提供服務時。
2.本公司對於使用者在使用本服務或使用本服務所致生之任何直接、間接、衍生之財產或非財產之損害，不負賠償責任。
3.使用者對於上傳留言之文字、圖片及其它資料，應自行備份；本公司對於任何原因導致其內容全部或一部之滅失、毀損，不負任何責任。
4.本公司對使用本服務之用途或所產生的結果，不負任何保證責任，亦不保證與本服務相關之軟體無缺失或會予以修正。
5.對於您在本站中的所有言論、意見或行為僅代表您個人；不代表本公司的立場，本公司不負任何責任。本公司對於使用者所自稱之身分，不擔保其正確性。
6.本公司無須對發生於本服務或透過本服務所涉及之任何恐嚇、誹謗、淫穢或其他一切不法行為對您或任何人負責。
7.對於您透過本服務所購買或取得，或透過本公司之贊助者或廣告商所刊登、銷售或交付之任何貨品或服務，您應自行承擔其可能風險或依法向商品或服務提供者交涉求償，與本公司完全無關，本公司均不負任何責任。

九、修改權
1.當您開始使用本服務時，即表示您已充分閱讀、瞭解與同意接受本條款之內容。本公司有權於任何時間修改與變更本條款之內容，並將不個別通知會員，建議您定期查閱本服務條款。如您於本條款修改與變更後仍繼續使用本服務，則視為您已閱讀、瞭解與同意接受本條款修改或變更。
2.本公司有權暫時或永久修改或中止提供本服務給您，您不得因此要求任何賠償。

十、智慧財產權的保護
1.本網站所使用之軟體、程式及網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網頁設計，均由本網站或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。
2.任何人不得逕行使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。如欲引用或轉載前述之軟體、程式或網站內容，必須依法取得本網站或其他權利人的事前書面同意。如有違反之情事，您應對本網站或其他權利人負損害賠償責任（包括但不限於訴訟費用及律師費用等）。

十一、其他規定
1.本網站使用者條約，免責之內容，亦構成本使用條款之一部分。
2.凡因使用本服務所生之爭執，均以台灣臺中地方法院為第一審管轄法院。
3.若因您使用本服務之任何行為，導致本公司遭第三人或行政機關之調查或追訴時，本公司有權向您請求損害賠償，包括但不限於訴訟費用、律師費及商譽損失等。
4.本公司針對可預知之軟硬體維護工作，有可能導致系統中斷或是暫停者，將會於該狀況發生前，以適當之方式告知會員。

十二、會員身份終止與本公司通知之義務：
1.本公司具有更改各項服務內容或終止任一會員帳戶服務之權利。
2.若會員決定終止本公司會員資格，可直接以電子郵件的方式通知本公司或是由本公司所提供之機制進行取消，本公司將儘快註銷您的會員資料。
3.會員有通知取消本公司會員資格之義務，並自停止本公司會員身份之日起（以本公司電子郵件發出日期為準），喪失所有本服務所提供之優惠及權益。
4.為避免惡意情事發生致使會員應享權益損失，當會員通知本公司停止會員身份時，本公司將再次以電子郵件確認無誤後，再進行註銷會員資格。
				</textarea>
				
				<input type="button" name="previous" class="previous action-button" value="不同意" />
				<input type="button" name="next" class="next action-button" value="同意" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">創建你的帳號</h2>
				<h3 class="fs-subtitle">ESSAIMS歡迎您的加入</h3>
				<input type="text" name="newmemId" id="newmemId" placeholder="你的帳號" />
				<input type="password" name="pass" placeholder="密碼" />
				<input type="password" name="cpass" placeholder="重複密碼" />
				<input type="button" name="previous" class="previous action-button" value="上一步" />
				<input type="button" name="next" class="next action-button" value="下一步" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">填寫電子郵件</h2>
				<h3 class="fs-subtitle">填寫你的常用E-mail</h3>
				<input type="text" name="email" placeholder="E-mail" />
				<input type="button" name="previous" class="previous action-button" value="上一步" />
				<input type="button" name="next" class="next action-button" value="下一步" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">個人詳細資料</h2>
				<h3 class="fs-subtitle">個人詳細資料是保密的，不會被泄露</h3>
				姓名:<input type="text" name="memName" />
				手機:<input type="text" name="phone"  />
				
				生日:<input type="date" name="birthday" >

				<div>性別:<input type="radio" name="sex" value="0" id="falmale" class="sex">女<input type="radio" name="sex" value="1" class="sex" id="male">男</div>
				<textarea name="address" id="address" placeholder="地址"></textarea>
				<input type="button" name="previous" class="previous action-button" value="上一步" />
				<input type="submit" name="submit" class="submit action-button" value="送出" />
			</fieldset>
		</form>
	</article>
	
	 <!--登入彈出式表單-->
    <div class="login_box hide" id="login_box">
        <div>
            <span class="setclosebtn"><i class="fa fa-times-circle closebtn"></i></span>
        </div>
        <nav class="mark">
                <img src="imgs/Logo_2.png">
            </nav>
            <!--執行登入php-->
        <form action="EssaimLogin.php" method="post">
            
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
	<canvas id="demo-canvas"></canvas>			
	<script src="js/rAF.js"></script>
   <script src="js/BoB.js"></script>


</body>
	
	<script>
	var current_fs, next_fs, previous_fs;
	var left, opacity, scale;
	var animating;
	$('.next').click(function () {
	    if (animating)
	        return false;
	    animating = true;
	    current_fs = $(this).parent();
	    next_fs = $(this).parent().next();
	    $('#progressbar li').eq($('fieldset').index(next_fs)).addClass('active');
	    next_fs.show();
	    current_fs.animate({ opacity: 0 }, {
	        step: function (now, mx) {
	            scale = 1 - (1 - now) * 0.2;
	            left = now * 50 + '%';
	            opacity = 1 - now;
	            current_fs.css({ 'transform': 'scale(' + scale + ')' });
	            next_fs.css({
	                'left': left,
	                'opacity': opacity
	            });
	        },
	        duration: 800,
	        complete: function () {
	            current_fs.hide();
	            animating = false;
	        },
	        easing: 'easeInOutBack'
	    });
	});
	$('.previous').click(function () {
	    if (animating)
	        return false;
	    animating = true;
	    current_fs = $(this).parent();
	    previous_fs = $(this).parent().prev();
	    $('#progressbar li').eq($('fieldset').index(current_fs)).removeClass('active');
	    previous_fs.show();
	    current_fs.animate({ opacity: 0 }, {
	        step: function (now, mx) {
	            scale = 0.8 + (1 - now) * 0.2;
	            left = (1 - now) * 50 + '%';
	            opacity = 1 - now;
	            current_fs.css({ 'left': left });
	            previous_fs.css({
	                'transform': 'scale(' + scale + ')',
	                'opacity': opacity
	            });
	        },
	        duration: 800,
	        complete: function () {
	            current_fs.hide();
	            animating = false;
	        },
	        easing: 'easeInOutBack'
	    });
	});
	$('.submit').click(function () {
	    return;
	});
	</script>

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