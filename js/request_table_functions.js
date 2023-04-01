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