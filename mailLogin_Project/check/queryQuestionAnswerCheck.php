<?php
	$userQueryQuestionAnswer = $_POST["queryQuestionAnswer"];

	//判断查询密码答案是否为空
	if($userQueryQuestionAnswer == ""){
		echo "不能为空";
		exit();	
	}

	//判断密码答案位数是否为8位以上
	if(strlen($userQueryQuestionAnswer) < 8){
		echo "位数不得低于8位";
		exit();	
	}

	//此处设置查询密码答案成功信号
	echo false;
?>