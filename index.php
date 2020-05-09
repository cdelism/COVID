<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDi5Fj_Fz0cnbzJglyJvZM-f6LoXETAHw"></script>

<!DOCTYPE html>
<html>
    <title>Covid 19 data of zanzibar</title>
    <head>
      <?php include("link.php") ?>
        
    </head>
    <body>
	
	
	
	
	
	
            <div style="background-color:lightblue;text-align:center; background-image:url(znz.png); padding:5px; margin-bottom:3px;"> 
			<h3 style="background: ; font-size: 20px">
				
                <center style="color:white;font-size:24px">COVID-19 DATA OF ZANZIBAR</center></h3></div>
                <div class="dropdown">
                    <button class="dropbtn" style="align-content: right">Select Date</button>
						<div class="dropdown-content">
						<a href="april19.html">april.19. 2020</a>
						<a href="april16.html">april.16.2020</a>
						<a href="april20.html">april.20.2020</a>
                    </div>
				</div>
				<div class="dropdown" >
                    <button class="dropbtn" >Map keys</button>
                    <div class="dropdown-content" style="width:100%">
                        <a href="#home"><img src="http://maps.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png" style="height:20px"> Highly affected</a>
						<a href="#news"><img src="http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png" style="height:20px"> Few cases</a>
						<a href="#contact"><img src="http://maps.google.com/mapfiles/kml/pal2/icon7.png" style="height:20px"> Patients </a>
						<a href="#about"><img src="https://maps.google.com/mapfiles/kml/pal2/icon2.png" style="height:20px"> Quarantine</a>
							
                    </div>              
				</div>
                <div class="dropdown">
                    <button class="dropbtn" style="align-content: right" >Graphic view</button>
                        <div class="dropdown-content" >
                            <a href="#" onclick="openNav()">For Zanzibar </a>
                            <a href="#" onclick="openNav2()">For Tanzania </a>          
                        </div>
				</div>

             <hr style="border-width: 5px; margin-top: 1px; margin-bottom: 2px",>
           
      
              <p style=" margin-top: 0px ;margin-left:10px; font-size: 15px"> Click markers on map to see the details</p>
    
       
            <div id="mapCanvas"></div>
			
            <div style="line-height:3.5; background-image:url(znz.png);background-color: lightblue;text-align:center;color:black;height:40px;margin-top:1px;">@copyright SUZAyouthMappers</div>
			
			
	<?php include("zanzibarGR.php") ?>
	<?php include("tanzaniaGR.php") ?>
  
   
