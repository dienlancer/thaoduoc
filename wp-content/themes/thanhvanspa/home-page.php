<?php 
	/*
	 Template Name: HomePage
	 */	 
	 global $zController;
	 $zController->getController("/frontend","ProductController"); 
	 ?>
	 <?php get_header();?>
	 <div class="container">
	 	<?php require_once "tim-nhieu-nhat.php"; ?>
	 	<?php require_once "category-product-menu.php"; ?>
	 	<?php require_once "product-frontend.php"; ?>
	 	<?php require_once "menu-bottom.php"; ?>	 	
	 	<?php get_footer(); ?>
	 	<?php wp_footer();?>
	 </body>
	 </html>