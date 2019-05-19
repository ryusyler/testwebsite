<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Label Type","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="label_style" name="label_style">
				<option value="weblizar_alert_success" selected="selected"><?php _e("Success","selements"); ?></option>
				<option value="weblizar_alert_error"><?php _e("Error","selements"); ?></option>
				<option value="weblizar_alert_warning"><?php _e("Warning","selements"); ?></option>
				<option value="weblizar_alert_info"><?php _e("Info","selements"); ?></option>
				</select>
			</div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea class="input-xlarge" rows="8" id="label_text" value="" name="label_text" type="text"><?php _e("Label Content.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="label_class" value="" name="label_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_label" style="display: block;">
    	</div>
		</div>
  </form>
</div>
