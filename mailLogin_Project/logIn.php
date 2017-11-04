<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>XIANG邮箱登陆界面</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
	<div class="loginField";>
    	<div id="loginFieldHeader"></div>
        <div id="welcomePrompt">欢迎登陆XIANG邮箱</div>
    	<form id="LoginForm" action="server/loginServer.php" method="post">
        		<!--用户名区域-->
            	<div class="userField">
                	<!--左边输入框-->
                	<div class="userLeft">
                    	<input type="text" id="username" name="username" placeholder="用户名">
                    </div>
                    <!--右边邮箱域名-->
                	<div class="userRight">
                    	<span id="userRightSpan">@xiang.com</span>
                    </div>
                </div>
                
                <!--密码区域-->
                <div id="passwordField">
                	<input type="password" id="userPassword" name="userPassword" placeholder="密码">
                </div>
                
                <!--忘记密码区域-->
                <div id="forgetPassword">
                	 <span>忘记密码?</span>
                </div>
               
               	<!--登陆错误提示区域-->
                <div id="errorPrompt">
                	<span id="errorSpan"></span>
                </div>
               
                <!--按钮区域-->
                <div id="buttonField">
                	<input type="button" id="login" name="login" value="登陆" onClick="LoginNow()">
                    <input type="button" id="registerNow" name="registerNow" value="立即注册"
                    	onClick="window.location.href='register.php'">
                </div>
        </form>
    </div>
</body>
</html>