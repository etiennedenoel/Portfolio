( function ( $ ) {
    "use strict";

    var gmap;


    var generateMap = function(){
            gmap = new google.maps.Map(document.getElementById("gmap"),{
                    zoom:12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    center: new google.maps.LatLng(50.738232,5.667449),
                    mapTypeControl: false,
                    scrollwheel: false,
                    styles: [{
                            stylers: [
                                  { hue: "#d57A1C" },
                                  { saturation: -10 }
                            ]
                  }]
            });

    };

    var addMarker = function(){

        var marker = new google.maps.Marker({
                        map:gmap,
                        position: new google.maps.LatLng(50.738232,5.667449),
                        title: 'Etienne Denoel - Haccourt'

        });
    };

    var close = function(){
        var $overlay = $('#overlay');
        var $envoyer = $('.envoyer');

        $overlay.fadeOut("normal", function(){
            $envoyer.remove();
        });
        $('body').removeClass('overflow');
        $('html').removeClass('overflow');
    }



$(function(){
    generateMap();
    addMarker();
    $('#overlay').on('click', close);

    if($('#overlay').length !== 0){
        $('body').addClass('overflow');
        $('html').addClass('overflow');
    }



});

}( jQuery ) );
