/*! Fabrik */

define(["jquery"],function(e){var o=new Class({getOptions:function(){return{livesite:"",locked_img:"",unlocked_img:"",userid:""}},initialize:function(o,i){this.setOptions(this.getOptions(),i),this.id=o,this.spinner=new Asset.image(this.options.livesite+"media/com_fabrik/images/ajax-loader.gif",{alt:"loading",class:"ajax-loader"}),Fabrik.addEvent("fabrik.list.updaterows",function(){this.makeEvents()}.bind(this)),this.makeEvents()},makeEvents:function(){this.col=$$("."+this.id),this.col.each(function(o){var i=o.findClassUp("fabrik_row");if(!1!==i){var n=i.id.replace("list_"+this.options.listRef+"_row_",""),s=o.getElements(".fabrikElement_lockrow_locked"),t=o.getElements(".fabrikElement_lockrow_unlocked");s.each(function(i){this.options.can_unlocks[n]&&(e(i).find("span").on("mouseover",function(o){o.target.removeClass(this.options.lockIcon).addClass(this.options.keyIcon)}.bind(this)),e(i).find("span").on("mouseout",function(o){o.target.removeClass(this.options.keyIcon).addClass(this.options.lockIcon)}.bind(this)),e(i).find("span").on("click",function(o){this.doAjaxUnlock(i)}.bind(this)))}.bind(this)),t.each(function(i){this.options.can_locks[n]&&(e(i).find("span").on("mouseover",function(o){o.target.removeClass(this.options.lockIcon).addClass(this.options.keyIcon)}.bind(this)),e(i).find("span").on("mouseout",function(o){o.target.removeClass(this.options.keyIcon).addClass(this.options.unlockIcon)}.bind(this)),e(i).find("span").on("click",function(o){this.doAjaxLock(i)}.bind(this)))}.bind(this))}}.bind(this))},doAjaxUnlock:function(i){var n=i.findClassUp("fabrik_row").id.replace("list_"+this.options.listRef+"_row_",""),o={option:"com_fabrik",format:"raw",task:"plugin.pluginAjax",plugin:"lockrow",g:"element",method:"ajax_unlock",formid:this.options.formid,element_id:this.options.elid,row_id:n,elementname:this.options.elid,userid:this.options.userid};new Request({url:"",data:o,onComplete:function(o){"unlocked"===(o=JSON.parse(o)).status&&(this.options.row_locks[n]=!1,e(i).find("span").removeClass(this.options.keyIcon).addClass(this.options.unlockIcon),e(i).find("span").off("mouseover"),e(i).find("span").off("mouseout"),e(i).find("span").off("click"),this.options.can_locks[n]&&(e(i).find("span").on("mouseover",function(o){o.target.removeClass(this.options.unlockIcon).addClass(this.options.keyIcon)}.bind(this)),e(i).find("span").on("mouseout",function(o){o.target.removeClass(this.options.keyIcon).addClass(this.options.unlockIcon)}.bind(this)),e(i).find("span").on("click",function(o){this.doAjaxLock(i)}.bind(this))))}.bind(this)}).send()},doAjaxLock:function(i){var n=i.findClassUp("fabrik_row").id.replace("list_"+this.options.listRef+"_row_",""),o={option:"com_fabrik",format:"raw",task:"plugin.pluginAjax",plugin:"lockrow",g:"element",method:"ajax_lock",formid:this.options.formid,element_id:this.options.elid,row_id:n,elementname:this.options.elid,userid:this.options.userid};new Request({url:"",data:o,onComplete:function(o){"locked"===(o=JSON.parse(o)).status&&(this.options.row_locks[n]=!0,e(i).find("span").removeClass(this.options.keyIcon).addClass(this.options.lockIcon),e(i).find("span").off("mouseover"),e(i).find("span").off("mouseout"),e(i).find("span").off("click"),this.options.can_unlocks[n]&&(e(i).find("span").on("mouseover",function(o){o.target.removeClass(this.options.lockIcon).addClass(this.options.keyIcon)}.bind(this)),e(i).find("span").on("mouseout",function(o){o.target.removeClass(this.options.keyIcon).addClass(this.options.lockIcon)}.bind(this)),e(i).find("span").on("click",function(o){this.doAjaxUnlock(i)}.bind(this))))}.bind(this)}).send()}});return o.implement(new Events),o.implement(new Options),o});