function swap(selected)
{
    document.getElementById("main_page").style.display = "none";
    document.getElementById("goback_button").style.display = "none";
    document.getElementById("our_coffee_content").style.display = "none";
    document.getElementById("our_menu_content").style.display = "none";
    document.getElementById("contact_us_content").style.display = "none";
    document.getElementById("going_beyond_content").style.display = "none";
    document.getElementById("request_list_content").style.display = "none";
    document.getElementById("iced_latte").style.display = "none";
    document.getElementById("sceneSwitch").setAttribute("whichChoice", -1);

    if (selected != "main_page")
    {
        document.getElementById("goback_button").style.display = "block";
    }

    if (selected == "iced_latte")
    {
        document.getElementById("sceneSwitch").setAttribute("whichChoice", 0);
        document.getElementById("iced_latte").style.display = "block";
    }

    else if (selected == "hot_latte")
    {
        document.getElementById("sceneSwitch").setAttribute("whichChoice", 1);
        document.getElementById("iced_latte").style.display = "block";
    }

    else if (selected == "canned_latte")
    {
        document.getElementById("sceneSwitch").setAttribute("whichChoice", 2);
        document.getElementById("iced_latte").style.display = "block";
    }

    else
    {
        document.getElementById(selected).style.display = "block";
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
    var four = Array.prototype.slice.call(document.getElementsByClassName("hot_chocolate_page"),0);
    var four = Array.prototype.slice.call(document.getElementsByClassName("hot_mocha_page"),0);

    var five = Array.prototype.slice.call(document.getElementsByClassName("canned_latte_page"),0);
    var six = Array.prototype.slice.call(document.getElementsByClassName("canned_caramel_page"),0);
    var seven = Array.prototype.slice.call(document.getElementsByClassName("canned_americano_page"),0);

    // Merge all arrays
    var merged = [one,two,three,four,five,six,seven]

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
    else if (['canned_latte_page','canned_caramel_page','canned_americano_page'])
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
        document.getElementById("about_modal").style.display = "none";
        document.getElementById("github_modal").style.display = "block";
    }
    if (selected == "about_modal")
    {
        document.getElementById("about_modal").style.display = "block";
        document.getElementById("github_modal").style.display = "none";
    }
}