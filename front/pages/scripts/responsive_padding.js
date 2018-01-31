$(window).resize(function() {

	var small = $("#topmenusmall").html();
	var big = $("#topmenubig").html();
	var smallpush = $("#topmenusmallpush").html();
	var windowWidth = $(window).width();
	var header = $("#topmenu");
	var pop = $(".ui.popup");
	$("body").attr('style', 'padding-top:' + (header.height()) +'px;');
	if (windowWidth > 1200){
		$('.sidebar')
			.sidebar('hide')
		;
		$("#topmenu").html(big);
		$("#topmenu #link_home1").attr("id", "link_home");
	} else {
		if (windowWidth < 830 ) {
			$("#topmenu").html(smallpush);
			$("#topmenu #link_home3").attr("id", "link_home");
		} else {
			$('.sidebar')
				.sidebar('hide')
			;
			$("#topmenu").html(small);
			$("#topmenu #link_home2").attr("id", "link_home");
			pop = $(".ui.popup");
		}
	}

	$('#topmenu .browse').popup({
		inline   : true,
		hoverable: true,
		position : 'bottom left',
		delay: {
			show: 100,
			hide: 500
		}
	});

	$('.sidebar').first()
		.sidebar('attach events', '#men')
	;
	$('.sidebar').first()
		.sidebar('attach events', '#link_menu')
	;

	$('#men')
		.removeClass('disabled')
	;




	$("body").removeClass("pushable");


});
$(document).ready(function() {
	var small = $("#topmenusmall").html();
	var big = $("#topmenubig").html();
	var smallpush = $("#topmenusmallpush").html();
	var windowWidth = $(window).width();
	var header = $("#topmenu");
	var pop = $(".ui.popup");
	$("body").attr('style', 'padding-top:' + (header.height()) +'px;');
	if (windowWidth > 1200){
		$("#topmenu").html(big);
		$("#topmenu #link_home1").attr("id", "link_home");
	} else {
		if (windowWidth < 830 ) {
			$("#topmenu").html(smallpush);
			$("#topmenu #link_home3").attr("id", "link_home");
		} else {
			$("#topmenu").html(small);
			$("#topmenu #link_home2").attr("id", "link_home");
			pop = $(".ui.popup");

		}
	}

$('#topmenu .browse').popup({
	inline   : true,
	hoverable: true,
	position : 'bottom left',
	delay: {
		show: 100,
		hide: 500
	}
});


	$('.sidebar').first()
		.sidebar('attach events', '#men')
	;
	$('.sidebar').first()
		.sidebar('attach events', '#link_menu')
	;

	$('#men')
		.removeClass('disabled')
	;


	$("body").removeClass("pushable");


});

