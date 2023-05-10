// Animation for x3d model
function Animate(model)
{
    if (model == "iced_drink")
    {
        // Check if animation is alreday on or not
        var animation = $('#model__time_straw').attr('enabled') === 'true';

        // Set the animation node to the opposite of var animation
        $('#model__time_straw').attr('enabled', !animation);
        $('#model__time_cube').attr('enabled', !animation);
    }
    else if (model == "straw")
    {
        // Check if animation is alreday on or not
        var animation = $('#model__time_straw').attr('enabled') === 'true';

        // Set the animation node to the opposite of var animation
        $('#model__time_straw').attr('enabled', !animation);
    }
    else if (model == "ice")
    {
        // Check if animation is alreday on or not
        var animation = $('#model__time_cube').attr('enabled') === 'true';

        // Set the animation node to the opposite of var animation
        $('#model__time_cube').attr('enabled', !animation);
    }
    else if (model == "hot_drink")
    {
        // Check if animation is alreday on or not
        var animation = $('#model__time_cup').attr('enabled') === 'true';

        // Set the animation node to the opposite of var animation
        $('#model__time_cup').attr('enabled', !animation);
    }
    else if (model == "canned_drink")
    {
        // Check if animation is alreday on or not
        var animation = $('#model__time_can').attr('enabled') === 'true';

        // Set the animation node to the opposite of var animation
        $('#model__time_can').attr('enabled', !animation);
    }
}


// Camera Functions
function cameraFront()
{
    $('#model__CA_cameraFront').attr('bind', 'true');
}

function cameraBack()
{
    $('#model__CA_cameraBack').attr('bind', 'true');
}

function cameraLeft()
{
    $('#model__CA_cameraLeft').attr('bind', 'true');
}

function cameraRight()
{
    $('#model__CA_cameraRight').attr('bind', 'true');
}

function cameraTop()
{
    $('#model__CA_cameraTop').attr('bind', 'true');
}

function cameraBottom()
{
    $('#model__CA_cameraBottom').attr('bind', 'true');
}

function cameraNormal()
{
    $('#model__CA_cameraNormal').attr('bind', 'true');
}



// Rendering functions for the X3D Models

// Current view of the model, used to track how to go from one state to another
var model_view = "normal";

// Wireframe mode
function wireFrame()
{
    var e = document.getElementById('render');
    if (model_view == "normal")
    {
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
    }
    else if (model_view == "wire")
    {

    }
    else if (model_view == "vertex")
    {
        e.runtime.togglePoints(true);
    }
    model_view = "wire"
}

// Vertex Mode
function vertex()
{
    var e = document.getElementById('render');
    if (model_view == "normal")
    {
        e.runtime.togglePoints(true);
    }
    else if (model_view == "vertex")
    {

    }
    else if (model_view == "wire")
    {
        e.runtime.togglePoints(false);
    }
    model_view = "vertex"
}

// Normal mode
function normal()
{
    var e = document.getElementById('render');
    if (model_view == "wire")
    {
        e.runtime.togglePoints(false);
        e.runtime.togglePoints(false);
    }
    else if (model_view=="normal")
    {

    }
    else if (model_view=="vertex")
    {
        e.runtime.togglePoints(false);
    }
    model_view = "normal"
}

function lightSwitch(id)
{
    var light = document.getElementById(id);
    if(light.getAttribute('on')!='TRUE')
        light.setAttribute('on','TRUE');
    else
        light.setAttribute('on','FALSE');
}

// Change various flavours for the differnt models
// Iced Drinks and Hot Drinks will change the color of the drink itself
// Canned Drinks will change the texture of the 3d model

function change_flavour(selected)
{
    // Iced Latte
    if(selected == 1)
    {
        $('#model__MA_Material_003').attr('diffuseColor','0.800 0.376 0.063' );
        $('#model__MA_Material_003').attr('transparency', '0.0');
    }
    // Cold Brew
    else if (selected == 2)
    {
        $('#model__MA_Material_003').attr('diffuseColor', '0.092 0.064 0.051');
        $('#model__MA_Material_003').attr('transparency', '0.5');
    }
    // Iced Chai Tea Latte
    else if (selected == 3)
    {
        $('#model__MA_Material_003').attr('diffuseColor', '0.98 0.97 0.95');
        $('#model__MA_Material_003').attr('transparency', '0.0');
    }
    // Latte
    else if (selected == 4)
    {
        $('#model__MA_Material').attr('diffuseColor','0.659 0.439 0.22' );
    }
    // Hot Chocolate
    else if (selected == 5)
    {
        $('#model__MA_Material').attr('diffuseColor', '0.8 0.635 0.471');
    }
    // Mocha
    else if (selected == 6)
    {
        $('#model__MA_Material').attr('diffuseColor', '0.388 0.192 0.0');
    }
    // Canned Latte
    else if (selected == 7)
    {
        $('#model__MA_Material_002_texture').attr('url','costa_latte.png');
    }
    // Canned Caramel Latte
    else if (selected == 8)
    {
        $('#model__MA_Material_002_texture').attr('url','costa_caramel_latte.png');
    }
    // Canned Americano
    else if (selected == 9)
    {
        $('#model__MA_Material_002_texture').attr('url','costa_americano.png');
    }
}

// Function used to show information about the material that has been clicked on
// In the form of a toast with Bootstrap 5
function materialPopup(title, description) 
{
    $('#mat_name').text(title);
    $('#mat_info').text(description);

    // Create new toast
    let toast = new bootstrap.Toast($('#material-toast'));
    // Show new toast
    toast.show();
}