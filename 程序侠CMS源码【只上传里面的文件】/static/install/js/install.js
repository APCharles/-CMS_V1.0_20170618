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

var cxxLayer = {
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
			tipsContent = '<div class="am-alert am-alert-'+ settings.icon+ '" data-am-alert><button type="button" class="am-close">&times;</button><p><i class="am-icon-'+ settings.icon+ '"></i>'+settings.msg+'</p></div>'
			$('body').append(tipsContent);			
			$('.am-alert').css('z-index', parseInt($('.am-alert').css('z-index'))+1).setmiddle();
			setTimeout(function(){$(".am-alert").remove()}, settings.time);	
		}

}


