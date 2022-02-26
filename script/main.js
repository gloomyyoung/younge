var isVisible = false;

$(window).on('scroll', function () {

	if (checkVisible($('#pho>div.pp')) && !isVisible) {
		setTimeout(function () {
			$(".pp>div").fadeIn().addClass("animated slideInUp");
		}, 300);
		if (!window.localStorage.getItem('sec8height2')) {
			setTimeout(function () {
				var sec8height = $("#section8").css("height").replace("px", "");
				var sec8height2 = $("#phowrapper").height() + 430;
				console.log(sec8height2);
				window.localStorage.setItem('sec8height2', sec8height2)
			}, 500)
		}
	}

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





	if (checkVisible($('#section9>div>h2>span')) && !isVisible) {
		setTimeout(function () {
			$("#section9>div>h2>span").addClass("animated jello");


		}, 1300);

	}


	if (checkVisible($('#section9>div>h2')) && !isVisible) {

		$("#section9>div>h2").addClass("animated slideInUp");

	}




	if (checkVisible($('#trig')) && !isVisible) {

		$("#sec1_2>div>h6").addClass("active");

		setTimeout(function () {
			$("#nav-placeholder").addClass("active");

			$("#sec1wrap>div>div").addClass("animated slideInUp");

			$("#sec1wrap>div>div").fadeIn();

		}, 200);

		setTimeout(function () {
			$("#section1 img").addClass("animated jello");

		}, 1300);

	}

	if (checkVisible($('#circleBar')) && !isVisible) {


		setTimeout(function () {
			$("#nav-placeholder").addClass("active");

			$("#sec1wrap>div>div").addClass("animated slideInUp");

			$("#sec1wrap>div>div").fadeIn();

		}, 200);

		setTimeout(function () {
			$("#section1 img").addClass("animated jello");

		}, 1300);

	}



	if (checkVisible($('#imake4')) && !isVisible) {

		$("#imake4").addClass("animated slideInUp");

	}

	if (checkVisible($('#imakesub4')) && !isVisible) {
		setTimeout(function () {
			$("#imake4>span").addClass("animated jello");
		}, 1000);

	}



	/*웹디자인 슬라이드*/

	if (checkVisible($('#portfolio-0')) && !isVisible) {
		$("#portfolio-0").addClass("slideUpSlow");
	}

	if (checkVisible($('#portfolio-1')) && !isVisible) {
		$("#portfolio-1").addClass("slideUpSlow");
	}

	if (checkVisible($('#portfolio-2')) && !isVisible) {
		$("#portfolio-2").addClass("slideUpSlow");
	}

	if (checkVisible($('#portfolio-3')) && !isVisible) {
		$("#portfolio-3").addClass("slideUpSlow");
	}

	if (checkVisible($('#portfolio-4')) && !isVisible) {
		$("#portfolio-4").addClass("slideUpSlow");
	}

	if (checkVisible($('#portfolio-5')) && !isVisible) {
		$("#portfolio-5").addClass("slideUpSlow");
	}

	if (checkVisible($('#portfolio-6')) && !isVisible) {
		$("#portfolio-6").addClass("slideUpSlow");
	}

	if (checkVisible($('#portfolio-7')) && !isVisible) {
		$("#portfolio-7").addClass("slideUpSlow");
	}


	/*animated rotateInUpRight*/

	/*웹디자인 슬라이드 끝*/


	/*///// 스킬점수 ///// */

	//	if (checkVisible($('.round')) && !isVisible) {
	//		function Circlle(el) {
	//			$(el).circleProgress({
	//					fill: {
	//						color: '#eb9258'
	//					}
	//				})
	//				.on('circle-animation-progress', function (event, progress, stepValue) {
	//					$(this).find('strong').text(String(stepValue.toFixed(2)).substr(2) + '%');
	//				});
	//		};
	//		Circlle('.round');
	//
	//		$(".round").removeClass("round");
	//		$(".col-md-3>div").addClass("rounder", function () {
	//
	//		});
	//
	//	}
	/*///// 스킬점수끝  ///// */


	if (checkVisible($('.whoo>h2')) && !isVisible) {
		$(".whoo>h2").addClass("animated slideInUp");
	}
	if (checkVisible($('#header1')) && !isVisible) {
		$("header").addClass("active");
	}
	if (checkVisible($('#section1')) && !isVisible) {
		$("header").addClass("active");
	}
	if (checkVisible($('#trig')) && !isVisible) {
		$("header").addClass("active");
	}
	if (checkVisible($('#section2')) && !isVisible) {
		$("header").addClass("active");
	}
	if (checkVisible($('#section3')) && !isVisible) {
		$("header").addClass("active");
	}
	if (checkVisible($('#section4')) && !isVisible) {
		$("header").addClass("active");
	}
	if (checkVisible($('#sectionweb')) && !isVisible) {
		$("header").addClass("active");
	}
	if (checkVisible($('#section6')) && !isVisible) {
		$("header").addClass("active");
	}
});