</div>



	
    </body>
    </html>

    <script>
            function initMap() {
                var map;
                var bounds = new google.maps.LatLngBounds();
                var mapOptions = {
                    mapTypeId: 'roadmap'
                };
                                
                // Display a map on the web page
                map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
                map.setTilt(50);
                    
                // Multiple markers location, latitude, and longitude
                var markers = [
                    ['Kidimni Zanzbar', -6.127679, 39.304317,'http://maps.google.com/mapfiles/kml/pal2/icon7.png'],
                   ['Migombani', -6.190347,39.210270,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Mwanakwerekwe', -6.178071,39.225285,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png"],
                   ['Mwera',-6.147564532853208,39.259747019116205,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png"],
                   ['Bububu Kijichi', -6.093881,39.225767,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['kwamchina', -6.184321,39.220848,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['JKU SCHOOL', -6.134422, 39.217728,'http://maps.google.com/mapfiles/kml/pal2/icon7.png'],
                   ['Pongwe', -6.048040,39.404783,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Bumbwisudi', -6.057428,39.267311,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Fuoni', -6.182670,39.249831,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png"],
                   ['mtendeni', -6.162692,39.195512,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Kibweni', -6.113639,39.215396,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Magogoni', -6.159270,39.234511,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png"],
                   ['Kwarara', -6.197638,39.240366,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Kilimahewa juu', -6.161227,39.222768,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Amani', -6.165366,39.225000,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['kidoti', -5.799705,39.301357,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Jangombe', -6.17197,39.210018,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Mazizini hostel', -6.196034,39.209561,"https://maps.google.com/mapfiles/kml/pal2/icon2.png"],
                   ['ZANZIBAR', -6.158289,39.334792,],
                   ['Chukwani', -6.233608, 39.211809,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Nyarugusu', -6.176390, 39.247406,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Mfenesini', -6.035920, 39.239168,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Mbweni', -6.205686,39.209984,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Mwakaje',-6.044161, 39.249701,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Michezani',-6.164672, 39.198766,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Mkunazini',-6.163641, 39.191203,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                   ['Mbuzini',-6.081997, 39.240817,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"],
                     ['Pemba',-5.224586, 39.790978,"http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png"]
                  
                ];
                                    
                // Info window content
                var infoWindowContent = [
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">kidimni COVID 19 center</h3>' +
                    '<p>center for corona virus treatment in zanzibar</p>' + '</div>'],
                  
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Migombani</h3>' +
                    '<p><h3>confirmes cases <h2>1</h2>.</p>' +
                    '</div>'],
                    
                   
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Mwanakerekwe</h3>' +
                    '<p><h3>confirmed cases <h2>2</h2>.</p>' +
                    '</div>'],
                  
                 
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Mwera</h3>' +
                    '<p><h3>confirmed cases <h2>2</h2>.</p>' +
                    '</div>'],
                   
                   
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Bububu Kijichi</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],
                   
                  
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">kwamchina</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">JKU school</h3>' +
                    '<p><h3>center for corona virus patient<h2>2</h2></p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Pongwe</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Bumbwisudi</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Fuoni</h3>' +
                    '<p><h3>confirmed cases <h2>2</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Mtendeni</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Kibweni</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Magogoni</h3>' +
                    '<p><h3>confirmed cases <h2>2</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Kwarara</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h1 style="background: pink">Kilimahewa juu</h1>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    
                    ['<div class="info_content">' +
                    '<h1 style="background: pink">Amani</h1>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Kidoti</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Jangombe</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Mazizini hostel</h3>' +
                    '<p><h3>Cuaranteend center <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">ZANZIBAR</h3>' +
                    '<p><h4>Total casesd 83</h4><h4>total recover 4</h4> <h4>active case 76</h4> <h5 style="background: red">total death 3</h5></p>' +
                    '</div>'],
                    ['<div class="info_content">' +
                    '<h1 style="background: pink">chukwani</h1>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Nyarugusu</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Mfenesini</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h3 style="background: pink">Mbweni</h3>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h1 style="background: pink">Mwakaje</h1>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h1 style="background: pink">Michenzani</h1>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h1 style="background: pink">Mkunazini</h1>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                    ['<div class="info_content">' +
                    '<h1 style="background: pink">Mbuzini</h1>' +
                    '<p><h3>confirmed cases <h2>1</h2>.</p>' +
                    '</div>'],

                      ['<div class="info_content">' +
                    '<h1 style="background: pink">Pemba</h1>' +
                    '<p><h3>confirmed cases <h2>7</h2>.</p>' +
                    '</div>']
                ];
                    
                // Add multiple markers to map
                var infoWindow = new google.maps.InfoWindow(), marker, i;
                
                // Place each marker on the map  
                for( i = 0; i < markers.length; i++ ) {
                    var position = new google.maps.LatLng(markers[i][1], markers[i][2], markers[i][3], markers[i][4],
                     markers[i][5], markers[i][6], markers[i][7], markers[i][8], markers[i][9], markers[i][10], markers[i][11],
                      markers[i][12], markers[i][13], markers[i][14], markers[i][15], markers[i][16], markers[i][17], markers[i][18], 
                      markers[i][19],
                      markers[i][20], markers[i][21], markers[i][22], markers[i][23], markers[i][24], markers[i][25],
                       markers[i][26], markers[i][27]);

                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0],
                        icon: markers[i][3]
                    });
                    
                    // Add info window to marker    
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));
            
                    // Center the map to fit all markers on the screen
                    map.fitBounds(bounds);
                }
            
			
                // Set zoom level
                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    this.setZoom(9);
                    google.maps.event.removeListener(boundsListener);
                });
                
            }
            // Load initialize function
            google.maps.event.addDomListener(window, 'load', initMap);
			var legend = document.getElementById('legend');
        for (var key in icons) {
          var type = icons[key];
          var name = type.name;
          var icon = type.icon;
          var div = document.createElement('div');
          div.innerHTML = '<img src="' + icon + '"> ' + name;
          legend.appendChild(div);
        }

        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
            </script>



