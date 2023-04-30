function swap(selected)
{
    $("#main_page").hide()
    $("#goback_button").hide()
    $("#our_coffee_content").hide()
    $("#our_menu_content").hide()
    $("#contact_us_content").hide()
    $("#going_beyond_content").hide()
    $("#request_list_content").hide()
    $("#iced_latte").hide()
    $("#sceneSwitch").attr("whichChoice", -1);

    if (selected != "main_page")
    {
        $("#goback_button").show();
    }

    if (selected == "iced_latte")
    {
        hideTabs("iced_drinks_dropdown");
        swapDBINfo(1);

        // Switch Scene
        $("#sceneSwitch").attr("whichChoice", 0);
        $("#iced_latte").show();
    }

    else if (selected == "hot_latte")
    {
        hideTabs("hot_drinks_dropdown");
        swapDBINfo(4);

        // Switch Scene
        $("#sceneSwitch").attr("whichChoice", 1);
        $("#iced_latte").show();
    }

    else if (selected == "canned_latte")
    {
        hideTabs("canned_drinks_dropdown");
        swapDBINfo(7);

        $("#sceneSwitch").attr("whichChoice", 2);
        $("#iced_latte").show();
    }

    else
    {
        $("#"+selected).show();
    }
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Hide and show desired dropdown items
function hideTabs(name)
{
    $("#iced_drinks_dropdown").hide();
    $("#hot_drinks_dropdown").hide();
    $("#canned_drinks_dropdown").hide();

    $("#"+name).show();

}
// Get data from the db about the drink tha† is desired
function swapDBINfo(id)
{
    $.ajax({
        url: "index.php/apiGetDrinkInformation",
        type: 'POST',
        data:  { 
                id: id
                },
        success: function (data) 
            {
                var data = JSON.parse(data);
                $('#slogan_title_text').html(data[0].title);
                $('#slogan_text').html(data[0].slogan);
                $('#title_text').html(data[0].title_name);
                $('#drink_description_text').html(data[0].drink_description);
                $.ajax({
                    url: "index.php/apiGetSinglePicture",
                    type: 'POST',
                    data:  { 
                            id: id
                            },
                    success: function (carousel_data) 
                        {
                            var carousel_data = JSON.parse(carousel_data);
                            html = ""
				            html+='<div class="carousel-item active">'
                            html+='<img src="'+carousel_data[0].photo_url+'" class="d-block w-100" alt="...">'
                            html+='<div class="carousel-caption d-none d-md-block">'
                            html+='<h5>'+carousel_data[0].title+'</h5>'
                            html+='<p>'+carousel_data[0].explanation+'</p></div></div>'
                            $('#carousel_3d').html(html);
                        },
                });
            },
    });
}
function change_modal(selected)
{
    if (selected == "github_modal")
    {
        $("#about_modal").hide()
        $("#github_modal").show()
    }
    if (selected == "about_modal")
    {
        $("#about_modal").show()
        $("#github_modal").hide()
    }
}