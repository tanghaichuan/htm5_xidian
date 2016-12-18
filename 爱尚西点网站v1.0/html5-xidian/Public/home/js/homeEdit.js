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
  //取消购物车商品
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
  //评论
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


  
  //变换商品数量
  $(".number").each(function(){
      var that=$("#text_box",this);
      $('#min',this).attr('disabled',true);
      var min=$('#min',this);
      //增加
      $("#add",this).click(function(){
        that.val(parseInt(that.val())+1)
        if (parseInt(that.val())!=1){
            min.attr('disabled',false);
        }
      });
      //减少
      $("#min",this).click(function(){
        that.val(parseInt(that.val())-1)
        if (parseInt(that.val())==1){
            min.attr('disabled',true);
        }
      });
  });

    //购物车全选、全不选
    var tag=true;
    $(".selectAll").click(function(){
        if(!tag){
          $(".selectAll").prop("checked",false);
          tag=true;
        }
        else{
          $(".selectAll").prop("checked",true);
          tag=false;
        }
        if($(".selectAll").prop("checked")){
          $("tr").each(function(){
            $("input:checkbox",this).prop("checked",true);
          });
        }
        else{
          $("tr").each(function(){
            $("input:checkbox",this).prop("checked",false);
          });
        }
    });

    //购物车总价结算
    var total=0
    $('tr').each(function(){
      var count=$("#text_box",this);//商品数量
      var add=$("#add",this);//+
      var min=$("#min",this);//-
      var that=$(this);
      var price =$(this).find("#price").text();//单价
      var sum =$(this).find(".sum").text();//金额
      add.click(function(){
          sum=parseInt(price)*count.val();
          that.find(".sum").html(sum);
      });
      min.click(function(){
          sum=parseInt(price)*count.val();
          that.find(".sum").html(sum);
     });
      //遍历被选中的文本框，累加求和
      $("input:checkbox",this).click(function(){
        //该商品被选中
        if($(this).prop('checked')){
          var sum =that.find(".sum").text();//金额
          total=parseInt(total)+parseInt(sum);
        }
        else{
          var sum =that.find(".sum").text();//金额
          total=parseInt(total)-parseInt(sum);
        }
          $("#total").html(parseInt(total));
      });
    });

    //个人中心 取消发布
    $(".quitPublish").click(function(){
        var publish_name=$(this).attr("name");
        var id=$(this).attr("rel");
        $data={
          'publish_name':publish_name,
          'id':id
        }
        $.post("/html5-xidian/home.php/Home/users/quitpublish",$data,function(res){
            alert(res);
            location.reload();
        });
    });

    //前台模糊搜索
    /*$(".awesomplete").onpropertychange(function(){
        var data=$(this).val();
        $data={
          'data':data
        }
        $.post("/html5-xidian/home.php/Home/index/search",$data,function(res){
            console.log(res);
        });
    });*/
    
    $('#searchFood').bind('change', function() { 
        var data=$(this).val();
        if(data.length==0){
          $(".mylist").empty();
        }
        else{
           $data={
          'data':data
          }
          $.post("/html5-xidian/home.php/Home/index/search",$data,function(res){
              $(".mylist").empty();
              if(res){
                $li="<li>您可能想要...</li>";
                $(".mylist").append($li);
                var req=JSON.parse(res);
                for(var i=0;i<req.length;i++){
                  $li="<a href='"+"/html5-xidian/home.php/Home/food/content/id/"+req[i].id+"'><li>"+req[i].name+"</li></a>"
                  //$li="<a href="+"{:U(Home/food/content',array('id'=>"+req[i].id+"))}><li>"+req[i].name+"</li></a>"
                  $(".mylist").append($li);
                }
              } 
          });
        }
       
    });
    //内容页加入收藏
    $("#addFav").click(function(){
        var username=$(this).attr("value");
        var id=$(this).attr("name");
        if(!username){
          alert("请先登录！");
        }
        else{
          $data={
          'id':id,
          'username':username
          }
          var that=this;
          $.post("/html5-xidian/home.php/Home/food/favorite",$data,function(res){
            if(res=="success"){
              alert("收藏成功!");
            }
            else if(res=="error"){
              alert("收藏失败!");
            }
            else if(res=="quitSuccess"){
              alert("取消收藏成功");
            }
            else{
              alert("未知错误!");
            }
          }); 
        }
    });
});