$(function(){
	$(".dropdown").mouseover(function(){
		$("ul",this).css("display","block");
	});
	$(".dropdown").mouseleave(function(){
		$("ul",this).css("display","none");
	});

  $('body').on("click",'.quitFavor',function(){
      var id=$(this).attr("name");
      $data={
        'id':id
      }
      $.post("quitFavor",$data,function(res){
          alert(res);
          location.reload();
      });
  });
	
  $('body').on("click",'#cart',function(){
      var username=$(this).attr("name");
      var mall_id=$(this).attr("value");
      if(!username){
        alert("请先登录!");
      }
      else{
        $data={
          'mall_id':mall_id,
          'username':username
        }
        $.post("addCart",$data,function(res){
            if(res=="success"){
              alert('添加成功!');
            }
            else if(res=="same"){
              alert("您已经添加了该商品!");
            }
            else{
              alert("添加失败!");
            }
        });
      } 
  });
});