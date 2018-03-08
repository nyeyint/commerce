function resizeBanner() {
	a = $(window).height();
	b = $('header').height();
	$('.home-slider').height(a - b);
}

function OpenMobileMenu() {
	$('body').toggleClass('open-mobile-menu');
}

function CloseMobileMenu() {
	$('body').removeClass('open-mobile-menu');
}

function OpenCart() {
	$('body').addClass('open-cart');
}

function CloseCart() {
	$('body').removeClass('open-cart');
}

function OpenSearch() {
	$('.form-search2').addClass('open');
}

function CloseSearch() {
	$('.form-search2').removeClass('open');
}

function checkCart() {
	setTimeout(function() {
		$('body').addClass('open-cart');
	}, 1);
}

function removeCart(el) {
	a = $(el).closest('.cart-div--item');
	a.addClass('remove');
	setTimeout(function() {
		a.remove();
	}, 500);
}

function toggleOrder() {
	if ($(window).width() < 768) {
		$('.cart-summary').toggleClass('open');
	}
}
function toggleVoucher() {
	if ($(window).width() < 768) {
		$('.form-voucher').toggleClass('open');
	}
}

function toggleAcc() {
	$('.acc-logged-c').toggleClass('open');
}
function closeAcc() {
	$('.acc-logged-c').removeClass('open');
}

function customSelect(e) {
	el = $(e);
	text = el.find('option:selected').text();
	if (text) {
		el.closest('.custom-select').removeClass('placeholder');
	} else {
		el.closest('.custom-select').addClass('placeholder');
		text = el.siblings('.replacement').attr('data-text');
	}
	el.siblings('.replacement').html(text);
}

function customSelected() {
	if ($('.custom-select').length) {
		$('.custom-select').each(function() {
			el = $(this).find('select');
			text = el.find('option:selected').text();
			if (text) {
				el.closest('.custom-select').removeClass('placeholder');
			} else {
				el.closest('.custom-select').addClass('placeholder');
				text = el.siblings('.replacement').attr('data-text');
			}
			el.siblings('.replacement').html(text);
			el.siblings('.replacement').removeClass('error');
		});
	}
}

function checkError(el) {
	a = $(el).closest('.form-group');
	$(el).remove();
	a.find('input, textarea, select').removeClass('error').click().focus();
}

function showError(form, error) {
	o = false;
	$.each(error, function(k, v) {
		if (o === false) {
			a = form.find('input[name="' + k + '"], textarea[name="' + k + '"], select[name="' + k + '"]');
			if (!form.hasClass('is-ajax') && a.length) {
				t = a.offset().top-100;
				c = $(window).scrollTop();
				if (t < c) {
					$('html, body').animate({
						scrollTop: t
					}, 1);
				}
				o = true;
			}
		}
		form.find('input[name="' + k + '"], textarea[name="' + k + '"], select[name="' + k + '"], div.replacement[name="' + k + '"]').addClass('error');
		form.find('input[name="' + k + '"], textarea[name="' + k + '"], select[name="' + k + '"]').closest('.form-group').append('<div class="form-error" for="fi-' + k + '" onClick="checkError(this);">' + v + '</div>');
		if (k == 'voucher_all') {
			form.append('<div class="form-error form-error-btm">' + v + '</div');
		}
	});
}
function formBefore(form) {
	form.find('input, select, textarea, div').removeClass('error');
	form.find('.form-error').remove();
	form.find('input[type="submit"], button[type="submit"]').prop('disabled', true).addClass('btn-loading');
	// closeMessage();
}
function formAfter(form, response) {
	if (response.redirect) {
		history.pushState({}, '', response.redirect);
		window.location.replace(response.redirect);
		return false;
	}
	if (response.message) {
		if(response.status == 400){
			showMessage(form, response.message);
			form.find('input[type="submit"], button[type="submit"]').prop('disabled', false).removeClass('btn-loading');
		}else{
			form.find('input[type="submit"], button[type="submit"]').prop('disabled', true).addClass('btn-loading');
		}
	}
	if (!response.status) {
		if (response.error && !$.isEmptyObject(response.error)) {
			showError(form, response.error);
		}
	}
}
function showMessage(form, message){
	form.find('.form-group').append('<div class="form-error form-error-btm">' + message + '</div');
	// form;
}
function formAjax(el, e) {
	e.preventDefault();
	form = $(el);
	form.ajaxSubmit({
		dataType: 'json',
		beforeSubmit: function() {
			formBefore(form);
		},
		success: function(response) {
			e.preventDefault();
			formAfter(form, response);
			$('#subtotal').val(response.total);
			$('.order-total .price').html('IDR ' + fPrice(response.total));
			if ($('.order-shipping .price').html() != "-") {
				changeShipping();
			} 
		}
	});
}

