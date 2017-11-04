function pic01(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image01");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","left;");
}

//各个对应景点的函数
function pic02(){
	//获取img对象
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image02");
	//首先判断当前处在center的对象是否为自己
	//若为自己,则do nothing , return
	if(own.hasClass("center")){
		return;
	}
	//将自己的img移至center
	own.attr("class","center");
	//将该img对象从center位置移走
	old_img.attr("class","top");
}

function pic03(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image03");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","left");
}

function pic04(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image04");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","right");
}

function pic05(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image05");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","top");
}

function pic06(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image06");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","left");
}

function pic07(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image07");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","right");
}

function pic08(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image08");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","right");
}

function pic09(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image09");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","top");
}

function pic10(){
	var old_img = $("#rside-up img[class='center']");
	var own = $("#image10");
	if(own.hasClass("center")){
		return;
	}
	own.attr("class","center");
	old_img.attr("class","left");
}
