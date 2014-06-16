<?php
class pearlImageStyleData {
    
        public function __construct() {
            
            add_action( 'wp_enqueue_scripts', array($this,'safely_add_stylesheet') );
            add_action('wp_head', array($this,'pearl_script'));
            
        }
    
        public function safely_add_stylesheet() {
            
             wp_enqueue_style( 'pearl_image_slider', plugins_url('css/pearl_Image_Slider_css.css', __FILE__) );
         }
         
	public function pearl_script()
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
	
	// Main plugin function
    
}
?>
