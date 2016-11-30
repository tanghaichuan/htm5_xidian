window.onload = function() {
	//验证用户名
	$("#username").blur(checkUserName);
	function checkUserName() {  
        var userName = document.getElementById("username").value;  
        if (userName == "") {  
            document.getElementById("usernameput").style.display=""; 
            document.getElementById("usernameput").innerHTML="<span style='color: red;font-size: 12px;'><b>用户名不能为空！</b></span>";
            return false;
        }  
        if (userName.length < 4 || userName.length > 16) {  
            document.getElementById("usernameput").style.display=""; 
            document.getElementById("usernameput").innerHTML="<span style='color: red;font-size: 12px;'><b>用户名长度4-16个字符！</b></span>";
            return false;   
        }
        else {
            document.getElementById("usernameput").style.display="none"; 
        }  
        var charUserName = userName.toLowerCase();  
        for (var i = 0; i < userName.length; i++) {  
            var charusername = charUserName.charAt(i);  
            if (!(charusername >= 0 && charusername <= 9) && (!(charusername >= 'a' && charusername <= 'z')) && (charusername != '_')) {  
                document.getElementById("usernameput").style.display=""; 
                document.getElementById("usernameput").innerHTML="<span style='color: red;font-size: 12px;'><b>用户名包含非法字母，只能包含字母，数字，和下划线</b></span>"; 
                return false;
            } 
            else {
            document.getElementById("usernameput").style.display="none"; 
            }  
        }  
        return true;      
    } 

    //验证昵称
    $("#nickname").blur(checkNickName);
	function checkNickName() {  
        var nickName = document.getElementById("nickname").value;  
        if (nickName == "") { 
            document.getElementById("nicknameput").style.display=""; 
            document.getElementById("nicknameput").innerHTML="<span style='color: red;font-size: 12px;'><b>昵称不能为空！</b></span>";
            return false;
        }  
        if (nickName.length > 16) { 
            document.getElementById("nicknameput").style.display=""; 
            document.getElementById("nicknameput").innerHTML="<span style='color: red;font-size: 12px;'><b>昵称过长！</b></span>";
            return false;   
        } 
        else {
            document.getElementById("nicknameput").style.display="none"; 
        } 
        return true;     
    } 

    //验证手机号
    $("#telphone").blur(checkTelPhone);
    function checkTelPhone() {  
        var telPhone = document.getElementById("telphone").value;
        if (telPhone == "") { 
            document.getElementById("telphoneput").style.display=""; 
            document.getElementById("telphoneput").innerHTML="<span style='color: red;font-size: 12px;'><b>手机号不能为空！</b></span>";
            return false;
        }    
        if (!/^1\d{10}$/.test(telPhone)) {
        document.getElementById("telphoneput").style.display="";   
            document.getElementById("telphoneput").innerHTML="<span style='color: red;font-size: 12px;'><b>请正确输入手机号！</b></span>";
            return false;
        } 
        else {
            document.getElementById("telphoneput").style.display="none"; 
        }  
        return true;    
    }

    //验证密码
    $("#password").blur(checkPassword);
	function checkPassword() {  
        var password = document.getElementById("password").value;  
        if (password == "") {
            document.getElementById("passwordput").style.display="";  
            document.getElementById("passwordput").innerHTML="<span style='color: red;font-size: 12px;'><b>密码不能为空！</b></span>";
            return false;
        }  
        if (password.length < 6) {
            document.getElementById("passwordput").style.display="";  
            document.getElementById("passwordput").innerHTML="<span style='color: red;font-size: 12px;'><b>密码不能少于6位！</b></span>";
            return false;   
        } 
        else {
            document.getElementById("passwordput").style.display="none";
        } 
        return true;       
    }

    //验证确认密码
    $("#repassword").blur(checkRepassword);
    function checkRepassword() {  
        var password = document.getElementById("password").value; 
        var repassword = document.getElementById("repassword").value; 
        if (password != repassword) { 
            document.getElementById("repasswordput").style.display=""; 
            document.getElementById("repasswordput").innerHTML="<span style='color: red;font-size: 12px;'><b>密码不同！</b></span>";
            return false;
        }
        else {
            document.getElementById("repasswordput").style.display="none";
        }  
        return true;       
    }
}