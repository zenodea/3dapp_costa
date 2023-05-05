function swap(selected)
{
    $("#main_page").hide()
    $("#goback_button").hide()
    $("#our_coffee_content").hide()
    $("#our_menu_content").hide()
    $("#contact_us_content").hide()
    $("#going_beyond_content").hide()
    $("#request_list_content").hide()
    $("#references_content").hide()
    $("#3d_model_content").hide()
    $("#sceneSwitch").attr("whichChoice", -1);

    if (selected != "main_page")
    {
        $("#goback_button").show();
    }

    if (selected == "iced_latte")
    {
        // Hide the unrelated dropdown items (Everything except Iced drinks)
        hideTabs("iced_drinks_dropdown");

        // Get the images for the iced drinks from the SQLite db, carousel table
        swapGallery(1);

        // Switch the 3D model to save up on resources
        $("#sceneSwitch").attr("whichChoice", 0);
        $("#3d_model_content").show();

        // Reset the camera each time you select one of the x3d models
        cameraBack();
        cameraFront();
    }

    else if (selected == "hot_latte")
    {
        // Hide the unrelated dropdown items (Everything except Hot drinks)
        hideTabs("hot_drinks_dropdown");

        // Get the images for the hot drinks from the SQLite db, carousel table
        swapGallery(4);

        // Switch the 3D model to save up on resources
        $("#sceneSwitch").attr("whichChoice", 1);
        $("#3d_model_content").show();

        // Reset the camera each time you select one of the x3d models
        cameraBack();
        cameraFront();
    }

    else if (selected == "canned_latte")
    {

        // Hide the unrelated dropdown items (Everything except Canned drinks)
        hideTabs("canned_drinks_dropdown");

        // Get the images for the canned drinks from the SQLite db, carousel table
        swapGallery(7);

        // Switch the 3D model to save up on resources
        $("#sceneSwitch").attr("whichChoice", 2);
        $("#3d_model_content").show();

        // Reset the camera each time you select one of the x3d models
        cameraBack();
        cameraFront();
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

// Get data from the db about the drink tha† is desired from the Model_3D DB table
// Alongisde the corresponding picture from the carousel DB table
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
                // Update Values with correct selected model values
                var data = JSON.parse(data);
                $('#slogan_title_text').html(data[0].title);
                $('#slogan_text').html(data[0].slogan);
                $('#title_text').html(data[0].title_name);
                $('#drink_description_text').html(data[0].drink_description);

                // Change 3d model to correct flavour
                change_flavour(id)
            },
    });
}

// Swapping Gallery elements when appropriate
// Placed inside fancybox
function swapGallery(id)
{
    $.ajax({
        url: "index.php/apiGetDrinkImages",
        type: 'POST',
        data:  { 
                id: id
                },
        success: function (carousel_data) 
            {
                var carousel_data = JSON.parse(carousel_data);
                html = ""
                if (id < 4)
                {
                    $('#gallery_title').html("Cold Drinks Gallery");
                    for (i = 0; i < 3; i++)
                    {
                        html += "<div class='column center-text'>"
                        html += '<a class="grouped_fancybox" href='+carousel_data[i].photo_url+' data-fancybox data-caption="'+carousel_data[i].explanation+'" data-buttons=\'["fullScreen","share"]\' rel="group_gallery">'
                        html += '<img class="card-img-top img-thumbnail" src='+carousel_data[i].photo_url+'><div class="custom-buttons">'
                        html += '</div></a>'
                        html += '<button class="request_button" onclick="swapDBINfo('+(i+1)+')" data-fancybox-share>View 3D</button></div>'
                    }
                }
                else if (id > 3 && id <7)
                {
                    $('#gallery_title').html("Hot Drinks Gallery");
                    for (i = 3; i < 6; i++)
                    {
                        html += "<div class='column'>"
                        html += '<a class="grouped_fancybox" href='+carousel_data[i].photo_url+' data-fancybox data-caption="'+carousel_data[i].explanation+'" rel="group_gallery">'
                        html += '<img class="card-img-top img-thumbnail" src='+carousel_data[i].photo_url+'><div class="custom-buttons">'
                        html += '</div></a>'
                        html += '<button class="request_button" onclick="swapDBINfo('+(i+1)+')" data-fancybox-share>View 3D</button></div>'
                    }

                }
                else if (id > 6)
                {
                    $('#gallery_title').html("Canned Drinks Gallery");
                    for (i = 6; i < 9; i++)
                    {
                        html += "<div class='column'>"
                        html += '<a class="group_gallery" href='+carousel_data[i].photo_url+' data-fancybox data-caption="'+carousel_data[i].explanation+'" >'
                        html += '<img class="card-img-top img-thumbnail" src='+carousel_data[i].photo_url+'><div class="custom-buttons">'
                        html += '</div></a>'
                        html += '<button class="request_button" onclick="swapDBINfo('+(i+1)+')" data-fancybox-share>View 3D</button></div>'
                    }
                }
                $('#gallery_Row').html(html);

                // Gallery feature (with mouse support)
                $("a[class=group_gallery]").fancybox();
            },
    }); 
}

// Function used to change the content of the modal
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


// https://lukelowrey.com/css-variable-theme-switcher/

function changeTheme() {
    var currentTheme = document.documentElement.getAttribute("data-theme");

    // If data-theme is null, it automatically means it is light
    if(currentTheme==null)
    {
        currentTheme="light"
    }

    if (currentTheme == "light") 
    {
        document.getElementById("moon_icon").className = "fa fa-sun";
        document.getElementById("moon_icon").style = "color: white;"
        targetTheme = "dark";
    }
    else
    {
        document.getElementById("moon_icon").className = "fa fa-moon";
        document.getElementById("moon_icon").style = "color: black;"
        targetTheme = "light";
    }

    document.documentElement.setAttribute('data-theme', targetTheme)
    localStorage.setItem('theme', targetTheme);
};