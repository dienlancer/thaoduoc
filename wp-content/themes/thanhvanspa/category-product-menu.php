<div class="row margin-top-10 category-ads">
    <div class="col-md-3">
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
    </div>
    <div class="col-md-6 banner-middle">
        <div class="row"><img src="<?php echo wp_upload_dir()["url"]."/banner-tinh-dau.jpg"; ?>" /></div>
        <div class="row">
            <div class="banner-child"><center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/banner-thao-duoc-1.jpg"; ?>" />&nbsp;</center></div>
            <div class="banner-child"><center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/banner-thao-duoc-2.jpg"; ?>" />&nbsp;</center></div>
            <div class="banner-child"><center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/banner-thao-duoc-3.jpg"; ?>" />&nbsp;</center></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="csbanhang">
            <h3>Chính sách bán hàng</h3>
            <?php     
            $args = array( 
                'menu'              => '', 
                'container'         => '', 
                'container_class'   => '', 
                'container_id'      => '', 
                'menu_class'        => 'chinhsachbanhang', 
                'menu_id'           => 'chinh-sach-ban-hang', 
                'echo'              => true, 
                'fallback_cb'       => 'wp_page_menu', 
                'before'            => '', 
                'after'             => '', 
                'link_before'       => '', 
                'link_after'        => '', 
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                'depth'             => 3, 
                'walker'            => '', 
                'theme_location'    => 'chinh-sach-ban-hang' 
            );
            wp_nav_menu($args);
            ?>            
        </div>
        <div class="margin-top-15">
            <center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/banner5.jpg"; ?>">&nbsp;</center>
        </div>
        <div class="margin-top-15">
            <center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/banner5.jpg"; ?>">&nbsp;</center>
        </div>
        <div class="margin-top-15">
            <center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/banner5.jpg"; ?>">&nbsp;</center>
        </div>
    </div>
</div>