function formSearch(el, e) {
	q = $(el).find('input[name="q"]').val();
	if ($.trim(q) == '') {
		e.preventDefault();
		return false;
	}
}

function fPrice(nStr) {
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + '.' + '$2');
	}
	return x1 + x2;
}

function changeQty(el) {
	if ($('.qtext').length) {
		$('.qtext').remove();
	}
	q = aq = parseInt($(el).val());
	url = $(el).closest('.q').attr('data-url');
	key = $(el).closest('.q').attr('data-key');
	if (typeof xhrv !== 'undefined') {
		xhrv.abort();
	}
	xhrv = $.get(url+key + '&q=' + aq, function(response) {
		if (response.status) {
			if (response.error) {
				$('.cart-count').html(fPrice(response.error.count));
				$(el).closest('.caption').find('.price').html(response.error.price);
				div = $('.cart-div');
				div.find('.cart-div--footer .sub .price').html(response.error.subtotal);
			}
			customSelected();
		} else if (response.message) {
			$(el).val(response.error.quantity);
			$(el).closest('.q').parent().parent().append('<span class="qtext">' + response.message + '</span>');
		}
	}, 'json');
}

function addCart(el, e) {
	e.preventDefault();
	form = $(el);
	isNotify = form.find('input[name="notify"]').val();
	form.ajaxSubmit({
		dataType: 'json',
		beforeSubmit: function() {
			formBefore(form);
			if (typeof timerN !== 'undefined') {
				clearTimeout(timerN);
			}
			$('.page-product--fn-text').remove();
		},
		success: function(response) {
			formAfter(form, response);
			if (response.status) {
				if (isNotify == 1 && response.message) {
					$('.page-product--fn-head').hide();
					$('.page-product--form-notify input[name="email"]').val('');
					$('.page-product--form-notify').append('<div class="page-product--fn-text">' + response.message + '</div>');
					timerN = setTimeout(function() {
						$('.page-product--fn-text').fadeOut(function() {
							$(this).remove();
							$('.page-product--fn-head').show();
						});
					}, 2000);
				} else {
					if (response.error) {
						$('.cart-count').html(fPrice(response.error.count));
						div = $('.cart-div');
						div.find('.cart-div--list').html(response.error.items);
						div.find('.cart-div--footer').html(response.error.footer);
					}
					customSelected();
					OpenCart();
					timerC = setTimeout(function() {
						CloseCart();
					}, 2000);
				}
			} else {
				if (response.message) {
					if (isNotify == 0) {
						$('.page-product--form-add').append('<div class="page-product--fn-text">' + response.message + '</div>');
						timerN = setTimeout(function() {
							$('.page-product--fn-text').fadeOut(function() {
								$(this).remove();
							});
						}, 2000);
					}
				}
			}
		}
	});
}
function removeCart(el) {
	url = $(el).attr('data-url');
	key = $(el).attr('data-key');
	if (typeof xhrv !== 'undefined') {
		xhrv.abort();
	}
	xhrv = $.get(url+key, function(response) { console.log(response);
		if (response.status) {
			$(el).closest('.cart-div--item').addClass('remove');
			setTimeout(function() {
				$(el).closest('.cart-div--item').remove();
				div = $('.cart-div');
				if (response.error && !$.isEmptyObject(response.error)) {
					$('.cart-count').html(response.error.count);
					div.find('.cart-div--footer').html(response.error.footer);
					if (div.find('.cart-div--item').length) {
						div.find('.cart-div--item').removeClass('.cart-div--item-*');
						k = 0;
						$.each(div.find('.cart-div--item'), function() {
							$(this).addClass('.cart-div--item-' + k);
							$(this).find('.q').attr('data-key', k);
							$(this).find('.remove').attr('data-key', k);
							k++;
						});
					}
				} else {
					$('.cart-count').html(0);
					div.find('.cart-div--footer .sub').remove();
					div.find('.cart-div--footer button').prop('disabled', true);
					div.find('.cart-div--list').html('<div class="cart-div--empty">No products.</div>');
				}
			}, 500);
		}
	}, 'json');
}

