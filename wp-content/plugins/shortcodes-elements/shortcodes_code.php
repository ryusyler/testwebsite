<?php 
/******** Shortcodes function and html ******/
/*--button--*/
function weblizar_parse_shortcode_content( $content ) {
  /* Parse nested shortcodes and add formatting. */
	$content = trim( do_shortcode( shortcode_unautop( $content ) ) );
	/* Remove '' from the start of the string. */
	if ( substr( $content, 0, 4 ) == '' )
		$content = substr( $content, 4 );
	/* Remove '' from the end of the string. */
	if ( substr( $content, -3, 3 ) == '' )
		$content = substr( $content, 0, -3 );
	/* Remove any instances of ''. */
	$content = str_replace( array( '<p></p>' ), '', $content );
	$content = str_replace( array( '<p>  </p>' ), '', $content );
	return $content;
}

/*--------------------------------------*/
/*	Row
/*--------------------------------------*/

function esweblizar_shortcode_element_row($params, $content = null) {
    extract(shortcode_atts(array(
        'column_class' => '',
    ), $params));
    $result = '<div class="row '.$column_class.'">';
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    $result .= do_shortcode($content);
    $result .= '</div>';
    return $result;
}
add_shortcode('row', 'esweblizar_shortcode_element_row');
/*--------------------------------------*/
/*	Columns
/*--------------------------------------*/
function esweblizar_column_shortcode_element( $atts, $content = null ) {
	extract( shortcode_atts( array(
	  	'offset' =>'',
      	'size' => 'col-md-6',
	  	//'position' =>'first'
      ), $atts ) );
	$atts = shortcode_atts( array(	'offset' => '','size' => 'col-md-6'), $atts );
	$out = '<div class="'.$size.'"><p>' . do_shortcode($content). '</p></div>';
	 return $out;
}
add_shortcode('column', 'esweblizar_column_shortcode_element');


/*--permalink--*/
function weblizar_per_shortcode_content( $atts,$content = null ) {
  /* Parse nested shortcodes and add formatting. */
  $atts = shortcode_atts(
  array ('permalinkid' => '',
		'target' => '',
		'text' => 'Permalink',
		'permalink_class' => '',
		), $atts);
	$permalinkid = $atts['permalinkid'];
	$permalink_class = $atts['permalink_class'];
	$target = $atts['target'];
	$text = $atts['text'];
	if($target == 'blank')
	{
	$target =  'target="_blank"';
	}
	else
	{
	$target = 'target="_self"';
	}
	$page_url = get_page_link($permalinkid); 
	if ( ! empty ( $page_url ) ){
		$out= '<a class="per" '.$permalink_class.'" href="'.$page_url.'" ' .$target. ' " title="'.$text.'"> '.get_the_title( $permalinkid ). ' </a>';
	}
	echo $out;
	
}
add_shortcode('permalink', 'weblizar_per_shortcode_content');

/*--button--*/
function esweblizar_button_shortcode_element( $atts,$content = null ){
   $atts = shortcode_atts(
    array(	'style' => '',
			'size' => 'small',
			'target'=> 'self',
			'buttonlink' => '#',
      		'color' => '',
			'button_class' => '',
			'border' => '',
			'textdata' => 'Button',
		), $atts );
	$size = $atts['size'];
  $color = $atts['color'];
	$button_class = $atts['button_class'];
	$border = $atts['border'];
	$style = $atts['style'];
	$buttonlink = $atts['buttonlink'];
	$target = $atts['target'];
  $textdata = $atts['textdata'];
	if($target == 'blabk')
	{
	$target = ($target == 'blank') ? ' target="_blank"' : '';
	}
	else
	{
	$target = ($target == 'self') ? ' target="_self"' : '';
	}
	$out= '<a class="btn '.$style.' '. $size.' '.$border.' waves-effect waves-light '.$button_class.'" href="'.$buttonlink.'" target="' .$target. '" style="background-color:'.$color.'">'.$textdata.'</a>';
	return $out;
}
add_shortcode('button', 'esweblizar_button_shortcode_element');

/*-----------  short code-----------*/
function esweblizar_alert_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'alert_heading' => 'Please enter alert heading',
				'alert_text' => 'Please enter text in alert text',
				'alert_style'=>'',
				'alert_class'=> '',

				),$atts
			);
	$alert_heading = $atts['alert_heading'];
	$alert_class = $atts['alert_class'];
	$alert_text = $atts['alert_text'];
	$alert_style = $atts ['alert_style'];

	$out='<div class="alert alert-'.$alert_style.' alert-dismissable '.$alert_class.'">
                <span class="glyphicon glyphicon-certificate"></span>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>'.$alert_heading.'!</strong>
                &nbsp;&nbsp;'.$alert_text. do_shortcode($content).'
            </div>';
	return $out;
}
add_shortcode( 'alert', 'esweblizar_alert_shortcode_element' );

/*-----------Guests  short code-----------*/
function esweblizar_guests_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'guests_text' => 'Please enter text in alert text',
				'guests_class'=> '',

				),$atts
			);
	$guests_class = $atts['guests_class'];
	$guests_text = $atts['guests_text'];
	if(!is_user_logged_in()){
		$out='<div class="guests '.$guests_class.'">
	                <div class="guests_content">';
	    $out.='          <p>'.$guests_text. do_shortcode($content).'</p>';
	    $out.=		'</div>
	          </div>';
	    return $out;
	}
	
}
add_shortcode( 'guests', 'esweblizar_guests_shortcode_element' );

/*-----------LightBox  short code-----------*/
function esweblizar_lightbox_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'lightbox_text' => 'Please enter text in alert text',
				'lightbox_class'=> '',
				'lightbox_src'=> '',

				),$atts
			);
	$lightbox_class = $atts['lightbox_class'];
	$lightbox_text = $atts['lightbox_text'];
	$lightbox_src = $atts['lightbox_src'];
		
		$out='<a id="video" video-url="'.$lightbox_src.'" class="'.$lightbox_class.'">'.$lightbox_text.'</a>

			<script>
			jQuery(document).ready(function() {
    jQuery("#video").videoPopup({
        autoplay: 1,
        controlsColor: "white",
        showVideoInformations: 0,
        width: 1000,
        customOptions: {
            rel: 0,
            end: 60
        }
    });
});</script>';
	    return $out;

	
}
add_shortcode( 'lightbox', 'esweblizar_lightbox_shortcode_element' );

