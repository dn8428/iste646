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
   $chmod_mode    = 0755;
   $folder_exists = file_exists($folder) || mkdir($folder, $chmod_mode);
}

function create_year_folder($year, $level) 
{
   // this will create a year folder if it needs to be made...
   // return of false mean it did not need to be made
   // return of true means that it did
   $thisfile=basename(__FILE__, ".php");
   // Set up the folder name and its permissions
   // Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
   $folder        = GSDATAOTHERPATH . '/' . $thisfile . '/' . $year . '/' . $level;
   $chmod_mode    = 0755;
   if(file_exists($folder)) {
      return false;
   }

   mkdir($folder, $chmod_mode, true);
   return true;
}

function create_league_file($year, $level, $region, $id)
{
   $thisfile=basename(__FILE__, ".php");
   // Set up the folder name and its permissions
   // Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
   $folder        = GSDATAOTHERPATH . '/' . $thisfile . '/' . $year . '/' . $level . '/';
   $filename      = $folder . $region . "_" . $id . ".xml";
   $file_exists = file_exists($filename);

   $title = $region . " " . $id;
   
   // Save the file
   if (!$file_exists) {
		$xml = new SimpleXMLExtended('<?xml version="1.0" encoding="UTF-8"?><item></item>');
		$xml->addChild('pubDate', date('r'));

		$note = $xml->addChild('title');
		$note->addCData($title);

      $note = $xml->addChild('year');
		$note->addCData($year);

      $note = $xml->addChild('region');
		$note->addCData($region);

      $note = $xml->addChild('id');
		$note->addCData($id);
		
		$note = $xml->addChild('content');
		$note->addCData("");
		return XMLsave($xml, $filename);
   }
   //file already exists...
   return true;
}

