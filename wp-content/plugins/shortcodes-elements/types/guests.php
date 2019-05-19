<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea class="input-xlarge" rows="8"  id="guests_text" value="This text area show all text....." name="guests_text" type="text"><?php _e("This text area show all text.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="guests_class" value="" name="guests_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      		<input type="" class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_guests" style="display: block;">
    	</div>
		</div>
  </form>
</div>
