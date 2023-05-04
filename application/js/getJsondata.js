$(document).ready(function()
{
	// Initialise tooltip
	$(function () 
	{
		$('[data-bs-toggle="tooltip"]').tooltip()
    })

	// Get information from controller to insert into the SPA
	$.getJSON('index.php/apiGetJsonMuseumData', function(jsonObj){
        // Main Page

        // Iced Latte
		$('#iced_latte_main_title').html(jsonObj[0].title);
		$('#what_new_iced').html(jsonObj[0].title);
		$('#iced_latte_main_description').html(jsonObj[0].general_drink_description);
		$('#iced_latte_mini_description').html(jsonObj[0].general_drink_description);

        // Iced Latte
		$('#latte_main_title').html(jsonObj[1].title);
		$('#what_new_hot').html(jsonObj[1].title);
		$('#latte_main_description').html(jsonObj[1].general_drink_description);
		$('#latte_mini_description').html(jsonObj[1].general_drink_description);

        // Iced Latte
		$('#canned_latte_main_title').html(jsonObj[2].title);
		$('#what_new_canned').html(jsonObj[2].title);
		$('#canned_latte_main_description').html(jsonObj[2].general_drink_description);
		$('#canned_latte_mini_description').html(jsonObj[2].general_drink_description);

		// Footer

		// Footer title sections
		$('#about_us_title').html(jsonObj[3].title);
		$('#nutrients_title').html(jsonObj[4].title);
		$('#giftings_title').html(jsonObj[5].title);
		$('#contact_us_title').html(jsonObj[6].title);
		$('#tac_title').html(jsonObj[7].title);

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
		$('#about_us_body').html(html_about_us);
		$('#nutrients_body').html(html_nutrients);
		$('#giftings_body').html(html_giftings);
		$('#contact_us_body').html(html_contact_us);
		$('#tac_body').html(html_tac);


		// Modals
		$('#modal_title_about').html(jsonObj[17].title);
		$('#modal_body_about').html(jsonObj[17].Modal_description);

		$('#modal_title_github').html(jsonObj[18].title);
		$('#modal_body_github').html(jsonObj[18].Modal_description);

		// Accordion
		$('#accordion_button_1').html(jsonObj[19].title);
		$('#accordion_explanation_1').html(jsonObj[19].explanation);

		$('#accordion_button_2').html(jsonObj[20].title);
		$('#accordion_explanation_2').html(jsonObj[20].explanation);

		$('#accordion_button_3').html(jsonObj[21].title);
		$('#accordion_explanation_3').html(jsonObj[21].explanation);

		// Gallery using Carousel Bootstrap
		html="";
		for (i=1; i<4; i++)
		{
			if (i==1)
			{
				html+='<div class="carousel-item active">'
			}
			else
			{
				html+='<div class="carousel-item">'
			}
			html+='<img src="'+jsonObj[21+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[21+i].title+'</h5><button style="background-color:white;" onclick="swap(\'iced_latte\'); swapDBINfo('+(21-21+i)+');"  type="button" class="btn btn-default" data-dismiss="modal">Go To Model</button>'
        	html+='<p>'+jsonObj[21+i].explanation+'</p></div></div>'
		}
		$('#carousel_first').html(html);

		html=""
		for (i=1; i<4; i++)
		{
			if (i==1)
			{
				html+='<div class="carousel-item active">'
			}
			else
			{
				html+='<div class="carousel-item">'
			}
			html+='<img src="'+jsonObj[24+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[24+i].title+'</h5><button style="background-color:white;" onclick="swap(\'hot_latte\'); swapDBINfo('+(24-21+i)+');" type="button" class="btn btn-default" data-dismiss="modal">Go To Model</button>'
        	html+='<p>'+jsonObj[24+i].explanation+'</p></div></div>'
		}
		$('#carousel_second').html(html);

		html=""
		for (i=1; i<4; i++)
		{
			if (i==1)
			{
				html+='<div class="carousel-item active">'
			}
			else
			{
				html+='<div class="carousel-item">'
			}
			html+='<img src="'+jsonObj[27+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[27+i].title+'</h5><button style="background-color:white;" onclick="swap(\'canned_latte\'); swapDBINfo('+(27-21+i)+');" type="button" class="btn btn-default" data-dismiss="modal">Go To Model</button>'
        	html+='<p>'+jsonObj[27+i].explanation+'</p></div></div>'
		}
		$('#carousel_third').html(html);

		// Offcanvas

		// Iced Drinks
		$('#offcanvasIcedLabel').html(jsonObj[31].title);
		$('#offcanvasIcedDescription').html(jsonObj[31].explanation);

		// Hot Drinks
		$('#offcanvasHotLabel').html(jsonObj[32].title);
		$('#offcanvasHotDescription').html(jsonObj[32].explanation);

		// Canned Drinks
		$('#offcanvasCannedLabel').html(jsonObj[33].title);
		$('#offcanvasCannedDescription').html(jsonObj[33].explanation);

	
    });
});