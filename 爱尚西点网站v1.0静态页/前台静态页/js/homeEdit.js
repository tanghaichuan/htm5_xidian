$(function(){
	$(".dropdown").mouseover(function(){
		$("ul",this).css("display","block");
	});
	$(".dropdown").mouseleave(function(){
		$("ul",this).css("display","none");
	});
});