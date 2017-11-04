<?php
	$userAckPassword = $_POST["ackPassword"];
	$userPassword = $_POST["password"];
	
	//判断确认密码是否为空
	if($userAckPassword == ""){
		echo "确认密码不能为空";
		exit();
	}
	
	if($userAckPassword != $userPassword){
		echo "两次密码不一致";
		exit();
	}
	
	//在此设置确认密码成功信号
	echo false;
?>