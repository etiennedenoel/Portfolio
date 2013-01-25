( function ( $ ) {

    var generateMap = function(){
            var gmap = new google.maps.Map(document.getElementById("gmap"),{
                    zoom:10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    center: new google.maps.LatLng(0,0),
                    mapTypeControl: true
            });
            var marker = new google.maps.Marker({
                        map:gmap,
                        position: new google.maps.LatLng(coords.latitude, coords.longitude),
                        title: "Je suis ici face de connard embulant de merde"
            });
    };




$(function(){
    generateMap();
});

}( jQuery ) );
