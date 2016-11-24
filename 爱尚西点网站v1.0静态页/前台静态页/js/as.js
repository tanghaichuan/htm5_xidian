window.onload = function() {
	//验证用户名
	$("#username").blur(checkUserName);
	function checkUserName() {  
        var userName = document.getElementById("username").value;  
        if (userName == "") {  
            alert ("用户名不能为空！");
            return false;
        }  
        if (userName.length < 4 || userName.length > 16) {  
            alert ("用户名长度4-16个字符！"); 
            return false;   
        }  
        var charUserName = userName.toLowerCase();  
        for (var i = 0; i < userName.length; i++) {  
            var charusername = charUserName.charAt(i);  
            if (!(charusername >= 0 && charusername <= 9) && (!(charusername >= 'a' && charusername <= 'z')) && (charusername != '_')) {  
                alert ("用户名包含非法字母，只能包含字母，数字，和下划线");  
                return false;
            }  
        }  
        return true;       
    } 

    //验证昵称
    $("#nickname").blur(checkNickName);
	function checkNickName() {  
        var nickName = document.getElementById("nickname").value;  
        if (nickName == "") {  
            alert ("昵称不能为空！");
            return false;
        }  
        if (nickName.length > 16) {  
            alert ("昵称不能过长！"); 
            return false;   
        } 
        return true;       
    } 

    //验证密码
    $("#password").blur(checkPassword);
	function checkPassword() {  
        var password = document.getElementById("password").value;  
        if (password == "") {  
            alert ("密码不能为空！");
            return false;
        }  
        if (password.length < 6) {  
            alert ("密码不能少于6位！"); 
            return false;   
        } 
        return true;       
    }

    //验证确认密码
    $("#repassword").blur(checkRepassword);
    function checkRepassword() {  
        var password = document.getElementById("password").value; 
        var repassword = document.getElementById("repassword").value; 
        if (password != repassword) {  
            alert ("密码不同！");
            return false;
        }  
        return true;       
    }
}