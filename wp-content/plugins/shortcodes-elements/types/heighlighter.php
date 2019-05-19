<div class="container">
	<form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label><?php _e("Heighlited Content","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Heighlited Content","selements"); ?>" type="text" id="heighliter_text" value="" name="heighliter_text">
			</div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label><?php _e("Text Color","selements"); ?></label>
		  </div>
		  <div class="col-75">
			<input type="text" class="color_picker_shortcode" id="heighliter_text_color" />
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label><?php _e("Text Background Color","selements"); ?></label>
		  </div>
		  <div class="col-75">
			<input type="text" class="color_picker_shortcode" id="heighliter_text_bg_color" />
		  </div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Class","selements"); ?>" type="text" id="light_class" value="" name="light_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_light" style="display: block;">
    	</div>
		</div>
  </form>
</div>