/*-----------Service short code-----------*/
function esweblizar_service_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'title' => '',
				'icon' => 'fa-anchor',
				'color'=>'#000',
				'service_class'=> '',
				'service_content' => '',
				'icon_size' => '50',
				),$atts
			);
	$title = $atts['title'];
	$icon = $atts['icon'];
	$color = $atts['color'];
	$icon_size = $atts['icon_size'];
	$service_class = $atts ['service_class'];
	$service_content = $atts ['service_content'];
	$out='<div class="weblizar_service_shortcode '.$service_class.'">
			<div class="col-sm-4" style="text-align: center;">
		      <i class="fa '.$icon.'" style="color:'.$color.';font-size:'.$icon_size.'px;"></i>
		      <h4>'.$title.'</h4>
		      <p>'.$service_content.'</p>
		   	</div>
		   </div>';
	return $out;
}
add_shortcode( 'service', 'esweblizar_service_shortcode_element' );

/*-----------FunFact short code-----------*/
function esweblizar_funfact_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'title' => '',
				'icon' => 'fa-anchor',
				'color'=>'#000',
				'fun_class'=> '',
				'fun_content' => '',
				'icon_size' => '50',
				'icon_value' => '100',
				),$atts
			);
	$title = $atts['title'];
	$icon_value = $atts['icon_value'];	
	$icon = $atts['icon'];
	$color = $atts['color'];
	$icon_size = $atts['icon_size'];
	$fun_class = $atts ['fun_class'];
	$fun_content = $atts ['fun_content'];
	$out='<div class="weblizar_funfact_shortcode '.$fun_class.'">
            <div class="col-md-3" style="text-align: center;">
                <div class="single_counter p-y-2 m-t-1">
                    <i class="fa '.$icon.'" style="color:'.$color.';font-size:'.$icon_size.'px;"></i>
                    <h2 class="count-number" style="padding: 0.6em 0 0;font-weight: bold;">'.$icon_value.'</h2>
                    <h4 style="padding: 0.6em 0 0;">'.$title.'</h4>
                    <p>'.$fun_content.'</p>
                </div>
            </div>
          </div>';
	return $out;
}
add_shortcode( 'funfact', 'esweblizar_funfact_shortcode_element' );

/*-----------Label short code-----------*/
function esweblizar_label_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'label_text' => 'Please enter text in label text',
				'label_style'=>'',
				'label_class'=> '',
				),$atts
			);
	$label_class = $atts['label_class'];
	$label_text = $atts['label_text'];
	$label_style = $atts ['label_style'];

	$out='<span class="weblizar_label_shortcode '.$label_style.' '.$label_class.'">'.$label_text.'</span>';
	return $out;
}
add_shortcode( 'label', 'esweblizar_label_shortcode_element' );

/*-----------Widget short code-----------*/
function esweblizar_widget_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'widget_style' => '',
				'widget_class' => '',
				),$atts
			);
	$widget_args = array(
	'before_widget' => '<div class="weblizar_shortcode_widget '.$widget_class.'">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="weblizar_shortcode_widget_title"><h2>',
	'after_title'   => '</h2></div>' );

	$widget_style = $atts['widget_style'];
	$widget_class = $atts['widget_class'];
	$out= the_widget($widget_style, null, $widget_args);
	return $out;
}
add_shortcode( 'widget', 'esweblizar_widget_shortcode_element' );


/*-----------Widget short code-----------*/
function esweblizar_divider_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'divider_class' => '',
				'divider_margin' => '',
        'divider_height' => '',
        'divider_style' => '',
				),$atts
			);
	$divider_class = $atts['divider_class'];
	$divider_margin = $atts['divider_margin'];
  $divider_height = $atts['divider_height'];
  $divider_style = $atts['divider_style'];

	$out='<div class="Weblizar_divider_shortcode '.$divider_class.'" style="margin:'.$divider_margin.'px 0;border-width:'.$divider_height.'px;border-color:#3033319c;border-bottom-style:'.$divider_style.';"></div>';
	return $out;
}
add_shortcode( 'divider', 'esweblizar_divider_shortcode_element' );

/*-----------galler code-----------*/
function esweblizar_shotcode_gallery_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
        'gallery_class' => '',
        'gallery_type' => '',
        'image_length' =>'',
        'image_url' => '',
				),$atts
			);
	$gallery_type = $atts['gallery_type'];
  	$gallery_class = $atts['gallery_class'];
  	$image_length = $atts['image_length'];
  	$image_url = $atts['image_url'];
  	$am = explode(",", $image_url );

  	if($gallery_type=='one'){
  	$out = '<div class="gallery weblizar_gallery_shortcode '.$gallery_class.'">';
  	foreach ($am as $url) { 
  			$out.='<figure>
				    <div class="gallery_popup_inner">
						<div class="gallery_popup_btn">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
					  <symbol id="close" viewBox="0 0 18 18">
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
								S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
								l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
								c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
								s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
					  </symbol>
					</svg>';					
			$out.='<img class="img-responsive" src="'.$url.'?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="'.$url.'" />
				   <!-- <figcaption>Daytona Beach <small>United States</small></figcaption> -->';
			$out.='</div></div></figure>';
  	}
	$out.='	</div>';
	} 
	elseif($gallery_type=='two')
	{
		$out = '<div class="weblizar_gallery_two '.$gallery_class.'">
					<div class="row">';
 		$count=1; foreach ($am as $url) { 	
		$out.='	<div class="col-md-4 col-sm-4 col-xs-6">
		<a  href="'.$url.'" data-lightbox="example-set">
		<img class="img-responsive" src="'.$url.'" alt="'.$url.'" />
		</a>
		</div>';
		if($count%3==0){
		$out.='	 <div class="col-md-12"></div>'; }  $count++; } 
		$out.='</div></div>';
	} 	
	elseif ($gallery_type=='three') {
		$out = '<div class="weblizar_gallery_shortcode grid '.$gallery_class.'" >';
		foreach ($am as $url) { 
		$out.='	<div class="grid-item col-md-3" >
				  <a  href="'.$url.'" data-lightbox="example-set">
				     <img src="'.$url.'" class="img-responsive" alt="'.$url.'">
				     </a>
				</div>';
		} 
		$out.='	</div>
				<script>
					var elem = document.querySelector(".grid");
					var msnry = new Masonry( elem, {
					  // options
					  itemSelector: ".grid-item",
					  columnWidth: 200
					});

					// element argument can be a selector string
					//   for an individual element
					var msnry = new Masonry( ".grid", {
					  // options
					});
				</script>';
	}

	return $out;
}
add_shortcode( 'shotcode_gallery', 'esweblizar_shotcode_gallery_shortcode_element' );


