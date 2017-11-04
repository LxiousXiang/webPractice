<?php	
	$userQueryQuestion = $_POST["queryQuestion"];
	
	if($userQueryQuestion == ""){
		echo "不得为空";
		exit();
	}

	//在此设置查询密码问题配置正确信号
	echo false;

?>