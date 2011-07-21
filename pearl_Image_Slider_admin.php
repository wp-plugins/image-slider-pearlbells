<?php $default_pearl_Image_Slider_height = get_option('pearl_Image_Slider_height');
      $default_pearl_Image_Slider_width = get_option('pearl_Image_Slider_width');
	  $default_pearl_Image_Slider_bg_color = get_option('pearl_Image_Slider_bg_color');
      $default_pearl_Image_Slider_border_color = get_option('pearl_Image_Slider_border_color');
	  $default_pearl_Image_Slider_border_width = get_option('pearl_Image_Slider_border_width');
	  $default_pearl_Image_Slider_padding = get_option('pearl_Image_Slider_padding');
	  $default_pearl_Title_Character_Length = get_option('pearl_Title_Character_Length');
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
                      
           <input type="submit" name="submit" value="Submit"/>
        </form>
        
         <p>Created by <a href="http://pearlbells.co.uk/" target="_blank">Pearlbells</a><br/> Follow me : <a href="http://twitter.com/#!/pearlbells" target="_blank">Twitter</a></p>
         <p>Feel free to email me lizeipe@gmail.com for any advice or suggestion.</p>