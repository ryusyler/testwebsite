<script type="text/javascript">
	jQuery(document).ready(function() {
			jQuery('#insert_doc').on('click', function() {
        var select_doc = jQuery('select#select_doc').val();
        var doc_value = jQuery('input#image_length_doc').val();
        var documents_class = jQuery('input#documents_class').val();
        var documents_width = jQuery('input#documents_width').val();
        var documents_height = jQuery('input#documents_height').val();

					window.send_to_editor('<p>[shotcode_doc ');
				    window.send_to_editor(' doc_value="' + doc_value + '" ');
					window.send_to_editor(' documents_class="' + documents_class + '" ');
					window.send_to_editor(' documents_width="' + documents_width + '" ');
					window.send_to_editor(' documents_height="' + documents_height + '" ');
					window.send_to_editor(' ]</p>');
					tb_remove();
			})
	});

 jQuery(document).ready(function($){
    $('#upload-btn-doc').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_length_doc = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#image_length_doc').val(image_length_doc);
           var img_tag = $('#image_length_doc').val(image_length_doc);
          
        });
    });
});

</script>
<style type="text/css">
  input#upload-btn-doc {
    display: inline-block;
    text-decoration: none;
    font-size: 13px;
    line-height: 26px;
    height: 28px;
    width: 27%;
    margin-right: 2px!important;
    margin: 0;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    border-radius: 3px;
    white-space: nowrap;
    box-sizing: border-box;
}
.myplugin-image-previeww {
    display: inline-block;
    margin-left: 5px;
}
</style>
<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Media Manager","selements"); ?></label>
      </div>
      <div class="col-75">
        <div id="myplugin-placeholder_doc"></div>
      </div>
      <div class="col-75" style="float: right;">
        <input type="text" name="image_length" id="image_length_doc" class="regular-text image_url">
        <input type="button" name="upload-btn" id="upload-btn-doc" class="button-secondary button" value="<?php _e("Upload Document","selements"); ?>">
      </div>
 	</div>
	<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Width","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="600" step="1" list="tickmarks" id="documents_width" oninput="outputt.value = documents_width.value">
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
				<output id="outputt" for="documents_width">600</output></span>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Height","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="400" step="1" list="tickmarks" id="documents_height" oninput="output.value = documents_height.value">
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
				<output id="output" for="documents_height">400</output></span>
			</div>
		</div>
 	<div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="documents_class" value="" name="documents_class"/>
		</div>
	</div>
    <div class="row">
			<div class="col-25">
        <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_doc" style="display: block;">
    	</div>
	</div>
  </form>
</div>
