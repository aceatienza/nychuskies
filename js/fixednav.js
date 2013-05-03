jQuery(document).ready(function($) {
	var cHeight = $("#myCarousel").height();
	var tHeight = $("#thin-strip").height();
	var stickyHeight = cHeight + tHeight;

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