
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!--tabs-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--tabs-->
	<title>購物車清單</title>
	<meta name="description" content="Tab Styles Inspiration: A small collection of styles for tabs" />
	<meta name="keywords" content="tabs, inspiration, web design, css, modern, effects, svg" />
	<meta name="author" content="Codrops" />
	<!--<link rel="shortcut icon" href="../favicon.ico">-->

	<link rel="stylesheet" type="text/css" href="css/reset.css" />
    
	<!--tabs-->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/tabs.css" />
	<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />

 	<!--table-->
	<link rel="stylesheet" type="text/css" href="css/tables.css">

	<!--結算-->
	<link rel="stylesheet" href="css/calculate.css"/>
    
	<!--購物步驟-->
	<link href="css/shop_step.css" rel="stylesheet" type="text/css">
    
	<!-- header -->
    <link rel="stylesheet" type="text/css" href="css/menu_styles.css">
    <!-- header -->
	 <!-- font -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')
    </script>
    <script src="js/loginBox.js"></script>
        
    <!--tabs-->
	<script src="js/tabs.js"></script>

	<!--結算-->
	<script src="js/calculate.js"></script>

	<!--購物步驟-->
	<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="js/shop_step.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
    		// Smart Wizard 	
  			$('#wizard').smartWizard();
      
      	function onFinishCallback(){
        	$('#wizard').smartWizard('showMessage','Finish Clicked');
        	//alert('Finish Clicked');
      	}     
			});
	</script>
    
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



    <svg class="hidden">
		<defs>
  			<path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
		</defs>
	</svg>   
<div class="container" style="margin-top:200px">
  <section>
    <div class="tabs tabs-style-shape">
      <nav>
        <ul>
          <li> <a href="#section-shape-1"> <svg viewBox="0 0 80 60" preserveAspectRatio="none">
            <use xlink:href="#tabshape"></use>
            </svg> <span>購物車</span> </a> </li>
          <li> <a href="#section-shape-2"> <svg viewBox="0 0 80 60" preserveAspectRatio="none">
            <use xlink:href="#tabshape"></use>
            </svg> <svg viewBox="0 0 80 60" preserveAspectRatio="none">
            <use xlink:href="#tabshape"></use>
            </svg> <span>購物說明</span> </a> </li>
        </ul>
      </nav>
      
   
   
      <div class="content-wrap">
     

      
        <section id="section-shape-1">
        	<div class="say_hello"><?php echo"親愛的會員 歡迎光臨"?><!-- $_SESSION["memName"],--></div>
            <div id="wizard" class="swMain">      
  			<ul>
  				<li><a href="#step-1">
                <label class="stepNumber">1</label>
                <span class="stepDesc">
                   確認購物明細<br />
                   <small>Confirm shopping detail</small>
                </span>
            </a></li>
  				<li><a href="#step-2">
                <label class="stepNumber">2</label>
                <span class="stepDesc">
                   選擇付款方式<br />
                   <small>Choose payment method</small>
                </span>
            </a></li>
  				<li><a href="#step-3">
                <label class="stepNumber">3</label>
                <span class="stepDesc">
                   最後確認<br />
                   <small>Reconfirm</small>
                </span>                   
            </a></li>
  				<li><a href="#step-4">
                <label class="stepNumber">4</label>
                <span class="stepDesc">
                   完成訂購<br />
                   <small>Order placement</small>
                </span>                   
            </a></li>
  			</ul> 
         
