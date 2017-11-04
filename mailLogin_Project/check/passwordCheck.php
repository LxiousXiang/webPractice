<?php
	$userPassword = $_POST["password"];
	
	//判断密码是否为空
	if($userPassword == ""){
		echo "密码不得为空!";
		exit();	
	}
	
	//判断密码长度是否符合要求
	$userPasswordLen = strlen($userPassword);
	if($userPasswordLen < 6){
		echo "密码长度不得小于6位!";
		exit();
	}
	if($userPasswordLen > 15){
		echo "密码长度不得大于15位!";
		exit();
	}
	
	//判断密码是否包含非法字符
	/*(由于常用符号太多，不便于设定，特此规定此次常用符号
	 *为 ：@  #  $  %  ^  &  *  
	 */
	$mode = "/[a-zA-Z_0-9@#$%^&*]{".(string)$userPasswordLen."}/";
	if(!preg_match($mode,$userPassword)){
		echo "密码包含非法字符!";	
		exit();
	}
	
	//在此设置密码配置正确的信号
	echo false;
?>

