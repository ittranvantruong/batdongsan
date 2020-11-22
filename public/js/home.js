

$('#carousel_baochi').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

$('#caruosel_hotro_tienich').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});






$('#carousel_duan_noibat').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
$('#carousel_tin_tieu_diem').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


$(document).mouseup(function(e) 
{
    var container = $(".select_custom");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        $('#div_catagory_reoptions').slideUp("fast");
    }

    var container1 = $("#form_search_top");

    if (!container1.is(e.target) && container1.has(e.target).length === 0) 
    {
        $(".content_search_1").removeClass('in');
    	$(".content_search_2").removeClass('in');
    	$(".toggle_more_search a").css('display', 'inline-block');

    }
  

});



$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();


//menu

	$('.arrrow').click('slow',function(event) {
		if($(this).parent().find('.dropdown_submenu').hasClass('show')){

			$('.active .arrrow').removeClass('un_arrow');
			$('.active .dropdown_submenu').removeClass('show');
			$('.dropdown_menu_mobile li').removeClass('active');
		}
		else{
			$('.active .arrrow').removeClass('un_arrow');
			$('.active .dropdown_submenu').removeClass('show');
			$('.dropdown_menu_mobile li').removeClass('active');

			//alert('msg');

			$(this).parent().find('.dropdown_submenu').addClass('show');
			$(this).parent().addClass('active');
			$(this).addClass('un_arrow');
			$(this).addClass('hide_sub_menu');
		}
		
	});

	
	$('.bg_menu').click(function(event) {
		/* Act on the event */
		$(this).removeClass('in');
		$('#menu_body').removeClass('in');
	});

	$('#toggle_menu_mobile').click(function(event) {
		/* Act on the event */
		$('.bg_menu').addClass('in');
		$('#menu_body').addClass('in');
	});

  
	$(window).scroll(function(event) {
		var top_hg = $("html,body").scrollTop();
		if (top_hg >= 110) {
			$("#header_main").addClass('fix');
			//alert('msg');
		}
		else if(top_hg < 110){
			$("#header_main").removeClass('fix');
		}
	});


	$(".branch_show").click(function(event) {
		// alert('msg');
		$('.branch_detail').slideToggle("slow");
	});

	$("#show_more").click(function(event) {
		// alert('msg');
		$('#show_product_more').slideDown("slow");

		$(this).css('display', 'none');
	});
	
	
	$(".select_custom").click(function(event) {
		/* Act on the event */
		$('#div_catagory_reoptions').slideToggle("fast");
	});
	
	
	$("#div_catagory_reoptions ul li ").click(function(event) {
		/* Act on the event */

		// alert($(this).val());

	});
	$("#txtSearch").focusin(function(event) {
		/* Act on the event */
		$(".content_search_1").addClass('in');
	});

	$(".filter_more").click(function(event) {
		/* Act on the event */
		$(".content_search_2").addClass('in');
		$(".toggle_more_search a").css('display', 'none');
	});
	$(".close_filter_more").click(function(event) {
		/* Act on the event */
		$(".content_search_2").removeClass('in');
		$(".toggle_more_search a").css('display', 'inline-block');
	});
	
	// $("#quicksearch").click(function(event) {
	// 	$("#modal_search_mobile").modal("show");
	// });

	





















});




