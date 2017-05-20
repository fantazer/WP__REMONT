$(document).ready(function(){



	//validate form

	$('.validate-form').each(function() {   

			var curentForm = $(this);

	    $(this).validate({        

			    	rules:{ //правила для полей 

							name:{

								required:true,

							},

							phone:{

								required:true,

								minlength:5,

								number:true

							},

							comment:{

								required:true,

								minlength:5,

							},

						},

						messages:{

							name:{

								required: 'Обязательное поле',

							},

							phone:{

								required: 'Обязательное поле',

								number:'Введите правильный номер',

								minlength:'Номер должен быть длиннее',

							},

							comment:{

								required: 'Обязательное поле',

								minlength:'Сообщение должно быть длиннее',

							},

						},

						submitHandler : function(form){ 

							console.log('all good');

						$.ajax({
						            type: "POST",
						            url: "/wp-content/themes/AAK/sender.php",
						            data: $(form).serialize(),
						            timeout: 3000,
						            success: function(){
						                setTimeout(function(){

						                			$('.modal-true').bPopup({

						                				closeClass:'modal-close',

						                					position:['auto','auto'], // position center

						                					follow: [true,true],

						                					autoClose: 2000

						                			}); 

						                			$(':input','.validate-form') 

						                			  .not(':button, :submit, :reset, :hidden')

						                			  .val('')

						                			  .removeAttr('checked')

						                			  .removeAttr('selected')

						                },1000)
						              }
						          });
							$('.modal-close').click();
								

					}

			    });

			});

		

	//validate form-end



	$("#my-menu").mmenu({

			navbar: {

				title: "Главное меню",

			},

			extensions: [

				//"effect-menu-slide", 

				"effect-listitems-slide",

				

			], 

			offCanvas : {

				position : "left", // changing this alters the position of the menu

				zposition : "front"

			},

		});

		if ($(window).width() < 1025) {

					$("body").swipe( {

					        swipeRight:function() {

					          $("#mobile-menu").data( "mmenu" ).open()

					          console.log('swipeee')

					        }

				});



			}



      $(".header-navigation-toggle__el").click(function() {

         $("#my-menu").data( "mmenu" ).open()

      });





	/* ###### For only ies  ######*/

	//if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)){

	//	//code

	//}



	//message for old IE

	function isIE () {

	  var myNav = navigator.userAgent.toLowerCase();

	  return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;

	}



	if (isIE() < 10 &&  isIE()) {

		$('body').empty();

		$('body').prepend('<div class="old-browser"><div class="old-browser-text"> Браузер не поддерживается =(</div></div>');

	}



	//for init SVG 

	/*svg4everybody();*/

	

	/* ###### For SlideToggle Elements  ######*/

	var hideToggle = function(targetClick,toggleEl) {

		$(targetClick).click(function(event){

				event.stopPropagation();

				$(toggleEl).slideToggle("fast");

		});

		$(toggleEl).on("click", function (event) {

			event.stopPropagation();

			console.log('click');

		});

		$(document).on("click", function () {

				$(toggleEl).hide();

		});

	}

	//hideToggle('.links-content','.block-links');


	$('.wrap-links-get').click(function() {
		$(this).parent().find('.block-links').slideToggle();
	});
	
	$(".links-content").each(function () {
	if($(this).has('.wrap-links a').length < 1) {
		$(this).css('display','none')
	}
	console.log($(this).has('.wrap-links a'));
	});

	/* ###### init RangeSLider  ######*/

	/* ###### bower i --save-dev nouislider  ######*/

	/* ###### https://gist.github.com/fantazer/2bdc4e6a63708e143718ffa7c32eae17  ######*/



	/*var slider = document.getElementById('rangeSlider'); //Элемент



	noUiSlider.create(slider, {

		start: [0, 100],

		connect: true,

		step: 10,

		range: {

			'min': 0,

			'max': 100,

		},

		pips: { // Show a scale with the slider

			mode: 'steps',

			density: 4

		}

	});*/



	svg4everybody();

	localStorage.clear();

	sessionStorage.clear();

	//clear local storage

	$(window).unload(function(){

	  localStorage.clear();

	});

	

})



//cash SVG



;( function( window, document )

{

	'use strict';



	var file  = '/wp-content/themes/AAK/img/pack.html',

		revision = 1;



	if( !document.createElementNS || !document.createElementNS( 'http://www.w3.org/2000/svg', 'svg' ).createSVGRect )

		return true;



	var isLocalStorage = 'localStorage' in window && window[ 'localStorage' ] !== null,

		request,

		data,

		insertIT = function()

		{

			document.body.insertAdjacentHTML( 'afterbegin', data );

		},

		insert = function()

		{

			if( document.body ) insertIT();

			else document.addEventListener( 'DOMContentLoaded', insertIT );

		};



	if( isLocalStorage && localStorage.getItem( 'inlineSVGrev' ) == revision )

	{

		data = localStorage.getItem( 'inlineSVGdata' );

		if( data )

		{

			insert();

			return true;

		}

	}



	try

	{

		request = new XMLHttpRequest();

		request.open( 'GET', file, true );

		request.onload = function()

		{

			if( request.status >= 200 && request.status < 400 )

			{

				data = request.responseText;

				insert();

				if( isLocalStorage )

				{

					localStorage.setItem( 'inlineSVGdata',  data );

					localStorage.setItem( 'inlineSVGrev',   revision );

				}

			}

		}

		request.send();

	}

	catch( e ){}



}( window, document ) );