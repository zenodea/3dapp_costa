// Animation for x3d model
var spinning = false;

function onAnimation()
{
    spinning = true;
    document.getElementById('time').setAttribute('enabled', spinning.toString());
}

function offAnimation()
{
    spinning = false;
    document.getElementById('time').setAttribute('enabled', spinning.toString());
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
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

function normal()
{
    var e = document.getElementById('wire');
    e.runtime.togglePoints(false);
    e.runtime.togglePoints(false);
}

function vertex()
{
    var e = document.getElementById('wire');
    e.runtime.togglePoints(true);
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



// Change various flavours

function change_flavour(selected)
{
    if(selected == "flavour_iced_latte")
    {
        document.getElementById('model__MA_Material_003').setAttribute('diffuseColor','0.800 0.376 0.063' );
        document.getElementById('model__MA_Material_003').setAttribute('transparency', '0.0');
    }
    else if (selected == "flavour_cold_brew")
    {
        document.getElementById('model__MA_Material_003').setAttribute('diffuseColor', '0.092 0.064 0.051');
        document.getElementById('model__MA_Material_003').setAttribute('transparency', '0.5');
    }
    else if (selected == "flavour_chai_tea")
    {
        document.getElementById('model__MA_Material_003').setAttribute('diffuseColor', '0.98 0.97 0.95');
        document.getElementById('model__MA_Material_003').setAttribute('transparency', '0.0');
    }
    else if (selected == "flavour_canned_caramel")
    {
        document.getElementById('model__MA_Material_002_texture').setAttribute('url','costa_caramel_latte.png');
    }
    else if (selected == "flavour_canned_latte")
    {
        document.getElementById('model__MA_Material_002_texture').setAttribute('url','costa_latte.png');
    }
    else if (selected == "flavour_canned_americano")
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