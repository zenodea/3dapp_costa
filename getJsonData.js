$(document).ready(function()
{
    $.getJSON("model/data.json", function(jsonObj)
    {
        // Main Page

        // Iced Latte
		$('#iced_latte_main_title').html(jsonObj.pageTextData[0].title);
		$('#what_new_iced').html(jsonObj.pageTextData[0].title);
		$('#iced_latte_main_description').html(jsonObj.pageTextData[0].description);
		$('#iced_latte_mini_description').html(jsonObj.pageTextData[0].description);

        // Iced Latte
		$('#latte_main_title').html(jsonObj.pageTextData[1].title);
		$('#latte_main_description').html(jsonObj.pageTextData[1].description);
		$('#latte_mini_description').html(jsonObj.pageTextData[1].description);

        // Iced Latte
		$('#canned_latte_main_title').html(jsonObj.pageTextData[2].title);
		$('#what_new_canned').html(jsonObj.pageTextData[2].title);
		$('#canned_latte_main_description').html(jsonObj.pageTextData[2].description);
		$('#canned_latte_mini_description').html(jsonObj.pageTextData[2].description);

		// Footer

		// Footer title sections
		html=$('#about_us_title').html(jsonObj.pageTextData[3].title);
		html=$('#nutrients_title').html(jsonObj.pageTextData[4].title);
		html=$('#giftings_title').html(jsonObj.pageTextData[5].title);
		html=$('#contact_us_title').html(jsonObj.pageTextData[6].title);
		html=$('#tac_title').html(jsonObj.pageTextData[7].title);

		// Footer body
		html_about_us = ""
		html_nutrients = ""
		html_giftings = ""
		html_contact_us = ""
		html_tac = ""
		// For loop to get all elements in JSON
		for (i=0; i<=4; i++)  
		{
			html_about_us += '<h6>' + jsonObj.pageTextData[3].items[i] + '</h6>';
			html_nutrients += '<h6>' + jsonObj.pageTextData[4].items[i] + '</h6>';
			html_giftings += '<h6>' + jsonObj.pageTextData[5].items[i] + '</h6>';
			html_contact_us += '<h6>' + jsonObj.pageTextData[6].items[i] + '</h6>';
			html_tac += '<h6>' + jsonObj.pageTextData[7].items[i] + '</h6>';
		}
		html=$('#about_us_body').html(html_about_us);
		html=$('#nutrients_body').html(html_nutrients);
		html=$('#giftings_body').html(html_giftings);
		html=$('#contact_us_body').html(html_contact_us);
		html=$('#tac_body').html(html_tac);

		// x3d models
		html=$('#iced_latte_page_title').html(jsonObj.pageTextData[8].title);
		html=$('#iced_latte_page_slogan').html(jsonObj.pageTextData[8].slogan);
		html=$('#iced_latte_title').html(jsonObj.pageTextData[8].name);
		html=$('#drink_description_iced').html(jsonObj.pageTextData[8].description);
		
		html=$('#hot_latte_page_title').html(jsonObj.pageTextData[9].title);
		html=$('#hot_latte_page_slogan').html(jsonObj.pageTextData[9].slogan);
		html=$('#hot_latte_title').html(jsonObj.pageTextData[9].name);
		html=$('#drink_description_hot').html(jsonObj.pageTextData[9].description);

		html=$('#canned_latte_page_title').html(jsonObj.pageTextData[10].title);
		html=$('#canned_latte_page_slogan').html(jsonObj.pageTextData[10].slogan);
		html=$('#canned_latte_title').html(jsonObj.pageTextData[10].name);
		html=$('#drink_description_canned').html(jsonObj.pageTextData[10].description);
    });
});