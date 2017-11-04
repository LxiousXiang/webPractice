<?php
	//获得用户登陆数据
	$username = $_POST["username"];
	$userPassword = $_POST["userPassword"];
	
	//设置登陆变量
	$host = "localhost";
	$user = "root";
	$pwd = "123456";
	$database = "xiangMail";
	
	//连接数据库
	$conn = mysqli_connect($host,$user,$pwd);
	mysqli_select_db($conn,$database);
	
	
	//查询用户名及密码是否正确
	$sql = "SELECT * FROM `userInfo` WHERE (username ='$username') AND (password='$userPassword')";
	
	if ($result = mysqli_query($conn,$sql)) {
		//打印查询到的记录数
		$rowCounts = $result->num_rows;
		//由查询的的记录数，来判断是否登陆成功
		if($rowCounts){
			include("loginSuccess.php");
		}
		else{
			include("loginFail.php");
		}
	}

	//关闭数据库连接
	mysqli_close($conn);
	
?>