//특정영역 이벤트2
function checkVisible(elm, eval) {

	eval = eval || "object visible";
	var viewportHeight = $(window).height(), // Viewport Height
		scrolltop = $(window).scrollTop(); // Scroll Top
	if (elm.offset()) {
		y = $(elm).offset().top,
			elementHeight = $(elm).height();
		if (eval == "object visible") return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));
		if (eval == "above") return ((y - 370 < (viewportHeight + scrolltop)));
	}
}

function popupOn(e) {
	e.preventDefault();
	let le = document.getElementsByClassName('mini_profile_wrapper').length;
	var elements = document.getElementsByClassName("mini_profile");
	var likername = e.target.parentElement.getAttribute('title').split('·')[0];
	var likerdate = e.target.parentElement.getAttribute('title').split('·')[1];
	var likerphoto = e.target.getAttribute('src');
	document.getElementById('spanLikerName').innerHTML = likername;
	document.getElementById('spanLikerDate').innerHTML = likerdate;

	let liker_div = document.getElementById('section7popup').children[0];
	let liker_div2 = document.getElementById('section7popup').children[0].children[0];
	let liker_div_a = document.getElementById('section7popup').children[0].children[0].children[0];
	let liker_div_a_img = document.getElementById('section7popup').children[0].children[0].children[0].children[0];
	liker_div_a_img.style.height = "auto";
	liker_div_a_img.style.width = "100%";
	liker_div_a_img.setAttribute("src", likerphoto);
	document.getElementById('section7popup').style.display = 'block';
	//	console.log(liker_div.offsetHeight)
	let calcu = liker_div_a_img.offsetHeight / liker_div_a_img.offsetWidth;
	liker_div2.style.bottom = liker_div.offsetHeight + "px";
	console.log(calcu)
}

function popupOnResizer(e) {
	if (e) {
		let $this = e.target;
		$this.classList.remove('on');
		let calcu = $this.offsetHeight / $this.offsetWidth;
		if (calcu < 1) {
			$this.style.height = $this.offsetWidth + "px";
			setTimeout(function () {
				$this.style.width = $this.offsetHeight / calcu + "px"
			}, 10);
			$this.classList.remove('on');
		} else {
			$this.style.width = $this.offsetHeight;
			setTimeout(function () {
				$this.style.height = $this.offsetWidth * calcu + "px"
			}, 10);
			$this.classList.add('on');
		}
	}

}

$(document).ready(function () {

	$('.xButton').click(function (e) {
		e.preventDefault();
		$('#section7popup').fadeOut(150);
	})
	$('#section7popup').click(function (e) {
		e.preventDefault();
		$('#section7popup').fadeOut(150);
	})


	/*에디토리얼*/
	$(".pp>div>a").click(function () {
		var photogo = $(this).children("img").attr("src");


		$("#bigphoto>div>a>img").attr("src", photogo);
		//alert("바보");
		$("#bigphoto").fadeIn();
	});

	/*//////사진닫기////*/
	$("#bigphoto>div>a").click(function () {
		$("#bigphoto").fadeOut();
	});
	/*에디토리얼 끝*/




	$("#movetxt").fadeIn();
	$("#movetxt").addClass("animated slideInUp");
	$("#movetxt3").fadeIn();
	$("#movetxt3").addClass("animated slideInUp");

	setTimeout(function () {
		$("#movetxt2").addClass("animated jello");
	}, 1000);


	/***** 사진팝업*****/
	$("#photo1>div>a").click(function () {
		var photoq = $(this).children().attr("src");
		//alert(pop1);
		console.log(photoq);
		var photoq2 = photoq.replace(".jpg", "_2.jpg");
		console.log(photoq2);
		$("#black").fadeIn();
		$("#pop img").attr("src", photoq2);
		$("#pop").fadeIn();

	});


	$("#pop a").click(function () {
		$("#pop").fadeOut();
		$("#black").fadeOut();

	});

});


