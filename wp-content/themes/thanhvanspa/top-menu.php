<div class="container">
    <div class="row">
        <div class="top-menu">    
            <div class="header-top-left">
                    <?php     
                                $args = array( 
                                        'menu'              => '', 
                                        'container'         => '', 
                                        'container_class'   => '', 
                                        'container_id'      => '', 
                                        'menu_class'        => 'menutop', 
                                        'menu_id'           => 'menu-top', 
                                        'echo'              => true, 
                                        'fallback_cb'       => 'wp_page_menu', 
                                        'before'            => '', 
                                        'after'             => '', 
                                        'link_before'       => '', 
                                        'link_after'        => '', 
                                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                                        'depth'             => 3, 
                                        'walker'            => '', 
                                        'theme_location'    => 'top-menu' 
                                    );
                                wp_nav_menu($args);
                    ?> 
                    <div class="clr"></div>
            </div>            
        </div>        
    </div>    
</div>