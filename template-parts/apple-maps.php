<div class="card-body pt-0">
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
    <div class="container">
        <div id="city-regions">
            <div id="sanfrancisco">
                <p>San Francisco</p>
            </div>
            <div id="toronto">
                <p>Toronto</p>
            </div>
        </div>
        <div id="map"></div>
    </div>
    <script>
        var SELECTED_CITY_CLASS = "selected-city";

        // Define camera boundaries and zoom ranges for San Francisco and Toronto.
        var CITIES = {
            sanfrancisco: {
                region: new mapkit.CoordinateRegion(
                    new mapkit.Coordinate(37.7812, -122.44755),
                    new mapkit.CoordinateSpan(0.10, 0.11)
                ),
                zoomRange: new mapkit.CameraZoomRange(250, 15000)
            },

            toronto: {
                region: new mapkit.CoordinateRegion(
                    new mapkit.Coordinate(43.6451, -79.37505),
                    new mapkit.CoordinateSpan(0.05, 0.11)
                ),
                zoomRange: new mapkit.CameraZoomRange(250, 20000)
            }
        }

        // Initialize mapkit.
        mapkit.init({
            authorizationCallback: function(done) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "/services/jwt");
                xhr.addEventListener("load", function() {
                    done(this.responseText);
                });
                xhr.send();
            }
        });
    </script>
