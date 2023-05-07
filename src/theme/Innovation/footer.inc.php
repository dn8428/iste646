<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>

<link href="<?php get_theme_url(); ?>/mastermind-footer.css" rel="stylesheet">

	<!-- site footer -->
	<footer class="clearfix" >
		
		<?php get_footer(); ?>
		
		<!-- 
			Theme Credits
			Please consider keeping the links to the developer and GetSimple if you use this theme
		-->
	 	<div class="footer-container">
			<div class="nav-container">
				<a href="#" target="_blank">Home</a>
				<a href="#" target="_blank">Program</a>
				<a href="#" target="_blank">General</a>
				<a href="#" target="_blank">League</a>
				<a href="#" target="_blank">Teams</a>
				<a href="#" target="_blank">Contact</a>
				<a href="#" target="_blank">Related Links</a>
				<a href="#" target="_blank">Store</a>
			</div>
			<!-- <div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
			<div class="right">Innovation Theme by <a href="http://www.cagintranet.com" >Cagintranet</a> &middot; <?php get_site_credits(); ?></div> -->
		</div>
	</footer>
	 
</body>
</html>