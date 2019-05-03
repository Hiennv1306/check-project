/*
 * jQuery mmenu searchfield add-on
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 */
!function(e){function s(e){switch(e){case 9:case 16:case 17:case 18:case 37:case 38:case 39:case 40:return!0}return!1}var n="mmenu",l="searchfield";e[n].addons[l]={setup:function(){var d=this,o=this.opts[l],c=this.conf[l];r=e[n].glbl,"boolean"==typeof o&&(o={add:o}),"object"!=typeof o&&(o={}),"boolean"==typeof o.resultsPanel&&(o.resultsPanel={add:o.resultsPanel}),o=this.opts[l]=e.extend(!0,{},e[n].defaults[l],o),c=this.conf[l]=e.extend(!0,{},e[n].configuration[l],c),this.bind("close:start",function(){this.$menu.find("."+a.search).find("input").blur()}),this.bind("initPanels:after",function(r){if(o.add){var h;switch(o.addTo){case"panels":h=r;break;default:h=this.$menu.find(o.addTo)}if(h.each(function(){var s=e(this);if(!s.is("."+a.panel)||!s.is("."+a.vertical)){if(!s.children("."+a.search).length){var l=d.__valueOrFn(c.clear,s),t=d.__valueOrFn(c.form,s),r=d.__valueOrFn(c.input,s),h=d.__valueOrFn(c.submit,s),u=e("<"+(t?"form":"div")+' class="'+a.search+'" />'),f=e('<input placeholder="'+e[n].i18n(o.placeholder)+'" type="text" autocomplete="off" />');u.append(f);var p;if(r)for(p in r)f.attr(p,r[p]);if(l&&e('<a class="'+a.btn+" "+a.clear+'" href="#" />').appendTo(u).on(i.click+"-searchfield",function(e){e.preventDefault(),f.val("").trigger(i.keyup+"-searchfield")}),t){for(p in t)u.attr(p,t[p]);h&&!l&&e('<a class="'+a.btn+" "+a.next+'" href="#" />').appendTo(u).on(i.click+"-searchfield",function(e){e.preventDefault(),u.submit()})}s.hasClass(a.search)?s.replaceWith(u):s.prepend(u).addClass(a.hassearch)}if(o.noResults){var v=s.closest("."+a.panel).length;if(v||(s=d.$pnls.children("."+a.panel).first()),!s.children("."+a.noresultsmsg).length){var m=s.children("."+a.listview).first(),g=e('<div class="'+a.noresultsmsg+" "+a.hidden+'" />');g.append(e[n].i18n(o.noResults))[m.length?"insertAfter":"prependTo"](m.length?m:s)}}}}),o.search){if(o.resultsPanel.add){o.showSubPanels=!1;var u=this.$pnls.children("."+a.resultspanel);u.length||(u=e('<div class="'+a.resultspanel+" "+a.noanimation+" "+a.hidden+'" />').appendTo(this.$pnls).append('<div class="'+a.navbar+" "+a.hidden+'"><a class="'+a.title+'">'+e[n].i18n(o.resultsPanel.title)+"</a></div>").append('<ul class="'+a.listview+'" />').append(this.$pnls.find("."+a.noresultsmsg).first().clone()),this._initPanel(u))}this.$menu.find("."+a.search).each(function(){var n,r,c=e(this),h=c.closest("."+a.panel).length;h?(n=c.closest("."+a.panel),r=n):(n=e("."+a.panel,d.pnls),r=d.$menu),o.resultsPanel.add&&(n=n.not(u));var f=c.children("input"),p=d.__findAddBack(n,"."+a.listview).children("li"),v=p.filter("."+a.divider),m=d.__filterListItems(p),g="a",b=g+", span",C="",_=function(){var s=f.val().toLowerCase();if(s!=C){if(C=s,o.resultsPanel.add&&u.children("."+a.listview).empty(),n.scrollTop(0),m.add(v).addClass(a.hidden).find("."+a.fullsubopensearch).removeClass(a.fullsubopen+" "+a.fullsubopensearch),m.each(function(){var s=e(this),n=g;(o.showTextItems||o.showSubPanels&&s.find("."+a.next))&&(n=b);var l=s.data(t.searchtext)||s.children(n).not("."+a.next).text();l.toLowerCase().indexOf(C)>-1&&s.add(s.prevAll("."+a.divider).first()).removeClass(a.hidden)}),o.showSubPanels&&n.each(function(s){var n=e(this);d.__filterListItems(n.find("."+a.listview).children()).each(function(){var s=e(this),n=s.data(t.child);s.removeClass(a.nosubresults),n&&n.find("."+a.listview).children().removeClass(a.hidden)})}),o.resultsPanel.add)if(""===C)this.closeAllPanels(),this.openPanel(this.$pnls.children("."+a.subopened).last());else{var l=e();n.each(function(){var s=d.__filterListItems(e(this).find("."+a.listview).children()).not("."+a.hidden).clone(!0);s.length&&(o.resultsPanel.dividers&&(l=l.add('<li class="'+a.divider+'">'+e(this).children("."+a.navbar).children("."+a.title).text()+"</li>")),s.children("."+a.mm("toggle")+", ."+a.mm("check")).remove(),l=l.add(s))}),l.find("."+a.next).remove(),u.children("."+a.listview).append(l),this.openPanel(u)}else e(n.get().reverse()).each(function(s){var n=e(this),l=n.data(t.parent);l&&(d.__filterListItems(n.find("."+a.listview).children()).length?(l.hasClass(a.hidden)&&l.children("."+a.next).not("."+a.fullsubopen).addClass(a.fullsubopen).addClass(a.fullsubopensearch),l.removeClass(a.hidden).removeClass(a.nosubresults).prevAll("."+a.divider).first().removeClass(a.hidden)):h||(n.hasClass(a.opened)&&setTimeout(function(){d.openPanel(l.closest("."+a.panel))},(s+1)*(1.5*d.conf.openingInterval)),l.addClass(a.nosubresults)))});r.find("."+a.noresultsmsg)[m.not("."+a.hidden).length?"addClass":"removeClass"](a.hidden),this.trigger("updateListview")}};f.off(i.keyup+"-"+l+" "+i.change+"-"+l).on(i.keyup+"-"+l,function(e){s(e.keyCode)||_.call(d)}).on(i.change+"-"+l,function(e){_.call(d)});var w=c.children("."+a.btn);w.length&&f.on(i.keyup+"-"+l,function(e){w[f.val().length?"removeClass":"addClass"](a.hidden)}),f.trigger(i.keyup+"-"+l)})}}})},add:function(){a=e[n]._c,t=e[n]._d,i=e[n]._e,a.add("clear search hassearch resultspanel noresultsmsg noresults nosubresults fullsubopensearch"),t.add("searchtext"),i.add("change keyup")},clickAnchor:function(e,s){}},e[n].defaults[l]={add:!1,addTo:"panels",placeholder:"Search",noResults:"No results found.",resultsPanel:{add:!1,dividers:!0,title:"Search results"},search:!0,showTextItems:!1,showSubPanels:!0},e[n].configuration[l]={clear:!1,form:!1,input:!1,submit:!1};var a,t,i,r}(jQuery);