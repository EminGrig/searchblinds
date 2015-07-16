$(document).ready(function(){
    $('.pattern img').click(function(){
        //remove border on any images that might be selected
        $('.pattern img').removeClass("img_border")
        // set the img-source as value of image_from_list
        $('#pattern_value').val( $(this).attr("id") );
        //add border to a clicked image
        $(this).addClass("img_border")
    });

})

$(document).ready(function(){
    $('.valance img').click(function(){
        //remove border on any images that might be selected
        $('.valance img').removeClass("img_border")
        // set the img-source as value of image_from_list
        $('#valance_value').val( $(this).attr("id") );
        //add border to a clicked image
        $(this).addClass("img_border")
    });

})
