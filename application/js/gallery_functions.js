// Jquery for fancybox
$(document).ready(function() 
{

$("#favcolor").change(function()
{
    var color = $(this).val(); // Get the new color value
    // Do something with the new color, e.g. update the background color of an element
    $("body").css("background-color", color);
});

$('[data-fancybox="goto"]').fancybox({});
// Gallery feature (with mouse support)
$("a[class=group_gallery]").fancybox({
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        'titlePosition' 	: 'over',
    });
});

