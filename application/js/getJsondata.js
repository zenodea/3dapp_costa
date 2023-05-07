$(document).ready(function()
{
	// Get information from controller to insert into the SPA
	$.getJSON('index.php/apiGetJsonMuseumData', function(jsonObj){
        // Main Page

        // Iced Drinks 
		$('#iced_latte_main_title').html(jsonObj[0].title);
		$('#what_new_iced').html(jsonObj[0].title);
		$('#iced_latte_main_description').html(jsonObj[0].general_drink_description);
		$('#iced_latte_mini_description').html(jsonObj[0].general_drink_description);

        // Hot Drinks
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

		// Footer body
		html_about_us = ""
		html_nutrients = ""
		html_giftings = ""
		html_contact_us = ""
		// For loop to get all elements in JSON
		for (i=0; i<=4; i++)  
		{
			html_about_us += '<a href="'+jsonObj[3].costa_url.split(",")[i]+'">' + jsonObj[3].items.split(",")[i] + '</a><br>';
		}
		for (i=0; i<=3; i++)  
		{
			html_nutrients += '<a href="'+jsonObj[3].costa_url.split(",")[i]+'">' + jsonObj[4].items.split(",")[i] + '</a><br>';
		}
		for (i=0; i<=1; i++)  
		{
			html_giftings += '<a href="'+jsonObj[3].costa_url.split(",")[i]+'">' + jsonObj[5].items.split(",")[i] + '</a><br>';
		}
		for (i=0; i<=2; i++)  
		{
			html_contact_us += '<a href="'+jsonObj[3].costa_url.split(",")[i]+'">' + jsonObj[6].items.split(",")[i] + '</a><br>';
		}
		$('#about_us_body').html(html_about_us);
		$('#nutrients_body').html(html_nutrients);
		$('#giftings_body').html(html_giftings);
		$('#contact_us_body').html(html_contact_us);


		// Modals
		$('#modal_title_about').html(jsonObj[16].title);
		$('#modal_body_about').html(jsonObj[16].Modal_description);

		$('#modal_title_github').html(jsonObj[17].title);
		$('#modal_body_github').html(jsonObj[17].Modal_description);

		// Accordion
		$('#accordion_button_1').html(jsonObj[18].title);
		$('#accordion_explanation_1').html(jsonObj[18].explanation);

		$('#accordion_button_2').html(jsonObj[19].title);
		$('#accordion_explanation_2').html(jsonObj[19].explanation);

		$('#accordion_button_3').html(jsonObj[20].title);
		$('#accordion_explanation_3').html(jsonObj[20].explanation);

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
			html+='<img src="'+jsonObj[20+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[20+i].title+'</h5><button style="background-color:white;" onclick="swap(\'iced_latte\'); swapDBINfo('+(20-20+i)+');"  type="button" class="btn btn-default" data-dismiss="modal">Go To Model</button>'
        	html+='<p>'+jsonObj[20+i].explanation+'</p></div></div>'
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
			html+='<img src="'+jsonObj[23+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[23+i].title+'</h5><button style="background-color:white;" onclick="swap(\'hot_latte\'); swapDBINfo('+(23-20+i)+');" type="button" class="btn btn-default" data-dismiss="modal">Go To Model</button>'
        	html+='<p>'+jsonObj[23+i].explanation+'</p></div></div>'
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
			html+='<img src="'+jsonObj[26+i].photo_url+'" class="d-block w-100" alt="...">'
			html+='<div class="carousel-caption d-none d-md-block">'
        	html+='<h5>'+jsonObj[26+i].title+'</h5><button style="background-color:white;" onclick="swap(\'canned_latte\'); swapDBINfo('+(26-20+i)+');" type="button" class="btn btn-default" data-dismiss="modal">Go To Model</button>'
        	html+='<p>'+jsonObj[26+i].explanation+'</p></div></div>'
		}
		$('#carousel_third').html(html);

		// Offcanvas

		// Iced Drinks
		$('#offcanvasIcedLabel').html(jsonObj[30].title);
		$('#offcanvasIcedDescription').html(jsonObj[30].explanation);

		// Hot Drinks
		$('#offcanvasHotLabel').html(jsonObj[31].title);
		$('#offcanvasHotDescription').html(jsonObj[31].explanation);

		// Canned Drinks
		$('#offcanvasCannedLabel').html(jsonObj[32].title);
		$('#offcanvasCannedDescription').html(jsonObj[32].explanation);

	
    });
});