/*-----------Swiper code-----------*/
function esweblizar_swiper_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
		'select_slider' => '',
        'slider_class' => '',
        'image_length' =>'',
        'image_url' => '',
				),$atts
			);
	$select_slider = $atts['select_slider'];
  	$slider_class = $atts['slider_class']; $rand = rand(1,100);
  	$image_length = $atts['image_length'];
  	$image_url = $atts['image_url'];
  	$am = explode(",", $image_url );
	$out='<div class="weblizar_slider_shortcode '.$slider_class.'">
			<div class="swiper-container swiper-container-'.$rand.'">
			  <div class="swiper-wrapper">';
	foreach ($am as $url) {
	$out.='	<div class="swiper-slide">';
	$out.='<img class="img-responsive" src="'.$url.'" alt="'.$url.'" style="width:100%;">
			</div>';
	} 
	$out.='	</div>
			<div class="swiper-pagination swiper-'.$rand.'"></div>
            <div class="swiper-button-next swiper-'.$rand.' swiper-button-next-cont swiper-button-white"></div>
            <div class="swiper-button-prev swiper-'.$rand.' swiper-button-prev-cont swiper-button-white"></div>
			</div> </div>
			<script>
			jQuery(document).ready(function() {
			var mySwiper = jQuery(".swiper-container-'.$rand.'").swiper({
		    pagination: ".swiper-pagination.swiper-'.$rand.'",
           	nextButton: ".swiper-button-next.swiper-'.$rand.'",
           	prevButton: ".swiper-button-prev.swiper-'.$rand.'",
		    loop: true,
		    interval : 2000,
			autoplay: 2500,
			autoplayDisableOnInteraction: false,
			slidesPerView: 1
			});
			});
	</script>';
	return $out;
}
add_shortcode( 'swiper', 'esweblizar_swiper_shortcode_element' );

/*-----------Carouselusal short code-----------*/
function esweblizar_carousel_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
		'select_slider' => '',
        'slider_class' => '',
        'image_length' =>'',
        'image_url' => '',
				),$atts
			);
	$select_slider = $atts['select_slider'];
  	$slider_class = $atts['slider_class'];
  	$image_length = $atts['image_length'];
  	$image_url = $atts['image_url'];
  	$am = explode(",", $image_url );
  	$rand = rand(1,100);

	$out='  <div id="myCarousel-'.$rand.'" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">';
	$count = 1;
	foreach ($am as $url) {
	if($count == 1){
	$out.='				<li data-target="#myCarousel-'.$rand.'" data-slide-to="'.$count.'" class="active"></li>';
	} else {		   
	$out.='				<li data-target="#myCarousel-'.$rand.'" data-slide-to="'.$count.'"></li>';
	} $count++; }
	$out.='			</ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">';
	$count = 1;
	foreach ($am as $url) {
	if($count == 1){
	$out.='			  <div class="item active">
				        <img src="'.$url.'" alt="Los Angeles" style="width:100%;">
				      </div>';
    } else {
	$out.='			  <div class="item">
				        <img src="'.$url.'" alt="Chicago" style="width:100%;">
				      </div>';
    } $count++; }
	$out.='			</div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel-'.$rand.'" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel-'.$rand.'" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>';
	return $out;
}
add_shortcode( 'carousel', 'esweblizar_carousel_shortcode_element' );

/*-----------Animation short code-----------*/
function esweblizar_animation_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'animate_name' => '',
				'duration'=>'',
				'delay'=> '',
				'animate_text'=>'',
				'animate_class'=> '',
				),$atts
			);
	$animate_name = $atts['animate_name'];
	$duration = $atts['duration'];
	$delay = $atts ['delay'];
	$animate_text = $atts['animate_text'];
	$animate_class = $atts ['animate_class'];

	$out='<div class="weblizar-animate '.$animate_class.' '.$animate_name.' animated" style="visibility: visible; animation-duration: '.$duration.'s; animation-delay: '.$delay.'s;" data-animation="'.$animate_name.'" data-duration="'.$duration.'" data-delay="'.$delay.'">
			'.$animate_text.'
			</div>';
	return $out;
}
add_shortcode( 'animation', 'esweblizar_animation_shortcode_element' );

/*-----------Youtube-----------*/
function esweblizar_youtube_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'y_controls' => '1',
				'y_autohide' => '1',
		   		'y_theme' => 'dark',
				'youtube_width' => '600',
				'youtube_height' => '400',
				'y_responsive' => 'on',
				'y_title' => '1',
				'y_autoplay' => '1',
				'y_loop' => '1',
				'y_fullscreen' => '1',
				'y_branding' => '1',
				'y_class' => '',
				'you_url'=> '',

				),$atts
			);
	$y_controls = $atts['y_controls'];
	$y_autohide = $atts['y_autohide'];
	$y_theme = $atts ['y_theme'];
	$youtube_width = $atts['youtube_width'];
	$youtube_height = $atts['youtube_height'];
	$y_responsive = $atts ['y_responsive'];
	if($y_responsive=='1'){
		$y_responsive = 'youtube_responsive';
	} else { $y_responsive=''; }

	$y_title = $atts['y_title'];
	$y_autoplay = $atts['y_autoplay'];
	$y_loop = $atts ['y_loop'];
	$y_fullscreen = $atts['y_fullscreen'];
	$y_branding = $atts['y_branding'];
	$y_class = $atts ['y_class'];
	$you_url = $atts ['you_url'];

	$out='<div class="weblizar_youtube '.$y_responsive.' '.$y_class.'">
			<iframe width="'.$youtube_width.'" height="'.$youtube_height.'" src="https://www.youtube.com/embed/'.$you_url.'?autohide='.$y_autohide.'&amp;autoplay='.$y_autoplay.'&amp;controls='.$y_controls.'&amp;fs='.$y_fullscreen.'&amp;loop='.$y_loop.'&amp;modestbranding='.$y_branding.'&amp;playlist='.$youtube_height.'&amp;rel=1&amp;showinfo='.$y_title.'&amp;theme='.$y_theme.'&amp;" frameborder="0" allowfullscreen="true"></iframe>
		  </div>';
	return $out;
}
add_shortcode( 'weblizar_youtube', 'esweblizar_youtube_shortcode_element' );

/*-----------vimeo-----------*/
function esweblizar_vimeo_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'vimeo_width' => '600',
				'vimeo_height' => '400',
				'v_autoplay' => '1',
				'v_class' => '',
				'v_url'=> '',
				),$atts
			);
	$v_autoplay = $atts['v_autoplay'];
	$vimeo_width = $atts['vimeo_width'];
	$vimeo_height = $atts['vimeo_height'];
	$v_class = $atts ['v_class'];
	$v_url = $atts ['v_url'];

	$out='<div class="weblizar_vimeo vimeo_responsive '.$v_class.'">
			<iframe width="'.$vimeo_width.'" height="'.$vimeo_height.'" src="//player.vimeo.com/video/244125158?title=1&amp;byline=1&amp;portrait=1&amp;color=f74633&amp;autoplay='.$v_autoplay.'" frameborder="0" allowfullscreen="true"></iframe>
		  </div>';
	return $out;
}
add_shortcode( 'vimeo', 'esweblizar_vimeo_shortcode_element' );

