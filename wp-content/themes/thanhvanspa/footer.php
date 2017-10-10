<div class="carent-bottom">
	<div class="container container-line">
		<div class="row">
			<div class="col-md-4 hotline"><img src="<?php echo wp_upload_dir()["url"]."/hotline-f.png"; ?>"></div>
			<div class="col-md-8">
				<div class="col-md-3">
					<?php     
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'huongdanmodule', 
						'menu_id'           => 'huong-dan-module-1', 
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'huong-dan-module-1' 
					);
					wp_nav_menu($args);
					?>           		 						
				</div>
				<div class="col-md-3">
					<?php     
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'huongdanmodule', 
						'menu_id'           => 'huong-dan-module-2', 
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'huong-dan-module-2' 
					);
					wp_nav_menu($args);
					?>           		 						
				</div>
				<div class="col-md-3">
					<?php     
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'huongdanmodule', 
						'menu_id'           => 'huong-dan-module-3', 
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'huong-dan-module-3' 
					);
					wp_nav_menu($args);
					?>           		 						
				</div>
				<div class="col-md-3">
					<?php     
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'huongdanmodule', 
						'menu_id'           => 'huong-dan-module-4', 
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'huong-dan-module-4' 
					);
					wp_nav_menu($args);
					?>           		 						
				</div>
			</div>
		</div>	 		
	</div>
	<div class="container map">
		<div class="col-md-4">
			<div class="col-sm-4"><img src="<?php echo wp_upload_dir()["url"]."/map.jpg"; ?>" /></div>
			<div class="col-sm-8">
				<div class="csnc"><a href="index.php">Cơ sở nhân chính</a></div>
				<div><i class="fa fa-map-marker" aria-hidden="true"></i> Số 51 Chính Kinh, Nhân Chính, Thanh Xuân, Hà Nội</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-sm-4"><img src="<?php echo wp_upload_dir()["url"]."/map.jpg"; ?>" /></div>
			<div class="col-sm-8">
				<div class="csnc"><a href="index.php">Cơ sở nhân chính</a></div>
				<div><i class="fa fa-map-marker" aria-hidden="true"></i> Số 51 Chính Kinh, Nhân Chính, Thanh Xuân, Hà Nội</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-sm-4"><img src="<?php echo wp_upload_dir()["url"]."/map.jpg"; ?>" /></div>
			<div class="col-sm-8">
				<div class="csnc"><a href="index.php">Cơ sở nhân chính</a></div>
				<div><i class="fa fa-map-marker" aria-hidden="true"></i> Số 51 Chính Kinh, Nhân Chính, Thanh Xuân, Hà Nội</div>
			</div>
		</div>
	</div>
	<div class="container logo-footer">
		<div class="row">
			<div class="col-md-8">
				<div class="col-sm-2"><center><img src="<?php echo wp_upload_dir()["url"]."/logo-footer.png"; ?>" /></center></div>
				<div class="col-sm-10">
					<div class="trungtam"><a href="index.php">Trung tâm phân phối dược phẩm thuốc 365</a></div>
					<div>Chuyên cung cấp dược phẩm chính hãng chất lượng đảm bảo, uy tín bền lâu...</div>
					<div>Giấy phép số: 92387656264 do sở KH&ĐT Hà Nội cấp ngày 11-11-2011</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="<?php echo wp_upload_dir()["url"]."/bct.jpg"; ?>" />
			</div>
		</div>
	</div>
</div>