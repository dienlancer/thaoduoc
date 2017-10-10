<div class="row margin-top-10">
    <div class="col-md-4 search-form-all clearfix">
        <div class="form-searh-hide">
            <div class="form-searh-hide-in">
                <form role="search" action="" method="get" class="clearfix">
                    <input name="s" type="text" placeholder="Nhập từ khóa ... " class="search-field">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</button>
                </form>
            </div>
        </div>              
    </div>
    <div class="col-md-8">
        <?php     
        $args = array( 
            'menu'              => '', 
            'container'         => '', 
            'container_class'   => '', 
            'container_id'      => '', 
            'menu_class'        => 'timnhieunhat', 
            'menu_id'           => 'tim-nhieu-nhat', 
            'echo'              => true, 
            'fallback_cb'       => 'wp_page_menu', 
            'before'            => '', 
            'after'             => '', 
            'link_before'       => '', 
            'link_after'        => '', 
            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
            'depth'             => 3, 
            'walker'            => '', 
            'theme_location'    => 'tim-nhieu-nhat' 
        );
        wp_nav_menu($args);
        ?>
    </div>
</div>