/*-----------Quote short code-----------*/
function esweblizar_quote_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'quote_text' => 'Please enter text in quote text',
				'quote_url'=>'',
				'quote_class'=> '',
				'author_nmae'=> '',

				),$atts
			);
	$quote_class = $atts['quote_class'];
	$quote_text = $atts['quote_text'];
	$quote_url = $atts ['quote_url'];
	$author_nmae =$atts['author_nmae'];
	$out='<div class="weblizar_quote_shortcode '.$quote_class.'">
			<div class="qoute_inner">
				'.$quote_text.'
				<span class="quote-cite">
					<a href="'.$quote_url.'" target="_blank">'.$author_nmae.'</a>
				</span>
			</div>
		</div>';
	return $out;
}
add_shortcode( 'quote', 'esweblizar_quote_shortcode_element' );

/*-----------Google map short code-----------*/
function esweblizar_gmap_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'g_height' => '400',
				'map_id'=>'',
				'g_class'=> '',
				'g_width'=> '600',
				'g_style' => 'retro',
				'g_zoom' => '14',
				'g_image' => '0',
				),$atts
			);
	$g_class = $atts['g_class'];
	$g_height = $atts['g_height'];
	$map_id = $atts ['map_id'];
	$g_width =$atts['g_width'];
	$g_style = $atts ['g_style'];
	$g_zoom =$atts['g_zoom'];
	$g_image =$atts['g_image'];
	$google_api=get_option('google_api');
	$rand = rand(1, 100);

	$map_location= $map_id;
    $map_axes= str_replace(array('(',')'), '', $map_location);
    $map_diamention= explode(', ', $map_axes);

	$out='<style> #map { height: '.$g_height.'px; width: '.$g_width.'px; } </style>
			<div class="weblizar_gmap gmap_responsive '.$g_class.'" id="map">
		  	</div>
		  <script>
		  var image;
		  var marker;
		      function initMap() {
		        var uluru = {lat: '.$map_diamention[0].', lng: '.$map_diamention[1].'};
		        var map = new google.maps.Map(document.getElementById("map"), {
		          zoom: '.$g_zoom.',
		          center: uluru,
		          mapTypeControlOptions: {
		            mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain",
		                    "styled_map"]
		          }
		        });

		        // Set the map"s style to the initial value of the selector.
		        var styleSelector = document.getElementById("style-selector");
		        map.setOptions({styles: styles["'.$g_style.'"]});';
		if($g_image!='0') {
		$out.= 'image = "'.$g_image.'";
				  var beachMarker = new google.maps.Marker({
				    position: {lat: '.$map_diamention[0].', lng: '.$map_diamention[1].'},
				    map: map,
				    draggable: true,
	    			animation: google.maps.Animation.DROP,
				    icon: image
				  });';
		} else {
		$out.=	'marker = new google.maps.Marker({
			         draggable: true,
	    			 animation: google.maps.Animation.DROP,
			         position: uluru,
			         map: map,
		        });
		        marker.addListener("click", toggleBounce);';
				}


		$out.= '}';
		if($g_image=='0') {
		$out.=	'function toggleBounce() {
					  if (marker.getAnimation() !== null) {
					    marker.setAnimation(null);
					  } else {
					    marker.setAnimation(google.maps.Animation.BOUNCE);
					  }
					}';
		}
		$out.= 'var styles = {
        default: null,
        silver: [
          {
            elementType: "geometry",
            stylers: [{color: "#f5f5f5"}]
          },
          {
            elementType: "labels.icon",
            stylers: [{visibility: "off"}]
          },
          {
            elementType: "labels.text.fill",
            stylers: [{color: "#616161"}]
          },
          {
            elementType: "labels.text.stroke",
            stylers: [{color: "#f5f5f5"}]
          },
          {
            featureType: "administrative.land_parcel",
            elementType: "labels.text.fill",
            stylers: [{color: "#bdbdbd"}]
          },
          {
            featureType: "poi",
            elementType: "geometry",
            stylers: [{color: "#eeeeee"}]
          },
          {
            featureType: "poi",
            elementType: "labels.text.fill",
            stylers: [{color: "#757575"}]
          },
          {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [{color: "#e5e5e5"}]
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.fill",
            stylers: [{color: "#9e9e9e"}]
          },
          {
            featureType: "road",
            elementType: "geometry",
            stylers: [{color: "#ffffff"}]
          },
          {
            featureType: "road.arterial",
            elementType: "labels.text.fill",
            stylers: [{color: "#757575"}]
          },
          {
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [{color: "#dadada"}]
          },
          {
            featureType: "road.highway",
            elementType: "labels.text.fill",
            stylers: [{color: "#616161"}]
          },
          {
            featureType: "road.local",
            elementType: "labels.text.fill",
            stylers: [{color: "#9e9e9e"}]
          },
          {
            featureType: "transit.line",
            elementType: "geometry",
            stylers: [{color: "#e5e5e5"}]
          },
          {
            featureType: "transit.station",
            elementType: "geometry",
            stylers: [{color: "#eeeeee"}]
          },
          {
            featureType: "water",
            elementType: "geometry",
            stylers: [{color: "#c9c9c9"}]
          },
          {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [{color: "#9e9e9e"}]
          }
        ],

        night: [
          {elementType: "geometry", stylers: [{color: "#242f3e"}]},
          {elementType: "labels.text.stroke", stylers: [{color: "#242f3e"}]},
          {elementType: "labels.text.fill", stylers: [{color: "#746855"}]},
          {
            featureType: "administrative.locality",
            elementType: "labels.text.fill",
            stylers: [{color: "#d59563"}]
          },
          {
            featureType: "poi",
            elementType: "labels.text.fill",
            stylers: [{color: "#d59563"}]
          },
          {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [{color: "#263c3f"}]
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.fill",
            stylers: [{color: "#6b9a76"}]
          },
          {
            featureType: "road",
            elementType: "geometry",
            stylers: [{color: "#38414e"}]
          },
          {
            featureType: "road",
            elementType: "geometry.stroke",
            stylers: [{color: "#212a37"}]
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [{color: "#9ca5b3"}]
          },
          {
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [{color: "#746855"}]
          },
          {
            featureType: "road.highway",
            elementType: "geometry.stroke",
            stylers: [{color: "#1f2835"}]
          },
          {
            featureType: "road.highway",
            elementType: "labels.text.fill",
            stylers: [{color: "#f3d19c"}]
          },
          {
            featureType: "transit",
            elementType: "geometry",
            stylers: [{color: "#2f3948"}]
          },
          {
            featureType: "transit.station",
            elementType: "labels.text.fill",
            stylers: [{color: "#d59563"}]
          },
          {
            featureType: "water",
            elementType: "geometry",
            stylers: [{color: "#17263c"}]
          },
          {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [{color: "#515c6d"}]
          },
          {
            featureType: "water",
            elementType: "labels.text.stroke",
            stylers: [{color: "#17263c"}]
          }
        ],

        retro: [
          {elementType: "geometry", stylers: [{color: "#ebe3cd"}]},
          {elementType: "labels.text.fill", stylers: [{color: "#523735"}]},
          {elementType: "labels.text.stroke", stylers: [{color: "#f5f1e6"}]},
          {
            featureType: "administrative",
            elementType: "geometry.stroke",
            stylers: [{color: "#c9b2a6"}]
          },
          {
            featureType: "administrative.land_parcel",
            elementType: "geometry.stroke",
            stylers: [{color: "#dcd2be"}]
          },
          {
            featureType: "administrative.land_parcel",
            elementType: "labels.text.fill",
            stylers: [{color: "#ae9e90"}]
          },
          {
            featureType: "landscape.natural",
            elementType: "geometry",
            stylers: [{color: "#dfd2ae"}]
          },
          {
            featureType: "poi",
            elementType: "geometry",
            stylers: [{color: "#dfd2ae"}]
          },
          {
            featureType: "poi",
            elementType: "labels.text.fill",
            stylers: [{color: "#93817c"}]
          },
          {
            featureType: "poi.park",
            elementType: "geometry.fill",
            stylers: [{color: "#a5b076"}]
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.fill",
            stylers: [{color: "#447530"}]
          },
          {
            featureType: "road",
            elementType: "geometry",
            stylers: [{color: "#f5f1e6"}]
          },
          {
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [{color: "#fdfcf8"}]
          },
          {
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [{color: "#f8c967"}]
          },
          {
            featureType: "road.highway",
            elementType: "geometry.stroke",
            stylers: [{color: "#e9bc62"}]
          },
          {
            featureType: "road.highway.controlled_access",
            elementType: "geometry",
            stylers: [{color: "#e98d58"}]
          },
          {
            featureType: "road.highway.controlled_access",
            elementType: "geometry.stroke",
            stylers: [{color: "#db8555"}]
          },
          {
            featureType: "road.local",
            elementType: "labels.text.fill",
            stylers: [{color: "#806b63"}]
          },
          {
            featureType: "transit.line",
            elementType: "geometry",
            stylers: [{color: "#dfd2ae"}]
          },
          {
            featureType: "transit.line",
            elementType: "labels.text.fill",
            stylers: [{color: "#8f7d77"}]
          },
          {
            featureType: "transit.line",
            elementType: "labels.text.stroke",
            stylers: [{color: "#ebe3cd"}]
          },
          {
            featureType: "transit.station",
            elementType: "geometry",
            stylers: [{color: "#dfd2ae"}]
          },
          {
            featureType: "water",
            elementType: "geometry.fill",
            stylers: [{color: "#b9d3c2"}]
          },
          {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [{color: "#92998d"}]
          }
        ],

        hiding: [
          {
            featureType: "poi.business",
            stylers: [{visibility: "off"}]
          },
          {
            featureType: "transit",
            elementType: "labels.icon",
            stylers: [{visibility: "off"}]
          }
        ]
      };
      function toggleBounce() {
		  if (image.getAnimation() !== null) {
		    image.setAnimation(null);
		  } else {
		    image.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key='.$google_api['google_api'].'&callback=initMap">
	    </script>';
	return $out;
}
add_shortcode( 'gmap', 'esweblizar_gmap_shortcode_element' );

/*-----------spacer short code-----------*/
function esweblizar_spacer_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'quote_text' => 'Please enter text in quote text',
				'quote_url'=>'',
				'spacer_class'=> '',
				'spaceheight'=> '20',

				),$atts
			);
	$spacer_class = $atts['spacer_class'];
	$spaceheight =$atts['spaceheight'];

	$out='<div class="weblizar_shortcode_spacer spacer '.$spacer_class.'" style="height:'.$spaceheight.'px"></div>';
	return $out;
}
add_shortcode( 'spacer', 'esweblizar_spacer_shortcode_element' );

