$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
        // If JS is disabled, CSS menu will still work
   $(".tv").mouseover(function(){
        $(this).addClass('animated tada');
    });
    $(".tv").mouseout(function(){
        $(this).removeClass("animated tada");
    });
});
