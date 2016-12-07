
$(document).ready(function(){
	$('body').on("click",'.heart',function(){
		$(this).css("background-position","")
		var D=$(this).attr("rel");
		if(D === 'like'){      
			$(this).addClass("heartAnimation").attr("rel","unlike");
		}
		else{
			$(this).removeClass("heartAnimation").attr("rel","like");
			$(this).css("background-position","left");
		}
	});
	$('body').on("click",'.heart',function(){
		var id=$(this).attr("name");
		$data={
			'id':id
			}
			
	});

});
