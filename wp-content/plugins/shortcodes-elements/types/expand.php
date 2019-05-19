<script type="text/javascript">
	jQuery(document).ready(function() {
	jQuery('#insert_expand').on('click', function() {
	var expand_heading = jQuery('input#expand_heading').val();
	var expend_class = jQuery('input#expend_class').val();
	var less_content = jQuery('textarea#less_content').val();
	var more_content = jQuery('textarea#more_content').val();
	var show_more_title = jQuery('input#show_more_title').val();
	var show_less_title = jQuery('input#show_less_title').val();
	window.send_to_editor('<p>[expand ');
	window.send_to_editor(' expand_heading="' + expand_heading + '" ');
	window.send_to_editor(' less_content="' + less_content + '" ');
	window.send_to_editor(' more_content="' + more_content + '" ');
	window.send_to_editor(' show_more_title="' + show_more_title + '" ');
	window.send_to_editor(' show_less_title="' + show_less_title + '" ');
	window.send_to_editor(' expend_class="' + expend_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
</script>

<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Title (Optional)","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Expand title","selements"); ?>" type="text" id="expand_heading" value="" name="expand_heading">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Show more button title","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Show more button title","selements"); ?>" type="text" id="show_more_title" value="" name="show_more_title">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Show less button title","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Show more button title","selements"); ?>" type="text" id="show_less_title" value="" name="show_less_title">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Enter Show less content","selements"); ?></label>
			</div>
			<div class="col-75">
			
				<textarea class="input-medium" rows="8" name="less_content" id="less_content" value="This text area show all text....." name="less_content" type="text"></textarea>
			
				
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Enter Show more content","selements"); ?></label>
			</div>
			<div class="col-75">
				<textarea class="input-medium" rows="8" name="more_content" id="more_content" value="This text area show all text....." type="text"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Class","selements"); ?>" type="text" id="expend_class" name="expend_class" value="">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="insert_expand" id="insert_expand" style="display: block;">
			</div>
		</div>
  </form>
</div>