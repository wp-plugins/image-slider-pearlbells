<?php
class pearlImageOptionsValues {
    
    public function __construct() {
       
    }
    
    public function add_options()
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
    
    public function update_options() {
        
        $ok = false;
        $message = '';
        $optionValues = $_POST;
   
        foreach($optionValues as $key => $value){
            
          if ( get_option( $key ) !== false ) {
            update_option($key,$value);
			$ok = true;
          }
            
        }
        
        if($ok)
        {
            $message = '<div id="message" class="updated fade"><p>Options Saved</p></div>';
        }
        else
        {
            $message = '<div id="message" class="error fade"><p>Failed to save options</p></div> ';

        }
       
        echo $message;
       
        
    }
    
    public function delete_options()
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
    
   
    
}
?>
