<?php
/*
Plugin Name: File Upload
Description: Allows someone to upload a file
Version: 1.0
Author: Ian Adler
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

i18n_merge($thisfile);

# register plugin
register_plugin(
	$thisfile, 
	'File Upload', 	
	'1.0', 		
	'Ian Adler',
	'http://www.example.org', 
	'Allows someone to upload a file ',
	$thisfile,
	'main'  
);

# activate filter
add_action('plugins-sidebar','createSideMenu',array($thisfile,'File Upload')); 
# functions
function hello_world() {
	echo '<p>Hello World</p>';
}

function main() {

   if(isset($_POST['submit'])) {
      // *Something was uploaded*

      if(!isset($_FILES['sentFile']['error']) ||
         is_array($_FILES['sentFile']['error'])){
            // The error is unexpected!
            throw new RuntimeException('Invalid Parameters');
      }

      switch ($_FILES['sentFile']['error'])
      {
         case UPLOAD_ERR_OK:
            break;
         case UPLOAD_ERR_NO_FILE:
               throw new RuntimeException('No File Sent!');
         case UPLOAD_ERR_INI_SIZE:
         case UPLOAD_ERR_FORM_SIZE:
               throw new RuntimeException('Exceeded Filesize limits');

         default:
            throw new RuntimeException('Unknown Errors.');
      }


      $check = getimagesize($_FILES['sentFile']['tmp_name']);
      if($check !== false)
      {
         echo "File is an image - " . $check["mime"] . ".";
      } else {
         echo "File is NOT an image...";
      }
   }else {

	?>
   <form method="post" id="uploadFile" action="<?php echo $_SERVER['REQUEST_URI']?>" enctype="multipart/form-data">
   <label>Thing:</label>
   <input type="file" name="sentFile">
   <input type="submit" name="submit">
   </form>
   <?
   }
}
?>