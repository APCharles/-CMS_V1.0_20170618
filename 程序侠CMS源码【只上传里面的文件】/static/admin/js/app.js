/**
 * Created by yuan1994 <tianpian0805@gamil.com> on 16-10-2.
 */

$(function () {
    //多级菜单
    $.Huifold(".menu_dropdown .sub-menu-title", ".menu_dropdown .sub-menu-list", "fast", 3, "click");
    $("span[data-type='edit']").quick_edit();
    $("[data-toggle='tooltip']").tooltip();
    
});

/**
 * 弹出层
 * @param title 层标题
 * @param url 层链接(opt.type=2|默认)或者HTML内容(opt.type=1)
 * @param opt 选项 {w:WIDTH('800px|80%'),h:HEIGHT('600px|80%'),type:1|2,fn:CALLBACK(回调函数),confirm:BOOL(关闭弹层警告)}
 */
function layer_open(title, url, opt) {
    if (typeof opt === "undefined") opt = {nav: true};
    w = opt.w || "40vw";
    h = opt.h || "40vh";
    // 不支持vh,vw单位时采取js动态获取
    if (!attr_support('height', '10vh')) {
        w = w.replace(/([\d\.]+)(vh|vw)/, function (source, num, unit) {
            return $(window).width() * num / 100 + 'px';
        });
        h = h.replace(/([\d\.]+)(vh|vw)/, function (source, num, unit) {
            return $(window).height() * num / 100 + 'px';
        });
    }

    $.getJSON(url, function(result){
        if(result.code == 1){
            layer.open({
                type: 1,
                skin: 'demo-class',
                area: ['560px'],
                anim: 5,
                title: title,
                closeBtn: 2,
                shift: 5,
                shadeClose: false,
                content: result.data,
                scrollbar: false,
                success: function () {
                    $('.demo-class .layui-layer-setwin').after('<div class="submit-btn"><button type="submit" class="btn btn-success radius-rounded">&nbsp;<i class="Hui-iconfont">&#xe6a7;</i> 提交&nbsp;</button><button type="button" class="btn btn-default radius-rounded ml-20" onClick="layer_close();">&nbsp;<i class="Hui-iconfont">&#xe6a6;</i> 取消&nbsp;</button></div>');
                    $(".submit-btn button[type='submit']").on('click',function(){
                        var actionForm = $('.layui-layer-content #form'),
                            formUrl = actionForm.attr('action');
                        if($('[type=text]').hasClass('Validform_error')){
                            $('[type=text]').filter('.Validform_error').focus();
                            return false;
                        }
                        ajax_req(formUrl,actionForm.serialize());
                                             
                        
                    })
                }

       
            });
                
        }
    });
    
};



function open_iframe(title,url){
    layer.confirm('您确定要进行升级？', {
        btn: ['确定','取消'] //按钮
        }, function(){
                layer.closeAll();
                layer.open({
                    type: 2,
                    skin: 'demo-class',
                    area: ['400px','120px'],
                    title:  title,
                    closeBtn: 0,
                    shift: 5,
                    shadeClose: false,
                    content: url,
                    success: function () {
                        $('.demo-class .layui-layer-setwin').after('<div class="submit-btn" style="text-align: center;padding-bottom:15px;"><button type="submit" class="btn btn-success radius-rounded close_iframe">&nbsp;<i class="Hui-iconfont">&#xe6a7;</i> 升级完成&nbsp;</button><button type="button" class="btn btn-default radius-rounded ml-20 close_iframe">&nbsp;<i class="Hui-iconfont">&#xe6a6;</i> 关闭&nbsp;</button></div>');
                        $('.close_iframe').on('click',function(){
                            layer.closeAll();
                            window.location.reload();
                        })
                    
                    }
                });
            },function(){
              layer.closeAll();
    });
}

function layer_close(){
    layer.closeAll(); 
}

/**
 * iframe内打开新窗口
 * @param title
 * @param url
 */
