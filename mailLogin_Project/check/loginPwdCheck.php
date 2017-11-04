<?php 
	//获取用户密码输入字串
	$passwordinput = $_POST["passwordinput"];
	
	//判断用户输入是否为空
	if($passwordinput == ""){
		echo "密码不能为空";
		exit();
	}
	
	//设置密码审查通过信号
	echo "OK";
	
?>