$(document).ready(function() {
  $(".portfolio").show();
// =======================================================================//
// ------------------------------ SLIDESHOW ---------------------------
// =======================================================================//
// ************************** FIRST SLIDESHOW VIEW ***********************//
$(".slider").hide();
$(".slider:last").show();
$(".slide-show").addClass("thumbnails");
function thumbnails(){
$(".circle").each(function () {
var data = $(this).data("show");
var src = $(data).find("img").attr("src");
$(this).css("background-image", "url(" + src + ")");
});
$(".circle:last").addClass("circle-thumb-animate");
$(".circles").addClass("circles-thumb");
$(".circle").addClass("circle-thumb").removeClass("circle-default");
}
function discs(){
$(".circle:last").removeClass("circle-thumb-animate").addClass("circle-default-animate");
var slider_id = '#'+$(".slider:last").attr("id");
$(".circle").addClass("circle-default").removeClass("circle-thumb").removeClass("circle-default-animate").removeClass("circle-thumb-animate");
$(".circle[data-show='"+slider_id+"']").addClass("circle-default-animate").removeClass("circle-thumb-animate");
$(".circles").addClass("circles-default").removeClass("circles-thumb");
}
if ($(".slide-show").hasClass("thumbnails")) {
  thumbnails();
}
else
if ($(".slide-show").hasClass("discs")) {
discs();
}
// ***************** AUTO ANIMATE FUNCTION OR WHEN CLICK NEXT *************//
function nextgallary(){
$(".slider:last").fadeOut(2000).prev().fadeIn(2000).end().prependTo(".slide-show");
if ($(".slide-show").hasClass("thumbnails")) {
  thumbnails();
var slider_id = "#" + $(".slider:last").attr("id");
$(".circle").addClass("circle-thumb").removeClass("circle-thumb-animate");
$(".circle[data-show='" + slider_id + "']").addClass("circle-thumb-animate");
}
else
if ($(".slide-show").hasClass("discs")) {
discs();
}
}
// ************************ FUNCTION RUNNING WHEN CLICK PREV ********************//
function prevgallary(){
$(".slider:last").fadeOut(1000).appendTo(".slide-show");
$(".slider:first").fadeIn(1000).appendTo(".slide-show");
if ($(".slide-show").hasClass("thumbnails")) {
var slider_id = '#'+$(".slider:last").attr("id");
$(".circle").addClass("circle-thumb").removeClass("circle-thumb-animate");
$(".circle[data-show='" + slider_id + "']").addClass("circle-thumb-animate");
}
else
if ($(".slide-show").hasClass("discs")) {
var slider_id = '#' + $(".slider:last").attr("id");
$(".circle").addClass("circle-default").removeClass("circle-default-animate");
$(".circle[data-show='"+slider_id+"']").addClass("circle-default-animate");
}
}
// ******************** CALLING AUTO FUNCTION *****************//
slide = setInterval(nextgallary,4000);
// *********************** WHEN CLICK NEXT *******************//
$("#next").click(function () {
clearInterval(slide);
nextgallary();
$("#run").text("Start");
});
// *********************** WHEN CLICK PREV *******************//
$("#prev").click(function () {
clearInterval(slide);
prevgallary();
$("#run").text("Start");
});
// *********************** WHEN CLICK CIRCLE *******************//
$(".circle").click(function(){
clearInterval(slide);
$(".slider").fadeOut();
var data = $(this).attr("data-show");
$(data).fadeIn(1000).appendTo(".slide-show");
$("#run").text("Start");
if ($(".slide-show").hasClass("thumbnails")) {
$(".circle").addClass("circle-thumb").removeClass("circle-thumb-animate");
$(this).addClass("circle-thumb-animate");
}
else
if ($(".slide-show").hasClass("discs")) {
$(".circle").removeClass("circle-default-animate");
$(this).addClass("circle-default-animate");
}
});
// *********************** RUNNING AND STOP SLIDESHOW *******************//
$("#run").text("Stop");
$("#run").click(function(){
if ($(this).text() == "Stop") {
clearInterval(slide);
$(this).text("Start");
}
else {
slide = setInterval(nextgallary,4000);
$(this).text("Stop");
}
});
// *********************** RUNNING AND STOP SLIDESHOW *******************//
$(".button").each(function() {
  var style = $(this).data("view");
  if ($(".slide-show").hasClass(style)) {
    $(".button[data-view='"+style+"']").css("background","#e74c3c");
    }
$(".button").click(function(){
  $(".button").css("background","#ddd");
  $(this).css("background","#e74c3c");
  var current_style = $(this).data("view");
$(".slide-show").removeClass(style).addClass(current_style);
console.log(style)
});
});

// =======================================================================//
// ------------------------------ ROTATE CARDS ---------------------------
// =======================================================================//


var f_top = $(".number").position().top;
 $(window).scroll(function() {
      if ($(window).scrollTop() + $(window).height() >= f_top ) {
$('.number').countTo();
     }
});


   $('ul.navbar-nav li.dropdown').hover(function () {
       $(this).find('.dropdown-menu').stop(true, true).fadeIn(500).addClass("show");
   }, function () {
       $(this).find('.dropdown-menu').stop(true, true).fadeOut(0).removeClass("show");
   });


       $(window).bind('scroll', function () {
       if($(window).width() > 768){
           var navHeight = $(window).height() - 500;
        if ($(window).scrollTop() > navHeight) {
               $('header').addClass('fixed');
               $('.navbar-brand').css('width', '75px');
               $('.navbar').css('height', 'auto');
               $('.header-right-shadow').css('display', 'none');
               $('.header-left-shadow').css('display', 'none');
           } else {
               $('header').removeClass('fixed');
               $('.navbar-brand').css('width', '100px');
               $('.navbar').css('height', 'auto');
               $('.header-right-shadow').css('display', 'block');
               $('.header-left-shadow').css('display', 'block');
           }
           }
       });

   $('.toggle-search').click(function () {
       $('.search-box').slideToggle();
   });

$(".order-last").addClass("view-vertical-links");
$(".view-speed-links").click(function(){
$(".order-last").toggleClass("view-vertical-links hide-vertical");
});

$("#navbarsExampleDefault3").addClass("hide");
$(".speed-links-btn").click(function(){
$("#navbarsExampleDefault3").toggleClass("view hide");
});

$(".sub-side-menu").addClass("sub-side-menu-hide");
$(".side-menu").click(function(){
$(this).find(".sub-side-menu").slideToggle();
});


/* ======================================================================= */
/* --------------- ADD CLASS ACTIVE TO FIRST SLIDE ----------------------- */
/* ======================================================================= */

$(".carousel-item:first").addClass("active");
    /* ======================================================================= */
    /* --------------- ADD CLASS ACTIVE TO FIRST Filter ----------------------- */
    /* ======================================================================= */


// =======================================================================//
// ---------------------------- Carousel Auto Animate ----------------------
// =======================================================================//
$('.carousel').css('direction', 'ltr');
$('.carousel').carousel({
    interval: 4000
});

});
$('.autoplay').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: true,
    centerMode: false,
    focusOnSelect: false,
    arrows: true,
    adaptiveHeight: false,
    autoplaySpeed: 3000,
    enterPadding: '60px',
    Speed: 2000,
    // fade: true,
    autoplay: true
});
