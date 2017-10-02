<!DOCTYPE html>
<?php 
global $customizerGlobal;
?>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
            wp_title('|', true,'right');
            bloginfo('name');
        ?>
    </title>    
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri() . '/';?>js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head();?>
</head>
<body>
<?php
/*require_once get_template_directory()."/check-page.php";
    new CheckPage();*/ 
global $zController;
$page_id_register_member = $zController->getHelper('GetPageId')->get('_wp_page_template','register-member.php');  
$page_id_account = $zController->getHelper('GetPageId')->get('_wp_page_template','account.php');
$page_id_security = $zController->getHelper('GetPageId')->get('_wp_page_template','security.php');  
$page_id_history = $zController->getHelper('GetPageId')->get('_wp_page_template','history.php');  
$register_member_link = get_permalink($page_id_register_member);
$account_link = get_permalink($page_id_account);
$security_link=get_permalink($page_id_security);
$history_link=get_permalink($page_id_history );
$ssName="vmuser";
$ssValue="userlogin";
$arrUser=array();
$ssUser     = $zController->getSession('SessionHelper',$ssName,$ssValue);
$arrUser = @$ssUser->get($ssValue)["userInfo"];      
?>
<div class="bg-header">
    <?php require_once "top-menu.php"; ?>
<div class="container header-midd">
    <div class="logo col-lg-2">
        <a class="cg-main-logo" href="<?php echo $customizerGlobal->general_section('link-site');?>">
                        <img src="<?php echo $customizerGlobal->general_section('site-logo');?>" />
                    </a>
    </div>
    <div class="col-lg-4">
        <div class="sologan-l">
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i> 
                <span>Hotline</span>
            </p>
            <div class="clr"></div>
            <p class="faq-order">Tư vấn, đặt hàng 24/24</p>
        </div>
        <div class="sologan-r">
                        <div class="sologan-r-in">
                            091 32 586 32
                        </div>

                    </div>
    </div>
    <div class="col-lg-3"><img src="<?php echo wp_upload_dir( )["url"]."/doctor.png"; ?>" class="doctor"></div>
    <div class="col-lg-3">        
        <table>
            <tr>
                <td><a href="index.php" class="a1">Hướng dẫn mua hàng</a></td>
                <td><img src="<?php echo wp_upload_dir()["url"]."/Cart-icon.png"; ?>"  /></td>                
            </tr>
            <tr>
                <td><a href="index.php" class="a1">Chính sách vận chuyển</a></td>
                <td><img src="<?php echo wp_upload_dir()["url"]."/Cow-wagon-icon.png"; ?>"  /></td>                
            </tr>
        </table>        
    </div>
</div>
<?php require_once "main-menu.php"; ?>
</div>
