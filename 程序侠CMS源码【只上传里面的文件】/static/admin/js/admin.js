/**
 * **********************后台操作JS************************
 * ajax 状态显示

 * preview 预览图片大图
 * cate_select 多级菜单动态加载

 * http://bbs.chengxuxia.com
 */
;$(function($){
	//AJAX请求效果
    $(document).ajaxStart(function(){
        $('#ajax_loading',window.parent.document).show();
    }).ajaxSuccess(function(){
        $('#ajax_loading',window.parent.document).slideUp("slow");
    });
    $(document).on('ajaxStop', function(){
        $('#ajax_loading',window.parent.document).slideUp("slow");
    });

});

//显示大图
;(function($){
	$.fn.preview = function(){
		var w = $(window).width();
		var h = $(window).height();
		
		$(this).each(function(){
			$(this).hover(function(e){
				if(/.png$|.gif$|.jpg$|.bmp$|.jpeg$/.test($(this).attr("data-bimg"))){
					$("body").append("<div id='preview'><img width='200' src='"+$(this).attr('data-bimg')+"' /></div>");
				}
				var show_x = $(this).offset().left + $(this).width();
				var show_y = $(this).offset().top;
				var scroll_y = $(window).scrollTop();
				$("#preview").css({
					position:"absolute",
					padding:"4px",
                    width : "200px",
					border:"1px solid #f3f3f3",
					backgroundColor:"#FFF",
					top:show_y + "px",
					left:show_x + "px",
					zIndex:1000
				});
				$("#preview > div").css({
					padding:"5px",
					backgroundColor:"white",
					border:"1px solid #cccccc"
				});
				if (show_y + 230 > h + scroll_y) {
					$("#preview").css("bottom", h - show_y - $(this).height() + "px").css("top", "auto");
				} else {
					$("#preview").css("top", show_y + "px").css("bottom", "auto");
				}
				$("#preview").fadeIn("fast")
			},function(){
				$("#preview").remove();
			})					  
		});
	};
})(jQuery);


// 菜单联动
;(function($){
    $.fn.cate_select = function(options) {
        var settings = {
            field: 'cate_id',
            top_option: '请选择'
        };
        if(options) {
            $.extend(settings, options);
        }

        var self = $(this),
            pid = self.attr('data-pid'),
            uri = self.attr('data-uri'),
            css = self.attr('data-css'),
            style = self.attr('data-style'),
            selected = self.attr('data-selected'),
            selected_arr = [];
        if(selected != undefined && selected != '0'){
            if(selected.indexOf('|')){
                selected_arr = selected.split('|');
            }else{
                selected_arr = [selected];
            }
        }
        self.nextAll('.cate_select').remove();
        $('<option value="">--'+settings.top_option+'--</option>').appendTo(self);
        $.getJSON(uri, {id:pid}, function(result){
            if(result.code == '1'){
                for(var i=0; i<result.data.length; i++){
                    $('<option value="'+result.data[i].id+'">'+result.data[i].name+'</option>').appendTo(self);
                }
            }
            if(selected_arr.length > 0){
                //IE6 BUG
                setTimeout(function(){
                    self.find('option[value="'+selected_arr[0]+'"]').attr("selected", true);
                    self.trigger('change');
                }, 1);
            }
        });

        var j = 1;
        $('#cate_select').off('change').on('change', '.cate_select', function(){
            var _this = $(this),
            _pid = _this.val();
            _this.nextAll('.cate_select').remove();
            if(_pid != ''){
                $.getJSON(uri, {id:_pid}, function(result){
                    if(result.code == '1'){
                        var _childs = $('<select class="cate_select '+css+'" style="'+style+'" data-pid="'+_pid+'"><option value="">--'+settings.top_option+'--</option></select>')
                        for(var i=0; i<result.data.length; i++){
                            $('<option value="'+result.data[i].id+'">'+result.data[i].name+'</option>').appendTo(_childs);
                        }
                        _childs.insertAfter(_this);
                        if(selected_arr[j] != undefined){
                            //IE6 BUG
                            //setTimeout(function(){
                                _childs.find('option[value="'+selected_arr[j]+'"]').attr("selected", true);
                                _childs.trigger('change');
                            //}, 1);
                        }
                        j++;
                    }
                });
                $('#'+settings.field).val(_pid);
                var cateNameInfo = this.options[this.selectedIndex].text;
                $('#'+settings.field).attr('info',cateNameInfo);
            }else{
                $('#'+settings.field).val(_this.attr('data-pid'));
            }
        });
    }
})(jQuery);

// 提示标签 tooltip
;(function($){
    $.fn.tooltip = function(options) {
        $(this).each(function(){
            $(this).hover(function(e){
                var info = $(this).attr('data-title');
                var that = this;
                layer.tips(info,that,{time:0,tips:1});
            
            },function(){   
                var index = layer.tips();
                layer.close(index);
            })
            
        });
        
    }
})(jQuery);

;(function($){
    $.fn.quick_edit = function(options) {
        $(this).each(function(){
            $(this).hover(function(e){
                $(this).append('<i class="Hui-iconfont f-16 ml-5 c-success">&#xe647;</i>');            
            },function(){ 
                $(this).find('.Hui-iconfont').remove();

            }).on('click', function() {
                $(this).find('.Hui-iconfont').remove();
                var url   = $(this).parents('.table[data-url]').attr('data-url');
                    value = $(this).text(),
                    field = $(this).attr('data-field'),
                    id    = $(this).attr('data-id'),
                    width = ($(this).width()>35) ? $(this).width()+10 : 35; //$(this).parent('td').width();
                $('<input type="text" class="input-text text-c order-input" value="'+value+'" />').width(width).focusout(function(){
                    var inputVal = $(this).val();
                    $(this).prev('span').show().text(inputVal);
                    if(inputVal != value) {
                        $.getJSON(url, {id:id, field:field, value:inputVal}, function(result){
                            if(result.code == 1) {
                                layer.msg(result.msg, {icon: 1, time: 1000}); 
                                $('span[data-field="'+field+'"][data-id="'+id+'"]').text(inputVal);
                            }else{
                                layer.msg(result.msg, {icon: 2, time: 2000}); 
                            }
                        });
                    }
                    $(this).remove();
                }).insertAfter($(this)).focus().select();
                $(this).hide();
                return false;
            });
            
        });        
    }
})(jQuery);
 