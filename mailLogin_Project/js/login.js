// JavaScript Document

//设置用户名及密码审查是否成功信号
var userOK = false;
var passwordOK = false;

//检查用户名是否为空
$(function(){
	$("#username").blur(function(){
		$.ajax({
			type:'POST',
			url:"check/loginUserCheck.php",
			data:{
				"userinput":$("#username").val()	
			},
			dataType:"html",
			success:function(data){
				if(data == "OK"){
					userOK = true;
					$("#errorSpan").html("");
				}
				else{
					$("#errorSpan").html(data);	
				}
			}	
		})
	})
})

//检查密码是否为空
$(function(){
	$("#userPassword").blur(function(){
		$.ajax({
			type:'POST',
			url:"check/loginPwdCheck.php",
			data:{"passwordinput":$("#userPassword").val()},
			dataType:"html",
			success: function(data){
				if(data == "OK"){
					passwordOK = true;
					$("#errorSpan").html("");
				}
				else{
					$("#errorSpan").html(data);
				}
			}
		})
	})
});

//如果用户名、密码检测通过，则将表单提交至登陆后台处理
function LoginNow(){
	if(userOK && passwordOK)
	{
		document.getElementById("LoginForm").submit();
	}
	else{
		document.getElementById("errorSpan").innerHTML = "请输入用户名和密码！";
	}		
}


