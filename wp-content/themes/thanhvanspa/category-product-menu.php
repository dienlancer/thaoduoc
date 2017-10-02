<div class="menucategoryproduct">
    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Danh mục sản phẩm</h3>
    <?php     
        $args = array( 
                            'menu'              => '', 
                            'container'         => '', 
                            'container_class'   => '', 
                            'container_id'      => '', 
                            'menu_class'        => 'categoryproductmenu', 
                            'menu_id'           => 'category-product-menu', 
                            'echo'              => true, 
                            'fallback_cb'       => 'wp_page_menu', 
                            'before'            => '', 
                            'after'             => '', 
                            'link_before'       => '', 
                            'link_after'        => '', 
                            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                            'depth'             => 3, 
                            'walker'            => '', 
                            'theme_location'    => 'category-product-menu' 
                        );
        wp_nav_menu($args);
    ?>
</div>
         
