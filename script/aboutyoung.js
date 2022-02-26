var isVisible = false;

$(window).on('scroll', function () {



	/* if (checkVisible($('#section8'))&&!isVisible) {
        setTimeout(function(){ 
 $(".pp>div").fadeIn().addClass("animated slideInUpSlow");     
        },700);
    }
    
    */


	if (checkVisible($('#who')) && !isVisible) {

		$("#who").addClass("slidego");
		setTimeout(function () {
			$("#who").css("opacity", "1")
		}, 500);
	}

	if (checkVisible($('#who2')) && !isVisible) {

		$("#who2").addClass("slideup");
		setTimeout(function () {
			$("#who2").css("opacity", "1")
		}, 500);
	}

	if (checkVisible($('#who3')) && !isVisible) {

		$("#who3").addClass("slidego3");
		setTimeout(function () {
			$("#who3").css("opacity", "1")
		}, 500);
	}

	if (checkVisible($('#skillIconWrapper')) && !isVisible) {

		$("#skillIcon1").addClass("slidego3");
		setTimeout(function () {
			$("#skillIcon1").css("opacity", "1")
		}, 500);
		$("#skillIcon2").addClass("slidego3");
		setTimeout(function () {
			$("#skillIcon2").css("opacity", "1")
		}, 500);
	}

	
//	if (checkVisible($('.round')) && !isVisible) {
//        
//        $('.round')
//		.circleProgress({
//		fill: {
//			color: '#ff5c5c'
//		}
//	})
//	.on('circle-animation-progress', function (event, progress, stepValue) {
//		$(this).find('strong').text(String(stepValue.toFixed(2)).substr(2) + '%');
//	});
//
//        $(".round").removeClass("round");
//        $(".col-md-3>div").addClass("rounder", function () {
//
//        });
//
//    }
	
	

});







$(document).ready(function($) {
	$(window).scroll(animateElements);
  function animateElements() {
    $('.col-md-3').each(function() {
      var elementPos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      var percent = $(this).find('.round').attr('data-percent');
      var percentage = parseInt(percent, 10) / parseInt(100, 10);
      var animate = $(this).data('animate');
      if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
        $(this).data('animate', true);
        $(this).find('.round').circleProgress({
		fill: {
			color: '#ff5c5c'
		}
	}).on('circle-animation-progress', function (event, progress, stepValue) {
		$(this).find('strong').text(String(stepValue.toFixed(2)).substr(2) + '%');
	})
      }
    });
  }
})














function fadeout(){
	$('#blackfade').fadeOut();
}


//특정영역 이벤트2
function checkVisible(elm, evale) {

	evale = evale || "object visible";
	var viewportHeight = $(window).height(), // Viewport Height
		scrolltop = $(window).scrollTop(); // Scroll Top
	if (elm.offset()) {
		y = $(elm).offset().top,
			elementHeight = $(elm).height();
		if (evale == "object visible") return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));
		if (evale == "above") return ((y  - 370 < (viewportHeight + scrolltop)));
	}
}