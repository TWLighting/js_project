jQuery(document).ready(function($){
	var secondaryNav = $('.cd-secondary-nav'),
		secondaryNavTopPosition = secondaryNav.offset().top,
		taglineOffesetTop = $('#cd-intro-tagline').offset().top + $('#cd-intro-tagline').height() + parseInt($('#cd-intro-tagline').css('paddingTop').replace('px', '')),
		contentSections = $('.cd-section');
	
	$(window).on('scroll', function(){
		//on desktop - assign a position fixed to logo and action button and move them outside the viewport
		( $(window).scrollTop() > taglineOffesetTop ) ? $('#cd-logo').addClass('is-hidden') : $('#cd-logo').removeClass('is-hidden');
		
		//on desktop - fix secondary navigation on scrolling
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			//fix secondary navigation
			secondaryNav.addClass('is-fixed');
			//push the .cd-main-content giving it a top-margin
			$('.cd-main-content').addClass('has-top-margin');	
			//on Firefox CSS transition/animation fails when parent element changes position attribute
			//so we to change secondary navigation childrens attributes after having changed its position value
			setTimeout(function() {
	            secondaryNav.addClass('animate-children');
	            $('#cd-logo').addClass('slide-in');
	        }, 50);
		} else {
			secondaryNav.removeClass('is-fixed');
			$('.cd-main-content').removeClass('has-top-margin');
			setTimeout(function() {
	            secondaryNav.removeClass('animate-children');
	            $('#cd-logo').removeClass('slide-in');
	        }, 50);
		}

		//on desktop - update the active link in the secondary fixed navigation
		updateSecondaryNavigation();
	});

