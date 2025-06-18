// When change is detected for color input change the color value for the corresponding x3d element 
$("#pointcolor").change(function()
{
    $("#point").attr("color", hextorgb($(this).val()))
});

// When change is detected for color input change the color value for the corresponding x3d element 
$("#spotcolor").change(function()
{
    $("#spot").attr("color", hextorgb($(this).val()))
});

// When change is detected for color input change the color value for the corresponding x3d element 
$("#directionalcolor").change(function()
{
    $("#directional").attr("color", hextorgb($(this).val()))
});

// Change color of cup for the hot drinks
$("#change_cup_color").change(function()
{
    $("#model__MA_Material_cup_body").attr('diffuseColor', hextorgb($(this).val()))
})

// x3d takes rgb inputs as three vlaues from 0 to 1
// here we convert hex values to rgb values (with values from 0 to 1)
function hextorgb(hexValue)
{
    var red = parseInt(hexValue.substring(1, 3), 16) / 255; 
    var green = parseInt(hexValue.substring(3, 5), 16) / 255; 
    var blue = parseInt(hexValue.substring(5, 7), 16) / 255; 
    var rgbColor = red.toFixed(2) + " " + green.toFixed(2) + " " + blue.toFixed(2);
    return rgbColor;
}