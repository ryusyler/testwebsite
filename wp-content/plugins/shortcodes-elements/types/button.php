<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.color_picker_button').wpColorPicker();
	});
</script>
<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Default Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="buttonstyle" name="buttonstyle">
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
				<input type="text" class="color_picker_button" id="button_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Button Border","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="border" name="border">
					<option selected="selected" value="btn-rounded"><?php _e("Round","selements"); ?></option>
					<option value="no-border"><?php _e("Square","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Size","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="size" name="size">
					<option selected="selected" value="btn-lg"><?php _e("Large","selements"); ?></option>
					<option value="btn-md"><?php _e("Small","selements"); ?></option>
					<option value="btn-sm"><?php _e("Mini","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Target","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" name="target" id="target" size="1">
					<option value="self" selected="selected"><?php _e("Self","selements"); ?></option>
					<option value="blank"><?php _e("Blank","selements"); ?></option>
				</select>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php _e("Link","selements"); ?></label>
      </div>
      <div class="col-75">
				<input class="input-medium" placeholder="http://facebook.com" type="text" id="button-link" value="" name="button-link">
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Button Text","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="Button Name" type="text" id="button-text" value="<?php _e("Button Here","selements"); ?>" name="button-text">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="button_class" value="" name="button_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_button" style="display: block;">
    	</div>
		</div>
  </form>
</div>
