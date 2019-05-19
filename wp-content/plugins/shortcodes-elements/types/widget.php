<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="country"><?php _e("Widgets","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="widget_style" name="widget_style">
				<option value="" selected="selected"><?php _e("select widget","selements"); ?></option>
				<option value="WP_Widget_Archives"><?php _e("Archives","selements"); ?></option>
				<option value="WP_Widget_Calendar"><?php _e("Calander","selements"); ?></option>
				<option value="WP_Widget_Categories"><?php _e("Categories","selements"); ?></option>
				<option value="WP_Widget_Links"><?php _e("Links","selements"); ?></option>
				<option value="WP_Widget_Meta"><?php _e("Meta","selements"); ?></option>
				<option value="WP_Widget_Pages"><?php _e("Pages","selements"); ?></option>
				<option value="WP_Widget_Recent_Comments"><?php _e("Recent Comments","selements"); ?></option>
				<option value="WP_Widget_Recent_Posts"><?php _e("Recent Posts","selements"); ?></option>
				<option value="WP_Widget_RSS"><?php _e("RSS","selements"); ?></option>
				<option value="WP_Widget_Search"><?php _e("Search","selements"); ?></option>
				<option value="WP_Widget_Tag_Cloud"><?php _e("Tag Cloud","selements"); ?></option>
				</select>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php _e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php _e("Extra class","selements"); ?>" type="text" id="widget_class" value="" name="widget_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
    <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_widget" style="display: block;">
    	</div>
		</div>
  </form>
</div>
