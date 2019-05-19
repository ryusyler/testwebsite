<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Content source","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-xlarge" rows="8" id="lightbox_src" value="" name="lightbox_src" placeholder="Video Source URL" type="text">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea class="input-xlarge" rows="8" id="lightbox_text" value="" name="lightbox_text" placeholder="Source Text to Display" type="text"></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="lightbox_class" value="" name="lightbox_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_lightbox" style="display: block;">
    	</div>
		</div>
  </form>
</div>
