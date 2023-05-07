// Jquery for fancybox
$(document).ready(function() 
{
    // Initialise tooltip
    $(function () 
    {
        $('[data-bs-toggle="tooltip"]').tooltip()
    })

    $('[data-fancybox="goto"]').fancybox({});
    // Gallery feature (with mouse support)

    $("a[class=group_gallery]").fancybox({
            'transitionIn'	: 'elastic',
            'transitionOut'	: 'elastic',
            'titlePosition' 	: 'over',
        });
});

