$(function(){
	$("#addTags").click(addTags);
	$('.searchSpan').click(function(){
		$('.searchForm').submit();
	});

	//添加标签
	function addTags(){
		if(!$("#inputTag").val()){
			alert("标签不能为空！");
			return false;
		}
		else{
			$data={
			'tagname':$("#inputTag").val()
			}
			$.post("add",$data,function(res){
				if(res=="success"){
					alert("添加成功！");
					location.reload();
				}
				else{
					alert("标签重复或信息有误！");
				}
			});
			
		}
	}
	//添加美食设置标签动画
	$("body").on("click",".addTag",function(){
		var tag=$(this).attr("rel");
		if(tag=="none"){
			$(this).attr("id","tag_a_click");
			$("span",this).attr("id","tag_span_click");
			$(this).attr("rel","add");
		}
		else{
			$(this).attr("id","");
			$("span",this).attr("id","");
			$(this).attr("rel","none");
		}
	});
	//向后台传标签
	var tags=[];
	var tag="";
	$("#submit").click(function(){
		$(".addTag").each(function(){
			if($(this).attr("rel")=="add"){
				var tag=$("span",this).text();
				tags.push(tag);
			}
		});
		for(var i = 0;i<tags.length;i++){
	     	if(i!=tags.length-1){
	          tag=tag+tags[i]+",";
	     	}else{
	         tag=tag+tags[i];
	    	}
		}
		//console.log(tag);
		$("#postTag").val(tag);
	});
	//向后台传步骤
	$("#submit").click(function(){
		var step=[""];
		for(var i = 0;i<$(".step").length;i++){
	     	if(i!=$(".step").length-1){
	          step=step+$(".step textarea:eq("+i+")").val()+"#";
	     	}else{
	          step=step+$(".step textarea:eq("+i+")").val();
	    	}
		}
		//console.log(step);
		$("#postStep").val(step);
	});
	//美食发布状态
	
	
});