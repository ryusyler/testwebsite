<script type="text/javascript">
	jQuery(document).ready(function() {
	jQuery('#insert_audio').on('click', function() {
	var audio_heading = jQuery('input#audio_heading').val();
	var audio_class = jQuery('input#audio_class').val();
	var audio_content = jQuery('input#audio_content').val();
	window.send_to_editor('<p>[audio ');
	window.send_to_editor(' audio_heading="' + audio_heading + '" ');
	window.send_to_editor(' audio_content="' + audio_content + '" ');
	window.send_to_editor(' audio_class="' + audio_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});

 jQuery(document).ready(function($){
    $('#upload-btn-gallery1').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Audio File',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var audio_content = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#audio_content').val(audio_content);
           var img_tag = $('#audio_content').val(audio_content);
        });
    });
});
</script>
<style type="text/css">
    input#upload-btn-gallery1 {
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
				<label for="lname"><?php _e("Title (Optional)","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Audio title","selements"); ?>" type="text" id="audio_heading" value="" name="audio_heading">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Choose Auto File","selements"); ?></label>
			</div>
			<div class="col-75">
			
				<input type="text" placeholder="<?php _e("Audio URL","selements"); ?>" name="audio_content" id="audio_content" class="regular-text">  select only mp3 format audio
				<input type="button" name="upload-btn" id="upload-btn-gallery1" class="button-secondary button" value="<?php _e("Upload Audio File","selements"); ?>">
			
				
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Class","selements"); ?>" type="text" id="audio_class" value="" name="audio_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_audio" style="display: block;">
    	</div>
		</div>
  </form>
</div>