<div class="content-bottom">
	 		<center>
	 			<?php     
            $args = array( 
                'menu'              => '', 
                'container'         => '', 
                'container_class'   => '', 
                'container_id'      => '', 
                'menu_class'        => 'contentbottommenu', 
                'menu_id'           => 'content-bottom-menu', 
                'echo'              => true, 
                'fallback_cb'       => 'wp_page_menu', 
                'before'            => '', 
                'after'             => '', 
                'link_before'       => '', 
                'link_after'        => '', 
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                'depth'             => 3, 
                'walker'            => '', 
                'theme_location'    => 'menu-bottom' 
            );
            wp_nav_menu($args);
            ?>           	 			
	 		</center>	 	
	 	</div>