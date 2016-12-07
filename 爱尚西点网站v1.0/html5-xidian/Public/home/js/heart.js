
$(document).ready(function(){

	$(".heart").each(function(){
		var username=$(this).attr("value");
		var id=$(this).attr("name");
		var that=this;
		$data={
			'id':id,
			'username':username
		}
		$.ajax({
			type : "post",  
          	url : "getFav",  
          	data : $data,  
          	async : true,  
          	success : function(res){  
	            $(that).attr("rel",res);
	            if(res=='like'){
	            	$(that).css("background-position","right");	
	            }
	            else{
	            	$(this).css("background-position","left");	
	            }
            }
		});
		
	});


	$('body').on("click",'.heart',function(){
		$(this).css("background-position","")
		var username=$(this).attr("value");
		var id=$(this).attr("name");
		var D=$(this).attr("rel");
		if(D == 'like'){   
			$(this).removeClass("heartAnimation");
		}
		else{
			$(this).addClass("heartAnimation");	
		}
		if(!username){
			$(this).removeClass("heartAnimation").attr("rel","unlike");
			$(this).css("background-position","left");
			alert("请先登录！");
		}
		else{
			$data={
			'id':id,
			'username':username
			}
			var that=this;
			$.post("favorite",$data,function(res){
				if(res=="success"){
					$(that).attr("rel","like");
					$(that).css("background-position","right")
					alert("收藏成功!");
				}
				else if(res=="error"){
					$(that).attr("rel","unlike");
					$(that).css("background-position","left");
					alert("收藏失败!");
				}
				else if(res=="quitSuccess"){
					$(that).attr("rel","unlike");
					$(that).css("background-position","left");
					alert("取消收藏成功");
				}
				else{
					alert("未知错误!");
				}
			});	
		}
	});




});
