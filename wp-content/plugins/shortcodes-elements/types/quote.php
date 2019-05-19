<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Cite","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-medium" placeholder="<?php _e("Quote author name","selements"); ?>" type="text" id="author_nmae" value="" name="alert_heading">
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Content","selements"); ?></label>
			</div>
			<div class="col-75">
				<textarea class="input-xlarge" rows="8"  id="quote_text" value="" name="quote_text" type="text"><?php _e("Label Content.....","selements"); ?></textarea>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Cite UR","selements"); ?>L</label>
      </div>
      <div class="col-75">
        <input class="input-medium" placeholder="<?php _e("Url of the quote author. Leave empty to disable link","selements"); ?>" type="text" id="quote_url" value="" name="quote_url"/>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="quote_class" value="" name="quote_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
        <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_quote" style="display: block;">
    	</div>
		</div>
  </form>
</div>
