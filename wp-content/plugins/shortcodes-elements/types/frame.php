<script type="text/javascript">
jQuery(document).ready(function() {
		jQuery('#insert_frame').on('click', function() {
      var title = jQuery('input#frame_title').val();
      var align = jQuery('select#frame_align').val();
      var css_class = jQuery('input#su-generator-attr-class').val();
      var frame_content = jQuery('input#frame_content').val();
				window.send_to_editor('<p>[frame ');
				window.send_to_editor(' title="' + title + '" ');
				window.send_to_editor(' align="' + align + '" ');
				window.send_to_editor(' css_class="' + css_class + '" ');
				window.send_to_editor(' frame_content="' + frame_content + '" ');
				window.send_to_editor(' ]</p>');
				tb_remove();
		})
});

 jQuery(document).ready(function($){
    $('#upload-btn-frame').click(function(e) {
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
            var frame_content = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#frame_content').val(frame_content);
           var img_tag = $('#frame_content').val(frame_content);
          
        });
    });
});
/*  jQuery('.remove_image_button_frame').click(function() {
    var answer = confirm('Are you sure?');
    if (answer == true) {
        $('#frame_content').val('');
    }
    return false;
});*/
</script>
<style type="text/css">
	input#upload-btn-frame {
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
</style>
<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Title","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-medium" type="text" name="frame_title" value="" id="frame_title" />
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Align","selements"); ?></label>
			</div>
			<div class="col-75">
				<select name="align" id="frame_align" class="frame_align">
					<option value="left"><?php _e("Left","selements"); ?></option>
					<option value="center" selected="selected"><?php _e("Center","selements"); ?></option>
					<option value="right"><?php _e("Right","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
		 <div class="col-25">
			 <label for="country"><?php _e("media","selements"); ?></label>
		 </div>
		<div class="col-75">
        <input type="text" placeholder="<?php _e("Image URL","selements"); ?>" name="frame_content" id="frame_content" class="regular-text">
        <input type="button" name="upload-btn" id="upload-btn-frame" class="button-secondary button" value="<?php _e("Upload Image","selements"); ?>">
       <!--  <button type="submit" class="remove_image_button_frame button" style="color: red;">&times;</button>   -->
      </div>
	 </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="su-generator-attr-class" class="su-generator-attr">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_frame" style="display: block;">
    	</div>
		</div>
  </form>
</div>
