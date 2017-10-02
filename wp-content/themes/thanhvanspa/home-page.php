<?php 
	/*
	 Template Name: HomePage
	 */	 
	 global $zController;
	 $zController->getController("/frontend","ProductController"); 
	 ?>
	 <?php get_header();?>
	 <div class="container">
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
	 			<ul class="list-search margin-top-5">
	 				<li><i class="fa fa-star" aria-hidden="true"></i> Tìm nhiều nhất: </li>
	 				<li>&nbsp;<a href="http://thuoc365.vn/ung-thu/"> Ung thư, </a></li>
	 				<li>&nbsp;<a href="http://thuoc365.vn/noi-tiet-nu/"> Nội tiết nữ, </a></li>
	 				<li>&nbsp;<a href="http://thuoc365.vn/boi-bo/"> Bồi bổ, </a></li>
	 				<li>&nbsp;<a href="http://thuoc365.vn/collagen/"> Collagen ...</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 	<div class="row margin-top-10 category-ads">
	 		<div class="col-md-3"><?php require_once "category-product-menu.php"; ?></div>
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
	 				<ul>
	 					<li><i class="fa fa-truck" aria-hidden="true"></i> Giao hàng tận nơi</li>
	 					<li><i class="fa fa-usd" aria-hidden="true"></i> Thanh toán khi nhận hàng</li>
	 					<li><i class="fa fa-refresh" aria-hidden="true"></i> Đổi trả miễn phí trong 7 ngày</li>
	 				</ul>
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
	 	<div class="row margin-top-15">
	 		<h3 class="title-sanpham">
	 			<span class="pull-left"><i class="fa fa-star" aria-hidden="true"></i> Sản phẩm bán chạy </span>
	 			<a href="http://khogiaodien.itheme.vn/GD0006/san-pham-ban-chay/" class="xthem pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Xem thêm</a>
	 		</h3>
	 		<div class="margin-top-15">
	 			
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			
	 		</div>
	 	</div>
	 	<div class="row margin-top-15">
	 		<h3 class="title-sanpham">
	 			<span class="pull-left"><i class="fa fa-star" aria-hidden="true"></i> Sản phẩm bán chạy </span>
	 			<a href="http://khogiaodien.itheme.vn/GD0006/san-pham-ban-chay/" class="xthem pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Xem thêm</a>
	 		</h3>
	 		<div class="margin-top-15">
	 			
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			<div class="box">
	 				<div ><center>&nbsp;<img width="180" height="180"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 				<div class="box-info">
	 					<div>
	 						<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 					</div>
	 					<div class="box-price"><center>580.000</center></div>
	 					<div class="margin-top-15">
	 						<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 					</div>
	 				</div>	 					
	 			</div>
	 			
	 		</div>
	 	</div>
	 	<div class="row margin-top-15">
	 		<h3 class="title-sanpham">
	 			<span class="pull-left"><i class="fa fa-star" aria-hidden="true"></i> Sản phẩm bán chạy </span>
	 			<a href="http://khogiaodien.itheme.vn/GD0006/san-pham-ban-chay/" class="xthem pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Xem thêm</a>
	 		</h3>
	 		<div class="margin-top-15 box-product-ads">
	 			<div class="col-md-4">
	 				<center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/thuc-pham-chuc-nang.jpg"; ?>">&nbsp;</center>
	 			</div>
	 			<div class="col-md-8">
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="clr"></div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="clr"></div>
	 			</div>
	 			<div class="clr"></div>
	 		</div>
	 	</div>
	 	<div class="row margin-top-15">
	 		<h3 class="title-sanpham">
	 			<span class="pull-left"><i class="fa fa-star" aria-hidden="true"></i> Sản phẩm bán chạy </span>
	 			<a href="http://khogiaodien.itheme.vn/GD0006/san-pham-ban-chay/" class="xthem pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Xem thêm</a>
	 		</h3>
	 		<div class="margin-top-15 box-product-ads">
	 			<div class="col-md-4">
	 				<center>&nbsp;<img src="<?php echo wp_upload_dir()["url"]."/thuc-pham-chuc-nang.jpg"; ?>">&nbsp;</center>
	 			</div>
	 			<div class="col-md-8">
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="clr"></div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="box-ads">
	 					<div ><center>&nbsp;<img width="127" height="127"  src="<?php echo wp_upload_dir()["url"]."/chietxuat.png"; ?>" />&nbsp;</center></div>
	 					<div class="box-info">
	 						<div>
	 							<center><a class="product-link" href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" title="Viên uống collagen AEC 12000mg 180 viên của Mỹ">Viên uống collagen AEC 12000mg 180 viên của Mỹ</a></center>
	 						</div>
	 						<div class="box-price"><center>580.000</center></div>
	 						<div class="margin-top-15">
	 							<center><a href="http://khogiaodien.itheme.vn/GD0006/vien-uong-collagen-aec-12000mg-180-vien-cua/" class="cart-vang"></a></center>
	 						</div>
	 					</div>	 					
	 				</div>
	 				<div class="clr"></div>
	 			</div>
	 			<div class="clr"></div>
	 		</div>
	 	</div>
	 </div>	 
	 <div class="content-bottom">
	 	<center>
	 		<ul id="content-bottom-menu" class="contentbottommenu">
	 			<li><a href="index.php">Trang chủ</a></li>
	 			<li><a href="index.php">Giới thiệu</a></li>
	 			<li><a href="index.php">Tin tức</a></li>
	 			<li><a href="index.php">Liên hệ</a></li>
	 			<li><a href="index.php">Lên đầu trang</a></li>
	 		</ul>
	 	</center>	 	
	 </div>
	 <div class="carent-bottom">
	 	<div class="container container-line">
	 		<div class="row">
	 			<div class="col-md-4 hotline"><img src="<?php echo wp_upload_dir()["url"]."/hotline-f.png"; ?>"></div>
	 			<div class="col-md-8">
	 				<div class="col-md-3">
	 					<ul class="huongdan">
	 						<li><a href="index.php">Hướng dẫn mua hàng</a></li>
	 						<li><a href="index.php">Chính sách vận chuyển</a></li>	 					
	 					</ul>
	 				</div>
	 				<div class="col-md-3">
	 					<ul class="huongdan">
	 						<li><a href="index.php">Chính sách đổi trả</a></li>
	 						<li><a href="index.php">Khiếu nại sản phẩm</a></li>	 					
	 					</ul>
	 				</div>
	 				<div class="col-md-3">
	 					<ul class="huongdan">
	 						<li><a href="index.php">Chính sách bảo mật</a></li>
	 						<li><a href="index.php">An toàn tài chính</a></li>	 					
	 					</ul>
	 				</div>
	 				<div class="col-md-3">
	 					<ul class="huongdan">
	 						<li><a href="index.php">Hướng dẫn mua hàng</a></li>
	 						<li><a href="index.php">Chính sách vận chuyển</a></li>	 					
	 					</ul>
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
	 <?php get_footer(); ?>
	 <?php wp_footer();?>
	</body>
	</html>