<div id="step-1">
<form action="sessionCartToDb.php">
          <div class="rwd-tables">
            <!--<h4>Basic Table</h4>-->
            <table id="cartTable">
              <thead>
                <tr>
                  <th><label><input class="check-all check" type="checkbox"/>&nbsp;全選</label></th>
                  <th>商品</th>
                  <th>單價</th>
                  <th>數量</th>
                  <th>小計</th>
                  <th>異動</th>
                </tr>
              </thead>
              <tbody> 
  
		
            
            
			    
                <tr>
                  <td data-label="全選" class="checkbox"><input class="check-one check" type="checkbox"/></td>
                  <td data-label="商品" class="goods"><img src="imgs/6220d1f001123270427559338a0457d9.jpg" width="150px" height="240px"/><br/>
                  <span class="pictitle"><a href="#">香水</a>
                  </span></td>
                  <td data-label="單價" class="price">1500</td>
                  <td data-label="數量" class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
                  <td data-label="小計" class="subtotal"></td>
                  <td data-label="異動" class="operation"><span class="delete">刪除</span></td>
                </tr>
	             
              </tbody>
            </table><!--cartTable-->
            
            <div class="foot" id="foot">
				<label class="fl select-all"><input type="checkbox" class="check-all check"/>全選</label>
				<a class="fl delete" id="deleteAll" href="javascript:;">刪除</a>
				<div class="fr closing"><a href="perfumeList.html">繼續瀏覽商品</a></div>
				<div class="fr total">&nbsp;合計:NT1500 元</span>&nbsp;</div>
				<div class="fr selected" id="selected">已選商品<span id="selectedTotal">1</span>件<span class="arrow up">︽</span><span class="arrow down">︾</span></div>
				<div class="selected-view">
					<div id="selectedViewList" class="clearfix">
						<div><img src="images/1.jpg"><span>取消選擇</span></div>
					</div>
					<span class="arrow">◆<span>◆</span></span>
				</div>
			</div><!--foot-->

          </div><!--rwd-tables-->
</form><!--sessionCartToDb.php -->         
</div><!--step-1-->

<div id="step-2">
<div style="height:650px">
	<table class="payWay">
		<caption>付款方式</caption>              
        <tr>
        	<td>
				<label><input type="radio" name="payWay" checked value="信用卡" onclick="card()">信用卡</label>
				<label><input type="radio" name="payWay" value="ATM轉帳" onclick="ATM()">ATM轉帳</label>
                <label><input type="radio" name="payWay" value="匯款" onclick="remittance()">匯款</label>
				<div id="cardNumber">信用卡號碼:<input type="text"><br/>
				到期年月:<input type="text">
				</div>
				<div id="bankNumber" style="display:none">銀行代號:<input type="text"><br/>
				扣款帳號:<input type="text">
				</div>
                <div id="remittanceInfo" style="display:none">
                	<ul>
						<li>郵局代號:702</li>
						<li>局號:0123456</li>
						<li>帳號:5168168</li>
						<li>戶名:ZD702G1</li>
                	</ul> 
                </div>
            </td>
        </tr>           
	</table> 
    <script>
		function remittance()	
			{document.getElementById("cardNumber").style.display='none';
			 document.getElementById("remittanceInfo").style.display='';
			 document.getElementById("bankNumber").style.display='none';
			}

		function card()
			{document.getElementById("remittanceInfo").style.display='none'; 
			 document.getElementById("bankNumber").style.display='none';
             document.getElementById("cardNumber").style.display=''; 
			}

		function ATM()
			{document.getElementById("bankNumber").style.display='';
			 document.getElementById("cardNumber").style.display='none';
			 document.getElementById("remittanceInfo").style.display='none';  	
			}
	</script>
    
    <table class="recipient">
		<caption>收件人資訊</caption>              
        <tr>
        	<td>收件人:</td><td><input type="text" name="recipient" style="width:80%" id="recipient"></td>
        </tr>
        <tr>
        	<td>聯絡電話:</td><td><input type="text" name="phone" style="width:80%" id="phone"></td>
        </tr>
        <tr>
        	<td>電子信箱:</td><td><input type="email" name="r_email" style="width:80%" id="r_email"></td>
        </tr>
        <tr>
        	<td>收件地址:</td><td><input type="text" name="r_address" style="width:80%" id="r_address"></td>
        </tr>   
	</table>
</div>                            
</div><!--step-2-->

        
                                      
<div id="step-3" style="height:650px">

<table>
  <caption>購物明細</caption> 
  <thead>
    <tr>
      <th>商品名稱</th>
      <th>單價</th>
      <th>數量</th>
      <th>小計</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td data-label="商品名稱"><a href="#">香水</a></td>
      <td data-label="單價">1500</td>
      <td data-label="數量">1</td>
      <td data-label="小計">1500</td>
    </tr>
  </tbody>
  
