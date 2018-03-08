import swal from 'sweetalert';
import notie from 'notie';
import Cookies from 'js-cookie';

$(document).ready(function() {

	window.notie = notie;
	window.base_url = '//' + window.location.hostname + "/api/";
	window.Cookies = Cookies;


	$(document).on('click', '.cart-btn', function() {
		return window.addToCart($(this).data('dom'), $(this).data('id'));
	});

	$(document).on('click', '.cart-btn-round', function() {
		return window.addToCart($(this).data('dom'), $(this).data('id'));
	});

	window.addToCart = function addToCart(domId, encrypted, qty=1) {
		let $btn = $('*[data-dom="' + domId + '"]');
		$btn.text('Please Wait...');
		$btn.attr('disabled', true);

		$.ajax({
			url: '/ajax-requests/cart/add',
			type: 'POST',
			data: '_token=' + $("meta[name=csrf-token]").attr('content') + '&c=' + encrypted + '&q=' + qty,
			success: function(data) {
				$('#' + domId).attr('disabled', false);

				swal('Success', 'Item Successfully Added To Your Cart', 'success')
						.then((success) => {
								window.location.reload();
						});

				$btn.html('<i class="icon-basket-loaded"></i> Add To Cart');
				return;
			},
			error: function(err) {
				return swal('Error', 'Failed to add item to cart!', 'error');
			}
		});
	}



	window.in_array = function(string, array) {
		if ( $.inArray(string, array) > -1 ) {
		    // the value is in the array
		    return true;
		}

		return false;
	}

	$("[data-submit]").click(function(){
	    var $this = $(this),
	        $target = $this.data("submit");

	    console.log('hello')

	    $($target).submit();

	    return false;
	});


	$("#form-address").submit(function(){
	    var $this = $(this),
	        $url = $this.attr('action'),
	        $method = $this.attr('method');

	    $.ajax({
	        url: $url,
	        data: $this.serialize(),
	        type: $method,
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        beforeSend: function() {
	            console.log('sending');
	            $this.find(":input").attr("disabled", true);
	        },
	        complete: function() {
	            $this.find(":input").attr("disabled", false);
	        },
	        error: function() {
	            return swal('Oops!', 'Looks like something went wrong!', 'error');
	        },
	        success: function(data) {
	            if(data.success == true) {
	                $("#address_form").modal('hide');
	                swal("New address has been added", "A new address has been added to your address list.", "success")
										.then((value) => {
												window.location.reload();
										});
							}else if(data.success == false) {
	                $("#address_form").modal('hide');
	                swal(data.title, data.data,"warning");
	            }
	        }
	    })
	    return false;
	});

	var loadData = function($this, type,id) {
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
	                if(data.status == 200) {
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
		          text: "You will not be able to recover it!",
		          icon: "warning",
		          buttons: true,
		          dangerMode: true,
		        })
		        .then((willDelete) => {
		        	if(willDelete) {
		        		$this.parent('form').submit();
		        	}
		        	else
		        	{
		        		swal('Safe!', 'Your address are safe!', 'success');
		        	}
		        });

		        return false;
		    });
		});

		window.appendQuery = function(key, value, url = false) {
			if (!url) url = window.location.href;
			var re = new RegExp("([?&])" + key + "=.*?(&|#|$)(.*)", "gi"),
				hash;

			if (re.test(url)) {
				if (typeof value !== 'undefined' && value !== null)
					return url.replace(re, '$1' + key + "=" + value + '$2$3');
				else {
					hash = url.split('#');
					url = hash[0].replace(re, '$1$3').replace(/(&|\?)$/, '');
					if (typeof hash[1] !== 'undefined' && hash[1] !== null)
						url += '#' + hash[1];
					return url;
				}
			}
			else {
				if (typeof value !== 'undefined' && value !== null) {
					var separator = url.indexOf('?') !== -1 ? '&' : '?';
					hash = url.split('#');
					url = hash[0] + separator + key + '=' + value;
					if (typeof hash[1] !== 'undefined' && hash[1] !== null)
						url += '#' + hash[1];
					return url;
				}
				else
					return url;
			}
		}

		window.removeQuery = function(url, parameter) {
		    //prefer to use l.search if you have a location/link object
		    var urlparts= url.split('?');
		    if (urlparts.length>=2) {

		        var prefix= encodeURIComponent(parameter)+'=';
		        var pars= urlparts[1].split(/[&;]/g);

		        //reverse iteration as may be destructive
		        for (var i= pars.length; i-- > 0;) {
		            //idiom for string.startsWith
		            if (pars[i].lastIndexOf(prefix, 0) !== -1) {
		                pars.splice(i, 1);
		            }
		        }

		        url= urlparts[0] + (pars.length > 0 ? '?' + pars.join('&') : "");
		        return url;
		    } else {
		        return url;
		    }
		}

		window.parseQuery = function parseQuery() {
			var foo = window.location.href.split('?')[1].split('#')[0].split('&');
			var dict = {};
			var elem = [];
			for (var i = foo.length - 1; i >= 0; i--) {
				elem = foo[i].split('=');
				dict[elem[0]] = elem[1];
			};
			return dict;
		}

		window.reformat = function() {
			let cook = Cookies;

			switch(cook.get('_pdp')) {
					case 'grid' :
							$('#product_grid_wrapper').addClass('active');
							$('#product_list_wrapper').removeClass('active');
							$('#product_col_list').hide();
							$('#product_col_grid').show();
							$('#product_col_list_real').hide();
							$('#product_col_grid_real').show();
							break;
					case 'list' :
							$('#product_list_wrapper').addClass('active');
							$('#product_grid_wrapper').removeClass('active');
							$('#product_col_grid').hide();
							$('#product_col_list').show();
							$('#product_col_list_real').show();
							$('#product_col_grid_real').hide();
							break;
					default :
							$('#product_grid_wrapper').addClass('active');
							$('#product_list_wrapper').removeClass('active');
							$('#product_col_list').hide();
							$('#product_col_grid').show();
							$('#product_col_list_real').hide();
							$('#product_col_grid_real').show();
							break;
			}
		}
});

