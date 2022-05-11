$(document).ready(function () {

    var modelID = 0;
    update(modelID);

    $("#CokeZero").click(function () {
        update(modelID = 0);
    });
    $("#Sprite").click(function () {
        update(modelID = 1);
    });
    $("#Appletiser").click(function () {
        update(modelID = 2);
    });

    function update(modelID) {

        //AJAX service request to get the main text data from the json data store
        $.getJSON("../index.php/getJSON", function (jsonObj) {
            console.log(jsonObj);

            $('#brandName').html(jsonObj.museum[modelID].brandName);
            $('#modelDescription').html('<p>' + jsonObj.museum[modelID].modelDescription + '</p>');

            var file = jsonObj.museum[0].modelURL;
            if (file != $('#cokeZero').attr('url'))
                $('#cokeZero').attr('url', file);
            var file2 = jsonObj.museum[1].modelURL;
            if (file2 != $('#sprite').attr('url'))
                $('#sprite').attr('url', file2);
            var file3 = jsonObj.museum[2].modelURL;
            if (file3 != $('#appletiser').attr('url'))
                $('#appletiser').attr('url', file3);
        });
    }

    $.getJSON("../index.php/getJSON1", function (jsonObj) {
        console.log(jsonObj);

        $('#image1').attr('src', jsonObj.picture[0].imageURL);
        $('#image2').attr('src', jsonObj.picture[1].imageURL);
        $('#image3').attr('src', jsonObj.picture[2].imageURL);
        $('#image4').attr('src', jsonObj.picture[3].imageURL);
        $('#image5').attr('src', jsonObj.picture[4].imageURL);
        $('#image6').attr('src', jsonObj.picture[5].imageURL);

        $('#gallery_image').attr('src', jsonObj.picture[0].imageURL1);
        $('#model_image').attr('href', jsonObj.picture[1].imageURL1);
        $('#gallery_image1').attr('src', jsonObj.picture[2].imageURL1);
        $('#model_image1').attr('href', jsonObj.picture[3].imageURL1);
        $('#gallery_image2').attr('src', jsonObj.picture[4].imageURL1);
        $('#model_image2').attr('href', jsonObj.picture[5].imageURL1);

    });

});