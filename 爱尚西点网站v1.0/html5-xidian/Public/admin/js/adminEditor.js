$(function(){
	$(".username").change(testUsername);
	$("#inputUserName").change(testUsername);
	$("#inputUserName").change(test_Username);
	$(".password").change(testPassword);
	$("#inputPwd").change(test_Password);
	$(".rePassword").change(testRePassword);
	$("#rePassword").change(testRe_Password);
	$("#inputRePwd").change(testRe_Password);
	$(".telphone").change(testTelphone);
	$("#registerBtn").click(testDisable);
	$("#inputNewPwd").change(testEditPwd);
	//$(":file").change(submit_upload_picture);
	$("#inputTelphone").change(function(){
		var str=$(this).val().trim("");
		var tel_patten=/^1(3|4|5|7|8)\d{9}$/;
		if(str.match(tel_patten)){
			$(this).css("border","solid 1px #20bdf0");
			$("button:submit").attr("disabled",null);
		}
		else{
			$(this).css("border","solid 1px #ed1c24");
			$("button:submit").attr("disabled",true);
		}
	});
	
	
	var username=false;
	var password=false;
	var rePassword=false;
	var telphone=false;
	var realname=false;

	function testEditPwd(){
		var str=$(this).val().trim("");
		var user_pwd_patten=/^[0-9A-Za-z]{6,10}$/;
		if(str.match(user_pwd_patten)){
			$(this).css("border","solid 1px #20bdf0");
			$("button:submit").attr("disabled",null);
		}
		else{
			$(this).css("border","solid 1px #ed1c24");
			$("button:submit").attr("disabled",true);
		}
	}

	function testUsername(){
		$("#res").html("");
		var str=$(this).val().trim("");
		var user_pwd_patten=/^[0-9A-Za-z]{6,10}$/;
		$data={
			'str':str
		}
		$.post("username_unique",$data,function(res){
			if(res=="error"){
				$("#res").html("用户名已存在！");
				$(".username").css("border-bottom","solid 1px #ed1c24");
				username=false;
			}
		});
		if(str.match(user_pwd_patten)){
			$(this).css("border-bottom","solid 1px #20bdf0");
			username=true;
		}
		else {
			$(this).css("border-bottom","solid 1px #ed1c24");
			username=false;
		}
	}
	function test_Username(){
		var str=$(this).val().trim("");
		var user_pwd_patten=/^[0-9A-Za-z]{6,10}$/;
		if(str.match(user_pwd_patten)){
			$(this).css("border","solid 1px #20bdf0");
			username=true;
		}
		else{
			$(this).css("border","solid 1px #ed1c24");
			username=false;
		}
	}
	function testPassword(){
		var str=$(this).val().trim("");
		var user_pwd_patten=/^[0-9A-Za-z]{6,10}$/;
		if(str.match(user_pwd_patten)){
			$(this).css("border-bottom","solid 1px #20bdf0");
			password=true;
		}
		else{
			$(this).css("border-bottom","solid 1px #ed1c24");
			password=false;
		}
	}
	function test_Password(){
		var str=$(this).val().trim("");
		var user_pwd_patten=/^[0-9A-Za-z]{6,10}$/;
		if(str.match(user_pwd_patten)){
			$(this).css("border","solid 1px #20bdf0");
			password=true;
		}
		else{
			$(this).css("border","solid 1px #ed1c24");
			password=false;
		}
	}
	function testRePassword(){
		var password=$(".password").val().trim("");
		var str=$(this).val().trim("");
		var user_pwd_patten=/^[0-9A-Za-z]{6,10}$/;
		if(str.match(user_pwd_patten)&&str==password){
			$(this).css("border-bottom","solid 1px #20bdf0");
			rePassword=true;
			$("button:submit").attr("disabled",null);
		}
		else{
			$(this).css("border-bottom","solid 1px #ed1c24");
			rePassword=false;
			$("button:submit").attr("disabled",true);
		}
	}
	function testRe_Password(){
		var password=$("#inputPwd").val().trim("");
		var str=$(this).val().trim("");
		if(str==password){
			$(this).css("border","solid 1px #20bdf0");
			rePassword=true;
			$("button:submit").attr("disabled",null);
		}
		else{
			$(this).css("border","solid 1px #ed1c24");
			rePassword=false;
			$("button:submit").attr("disabled",true);
		}
	}
	function testTelphone(){
		var str=$(this).val().trim("");
		var tel_patten=/^1(3|4|5|7|8)\d{9}$/;
		if(str.match(tel_patten)){
			$(this).css("border-bottom","solid 1px #20bdf0");
			telphone=true;
		}
		else{
			$(this).css("border-bottom","solid 1px #ed1c24");
			telphone=false;
		}
	}
	function test_Telphone(){
		var str=$(this).val().trim("");
		var tel_patten=/^1(3|4|5|7|8)\d{9}$/;
		if(str.match(tel_patten)){
			$(this).css("border","solid 1px #20bdf0");
			telphone=true;
		}
		else{
			$(this).css("border","solid 1px #ed1c24");
			telphone=false;
		}
	}
	function testDisable(){
		if($(".realname").val()==""){
			$(".realname").css("border-bottom","solid 1px #ed1c24");
			realname=false;
		}
		else{
			$(".realname").css("border-bottom","solid 1px #20bdf0");
			realname=true;
		}

		if(username&&password&&rePassword&&telphone&&realname){
			$(".register").submit();
		}
		else{
			return false;
		}
	}

	function submit_upload_picture(){
		var file = $('#inputFoodImg').value;
	    var pos=file.lastIndexOf('.');
	    var len=file.length;
	    var postfix=file.substring(pos+1,len);
	    console.log(typeof(file));
	}	


});