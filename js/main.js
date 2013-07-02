$(function(){
	$("#mv a").hover(function(){
		var path = $(this).attr("data-hover");
		console.log(path);		
	});
});
