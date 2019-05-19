<script type="text/javascript">
	jQuery(document).ready(function() {
	 jQuery('#fun_icon').iconpicker();
	});
</script>
<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Title","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php _e("FunFact Title","selements"); ?>" type="text" id="fun_title" value="" name="fun_title"/>
		</div>
	</div>
    <div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Icon","selements"); ?></label>
		</div>
		 <div class="col-75">
		 <input class="icp demo" id="fun_icon"  value="fa-anchor" type="text">
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="country"><?php _e("Icon Color","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="text" class="color_picker_shortcode" id="fact_custom_color" />
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php _e("Icon Size","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="range" min="10" max="128" class="fontsizeh" value="50" step="1" list="tickmarks" id="icon_size" oninput="outputtt.value = icon_size.value">
			<datalist id="tickmarks">
				<option value="0 to 10">10</option>
				<option>20</option>
				<option>30</option>
				<option>40</option>
				<option>50</option>
				<option>60</option>
				<option>70</option>
				<option>80</option>
				<option>90</option>
				<option>100</option>
				<option>110</option>
				<option>120</option>
				<option>128</option>
			</datalist>
			<span>
			<output id="outputtt" for="icon_size">50</output></span>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php _e("Value","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="FunFact Value" type="number" id="icon_value" value="" name="icon_value"/>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Content","selements"); ?></label>
		</div>
		<div class="col-75">
			<textarea class="service_contnt" placeholder="Your Content" id="fun_contnt" value="" name="fun_contnt"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="fun_class" value="" name="fun_class"/>
		</div>
	</div>
    <div class="row">
	<div class="col-25">
		<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_fact" style="display: block;">
	</div>
	</div>
  </form>
</div>
