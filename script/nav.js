$(document).ready(function () {
	
    $("main>div").on('mousewheel', function (e) {
        var wheel = e.originalEvent.wheelDelta;

        //스크롤값을 가져온다.
        if (wheel > 0) {
            //스크롤 올릴때
            $("header").addClass("active");
        } else {
            //스크롤 내릴때
            $("header").addClass("active");
        }
    });


	
	

});



var isVisible = false;

$(window).on('scroll', function () {
    if (checkVisible($('main')) && !isVisible) {
        $("header").addClass("active");
    }
    if (checkVisible($('div')) && !isVisible) {
        $("header").addClass("active");
    }
    if (checkVisible($('section')) && !isVisible) {
        $("header").addClass("active");
    }

});

function checkVisible(elm, eval) {

	eval = eval || "object visible";
	var viewportHeight = $(window).height(), // Viewport Height
		scrolltop = $(window).scrollTop(); // Scroll Top
	if (elm.offset()) {
		y = $(elm).offset().top,
			elementHeight = $(elm).height();
		if (eval == "object visible") return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));
		if (eval == "above") return ((y  - 370 < (viewportHeight + scrolltop)));
	}
}



//제일 위로 올라오면 메뉴 등장
$(window).scroll(function () {
    var height = $(document).scrollTop();

    if (height < 50) {
        setTimeout(function () {

            $("header").removeClass("active");
        }, 10);

    }
});


$("body div").on('mousewheel', function (e) {
    var wheel = e.originalEvent.wheelDelta;

    //스크롤값을 가져온다.
    if (wheel > 0) {
        //스크롤 올릴때
        $("header").addClass("active");
        $("header").stop().slideDown("fast");
    } else {
        //스크롤 내릴때
        $("header").removeClass("active");
    }
});

//제일 위로 올라오면 메뉴 등장
$(window).scroll(function () {
    var height = $(document).scrollTop();

    if (height == 0) {
        $("header").fadeIn();
    }
});
