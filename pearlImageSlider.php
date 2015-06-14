<?php
/*
Plugin Name: Image Slider / Slideshow Pearlbells
Plugin URI: http://pearlbells.co.uk/
Description: Image Slider Pearlbells
Version:  4.0
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
include_once 'form.php';
include_once 'data.php';
include_once 'optionsValues.php';
include_once 'style.php';

class pearlImageSlider {
    
     public function __construct() {
         add_action( 'admin_menu', array( $this, 'menu' ) );
         $objOptions = new pearlImageOptionsValues;
         $objOptions->add_options();
         new pearlImageSliderData;
         new pearlImageStyleData;
         
     }
     
     public function menu() {
        add_options_page('Image Slider','Image Slider','manage_options',__FILE__,array($this,'opt_page')); 
         
     }
  
     public function opt_page() {
         
         $this->postData();
     }
     
     public function postData() {
         
        if($_REQUEST['submit']) {
            $objOptions = new pearlImageOptionsValues;
            $objOptions->update_options();
           
        }
        
        new pearlDisplayForm;
    }
     
}

new pearlImageSlider;
?>