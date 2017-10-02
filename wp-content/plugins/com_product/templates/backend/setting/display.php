<?php
	global $zController;	
	$data=array();
	$option_name = 'zendvn_sp_setting';
	if(!$zController->isPost()){
		$data = get_option('zendvn_sp_setting',array());
		if(count($data)==0){
			$data = $zController->getConfig('SettingConfig')->get();
		}
	}
	$vHtml 				= new HtmlControl();
	$inputID 			= $option_name . '_product_number';
	$inputName 			= $option_name . '[product_number]';
	$inputValue 		= @$data['product_number'];	
	$product_number		= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_article_number';
	$inputName 			= $option_name . '[article_number]';
	$inputValue 		= @$data['article_number'];	
	$article_number		= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_product_width';
	$inputName 			= $option_name . '[product_width]';
	$inputValue 		= @$data['product_width'];			
	$product_width		= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_product_height';
	$inputName 			= $option_name . '[product_height]';
	$inputValue 		= @$data['product_height'];			
	$product_height		= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);	

	$inputID 			= $option_name . '_currency_unit';
	$inputName 			= $option_name . '[currency_unit]';
	$inputValue 		= $data['currency_unit'];			
	$currency_unit		= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);	

	$inputID 			= $option_name . '_smtp_host';
	$inputName 			= $option_name . '[smtp_host]';
	$inputValue 		= $data['smtp_host'];			
	$smtp_host			= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_smpt_port';
	$inputName 			= $option_name . '[smpt_port]';
	$inputValue 		= $data['smpt_port'];			
	$smtp_port			= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_encription';
	$inputName 			= $option_name . '[encription]';
	$inputValue 		= $data['encription'];
	$encription			= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_smtp_auth';
	$inputName 			= $option_name . '[smtp_auth]';
	$inputValue 		= $data['smtp_auth'];
	$options			= array('data' => array(false=> 'No',true=>'Yes'),
						'separator' => ' ');			
	$smtp_auth			= $vHtml->cmsRadio($inputName,"regular-text", $inputValue,$attr,$options);

	$inputID 			= $option_name . '_smtp_username';
	$inputName 			= $option_name . '[smtp_username]';
	$inputValue 		= $data['smtp_username'];			
	$smtp_username		= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_smtp_password';
	$inputName 			= $option_name . '[smtp_password]';
	$inputValue 		= $data['smtp_password'];			
	$smtp_password		= $vHtml->cmsPassword($inputID,$inputName,"regular-text", $inputValue);			

	$inputID 			= $option_name . '_email_from';
	$inputName 			= $option_name . '[email_from]';
	$inputValue 		= $data['email_from'];			
	$arr 				= array('size' =>'25','id' => $inputID);
	$email_from			= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);			

	$inputID 			= $option_name . '_email_to';
	$inputName 			= $option_name . '[email_to]';
	$inputValue 		= $data['email_to'];			
	$arr 				= array('size' =>'25','id' => $inputID);
	$email_to			= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);

	$inputID 			= $option_name . '_from_name';
	$inputName 			= $option_name . '[from_name]';
	$inputValue 		= $data['from_name'];			
	$from_name			= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);			

	$inputID 			= $option_name . '_to_name';
	$inputName 			= $option_name . '[to_name]';
	$inputValue 		= $data['to_name'];			
	$to_name			= $vHtml->cmsTextbox($inputID,$inputName,"regular-text", $inputValue);		
?>
<div class="wrap">
	<h1>Setting</h1>
	<form method="post" action="" id="<?php echo $option_name;?>" name="<?php echo $option_name;?>"enctype="multipart/form-data">
		<h2><i><font color="red">Show article in FrontEnd</font></i></h2>
		<div class="zendvn-sp-form-table">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<b><i><label >Articles in a page</label></i></b>
					</th>
					<td><?php echo $article_number;?></td>
				</tr>						
			</tbody>
			
		</table>
		</div>
		<h2><i><font color="red">Show product in FrontEnd</font></i></h2>
		<div class="zendvn-sp-form-table">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<b><i><label >Products in a page</label></i></b>
					</th>
					<td><?php echo $product_number;?></td>
				</tr>		
				<tr>
					<th scope="row">
						<b><i><label >Width</label></i></b>
					</th>
					<td><?php echo $product_width;?></td>
				</tr>
				<tr>
					<th scope="row">
						<b><i><label >Height</label></i></b>
					</th>
					<td><?php echo $product_height;?></td>
				</tr>		
			</tbody>			
		</table>
		</div>		
		<h2><i><font color="red">Currency</font></i></h2>
		<div class="zendvn-sp-form-table">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<b><i><label >Currency unit</label></i></b>
					</th>
					<td><?php echo $currency_unit;?></td>
				</tr>
			</tbody>			
		</table>
		</div>				
		<h2><i><font color="red">Email configs</font></i></h2>
		<div class="zendvn-sp-form-table">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<b><i><label >SMTP Host</label></i></b>
					</th>
					<td><?php echo $smtp_host;?></td>
				</tr>
				<tr>
					<th scope="row">
						<b><i><label >SMTP Port</label></i></b>
					</th>
					<td><?php echo $smtp_port;?></td>
				</tr>
				<tr>
					<th scope="row">
						<b><i><label >Type of Encription</label></i></b>
					</th>
					<td><?php echo $encription;?></td>
				</tr>
				<tr>
					<th scope="row">
						<b><i><label >SMTP Authentication</label></i></b>
					</th>
					<td><?php echo $smtp_auth;?></td>
				</tr>
				<tr>
					<th scope="row">
						<b><i><label >SMTP username</label></i></b>
					</th>
					<td><?php echo $smtp_username;?></td>
				</tr>
				<tr>
					<th scope="row">
						<b><i><label >SMTP password</label></i></b>
					</th>
					<td><?php echo $smtp_password;?></td>
				</tr>
				<tr>
					<th scope="row">
						<b><i><label >Email from</label></i></b>
					</th>
					<td><?php echo $email_from;?></td>
				</tr>	
				<tr>
					<th scope="row">
						<b><i><label >Email to</label></i></b>
					</th>
					<td><?php echo $email_to;?></td>
				</tr>	
				<tr>
					<th scope="row">
						<b><i><label >From name</label></i></b>
					</th>
					<td><?php echo $from_name;?></td>
				</tr>				
				<tr>
					<th scope="row">
						<b><i><label >Name to</label></i></b>
					</th>
					<td><?php echo $to_name;?></td>
				</tr>				
			</tbody>			
		</table>
		</div>
		<!--Send mail - End -->
		<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
	</form>
</div>