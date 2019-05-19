<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Style","selements"); ?></label>
			</div>
			<div class="col-75">
				<select id="dropcp_style" name="dropcp_style">
					<option value="weblizar_dropcape_square" selected="selected"><?php _e("Square Colored","selements"); ?></option>
					<option value="weblizar_dropcape_circle"><?php _e("Circle Colored","selements"); ?></option>
					<option value="weblizar_dropcape_simple"><?php _e("Simple","selements"); ?></option>
				</select>
			</div>
		</div>
	<div class="row">
		<div class="col-25">
			<label for="country"><?php _e("Color","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="text" class="color_picker_shortcode" id="drop_custom_color" />
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="country"><?php _e("Background Color","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="text" class="color_picker_shortcode" id="button_custom_bgcolor" />
		</div>
	</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php _e("First Letter","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-medium" placeholder="<?php _e("First Letter of the Word","selements"); ?>" type="text" id="dropcp_first_letter" value="" name="dropcp_first_letter">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea class="input-xlarge"  id="dropcp_text" value="<?php _e("This text area show all text.....","selements"); ?>" name="dropcp_text" type="text"></textarea>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="dropcp_class" value="" name="dropcp_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_drop" style="display: block;">
    	</div>
		</div>
  </form>
</div>
