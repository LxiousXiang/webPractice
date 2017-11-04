<?php
	//获取用户输入的用户名字符串
	$userinput = $_POST["userinput"];
	
	//判断用户名输入是否为空
	if($userinput == ""){
		echo "用户名不能为空";
		exit();	
	}
	
	//用户名输入不为空，返回成功信号
	echo "OK";

?>