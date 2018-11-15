$(document).ready(function(){

$(".slider_header").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  //adaptiveHeight: true,
  vertical: true,
  speed: 2200,
  infinite: false,
  asNavFor: '.slider_content'
});

$(".slider_content").slick({
  	slidesToShow: 1,
  	slidesToScroll: 1,
   dots: false,
   infinite: false,
   speed: 2200,
   //fade: true,
  //adaptiveHeight: true,
  vertical: true
});
	$("#form1 .reg").addClass("active");
   	$("#form1 .log").click(function(){
   	$("#form2 .log").addClass("active");
    $("#form1").removeClass("active_form").addClass("form_lost");
    $("#form2").removeClass("form_hide").addClass("active_form");
});
   $("#form2 .reg").click(function(){
    $("#form2").removeClass("active_form").addClass("form_lost");
    $("#form1").removeClass("form_lost").addClass("active_form");
	});		
});
