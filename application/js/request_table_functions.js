// 
$("#pointcolor").change(function()
{
    var hexColor = $(this).val(); // Get the new color value in hexadecimal format
    var red = parseInt(hexColor.substring(1, 3), 16) / 255; // Convert the red value to a range of 0 to 1
    var green = parseInt(hexColor.substring(3, 5), 16) / 255; // Convert the green value to a range of 0 to 1
    var blue = parseInt(hexColor.substring(5, 7), 16) / 255; // Convert the blue value to a range of 0 to 1
    var rgbColor = red.toFixed(2) + " " + green.toFixed(2) + " " + blue.toFixed(2) // Concatenate the RGB values into a string
    // Do something with the new color, e.g. update the background color of an element
    $("#point").attr("color", rgbColor)
});

$("#spotcolor").change(function()
{
    var hexColor = $(this).val(); // Get the new color value in hexadecimal format
    var red = parseInt(hexColor.substring(1, 3), 16) / 255; // Convert the red value to a range of 0 to 1
    var green = parseInt(hexColor.substring(3, 5), 16) / 255; // Convert the green value to a range of 0 to 1
    var blue = parseInt(hexColor.substring(5, 7), 16) / 255; // Convert the blue value to a range of 0 to 1
    var rgbColor = red.toFixed(2) + " " + green.toFixed(2) + " " + blue.toFixed(2) // Concatenate the RGB values into a string
    // Do something with the new color, e.g. update the background color of an element
    $("#spot").attr("color", rgbColor)
});

$("#directionalcolor").change(function()
{
    var hexColor = $(this).val(); // Get the new color value in hexadecimal format
    var red = parseInt(hexColor.substring(1, 3), 16) / 255; // Convert the red value to a range of 0 to 1
    var green = parseInt(hexColor.substring(3, 5), 16) / 255; // Convert the green value to a range of 0 to 1
    var blue = parseInt(hexColor.substring(5, 7), 16) / 255; // Convert the blue value to a range of 0 to 1
    var rgbColor = red.toFixed(2) + " " + green.toFixed(2) + " " + blue.toFixed(2) // Concatenate the RGB values into a string
    // Do something with the new color, e.g. update the background color of an element
    $("#directional").attr("color", rgbColor)
});
// Function used for the only form in the SPA
// If a form is submitted, using ajax, the information is sent to
// the controller and then into the model to insert into the SQlite db
$( "form" ).submit(function( event ) 
{
    // Make sure not to reload Page
    event.preventDefault();
    $.ajax({
            url: "index.php/apiAddRequest",
            type: 'POST',
            data: { 
                    email: $("#email").val(),
                    category: $("#category").val(),
                    description: $("#description_request").val(),
                    },
            success: function (data) 
                {
                    alert('Succesfully Sent Request!');

                    // Reset Form after succesfully having it sent
                    $("#request_form")[0].reset();
                },
        });
})

// Function used to get information from the SQlite db and
// inject it into the view
$( "#request_list" ).on("click", function(event)
{
        $.ajax(
            {
                type: 'GET',
                dataType:'json',
                url: "index.php/apiGetRequestData",
                success: function(data) 
                {
                    $('tbody').html(setupRequestList(data));
                }
            });     
})

// Function to remove request, by making an ajax call to the controller
function remove_from_request(id)
{
    $.ajax(
    {
        type: 'POST',
        data: 
        {
            request_id: id
        },
        url: "index.php/apiRemoveRequest",
        success: function(data) 
        {
            $.ajax(
            {
                type: 'GET',
                dataType:'json',
                url: "index.php/apiGetRequestData",
                success: function(data) 
                {
                    alert('Succesfully Removed Request!');
                    $('tbody').html(setupRequestList(data));
                } 
            }
        )}
    });             
}


// Function to update request comment, by making an ajax call to the controller
function add_comment_request(id)
{
    $.ajax(
    {
        type: 'POST',
        data: 
        {
            request_id: id,
            request_comment: document.getElementById("comment_"+id).value
        },
        url: "index.php/apiAddCommentRequest",
        success: function(data) 
        {
            $.ajax(
            {
                type: 'GET',
                dataType:'json',
                url: "index.php/apiGetRequestData",

                success: function(data) 
                {
                    alert('Succesfully Updated Comment!');
                    $('tbody').html(setupRequestList(data));
                }
            }
        )}
    });             
}

/* Function used to organise JSON file obtained from the Model via the Controller*/
function setupRequestList(data)
{
    finalString = ""
    for (var i = 0; i < data.length; i++)
    {
    finalString += '<tr>';
    finalString += '<th scope="row">'+ data[i].Id + '</th>';
    finalString += '<th scope="row">'+ data[i].email + '</th>';
    finalString += '<th scope="row">'+ data[i].category + '</th>';
    finalString += '<th scope="row">'+ data[i].request_description + '</th>';
    finalString += '<td> <textarea  class="form-control" id="comment_'+data[i].Id+'" rows="2" cols="20">'+data[i].comment+'</textarea><button class="request_button" onclick="add_comment_request('+data[i].Id+')">Save</button>'
    finalString += '</td>';
    finalString += '<td>'
    finalString += '<button class="request_button" onclick="remove_from_request('+data[i].Id+')" id="remove_button_'+data[i].Id+'">Remove</button>'
    finalString += '</td>' 
    finalString += '</tr>';
    }
    return finalString;
}