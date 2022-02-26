$(function () {

	var currentPage = 1;
	var pageLength = $(".paging_btn").length;

	pageLength = $(".paging_btn").length;
	console.log("page length is " + pageLength);
	var url = "/younge/ajax/liker_ajax.php";
	$.get(
		url, {
			page: 1
		},
		function (data) {
			$(".likers_inner").html(data);
		}
	);

	//---------------
	function prevNext(pageNum, calcPage) {
		if (currentPage == pageNum) {
			getPage(pageNum);
		} else {
			getPage(currentPage + calcPage);
		}
	}

	$(".single").click(function () {
		if ($(this).hasClass("prev")) {
			prevNext(1, -1);
		} else {
			prevNext(pageLength, 1);
		}
	});
	//---------------

	$(".first").click(function () {
		getPage(1);
	});

	$(".last").click(function () {
		getPage(pageLength);
	});

	$(".paging_btn").eq(0).trigger('click');
	

});

function getPage(no) {
	var url = "/younge/ajax/liker_ajax.php";
	$(".paging_btn").removeClass('active');
	$(".paging_btn").eq(no - 1).addClass('active');
	$.get(
		url, {
			page: no
		},
		function (data) {
			$(".likers_inner").html(data);
			currentPage = no;
		}
	);
	
	
}


//SQL 데이터 빼내기 매크로
//    for(var i=1;i<77;i++){
//		console.log("("+i+", 'uptownboy"+i+"', '이대영"+i+"', 'pikachu3333@naver.com', 'bg ("+i+")', '123123', '2021-08-14'),")
//		console.log("("+i+", 'uptownboy"+i+"', '이대영', '1', '2021-08-16'),")
//	}
