jQuery(document).ready(function($) {
	var stickyHeight = $("#myCarousel").outerHeight() + $("#thin-strip").outerHeight();

	$(window).scroll( function() {
		var windowScroll = $(window).scrollTop();
		
		if (windowScroll >= stickyHeight){
		$(".navbar").addClass("fixed");
		}
		if (windowScroll <= stickyHeight){
			$(".navbar").removeClass("fixed");
		}
		// change to toggleClass
	});
});