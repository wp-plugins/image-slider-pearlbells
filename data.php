<?php
class pearlImageSliderData {
    
        public function __construct() {
           
            add_shortcode('pearl_Image_Slider_display', array($this,'pearl_Image_Slider_getImage'));
        }
    
	function pearl_Image_Slider_getImage($atts, $content = null)
	{
		$images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . get_the_id() );
		$i=1;
		$charater_length = get_option('pearl_Title_Character_Length');
		$pearl_caption = get_option('pearl_caption');
		$pearl_transition_type = get_option('pearl_transition_type');;
		
		if($pearl_transition_type == 'slide')
		{
			$display_image = '<div id="pearl_Image_Slider">';
			foreach( $images as $imageID => $imagePost )
				{   
				if($i==1)
				{
					$i=0;
					$display_image .= '<div class="pearl_slides">';
				}
				else
				{
					$display_image .= '<div class="pearl_slides">';
				}
					$display_image .= wp_get_attachment_image($imageID, $size, false);	
					$title = get_the_title($imageID);
					$title_length =	strlen(get_the_title($imageID));
					if($pearl_caption =='yes')
					{
						$display_image .= '<div class="pearl_slidetext">'.substr($title,0,$charater_length);
						if($title_length>$charater_length)
						{
							$display_image .= '. . .';
							
						}
						$display_image .= '</div>';
					}
					$display_image .= '</div>';
					
				}
			$display_image .= '</div>';
		}
		else
		{ // for fade in/out
			
			$display_image = '<div id="pearl_slideshow">';
			foreach( $images as $imageID => $imagePost )
				{   
				if($i==1)
				{
					$i=0;
					$display_image .= '<div class="pearl_active">';
				}
				else
				{
					$display_image .= '<div>';
				}
					$display_image .= wp_get_attachment_image($imageID, $size, false);
					$title = get_the_title($imageID);
					$title_length =	strlen(get_the_title($imageID));
					if($pearl_caption =='yes')
					{		
						$display_image .= '<span>'.substr($title,0,$charater_length);
						if($title_length>$charater_length)
						{
							$display_image .= '. . .';
							
						}
						$display_image .= '</span>';
					}
					$display_image .= '</div>';
					
				} //end foreach
			$display_image .= '</div>';
		} // end else loop
		
		return $display_image;		
	}
}
?>
