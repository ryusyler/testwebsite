<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Page ID","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Enter your Page ID Eg: 1212","selements"); ?>" type="text" id="permalink_id" value="" name="permalink_id"/>
				
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Target","selements"); ?></label>
			</div>
			<div class="col-75">
				<select name="link_target" id="link_target">
					<option value="self"><?php _e("Self","selements"); ?></option>
					<option value="blank"><?php _e("Blank","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label for="title"><?php _e("Hover Title","selements"); ?></label>
		  </div>
		  <div class="col-75">
			<input class="input-medium" placeholder="<?php _e("Permalink hover title","selements"); ?>" type="text" id="per_hover_text" value="" name="per_hover_text">
		  </div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="css"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="permalink_class" value="" name="permalink_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_permalink" style="display: block;">
    	</div>
		</div>
  </form>
</div>