/*-----------Dropcap-----------*/
function esweblizar_dropcp_shortcode_element( $atts, $content = null ){
    $atts = shortcode_atts(array(
		'dropcp_style'=>'weblizar_dropcape_simple',
		'dropcp_text'=>'hasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet Vix sumo ferri an. pfs adodio fugit delenit ut qu.',
		'dropcp_first_letter' => 'P',
		'dropcp_class' => '',
		'bg_color' => '',
    'color' => '',
		'echo'=>false,
		),
      $atts );

	$dropcp_text = $atts['dropcp_text'];
    $color = $atts['color'];
    $bg_color = $atts['bg_color'];
	$dropcp_class = $atts['dropcp_class'];
	$dropcp_style = $atts ['dropcp_style'];
	$dropcp_first_letter = $atts ['dropcp_first_letter'];
	$out='<p class="'.$dropcp_style.' '.$dropcp_class.'">
		  	<span class="firstLetter" style="background-color:'.$bg_color.';color:'.$color.'">'.$dropcp_first_letter.'</span><span>'.$dropcp_text.'</span>
		  </p>';
	return $out;
}
add_shortcode( 'dropcap', 'esweblizar_dropcp_shortcode_element' );


/******* heading shortcode **********/
function esweblizar_heading_function_element ($atts , $content = null)
{
	$atts= shortcode_atts(array (
						'title' => '',
						'fontsize'=>'50' ,
						'align' =>'center' ,
						'margin' => '30',
						'css_class' => '',
            'color' => '',
            'font_weight' => '400',
					),$atts );

	$font_weight = $atts['font_weight'];
  $title = $atts['title'];
  $color = $atts['color'];
	$fontsize = $atts['fontsize'];
	$align = $atts['align'];
	$margin = $atts['margin'];
	$css_class = $atts['css_class'];

	$out ='<div class="weblizar-heading weblizar-heading-style-default weblizar-heading-align-center" style="margin-bottom:'.$margin.'px;text-align:'.$align.';">
			   <div class="weblizar-heading-inner">
			   		<h2 class="'.$css_class.'" style="color:'.$color.';margin-bottom: 0px;font-weight:'.$font_weight.';font-size:'.$fontsize.'px;">'.$title.'</h2>
			   </div>
		   </div>';
	return $out;
}
add_shortcode('heading','esweblizar_heading_function_element');

