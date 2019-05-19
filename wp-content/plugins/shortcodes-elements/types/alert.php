<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Alert Type","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="alert_style" name="alert_style">
				<option value="weblizar_alert_success" selected="selected"><?php _e("Success","selements"); ?></option>
				<option value="weblizar_alert_error"><?php _e("Error","selements"); ?></option>
				<option value="weblizar_alert_warning"><?php _e("Warning","selements"); ?></option>
				<option value="weblizar_alert_info"><?php _e("Info","selements"); ?></option>
				</select>
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
        <textarea class="input-xlarge" rows="8"  id="alert_text" value="This text area show all text....." name="alert_text" type="text"><?php _e("This text area show all text.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="alert_class" value="" name="alert_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_alert" style="display: block;">
    	</div>
		</div>
  </form>
</div>
