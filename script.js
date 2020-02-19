$(document).ready(function(){
$('.carousel').carousel();
});
$("path").click(function(){
	var selectedCity = $(this).attr("name");
	var cityDescription = $(this).attr("data");
	$("path").css('fill','#7c7c7c')
	$(this).css('fill','#ed1b24');
	$("#tooltiptitle").text(selectedCity);
	$("#tooltipp").text(cityDescription);
	$("#citytooltip").show(1000);
});
$(function() {
    $("path").click(function(e) {
       // var o = {
       //     left: e.pageX,
       //     top: e.pageY
       // };
     //  
    });
});