/******* frame shortcode **********/
function esweblizar_frame_function_element ($atts , $content = null)
{
	$atts= shortcode_atts(array (
						'title' => '',
						'frame_content' =>'',
						'align' =>'center' ,
						'margin' => '30',
						'css_class' => '',
				),$atts );
	$frame_content = $atts['frame_content'];
	$title = $atts['title'];
	$align = $atts['align'];
	$css_class = $atts['css_class'];
	$out ='<style>';
	if($align=='right'){
	$out .='.weblizar_frame_shotcode{ float: left;margin:0em 0em 10em 17em; }';
	}elseif ($align=='left') {
	$out .='.weblizar_frame_shotcode{ float: right;margin: 0em 17em 7em 0; }';
	} 
	$out .='</style>
	<span class="weblizar_frame_shotcode '.$css_class.'" >
				<span class="frame">
					<img style="border: 1px solid #6d6c6cb3;padding:4px;border-radius: 4px;-webkit-box-shadow: 1px 2px 8px 0px rgba(30, 37, 54, 0.7);" class="frame_image img-responsive" 
					 src="'.$frame_content.'" alt="'.$title.'">
				</span>

			</span>';
	return $out;
}
add_shortcode('frame','esweblizar_frame_function_element');
/******* note shortcode **********/
function esweblizar_note_function_element ($atts , $content = null)
{
	$atts= shortcode_atts(array (
						'note_class' =>'',
						'note_text' =>'' ,
            			'color' => '',
				),$atts );
	$note_text = $atts['note_text'];
	$note_class = $atts['note_class'];
  $color = $atts['color'];
	$out ='<div class="weblizar_note_shortcode '.$note_class.'" style="background-color:'.$color.';border-radius:6px;-moz-border-radius:6px;">
				<div class="note_inner_class">
					<span><b>Note:- </b> </span>'.$note_text.'
				</div>
			</div>';
	return $out;
}
add_shortcode('note','esweblizar_note_function_element');
/*--------------------------------------*/
/*	Accordian
/*--------------------------------------*/
function esweblizar_accordion_shortcode_element( $atts, $content = null ) {
	$atts = shortcode_atts(  array(
							'fields'=>'1',
							'accordian_title' => 'Accordions title',
							'accordian_text'=>'Accordions Description',
							'custom_class' => ' ',
							'echo'=>false,
							),$atts
						);
	$fields = $atts['fields'];
	$accordian_title = $atts['accordian_title'];
	$title = explode('~', $accordian_title);
	$accordian_text = $atts ['accordian_text'];
	$text = explode('~', $accordian_text);
	$rand = rand(1, 100);

	$out ='';
	$out .='<div class="panel-group weblizar_accordion" id="accordion-'.$rand.'" role="tablist" aria-multiselectable="true">';
	for($i=1; $i<=$fields; $i++)
	{
		if($i=='1')
		{ $out .='<div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading-'.$i.'">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion-'.$rand.'" href="#collapse-'.$rand.'-'.$i.'" aria-expanded="true" aria-controls="collapse-'.$rand.'-'.$i.'">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        '.$title[$i].'
                    </a>
                </h4>
            </div>
            <div id="collapse-'.$rand.'-'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-'.$i.'">
                <div class="panel-body">'.$text[$i].'</div>
            </div>
        </div>';
		}
		else{
		$out .='<div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading-'.$i.'">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-'.$rand.'" href="#collapse-'.$rand.'-'.$i.'" aria-expanded="false" aria-controls="collapse-'.$rand.'-'.$i.'">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        '.$title[$i].'
                    </a>
                </h4>
            </div>
            <div id="collapse-'.$rand.'-'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">'.$text[$i].'</div>
            </div>
        </div>';
		}
	}
	$out .='</div>';
	return $out;
}
add_shortcode('accordian', 'esweblizar_accordion_shortcode_element');

/************* Tab shortcode **********/
function esweblizar_tabs_shortcode_element($atts, $content = null ){
	$atts = shortcode_atts(array('tabs_style'=>'1', 'tab_title' => 'This is tabs heading','fields' => '1','tab_text' => 'Description','echo'=>false), $atts );
  $fields = $atts['fields'];
  $tabs_style = $atts['tabs_style'];
  $tab_title = $atts['tab_title'];
	$title = explode('~', $tab_title);
	$tab_text = $atts ['tab_text'];
	$text = explode('~', $tab_text);
  $rand = rand(1, 100);
  if ($tabs_style=='1') {
  $out ='<div class="weblizar_style1">
          <!-- Nav tabs --><div class="card">
          <ul class="nav nav-tabs" role="tablist">';
  for ($i=1; $i <= $fields; $i++) {
    if ($i==1) {
    $out .='    <li role="presentation" class="active"><a href="#tab-'.$rand.'-'.$i.'" aria-controls="tab-'.$rand.'-'.$i.'" role="tab" data-toggle="tab">'.$title[$i].'</a></li>';
  } else {
    $out .='   <li role="presentation"><a href="#tab-'.$rand.'-'.$i.'" aria-controls="tab-'.$rand.'-'.$i.'" role="tab" data-toggle="tab">'.$title[$i].'</a></li>';
  }
  }
  $out .='</ul>
          <!-- Tab panes -->
          <div class="tab-content">';
  for ($i=1; $i <= $fields; $i++) {
    if ($i==1) {
  $out .='<div role="tabpanel" class="tab-pane active" id="tab-'.$rand.'-'.$i.'">'.$text[$i].'</div>';
  } else {
  $out .='<div role="tabpanel" class="tab-pane" id="tab-'.$rand.'-'.$i.'">'.$text[$i].'</div>';
  }
  }
  $out .='</div></div></div>';
  }
  else {
    $out ='<div class="weblizar_style2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">';
                        for ($i=1; $i <= $fields; $i++) {
                          if ($i==1) {
                        $out .='<li class="active"><a href="#tab-'.$rand.'-'.$i.'" data-toggle="tab">'.$title[$i].'</a></li>';
                        } else {
                        $out .='<li><a href="#tab-'.$rand.'-'.$i.'" data-toggle="tab">'.$title[$i].'</a></li>';
                        }
                        }
                        $out .='</ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">';
                    for ($i=1; $i <= $fields; $i++) {
                      if ($i==1) {
                        $out .='<div class="tab-pane active" id="tab-'.$rand.'-'.$i.'">'.$text[$i].'</div>';
                      } else {
                        $out .='<div class="tab-pane" id="tab-'.$rand.'-'.$i.'">'.$text[$i].'</div>';
                      }
                      }
                    $out .='</div>
                </div>
            </div>
        </div>';
  }
  return $out;
}
add_shortcode( 'tabs', 'esweblizar_tabs_shortcode_element' );
/*-----------Alert short code-----------*/

