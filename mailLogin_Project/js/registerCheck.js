// JavaScript Document
// 用于在注册页面对用户输入信息的合法性进行检查

//设置Check是否通过信号
var userOK = false;
var passwordOK = false;
var AckPwdOK = false;
var queryQ = false;
var queryQA = false;
var tel = false;


//userCheck部分
$(function(){
	$("#user").blur(function(){
			$.ajax({
				type:'POST',
				url:"check/userCheck.php",
				data:{
					"username":$("#user").val()
					},
				dataType:"html",
				success: function(data){
					if(data == false){
						userOK = true;
						$("#userError").html("恭喜您，用户名可用");
						$("#userError").css("color","#0C0");
					}
					else{
						$("#userError").html(data);
					}
				}
			})
	})
});


//passwordCheck部分
$(function(){
	$("#password").blur(function(){
			$.ajax({
				type:'POST',
				url:"check/passwordCheck.php",
				data:{
					"password":$("#password").val()
					},
				dataType:"html",
				success: function(data){
					if(data == false){
						passwordOK = true;
						$("#passwordError").html("填写正确");
						$("#passwordError").css("color","#0C0");
					}
					else{
						$("#passwordError").html(data);
					}
				}
			})	
	})
});


//AckPasswordCheck部分
$(function(){
	$("#AckPassword").blur(function(){
			$.ajax({
				type:'POST',
				url:"check/ackPasswordCheck.php",
				data:{
					"ackPassword":$("#AckPassword").val(),
					"password":$("#password").val()
					},
				dataType:"html",
				success: function(data){
					if(data == false){
						AckPwdOK = true;
						$("#AckPasswordError").html("密码一致");
						$("#AckPasswordError").css("color","#0C0");
					}
					else{
						$("#AckPasswordError").html(data);
					}
				}
			})
	})
});


//queryQuestionCheck部分
$(function(){
	$("#queryQuestion").blur(function(){
			$.ajax({
				type:'POST',
				url:"check/queryQuestionCheck.php",
				data:{
					"queryQuestion":$("#queryQuestion").val()
					},
				dataType:"html",
				success: function(data){
					if(data == false){
						queryQ = true;
						$("#queryQuestionError").html("问题可用");
						$("#queryQuestionError").css("color","#0C0");
					}
					else{
						$("#queryQuestionError").html(data);
					}
				}
			})	
	})
});


//queryQuestionAnswerCheck部分
$(function(){
	$("#queryQuestionAnswer").blur(function(){
			$.ajax({
				type:'POST',
				url:"check/queryQuestionAnswerCheck.php",
				data:{
					"queryQuestionAnswer":$("#queryQuestionAnswer").val()
					},
				dataType:"html",
				success: function(data){
					if(data == false){
						queryQA = true;
						$("#queryQuestionAnswerError").html("填写正确");
						$("#queryQuestionAnswerError").css("color","#0C0");
					}
					else{
						$("#queryQuestionAnswerError").html(data);
					}
				}
			})	
	})
});


//telephoneCheck部分
$(function(){
	$("#telephone").blur(function(){
			$.ajax({
				type:'POST',
				url:"check/telephoneCheck.php",
				data:{
					"telephone":$("#telephone").val()
					},
				dataType:"html",
				success: function(data){
					if(data == false){
						tel = true;
						$("#telephoneError").html("电话无误");
						$("#telephoneError").css("color","#0C0");
					}
					else{
						$("#telephoneError").html(data);
					}
				}
			})	
	})
});


//提交数据至server.php 文件进行处理
function submitForm(){
	if(userOK && passwordOK && AckPwdOK && queryQ && queryQA && tel){
		document.getElementById("submitAction").submit();
	}
}




