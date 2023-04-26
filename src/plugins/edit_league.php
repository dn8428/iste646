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
	'Edit League', 	
	'1.0', 		
	'Ian Adler',
	'http://www.example.org', 
	'This plugin allows you to edit a league',
	$thisfile,
	'edit_league_show'  
);

# activate filter
add_action('pages-sidebar','createSideMenu',array($thisfile,'Edit a League')); 
# functions
function create_data_folder() {
   $thisfile=basename(__FILE__, ".php");
   // Set up the folder name and its permissions
   // Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
   $folder        = GSDATAOTHERPATH . '/' . $thisfile . '/';
   $filename      = $folder . 'ua-data.txt';
   $chmod_mode    = 0755;
   $folder_exists = file_exists($folder) || mkdir($folder, $chmod_mode);
   
   // Save the file (assuming that the folder indeed exists)
   if ($folder_exists) {
      file_put_contents($filename, "test");
   }
}

function create_year_folder($year) 
{
   // this will create a year folder if it needs to be made...
   // return of false mean it did not need to be made
   // return of true means that it did
   $thisfile=basename(__FILE__, ".php");
   // Set up the folder name and its permissions
   // Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
   $folder        = GSDATAOTHERPATH . '/' . $thisfile . '/' . $year;
   $chmod_mode    = 0755;
   if(file_exists($folder)) {
      return false;
   }

   mkdir($folder, $chmod_mode);
   return true;
}

function create_league_file($year, $region, $id)
{
   $thisfile=basename(__FILE__, ".php");
   // Set up the folder name and its permissions
   // Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
   $folder        = GSDATAOTHERPATH . '/' . $thisfile . '/' . $year . '/';
   $filename      = $folder . $region . $id . ".xml";
   $chmod_mode    = 0755;
   $folder_exists = file_exists($folder);

   $title = $region . " " . $id;
   
   // Save the file (assuming that the folder indeed exists)
   if ($folder_exists) {
		$xml = new SimpleXMLExtended('<?xml version="1.0" encoding="UTF-8"?><item></item>');
		$xml->addChild('pubDate', date('r'));

		$note = $xml->addChild('title');
		$note->addCData($title);
		
		$note = $xml->addChild('content');
		$note->addCData("");
		return XMLsave($xml, $filename);
   }
   return false;
}

function edit_league_show() {
   create_data_folder();
   $year = date('y');
   $region = 'Albany';
   $regionalId = '1';
   if(!empty($_POST['year']) &&
      !empty($_POST['region'] &&
      !empty($_POST['regionalId']))) 
   {
      $year = filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
      $region = filter_var($_POST['region'], FILTER_SANITIZE_STRING);
      $regionalId = filter_var($_POST['regionalId'], FILTER_SANITIZE_NUMBER_INT);
   }
   ?>
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
   <h2>Edit A League<h2>
      <form method="POST" id="createNewLeague" action="<?php echo $_SERVER['REQUEST_URI']?>" >
         <div class="leagueInput">
            <label for="year">Year:</label>
            <input type="number" name="year" min="1900" max="2100" step="1" value="<?php echo $year?>">
         </div>
         <div class="leagueInput">
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
         <div class="leagueInput">
            <label for="regionalId">Number:</label>
            <input type="number" name="regionalId" min="0" step="1" value="<?php echo $regionalId?>">
         </div>
         <input type="submit" name="submit" value="Edit">
      </form>
      <hr>
   <?php

   if(create_year_folder($year))
   {
      ?>
      <div class="editItem">
         <p>Created a new year...</p>
      </div>
      <?php
   }
   if(create_league_file($year, $region, $regionalId))
   {
      ?>
         <p>File exists</p>
      <?php
   }
}
?>