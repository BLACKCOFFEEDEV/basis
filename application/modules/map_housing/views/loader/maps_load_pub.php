<!--<iframe src="https://www.google.com/maps/d/embed?mid=1OdE_5cEvSNz7SpaQa5iBJMmRpD0" width="100%" height="450px"></iframe>-->
<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="map-canvas" style=" box-shadow: 8px 8px 8px #888888;"></div>

<script>
    var map;
    //var src = 'http://localhost:8888/basis-it/assets/maps/file/cikarangbaratr4.kml';

    function initAutocomplete() {

        //Map Options
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {
                lat: -6.181908,
                lng: 106.828249
            },
            zoom: 11,
            disableDefaultUI: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            minZoom: 10,
            scaleControl: true,
            mapTypeControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            }
        });


        /*var ctaLayer = new google.maps.KmlLayer({
            url: 'https://drive.google.com/open?id=12FqFPXaZoqruSg182GmhBU5rS38dTLIh',
            suppressInfoWindows: true,
            map: map
        });*/
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: 'https://png.icons8.com/marker/color/34/000000',
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });

        var layer = new google.maps.FusionTablesLayer({
            query: {
                select: 'Jakarta\'',
                from: "1nglRHF_nexiAjSYOqjvSBD6iNQdMAq6i207HsKpR",
                where: ""
            },
            options: {
                styleId: 2,
                templateId: 2
            }
        });
        layer.setMap(map);
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApHNWWzhT1JLH4rmcYR9SCjl1LO_yoMm0&libraries=places,drawing,geometry&.js&callback=initAutocomplete"></script>