function open_window(title, url) {
    //解决在非iframe页里打开不了页面的问题
    if (window.parent.frames.length == 0) {
        window.open(url);
        return false;
    }
    var bStop = false;
    var bStopIndex = 0;
    var topWindow = $(window.top.parent.document);
    var show_navLi = topWindow.find("#min_title_list li");
    var iframe_box = topWindow.find('#iframe_box');
    show_navLi.each(function () {
        if ($(this).find('span').attr("data-href") == url) {
            bStop = true;
            bStopIndex = show_navLi.index($(this));
            return false;
        }
    });
    if (!bStop) {
        var show_nav = topWindow.find('#min_title_list');
        show_nav.find('li').removeClass("active");
        show_nav.append('<li class="active"><i class="Hui-iconfont mr-5">&#xe60b;</i><span data-href="' + url + '">' + title + '</span><em></em></li>');
        var taballwidth = 0,
            $tabNav = $(".acrossTab", window.top.parent.document),
            $tabNavitem = $(".acrossTab li", window.top.parent.document);
        $tabNavitem.each(function (index, element) {
            taballwidth += Number(parseFloat($(this).width() + 60))
        });
        $tabNav.width(taballwidth + 25);
        var iframeBox = iframe_box.find('.show_iframe');
        iframeBox.hide();
        iframe_box.append('<div class="show_iframe"><div class="loading"><div class="loading-box"><span class="loding-text">努力加载中...</span></div></div><iframe frameborder="0" src=' + url + '></iframe></div>');
        var showBox = iframe_box.find('.show_iframe:visible');
        showBox.find('iframe').attr("src", url).load(function () {
            showBox.find('.loading').hide();
        });
    }
    else {
        show_navLi.removeClass("active").eq(bStopIndex).addClass("active");
        iframe_box.find(".show_iframe").hide().eq(bStopIndex).show().find("iframe").attr("src", url);
    }

}

/**
 * 操作对象发送ajax请求
 * @param url 请求地址
 * @param data 请求参数
 * @param callback 成功回调
 * @param param 回调参数
 * @param shade 是否遮罩
 */
function ajax_req(url, data, callback, param, shade) {
    if (shade == true) var loading = layer.load(2);
    $.post(url, data, function (ret) {
        shade == true && layer.close(loading);
        ajax_progress(ret, callback, param);
    }, 'json')
}

/**
 * @param data ajax返回数据
 * @param callback 成功回调函数
 * @param param 回调参数
 */
function ajax_progress(data, callback, param) {
    if (data.code == 1) {
            if (data.redirect == 'parent') {
                layer.closeAll();
                layer.msg(data.msg, {icon: 1, time: 1000}); 
                // 当前页重定向
                setTimeout(function(){window.location.href = data.url},1000); 

            }else{

                layer.msg(data.msg); 
            }

        if (typeof callback == "function") {
            if (typeof param != "undefined" && param) {
                param.unshift(data)
            } else {
                param = [data];
            }
            callback.apply(this, param);
        }

   
    } else {
        if (data.code == 400) {
            login(data.data);
        } else {
            layer.msg(data.msg, {icon: 2, time: 3000});
        }
    }
}

/**
 * 启用禁用等状态改变回调函数
 * @param ret
 * @param obj
 * @param type
 */
function change_status(ret, obj, type) {
    //配置数据，TYPE:['下一状态文字描述','当前状态class颜色','下一状态class颜色','下一状态方法名','状态标签选择器','下一状态标签icon','下一状态标签title']
    var data = {
        'resume': ['<i class="Hui-iconfont">&#xe6e1;</i>', 'error', 'success', 'forbid', '.status', '禁用', '启用'],
        'forbid': ['<i class="Hui-iconfont">&#xe6e0;</i>', 'success', 'error', 'resume', '.status', '启用', '禁用'],
    };
    var $this = $(obj);
    $this.html(data[type][0])
        .attr("data-title", "点击" + data[type][5])
        .removeClass("c-" + data[type][1])
        .addClass("c-" + data[type][2])
        .attr("onclick", $this.attr("onclick").replace(new RegExp(type, 'g'), data[type][3]));
    $this.parents("tr")
        .find(data[type][4])
        .html(data[type][5])
        .removeClass("c-" + data[type][2])
        .addClass("c-" + data[type][1])
        .attr("data-title", data[type][6]);
}



/**
 * 高级版 Tab 切换
 * @param tabBar Tab 标签
 * @param tabCon Tab 容器
 * @param class_name 被选中标签class
 * @param tabEvent 触发 Tab 切换的事件
 * @param i 被激活索引
 * @param callback 切换回调函数 callback(index,$tabCon,$tabBar)
 * @param finished 初始化完成之后的回调函数 finished(index,$tabCon,$tabBar)
 */
jQuery.tpTab = function (tabBar, tabCon, class_name, tabEvent, i, callback, finished) {
    var $tabBar = $(tabBar), $tabCon = $(tabCon);

    function chg(index) {
        $tabBar.removeClass(class_name).eq(index).addClass(class_name);
        $tabCon.hide().eq(index).show();
    }

    // 初始化操作
    chg(i || 0);
    typeof finished === "function" && finished(i, $tabCon, $tabBar);

    $tabBar.bind(tabEvent, function () {
        var index = $tabBar.index(this);
        chg(index);
        typeof callback === "function" && callback(index, $tabCon, $tabBar);
    });
};


