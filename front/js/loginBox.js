//使登入表單置中
    $(document).ready(function(){
        function movercenter(){
        var winWidth=$(window).width();
        var winHeight=$(window).height();
        var divWidth=$('#login_box').width();
        var divHeight=$('#login_box').height();
        $('#login_box').css({'top':(winHeight/2)-(divHeight/3),'left':(winWidth/2)-(divWidth/2)})
            }
        movercenter();
        $(window).resize(function(){
        movercenter();
        });
        // $('#login').click(function(){
        //  $('.login_box').fadeIn(1200).removeClass('hide');
        //  $('.header').addClass('filter1');
        // });
        
        // $('.close').click(function(){
        //  $('.login_box').fadeOut(1200).addClass('hide');
        //  $('.header').removeClass('filter1');
        // });
        });

    //登入欄位輸入提醒
    $(document).ready(function(){
        var memId="請輸入帳號";
        var memPsw="請輸入密碼";
        $('.memId').attr('placeholder',memId)
        .focus(function(){
            $('.memId').attr('placeholder'," ")
        })
        .blur(function(){
            $('.memId').attr('placeholder',memId)   
        });
        
        $('#memPsw').attr('placeholder',memPsw)
        .focus(function(){
            $('#memPsw').attr('placeholder'," ")
        })
        .blur(function(){
            $('#memPsw').attr('placeholder',memPsw) 
        });
        
    });

   
     //login_box的js
   
        $(document).ready(function() { 
            $(".fa-sign-in").click(function(e) { 
            e.stopPropagation(); 
            $(".login_box").fadeIn(1200).removeClass("hide");
            $('#oneheader').addClass('filter1');
            $('.htmleaf-content').addClass('filter1');
            $('#onefooter').addClass('filter1'); 
            $('.eBgBlur').addClass('filter1'); 
            
            }); 

            $(".closebtn").click(function() { 
            $(".login_box").fadeOut(0).addClass("hide");
            $('#oneheader').removeClass('filter1');
             $('#onefooter').removeClass('filter1'); 
            $('.htmleaf-content').removeClass('filter1'); 
            $('.eBgBlur').removeClass('filter1'); 
            }); 

            $(document).click(function() { 
            if ( $(".login_box").hasClass("hide")==false) {//檢查login_box是否有hide 
            $(".login_box").fadeOut(0).addClass("hide"); 
            $('#oneheader').removeClass('filter1');
             $('#onefooter').removeClass('filter1'); 
             $('.eBgBlur').removeClass('filter1');
            $('.htmleaf-content').removeClass('filter1');} 
            }); 
               
            $(".login_box").click(function (e) { 
            e.stopPropagation();//阻止事件向上冒泡 
            }); 
        }); 
