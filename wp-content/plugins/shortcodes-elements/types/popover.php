<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Popover Type","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="popover_style" name="popover_style">
				<option value="top" selected="selected"><?php _e("Top","selements"); ?></option>
				<option value="left"><?php _e("Left","selements"); ?></option>
				<option value="bottom"><?php _e("Bottom","selements"); ?></option>
				<option value="right"><?php _e("Right","selements"); ?></option>
				</select>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php _e("Default Color","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="popstyle" name="popstyle">
					<option selected="selected" value="btn-primary"><?php _e("Royal Blue","selements"); ?></option>
					<option value="btn-default"><?php _e("Green","selements"); ?></option>
					<option value="btn-secondary"><?php _e("violet","selements"); ?></option>
					<option value="btn-info"><?php _e("Sky Blue","selements"); ?></option>
					<option value="btn-success"><?php _e("Light Green","selements"); ?></option>
					<option value="btn-danger"><?php _e("Red","selements"); ?></option>
					<option value="btn-indigo"><?php _e("Indigo","selements"); ?></option>
					<option value="btn-cyan"><?php _e("Cyan","selements"); ?></option>
					<option value="btn-pink"><?php _e("Pink","selements"); ?></option>
					<option value="btn-warning"><?php _e("Orange","selements"); ?></option>
					<option value="peach-gradient"><?php _e("Peach(gradient)","selements"); ?></option>
					<option value="purple-gradient"><?php _e("Purple(gradient)","selements"); ?></option>
					<option value="blue-gradient"><?php _e("Blue(gradient)","selements"); ?></option>
					<option value="aqua-gradient"><?php _e("Aqua(gradient)","selements"); ?></option>
				</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Custom Color","selements"); ?></label>
      </div>
      <div class="col-75">
        <input type="text" class="color_picker_shortcode" id="popover_custom_color" />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Button Border","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="pop_border" name="pop_border">
					<option selected="selected" value="btn-rounded"><?php _e("Round","selements"); ?></option>
					<option value=""><?php _e("Square","selements"); ?></option>
				</select>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Popover Text","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Popover text","selements"); ?>" type="text" id="popover_text" value="" name="popover_text">
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Popover hover Text","selements"); ?></label>
      </div>
      <div class="col-75">
      <input class="input-medium" placeholder="<?php _e("Popover hover text","selements"); ?>" type="text" id="popover_over_text" value="" name="popover_over_text">
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Class","selements"); ?>" type="text" id="pop_class" value="" name="pop_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_pop" style="display: block;">
    	</div>
		</div>
  </form>
</div>
