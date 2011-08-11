<?php $default_pearl_Image_Slider_height = get_option('pearl_Image_Slider_height');
      $default_pearl_Image_Slider_width = get_option('pearl_Image_Slider_width');
	  $default_pearl_Image_Slider_bg_color = get_option('pearl_Image_Slider_bg_color');
      $default_pearl_Image_Slider_border_color = get_option('pearl_Image_Slider_border_color');
	  $default_pearl_Image_Slider_border_width = get_option('pearl_Image_Slider_border_width');
	  $default_pearl_Image_Slider_padding = get_option('pearl_Image_Slider_padding');
	  $default_pearl_Title_Character_Length = get_option('pearl_Title_Character_Length');
	  $default_pearl_sliding_speed = get_option('pearl_sliding_spped');
	  $default_pearl_caption = get_option('pearl_caption');
?>
      <form method="post">
           <label for="pearl_Image_Slider_width">Width :</label>
           <input type="text" name="pearl_Image_Slider_width" value="<?php echo $default_pearl_Image_Slider_width;?>"/>
           <label for="pearl_Image_Slider_height">Height :</label>
           <input type="text" name="pearl_Image_Slider_height" value="<?php echo $default_pearl_Image_Slider_height;?>"/><br/>
           <label for="pearl_Image_Slider_border_width">Border Width :</label>
           <input type="text" name="pearl_Image_Slider_border_width" value="<?php echo $default_pearl_Image_Slider_border_width;?>"/>
           <label for="pearl_Image_Slider_border_color">Border Color :</label>
           <input type="text" name="pearl_Image_Slider_border_color" value="<?php echo $default_pearl_Image_Slider_border_color;?>"/><br/>
           <label for="pearl_Image_Slider_bg_color">Background Color :</label>
           <input type="text" name="pearl_Image_Slider_bg_color" value="<?php echo $default_pearl_Image_Slider_bg_color;?>"/>
           <label for="pearl_Image_Slider_padding">Padding :</label>
           <input type="text" name="pearl_Image_Slider_padding" value="<?php echo $default_pearl_Image_Slider_padding;?>"/><br/>
           <label for="pearl_Title_Character_Length">No of Character (Title) :</label>
           <input type="text" name="pearl_Title_Character_Length" value="<?php echo $default_pearl_Title_Character_Length;?>"/>
           <label for="pearl_sliding_spped">Speed :</label>
           <input type="text" name="pearl_sliding_spped" value="<?php echo $default_pearl_sliding_speed;?>"/><br/>
           <label for="pearl_caption">Display Caption / Title :</label>
           <input type="radio" name="pearl_caption" value="yes"<?php echo $default_pearl_caption;?> /> Yes <input type="radio" name="pearl_caption" value="no"<?php echo $default_pearl_caption;?> /> No
                      
           <input type="submit" name="submit" value="Submit"/>
        </form>
        
         <p>Created by <a href="http://pearlbells.co.uk/" target="_blank">Pearlbells</a><br/> Follow me : <a href="http://twitter.com/#!/pearlbells" target="_blank">Twitter</a><br/>Please Donate : <a href="https://www.paypal.com/uk/cgi-bin/webscr?cmd=_flow&SESSION=85kxHhXUkKMMDBi0tzzqLlfvziVlQruaxU55y4Hs_TUAUVZC6KgoEk2YLgG&dispatch=5885d80a13c0db1f8e263663d3faee8d1e83f46a36995b3856cef1e18897ad75" target="_blank">Click Here</a></p>
         <p>Feel free to email me lizeipe@gmail.com for any advice or suggestion.</p>