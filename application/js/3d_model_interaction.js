// Animation for x3d model
var spinning = false;
var model_view = "normal";
function Animate(model)
{
    if (model == "iced_drink")
    {
        var animation = (document.getElementById('model__time_straw').getAttribute('enabled') === 'true');
        document.getElementById('model__time_straw').setAttribute('enabled', !animation);
        document.getElementById('model__time_cube').setAttribute('enabled', !animation);
    }
    else if (model == "hot_drink")
    {
        var animation = (document.getElementById('model__time_cup').getAttribute('enabled') === 'true');
        document.getElementById('model__time_cup').setAttribute('enabled', !animation);
    }
    else if (model == "canned_drink")
    {
        var animation = (document.getElementById('model__time_can').getAttribute('enabled') === 'true');
        document.getElementById('model__time_can').setAttribute('enabled', !animation);
    }
}


// Camera Functions

function cameraFront()
{
    document.getElementById('model__CA_cameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
    document.getElementById('model__CA_cameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
    document.getElementById('model__CA_cameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
    document.getElementById('model__CA_cameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
    document.getElementById('model__CA_cameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
    document.getElementById('model__CA_cameraBottom').setAttribute('bind', 'true');
}

function cameraNormal()
{
    document.getElementById('model__CA_cameraNormal').setAttribute('bind', 'true');
}



// Change Model

function wireFrame()
{
    var e = document.getElementById('wire');
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

function normal()
{
    var e = document.getElementById('wire');
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

function vertex()
{
    var e = document.getElementById('wire');
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

function redraw()
{
    var e = document.getElementById('wire');
    e.element.runtime.triggerRedraw(true);
}

function lightSwitch(id)
{
    var light = document.getElementById(id);
    if(light.getAttribute('on')!='TRUE')
        light.setAttribute('on','TRUE');
    else
        light.setAttribute('on','FALSE');
}

function headlight(id)
{
    var h = document.getElementById(id);
    if(h.getAttribute('headlight')=='true')
    h.setAttribute('headlight', 'false');
    else
        h.setAttribute('headlight', 'true');
}



// Change various flavours for the differnt models
// Iced Drinks and Hot Drinks will change the color of the drink itself
// Canned Drinks will change the texture of the 3d model

function change_flavour(selected)
{
    // Iced Latte
    if(selected == 1)
    {
        document.getElementById('model__MA_Material_003').setAttribute('diffuseColor','0.800 0.376 0.063' );
        document.getElementById('model__MA_Material_003').setAttribute('transparency', '0.0');
    }
    // Cold Brew
    else if (selected == 2)
    {
        document.getElementById('model__MA_Material_003').setAttribute('diffuseColor', '0.092 0.064 0.051');
        document.getElementById('model__MA_Material_003').setAttribute('transparency', '0.5');
    }
    // Iced Chai Tea Latte
    else if (selected == 3)
    {
        document.getElementById('model__MA_Material_003').setAttribute('diffuseColor', '0.98 0.97 0.95');
        document.getElementById('model__MA_Material_003').setAttribute('transparency', '0.0');
    }
    // Latte
    else if (selected == 4)
    {
        document.getElementById('model__MA_Material').setAttribute('diffuseColor','0.800 0.376 0.063' );
    }
    // Hot Chocolate
    else if (selected == 5)
    {
        document.getElementById('model__MA_Material').setAttribute('diffuseColor', '0.092 0.064 0.051');
    }
    // Mocha
    else if (selected == 6)
    {
        document.getElementById('model__MA_Material').setAttribute('diffuseColor', '0.98 0.97 0.95');
    }
    // Canned Latte
    else if (selected == 7)
    {
        document.getElementById('model__MA_Material_002_texture').setAttribute('url','costa_latte.png');
    }
    // Canned Caramel Latte
    else if (selected == 8)
    {
        document.getElementById('model__MA_Material_002_texture').setAttribute('url','costa_caramel_latte.png');
    }
    // Canned Americano
    else if (selected == 9)
    {
        document.getElementById('model__MA_Material_002_texture').setAttribute('url','costa_americano.png');
    }
}

function showInfoPopup(color, info) {
  document.getElementById('material-color').innerText = `${color.toUpperCase()} Material`;
  document.getElementById('material-info').innerText = info;

  let toastEl = document.getElementById('material-toast');
  let toast = new bootstrap.Toast(toastEl);
  toast.show();
}