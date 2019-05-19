<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Youtube Video-ID","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Youtube-video-ID example:-(6ZfuNTqbHE8)","selements"); ?>" type="text" id="you_url" value="" name="you_url">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Width","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="600" step="1" list="tickmarks" id="youtube_width" oninput="outputt.value = youtube_width.value">
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
				<output id="outputt" for="youtube_width">600</output></span>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Height","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="400" step="1" list="tickmarks" id="youtube_height" oninput="output.value = youtube_height.value">
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
				<output id="output" for="youtube_height">400</output></span>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Responsive","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_responsive" name="y_responsive" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Controls","selements"); ?></label>
			</div>
			<div class="col-75">
				<select name="align" id="y_controls" class="y_controls">
				<option value="0"><?php _e("Hide Controls","selements"); ?></option>
				<option value="1" selected="selected"><?php _e("Show Controls","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("AutoHide","selements"); ?></label>
			</div>
			<div class="col-75">
				<select name="align" id="y_autohide" class="y_autohide">
					<option value="0"><?php _e("Do Not Hide Controls","selements"); ?></option>
					<option value="1" selected="selected"><?php _e("Hide all Controls on mouse out","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Show Title Bar","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_title" name="y_title" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Autoplay","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_autoplay" name="y_autoplay" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php _e("Loop","selements"); ?></label>
      </div>
      <div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_loop" name="y_loop" checked>
					<span class="slider round"></span>
				</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Show Fullscreen Button","selements"); ?></label>
      </div>
      <div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_fullscreen" name="y_fullscreen" checked>
					<span class="slider round"></span>
				</label>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("modestbranding","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_branding" name="y_branding" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Theme","selements"); ?></label>
      </div>
      <div class="col-75">
				<select name="align" id="y_theme" class="y_theme">
					<option value="dark"><?php _e("Dark","selements"); ?></option>
					<option value="light" selected="selected"><?php _e("Light","selements"); ?></option>
				</select>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"<?php _e(">Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="y_class" value="" name="y_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_youtube" style="display: block;">
    	</div>
		</div>
  </form>
</div>
