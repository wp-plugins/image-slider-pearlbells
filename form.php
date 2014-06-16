<?php
class pearlDisplayForm {
    
    public function __construct() {
        
        $this->optionsForm();
        $this->authorDetails();
    }
    
  
    
    public function optionsForm() {
        
          $default_pearl_Image_Slider_height = get_option('pearl_Image_Slider_height');
          $default_pearl_Image_Slider_width = get_option('pearl_Image_Slider_width');
	  $default_pearl_Image_Slider_bg_color = get_option('pearl_Image_Slider_bg_color');
          $default_pearl_Image_Slider_border_color = get_option('pearl_Image_Slider_border_color');
	  $default_pearl_Image_Slider_border_width = get_option('pearl_Image_Slider_border_width');
	  $default_pearl_Image_Slider_padding = get_option('pearl_Image_Slider_padding');
	  $default_pearl_Title_Character_Length = get_option('pearl_Title_Character_Length');
	  $default_pearl_sliding_speed = get_option('pearl_sliding_spped');
	  $default_pearl_caption = get_option('pearl_caption');
	  $default_pearl_transition_type = get_option('pearl_transition_type');
          
          $displayOptionsForm = '
                
           <form method="post" action="'.$PHP_SELF.'">

           <label for="pearl_Image_Slider_width">Width :</label>
           <input type="text" name="pearl_Image_Slider_width" value="'.$default_pearl_Image_Slider_width.'"/>
           <label for="pearl_Image_Slider_height">Height :</label>
           <input type="text" name="pearl_Image_Slider_height" value="'.$default_pearl_Image_Slider_height.'"/><br/>
           <label for="pearl_Image_Slider_border_width">Border Width :</label>
           <input type="text" name="pearl_Image_Slider_border_width" value="'.$default_pearl_Image_Slider_border_width.'"/>
           <label for="pearl_Image_Slider_border_color">Border Color :</label>
           <input type="text" name="pearl_Image_Slider_border_color" value="'.$default_pearl_Image_Slider_border_color.'"/><br/>
           <label for="pearl_Image_Slider_bg_color">Background Color :</label>
           <input type="text" name="pearl_Image_Slider_bg_color" value="'.$default_pearl_Image_Slider_bg_color.'"/>
           <label for="pearl_Image_Slider_padding">Padding :</label>
           <input type="text" name="pearl_Image_Slider_padding" value="'.$default_pearl_Image_Slider_padding.'"/><br/>
           <label for="pearl_Title_Character_Length">No of Character (Title) :</label>
           <input type="text" name="pearl_Title_Character_Length" value="'.$default_pearl_Title_Character_Length.'"/>
           <label for="pearl_sliding_spped">Speed :</label>
           <input type="text" name="pearl_sliding_spped" value="'.$default_pearl_sliding_speed.'"/><br/>
           <label for="pearl_caption">Display Caption / Title :</label>
           <input type="radio" name="pearl_caption" value="yes"'.$default_pearl_caption.'" /> Yes 
           <input type="radio" name="pearl_caption" value="no"'.$default_pearl_caption.'" /> No<br/>
           <label for="pearl_transition_type">Transition Type :</label>
           <input type="radio" name="pearl_transition_type" value="fadein"'.$default_pearl_transition_type.'" /> Fade In/Out 
           <input type="radio" name="pearl_transition_type" value="slide"'.$default_pearl_transition_type.'" /> Slide<br/>
                      
           <input type="submit" name="submit" value="Submit"/>

                </form> ';
          
          echo $displayOptionsForm;

        
    }
    
    public function authorDetails() {
        
        $details = ' <p>Created by <a href="http://pearlbells.co.uk/" target="_blank">Pearlbells</a><br/> Follow me : <a href="http://twitter.com/#!/pearlbells" target="_blank">Twitter</a><br/>Please Donate : <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W884YAWEDPA9U" target="_blank">Click Here</a></p>
         <p>Feel free to email me lizeipe@gmail.com for any advice or suggestion.</p>';
        echo $details;
        
    }
    
}
?>
