
$(window).resize(function() {
	var small = $("#topmenusmall").html();
	var big = $("#topmenubig").html();
	var windowWidth = $(window).width();
	var header = $(".ui.top.menu.stackable");
	var pop = $(".ui.popup");
	$("body").attr('style', 'padding-top:' + (header.height() + 15) +'px;');
	if (windowWidth > 1200){ /*Copie du code pour le menu de la taille écran supérieur à 1200px*/
		$("#topmenu").html(big);
		$("#topmenu #link_home1").attr("id", "link_home");
		header.attr("class", "ui top fixed tabular menu stackable");
	} else { /*Copie du code pour le menu de la taille écran <= 1200px*/
		$("#topmenu").html(small);
		$("#topmenu #link_home2").attr("id", "link_home");
		pop = $(".ui.popup");
		if (header.height() > 70) {    /*On dé-fixe, on enlève le tabular, et padding-top qui faisait le blanc au dessus, lorsque le est en stack*/
			header.attr("class", "ui top menu stackable");
			pop.attr("class", "ui fluid popup");
			$("body").attr('style', 'padding-top: 0px;');
		}
		else {
			pop.attr("class", "ui very wide popup");
			header.attr("class", "ui top fixed tabular menu stackable");
		}
	}

	$('#topmenu .browse').popup({  /*Code pour le popup de Menu*/
		inline   : true,
		hoverable: true,
		position : 'bottom left',
		delay: {
			show: 100,
			hide: 500
		}
	});


});



$(document).ready(function() {
	var small = $("#topmenusmall").html();
	var big = $("#topmenubig").html();
	var windowWidth = $(window).width();
	var header = $(".ui.top.menu.stackable");
	var pop = $(".ui.popup");
	$("body").attr('style', 'padding-top:' + (header.height() + 15) +'px;');
	if (windowWidth > 1200) {  /*Copie du code pour le menu de la taille écran supérieur à 1200px*/
		$("#topmenu").html(big);
		$("#topmenu #link_home1").attr("id", "link_home");
		header.attr("class", "ui top fixed tabular menu stackable");
	} else { /*Copie du code pour le menu de la taille écran <= 1200px*/
		$("#topmenu").html(small);
		$("#topmenu #link_home2").attr("id", "link_home");
		pop = $(".ui.popup");
		if (header.height() > 70) {    /*On dé-fixe, on enlève le tabular, et padding-top qui faisait le blanc au dessus, lorsque le est en stack*/
			header.attr("class", "ui top menu stackable");
			pop.attr("class", "ui fluid popup");
			$("body").attr('style', 'padding-top: 0px;');
		}
		else {
			pop.attr("class", "ui very wide popup");
			header.attr("class", "ui top fixed tabular menu stackable");
		}
	}


	$('#topmenu .browse').popup({  /*Code pour le popup de Menu*/
		inline   : true,
		hoverable: true,
		position : 'bottom left',
		delay: {
			show: 100,
			hide: 500
		}
	});




});