function edit_league_show() {
   create_data_folder();
   $buttonname = i18n_r('BTN_SAVEUPDATES');
   $year = date('Y');
   $region = '';
   $otherRegion = '';
   $regionalId = '1';
   $level = 'V';
   $firsttime = true;
   if(!empty($_POST['year']) &&
      !empty($_POST['region']) &&
      !empty($_POST['regionalId'])&&
      !empty($_POST['level']))
   {
      $year = filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
      $region = filter_var($_POST['region'], FILTER_SANITIZE_STRING);
      $regionalId = filter_var($_POST['regionalId'], FILTER_SANITIZE_NUMBER_INT);
      $level = filter_var($_POST['level'], FILTER_SANITIZE_STRING);
      
      if(!empty($_POST['otherRegion']))
      {
         $otherRegion = filter_var($_POST['otherRegion'], FILTER_SANITIZE_STRING);
      }
      $firsttime = false;
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
            <select name="region" id="region" onchange="return otherSelectCheck(); ">
               <option value="" <?php if($region == ""){echo "selected";} ?> disabled hidden>Choose here...</option>
               <option value="Albany" <?php if($region == "Albany"){echo "selected";} ?>>Albany</option>
               <option value="Buffalo" <?php if($region == "Buffalo"){echo "selected";} ?>>Buffalo</option>
               <option value="Rochester" <?php if($region == "Rochester"){echo "selected";} ?>>Rochester</option>
               <option value="Syracuse" <?php if($region == "Syracuse"){echo "selected";} ?>>Syracuse</option>
               <option value="Other" <?php if($region == "Other"){echo "selected";} ?>>Other</option>
            </select>
            <input type="text" name="otherRegion" id="otherRegion" placeholder=<?php if($otherRegion == ''){ echo "Enter Region...";}else {echo "\"" . $otherRegion . "\"";}?> hidden>
         </div>
         <div class="leagueInput">
            <label for="regionalId">Number:</label>
            <input type="number" name="regionalId" min="0" step="1" value="<?php echo $regionalId?>">
         </div>
         <div class="leagueInput">
            <label for="level">Level:</label>
            <select name="level" >
               <option value="V">Varsity</option>
               <option value="JV">Junior Varsity</option>
            </select>
         </div>
         <input type="submit" name="submit" value="View">
      </form>
      <hr>
   <?php
   if(!$firsttime)
   {
      if(create_year_folder($year, $level))
      {
         ?>
         <div class="editItem">
            <p>Created a new year...</p>
         </div>
         <?php
      }
      // $content = '';
      if(create_league_file($year, $level, $region, $regionalId))
      {
         $thisfile=basename(__FILE__, ".php");
         $folder        = GSDATAOTHERPATH . $thisfile . '/' . $year . '/' . $level . '/';
         $filename      = $folder . $region . "_" . $regionalId . ".xml";
         $xml = getXML($filename);
         
         $content = stripslashes($xml->content);
         if(!empty($_POST['post-content']))
         {	
            // $post_content = ($_POST['post-content']);   
            $post_content = safe_slash_html($_POST['post-content']);   
            $content = $post_content;

            // create new XML file
            $new_xml = new SimpleXMLExtended('<?xml version="1.0" encoding="UTF-8"?><item></item>');
            $new_xml->addChild('pubDate', date('r'));
      
            $note = $new_xml->addChild('title');
            $note->addCData($xml->title);
      
            $note = $new_xml->addChild('year');
            $note->addCData($xml->year);
      
            $note = $new_xml->addChild('region');
            $note->addCData($xml->region);
      
            $note = $new_xml->addChild('id');
            $note->addCData($xml->id);
            
            $note = $new_xml->addChild('content');
            $note->addCData($content);
            
            XMLsave($new_xml, $filename);
         }
         
      }
      ?>
      <form class="largeform" id="editform" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post" accept-charset="utf-8" > 
      <div id="hiddenInputs">
      <input type="hidden" name="year"        value="<?php echo $year?>">
      <input type="hidden" name="region"      value="<?php echo $region?>">
      <input type="hidden" name="otherRegion" value="<?php echo$otherRegion;?>">
      <input type="hidden" name="regionalId"  value="<?php echo $regionalId?>">
      <input type="hidden" name="level"       value="<?php echo $level?>">
      </div>    
      <!-- page body -->
      <p>
         <label for="post-content" style="display:none;"><?php i18n('LABEL_PAGEBODY'); ?></label>
         <textarea id="post-content" name="post-content"><?php echo $content; ?></textarea>
      </p>
      
      <?php exec_action('edit-content'); ?> 
      
      <div id="submit_line" >
         <input type="hidden" name="redirectto" value="" />
         
         <span><input id="page_submit" class="submit" type="submit" name="submitted" value="<?php echo $buttonname; ?>" /></span>
         
      </div>
      
      <?php if($url != '') { ?>
         <p class="backuplink" ><?php 
            if (isset($pubDate)) { 
               echo sprintf(i18n_r('LAST_SAVED'), '<em>'.$author.'</em>').' '. lngDate($pubDate).'&nbsp;&nbsp; ';
            }
            if ( file_exists(GSBACKUPSPATH.'pages/'.$url.'.bak.xml') ) {	
               echo '&bull;&nbsp;&nbsp; <a href="backup-edit.php?p=view&amp;id='.$url.'" target="_blank" >'.i18n_r('BACKUP_AVAILABLE').'</a>';
            } 
         ?></p>
      <?php } ?>
      
   </form>
   <script type="text/javascript" src="template/js/ckeditor/ckeditor.js<?php echo getDef("GSCKETSTAMP",true) ? "?t=".getDef("GSCKETSTAMP") : ""; ?>"></script>
   <script type="text/javascript">
			<?php if(getDef("GSCKETSTAMP",true)) echo "CKEDITOR.timestamp = '".getDef("GSCKETSTAMP") . "';\n"; ?>
			var editor = CKEDITOR.replace( 'post-content', {
					skin : 'getsimple',
					forcePasteAsPlainText : true,
					language : '<?php echo $EDLANG; ?>',
					defaultLanguage : 'en',
					<?php if (file_exists(GSTHEMESPATH .$TEMPLATE."/editor.css")) { 
						$fullpath = suggest_site_path();
						?>
						contentsCss: '<?php echo $fullpath; ?>theme/<?php echo $TEMPLATE; ?>/editor.css',
					<?php } ?>
					entities : false,
					// uiColor : '#FFFFFF',
					height: '500px',
					baseHref : '<?php echo $SITEURL; ?>',
					tabSpaces:10,
					filebrowserBrowseUrl : 'filebrowser.php?type=all',
					filebrowserImageBrowseUrl : 'filebrowser.php?type=images',
					filebrowserWindowWidth : '730',
					filebrowserWindowHeight : '500'
					<?php echo $toolbar; ?>
					<?php echo $options; ?>					
			});

			CKEDITOR.instances["post-content"].on("instanceReady", InstanceReadyEvent);

			function InstanceReadyEvent(ev) {
				_this = this;

				this.document.on("keyup", function () {
					$('#editform #post-content').trigger('change');
					_this.resetDirty();
				});

			    this.timer = setInterval(function(){trackChanges(_this)},500);
			}		

			/**
			 * keep track of changes for editor
			 * until cke 4.2 is released with onchange event
			 */
			function trackChanges(editor) {
				// console.log('check changes');
				if ( editor.checkDirty() ) {
					$('#editform #post-content').trigger('change');
					editor.resetDirty();			
				}
			};

			</script>
			
			<?php
				# CKEditor setup functions
				ckeditor_add_page_link();
				exec_action('html-editor-init'); 
			?>
   <?php
   }
}
?>