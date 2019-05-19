<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Custom Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" class="color_picker_shortcode" id="note_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Title","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="" type="text" id="alert_heading" value="" name="alert_heading">
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
      <textarea class="input-xlarge" rows="8"  id="note_text" value="" name="note_text" type="text"><?php _e("Content.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="note_class" value="" name="note_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_note" style="display: block;">
    	</div>
		</div>
  </form>
</div>
