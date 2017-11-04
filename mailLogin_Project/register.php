<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户注册</title>
<link href="css/register.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/registerCheck.js"></script>
</head>
<body>
	<div class="registerDiv">
		<div class="welcomeDiv">
        	<span class="welcomeSpan">欢迎注册XIANG账号</span>
        </div>
        <form id="submitAction" action="server/registerServer.php" method="post">
        	<table border="0">
      			<tr>
                	<td class="tleft">
                    	 <span>用户名：</span>
                    </td>
                    <td>
                    	<input type="text" id="user" name="user" class="inputField">
            			<span>@xiang.com</span>
                    </td>
                    <td class="tright">
                    	 <span id="userError"></span>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td colspan="2" class="inputPrompt">
                    	只能由字母、数字和下划线组成，6~10且首字符不能为数字
                    </td>
                </tr>
                <tr>
                	<td class="tleft">
                    	<span>登陆密码：</span>
                    </td>
                    <td>
                    	 <input type="password" id="password" name="password" class="inputField">
                    </td>
                    <td  class="tright">
                    	 <span id="passwordError"></span>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td colspan="2" class="inputPrompt">
                    	6~15位，仅支持字母、数字、下划线 @ # $ % ^ & *
                    </td>
                </tr>
                <tr>
                	<td class="tleft">
                    	<span>确认密码：</span>
                    </td>
                    <td>
                    	 <input type="password" id="AckPassword" name="AckPassword" class="inputField">
                    </td>
                    <td  class="tright">
                    	<span id="AckPasswordError"></span>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td colspan="2" class="inputPrompt">
                    	两次输入的密码必须一致
                    </td>
                </tr>   
                <tr>
                	<td class="tleft">
                    	<span>查询密码问题：</span>
                    </td>
                    <td>
                    	<input type="text" id="queryQuestion" name="queryQuestion" class="inputField">
                    </td>
                    <td  class="tright">
                    	<span id="queryQuestionError"></span>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td colspan="2" class="inputPrompt">
                    	可任意设置
                    </td>
                </tr>  
                <tr>
                	<td class="tleft">
                    	<span>查询密码答案：</span>
                    </td>
                    <td>
                    	<input type="text" id="queryQuestionAnswer" name="queryPasswordAnswer" class="inputField">
                    </td>
                    <td  class="tright">
                    	<span id="queryQuestionAnswerError"></span>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td colspan="2" class="inputPrompt">
                    	必须8位以上
                    </td>
                </tr>
                <tr>
                	<td class="tleft">
                    	<span>电话：</span>
                    </td>
                    <td>
                    	 <input type="text" id="telephone" name="telephone" class="inputField">
                    </td>
                    <td class="tright">
                    	 <span id="telephoneError"></span>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td colspan="2" class="inputPrompt">
                    	须按 027-87654321 格式输入
                    </td>
                </tr>
                <tr>
                	<td colspan="3">
                    	<input type="reset" id="resetBtn"  value="重新填写">
                        <input type="button" id="submitBtn" value="立即注册" onClick="submitForm()">
                    </td>
                </tr>         
            </table>
       </form>
       <div id="footerPrompt"></div>
   </div>
</body>
</html>