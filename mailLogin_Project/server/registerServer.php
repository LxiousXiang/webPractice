<?php
	//获取用户注册信息
	$username = $_POST["user"];
	$password = $_POST["password"];
	$queryQuestion = $_POST["queryQuestion"];
	$queryQuestionAnswer = $_POST["queryPasswordAnswer"];
	$telephone = $_POST["telephone"];

	//设置数据库连接变量
	$host = "localhost";
	$user = "root";
	$pwd = "123456";
	$database = "xiangMail";
	$user_table = "userInfo";
	
	//连接数据库
	$conn = mysqli_connect($host,$user,$pwd);
	mysqli_select_db($conn,$database);

	//将用户信息存入数据库			
	$sql2 = "insert into userInfo(username,password,question,questionAnswer,telephone) 
				values('{$username}','{$password}','{$queryQuestion}',
				'{$queryQuestionAnswer}','{$telephone}')";	
	
	//根据存入结果跳转至相应界面	
	if(!mysqli_query($conn,$sql2)){
		//如果存入失败，跳转至失败页面
		include("registerFail.php");
	}
	else{
		//数据存入成功，则跳转到注册成功界面
		include("registerSuccess.php");
	}
?>
















