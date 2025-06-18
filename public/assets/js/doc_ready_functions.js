// Jquery for fancybox
$(document).ready(function() 
{
    // Initialise tooltip
    $(function () 
    {
        $('[data-bs-toggle="tooltip"]').tooltip()
    })

    $("a[class=group_gallery]").fancybox({
            'transitionIn'	: 'elastic',
            'transitionOut'	: 'elastic',
            'titlePosition' 	: 'over',
        });
});

