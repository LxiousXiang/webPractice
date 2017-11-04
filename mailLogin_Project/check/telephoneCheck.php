<?php 
	$uesrTelephone = $_POST["telephone"];

	//判断用户输入是否为空
	if($uesrTelephone == ""){
		echo "不能为空";
		exit;	
	}

	//判断电话长度是否正确
	if(strlen($uesrTelephone) != 12){
		echo "电话输入有误，请检查格式、长度";
		exit();
	}

	//规定电话输入格式为 027-87654321
	//判读电话输入长度、格式是否正确
	$mode = "/[0-9]{3}\-[0-9]{8}/";
	if(!preg_match($mode,$uesrTelephone)){
		echo "电话输入有误，请检查格式、长度";
		exit();
	}

	//此处为设置电话信号成功信息
	echo false;
?>

