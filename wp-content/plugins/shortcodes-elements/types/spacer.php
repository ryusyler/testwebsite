<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Height","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="800" class="fontsizeh" value="20" step="1" list="tickmarks" id="spaceheight" oninput="outputt.value = spaceheight.value">
				<datalist id="tickmarks">
					<option value="0 to 20">0</option>
					<option>20</option>
					<option>40</option>
					<option>60</option>
					<option>80</option>
					<option>100</option>
					<option>200</option>
					<option>300</option>
					<option>400</option>
					<option>500</option>
					<option>600</option>
					<option>700</option>
					<option>800</option>
				</datalist>
				<span>
				<output id="outputt" for="spaceheight">20</output></span>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="spacer_class" value="" name="spacer_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_spacer" style="display: block;">
    	</div>
		</div>
  </form>
</div>
