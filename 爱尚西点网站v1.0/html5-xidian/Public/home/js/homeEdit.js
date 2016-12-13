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
        $.post("/html5-xidian/home.php/Home/shop/addCart",$data,function(res){
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

  $('body').on("click",'#delCart',function(){
      var str=$('#isLogin').text();
      var pos=str.indexOf('：');
      var username=str.substr(pos+1);
      if(!username){
        alert("请先登录!");
      }
      else{
        var id=$(this).attr('name');
        $data={
          'id':id,
          'username':username
        }
        $.post('delCart',$data,function(res){
            if(res=='success'){
              alert("删除成功!");
              location.reload();
            }
            else{
              alert('删除失败!');
            }
        });
      }
  });

  $('body').on('click','#commentBtn',function(){
    var comment=$('textarea').val();
    var username=$('#commentUser').text();
    var food_id=$('.font-a').attr('name');
    if(!username){
      username="匿名用户";
    }
    if(!comment){
      alert("评论内容不能为空!");
      return false;
    }
    else{
      $data={
        'comment':comment,
        'username':username,
        'food_id':food_id
      }

      $.post('/html5-xidian/home.php/Home/food/addComment',$data,function(res){
          if(res=='success'){
              $("textarea").val("");
              alert("评论成功!");
              location.reload();
          }
          else{
              alert("评论失败!");
          }
      });
    }
  });

  $('body').on('click','.reply',function(){
      var replyName=$(this).attr("name");
      //console.log(replyName);
      $("textarea").val("@"+replyName+" ");
  });

});