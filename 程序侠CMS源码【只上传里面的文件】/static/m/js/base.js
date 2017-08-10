;(function($){
    //把对象调整到中心位置
    $.fn.setmiddle = function() {
        var dl = $(document).scrollLeft(),
            dt = $(document).scrollTop(),
            winWidth = $(window).width(),
            winHeight = $(window).height(),
            objWidth = $(this).width(),
            objHeight = $(this).height(),
            left = (winWidth - objWidth) / 2,
            top = (winHeight - objHeight) / 2;
                
        $(this).css({left:left + 'px',top:top + 'px'});             
        return this;
    }
    
})(jQuery);

var cxxia = {
		tips: function (options) {
			var settings = {
				msg: '',
				icon: 'success',
				time: 2000,
				close: false,
				zindex: 2999
        	};
			if(options) {
            	$.extend(settings, options);
        	}
			$('body').append('<div class="cxx-tips"><div class="cxx-tips-bg"> <span class="cxx-tips-text"></span></div></div>');
			if(options.icon){
				$('.cxx-tips-text').html()
			}
			$('.cxx-tips-text').text(settings.msg);
			
			$('.cxx-tips').css('z-index', parseInt($('.cxx-tips').css('z-index'))+1).setmiddle();
			setTimeout(function(){$(".cxx-tips").remove()}, settings.time);	
		},

        goodList: function (options){
            var settings = {
                p: '1',
                wd: '',
                type: "post",
                url: ''
            };
            if(options) {
                $.extend(settings, options);
            }
            var p = settings.p, wd=settings.wd;
            $(".cxx-loading").show().html('<span class="am-text-sm"><i class="am-icon-spinner am-icon-pulse am-margin-right-xs"></i>商品正在赶来的路上，请稍后</span>');
            $.ajax({
                type : settings.type,
                url : settings.url,
                data : {
                    p:p,
                    wd:wd,
                },
                dataType : "json",      
                success : function(data){
                    if(data.status==200){
                                var listArray = data.goodsList;
                                var content = '';
                                for(var i=0; i<listArray.length; i++){
                                    var mainWith = $('.cxx-main').width();
                                    var goodsListWith = $('.cxx-goods-list').width();
                                    var goodsLeftWith = 120;
                                    var goodsRighttWith = goodsListWith - goodsLeftWith - 20;
                                    var list = listArray[i];
                                    
                                    var couponPercent = Math.round(list['coupon_receive']/list['coupon_total']*100);
                                    content += '<li class="am-margin-top cxx-prize" data-url="' + list['goodsUrl'] + '"><div class="cxx-goods-box am-padding-xs"><div class="am-inline-block">';
                                    content += '<a href="' + list['goodsUrl'] + '">';
                                    content += '<img src="'+ data.goodsBgimg +'" data-original="' + list['img'] + '" class="cxx-image lazy"></a></div>';
                                    content += '<div class="am-g am-fr" style="width:65%; height:10rem;"><div class="am-u-sm-8 am-padding-left-0 am-padding-right-sm" style="border-right: .1rem dashed #eeeeee;"><span class="line-clamp am-text-sm am-margin-bottom-xs">' + list['title']+'</span>';
                                    content += '<div class="am-cf am-margin-bottom-xs" style="line-height:2.3rem"><span class="cxx-text-pink">￥<em>' + list['discount_price'] + '</em></span>';
                                    content += '<span class="am-text-xs cxx-color-gray am-margin-left-xs am-padding-top-xs" style="text-decoration:line-through">￥' + list['price'] +'</span></div>';
                                    content += '<div class="am-cf" style="line-height:1.3rem"><span class="am-text-xs cxx-text-light-grey am-fl">已抢购' + couponPercent + '%</span><span class="am-text-xs cxx-text-light-grey am-fr">剩余' + list['coupon_surplus'] + '</span></div>';
                                    content += '<div class="cxx-process-bar am-fl"><span style="width: ' + couponPercent + '%"></span></div></div>';
                                    content += '<div class="am-text-center am-u-sm-4 am-padding-0" style="line-height:1.2"><div class="am-vertical-align-middle"   style="margin-top:-9px;"><div class="am-round top-found am-inline-block am-text-center"></div><div>';
                                    content += '<span class="am-text-sm">￥</span><span class="am-text-xl">' + list['coupon_price'] + '</span></div><span class="am-text-xs" style="color:rgba(0,0,0,0.5);">优惠券</span><br><a href="javascript:void(0);" data-id="'+list['goods_id'] + '" class="cxx-goods-buy am-text-sm cxx-text-pink am-radius am-block am-padding-xs am-margin-top-sm">领券购买</a><div class="am-round bottom-found am-inline-block am-text-center"></div></div></div></div></div></li>';    
                                }
                                
                                $(".cxx-goods-list").append(content);                       
                                $(".cxx-loading").fadeOut('fast');  
                                $("#p").text(data.p);
                                $("#pageTotal").text(data.pageTotal);
                                $("img.lazy").lazyload();
                    }else if(data.status==300){
                        
                        $(".cxx-loading").show().html('<span class="am-text-sm"><i class="am-margin-right-xs"></i>' + data.info + '</span>');

                    }else{
                        
                        $(".cxx-loading").show().html('<span class="am-text-sm"><i class="am-margin-right-xs"></i>' + data.info + '</span>');
                        
                    }
                },
            });
        }
}


