<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Style","selements"); ?></label>
			</div>
			<div class="col-75">
				<select id="divider_style" name="divider_style">
					<option selected="selected" value="solid"><?php _e("simple","selements"); ?></option>
					<option value="dashed"><?php _e("Dashed","selements"); ?></option>
					<option value="double"><?php _e("Double","selements"); ?></option>
					<option value="dotted"><?php _e("Dotted","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Height","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="5" step="1" list="tickmarks" id="divider_height" oninput="outputt.value = divider_height.value">
				<datalist id="tickmarks">
					<option value="0 to 20">0</option>
					<option>20</option>
					<option>40</option>
					<option>60</option>
					<option>80</option>
					<option>100</option>
				</datalist>
				<span>
				<output id="outputt" for="divider_height">5</output></span> <!-- Just to display selected value -->
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Margin","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="40" step="1" list="tickmarks" id="divider_margin" oninput="output.value = divider_margin.value">
				<datalist id="tickmarks">
					<option value="0 to 20">0</option>
					<option>20</option>
					<option>40</option>
					<option>60</option>
					<option>80</option>
					<option>100</option>
				</datalist>
				<span>
				<output id="output" for="divider_margin">40</output></span> <!-- Just to display selected value -->
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="divider_class" class="divider_class" placeholder="<?php _e("Your extra class","selements"); ?>">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
        <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_divider" style="display: block;">
    	</div>
		</div>
  </form>
</div>
