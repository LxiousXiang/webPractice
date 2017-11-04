<?php
	$userString = $_POST["username"];
		
	//判断用户名是否为空
	if($userString == ""){
		echo "用户名不得为空!";
		exit();	
	}
	
	//mode1,判断开头是否为数字
	$mode1 = "/^[0-9]/";
	if(preg_match($mode1, $userString)){
		echo "不能以数字作为开头!";
		exit();
	}
	
	//判断用户名长度是否合乎要求
	$userStringLen = strlen($userString);
	if($userStringLen < 6){
		echo "用户名长度不得少于6位!";
		exit();	
	}
	if($userStringLen > 10){
		echo "用户名长度不得大于10位!";
		exit();
	}
	
	//判断用户名是否包含非法字符
	$mode2 = "/[a-zA-Z_0-9]{".(string)$userStringLen."}/";
	if(preg_match($mode2,$userString)){
		/***判断用户名是否已经存在***/
		//设置数据库连接变量
		$host = "localhost";
		$user = "root";
		$pwd = "123456";
		$database = "xiangMail";
		$user_table = "userInfo";
	
		//连接数据库
		$conn = mysqli_connect($host,$user,$pwd);
		mysqli_select_db($conn,$database);
		
		//在数据库中查询该用户名是否被注册
		$sql1 = "SELECT * FROM `userInfo` WHERE(username = '$userString')";
		if($result = mysqli_query($conn,$sql1)){
			$rowCounts = $result->num_rows;
			if($rowCounts){
				echo "对不起，该用户名已被注册";	
				exit();
			}
		}
	}
	else{
		echo "用户名中包含非法字符!";
		exit();
	}
	

	//在此设置用户名配置正确的信号
	echo false;

?>