<!--    <script>-->
<!---->
<!--        var LINE_WIDTH_DEFAULT = 0.5;-->
<!--        var LINE_WIDTH_SELECTED = 3;-->
<!--        var MAP_COLORS = [-->
<!--            {-->
<!--                color: "#fcc5c0",-->
<!--                range: "< 1M",-->
<!--                num: 1000000-->
<!--            },-->
<!--            {-->
<!--                color: "#fa9fb5",-->
<!--                range: "1M +",-->
<!--                num: 5000000-->
<!--            },-->
<!--            {-->
<!--                color: "#f768a1",-->
<!--                range: "5M +",-->
<!--                num: 10000000-->
<!--            },-->
<!--            {-->
<!--                color: "#dd3497",-->
<!--                range: "10M +",-->
<!--                num: 20000000-->
<!--            },-->
<!--            {-->
<!--                color: "#ae017e",-->
<!--                range: "20M +",-->
<!--                num: 30000000-->
<!--            },-->
<!--            {-->
<!--                color: "#7a0177",-->
<!--                range: "> 30M",-->
<!--                num: Infinity-->
<!--            }-->
<!--        ];-->
<!---->
<!--        // Initialize mapkit and create a new map.-->
<!--        mapkit.init({-->
<!--            authorizationCallback: function(done) {-->
<!--                var xhr = new XMLHttpRequest();-->
<!--                xhr.open("GET", "https://callisto.freemomhugs.org/maps/jwt?site=https://freemomhugs.org");-->
<!--                xhr.addEventListener("load", function() {-->
<!--                    done(this.responseText);-->
<!--                });-->
<!--                xhr.send();-->
<!--            }-->
<!--        });-->
<!--        var map = new mapkit.Map("map", {-->
<!--            isRotationEnabled: false,-->
<!--            isZoomEnabled: true,-->
<!--            showsZoomControl: true-->
<!--        });-->
<!---->
<!--        // Setup the UI to show a popup when a state is selected.-->
<!--        var infoPopup = document.getElementById("infoPopup");-->
<!--        var infoCountry = infoPopup.querySelector(".info-country");-->
<!--        var infoPopulation = infoPopup.querySelector(".info-population");-->
<!--        var mapLegend = document.querySelector(".map-legend");-->
<!--        var infoLeader = infoPopup.querySelector(".info-leader");-->
<!---->
<!--        function showInfo(data) {-->
<!--            infoCountry.innerText = data.name;-->
<!--            infoLeader.innerText = data.leader;-->
<!--            infoPopulation.innerText = data.population.toLocaleString();-->
<!--            infoPopup.style.display = "block";-->
<!--        }-->
<!---->
<!--        function closeInfo() {-->
<!--            infoPopup.style.display = "none";-->
<!--        }-->
<!---->
<!--        function addLegend() {-->
<!--            var el, textNode;-->
<!--            MAP_COLORS.forEach(function (mColor) {-->
<!--                el = document.createElement("div");-->
<!--                textNode = document.createTextNode(mColor.range);-->
<!--                el.appendChild(textNode);-->
<!--                el.style.background = mColor.color;-->
<!--                mapLegend.appendChild(el);-->
<!--            });-->
<!--        }-->
<!---->
<!--        addLegend();-->
<!---->
<!--        // Import GeoJSON data with the shape of the states and their population.-->
<!--        mapkit.importGeoJSON("https://open.freemomhugs.org/chapters/state.json", {-->
<!---->
<!--            // Some states are represented as MultiPolygons; we transform them into-->
<!--            // a single PolygonOverlay by concatenating the lists of lists of points.-->
<!--            itemForMultiPolygon: function(collection, geoJSON) {-->
<!--                var overlays = collection.getFlattenedItemList();-->
<!--                var points = overlays.reduce(function(points, overlay) {-->
<!--                    return points.concat(overlay.points);-->
<!--                }, []);-->
<!--                return new mapkit.PolygonOverlay(points);-->
<!--            },-->
<!---->
<!--            // After an overlay has been created for a feature (either directly or through-->
<!--            // itemForMultiPolygon above), the properties of the feature are used to add data-->
<!--            // and set the style (especially the fill color) based on population count.-->
<!--            itemForFeature: function(overlay, geoJSON) {-->
<!--                var population = geoJSON.properties.population;-->
<!---->
<!--                // Add data to the overlay to be shown when it is selected.-->
<!--                overlay.data = {-->
<!--                    name: geoJSON.properties.name,-->
<!--                    population: geoJSON.properties.population,-->
<!--                    leader: geoJSON.properties.leader-->
<!--                };-->
<!---->
<!--                // Find the right color for the population and the set the style.-->
<!--                for (var i = 0; i < MAP_COLORS.length; ++i) {-->
<!--                    if (population < MAP_COLORS[i].num) {-->
<!--                        overlay.style = new mapkit.Style({-->
<!--                            fillOpacity: 0.7,-->
<!--                            lineWidth: LINE_WIDTH_DEFAULT,-->
<!--                            fillColor: MAP_COLORS[i].color-->
<!--                        });-->
<!--                        break;-->
<!--                    }-->
<!--                }-->
<!--                return overlay;-->
<!--            },-->
<!---->
<!--            // When all the data has been imported, we can show the results.-->
<!--            geoJSONDidComplete: function(overlays) {-->
<!--                map.addItems(overlays);-->
<!--                map.showItems(overlays.getFlattenedItemList().filter(function(overlay) {-->
<!--                    // Focus the map on the continental states at first.-->
<!--                    var name = overlay.data.name;-->
<!--                    return name !== "Alaska" && name !== "Hawaii";-->
<!--                }), {-->
<!--                    // Leave some padding for the color key.-->
<!--                    padding: new mapkit.Padding(0, 0, 0, 67)-->
<!--                });-->
<!--            }-->
<!--        });-->
<!---->
<!--        // Show info about the selected state.-->
<!--        map.addEventListener("select", function(event) {-->
<!--            if (event.overlay && event.overlay.data) {-->
<!--                event.overlay.style.lineWidth = LINE_WIDTH_SELECTED;-->
<!--                showInfo(event.overlay.data);-->
<!--            }-->
<!--        });-->
<!---->
<!--        // Hide info when a state is deselected.-->
<!--        map.addEventListener("deselect", function(event) {-->
<!--            if (event.overlay) {-->
<!--                event.overlay.style.lineWidth = LINE_WIDTH_DEFAULT;-->
<!--                closeInfo();-->
<!--            }-->
<!--        });-->
<!---->
<!--    </script>-->
    <script>

        var SELECTED_CITY_CLASS = "selected-city";

        // Define camera boundaries and zoom ranges for San Francisco and Toronto.
        var CITIES = {
            sanfrancisco: {
                region: new mapkit.CoordinateRegion(
                    new mapkit.Coordinate(37.7812, -122.44755),
                    new mapkit.CoordinateSpan(0.10, 0.11)
                ),
                zoomRange: new mapkit.CameraZoomRange(250, 15000)
            },

            toronto: {
                region: new mapkit.CoordinateRegion(
                    new mapkit.Coordinate(43.6451, -79.37505),
                    new mapkit.CoordinateSpan(0.05, 0.11)
                ),
                zoomRange: new mapkit.CameraZoomRange(250, 20000)
            }
        }

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
        mapkit.addEventListener("configuration-change", function configurationChanged() {
            mapkit.removeEventListener("configuration-change", configurationChanged);
            setCity("sanfrancisco");
        });

        // Show the selected city on the map and highlight its name.
        function setCity(name) {
            // Highlight the current city.
            var div = document.getElementsByClassName(SELECTED_CITY_CLASS)[0];
            if (div) {
                div.classList.remove(SELECTED_CITY_CLASS);
            }
            document.getElementById(name).classList.add(SELECTED_CITY_CLASS);

            // Show it on the map, with camera boundaries and zoom range for this city.
            var city = CITIES[name];
            map.cameraZoomRange = city.zoomRange;
            map.cameraBoundary = city.region;
            map.region = city.region;
        }

        // Listen to click events to change the city.
        var cityRegionsElement = document.getElementById("city-regions");
        cityRegionsElement.addEventListener("click", function(event) {
            setCity(event.target.id || event.target.parentNode.id);
        });

    </script>
</div>