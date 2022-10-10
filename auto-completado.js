jQuery(document).ready(function ($) {

//recuperar los valores de la API del papel requerido = http://nomina.megamedia.com.mx/api/articulo/?articulo=couche
    jQuery(".papel_requerido input").autocomplete({
        search  : function(){$(this).addClass('working');},
	open    : function(){$(this).removeClass('working');},				
	delay: 500,
	minLength: 3,
        source: function (request, response) {
            var tag = jQuery(".papel_requerido input").val();
            jQuery.getJSON("http://nomina.megamedia.com.mx/api/articulo/?articulo=" + tag, 
            {
                q: request.term,
                page_limit: 10,
            },
            function(data){
                console.log(data);
                var array = data.error ? [] : jQuery.map(data, function(m) {
                    return {
                        Seccion : m.Seccion,
                        Papel : m.Papel,
                        Hojas : m.Hojas,
                        Merma : m.Merma,
                        Total : m.Total,
                        Costo : m.Costo,
                    }
                });
                response(array);
            }   
    );
},
    focus: function( event, ui ) {
    event.preventDefault();     
    },
    select: function( event, ui ) {
    event.preventDefault(); 
    jQuery(".papel_requerido input").val(ui.item.Papel);
    jQuery(".seccion input").val(ui.item.Seccion);
    jQuery(".hojas input").val(ui.item.Hojas);
    jQuery(".merma input").val(ui.item.Merma);
    jQuery(".total input").val(ui.item.Total);
    jQuery(".costo input").val(ui.item.Costo);
    return false;
    }
    }).data("ui-autocomplete")._renderItem = function( ul, item ) {
    return jQuery( "<li>" )
    .append( "<a>" + item.Papel + "</a>" )
    .appendTo( ul );
    };

});