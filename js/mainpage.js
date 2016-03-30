// set window height
$(".contentContainer").css("min-height", $(window).height());
$("textarea").css("height", $(window).height() - 100);

// immediately update diary
$("textarea").keyup(function() {
	$.post("php/updatediary.php", {diary:$("textarea").val()});
});