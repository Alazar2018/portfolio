/*! Fabrik */

define(["jquery","fab/element"],function(e,t){return window.FbNotes=new Class({options:{rowid:0,primaryKey:0,id:0},Extends:t,initialize:function(e,t){this.setPlugin("notes"),this.parent(e,t),this.setUp()},setUp:function(){0<this.options.primaryKey&&(this.element.getElement(".button").addEvent("click",function(e){this.submit(e)}.bind(this)),this.field=this.element.getElement(".fabrikinput"),this.element.getElement("div").makeResizable({modifiers:{x:!1,y:"height"},handle:this.element.getElement(".noteHandle")}),this.element.getElement(".noteHandle").setStyle("cursor","all-scroll"))},submit:function(e){e.stop();var t=this.field.get("value");if(""!==t){Fabrik.loader.start(this.element);var i={option:"com_fabrik",format:"raw",task:"plugin.pluginAjax",plugin:"notes",method:"ajax_addNote",element_id:this.options.id,v:t,rowid:this.options.rowid,joinPkVal:this.options.joinPkVal,primaryKey:this.options.primaryKey,formid:this.form.id};this.myAjax=new Request.JSON({url:"",data:i,onSuccess:function(e){if(Fabrik.loader.stop(this.element),this.options.j3){var t=this.element.getElement("div"),i=new Element("div",{class:"row-fluid"});new Element("div",{class:"col-sm-12"}).set("html",e.label).inject(i).inject(t)}else{var n=this.element.getElement("ul"),s="oddRow"+n.getElements("li").length%2;new Element("li",{class:s}).set("html",e.label).inject(n)}this.field.value=""}.bind(this),onError:function(e){Fabrik.loader.stop(this.element),window.alert(e)},onFailure:function(e){Fabrik.loader.stop(this.element),window.alert("ajax failed")},onCancel:function(){Fabrik.loader.stop(this.element)}}).send()}},cloned:function(e){Fabrik.fireEvent("fabrik.notes.update",this),this.parent(e)}}),window.FbNotes});