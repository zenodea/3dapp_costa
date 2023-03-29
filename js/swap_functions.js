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
        $("#sceneSwitch").attr("whichChoice", 0);
        $("#iced_latte").show();
    }

    else if (selected == "hot_latte")
    {
        $("#sceneSwitch").attr("whichChoice", 1);
        $("#iced_latte").show();
    }

    else if (selected == "canned_latte")
    {
        $("#sceneSwitch").attr("whichChoice", 2);
        $("#iced_latte").show();
    }

    else
    {
        $("#"+selected).show();
    }
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function swap_information(selected)
{
    // Make htmlElements into Arrays
    var one = Array.prototype.slice.call(document.getElementsByClassName("iced_latte_page"),0);
    var two = Array.prototype.slice.call(document.getElementsByClassName("cold_brew_page"),0);
    var three = Array.prototype.slice.call(document.getElementsByClassName("chai_iced_page"),0);

    var four = Array.prototype.slice.call(document.getElementsByClassName("hot_latte_page"),0);
    var five = Array.prototype.slice.call(document.getElementsByClassName("hot_chocolate_page"),0);
    var six = Array.prototype.slice.call(document.getElementsByClassName("hot_mocha_page"),0);

    var seven = Array.prototype.slice.call(document.getElementsByClassName("canned_latte_page"),0);
    var eight = Array.prototype.slice.call(document.getElementsByClassName("canned_caramel_page"),0);
    var nine = Array.prototype.slice.call(document.getElementsByClassName("canned_americano_page"),0);

    // Merge all arrays
    var merged = [one,two,three,four,five,six,seven,eight,nine]

    for (var i = 0; i < merged.length ; i++)
    {
        for (var j = 0; j< merged[i].length; j++)
        {
            
            if (merged[i][j].className == selected)
            {
                merged[i][j].style.display="block";
            }
            else
            {
                merged[i][j].style.display="none";
            }
        }
    }
    if (['iced_latte_page','cold_brew_page','chai_iced_page'].includes(selected))
    {
        document.getElementById("iced_drinks_dropdown").style.display = "block";
        document.getElementById("hot_drinks_dropdown").style.display = "none";
        document.getElementById("canned_drinks_dropdown").style.display = "none";
    }
    else if (['hot_latte_page','hot_chocolate_page','hot_mocha_page'].includes(selected))
    {
        document.getElementById("iced_drinks_dropdown").style.display = "none";
        document.getElementById("hot_drinks_dropdown").style.display = "block";
        document.getElementById("canned_drinks_dropdown").style.display = "none";
    }
    else if (['canned_latte_page','canned_caramel_page','canned_americano_page'].includes(selected))
    {
        document.getElementById("iced_drinks_dropdown").style.display = "none";
        document.getElementById("hot_drinks_dropdown").style.display = "none";
        document.getElementById("canned_drinks_dropdown").style.display = "block";
    }
    
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