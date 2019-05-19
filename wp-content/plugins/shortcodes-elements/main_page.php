<script>
jQuery(document).ready(function($){
	//select shortcode File
	$(".els-admin-shortcodes-single-back").css("display", "none");

	$(".mainpage_shortcode").click(function WLselect() {
	var shortcodeSelectVal = jQuery(this).attr('data-name'); 
	var shortcodeSelectText = jQuery(this).attr('data-shortcode');
	if( shortcodeSelectVal != 'default'){ 
    $('.option-page').load('<?php echo plugin_dir_url( __FILE__ ) ?>shortcodes/'+shortcodeSelectVal+'.php',
	function WLselect(){
	$(".els-admin-shortcodes-single-back").css("display", "block"); 
	$(".shortcode-editor-back").css("display", "inline-block");
	$(".option-page").css("display", "block");
	$(".seting-page").css("display", "none");
	$('.shortcode-editor-title').text(' - '+shortcodeSelectText);
		});
	  }
	})
// Go Back button
    $(".shortcode-editor-back").click(function WLselect() {
    $(".seting-page").css("display", "block");
    $(".els-admin-shortcodes-single-back").css("display", "none");
    $(".option-page").css("display", "none");
			})
	.trigger('change');
 });
</script>
<div class="wrap elw-page-welcome about-wrap seting-page">
		<h1><?php _e("Welcome to","selements"); ?> <span class="elw_shortcode_heading">Shortcodes Elements</span></h1>
		<div class="about-text"><?php _e("Congratulations! You are about to use most powerful time saver Plugin for WordPress ever","selements"); ?> - <span style="color:#00a0d2;"><b>Shortcodes elements</b></span> by Weblizar.	</div>
		<div class="wp-badge elw-page-logo" style="color:#0072aa;">Version 1.1.0	</div>
		
		<!-- Isotope -->
	<section>
    <div class="gallary animate-grid">
        <div class="containerr">
			<div class="row">
				<div class="col-xs-12">
					<div class="categories">
						<ul>							
							<li><a href="#" data-filter="*" class="active"><?php _e("All Shortcodes","selements"); ?></a></li>
							<li><a href="#" data-filter=".els_content"><?php _e("Content","selements"); ?></a></li>
							<li><a href="#" data-filter=".els_box"><?php _e("Box","selements"); ?></a></li>
							<li><a href="#" data-filter=".els_media"><?php _e("Media","selements"); ?></a></li>
							<li><a href="#" data-filter=".els_gallery"><?php _e("Gallery","selements"); ?></a></li>
							<li><a href="#" data-filter=".els_other"><?php _e("Other","selements"); ?></a></li>				
						</ul>
						<div class="clearfix">  </div>
					</div>
				</div>
			</div>
	        <div class="row gallary-thumbs">
	            <div class="col-sm-6 col-md-1 els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="heading" data-shortcode="Heading">
							<img src="<?php echo plugins_url('/images/shortcodes/heading.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Heading</h4>
								<div class="clearfix"></div>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="accordion" data-shortcode="Accordion">
							<img src="<?php echo plugins_url('/images/shortcodes/accordion.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Accordion</h4>		
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_box els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="tabs" data-shortcode="Tabs">
							<img src="<?php echo plugins_url('/images/shortcodes/tabs.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Tabs</h4>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="dropcap" data-shortcode="Dropcap">
							<img src="<?php echo plugins_url('/images/shortcodes/dropcap.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Dropcap</h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="columns" data-shortcode="Columns">
							<img src="<?php echo plugins_url('/images/shortcodes/row.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Columns</h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="posts" data-shortcode="Posts">
							<img src="<?php echo plugins_url('/images/shortcodes/posts.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Posts</h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_box els_content">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="button" data-shortcode="Button">
							<img src="<?php echo plugins_url('/images/shortcodes/button.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Button</h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="tooltip" data-shortcode="Tooltip">
							<img src="<?php echo plugins_url('/images/shortcodes/tooltip.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Tooltip</h4>					
							</div>
						</a>
	                </div>
	            </div>
	           <div class="col-sm-6 col-md-1 els_other els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="alert" data-shortcode="Alert">
							<img src="<?php echo plugins_url('/images/shortcodes/pullquote.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Alert</h4>					
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_box els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="panel" data-shortcode="Panel">
							<img src="<?php echo plugins_url('/images/shortcodes/box.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Panel</h4>
								<div class="clearfix"></div>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="progressbar" data-shortcode="Progress Bar">
							<img src="<?php echo plugins_url('/images/shortcodes/highlight.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Progress Bar</h4>		
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="popover" data-shortcode="Popover">
							<img src="<?php echo plugins_url('/images/shortcodes/tooltip.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Popover</h4>			
							</div>
						</a>
	                </div>
	            </div> 
	            <div class="col-sm-6 col-md-1 els_media">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="frame" data-shortcode="Photo Frame">
							<img src="<?php echo plugins_url('/images/shortcodes/dummy_image.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Photo Frame</h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1  els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="gmap" data-shortcode="Google Map">
							<img src="<?php echo plugins_url('/images/shortcodes/gmap.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Google Map</h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="label" data-shortcode="Label">
							<img src="<?php echo plugins_url('/images/shortcodes/label.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Label</h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="quote" data-shortcode="Quote">
							<img src="<?php echo plugins_url('/images/shortcodes/quote.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Quote</h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="widgets" data-shortcode="Widgets">
							<img src="<?php echo plugins_url('/images/shortcodes/template.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Widgets</h4>					
							</div>
						</a>
	                </div>
	            </div>
	           <div class="col-sm-6 col-md-1 other els_content els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="note" data-shortcode="Note">
							<img src="<?php echo plugins_url('/images/shortcodes/note.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Note</h4>					
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="youtube" data-shortcode="Youtube">
							<img src="<?php echo plugins_url('/images/shortcodes/youtube.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Youtube</h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="vimeo" data-shortcode="Vimeo">
							<img src="<?php echo plugins_url('/images/shortcodes/vimeo.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Vimeo</h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_gallery">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="slider" data-shortcode="Slider">
							<img src="<?php echo plugins_url('/images/shortcodes/slider.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Slider</h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_gallery">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="gallary" data-shortcode="Gallery">
							<img src="<?php echo plugins_url('/images/shortcodes/custom_gallery.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Gallery</h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="animation" data-shortcode="Animation">
							<img src="<?php echo plugins_url('/images/shortcodes/animate.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Animation</h4>					
							</div>
						</a>
	                </div>
	            </div>
	           <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="divider" data-shortcode="Divider">
							<img src="<?php echo plugins_url('/images/shortcodes/divider.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Divider</h4>					
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="spacer" data-shortcode="Spacer">
							<img src="<?php echo plugins_url('/images/shortcodes/spacer.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Spacer</h4>
								<div class="clearfix"></div>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content els_other els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="service" data-shortcode="Service">
							<img src="<?php echo plugins_url('/images/shortcodes/service.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Service</h4>		
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other els_content els_box">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="funfact" data-shortcode="FunFacts">
							<img src="<?php echo plugins_url('/images/shortcodes/divider.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>FunFacts</h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="audio" data-shortcode="Audio">
							<img src="<?php echo plugins_url('/images/shortcodes/audio.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Audio</h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="expand" data-shortcode="Expand">
							<img src="<?php echo plugins_url('/images/shortcodes/resize-arrows.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Expand</h4>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="lightbox" data-shortcode="Lightbox">
							<img src="<?php echo plugins_url('/images/shortcodes/lightbox.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Light-Box</h4>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="guests" data-shortcode="Guests">
							<img src="<?php echo plugins_url('/images/shortcodes/guests.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Guests</h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_other els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="permalink" data-shortcode="permalink">
							<img src="<?php echo plugins_url('/images/shortcodes/permalink.png', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Permalink</h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="heighlighter" data-shortcode="Heighlighter">
							<img src="<?php echo plugins_url('/images/shortcodes/highlighter.png', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Heighlighter</h4>			
							</div>
						</a>
	                </div>
	            </div>	
				<div class="col-sm-6 col-md-1 els_media">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="documents" data-shortcode="Documents">
							<img src="<?php echo plugins_url('/images/shortcodes/documents.png', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4>Add Documents</h4>			
							</div>
						</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
		<!-- end-->
<p class="elw-thank-you">Thank you for choosing Shortcodes Elements Plugin</p>
</div>
<div class="els-admin-shortcodes-single-back">
	<a href="javascript:void(0);" class="button shortcode-editor-back"><span class="dashicons dashicons-arrow-left-alt"></span> Back to shortcodes list</a>
</div>
<div class="option-page" style="width: 65%;"></div>