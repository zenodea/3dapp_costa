// Jquery for fancybox
$(document).ready(function() 
{
    $(".mainpage_images").fancybox({
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        helpers : {
    overlay : {
        css : {
            'background' : 'rgba(58, 42, 45, 0.95)'
        }
    }
}
    });

// Gallery feature (with mouse support)
$("a[rel=gallery_fancybox]").fancybox({
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        'titlePosition' 	: 'over',
        'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });
});

// Menu function
// https://www.w3schools.com/howto/howto_js_search_menu.asp
function menu_function() 
{
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) 
    {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
        } else {
        li[i].style.display = "none";
        }
    }
}