/**
 * 检查浏览器是否支持某属性
 * @param attrName
 * @param attrValue
 * @returns {boolean}
 */
function attr_support(attrName, attrValue) {
    try {
        var element = document.createElement('div');
        if (attrName in element.style) {
            element.style[attrName] = attrValue;
            return element.style[attrName] === attrValue;
        } else {
            return false;
        }
    } catch (e) {
        return false;
    }
}

/**
 * 假性删除操作项
 * @param obj this
 * @param id 对象id
 * @param url 删除地址，一般为 {:url('delete')}
 * @param fn 回调函数
 */
function del(obj, id, url, fn) {
	_del(obj, id, url, '您确定要删除这些项目？', fn);
}



/**
 * 批量永久删除操作项
 * @param url 批量删除地址，一般为 {:url('delete_forever')}
 * @param checkbox_group checkbox组的名称，默认 id[]
 */
function del_forever_all(url, checkbox_group) {
    _del_all(url, checkbox_group || 'id[]', '您确定要删除这些项目？');
}

/**
 * 批量假性删除操作项
 * @param url 批量删除地址，一般为 {:url('delete')}
 * @param checkbox_group checkbox组的名称，默认 id[]
 */
function del_all(url, checkbox_group) {
    _del_all(url, checkbox_group || 'id[]', '您确定要删除这些项目？');
}



/**
 * 批量禁用操作项
 * @param url 批量禁用地址，一般为 {:url('forbid')}
 * @param checkbox_group checkbox组的名称，默认 id[]
 */
function forbid_all(url, checkbox_group) {
    _del_recycle_all(url, checkbox_group || 'id[]', "您确定要禁用这些项目？", "已禁用！")
}

/**
 * 批量启用操作项
 * @param url 批量启用地址，一般为 {:url('resume')}
 * @param checkbox_group checkbox组的名称，默认 id[]
 */
function resume_all(url, checkbox_group) {
    _del_recycle_all(url, checkbox_group || 'id[]', "您确定要启用这些项目？", "已启用！")
}



/**
 * 表格无限宽横向溢出
 * @param selector
 * @param width 不赋值默认为th的width值和
 * @param force 强制将表格宽度设置成实际的宽度
 */
function table_fixed(selector, width, force) {
    var attr = typeof force == 'undefined' ? 'min-width' : 'width';
    $(selector).each(function () {
        $this = $(this);
        //未设置宽度自动获取width属性的宽
        if (typeof width === "undefined") {
            width = 0;
            $this.find("tr:first th").each(function () {
                width += parseInt($(this).attr("width") || $(this).innerWidth());
            })
        }
        $this.css(attr, width + "px");
        $this.css("table-layout", "fixed");
        $this.wrap('<div style="width:100%;overflow:auto"></div>');
    });
}

/**
 * 生成随机字符串
 * @param prefix
 * @returns {string}
 */
function get_random(prefix) {
    prefix = prefix || "";
    return prefix + (new Date()).getTime().toString(36) + "_" + Math.random().toString(36).substr(2);
};


function _del_recycle(obj, id, url, msg, returnMsg, fn) {
    layer.confirm(msg, {
        btn: ['确定', '取消'],
        title: '提示',
        icon: 3
    }, function () {
        $.post(url, {id: id}, function (data) {
            if (data.code == 1) {
                layer.msg(returnMsg, {icon: 1, time: 1000});
                $(obj).parents("tr").fadeOut();
            } else {
                layer.alert(data.msg);
            }
            fn && fn(data);
        }, 'json')
    }, function (index) {
        layer.close(index);
    });
}

function _del(obj, id, url, msg, fn) {
    _del_recycle(obj, id, url, msg, "已删除！", fn)
}


function _del_recycle_all(url, checkbox_group, msg, return_msg) {
    layer.confirm(msg, {
        btn: ['确定', '取消'],
        title: '提示',
        icon: 3
    }, function () {
        id = [];
        $(":checked[name='" + checkbox_group + "']").each(function () {
            id.push($(this).val())
        });
        $.post(url, {id: id.join(',')}, function (data) {
            if (data.code == 1) {
                layer.msg(return_msg, {icon: 1, time: 1000});
                setTimeout(function(){window.location.reload()},1000);
            } else {
                layer.alert(data.msg,{icon: 2, time: 1000});
            }
        }, 'json')
    }, function (index) {
        layer.close(index);
    });
}

function _del_all(url, checkbox_group, msg) {
    _del_recycle_all(url, checkbox_group, msg, "已删除！")
}
