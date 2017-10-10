<?php 
     global $zController;
     $zController->getController("/frontend","ProductController"); 
     ?>
     <?php get_header();?>
     <div class="container">
        <?php require_once get_template_directory().DS."tim-nhieu-nhat.php"; ?>
        <?php get_template_part("loop","single"); ?>
        <?php require_once get_template_directory().DS."menu-bottom.php"; ?>        
        <?php get_footer(); ?>
        <?php wp_footer();?>
     </body>
     </html>