/*-----------panel short code-----------*/
function esweblizar_panle_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'panel_heading' => '',
							'panel_text' => 'Please enter text in panel text',
							'panel_color'=>'panel-default',
							'panel_class' => '',
              'color' => '',
							),$atts
						);
	$panel_heading = $atts['panel_heading'];
	$panel_class =$atts['panel_class'];
	$panel_text = $atts['panel_text'];
  $color = $atts['color'];
	$panel_color = $atts ['panel_color'];
	if($panel_heading!=''){
		$out='<div class="panel weblizar_panel '.$panel_class.'">
			<div class="panel-heading '.$panel_color.'" style="background-color:'.$color.';color:#fff;">'.$panel_heading.'</div>
			<div class="panel-body">'.$panel_text.' </div>
		</div>';
	} else
	{
		$out = '<div class="weblizar card '.$panel_color.' text-center z-depth-2 '.$panel_class.'">
		            <div class="card-body">
		                <p class="white-text mb-0">'.$panel_text.'</p>
		            </div>
		        </div>';
	}
	return $out;
}
add_shortcode('panel', 'esweblizar_panle_shortcode_element' );
/*-----------PROGRESS BARSt code-----------*/
function esweblizar_progressbar_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'progress_heading' => 'Please enter progress heading',
							'progress_percentag' => '85',
							'progress_color' =>'Select Color',
              'progress_class' => '',
              'color' => '',
							),$atts
						);
	$progress_heading = $atts['progress_heading'];
  $progress_class = $atts['progress_class'];
  $color = $atts['color'];
	$progress_percentag = $atts['progress_percentag'];
	$progress_color = $atts['progress_color'];
	$out='<div class="weblizar_process '.$progress_class.'">
				<p>'.$progress_heading .' '. $progress_percentag.'%</p>
				<div class="progress progress-striped ">
				  <div class="progress-bar '.$progress_color .' progress-bar-striped active"  role="progressbar" aria-valuenow="'.$progress_percentag.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$progress_percentag.'%!important;background-color:'.$color.'!important;border-radius: 0!important;">
				  </div>
				</div>
			</div>';
	return $out;
}
add_shortcode('progressbar', 'esweblizar_progressbar_shortcode_element' );
/*----------- tooltip code-----------*/
function esweblizar_tooltip_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts( array(
	'tooltip_text' => 'tool tip Text',
	'tooltip_over_text' => 'tool tip title',
	'tooltip_style' => 'top',
	'tooltip_class' => '',
  'color' => '',
	'toolstyle' => 'btn-primary',
	'border_tool' => '',
	), $atts );
	$tooltip_text = $atts['tooltip_text'];
	$tooltip_class = $atts['tooltip_class'];
	$tooltip_over_text = $atts['tooltip_over_text'];
  $color = $atts['color'];
	$tooltip_style = $atts['tooltip_style'];
	$toolstyle = $atts['toolstyle'];
	$border_tool =$atts['border_tool'];
	$out= '<a style="background-color:'.$color.';" class="weblizar_toottip btn '.$toolstyle.' '.$border_tool.' waves-effect '.$tooltip_class.'" href="#" data-toggle="tooltip" data-placement="'.$tooltip_style .'" title="'.$tooltip_over_text .'">'.$tooltip_text.'</a>';
	return $out;
}
add_shortcode('tooltip', 'esweblizar_tooltip_shortcode_element' );

/*----------- POPOVERS  shortcode code-----------*/
function esweblizar_popover_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'popover_text' => 'Popover on top',
							'popover_over_text' => 'Popover on top',
							'popover_style' => 'top',
							'pop_class' => '',
							'pop_border' => '',
							'color' => '',
							'popstyle' => 'btn-tool',
							),$atts
						);
	$popover_text = $atts['popover_text'];
    $color = $atts['color'];
	$popover_over_text = $atts['popover_over_text'];
	$popover_style = $atts['popover_style'];
	$popstyle = $atts['popstyle'];
	$pop_border = $atts['pop_border'];
	$pop_class = $atts['pop_class'];
	$out='<button style="background-color:'.$color.';" class="weblizar_popover btn '.$popstyle.' '.$pop_border.' .waves-effect '.$pop_class.'" data-toggle="popover" data-placement="'.$popover_style .'" title="" data-content="'.$popover_over_text .'" >'.$popover_text .'</button>';
	return $out;
}
add_shortcode('popover', 'esweblizar_popover_shortcode_element' );

/*----------- Heighlighter  shortcode code-----------*/
function esweblizar_heighlighter_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'heighliter_text' => 'Heighlighter text',
							'light_class' => '',
							'color' => '',
							'bg_color' => '',
							),$atts
						);
	$heighliter_text = $atts['heighliter_text'];
    $color = $atts['color'];
    $bg_color = $atts['bg_color'];
	$light_class = $atts['light_class'];
	$out='<span style="background-color:'.$color.';color:'.$bg_color.';" class="'.$light_class.'">'.$heighliter_text .'</span>';
	return $out;
}
add_shortcode('heighlighter', 'esweblizar_heighlighter_shortcode_element' );

