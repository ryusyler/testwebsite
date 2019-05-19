<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php _e("Vimeo Video URL","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-medium" placeholder="<?php _e("video url","selements"); ?>" type="text" id="v_url" value="" name="v_url">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Width","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="600" step="1" list="tickmarks" id="vimeo_width" oninput="outputt.value = vimeo_width.value">
				<datalist id="tickmarks">
					<option value="0 to 200">0</option>
					<option>200</option>
					<option>400</option>
					<option>600</option>
					<option>800</option>
					<option>1000</option>
					<option>1200</option>
					<option>1400</option>
					<option>1600</option>
				</datalist>
				<span>
				<output id="outputt" for="vimeo_width">600</output></span>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Height","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="400" step="1" list="tickmarks" id="vimeo_height" oninput="output.value = vimeo_height.value">
				<datalist id="tickmarks">
					<option value="0 to 200">0</option>
					<option>200</option>
					<option>400</option>
					<option>600</option>
					<option>800</option>
					<option>1000</option>
					<option>1200</option>
					<option>1400</option>
					<option>1600</option>
				</datalist>
				<span>
				<output id="output" for="vimeo_height">400</output></span> <!-- Just to display selected value -->
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Autoplay","selements"); ?></label>
      </div>
      <div class="col-75">
				<label class="switch">
					<input type="checkbox" id="v_autoplay" name="v_autoplay" checked>
					<span class="slider round"></span>
				</label>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="v_class" value="" name="v_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_vimeo" style="display: block;">
    	</div>
		</div>
  </form>
</div>
