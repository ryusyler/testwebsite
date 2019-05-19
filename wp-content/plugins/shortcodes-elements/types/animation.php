<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Animation","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="animate_name" name="animate_name">
				<option value="flash" selected="selected"><?php _e("flash","selements"); ?></option>
				<option value="bounce"><?php _e("bounce","selements"); ?></option>
				<option value="shake"><?php _e("shake","selements"); ?></option>
				<option value="tada"><?php _e("tada","selements"); ?></option>
				<option value="swing"><?php _e("swing","selements"); ?></option>
				<option value="pulse"><?php _e("pulse","selements"); ?></option>
				<option value="rubberBand"><?php _e("rubberBand","selements"); ?></option>
				<option value="headShake"><?php _e("headShake","selements"); ?></option>
				<option value="wobble"><?php _e("wobble","selements"); ?></option>
				<option value="jello"><?php _e("jello","selements"); ?></option>
				<option value="bounceIn"><?php _e("bounceIn","selements"); ?></option>
				<option value="bounceInDown"><?php _e("bounceInDown","selements"); ?></option>
				<option value="bounceInLeft"><?php _e("bounceInLeft","selements"); ?></option>
				<option value="bounceInRight"><?php _e("bounceInRight","selements"); ?></option>
				<option value="bounceInUp"><?php _e("bounceInUp","selements"); ?></option>
				<option value="bounceOut"><?php _e("bounceOut","selements"); ?></option>
				<option value="bounceOutLeft"><?php _e("bounceOutLeft","selements"); ?></option>
				<option value="bounceOutUp"><?php _e("bounceOutUp","selements"); ?></option>
				<option value="fadeIn"><?php _e("fadeIn","selements"); ?></option>
				<option value="fadeInDown"><?php _e("fadeInDown","selements"); ?></option>
				<option value="fadeInUp"><?php _e("fadeInUp","selements"); ?></option>
				<option value="fadeInDownBig"><?php _e("fadeInDownBig","selements"); ?></option>
				<option value="fadeInUpBig"><?php _e("fadeInUpBig","selements"); ?></option>
				<option value="fadeInLeft"><?php _e("fadeInLeft","selements"); ?></option>
				<option value="fadeInLeftBig"><?php _e("fadeInLeftBig","selements"); ?></option>
				<option value="fadeInRight"><?php _e("fadeInRight","selements"); ?></option>
				<option value="fadeInRightBig"><?php _e("fadeInRightBig","selements"); ?></option>
				<option value="fadeOut"><?php _e("fadeOut","selements"); ?></option>
				<option value="fadeOutDown"><?php _e("fadeOutDown","selements"); ?></option>
				<option value="fadeOutDownBig"><?php _e("fadeOutDownBig","selements"); ?></option>
				<option value="fadeOutLeft"><?php _e("fadeOutLeft","selements"); ?></option>
				<option value="fadeOutLeftBig"><?php _e("fadeOutLeftBig","selements"); ?></option>
				<option value="fadeOutRight"><?php _e("fadeOutRight","selements"); ?></option>
				<option value="fadeOutRightBig"><?php _e("fadeOutRightBig","selements"); ?></option>
				<option value="fadeOutUp"><?php _e("fadeOutUp","selements"); ?></option>
				<option value="fadeOutUpBig"><?php _e("fadeOutUpBig","selements"); ?></option>
				<option value="flipInX"><?php _e("flipInX","selements"); ?></option>
				<option value="flipInY"><?php _e("flipInY","selements"); ?></option>
				<option value="flipOutX"><?php _e("flipOutX","selements"); ?></option>
				<option value="flipOutY"><?php _e("flipOutY","selements"); ?></option>
				<option value="lightSpeedIn"><?php _e("lightSpeedIn","selements"); ?></option>
				<option value="lightSpeedOut"><?php _e("lightSpeedOut","selements"); ?></option>
				<option value="rotateIn"><?php _e("rotateIn","selements"); ?></option>
				<option value="rotateInDownLeft"><?php _e("rotateInDownLeft","selements"); ?></option>
				<option value="rotateInDownRight"><?php _e("rotateInDownRight","selements"); ?></option>
				<option value="rotateInUpLeft"><?php _e("rotateInUpLeft","selements"); ?></option>
				<option value="rotateInUpRight"><?php _e("rotateInUpRight","selements"); ?></option>
				<option value="rotateOut"><?php _e("rotateOut","selements"); ?></option>
				<option value="rotateOutDownLeft"><?php _e("rotateOutDownLeft","selements"); ?></option>
				<option value="rotateOutUpRight"><?php _e("rotateOutUpRight","selements"); ?></option>
				<option value="hinge"><?php _e("hinge","selements"); ?></option>
				<option value="rollIn"><?php _e("rollIn","selements"); ?></option>
				<option value="rollOut"><?php _e("rollOut","selements"); ?></option>
				<option value="zoomIn"><?php _e("zoomIn","selements"); ?></option>
				<option value="zoomInLeft"><?php _e("zoomInLeft","selements"); ?></option>
				<option value="zoomInRight"><?php _e("zoomInRight","selements"); ?></option>
				<option value="zoomOut"><?php _e("zoomOut","selements"); ?></option>
				<option value="zoomOutDown"><?php _e("zoomOutDown","selements"); ?></option>
				<option value="zoomOutLeft"><?php _e("zoomOutLeft","selements"); ?></option>
				<option value="zoomOutRight"><?php _e("zoomOutRight","selements"); ?></option>
				<option value="slideInDown"><?php _e("slideInDown","selements"); ?></option>
				<option value="slideInLeft"><?php _e("slideInLeft","selements"); ?></option>
				<option value="slideInRight"><?php _e("slideInRight","selements"); ?></option>
				<option value="slideOutUp"><?php _e("slideOutUp","selements"); ?></option>
				</select>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php _e("Duration","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="20" class="fontsizeh" value="2" step="1" list="tickmarks" id="duration" oninput="output.value = duration.value">
				<datalist id="tickmarks">
					<option value="0">0</option>
					<option>5</option>
					<option>10</option>
					<option>15</option>
					<option>20</option>
				</datalist>
				<span>
				<output id="output" for="duration">2</output></span>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php _e("Delay","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="20" class="fontsizeh" value="2" step="1" list="tickmarks" id="delay" oninput="outputt.value = delay.value">
				<datalist id="tickmarks">
					<option value="0">0</option>
					<option>5</option>
					<option>10</option>
					<option>15</option>
					<option>20</option>
				</datalist>
				<span>
				<output id="outputt" for="delay">2</output></span>
			</div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
      <textarea class="input-xlarge" rows="8" id="animate_text" value="" name="animate_text" type="text"><?php _e("Content.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="animate_class" class="animate_class" placeholder="<?php _e("Extra class","selements"); ?>">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_animation" style="display: block;">
    	</div>
		</div>
  </form>
</div>
