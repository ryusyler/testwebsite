<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Progress Bar Title","selements"); ?></label>
      </div>
      <div class="col-75">
      <input class="input-medium" placeholder="<?php _e("Progress Bar Title","selements"); ?>" type="text" id="progress_heading" value="" name="progress_heading">
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Progress Bar","selements"); ?> %</label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="50" step="1" list="tickmarks" id="progress_percentag" oninput="output.value = progress_percentag.value">
				<datalist id="tickmarks">
					<option value="0 to 20">0</option>
					<option>20</option>
					<option>40</option>
					<option>60</option>
					<option>80</option>
					<option>100</option>
				</datalist>
				<span>
				<output id="output" for="progress_percentag">50</output></span> <!-- Just to display selected value -->
			</div>
		</div>
    <div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Custom Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" class="color_picker_shortcode" id="progress_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="progress_class" class="progress_class" placeholder="<?php _e("Your extra class","selements"); ?>">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_progress" style="display: block;">
    	</div>
		</div>
  </form>
</div>
