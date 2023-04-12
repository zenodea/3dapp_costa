// Function used for the only form in the SPA
// If a form is submitted, using ajax, the information is sent to
// the controller and then into the model to insert into the SQlite db
$( "form" ).submit(function( event ) 
{
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

                // Rest Form after succesfully having it sent
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
                type: 'POST',
                dataType:'html',
                url: "index.php/apiGetRequestData",
                success: function(data) 
                {
                    $('tbody').html(data);
                }
            });     
        })

$( "#gallery_button" ).on("click", function(event)
{
        $.ajax(
            {
                type: 'POST',
                dataType:'html',
                url: "index.php/apiGetGallery",
                success: function(data) 
                {
                    $('temporary').html(data);
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
                type: 'POST',
                dataType:'html',
                url: "index.php/apiGetRequestData",
                success: function(data) 
                {
                    $('tbody').html(data);
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
                type: 'POST',
                dataType:'html',
                url: "index.php/apiGetRequestData",
                success: function(data) 
                {
                    alert('Succesfully Updated Comment!');
                    $('tbody').html(data);
                } 
            }
        )}
    });             
}