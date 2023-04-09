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
   ?>
   <style>

   </style>
   <script>
      function otherSelectCheck()
      {
         if(document.getElementById("region").value === 'Other') {
            document.getElementById("otherRegion").hidden = false;
         } else {
            document.getElementById("otherRegion").hidden = true;
         }
      }
   </script>
   <?php
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
      <h2>Create a new page<h2>

      <h3>Create new League<h3>
      <form method="post" id="createNewLeague">
         <div id="regionSelect">
            <Label for="region">Region: </Label>
            <select name="region" id="region" onchange="return otherSelectCheck();">
               <option value="Albany">Albany</option>
               <option value="Buffalo">Buffalo</option>
               <option value="Rochester">Rochester</option>
               <option value="Syracuse">Syracuse</option>
               <option value="Other">Other</option>
            </select>
            <input type="text" name="otherRegion" id="otherRegion" placeholder="Enter Region..." hidden>
         </div>
      </form>


      <form method="post" id="uploadFile" action="<?php echo $_SERVER['REQUEST_URI']?>" enctype="multipart/form-data">
         <label>Thing:</label>
         <input type="file" name="sentFile">
         <input type="submit" name="submit">
      </form>
   <?
   }
}
?>