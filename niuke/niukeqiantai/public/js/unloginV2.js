define("nowcoder/1.2.346/javascripts/site/home/unloginV2",["../../lib/jquery","../../lib/underscore","../../core/base","../../util/util","../../util/cookie","../../util/dom","../../util/browser","../../util/limit","../../component/popup","../../core/component","../../util/event","../../component/layer","../../util/dragdrop","../../core/siteConfig"],function(a){function b(){var a=this;a.contentEl=p("div.home-cont-wrap"),a.headerHeight=p("div.nowcoder-header").height(),a.winHeight=p(window).height(),a.modNavContainer=p("div.home-mod-nav"),a.modNavContainerHeight=a.modNavContainer.height(),a.modNavEl=a.modNavContainer.find("a.hmn-item");var b=p("div.unlogin-banner-wrapper ul.banner-slide").children();a.bannerItems=q.map(b,function(a){return p(a)}),a.bannerIndex=0,a.bannerChange=!1,a.bannerDot=p("div.unlogin-banner-wrapper ol.banner-slide-dots li"),a.bannerTimer=setTimeout(function(){a.loadBanner()},w),a.loadBannerImg(0,Math.min(1,a.bannerItems.length)),a.initTab(),o.call(a),a.autoPopupRegister(),t.fixedPos(a.modNavContainer,function(b,c,d){a.winHeight=d,b.css("bottom",Math.max(0,(d-a.modNavContainerHeight)/2))})}function c(a){var b=this,c=p(a.currentTarget);u.mark(c)||(b.loadBanner(b.bannerIndex-1),window.setTimeout(function(){u.clear(c)},x-5))}function d(a){var b=this,c=p(a.currentTarget);u.mark(c)||(b.loadBanner(b.bannerIndex+1),window.setTimeout(function(){u.clear(c)},x-5))}function e(a){var b=p(a.currentTarget),c=b.hasClass("home-slide-right"),d=b.closest("div.module-body"),e=d.closest("div.home-theme-cont"),f=d.outerWidth();e.hasClass("home-job-chance")&&(f=885);var g=d.find("div.home-slide-wrap"),h=g.parent(),i=+h.attr("data-total")||0,j=+h.attr("data-per")||1,k=+h.attr("data-index")||0,l=Math.floor((i-1)/j)+1;if(!(1>=l||u.mark(h))){var m=0;c?(k=k+1===l?0:k+1,m=-1*f*k):(k=0===k?l-1:k-1,m=-1*k*f),h.attr("data-index",k),g.animate({marginLeft:m},500,function(){u.clear(h)})}}function f(a){var b=this,c=p(a.currentTarget),d=c.index();b.scrollToContentDv(d)}function g(a){var b=this,c=p(a.currentTarget),d=c.index();b.loadBanner(d)}function h(){var a=this;a.bannerTimer&&(window.clearTimeout(a.bannerTimer),a.bannerTimer=null)}function i(){var a=this;a.bannerTimer&&window.clearTimeout(a.bannerTimer),a.bannerTimer=setTimeout(function(){a.loadBanner()},w)}function j(a){var b=this;if(0!==b.bannerItems.length&&!b.bannerChange&&a!==b.bannerIndex){var c=b.bannerIndex,d=a||(0===a?0:b.bannerIndex+1);d>=b.bannerItems.length&&(d=0),0>d&&(d=b.bannerItems.length-1),b.bannerIndex=d,b.loadBannerImg(d,d+1),b.bannerTimer&&window.clearTimeout(b.bannerTimer),b.bannerDot.removeClass("active"),p(b.bannerDot[d]).addClass("active");var e=b.bannerItems[c],f=b.bannerItems[d];e.hide(),f.fadeIn(x,function(){b.bannerChange=!1,b.bannerTimer=setTimeout(function(){b.loadBanner()},w)})}}function k(a,b){var c=this,d=c.bannerItems.length,e=a>=d?null:p(c.bannerItems[a]),f=b>=d?null:p(c.bannerItems[b]),g=function(a){if(a){var b=a.find("a"),c=b.attr("data-src");if(c){var d=b.css("backgroundColor");b.css("background",d+" url("+c+") top center no-repeat"),b.removeAttr("data-src")}}};g(e),window.setTimeout(function(){g(f)},500)}function l(){var a=this;t.tab({el:p("div.home-theme-box .home-theme-item"),change:function(b){var c=p(b.currentTarget),d=c.index();a.scrollToContentDv(d)}})}function m(){var b=s.getParams(),c=b.from,d=b.rpop;if({neice:1,pdf:1}[c]||"1"===d){var e="neice"===c?"亲爱的内测用户，感谢您对牛客的支持，请设置密码后进行网站试用":"pdf"===c?"欢迎来到牛客网，简单设置密码后就可以使用全部功能":"";a.async("../../component/loginDialog",function(a){var c=a.show({register:v.popup.showReg,loginCb:function(){window.location.reload()},registerCb:function(){window.location.href="/register/send-activited-email"}});s.isEmail(b.email)&&(c.emailRegisterItem.setValue(b.email),c.emailLoginItem.setValue(b.email)),e&&c.getEl().closest("div.pop-box").find("div.pop-title h1").html(e)})}}function n(a){var b=this;a+1>b.contentEl.length||t.scrollToEl({el:b.contentEl[a],animation:!0,ext:-1*b.headerHeight})}function o(){var a=this;a._scrollWindowTimer&&window.clearTimeout(a._scrollWindowTimer),a._scrollWindowTimer=window.setTimeout(function(){a._scrollWindowTimer=null,a.contentElPos||(a.contentElPos=[],q.each(a.contentEl,function(b){a.contentElPos.push(p(b).position().top)})),a.contentElPos.length;var b=p(window).scrollTop()+a.headerHeight+a.winHeight/4;a.modNavContainer[b<a.contentElPos[0]?"hide":"show"]();var c,d=a.contentElPos.length;if(b<a.contentElPos[0])c=-1;else if(b>a.contentElPos[d-1])c=d-1;else{a.modNavPosCache||(a.modNavPosCache={});var c=a.modNavPosCache[b+""];if(!c&&0!==c){c=-1;for(var e=d-1;e>=0;e--)if(b>=a.contentElPos[e]){c=e;break}a.modNavPosCache[b+""]=c}}a.modNavLastIndex!==c&&(a.modNavContainer.find(".selected").removeClass("selected"),c>=0&&p(a.modNavEl[c]).addClass("selected"),a.modNavLastIndex=c)},10)}var p=a("../../lib/jquery"),q=a("../../lib/underscore"),r=a("../../core/base"),s=a("../../util/util"),t=a("../../util/dom"),u=a("../../util/limit");a("../../component/popup");var v=a("../../core/siteConfig"),w=5e3,x=250;r.ready({initialize:b,binds:{"scroll window":o,"click div.unlogin-banner-wrapper ol.banner-slide-dots li":g,"mouseenter div.unlogin-banner-container":h,"mouseleave div.unlogin-banner-container":i},events:{"click a.home-slide-left":e,"click a.home-slide-right":e,"click div.home-mod-nav a.hmn-item":f,"click a.banner-pre":c,"click a.banner-next":d},loadBanner:j,loadBannerImg:k,initTab:l,autoPopupRegister:m,scrollToContentDv:n})});
