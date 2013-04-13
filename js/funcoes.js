$(document).ready(function(){	
    $("#banner").easySlider({
        auto: true,
        continuous: true,
        speed: 1400,
        pause: 4000,
    });
    
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false,
    });
});