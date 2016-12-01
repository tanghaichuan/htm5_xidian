$(function(){
	$("#addTags").click(addTags);

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
	//$(".tags tr:first")
});