$(document).ready(function()
{
    $.getJSON("application/model/data.json", function(jsonObj)
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

		// Iced Drinks
		html=$('#iced_latte_page_title').html(jsonObj.pageTextData[8].title);
		html=$('#iced_latte_page_slogan').html(jsonObj.pageTextData[8].slogan);
		html=$('#iced_latte_title').html(jsonObj.pageTextData[8].name);
		html=$('#drink_description_iced_latte').html(jsonObj.pageTextData[8].description);

		html=$('#cold_brew_page_title').html(jsonObj.pageTextData[9].title);
		html=$('#cold_brew_page_slogan').html(jsonObj.pageTextData[9].slogan);
		html=$('#cold_brew_title').html(jsonObj.pageTextData[9].name);
		html=$('#drink_description_cold_brew').html(jsonObj.pageTextData[9].description);

		html=$('#chai_iced_page_title').html(jsonObj.pageTextData[10].title);
		html=$('#chai_iced_page_slogan').html(jsonObj.pageTextData[10].slogan);
		html=$('#chai_iced_title').html(jsonObj.pageTextData[10].name);
		html=$('#drink_description_chai_iced').html(jsonObj.pageTextData[10].description);
		
		// Hot Drinks
		html=$('#hot_latte_page_title').html(jsonObj.pageTextData[11].title);
		html=$('#hot_latte_page_slogan').html(jsonObj.pageTextData[11].slogan);
		html=$('#hot_latte_title').html(jsonObj.pageTextData[11].name);
		html=$('#drink_description_hot').html(jsonObj.pageTextData[11].description);

		// Canned Drinks
		html=$('#canned_latte_page_title').html(jsonObj.pageTextData[12].title);
		html=$('#canned_latte_page_slogan').html(jsonObj.pageTextData[12].slogan);
		html=$('#canned_latte_title').html(jsonObj.pageTextData[12].name);
		html=$('#drink_description_canned_latte').html(jsonObj.pageTextData[12].description);

		html=$('#canned_caramel_page_title').html(jsonObj.pageTextData[13].title);
		html=$('#canned_caramel_page_slogan').html(jsonObj.pageTextData[13].slogan);
		html=$('#canned_caramel_title').html(jsonObj.pageTextData[13].name);
		html=$('#drink_description_canned_caramel').html(jsonObj.pageTextData[13].description);

		html=$('#canned_americano_page_title').html(jsonObj.pageTextData[14].title);
		html=$('#canned_americano_page_slogan').html(jsonObj.pageTextData[14].slogan);
		html=$('#canned_americano_title').html(jsonObj.pageTextData[14].name);
		html=$('#drink_description_canned_americano').html(jsonObj.pageTextData[14].description);

		// Modals
		html=$('#modal_title_about').html(jsonObj.pageTextData[15].title);
		html=$('#modal_body_about').html(jsonObj.pageTextData[15].description);

		html=$('#modal_title_github').html(jsonObj.pageTextData[16].title);
		html=$('#modal_body_github').html(jsonObj.pageTextData[16].description);

    });
});