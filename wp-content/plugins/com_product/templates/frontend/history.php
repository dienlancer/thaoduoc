<?php get_header();?>
<?php require_once get_template_directory() . DS . "menu.php"; ?>
<div class="container index-slot">
    <div class="col-md-9">
    <!-- begin loop -->    
    <?php require_once PLUGIN_PATH . DS . "templates" . DS . "frontend". DS . "loop-history.php"; ?>
	<!-- end loop -->
    </div>
    <div class="col-md-3">
    	<?php require_once get_template_directory() . DS . "sidebar.php"; ?>
    </div>     
</div>
<?php get_footer(); ?>
<?php wp_footer();?>
</body>
</html>