/***** 능력치*****/

window.onload = function () {
	//좋아요 이미지 리사이저
	imageResizer();

	// 1페이지 버튼 정의
	let btn1 = document.getElementsByClassName('paging_btn')[0];
	if (btn1.innerHTML == "1") {
		btn1.id = "btn1";
	}

	//좋아요 누르고 원위치
	if (window.localStorage.getItem("likeButton")) {
		console.log(window.localStorage.getItem("likeButton"))
		window.scrollTo(0, window.localStorage.getItem("likeButton"));
	}

	setTimeout(function () {
		window.localStorage.removeItem("likeButton");
	}, 3500)
	setTimeout(function () {
		window.localStorage.removeItem("likeButtonOn");
	}, 3500)


	for (var ii = 0; ii < 8; ii++) {
		for (var i = 0; i < 5; i++) {
			document.getElementsByClassName('webtext')[ii].children[0].children[i].style.height = document.getElementsByClassName('webtext')[ii].children[1].children[i].offsetHeight + "px"
		}
	}

}


//파라미터 값 얻는 신기한 스크립트
//function getParameter(name) {
//	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
//	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
//		results = regex.exec(location.search);
//	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
//}

//getParameter("afterLike") 이렇게 씀. 콘솔로그로 얻을 수 잇음.

function imageResizer() {

	// 모바일 프로필 이미지 리사이저
	if (document.getElementById('prof_img')) {
		let sessionImgHeight = document.getElementById('prof_img').height;
		let sessionImgWidth = document.getElementById('prof_img').width;
		if (sessionImgHeight < sessionImgWidth) {
			document.getElementById('prof_img').style.height = 100 + "%";
			document.getElementById('prof_img').style.width = "auto";
		} else if (sessionImgHeight > sessionImgWidth) {
			document.getElementById('prof_img').style.height = "auto";
			document.getElementById('prof_img').style.width = 100 + "%";
		}
	}

	// PC 프로필 이미지 리사이저
	if (document.getElementById('profile_frame')) {
		let sessionImgHeight2 = document.getElementById('profile_frame').height;
		let sessionImgWidth2 = document.getElementById('profile_frame').width;
		if (sessionImgHeight2 < sessionImgWidth2) {
			document.getElementById('profile_frame').style.height = 100 + "%";
			document.getElementById('profile_frame').style.width = "auto";
		} else if (sessionImgHeight2 > sessionImgWidth2) {
			document.getElementById('profile_frame').style.height = "auto";
			document.getElementById('profile_frame').style.width = 100 + "%";
		}
	}

}

// 작은 이미지들 리사이저 
function imageResizer2(e) {
	if (e) {
		let mini_profile = e.target;
		let btn1 = document.getElementsByClassName('paging_btn')[0];
		if (mini_profile.offsetHeight < mini_profile.offsetWidth) {
			mini_profile.classList.add("on")
		} else if (mini_profile.offsetHeight > mini_profile.offsetWidth) {
			mini_profile.classList.remove("on")
		}
	}
}




$(document).ready(function () {

	/*******포트폴리오 클릭*******/
	$("#port").click = function () {
		submenuu()
	};

	function submenuu() {
		var submenuu1 = $(".submenu").attr("display");
		console.log(submenuu1);
		if (submenuu1 == "block") {
			$(".submenu").fadeOut();
			$(".submenu").css("display", "none");
		} else {
			$(".submenu").fadeIn();
		}
	};


	$("#port").click(function () {
		$(this).parent("li").next("ul").fadeOut();
	});


});

window.addEventListener('load', function () {
	let icando_content = document.getElementById('icando_content').innerHTML;
	let icando_content2 = document.getElementById('icando_content2');
	let icando = document.getElementById('icando')
	icando_content2.insertAdjacentHTML('beforeend', icando_content);
})
function svgLoad(){
	if(!document.getElementById('icando_content2')){
		let icando_content = document.getElementById('icando_content').innerHTML;
		let icando_content2 = document.getElementById('icando_content2');
		let icando = document.getElementById('icando')
		icando_content2.insertAdjacentHTML('beforeend', icando_content);
	}
}
