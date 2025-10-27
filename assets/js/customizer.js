/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

jQuery(document).ready(function ($) {
	var nameVal = '';
	var a = $('#one').html();
	$('#one').css({
		color: 'blue',
		backgroundColor: 'yellow'
	});
	$('ul li:even').css({
		//backgroundColor: 'pink'
	})
	$('#one').click(function () {
		$('ul li:even').css('backgroundColor', 'red')

	})
	$('#name').change(function () {
		var nameVal = $('#name').val();
		$('#lname').val(nameVal);
	})
	$('#fid').submit(function (e) {
		e.preventDefault();
		var nameVal = $('#name').val();
		$('#fname').text(nameVal);
		//$('#lname').attr('class', 'yahoo');
	});
	// Check if popupShown key exists in localStorage
	$('#popup').hide();
	$('.header-logins').click(function () {
		//$('#popup').toggle(1000);
		$('#popup').toggle(500);

	});
	$('#close-btn').click(function () {
		$('#popup').fadeOut(500)

	})
	// $('#close-btn').click(function(){
	// 	$('#popup').hide();
	// })


	$('.main-menu').hover(function () {
		$(this).find('.sub-1').toggleClass('active');
	})

	$('#btn-1').click(function () {
		$('#one').addClass('clr');
	})
	$('#btn-2').click(function () {
		$('#one').removeClass('clr');
	})
	$('#btn-3').click(function () {
		$('#one').toggleClass('clr');
	})
	$('#append').click(function () {
		$('#list').append('<li>append</li>');
	})
	$('#prepend').click(function () {
		$('#list').prepend('<li>append</li>');
	})


	$('.accordion-contant').hide();

	$('.accordion-tab').click(function () {

		$(this).siblings().removeClass('active');
		$(this).siblings().next('.accordion-contant').slideUp('slow');
		$(this).addClass('active');
		$(this).next('.accordion-contant').slideToggle('slow');
	})









	//$('.tab-content').removeClass('show-tab')
	$('.tab').click(function () {
		$('.tab-content').removeClass('show-tab').hide()
		$('.tab').removeClass('show-tab')
		$id = $(this).attr('data-tab');
		$(this).addClass('show-tab')
		$('#' + $id).addClass('show-tab')
		if ($('.tab-content').has('.show-tab')) {
			$('.show-tab').show()
		}


	})
	$('#menu-item-92').click(function () {
		$('.tab-content').removeClass('show-tab').hide()
		$('.tab').removeClass('show-tab')
		$('.tab[data-tab="tab-2"]').addClass('show-tab');

		$('#tab-2').show().addClass('show-tab');
	})








	// menu



	//  $('#menu-menu-1').children().each(function(){
	// 	$id = $(this).attr('id');
	// 	$('#' + $id).click(function(){
	// 	$menuId = $(this).attr('id');
	// 	console.log('id ',$menuId);
	// 	$('#' + $menuId).click(function(){
	// 		$(this).find('ul').show().css('display','block');
	// 	})

	// })

	// })

	$('#menu-menu-1 li').mouseover(function () {

		$('#menu-menu-1 li ul').hide()
		$(this).find('ul').show()
		$(this).find('ul').mouseleave(function () {
			$(this).hide();
		})

	});




	//form 


	$('#test-form').submit(function (e) {
		e.preventDefault();
		var isvalid = true;

		var emailVal = $('#email').val();
		var phoneVal = $('#phone').val();
		var mynameVal = $('#myname').val();
		if (emailVal == '') {
			$('#email').attr('placeholder', 'please enter email').addClass('red-placeholder')
			isvalid = false;
		}

		if (phoneVal == '') {
			$('#myname').attr('placeholder', 'please enter Name').addClass('red-placeholder')
			isvalid = false;
		}

		if (mynameVal == '') {
			$('#phone').attr('placeholder', 'please enter phone').addClass('red-placeholder')
			isvalid = false;
		}

		if (isvalid) {
			alert('form is vaildate');
		} else {
			alert('form is not vaildate please fill all field');
		}
	})

	//humburger
	//$('#toggle-menu').hide()
	var isopen = false;
	$('#mobile-menu-toggle').click(function (e) {
		e.stopPropagation();
		if (!isopen) {
			$('#toggle-menu').animate({ left: 0 }, 400);
			isopen = true;
		} else if (isopen) {
			$('#toggle-menu').animate({ left: -350 }, 400);
			isopen = false;
		}

	})
	$('body').click(function () {
		$('#toggle-menu').animate({ left: -350 }, 400);
		isopen = false;
	})

	$('#back-to-top').hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}

	})
	$('#back-to-top').click(function () {
		$(window).scrollTop(0)
	});
});

