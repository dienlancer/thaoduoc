<?php 
	/*
	 Template Name: HomePage
	 */	 
	 global $zController;
	 $zController->getController("/frontend","ProductController"); 
	 ?>
	 <?php get_header();?>
	 <div class="container">
	 	<?php require_once get_template_directory().DS."tim-nhieu-nhat.php"; ?>
	 	<?php require_once get_template_directory().DS."category-product-menu.php"; ?>
	 	<?php require_once get_template_directory().DS."product-frontend.php"; ?>
	 	<?php require_once get_template_directory().DS."menu-bottom.php"; ?>	 	
	 	<?php get_footer(); ?>
	 	<?php wp_footer();?>
	 </body>
	 </html>