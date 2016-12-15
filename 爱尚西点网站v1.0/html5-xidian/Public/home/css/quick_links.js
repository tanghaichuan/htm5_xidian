jQuery(function($){
	//创建DOM
	var 
	quickHTML = document.querySelector("div.quick_link_mian"),
	quickShell = $(document.createElement('div')).html(quickHTML).addClass('quick_links_wrap'),
	quickLinks = quickShell.find('.quick_links');
	quickPanel = quickLinks.next();
	quickShell.appendTo('.mui-mbar-tabs');
	
	//具体数据操作 
	var 
	quickPopXHR,
	loadingTmpl = '<div class="loading" style="padding:30px 80px"><i></i><span>Loading...</span></div>',
	popTmpl = '<a href="javascript:;" class="ibar_closebtn" title="关闭"></a><div class="ibar_plugin_title"><h3><%=title%></h3></div><div class="pop_panel"><%=content%></div><div class="arrow"><i></i></div><div class="fix_bg"></div>',
	historyListTmpl = '<ul><%for(var i=0,len=items.length; i<5&&i<len; i++){%><li><a href="<%=items[i].productUrl%>" target="_blank" class="pic"><img alt="<%=items[i].productName%>" src="<%=items[i].productImage%>" width="60" height="60"/></a><a href="<%=items[i].productUrl%>" title="<%=items[i].productName%>" target="_blank" class="tit"><%=items[i].productName%></a><div class="price" title="单价"><em>&yen;<%=items[i].productPrice%></em></div></li><%}%></ul>',
	quickPop = quickShell.find('#quick_links_pop'),
	quickDataFns = {
		//购物信息
		message_list: {
			title: '购物车',
			content: '<div class="ibar_plugin_content"><div class="ibar_cart_group ibar_cart_product"><div class="ibar_cart_group_header"><span class="ibar_cart_group_title">采购中</span><a href="#">我的购物车</a></div><ul><li class="cart_item"><div class="cart_item_pic"><a href="#"><img src="" /></a></div><div class="cart_item_desc"><a href="#" class="cart_item_name"></a><div class="cart_item_sku"><span></span></div><div class="cart_item_price"><span class="cart_price"></span></div></div>	</li></ul></div><div class="cart_handler"><div class="cart_handler_header"><span class="cart_handler_left">共<span class="cart_price">1</span>件商品</span><span class="cart_handler_right">￥0.00</span></div><a href="#" class="cart_go_btn" target="_blank">去购物车结算</a></div></div>',
			init:$.noop
		},
		mpbtn_wdsc:{
			title: '收藏的产品',
			content: '<div class="ibar_plugin_content"><div class="ibar_cart_group ibar_cart_product"><ul><li class="cart_item"><div class="cart_item_pic"><a href="#"><img src="" /></a></div><div class="cart_item_desc"><a href="#" class="cart_item_name"></a><div class="cart_item_sku"><span></span></div><div class="cart_item_price"><span class="cart_price"></span><a href="#" class="sc" title="删除"><img src="" alt="删除" /></a></div></div>	</li></ul></div><div class="cart_handler"><a href="#" class="cart_go_btn jiaru" target="_blank">加入购物车</a></div></div>',
			init: $.noop
		}
	};
	
	//showQuickPop
	var 
	prevPopType,
	prevTrigger,
	doc = $(document),
	popDisplayed = false,
	hideQuickPop = function(){
		if(prevTrigger){
			prevTrigger.removeClass('current');
		}
		popDisplayed = false;
		prevPopType = '';
		quickPop.hide();
		quickPop.animate({left:280,queue:true});
	},
	showQuickPop = function(type){
		if(quickPopXHR && quickPopXHR.abort){
			quickPopXHR.abort();
		}
		if(type !== prevPopType){
			var fn = quickDataFns[type];
			quickPop.html(ds.tmpl(popTmpl, fn));
			fn.init.call(this, fn);
		}
		doc.unbind('click.quick_links').one('click.quick_links', hideQuickPop);

		quickPop[0].className = 'quick_links_pop quick_' + type;
		popDisplayed = true;
		prevPopType = type;
		quickPop.show();
		quickPop.animate({left:0,queue:true});
	};
	quickShell.bind('click.quick_links', function(e){
		e.stopPropagation();
	});
	quickPop.delegate('a.ibar_closebtn','click',function(){
		quickPop.hide();
		quickPop.animate({left:280,queue:true});
		if(prevTrigger){
			prevTrigger.removeClass('current');
		}
	});

	//通用事件处理
	var 
	view = $(window),
	quickLinkCollapsed = !!ds.getCookie('ql_collapse'),
	getHandlerType = function(className){
		return className.replace(/current/g, '').replace(/\s+/, '');
	},
	showPopFn = function(){
		var type = getHandlerType(this.className);
		if(popDisplayed && type === prevPopType){
			return hideQuickPop();
		}
		showQuickPop(this.className);
		if(prevTrigger){
			prevTrigger.removeClass('current');
		}
		prevTrigger = $(this).addClass('current');
	},
	quickHandlers = {
		//购物车，最近浏览，商品咨询
		my_qlinks: showPopFn,
		message_list: showPopFn,
		history_list: showPopFn,
		leave_message: showPopFn,
		mpbtn_histroy:showPopFn,
		mpbtn_recharge:showPopFn,
		mpbtn_wdsc:showPopFn,
		//返回顶部
		return_top: function(){
			ds.scrollTo(0, 0);
			hideReturnTop();
		}
	};
	quickShell.delegate('a', 'click', function(e){
		var type = getHandlerType(this.className);
		if(type && quickHandlers[type]){
			quickHandlers[type].call(this);
			e.preventDefault();
		}
	});
	
	//Return top
	var scrollTimer, resizeTimer, minWidth = 1350;

	function resizeHandler(){
		clearTimeout(scrollTimer);
		scrollTimer = setTimeout(checkScroll, 160);
	}
	
	function checkResize(){
		quickShell[view.width() > 1340 ? 'removeClass' : 'addClass']('quick_links_dockright');
	}
	function scrollHandler(){
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(checkResize, 160);
	}
	function checkScroll(){
		view.scrollTop()>100 ? showReturnTop() : hideReturnTop();
	}
	function showReturnTop(){
		quickPanel.addClass('quick_links_allow_gotop');
	}
	function hideReturnTop(){
		quickPanel.removeClass('quick_links_allow_gotop');
	}
	view.bind('scroll.go_top', resizeHandler).bind('resize.quick_links', scrollHandler);
	quickLinkCollapsed && quickShell.addClass('quick_links_min');
	resizeHandler();
	scrollHandler();
});