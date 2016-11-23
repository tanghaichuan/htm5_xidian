$(function(){
	$(".username").blur(testUsername);
	$("#inputUserName").blur(test_Username);
	$(".password").blur(testPassword);
	$("#inputPwd").blur(test_Password);
	$(".rePassword").blur(testRePassword);
	$("#rePassword").blur(testRe_Password);
	$("#inputRePwd").blur(testRe_Password);
	$(".telphone").blur(testTelphone);
	$("#inputTelphone").blur(test_Telphone);
	$("#registerBtn").click(testDisable);
	$(":file").change(submit_upload_picture);
	$("#del").click(function(){
		return confirm("是否删除？");
	});

	var username=false;
	var password=false;
	var rePassword=false;
	var telphone=false;
	function testUsername(){
		var str=$(this).val().trim("");
		var user_pwd_patten=/^[0-9A-Za-z]{6,10}$/;
		if(str.match(user_pwd_patten)){
			$(this).css("border-bottom","solid 1px #20bdf0");
			username=true;
		}
		else{
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
		}
		else{
			$(this).css("border-bottom","solid 1px #ed1c24");
			rePassword=false;
		}
	}
	function testRe_Password(){
		var password=$("#inputPwd").val().trim("");
		var str=$(this).val().trim("");
		if(str==password){
			$(this).css("border","solid 1px #20bdf0");
			rePassword=true;
		}
		else{
			$(this).css("border","solid 1px #ed1c24");
			rePassword=false;
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
		if(username&&password&&rePassword&&telphone){
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