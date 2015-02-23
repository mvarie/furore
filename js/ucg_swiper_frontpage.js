$(document).ready(function() {
	$(".ucg_swiper_content .ucg_swiper_text a.video").click(clickPlay);
  var ucgSwiper = $('.ucg_swiper .swiper-container').swiper({
	    mode:'horizontal',
	    loop: true,
	    autoplay: 5000,
	    createPagination: false,
		autoResize: true,
		resizeReInit: true,
	    onInit: function(swiper){
	    },
	    onSlideChangeStart: function(swiper){
//	    	$(".ucg_swiper_content .ucg_swiper_text h3").text($(swiper.slides[swiper.activeIndex]).data("title"));
//	    	$(".ucg_swiper_content .ucg_swiper_text h4").text($(swiper.slides[swiper.activeIndex]).data("subtitle"));
//	    	$(".ucg_swiper_content .ucg_swiper_text a").text($(swiper.slides[swiper.activeIndex]).data("linklabel")).removeAttr("class").attr("href", $(swiper.slides[swiper.activeIndex]).data("url")).attr("target", $(swiper.slides[swiper.activeIndex]).data("target")).addClass($(swiper.slides[swiper.activeIndex]).data("link"));
//	    	$(".ucg_swiper_content .ucg_swiper_text a").off("click");
//	    	$(".ucg_swiper_content .ucg_swiper_text a").data("video", "");
//	    	$(".ucg_swiper_content .ucg_swiper_text a.video").data("video", $(swiper.slides[swiper.activeIndex]).data("video")).click(clickPlay);
	    }	
	  });
  $('.ucg_swiper_arrows .ucg_swiper_arrow.ucg_swiper_arrow_left a').click(function(){
	  ucgSwiper.swipePrev();
  });
  $('.ucg_swiper_arrows .ucg_swiper_arrow.ucg_swiper_arrow_right a').click(function(){
	  ucgSwiper.swipeNext();
  });
  $('#mainContainer').on("animationSidebarCompleted", function(){
	  ucgSwiper.resizeFix(true);
  });
});