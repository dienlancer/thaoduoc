<?php 

     global $zController;
     $zController->getController("/frontend","ProductController"); 
     ?>
     <?php get_header();?>
     <div class="container">
        <?php require_once get_template_directory().DS."tim-nhieu-nhat.php"; ?>
        <?php echo "<pre>".print_r(__FILE__,true)."</pre>";   ?>
        <?php require_once get_template_directory().DS."menu-bottom.php"; ?>        
        <?php get_footer(); ?>
        <?php wp_footer();?>
     </body>
     </html>