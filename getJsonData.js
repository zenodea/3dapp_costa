$(document).ready(function()
{
    $.getJSON("model/data.json", function(jsonObj)
    {
        // Main Page

        // Iced Latte
		$('#iced_latte_main_title').html(jsonObj.pageTextData[0].title);
		$('#iced_latte_main_description').html(jsonObj.pageTextData[0].description);
		$('#iced_latte_mini_description').html(jsonObj.pageTextData[0].description);

        // Iced Latte
		$('#latte_main_title').html(jsonObj.pageTextData[1].title);
		$('#latte_main_description').html(jsonObj.pageTextData[1].description);
		$('#latte_mini_description').html(jsonObj.pageTextData[1].description);

        // Iced Latte
		$('#canned_latte_main_title').html(jsonObj.pageTextData[2].title);
		$('#canned_latte_main_description').html(jsonObj.pageTextData[2].description);
		$('#canned_latte_mini_description').html(jsonObj.pageTextData[2].description);
    });
});