$(document).ready(function() {
		let options = {
			items: 3,
			dots: false,
			nav: true,
			autoWidth: true,
			loop: true,
			autoplay: true,
			smartSpeed: 2500,
			autoplayTimeout: 1000,
		}
		$('ul.owl-carousel').owlCarousel(options);
});

$(document).on("click", ".toggle-modal", function() {
    var $this = $(this),
        $target = $($this.data('target'));

        console.log($target)
    $target.prependTo('body').modal('show');
    return false;
});

$(document).ready(function() {

	$('#filterBy').on('changed.bs.select', function(e) {
		let $choosed = $(this).children(':selected').attr('value');
		let url = '';
		console.log($choosed);

		switch($choosed) {
			case "price" :
				url = appendQuery('filter_by', 'price');
				break;
			case "newest" :
				url = appendQuery('sort_by', 'asc');
				break;
			case "oldest" :
				url = appendQuery('sort_by', 'desc');
				break;
			default:
				console.log('Well!');
		}

		window.history.pushState({"html":"g","pageTitle":"l"},"", url);
	});

});

$(document).ready(function() {
	let obj = parseQuery();
	let final_query = '';

	$('div.filter-category-wrapper :checkbox').on('change', function(e) {
			let checkbox = $(this);
			if(obj.hasOwnProperty('category')) {
				let d = obj.category;

				if(d.indexOf('all') > -1) {
					final_query += d.replace('all', '');
				}

			}

			if(final_query.startsWith(',')) {
				final_query += d.substr(1);
			}

			if(checkbox.is(':checked')) {
					// if there is "all" category set, then remove it
					if(final_query == '') {
							final_query += checkbox.attr('value');
					}
					else
					{
							final_query += ',' + checkbox.attr('value');
					}
			}
			else
			{
					if(final_query == '') {
							// remove category from url query

					}
					else
					{
							if(final_query == checkbox.attr('value')) {
									final_query = final_query.replace(checkbox.attr('value'), '');
							}

							if(final_query.indexOf(checkbox.attr('value') + ',', -1) == 0) {
								final_query = final_query.replace(checkbox.attr('value') + ',', '');
							}


							if (',' + final_query.indexOf(checkbox.attr('value'), -1)) {
								final_query = final_query.replace(',' + checkbox.attr('value'), '');
							}

							if(final_query.endsWith(',')) {
								final_query = final_query.slice(0, -1);
							}
							if(final_query.startsWith(',')) {
								final_query = final_query.substr(1);
							}

					}
			}

			if(final_query == '') {
				console.log('removing category from query');
				$.each(parseQuery(), function(i, d){
						let temp_query = [];
						if(i != 'category') {
								let url = appendQuery(i, d);
								let new_url = removeQuery(url, 'category');
								window.history.pushState({"html":"g","pageTitle":"l"},"", new_url);
						}

				});
				return __do_category_ajax();
			}
			else
			{
				let url = appendQuery('category', final_query);
				window.history.pushState({"html":"g","pageTitle":"l"},"", url);

				return __do_category_ajax();
			}
			//do ajax requests
			function __do_category_ajax() {
				let param = '_token=' + $("meta[name=csrf-token]").attr('content') + '&';
				var pathArray = window.location.pathname.split( '/' );
				let urlSegment = pathArray[1];
				param += 'segment=' + urlSegment + '&';
				$.each(parseQuery(), function(i, d){
						param += i + '=' + d + '&';
				});

				$.ajax({
						url: '/filter/api',
						type: 'POST',
						data: param,
						beforeSend: function() {
								$('#item_inner').html('');
								$('#dummy_items').show();
						},
						success: function(d) {
								$('#dummy_items').hide();
								$('#item_inner').html(d);
								window.reformat();
								// apend resut to body
						},
						error: function(e) {
								// display error
						}
				});
			}



	});

});
