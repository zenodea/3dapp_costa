$(document).ready(function(){
    $.getJSON('../model/data.json', function(jsonObj){
        console.log(jsonObj);
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
        // Continue Later
    });
});