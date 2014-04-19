<?php
/*
Plugin Name: Image Slider / Slideshow Pearlbells
Plugin URI: http://pearlbells.co.uk/
Description: Image Slider Pearlbells
Version:  2.0
Author:Pearlbells
Author URI: http://pearlbells.co.uk/contact-page
License: GPL2
*/
/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version. 

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details. 

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

*/
$pearl_Image_Slider_class = new pearl_Image_Slider_class();
class pearl_Image_Slider_class
{
	function pearl_Image_Slider_css()
	{
		$myStyleUrl = WP_PLUGIN_URL . '/image-slider-pearlbells/pearl_Image_Slider/css/pearl_Image_Slider_css.css';
        $myStyleFile = WP_PLUGIN_DIR . '/image-slider-pearlbells/pearl_Image_Slider/css/pearl_Image_Slider_css.css';
        if ( file_exists($myStyleFile) ) 
		{
            wp_register_style('myStyleSheets', $myStyleUrl);
            wp_enqueue_style( 'myStyleSheets');
        }
	}
	
	function pearl_Image_Slider_script()
	{
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
		wp_enqueue_script( 'jquery' );?>
		<script type="text/javascript">
		var $jquery = jQuery.noConflict(); 
		$jquery(document).ready(function(){
		
	 
	 var slides = $jquery('.pearl_slides'); 
	 var numberofSlides = slides.length;
	 var curposition = 0;
	 
	 var slidewidth_extract ='<?php echo get_option('pearl_Image_Slider_width');?>';
	 var slidew = parseInt(slidewidth_extract.replace("px",""));
	 var slidewidth = slidew +5;
	 var slidespeed = '<?php echo get_option('pearl_sliding_spped');?>';
	 var pearl_transition_type = '<?php echo get_option('pearl_transition_type');?>';
	 
	 
	 var slideShowInterval;
	 var $k = 1;
	 
	 if(pearl_transition_type =='slide')
	 {
		 setImageSliderStyle();
		 slideShowInterval = setInterval(PlayImage,slidespeed);
		 
	 }
	 else
	 {
		 setImageSlideshowStyle();
		 slideShowInterval = setInterval( animatefade, slidespeed );
	 }
	
	 
	function animatefade()
	{
		 var curPic =$jquery('#pearl_slideshow div.pearl_active');
		 var nexPic = curPic.next();
		 
		 if(nexPic.length==0)
		 {
			 nexPic =$jquery('#pearl_slideshow div:first');
		 }
		 
		 curPic.removeClass('pearl_active').addClass('prev').fadeOut(1000);
		 nexPic.removeClass('prev').addClass('pearl_active').fadeIn(1000);
			 
	}
	 
	 
	 function PlayImage()
	 {	 
		  if( curposition < numberofSlides - 1 && $k==1)
		 {
			 curposition ++;
			  moveSlide();
		 }
		 else
		 {		
			 $k=2;
		 }
		  
		 
		 if( curposition > 0 && $k==2)
		 {
			 curposition--;
			  moveSlide();
		 }
		 else
		 {		
			 $k=1;
		 }
	 }
	
	 function moveSlide()
	 {
		 slides.wrapAll('<div id="slidesHolder"></div>');
	     slides.css({ 'float' : 'left' });  	 
		 $jquery('#slidesHolder').css('width', slidewidth * numberofSlides);
		 $jquery('#slidesHolder').animate({'margin-left':slidewidth*(-curposition)});
		 
	 }
			
				
	});
	
	    function setImageSlideshowStyle()
		{
			var pearl_Image_Slider_height ='<?php echo get_option('pearl_Image_Slider_height');?>';
	        var pearl_Image_Slider_width ='<?php echo get_option('pearl_Image_Slider_width');?>';
			var pearl_Image_Slider_bg_color ='<?php echo get_option('pearl_Image_Slider_bg_color');?>';
			var pearl_Image_Slider_border_color ='<?php echo get_option('pearl_Image_Slider_border_color');?>';
			var pearl_Image_Slider_border_width ='<?php echo get_option('pearl_Image_Slider_border_width');?>';
			var pearl_Image_Slider_padding ='<?php echo get_option('pearl_Image_Slider_padding');?>';
			
			$jquery('#pearl_slideshow').css({
           "background-color":pearl_Image_Slider_bg_color,
		   "width":pearl_Image_Slider_width,
		   "height":pearl_Image_Slider_height,
		   "border-width":pearl_Image_Slider_border_width,
		   "border-style":"solid",
		   "border-color": pearl_Image_Slider_border_color,
		   "padding": pearl_Image_Slider_padding});
			
		}
	
		function setImageSliderStyle()
		{
			var pearl_Image_Slider_height ='<?php echo get_option('pearl_Image_Slider_height');?>';
	        var pearl_Image_Slider_width ='<?php echo get_option('pearl_Image_Slider_width');?>';
			var pearl_Image_Slider_bg_color ='<?php echo get_option('pearl_Image_Slider_bg_color');?>';
			var pearl_Image_Slider_border_color ='<?php echo get_option('pearl_Image_Slider_border_color');?>';
			var pearl_Image_Slider_border_width ='<?php echo get_option('pearl_Image_Slider_border_width');?>';
			var pearl_Image_Slider_padding ='<?php echo get_option('pearl_Image_Slider_padding');?>';
			var pearl_Slide_Direction ='<?php echo get_option('pearl_Slide_Direction');?>';
			
		   $jquery('#pearl_Image_Slider').css({
                   "background-color":pearl_Image_Slider_bg_color,
		   "width":pearl_Image_Slider_width,
		   "height":pearl_Image_Slider_height,
		   "border-width":pearl_Image_Slider_border_width,
		   "border-style":"solid",
                   "overflow":"hidden",
                   "text-align":"center",
		   "border-color": pearl_Image_Slider_border_color,
		   "padding": pearl_Image_Slider_padding});
		   
		   $jquery('#pearl_Image_Slider .pearl_slides').css({           
		   "width":pearl_Image_Slider_width,
		   "height":pearl_Image_Slider_height
		   });
			
		}
	
	 
		</script>
		<?php
		
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
	
	function pearl_Image_Slider_install()
	{
		add_option('pearl_Image_Slider_width','400px','','yes');
		add_option('pearl_Image_Slider_height','340px','','yes');
		add_option('pearl_Image_Slider_bg_color','#eeeeee','','yes');
		add_option('pearl_Image_Slider_border_color','#000000','','yes');
		add_option('pearl_Image_Slider_border_width','1px','','yes');
		add_option('pearl_Image_Slider_padding','5px','','yes');
		add_option('pearl_Title_Character_Length','15','','yes');
		add_option('pearl_sliding_spped','2000','','yes');
		add_option('pearl_caption','yes','','yes');
		add_option('pearl_transition_type','slide','','yes');
		
		
		
	}
	function pearl_Image_Slider_uninstall()
	{
		delete_option('pearl_Image_Slider_width');
		delete_option('pearl_Image_Slider_height');
		delete_option('pearl_Image_Slider_bg_color');
		delete_option('pearl_Image_Slider_border_color');
		delete_option('pearl_Image_Slider_border_width');
		delete_option('pearl_Image_Slider_padding');
		delete_option('pearl_Title_Character_Length');
		delete_option('pearl_sliding_spped');
		delete_option('pearl_caption');
		delete_option('pearl_transition_type');
	}
	
	function pearl_Image_Slider_menu()
	{
		add_options_page('Pearl Image Slider','Pearl Image Slider','manage_options',__FILE__,array('pearl_Image_Slider_class','pearl_Image_Slider_menu_page'));  
	}
	function pearl_Image_Slider_menu_page()
	{
		?>
        <div class="wrap">
           <h2>Slideshow Settings</h2>
           <?php
		       if($_REQUEST['submit'])
			   {
				   pearl_Image_Slider_class::pearl_Image_Slider_update_option();
			   }
			       pearl_Image_Slider_class::pearl_Image_Slider_print_option();
		   ?>
        </div>
        <?php
	}
	
	function pearl_Image_Slider_update_option()
	{
		$ok = false;
		
		if($_REQUEST['pearl_transition_type'])
		{
			update_option('pearl_transition_type',$_REQUEST['pearl_transition_type']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_caption'])
		{
			update_option('pearl_caption',$_REQUEST['pearl_caption']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_sliding_spped'])
		{
			update_option('pearl_sliding_spped',$_REQUEST['pearl_sliding_spped']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_Title_Character_Length'])
		{
			update_option('pearl_Title_Character_Length',$_REQUEST['pearl_Title_Character_Length']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_Image_Slider_height'])
		{
			update_option('pearl_Image_Slider_height',$_REQUEST['pearl_Image_Slider_height']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_Image_Slider_width'])
		{
			update_option('pearl_Image_Slider_width',$_REQUEST['pearl_Image_Slider_width']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_Image_Slider_border_color'])
		{
			update_option('pearl_Image_Slider_border_color',$_REQUEST['pearl_Image_Slider_border_color']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_Image_Slider_border_width'])
		{
			update_option('pearl_Image_Slider_border_width',$_REQUEST['pearl_Image_Slider_border_width']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_Image_Slider_bg_color'])
		{
			update_option('pearl_Image_Slider_bg_color',$_REQUEST['pearl_Image_Slider_bg_color']);
			$ok = true;
			
		}
		if($_REQUEST['pearl_Image_Slider_padding'])
		{
			update_option('pearl_Image_Slider_padding',$_REQUEST['pearl_Image_Slider_padding']);
			$ok = true;
			
		}
		
		
		if($ok)
		{?>
           <div id="message" class="updated fade">
           <p>Options Saved</p>
           </div>
        <?php
		}
		else
		{
			?>
           <div id="message" class="error fade">
           <p>Failed to save options</p>
           </div>
        <?php
		}
	}
	
	function pearl_Image_Slider_print_option()
	{
		include 'pearl_Image_Slider_admin.php';
	}
	
}
add_action('admin_menu',array($pearl_Image_Slider_class,'pearl_Image_Slider_menu'));
add_action('wp_print_styles', array($pearl_Image_Slider_class,'pearl_Image_Slider_css'));
add_action('wp_head', array($pearl_Image_Slider_class,'pearl_Image_Slider_script'));
add_shortcode('pearl_Image_Slider_display', array($pearl_Image_Slider_class,'pearl_Image_Slider_getImage'));
register_activation_hook(__FILE__,array($pearl_Image_Slider_class,'pearl_Image_Slider_install'));
register_deactivation_hook(__FILE__,array($pearl_Image_Slider_class,'pearl_Image_Slider_uninstall'));
?>