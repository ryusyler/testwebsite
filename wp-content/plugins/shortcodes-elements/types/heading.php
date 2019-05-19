<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php _e("Title","selements"); ?></label>
      </div>
      <div class="col-75">
        <input type="text" name="heading_title" value="" id="heading_title" placeholder="<?php _e("Your heading title","selements"); ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Font Size","selements"); ?></label>
      </div>
      <div class="col-75">
        <input type="range" min="0" max="100" class="fontsizeh" value="50" step="1" list="tickmarks" id="rangeInput" oninput="outputt.value = rangeInput.value">
				<datalist id="tickmarks">
					<option value="0 to 20">0</option>
					<option>20</option>
					<option>40</option>
					<option>60</option>
					<option>80</option>
					<option>100</option>
				</datalist>
				<span>
				<output id="outputt" for="rangeInput">50</output></span>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Font Weight","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="900" class="fontsizeh" value="0" step="1" list="tickmarks" id="weight" oninput="outputtt.value = weight.value">
				<datalist id="tickmarks">
					<option value="0 to 400">0</option>
					<option>400</option>
					<option>500</option>
					<option>600</option>
					<option>800</option>
					<option>900</option>
				</datalist>
				<span>
				<output id="outputtt" for="weight">0</output></span>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php _e("Margin","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="50" step="1" list="tickmarks" id="margin" oninput="output.value = margin.value">
				<datalist id="tickmarks">
					<option value="0 to 20">0</option>
					<option>20</option>
					<option>40</option>
					<option>60</option>
					<option>80</option>
					<option>100</option>
				</datalist>
				<span>
				<output id="output" for="margin">50</output></span> <!-- Just to display selected value -->
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Align","selements"); ?></label>
      </div>
      <div class="col-75">
        <select name="align" id="su-generator-attr-align" class="su-generator-attr">
					<option value="left"><?php _e("Left","selements"); ?></option>
					<option value="center" selected="selected"><?php _e("Center","selements"); ?></option>
					<option value="right"><?php _e("Right","selements"); ?></option>
        </select>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Font Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" class="color_picker_shortcode" id="heading_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="extra-class" class="extra-class" placeholder="<?php _e("Your extra class","selements"); ?>">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
				<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="heading_insert" style="display: block;">
    	</div>
		</div>
  </form>
</div>

