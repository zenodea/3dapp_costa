$(document).ready(function()
{
	$(function () {
		$('[data-bs-toggle="tooltip"]').tooltip()
	  })
    $.getJSON("application/model/data.json", function(jsonObj)
    {
        // Main Page

        // Iced Latte
		$('#iced_latte_main_title').html(jsonObj.main_page_text[0].title);
		$('#what_new_iced').html(jsonObj.main_page_text[0].title);
		$('#iced_latte_main_description').html(jsonObj.main_page_text[0].description);
		$('#iced_latte_mini_description').html(jsonObj.main_page_text[0].description);

        // Iced Latte
		$('#latte_main_title').html(jsonObj.main_page_text[1].title);
		$('#latte_main_description').html(jsonObj.main_page_text[1].description);
		$('#latte_mini_description').html(jsonObj.main_page_text[1].description);

        // Iced Latte
		$('#canned_latte_main_title').html(jsonObj.main_page_text[2].title);
		$('#what_new_canned').html(jsonObj.main_page_text[2].title);
		$('#canned_latte_main_description').html(jsonObj.main_page_text[2].description);
		$('#canned_latte_mini_description').html(jsonObj.main_page_text[2].description);

		// Footer

		// Footer title sections
		html=$('#about_us_title').html(jsonObj.footer[0].title);
		html=$('#nutrients_title').html(jsonObj.footer[1].title);
		html=$('#giftings_title').html(jsonObj.footer[2].title);
		html=$('#contact_us_title').html(jsonObj.footer[3].title);
		html=$('#tac_title').html(jsonObj.footer[4].title);

		// Footer body
		html_about_us = ""
		html_nutrients = ""
		html_giftings = ""
		html_contact_us = ""
		html_tac = ""
		// For loop to get all elements in JSON
		for (i=0; i<=4; i++)  
		{
			html_about_us += '<h6>' + jsonObj.footer[0].items[i] + '</h6>';
			html_nutrients += '<h6>' + jsonObj.footer[1].items[i] + '</h6>';
			html_giftings += '<h6>' + jsonObj.footer[2].items[i] + '</h6>';
			html_contact_us += '<h6>' + jsonObj.footer[3].items[i] + '</h6>';
			html_tac += '<h6>' + jsonObj.footer[4].items[i] + '</h6>';
		}
		html=$('#about_us_body').html(html_about_us);
		html=$('#nutrients_body').html(html_nutrients);
		html=$('#giftings_body').html(html_giftings);
		html=$('#contact_us_body').html(html_contact_us);
		html=$('#tac_body').html(html_tac);

		// x3d models

		// Iced Drinks
		html=$('#iced_latte_page_title').html(jsonObj.drinks[0].title);
		html=$('#iced_latte_page_slogan').html(jsonObj.drinks[0].slogan);
		html=$('#iced_latte_title').html(jsonObj.drinks[0].name);
		html=$('#drink_description_iced_latte').html(jsonObj.drinks[0].description);

		html=$('#cold_brew_page_title').html(jsonObj.drinks[1].title);
		html=$('#cold_brew_page_slogan').html(jsonObj.drinks[1].slogan);
		html=$('#cold_brew_title').html(jsonObj.drinks[1].name);
		html=$('#drink_description_cold_brew').html(jsonObj.drinks[1].description);

		html=$('#chai_iced_page_title').html(jsonObj.drinks[2].title);
		html=$('#chai_iced_page_slogan').html(jsonObj.drinks[2].slogan);
		html=$('#chai_iced_title').html(jsonObj.drinks[2].name);
		html=$('#drink_description_chai_iced').html(jsonObj.drinks[2].description);
		
		// Hot Drinks
		html=$('#hot_latte_page_title').html(jsonObj.drinks[3].title);
		html=$('#hot_latte_page_slogan').html(jsonObj.drinks[3].slogan);
		html=$('#hot_latte_title').html(jsonObj.drinks[3].name);
		html=$('#drink_description_hot_latte').html(jsonObj.drinks[3].description);
		
		html=$('#hot_chocolate_page_title').html(jsonObj.drinks[4].title);
		html=$('#hot_chocolate_page_slogan').html(jsonObj.drinks[4].slogan);
		html=$('#hot_chocolate_title').html(jsonObj.drinks[4].name);
		html=$('#drink_description_hot_chocolate').html(jsonObj.drinks[4].description);

		html=$('#hot_mocha_page_title').html(jsonObj.drinks[5].title);
		html=$('#hot_mocha_page_slogan').html(jsonObj.drinks[5].slogan);
		html=$('#hot_mocha_title').html(jsonObj.drinks[5].name);
		html=$('#drink_description_hot_mocha').html(jsonObj.drinks[5].description);

		// Canned Drinks
		html=$('#canned_latte_page_title').html(jsonObj.drinks[6].title);
		html=$('#canned_latte_page_slogan').html(jsonObj.drinks[6].slogan);
		html=$('#canned_latte_title').html(jsonObj.drinks[6].name);
		html=$('#drink_description_canned_latte').html(jsonObj.drinks[6].description);

		html=$('#canned_caramel_page_title').html(jsonObj.drinks[7].title);
		html=$('#canned_caramel_page_slogan').html(jsonObj.drinks[7].slogan);
		html=$('#canned_caramel_title').html(jsonObj.drinks[7].name);
		html=$('#drink_description_canned_caramel').html(jsonObj.drinks[7].description);

		html=$('#canned_americano_page_title').html(jsonObj.drinks[8].title);
		html=$('#canned_americano_page_slogan').html(jsonObj.drinks[8].slogan);
		html=$('#canned_americano_title').html(jsonObj.drinks[8].name);
		html=$('#drink_description_canned_americano').html(jsonObj.drinks[8].description);

		// Modals
		html=$('#modal_title_about').html(jsonObj.modal[0].title);
		html=$('#modal_body_about').html(jsonObj.modal[0].description);

		html=$('#modal_title_github').html(jsonObj.modal[1].title);
		html=$('#modal_body_github').html(jsonObj.modal[1].description);

    });
});