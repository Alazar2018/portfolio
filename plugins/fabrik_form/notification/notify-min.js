/*! Fabrik */

define(["jquery","fab/fabrik"],function(i,e){"use strict";return new Class({initialize:function(t,i){this.options=i;var o,n=document.id(t);"none"===n.getStyle("display")&&(n=n.getParent()),n.addEvent("change",function(i){o=document.id(t).checked?1:0,e.loader.start(n,Joomla.JText._("COM_FABRIK_LOADING"));new Request({url:"index.php?option=com_fabrik&task=plugin.pluginAjax&plugin=notification&method=toggleNotification",data:{g:"form",format:"raw",fabrik_notification:1,listid:this.options.listid,formid:this.options.formid,rowid:this.options.rowid,notify:o},onComplete:function(i){window.alert(i),e.loader.stop(n)}.bind(this)}).send()}.bind(this))}})});