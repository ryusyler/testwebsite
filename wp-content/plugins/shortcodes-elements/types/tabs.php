<script type="text/javascript">
fields = 1;
function addtabs() {
 jQuery('#textt').append('<div id="tr-title'+fields+'" class="col-25"><label for="country">Tab-Title'+fields+'</label></div><div id="tr-title1'+fields+'" class="col-75"><input type="text" id="tab-title'+fields+'" style="font-size:13px;margin-bottom:1%" class="input-medium" value="" /></div><div id="tr-text'+fields+'" class="col-25"><label for="country">Tab-Text'+fields+'</label></div><div id="tr-text1'+fields+'" class="col-75"><textarea class="input-xlarge" style="height:80px;font-size:13px;margin-bottom:2%" placeholder="This text area show all text" id="tab-text'+fields+'" name="tab-text'+fields+'" value="" type="text"></textarea></div>');
 fields += 1;
 jQuery("#more_field").find('input:button').val("Add More Tab Fields");
 jQuery("#remove_buttonn").show();
}
function remove_tabs() {
	 if(fields!="1"){
		 fields=fields-1;
		 jQuery("#tr-title"+fields).remove();
		 jQuery("#tr-title1"+fields).remove();
		 jQuery("#tr-text"+fields).remove();
		 jQuery("#tr-text1"+fields).remove();
	 }
 }
 jQuery(document).ready(function() {
	 jQuery('#insert_tabs').on('click', function() {

	 var tabs_style = jQuery("select#tabs_style").val();
	 fields= fields-1;
	 var tab_title = new Array();
		 for(i=1; i<=fields; i++)
		 {	var title = jQuery("#tab-title"+i).val();
			 tab_title[i] = title;
	 }
		 var tab_text = new Array();
		 for(i=1; i<=fields; i++)
		 {
			 var text = jQuery("#tab-text"+i).val();
			 tab_text[i] = text;
		 }
	 window.send_to_editor('<p>[tabs ');
	 window.send_to_editor(' tabs_style="' + tabs_style + '" ');
	 window.send_to_editor(' fields="' + fields + '" ');
	 tab_title = tab_title.join("~");
	 tab_text = tab_text.join("~");
	 if(tab_title)
	 {
		 window.send_to_editor(' tab_title="' + tab_title + '" ');
	 }
	 if(tab_text)
	 {
		 window.send_to_editor(' tab_text="' + tab_text + '" ');
	 }
	 window.send_to_editor(' ]</p>');
 });
});
</script>
<style>
.shortcode-button{
background: #2ea2cc;
background: -webkit-gradient(linear, left top, left bottom, from(#2ea2cc), to(#1e8cbe));
background: -webkit-linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
background: linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#1e8cbe',GradientType=0 );
border-color: #0074a2;
-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
color: #fff;
text-decoration: none;
text-shadow: 0 1px 0 rgba(0,86,132,0.7);

}
.shortcode-button:hover{
background: #2ea2cc;
background: -webkit-gradient(linear, left top, left bottom, from(#2ea2cc), to(#1e8cbe));
background: -webkit-linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
background: linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#1e8cbe',GradientType=0 );
border-color: #0074a2;
-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
color: #fff;
text-decoration: none;
text-shadow: 0 1px 0 rgba(0,86,132,0.7);
opacity:0.8;
}
.remove-button{
background-color: #da4f49;
background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
background-repeat: repeat-x;
border-color: #bd362f #bd362f #802420;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
color:#fff;
width:30% !important;
float: right !important;
}
</style>
<div class="container">
 <form action="/" method="get" accept-charset="utf-8">
	 <div class="row">
		 <div class="col-25">
			 <label for="country"><?php _e("Select Style","selements"); ?></label>
		 </div>
		 <div class="col-75">
			 <select name="tabs_style" id="tabs_style" size="1">
				<option value="1" selected="selected"><?php _e("one","selements"); ?></option>
				<option value="2"><?php _e("Two","selements"); ?></option>
		 </select>
		 </div>
	 </div>
	 <div class="row" id="textt">
	 </div>
	 <div class="row">
		 <div class="col-25">
			 <label for="country"><?php _e("Tab field","selements"); ?></label>
		 </div>
		 <div class="col-75">
			 <input type="button" onclick="addtabs()" class="shortcode-button" name="add" id="more"  value="<?php _e("Add Tab Field","selements"); ?>" />
		 </div>
		 <input type="button" onclick="remove_tabs()" class="remove-button" name="remove_buttonn" id="remove_buttonn"  value="<?php _e("Remove Last Tab Feild","selements"); ?>" style="display:none;" />
	 </div>
	 <div class="row">
		 <div class="col-25">
			 <input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_tabs" style="display: block;">
		 </div>
	 </div>
 </form>
</div>
