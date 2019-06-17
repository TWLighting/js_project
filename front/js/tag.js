function($){
  // 用each遍歷頁籤
  $('#tabs li').each(function(i){
    var _i = i;

    // 綁定click事件到頁籤上，若要改為滑鼠移入切換頁籤的話，將click改為mouseenter
    $(this).click(function(){
      // 移除其他頁籤的class，並將class新增至所選頁籤
      $(this).parent().children().removeClass('eShopping').eq(_i).addClass('eShopping');
      // 隱藏其他頁籤的內容，並顯示所選頁籤的內容
      $('#content1').children('div').hide().eq(_i).show();
    });
  });
})(jQuery);