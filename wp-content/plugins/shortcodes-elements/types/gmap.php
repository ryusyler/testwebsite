<script type="text/javascript">
jQuery(document).ready(function() {
jQuery('#insert_gmap').on('click', function() {
var g_width = jQuery('input#g_width').val();
var g_height = jQuery('input#g_height').val();
var g_class = jQuery('input#g_class').val();
var map_id_admin = jQuery('input#map_id_admin').val();
var g_style = jQuery('select#g_style').val();
var g_zoom = jQuery('input#g_zoom').val();
var g_image = jQuery('input#g_image').val();
window.send_to_editor('<p>[gmap ');
window.send_to_editor(' g_width="' + g_width + '" ');
window.send_to_editor(' g_height="' + g_height + '" ');
window.send_to_editor(' g_class="' + g_class + '" ');
window.send_to_editor(' map_id="' + map_id_admin + '" ');
window.send_to_editor(' g_style="' + g_style + '" ');
window.send_to_editor(' g_zoom="' + g_zoom + '" ');
window.send_to_editor(' g_image="' + g_image + '" ');
window.send_to_editor(' ]</p>');
tb_remove();
})
});
</script>
<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-755" style="width: 100%;">
     <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
			<input type="hidden" name="map_id_admin" id="map_id_admin" >
		    <div id="map_admin" style="height: 135px; margin-bottom:20px; "></div>
		    <script>
		      function initAutocomplete() {
		        var map = new google.maps.Map(document.getElementById('map_admin'), {
		          center: {lat: -33.8688, lng: 151.2195},
		          zoom: 14,
		          mapTypeId: 'roadmap'
		        });

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
		              url: place.icon,
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
		             var map_id= bounds.union(place.geometry.viewport);
					 $('#map_id_admin').val(place.geometry.location);
		            } else {
		              bounds.extend(place.geometry.location);
		            }
		          });
		          var map_id1= map.fitBounds(bounds);
		        });
		      }
		    </script>
			<?php $api = get_option('google_api'); ?>
		    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api['google_api'] ?>&libraries=places&callback=initAutocomplete"
		    async defer></script>
		</div>
    </div>
    <div class="row">
		<div class="col-25">
			<label for="lname"><?php _e("Zoom Level","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="range" min="0" max="30" class="fontsizeh" value="14" step="1" list="tickmarks" id="g_zoom" oninput="outputtt.value = g_zoom.value">
			<datalist id="tickmarks">
				<option value="0 to 4">0</option>
				<option>4</option>
				<option>8</option>
				<option>10</option>
				<option>15</option>
				<option>18</option>
				<option>20</option>
				<option>25</option>
				<option>30</option>
			</datalist>
			<span>
			<output id="outputtt" for="g_zoom">14</output></span>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php _e("Style","selements"); ?></label>
		</div>
		<div class="col-75">
			<select id="g_style" class="g_style">
		        <option value="default"><?php _e("Default","selements"); ?></option>
		        <option value="silver"><?php _e("Silver","selements"); ?></option>
		        <option value="night"><?php _e("Night mode","selements"); ?></option>
		        <option value="retro" selected="selected"><?php _e("Retro","selements"); ?></option>
		        <option value="hiding"><?php _e("Hide features","selements"); ?></option>
	     	</select>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Marker icon image URl","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php _e("Image url","selements"); ?>" type="text" id="g_image" value="" name="g_image"/>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php _e("Width","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="range" min="0" max="1600" class="fontsizeh" value="600" step="1" list="tickmarks" id="g_width" oninput="outputt.value = g_width.value">
			<datalist id="tickmarks">
				<option value="0 to 200">0</option>
				<option>200</option>
				<option>400</option>
				<option>600</option>
				<option>800</option>
				<option>1000</option>
				<option>1200</option>
				<option>1400</option>
				<option>1600</option>
			</datalist>
			<span>
			<output id="outputt" for="g_width">600</output></span>
		</div>
	</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Height","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="400" step="1" list="tickmarks" id="g_height" oninput="output.value = g_height.value">
				<datalist id="tickmarks">
					<option value="0 to 200">0</option>
					<option>200</option>
					<option>400</option>
					<option>600</option>
					<option>800</option>
					<option>1000</option>
					<option>1200</option>
					<option>1400</option>
					<option>1600</option>
				</datalist>
				<span>
				<output id="output" for="g_height">400</output></span>
      </div>
    </div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="g_class" value="" name="g_class"/>
		</div>
	</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_gmap" style="display: block;">
    	</div>
	</div>
  </form>
</div>