</table>    
 
<table>
  <caption>付款方式與寄送資訊</caption> 
	<tr><td>付款方式</td><td id="pay"></td></tr>
    <tr><td>收件人</td><td id="recipient_check"></td></tr>
    <tr><td>聯絡電話</td><td id="phone_check"></td></tr>
    <tr><td>電子信箱</td><td id="r_email_check"></td></tr>
    <tr><td>收件地址</td><td id="r_address_check"></td></tr>
</table>           
    <script> <!--將收件人資訊(input)印到付款方式與寄送資訊(td)-->
	/*var	a=["#recipient","#phone","#r_email","#r_address"];
	var b=["#recipient_check","#phone_check","#r_email_check","#r_address_check"];*/
		$(document).ready(function(){
			/*for(i=0;i<=3;i++){
				name = a[i];
				name2= b[i];
				$(name).change(function(){
					var value = $(this).val();
					$(name2).html(value);
				});
			}*/
		$('#recipient').change(function(){
			$('#recipient_check').html($(this).val());
			});
		$('#phone').change(function(){
			$('#phone_check').html($(this).val());
			});
		$('#r_email').change(function(){
			$('#r_email_check').html($(this).val());
			});
		$('#r_address').change(function(){
			$('#r_address_check').html($(this).val());
			});			
		$('input[name="payWay"]').click(function(){
			var item_v = $('input[name=payWay]:checked').val();
			$('#pay').html(item_v);
			});})
	</script>           				          
</div><!--step-3-->

<div id="step-4">
       
        
            
                       				          
</div><!--step-4-->
	  </div><!--wizard-->  
	</section><!--section-shape-1-->
    



 

   
    <section id="section-shape-2">
    
<div id="qaContent" style="width: 471; height: 993">
	
	<ul class="accordionPart">
		<li>
			<div class="qa_title">請問在本站購物安全嗎？</div>
			<div class="qa_content" style="display: none;">
				我們有跟香奈兒簽約，網站瀏覽人數已達2300多萬人次經營許久，您可放心購買。
                <font color="#FF0000"><font size="2"><!--注意事項：請勿為了貪圖好玩一直重複敬請配合感恩。--></font> </font>
			</div>
		</li>
		<li>
			<div class="qa_title">如果不加入會員可以直接購買嗎？</div>
			<div style="display: none;" class="qa_content">
				很抱歉，為了提供給客戶，更安全、更安心以及更便利的購物平台，購物前需麻煩您註冊加入會員(免費加入會員)。
            </div>
		</li>
		
			<li>
			<div class="qa_title">加入會員後要如何操作購物車購買商品？ </div>
			<div style="display: none;" class="qa_content">
				依照購物流程即可。
                
			</div>
		</li>
		<li>
			<div class="qa_title">請問在本站購物付款方式有哪些方式？</div>
			<div style="display: none;" class="qa_content">
				目前有3種付款方式:<br/>
				1.信用卡<br/>
				2.用晶片讀卡機在網路Web ATM轉帳到→『郵局帳戶』付款 <br/>
				3.臨櫃匯款
            </div>
		</li>
		<li>
			<div class="qa_title">我已經付款了該怎麼做， 需要多久才能拿到商品？</div>
			<div style="display: none;" class="qa_content">
				麻煩您付款後，在交易明細表上，寫上:<br/>1.您的名字<br/>2.聯絡得到本人的手機號碼<br/>3.電子信箱,聯絡地址等資訊<br/>傳給客服人員,
				我們確認無誤後,馬上就出貨給您。</div>
		</li>
		
				<li>
			<div class="qa_title">我已是賣場會員， 但忘了會員帳號或密碼了怎麼辦？ </div>
			<div style="display: none;" class="qa_content">
				不好意思，需麻煩您先使用網站上查詢密碼系統查詢。如果系統一直無法寄出查詢的新密碼信件，<br/>再麻煩您與我們聯絡，我們再去幫你重置成新的密碼。</div>
		</li>
		
	</ul>
