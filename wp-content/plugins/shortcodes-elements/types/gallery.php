<script type="text/javascript">
	jQuery(document).ready(function() {
			jQuery('#insert_gallery').on('click', function() {
        var select_gallery = jQuery('select#select_gallery').val();
        var gallery_class = jQuery('input#gallery_class').val();
        var gallery_type = jQuery('select#gallery_type').val(); 
        var image_length_gallery = jQuery('input#image_length_gallery').val();
        var image_url_gallery = [];
        for (var i = 0; i < image_length_gallery; i++) {
          image_url_gallery[i] = jQuery('input#image_url_gallery-'+ i).val();
        }
					window.send_to_editor('<p>[shotcode_gallery ');
				//	window.send_to_editor(' select_gallery="' + select_gallery + '" ');
					window.send_to_editor(' gallery_class="' + gallery_class + '" ');
					window.send_to_editor(' gallery_type="' + gallery_type + '" ');
          window.send_to_editor(' image_url="' + image_url_gallery + '" ');
          window.send_to_editor(' image_length="' + image_length_gallery + '" ');
					window.send_to_editor(' ]</p>');
					tb_remove();
			})
	});

    jQuery(document).ready(function($){
    $('#upload-btn-gallery').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: true
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').map(
              function( attachment ) {
                    attachment.toJSON();
                    return attachment;
            });
            for (var i = 0; i < uploaded_image.length; i++) {
              console.log(uploaded_image[i].attributes.url);
               $('#myplugin-placeholder_gallery').after(
                    '<div class="myplugin-image-previeww"><img width="100px" height="100" style="display:inline-block;border-radius:50%;border: 1px solid #8f8e8e;padding: 2px;" src="' + 
                    uploaded_image[i].attributes.url + '" ></div>'
                    );
                $('#myplugin-placeholder_gallery').after(
                    '<input id="image_url_gallery-'+ i +'" type="hidden" name="myplugin_attachment_url"  value="' + uploaded_image[i].attributes.url + '">' 
                    );
            }
             $('#image_length_gallery').val(uploaded_image.length);        
        });
    });
});

</script>
<style type="text/css">
  input#upload-btn-gallery {
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
        <label for="lname"><?php _e("Media Images","selements"); ?></label>
      </div>
      <div class="col-75">
        <div id="myplugin-placeholder_gallery"></div>
      </div>
      <div class="col-75" style="float: right;">
        <input type="hidden" name="image_length" id="image_length_gallery" class="regular-text image_url">
        <input type="button" name="upload-btn" id="upload-btn-gallery" class="button-secondary button" value="<?php _e("Upload Image","selements"); ?>">
      </div>
 	</div>
 	<div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Gallery Style","selements"); ?></label>
      </div>
      <div class="col-75">
      <select class="slider_type" name="gallery_type" id="gallery_type">
      	<option value="one"><?php _e("Gallery 1","selements"); ?></option>
      	<option value="two"><?php _e("Gallery 2","selements"); ?></option>
      	<option value="three"><?php _e("Gallery 3","selements"); ?></option>
      </select>
      </div>
 	</div>
 	<div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="gallery_class" value="" name="gallery_class"/>
		</div>
	</div>
    <div class="row">
			<div class="col-25">
        <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_gallery" style="display: block;">
    	</div>
	</div>
  </form>
</div>
