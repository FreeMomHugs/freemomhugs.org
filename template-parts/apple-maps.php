<section class="p-xs-0 m-xs-0">
    <script src="https://cdn.apple-mapkit.com/mk/5.x.x/mapkit.js"></script>

    <style>
        #city-regions {
            width: 100%;
            height: 40px;
            cursor: default;
            font-family: "-apple-system-font", Futura, "Helvetica Neue", "Helvetica", "Arial", "sans-serif";
        }

        #city-regions div {
            float: left;
            width: 50%;
            height: 100%;
            text-align: center;
            background-color: white;
        }

        #city-regions p {
            margin-top: 9px;
            margin-bottom: 10px;
        }

        #city-regions div.selected-city {
            background-color: #08f;
            color: #f8f9f0;
        }

        #map {
            width: 100%;
            height: 560px;
        }

    </style>
    <div class="container p-0">
            <div id="map"></div>
    </div>
    <script>
        var MarkerAnnotation = mapkit.MarkerAnnotation,
            clickAnnotation;
        var sfo = new mapkit.Coordinate(37.7912, -122.44755),
            work = new mapkit.Coordinate(37.7793, -122.4192);
        var SELECTED_CITY_CLASS = "selected-city";

        // Define camera boundaries and zoom ranges for San Francisco and Toronto.
        // var CITIES = {
        //     sanfrancisco: {
        //         region: new mapkit.CoordinateRegion(
        //             new mapkit.Coordinate(37.7812, -122.44755),
        //             new mapkit.CoordinateSpan(0.10, 0.11)
        //         ),
        //         zoomRange: new mapkit.CameraZoomRange(250, 15000)
        //     },
        //
        //     toronto: {
        //         region: new mapkit.CoordinateRegion(
        //             new mapkit.Coordinate(43.6451, -79.37505),
        //             new mapkit.CoordinateSpan(0.05, 0.11)
        //         ),
        //         zoomRange: new mapkit.CameraZoomRange(250, 20000)
        //     }
        // }


        // Initialize mapkit.
        mapkit.init({
            authorizationCallback: function(done) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "https://callisto.freemomhugs.org/maps/jwt?site=https://freemomhugs.org");
                xhr.addEventListener("load", function() {
                    done(this.responseText);
                });
                xhr.send();
            }
        });

        // Create the map and set the current city to San Francisco when ready.
        var map = new mapkit.Map("map");
        // mapkit.addEventListener("configuration-change", function configurationChanged() {
        //     mapkit.removeEventListener("configuration-change", configurationChanged);
        //     setCity("sanfrancisco");
        // });
        var Cupertino = new mapkit.CoordinateRegion(
            new mapkit.Coordinate(37.3316850890998, -122.030067374026),
            new mapkit.CoordinateSpan(0.167647972, 0.354985255)
        );

        var SanFrancisco =  new mapkit.CoordinateRegion(
            new mapkit.Coordinate(37.7812, -122.44755),
            new mapkit.CoordinateSpan(0.10, 0.11)
        );
        // Setting properties on creation:
        var sfoAnnotation = new MarkerAnnotation(sfo, { color: "#89CFF0", title: "Start", glyphText: "🏳️‍🌈️" });
        // Setting properties after creation:
        var workAnnotation = new MarkerAnnotation(work);
        workAnnotation.color = "#89CFF0";
        workAnnotation.title = "Finish";
        workAnnotation.subtitle = "at San Francisco City Hall";
        workAnnotation.selected = "true";
        workAnnotation.glyphText = "🏳️‍🌈️";

        // Add and show both annotations on the map
        map.showItems([sfoAnnotation, workAnnotation]);
        map.region = SanFrancisco;


    </script>
</section>