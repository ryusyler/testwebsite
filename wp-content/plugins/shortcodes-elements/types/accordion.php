 <script type="text/javascript">
fields = 1;
function addInputt() {
  jQuery('#textaccordion').append('<div id="tr-title'+fields+'" class="col-25"><label for="country">Accordion-Title'+fields+'</label></div><div id="tr-title1'+fields+'" class="col-75"><input type="text" id="accordian-title'+fields+'" style="font-size:13px;margin-bottom:1%" class="input-medium" value="" /></div><div id="tr-text'+fields+'" class="col-25"><label for="country">Accordion-Text'+fields+'</label></div><div id="tr-text1'+fields+'" class="col-75"><textarea class="input-xlarge" style="height:80px;font-size:13px;margin-bottom:2%" placeholder="This text area show all text" id="accordian-text'+fields+'" name="accordian-text'+fields+'" value="" type="text"></textarea></div>');
	fields += 1;
	jQuery("#more_field").find('input:button').val("Add More Accordion Fields");
	jQuery("#remove_button").show();
 }
 function remove_fieldd() {
		if(fields!="1"){
			fields=fields-1;
			jQuery("#tr-title"+fields).remove();
      		jQuery("#tr-title1"+fields).remove();
			jQuery("#tr-text"+fields).remove();
      		jQuery("#tr-text1"+fields).remove();
		}
	}
  jQuery(document).ready(function() {
    jQuery('#insert_accor').on('click', function() {
		fields= fields-1;
		var accordian_title = new Array();
			for(i=1; i<=fields; i++)
			{	var title = jQuery("#accordian-title"+i).val();
				accordian_title[i] = title;
		}
			var accordian_text = new Array();
			for(i=1; i<=fields; i++)
			{
				var text = jQuery("#accordian-text"+i).val();
				accordian_text[i] = text;
			}
    window.send_to_editor('<p>[accordian ');
    window.send_to_editor(' fields="' + fields + '" ');
		accordian_title = accordian_title.join("~");
		accordian_text = accordian_text.join("~");
		if(accordian_title)
		{
      window.send_to_editor(' accordian_title="' + accordian_title + '" ');
		}
		if(accordian_text)
		{
      window.send_to_editor(' accordian_text="' + accordian_text + '" ');
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
    <div class="row" id="textaccordion">
    </div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php _e("Accordion field","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="button" onclick="addInputt()" class="shortcode-button" name="add" id="more"  value="<?php _e("Add Accordion Field","selements"); ?>" />
			</div>
      <input type="button" onclick="remove_fieldd()" class="remove-button" name="remove_button" id="remove_button"  value="<?php _e("Remove Last Field","selements"); ?>" style="display:none;" />
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php _e("Insert","selements"); ?>" name="" id="insert_accor" style="display: block;">
    	</div>
		</div>
  </form>
</div>
