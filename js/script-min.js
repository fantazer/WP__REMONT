$(document).ready(function(){function e(){var e=navigator.userAgent.toLowerCase();return e.indexOf("msie")!=-1&&parseInt(e.split("msie")[1])}$(".validate-form").each(function(){$(this);$(this).validate({rules:{name:{required:!0},phone:{required:!0,minlength:5,number:!0},comment:{required:!0,minlength:5}},messages:{name:{required:"Обязательное поле"},phone:{required:"Обязательное поле",number:"Введите правильный номер",minlength:"Номер должен быть длиннее"},comment:{required:"Обязательное поле",minlength:"Сообщение должно быть длиннее"}},submitHandler:function(e){console.log("all good"),setTimeout(function(){$(".modal-true").bPopup({closeClass:"modal-close",position:["auto","auto"],follow:[!0,!0],autoClose:2e3}),$(":input",".validate-form").not(":button, :submit, :reset, :hidden").val("").removeAttr("checked").removeAttr("selected")},1e3)}})}),$("#my-menu").mmenu({navbar:{title:"Главное меню"},extensions:["effect-listitems-slide"],offCanvas:{position:"left",zposition:"front"}}),$(window).width()<1025&&$("body").swipe({swipeRight:function(){$("#mobile-menu").data("mmenu").open(),console.log("swipeee")}}),$(".header-navigation-toggle__el").click(function(){$("#my-menu").data("mmenu").open()}),e()<10&&e()&&($("body").empty(),$("body").prepend('<div class="old-browser"><div class="old-browser-text"> Браузер не поддерживается =(</div></div>'));svg4everybody(),localStorage.clear(),sessionStorage.clear(),$(window).unload(function(){localStorage.clear()})}),function(e,t){"use strict";var n="img/pack.html",o=1;if(!t.createElementNS||!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect)return!0;var i,a,r="localStorage"in e&&null!==e.localStorage,l=function(){t.body.insertAdjacentHTML("afterbegin",a)},s=function(){t.body?l():t.addEventListener("DOMContentLoaded",l)};if(r&&localStorage.getItem("inlineSVGrev")==o&&(a=localStorage.getItem("inlineSVGdata")))return s(),!0;try{i=new XMLHttpRequest,i.open("GET",n,!0),i.onload=function(){i.status>=200&&i.status<400&&(a=i.responseText,s(),r&&(localStorage.setItem("inlineSVGdata",a),localStorage.setItem("inlineSVGrev",o)))},i.send()}catch(d){}}(window,document);