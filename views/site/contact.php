<?php
$this->title = 'Contact';
?>

<div class="contact-wrap">  
    <div id="map-canvas"></div>
    <div id="save-widget">
       <strong>Stamford, Connecticut, USA</strong>
       <p>Ya.. I am living at this city.</p>
     </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var myLatLng = new google.maps.LatLng(41.0982636, -73.5654152);
        var mapOptions = {
            center: myLatLng,
            zoom: 10,
        }

        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
            map: map,
            // Define the place with a location, and a query string.
            place: {
                location: myLatLng,
                query: 'Google, Stamford, Connecticut, USA'
            },
        });

        // Create a new SaveWidgetOptions object for Google Sydney.
        var saveWidgetOptions = {
            place: {
                location: myLatLng
            },
            attribution: {
                source: 'Google Maps JavaScript API',
                webUrl: 'https://developers.google.com/maps/'
            }
        };
        var widgetDiv = document.getElementById('save-widget');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);

        // Append a Save Control to the existing save-widget div.
        saveWidget = new google.maps.SaveWidget(widgetDiv, saveWidgetOptions);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

