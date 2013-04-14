function banner(url){
    var html = '';
    $.getJSON(url+"site/fotos", function(data){
        html = '<img src="'+url+'fotos/'+data.foto+'" />';
        if(data.titulo !== ''){
            html += '<p class="titulo">:: '+data.titulo+' ::</p>';
        }
        html += '<p class="mais"><a href="'+url+'site/pagina/fotos">Ver mais &raquo;</a></p>';

	$("#fotosh").fadeOut('slow',function(){
	    $(this).fadeIn('slow').html(html);
	});
    });
}

$(document).ready(function(){
    var ur = $("#ur").data("url");
    banner(ur);
    setInterval(function(){ banner(ur)}, 10000);
    
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