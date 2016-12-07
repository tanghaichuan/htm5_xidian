$(function(){
	$(".dropdown").mouseover(function(){
		$("ul",this).css("display","block");
	});
	$(".dropdown").mouseleave(function(){
		$("ul",this).css("display","none");
	});

  $('body').on("click",'.quitFavor',function(){
      
  });
	/*function getCookie(cookie_name){  
      var allcookies = document.cookie;  
      var cookie_pos = allcookies.indexOf(cookie_name);   
      //索引的长度  
      // 如果找到了索引，就代表cookie存在，  
      // 反之，就说明不存在。  
      if (cookie_pos != -1){  
      // 把cookie_pos放在值的开始，只要给值加1即可。  
        cookie_pos += cookie_name.length + 1;        
        var cookie_end = allcookies.indexOf(";", cookie_pos);    
        if (cookie_end == -1){  
          cookie_end = allcookies.length;  
        }  
        var value = unescape(allcookies.substring(cookie_pos, cookie_end));  
      }
      return value;  
    }
    var cookie=getCookie("username");
    if(cookie){
    	$("#isLogin").html("欢迎："+cookie);
    }*/
    
});