function ajaxContent(el, e) {
	e.preventDefault();
	if ($(el).hasClass('form-search-q')) {
		q = $(el).find('input[name="q"]').val();
		if ($.trim(q) == '') {
			return false;
		}
	}
	if ($(el).is('form')) {
		url = $(el).attr('action');
		method = $(el).attr('method');
		data = $(el).serialize();
		loc = url;
		if (method == 'GET' || method == 'get') {
			loc += '?' + data;
		}
	} else {
		if ($(el).is('button')) {
			url = $(el).attr('data-href');
			$(el).addClass('btn-loading').prop('disabled', true).addClass('btn-loading');
			window.location.href = url;
			return false;
		} else {
			url = $(el).attr('href');
		}
		method = 'GET';
		data = '';
		loc = url;
	}
	if (url == 'javascript:void(0);') {
		return false;
	}
	if ($(window).width() < 992 && $(el).parent().hasClass('active')) {
		return false;
	}
	$.ajax({
		url: url,
		method: method,
		data: data,
		beforeSend: function() {
			$('#loadbar').animate({
				'width': '80%'
			}, 2000);
		},
		xhrFields: {
			onprogress: function (e) {
				if (e.lengthComputable) {
					p = e.loaded / e.total * 100 + '%';
					$('#loadbar').stop(true, true).css('width', p);
				} else {
					$('#loadbar').stop(true, true).css('width', '100%');
				}
			}
		},
		complete: function () {
			setTimeout(function() {
				window.location.href = loc;
			}, 300);
		}
	});
}

function addLoading(el) {
	$(el).find('button[type="submit"]').prop('disabled', true).addClass('btn-loading');
}

function checkStock(el) {
	val = $(el).val();
	if (val == 2) {
		$('.page-product--form').removeClass('page-product--form-on');
	} else {
		$('.page-product--form').addClass('page-product--form-on');
	}
}

function checkNotify() {
	$('.page-product--fn-head').hide();
	$('.page-product--form-notify').append('<div class="page-product--fn-text">Thank you, we will contact you if ready stock again.</div>');
	setTimeout(function() {
		$('.page-product--fn-text').fadeOut(function() {
			$(this).remove();
			$('.page-product--fn-head').show();
		});
	}, 2000);
}

function editAcc(type) {
	$('.form-hide').hide();
	$('.form-show').show();
	$('.acc-div form').trigger('reset');
	$('.edit-'+type).hide();
	$('.edited-'+type).show();
}

function resetAcc() {
	$('.form-hide').hide();
	$('.form-show').show();
	$('.acc-div form').trigger('reset');
}

function openPop() {
	$('body').addClass('open-pop');
	$('.pop').show();
}

function closePop() {
	$('body').removeClass('open-pop');
	$('.pop').hide();
}

function showPop(el) {
	url = $(el).attr('data-href');
	if (typeof xhrv !== 'undefined') {
		xhrv.abort();
	}
	xhrv = $.get(url, function(response) {
		if (response.redirect) {
			history.pushState({}, '', response.redirect);
			window.location.replace(response.redirect);
			return false;
		}
		if (response.status) {
			closePop();
			$('body').addClass('open-pop').prepend(response.message);
		}
	}, 'json');
}
function closePop() {
	$('body').removeClass('open-pop');
	$('.pop').hide();
}
function closePopA() {
	if ($('.pop-announcement').length) {
		$('.pop-announcement').remove();
		$('body').removeClass('open-pop');
	}
}

function openYoutube(a) {
	$('.youtubevid').html('');
	$('.youtubevid').html("<iframe width='100%' height='100%' src='" + a + "?autoplay=1' frameborder='0' allowfullscreen></iframe>");
}

function scrollAll() {
	a = $(window).scrollTop();
	
	if ($('.main-nav').length) {
		if (a > $('header .upper-nav').height()) {
			$('body').addClass('fixed');
			$('.content').css('padding-top', $('.main-nav').height());
			//closeAcc();
		} else {
			$('body').removeClass('fixed');
			$('.content').css('padding-top', 0);
		}
	}

	if ($(window).width() >= 992) {
		if ($('.cart-summary').length) {
			b = parseInt($('.cart-checkout').offset().top) - 20;
			if (a >= b) {
				h = parseInt($('.cart-summary').height());
				h2 = parseInt($('.cart-checkout').height());
				if (h2 > h) {
					c = b + (h2 - h);
					if (a <= c) {
						t = a - b;
					} else {
						t = c - b;
					}
					$('.cart-summary').css('top', t);
				}
			} else {
				$('.cart-summary').css('top', 0);
			}
		}

		if ($('.acc-side').length && $('.acc-content').length) {
			b = parseInt($('.acc-content').offset().top) - 100;
			if (a >= b) {
				h = parseInt($('.acc-side').height());
				h2 = parseInt($('.acc-content').height());
				if (h2 > h) {
					c = b + (h2 - h);
					if (a <= c) {
						t = a - b;
					} else {
						t = c - b;
					}
					$('.acc-side').css('top', t);
				}
			} else {
				$('.acc-side').css('top', 0);
			}
		}
	}
	
	if (a > 400) {
		$('div.totop').fadeIn();
	} else {
		$('div.totop').fadeOut();
	}
}

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		CloseMobileMenu();
		CloseCart();
	}
});