</div><!--qaContent-->
<script type="text/javascript">
	$(function(){
		// 幫 #qaContent 的 ul 子元素加上 .accordionPart
		// 接著再找出 li 中的第一個 div 子元素加上 .qa_title
		// 並幫其加上 hover 及 click 事件
		// 同時把兄弟元素加上 .qa_content 並隱藏起來
		$('#qaContent ul').addClass('accordionPart').find('li div:nth-child(1)').addClass('qa_title').hover(function(){
			$(this).addClass('qa_title_on');
		}, function(){
			$(this).removeClass('qa_title_on');
		}).click(function(){
			// 當點到標題時，若答案是隱藏時則顯示它，同時隱藏其它已經展開的項目
			// 反之則隱藏
			var $qa_content = $(this).next('div.qa_content');
			if(!$qa_content.is(':visible')){
				$('#qaContent ul li div.qa_content:visible').slideUp();
			}
			$qa_content.slideToggle();
		}).siblings().addClass('qa_content').hide();
	});
</script>
    </section><!--section-shape-2-->
        
      </div><!--content-wrap-->
      
    </div><!--tabs tabs-style-shape-->
   
  	</section>
</div><!-- container --> 

<!--tabs-->
<script src="js/cbpFWTabs.js"></script> 
<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
</script>



  <!-- footer -->
        <footer id="onefooter">
        <div class="footerWrapper">
            <div class="block">
                <h4>門市資訊 <br>Story Info</h4>
                <br>
                <div>
                    <h4>台北誠品信義門市</h4>
                    <br>
                    <span>營業時間： 11:00–22:00<br>
                          地址： 110台北市信義區<br>
                    　　　松高路11號<br>
                          電話：02-8789-3388
                    </span>
                </div>
                <div>
                    <h4>高雄漢神門市</h4>
                    <br>
                    <span>營業時間： 11:00–22:00<br>
                          地址： 403台中市西區<br>
                    　　　公益路68號<br>
                          電話：04-2328-1000
                    </span>
                </div>
                <div>
                    <h4>台中誠品勤美門市</h4>
                    <br>
                    <span>營業時間： 11:00–22:00<br>
                          地址： 801高雄市前金區<br>
                    　　　成功一路266-1號<br>
                          電話：07-215-7266
                    </span>
                </div>
            </div>
            <!-- Rt -->
            <div class="block2">
                <h4>聯絡我們 <br>Contant</h4>
                <br>
                <div>
                    <table>
                        <tr>
                            <th>客服電話　Tel：</th>
                            <td>02-2987-6050</td>
                        </tr>
                        <tr>
                            <th>客服信箱 Mail：</th>
                            <td>AAA@gmail.com</td>
                        </tr>
                        <tr>
                            <th>客服時間 Time：</th>
                            <td><br>AM 9:30 ~ 12:00
                                <br>PM 13:30 ~ 17:30
                                <br>例假日休息</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="block2">
                <h4>追蹤我們<br>Follow Us</h4>
                <br>
                <div>
                    <a href="#"><img src="imgs/facebook.png" alt=""></a><br>
                    <a href="#"><img src="imgs/google.png" alt=""></a><br>

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
    </div><!--login_box hide-->
   
    
</body>
   <!----------------------header下滑變小效果-------------------------->
    <script>
    $(function() {
        $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            if (winTop >= 30) {
                $('#oneheader').addClass('sticky-header');
                $('.cd-logo').css({'opacity':'1'});
                $(' #oneheader .mobilecd-logo').css({'opacity':'1'});
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
    $(document).ready(function(){
       
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
<!--參考:http://www.jq22.com/yanshi3652 檢視框架原始碼 (tab)-->
<!--參考:http://codepen.io/anon/pen/QwPVNW (new table)-->
<!--參考:http://www.17sucai.com/preview/220220/2014-11-11/%E8%B4%AD%E7%89%A9%E8%BD%A6%EF%BC%88%E6%BA%90%E4%BB%A3%E7%A0%81%EF%BC%89ok/demo.html (結算)-->
<!--此檔案為RWD tabs.php 和 new table 和 結算 的結合-->