/* Blog */
function esweblizar_blog_shortcode_element($atts, $content = null ){ ob_start();
	$atts = shortcode_atts(
	array('blog_cat_name' =>'all',
	'blog_type'=>'2',
	'blog_cat_show'=>'yes'), $atts );
	$blog_type = $atts['blog_type'];
	$blog_cat_show = $atts['blog_cat_show'];
	$blog_cat_name = $atts['blog_cat_name'];
	$blog_cat_name1 =$blog_cat_name;
	$blog_cat_name = explode(",", $blog_cat_name);
	?>
	<div class="weblizar_post_shortcode">
		<div class=" gallary-3">
		<?php $categories = get_categories( array('orderby' => 'name') ); ?>
			<div class=" gallary animate-grid">
					<?php 	if($blog_cat_show=='yes' ) { ?>
					<div class="weblizar categoriess">
						<ul id="mytabs" class="news-tabs gallery2">
							<li class="">
								<a class="active" data-filter="*" href="#">All</a>
							</li>
							<?php $count=1;
							foreach ($blog_cat_name  as $tax_term) {
							$tax_term_name = str_replace(' ', '_', $tax_term);
							$tax_term_name = preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term_name); ?>
							<li>
							<a data-filter=".cat-<?php echo esc_html( $tax_term ); ?>" href="#"><?php echo get_the_category_by_ID( $tax_term ); ?></a>
							</li>
							<?php } ?>
						</ul>
					</div>	<?php } ?>
				<div class="gallary-thumbs row lightgallery  wow fadeInUp" data-wow-delay="0.6s" id="main">
				<?php
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				$custom_args = array(
				      'post_type' => 'post',
				      'posts_per_page' => -1,
				      'cat' => $blog_cat_name
				    );
				$custom_query = new WP_Query( $custom_args );
				if ( $custom_query->have_posts() ) {
				$count=1;
				while ($custom_query->have_posts()): $custom_query->the_post();
					$categories = get_the_terms( $post->ID, 'category' );
					if($blog_type=='2')
	                {
	                	$col='6';
	                } elseif ($blog_type=='3') {
	                	$col='4';
	                } elseif ($blog_type=='4') {
	                	$col='3';
	                }
	                 ?>
						<div class="col-lg-<?php echo $col; ?> col-md-<?php echo $col; ?> col-sm-4 col-xs-12 allwork space-1 <?php foreach ( $categories as $category ) { echo 'cat-'.$category->term_id.' '; } ?> ">
							<div class=" socialmedia isotop-gallery">
								<?php if(has_post_thumbnail()){ ?>
								<div class="socialmedia-inner">
									<?php $default=array('class' => "img-responsive"); the_post_thumbnail('medium',$default);  ?>
								</div>
								<?php } ?>
								<div class="overlap-11">
									<a href="<?php the_permalink(); ?>"><h2 class="blog_template4_title"><?php the_title(); ?></h2></a>
									<p>
									<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span>
									<span><?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
									<?php echo get_the_date('F d ,Y'); ?>
									<?php else : ?>
									<?php echo get_the_date(); ?>
									<?php endif; ?></span>
									<span><?php $pid = get_the_ID(); $args = array('post_id' => $pid,'count' => true ); $comments = get_comments($args); echo $comments ?> Comments</span>
									</p>
									<span class="shortcode_blog_content"><?php the_excerpt(); ?> </span>
								</div>
							</div>
						</div>
					<?php if($blog_type=='2')
	                {
	                	if($count%2==0){ echo '<div class="col-md-12"></div>'; }  $count++;
	                } elseif ($blog_type=='3') {
	                	if($count%3==0){ echo '<div class="col-md-12"></div>'; }  $count++;
	                }
					 endwhile; } ?>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<div class="clearfix"></div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'blog_post', 'esweblizar_blog_shortcode_element' );

/* audio */
function esweblizar_audio_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'audio_heading' => '',
							'audio_content' => '',
							'audio_class' => '',
							),$atts
						);
	$audio_heading = $atts['audio_heading'];
	$audio_content = $atts['audio_content'];
	$audio_class =$atts['audio_class'];
	if($audio_heading!=''){
		$out='<div class="audio weblizar_audio '.$audio_class.'">
			<div class="audio-heading" style="">'.$audio_heading.'</div>
			<audio controls><source src="'.$audio_content.'" type="audio/mp3"> </audio>
		</div>';
	} else
	{
		$out='<div class="audio weblizar_audio '.$audio_class.'">
			<div class="audio-heading" style="">'.$audio_heading.'</div>
			<audio controls><source src="'.$audio_content.'" type="audio/ogg"> </audio>
		</div>';
	}
	return $out;
}
add_shortcode('audio', 'esweblizar_audio_shortcode_element' );

/*-----------documents-----------*/
function esweblizar_doc_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(
		array(
				'documents_width' => '600',
				'documents_height' => '400',
				'documents_class' => '',
				'doc_value' => '',
				),$atts
			);
	$doc_value = $atts['doc_value'];
	$documents_width = $atts['documents_width'];
	$documents_height = $atts['documents_height'];
	$documents_class = $atts ['documents_class'];

	$out='<div class="documents '.$documents_class.'">
			<iframe src="//docs.google.com/viewer?embedded=true&url='.$doc_value.'" width="'.$documents_width.'" height="'.$documents_height.'"></iframe>
		  </div>';
	return $out;
}
add_shortcode( 'shotcode_doc', 'esweblizar_doc_shortcode_element' );

/* expand */
function esweblizar_expand_shortcode_element( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'expand_heading' => '',
							'less_content' => '',
							'more_content' => '',
							'show_more_title' => 'Show more',
							'show_less_title' => 'Show less',
							'expend_class' => '',
							),$atts
						);
	$expand_heading = $atts['expand_heading'];
	$less_content = $atts['less_content'];
	$more_content =$atts['more_content'];
	$show_more_title =$atts['show_more_title'];
	$show_less_title =$atts['show_less_title'];
	$expend_class =$atts['expend_class']; ?>
		<style>
		.read-more-state {
		  display: none;
		}

		.read-more-target {
		  opacity: 0;
		  max-height: 0;
		  font-size: 0;
		  transition: .25s ease;
		}

		.read-more-state:checked ~ .read-more-wrap .read-more-target {
		  opacity: 1;
		  font-size: inherit;
		  max-height: 999em;
		}

		.read-more-state ~ .read-more-trigger:before {
		  content: '<?php if($show_more_title!='') echo $show_more_title; else echo 'Show more'; ?>';
		}

		.read-more-state:checked ~ .read-more-trigger:before {
		  content: '<?php if($show_less_title!='') echo $show_less_title; else echo 'Show less'; ?>';
		}

		.read-more-trigger {
			background-color: #31a3dd;
		  cursor: pointer;
		  display: inline-block;
		  padding: 0 .5em;
		  color: #fff;
		  font-size: 17px;
		  line-height: 2;
		  border: 1px solid #ddd;
		}
		</style>
<?php	if($expand_heading!=''){
		$out='<div class="expand '.$expend_class.'">
		<div class="expand-heading" style="">'.$expand_heading.'</div>
		<input type="checkbox" class="read-more-state" id="post-1" />
		<p class="read-more-wrap">'.$less_content.'<span class="read-more-target">'.$more_content.'</span></p>
		<label for="post-1" class="read-more-trigger"></label>
		</div>';
	} else
	{
		$out='<div class="'.$expend_class.'">
		<div class="expand-heading" style="">'.$expand_heading.'</div>
		<input type="checkbox" class="read-more-state" id="post-1" />
		<p class="read-more-wrap">'.$less_content.'<span class="read-more-target">'.$more_content.'</span></p>
		<label for="post-1" class="read-more-trigger"></label>
		</div>';
	}
	return $out;
}
add_shortcode('expand', 'esweblizar_expand_shortcode_element' ); ?>