$('html').click(function(e) {
	if (!$(e.target).is('.cart') && !$(e.target).parents().is('.cart') && !$(e.target).is('.cart-div') && !$(e.target).parents().is('.cart-div')) {
		CloseCart();
	}
});

$(document).ready(function() {
	$('.scroll-pane').jScrollPane({
		autoReinitialise: true
	});
	
	customSelected();
	
	scrollAll();
	$(window).scroll(function() {
		scrollAll();
	});
	$(window).resize(function() {
		if ($('.home-slider').length) {
			resizeBanner();
		}
	});
	
	setTimeout(function() {
		$('.form-updated').fadeOut();
	}, 2000);
	
	$('span.totop').click(function(e){
		e.preventDefault();
		$('body,html').animate({ scrollTop: 0 }, 600);
	});
	
	$('input').keypress(function() {
		$(this).removeClass('error');
		$(this).closest('.form-group').find('.form-error').remove();
	});
	
	$('.ajaxfrm').on('submit', function(e){
		e.preventDefault(e);
		frm = $(this).closest('form');
		frm.find('button[type="submit"]').prop('disabled', true);
		frm.find('.form-control').removeClass('error');
		frm.find('.form-error').remove();
		$.post(frm.attr('action'), frm.serialize(), function(res) {
			frm.find('button[type="submit"]').prop('disabled', false);
			if (res.redirect) {
				window.location = res.redirect;
			}
			if (res.message) {
				alert(res.message);
			}
			if (res.reset) {
				frm[0].reset();
			}
			if (res.error) {
				$.each(res.error, function(i, item) {
					frm.find('input[name="' + item.field + '"], textarea[name="' + item.field + '"]').addClass('error');
					frm.find('input[name="' + item.field + '"], textarea[name="' + item.field + '"]').closest('.form-group').append('<div class="form-error">' + item.message + '</div>');
					if (item.field == 'program' || item.field == 'day' || item.field == 'time') {
						frm.find('.' + item.field).closest('.form-group').append('<div class="form-error">' + item.message + '</div>');
					}
				});
			}
		}, 'json');
	});
	
	// $('.home-slider .owl-carousel').owlCarousel({
	// 	items: 1,
	// 	loop: true,
	// 	autoplay: true,
	// 	autoplayHoverPause: true,
	// 	dotClass: 'owl-dot bg-dot',
	// 	responsive:{
	// 		0:{
	// 			nav: false,
	// 			dots: true
	// 		},
	// 		992:{
	// 			nav: true,
	// 			dots: true
	// 		}
	// 	},
	// 	onInitialized: function() {
	// 		resizeBanner();
	// 	}
	// });
	
	// var sync1 = $('.feature-slider.feat-1 .owl-carousel');
	// var sync2 = $('.feature-slider.feat-2 .owl-carousel');
	
	// /* hide owl nav + dots if item less than the default value (depends on responsive)  */
	// sync1.on('initialized.owl.carousel resized.owl.carousel', function(e) {
	// 	$('.feature-slider.feat-1 .owl-carousel .owl-nav, .feature-slider.feat-1 .owl-carousel .owl-dots').toggleClass('hide-owl-nav', e.item.count / e.page.size <= 1);
	// });
	
	// sync1.owlCarousel({
	// 	loop: true,
	// 	autoplay: true,
	// 	autoplayHoverPause: true,
	// 	margin: 30,
	// 	stagePadding: 30,
	// 	dotClass: 'owl-dot normal-dot',
	// 	responsive:{
	// 		0:{
	// 			items: 2,
	// 			nav: false,
	// 			dots: true
	// 		},
	// 		767:{
	// 			items: 3,
	// 			nav: false,
	// 			dots: true
	// 		},
	// 		991:{
	// 			items: 5,
	// 			nav: true,
	// 			dots: true
	// 		}
			
	// 	}
	// });
	
	// /* hide owl nav + dots if item less than the default value (depends on responsive) */
	// sync2.on('initialized.owl.carousel resized.owl.carousel', function(e) {
	// 	$('.feature-slider.feat-2 .owl-carousel .owl-nav, .feature-slider.feat-2 .owl-carousel .owl-dots').toggleClass('hide-owl-nav', e.item.count / e.page.size <= 1);
	// });
	
	// sync2.owlCarousel({
	// 	loop: true,
	// 	autoplay: true,
	// 	autoplayHoverPause: true,
	// 	margin: 30,
	// 	stagePadding: 30,
	// 	dotClass: 'owl-dot normal-dot',
	// 	responsive:{
	// 		0:{
	// 			items: 2,
	// 			nav: false,
	// 			dots: true
	// 		},
	// 		767:{
	// 			items: 3,
	// 			nav: false,
	// 			dots: true
	// 		},
	// 		991:{
	// 			items: 5,
	// 			nav: true,
	// 			dots: true
	// 		}
			
	// 	}
	// });
	
	
	$('#mobile-menu .dropdown > a').click(function(e) {
		e.preventDefault();
		$(this).parent('.dropdown').toggleClass('open');
	});
		
	$('.category-list .dropdown > a').click(function(e) {
		e.preventDefault();
		$(this).parent('.dropdown').toggleClass('open');
	});
	
	$('.category-list li a').click(function(e) {
		if ($(window).width() < 992) {
			if ($(this).closest('li').hasClass('active')) {
				e.preventDefault();
			}
			$('.category-list').toggleClass('open');
		}
	});
	
	$('.acct-menu a').click(function(e) {
		if ($(window).width() < 992) {
			if ($(this).closest('li').hasClass('active')) {
				e.preventDefault();
			}
			$('.acct-menu').toggleClass('open');
		}
	});
	
	$('.pro-tabs li span').click(function(e){
		href = $(this).attr('data-href');
		if ($(window).width() < 992) {
			$('.pro-tabs').toggleClass('open');
		}
		$('.tabs-detail').hide();
		$('#'+href).show();
		$(this).closest('ul').find('li span, li').removeClass('active');
		$(this).addClass('active');
		$(this).parent().addClass('active');
	});
	
	$('#same-address').change(function() {
		if ($(this).is(':checked')) {
			$('.add-ship').hide();
		} else {
			$('.add-ship').show();
		}
		scrollAll();
	});

var loadData = function($this, type, id) {
    let endpoint, text;
    if(type == 'province') {
        endpoint = "ongkir/get_provinces";
        text = "Provinsi";
    }else if(type == 'city') {
        endpoint = "ongkir/get_cities/"+id;
        text = "Kota";
    }else if(type == 'subdistrict') {
        endpoint = "ongkir/get_subdistricts/"+id;
        text = "Kecamatan";
    }
        $.ajax({
            url: base_url + endpoint,
            type: 'GET',
            contentType: false,
            beforeSend: function() {
                $this.html("<option>Memuat data "+text+" ...</option>");
            },
            complete: function() {
            },
            error: function(xhr, status, text){
                console.log(text)
            },
            success: function(xhr, status, data) {
            	// return console.log(text);
                let options = "<option disabled selected>Pilih "+text+"</option>";
                $.each(data.responseJSON, function(i, item) {
                    if(type=='province') {
                        options += "<option value='"+item.province_id+"'>"+item.province+"</option>";                           
                    }else if(type =='city') {
                        options += "<option value='"+item.city_id+"'>"+item.city_name+" ("+item.type+")</option>";
                    }else if(type =='subdistrict') {
                        options += "<option value='"+item.subdistrict_id+"'>"+item.subdistrict_name+"</option>";
                    }
                });
                $this.html(options);
                
            }
        })
   }

    $("[data-province]").each(function(){
        var $this = $(this);
        loadData($this, 'province');
    });

    $("[data-province]").change(function(){
        loadData($("[data-city]"), 'city', $(this).val());
        $(".location-city").fadeIn();
    });

    $("[data-city]").change(function(){
        loadData($("[data-subdistrict]"), 'subdistrict', $(this).val());
        $(".location-sub").fadeIn();
    });

    $("[data-province], [data-city], [data-subdistrict]").change(function() {
        $($(this).data("target")).val($(this).find("option:selected").html());
    });

$("[data-delete]").each(function(){
    var $this = $(this);

    $this.on("click", function() {
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(data){
            if(data == true) {
                $this.parent('form').submit();
            }
        });

        return false;
    });
});

   });


