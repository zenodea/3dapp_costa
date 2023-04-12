$(document).ready(function()
{
	$(function () {
		$('[data-bs-toggle="tooltip"]').tooltip()
	  })
	$.ajax(
		{
			dataType:'json',
			url: "index.php/apiGetJsonMuseumData",
            success: function(jsonObj) 
    {
        // Main Page

        // Iced Latte
		$('#iced_latte_main_title').html(jsonObj[0].title);
		$('#what_new_iced').html(jsonObj[0].title);
		$('#iced_latte_main_description').html(jsonObj[0].general_drink_description);
		$('#iced_latte_mini_description').html(jsonObj[0].general_drink_description);

        // Iced Latte
		$('#latte_main_title').html(jsonObj[1].title);
		$('#latte_main_description').html(jsonObj[1].general_drink_description);
		$('#latte_mini_description').html(jsonObj[1].general_drink_description);

        // Iced Latte
		$('#canned_latte_main_title').html(jsonObj[2].title);
		$('#what_new_canned').html(jsonObj[2].title);
		$('#canned_latte_main_description').html(jsonObj[2].general_drink_description);
		$('#canned_latte_mini_description').html(jsonObj[2].general_drink_description);

		// Footer

		// Footer title sections
		html=$('#about_us_title').html(jsonObj[3].title);
		html=$('#nutrients_title').html(jsonObj[4].title);
		html=$('#giftings_title').html(jsonObj[5].title);
		html=$('#contact_us_title').html(jsonObj[6].title);
		html=$('#tac_title').html(jsonObj[7].title);

		// Footer body
		html_about_us = ""
		html_nutrients = ""
		html_giftings = ""
		html_contact_us = ""
		html_tac = ""
		// For loop to get all elements in JSON
		for (i=0; i<=4; i++)  
		{
			html_about_us += '<h6>' + jsonObj[3].items.split(",")[i] + '</h6>';
			html_nutrients += '<h6>' + jsonObj[4].items.split(",")[i] + '</h6>';
			html_giftings += '<h6>' + jsonObj[5].items.split(",")[i] + '</h6>';
			html_contact_us += '<h6>' + jsonObj[6].items.split(",")[i] + '</h6>';
			html_tac += '<h6>' + jsonObj[7].items.split(",")[i] + '</h6>';
		}
		html=$('#about_us_body').html(html_about_us);
		html=$('#nutrients_body').html(html_nutrients);
		html=$('#giftings_body').html(html_giftings);
		html=$('#contact_us_body').html(html_contact_us);
		html=$('#tac_body').html(html_tac);

		// x3d models

		// Iced Drinks
		html=$('#iced_latte_page_title').html(jsonObj[8].title);
		html=$('#iced_latte_page_slogan').html(jsonObj[8].slogan);
		html=$('#iced_latte_title').html(jsonObj[8].title_name);
		html=$('#drink_description_iced_latte').html(jsonObj[8].drink_description);

		html=$('#cold_brew_page_title').html(jsonObj[9].title);
		html=$('#cold_brew_page_slogan').html(jsonObj[9].slogan);
		html=$('#cold_brew_title').html(jsonObj[9].title_name);
		html=$('#drink_description_cold_brew').html(jsonObj[9].drink_description);

		html=$('#chai_iced_page_title').html(jsonObj[10].title);
		html=$('#chai_iced_page_slogan').html(jsonObj[10].slogan);
		html=$('#chai_iced_title').html(jsonObj[10].title_name);
		html=$('#drink_description_chai_iced').html(jsonObj[10].drink_description);
		
		// Hot Drinks
		html=$('#hot_latte_page_title').html(jsonObj[11].title);
		html=$('#hot_latte_page_slogan').html(jsonObj[11].slogan);
		html=$('#hot_latte_title').html(jsonObj[11].title_name);
		html=$('#drink_description_hot_latte').html(jsonObj[11].drink_description);
		
		html=$('#hot_chocolate_page_title').html(jsonObj[12].title);
		html=$('#hot_chocolate_page_slogan').html(jsonObj[12].slogan);
		html=$('#hot_chocolate_title').html(jsonObj[12].title_name);
		html=$('#drink_description_hot_chocolate').html(jsonObj[12].drink_description);

		html=$('#hot_mocha_page_title').html(jsonObj[13].title);
		html=$('#hot_mocha_page_slogan').html(jsonObj[13].slogan);
		html=$('#hot_mocha_title').html(jsonObj[13].title_name);
		html=$('#drink_description_hot_mocha').html(jsonObj[13].drink_description);

		// Canned Drinks
		html=$('#canned_latte_page_title').html(jsonObj[14].title);
		html=$('#canned_latte_page_slogan').html(jsonObj[14].slogan);
		html=$('#canned_latte_title').html(jsonObj[14].title_name);
		html=$('#drink_description_canned_latte').html(jsonObj[14].drink_description);

		html=$('#canned_caramel_page_title').html(jsonObj[15].title);
		html=$('#canned_caramel_page_slogan').html(jsonObj[15].slogan);
		html=$('#canned_caramel_title').html(jsonObj[15].title_name);
		html=$('#drink_description_canned_caramel').html(jsonObj[15].drink_description);

		html=$('#canned_americano_page_title').html(jsonObj[16].title);
		html=$('#canned_americano_page_slogan').html(jsonObj[16].slogan);
		html=$('#canned_americano_title').html(jsonObj[16].title_name);
		html=$('#drink_description_canned_americano').html(jsonObj[16].drink_description);

		// Modals
		html=$('#modal_title_about').html(jsonObj.modal[17].title);
		html=$('#modal_body_about').html(jsonObj.modal[17].Modal_description);

		html=$('#modal_title_github').html(jsonObj.modal[18].title);
		html=$('#modal_body_github').html(jsonObj.modal[18].Modal_description);
	}
    });
});