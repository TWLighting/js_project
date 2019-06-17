
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
	$(function(){
		$('.box > div').hover(
			function(){
				$(this).addClass('active').siblings().removeClass('active');
			})
	})
</script>