
;!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):window.jQuery||window.Zepto)}(function(e){var t,n,i,o,r,a,s="Close",l="BeforeClose",c="AfterClose",d="BeforeAppend",u="MarkupParse",p="Open",f="Change",m="mfp",g="."+m,h="mfp-ready",v="mfp-removing",C="mfp-prevent-close",y=function(){},w=!!window.jQuery,b=e(window),I=function(e,n){t.ev.on(m+e+g,n)},x=function(t,n,i,o){var r=document.createElement("div");return r.className="mfp-"+t,i&&(r.innerHTML=i),o?n&&n.appendChild(r):(r=e(r),n&&r.appendTo(n)),r},k=function(n,i){t.ev.triggerHandler(m+n,i),t.st.callbacks&&(n=n.charAt(0).toLowerCase()+n.slice(1),t.st.callbacks[n]&&t.st.callbacks[n].apply(t,e.isArray(i)?i:[i]))},T=function(n){return n===a&&t.currTemplate.closeBtn||(t.currTemplate.closeBtn=e(t.st.closeMarkup.replace("%title%",t.st.tClose)),a=n),t.currTemplate.closeBtn},E=function(){e.magnificPopup.instance||(t=new y,t.init(),e.magnificPopup.instance=t)},_=function(){var e=document.createElement("p").style,t=["ms","O","Moz","Webkit"];if(void 0!==e.transition)return!0;for(;t.length;)if(t.pop()+"Transition"in e)return!0;return!1};y.prototype={constructor:y,init:function(){var n=navigator.appVersion;t.isIE7=-1!==n.indexOf("MSIE 7."),t.isIE8=-1!==n.indexOf("MSIE 8."),t.isLowIE=t.isIE7||t.isIE8,t.isAndroid=/android/gi.test(n),t.isIOS=/iphone|ipad|ipod/gi.test(n),t.supportsTransition=_(),t.probablyMobile=t.isAndroid||t.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),i=e(document),t.popupsCache={}},open:function(n){var o;if(n.isObj===!1){t.items=n.items.toArray(),t.index=0;var a,s=n.items;for(o=0;o<s.length;o++)if(a=s[o],a.parsed&&(a=a.el[0]),a===n.el[0]){t.index=o;break}}else t.items=e.isArray(n.items)?n.items:[n.items],t.index=n.index||0;if(t.isOpen)return void t.updateItemHTML();t.types=[],r="",n.mainEl&&n.mainEl.length?t.ev=n.mainEl.eq(0):t.ev=i,n.key?(t.popupsCache[n.key]||(t.popupsCache[n.key]={}),t.currTemplate=t.popupsCache[n.key]):t.currTemplate={},t.st=e.extend(!0,{},e.magnificPopup.defaults,n),t.fixedContentPos="auto"===t.st.fixedContentPos?!t.probablyMobile:t.st.fixedContentPos,t.st.modal&&(t.st.closeOnContentClick=!1,t.st.closeOnBgClick=!1,t.st.showCloseBtn=!1,t.st.enableEscapeKey=!1),t.bgOverlay||(t.bgOverlay=x("bg").on("click"+g,function(){t.close()}),t.wrap=x("wrap").attr("tabindex",-1).on("click"+g,function(e){t._checkIfClose(e.target)&&t.close()}),t.container=x("container",t.wrap)),t.contentContainer=x("content"),t.st.preloader&&(t.preloader=x("preloader",t.container,t.st.tLoading));var l=e.magnificPopup.modules;for(o=0;o<l.length;o++){var c=l[o];c=c.charAt(0).toUpperCase()+c.slice(1),t["init"+c].call(t)}k("BeforeOpen"),t.st.showCloseBtn&&(t.st.closeBtnInside?(I(u,function(e,t,n,i){n.close_replaceWith=T(i.type)}),r+=" mfp-close-btn-in"):t.wrap.append(T())),t.st.alignTop&&(r+=" mfp-align-top"),t.wrap.css(t.fixedContentPos?{overflow:t.st.overflowY,overflowX:"hidden",overflowY:t.st.overflowY}:{top:b.scrollTop(),position:"absolute"}),(t.st.fixedBgPos===!1||"auto"===t.st.fixedBgPos&&!t.fixedContentPos)&&t.bgOverlay.css({height:i.height(),position:"absolute"}),t.st.enableEscapeKey&&i.on("keyup"+g,function(e){27===e.keyCode&&t.close()}),b.on("resize"+g,function(){t.updateSize()}),t.st.closeOnContentClick||(r+=" mfp-auto-cursor"),r&&t.wrap.addClass(r);var d=t.wH=b.height(),f={};if(t.fixedContentPos&&t._hasScrollBar(d)){var m=t._getScrollbarSize();m&&(f.marginRight=m)}t.fixedContentPos&&(t.isIE7?e("body, html").css("overflow","hidden"):f.overflow="hidden");var v=t.st.mainClass;return t.isIE7&&(v+=" mfp-ie7"),v&&t._addClassToMFP(v),t.updateItemHTML(),k("BuildControls"),e("html").css(f),t.bgOverlay.add(t.wrap).prependTo(t.st.prependTo||e(document.body)),t._lastFocusedEl=document.activeElement,setTimeout(function(){t.content?(t._addClassToMFP(h),t._setFocus()):t.bgOverlay.addClass(h),i.on("focusin"+g,t._onFocusIn)},16),t.isOpen=!0,t.updateSize(d),k(p),n},close:function(){t.isOpen&&(k(l),t.isOpen=!1,t.st.removalDelay&&!t.isLowIE&&t.supportsTransition?(t._addClassToMFP(v),setTimeout(function(){t._close()},t.st.removalDelay)):t._close())},_close:function(){k(s);var n=v+" "+h+" ";if(t.bgOverlay.detach(),t.wrap.detach(),t.container.empty(),t.st.mainClass&&(n+=t.st.mainClass+" "),t._removeClassFromMFP(n),t.fixedContentPos){var o={marginRight:""};t.isIE7?e("body, html").css("overflow",""):o.overflow="",e("html").css(o)}i.off("keyup"+g+" focusin"+g),t.ev.off(g),t.wrap.attr("class","mfp-wrap").removeAttr("style"),t.bgOverlay.attr("class","mfp-bg"),t.container.attr("class","mfp-container"),!t.st.showCloseBtn||t.st.closeBtnInside&&t.currTemplate[t.currItem.type]!==!0||t.currTemplate.closeBtn&&t.currTemplate.closeBtn.detach(),t._lastFocusedEl&&e(t._lastFocusedEl).focus(),t.currItem=null,t.content=null,t.currTemplate=null,t.prevHeight=0,k(c)},updateSize:function(e){if(t.isIOS){var n=document.documentElement.clientWidth/window.innerWidth,i=window.innerHeight*n;t.wrap.css("height",i),t.wH=i}else t.wH=e||b.height();t.fixedContentPos||t.wrap.css("height",t.wH),k("Resize")},updateItemHTML:function(){var n=t.items[t.index];t.contentContainer.detach(),t.content&&t.content.detach(),n.parsed||(n=t.parseEl(t.index));var i=n.type;if(k("BeforeChange",[t.currItem?t.currItem.type:"",i]),t.currItem=n,!t.currTemplate[i]){var r=t.st[i]?t.st[i].markup:!1;k("FirstMarkupParse",r),r?t.currTemplate[i]=e(r):t.currTemplate[i]=!0}o&&o!==n.type&&t.container.removeClass("mfp-"+o+"-holder");var a=t["get"+i.charAt(0).toUpperCase()+i.slice(1)](n,t.currTemplate[i]);t.appendContent(a,i),n.preloaded=!0,k(f,n),o=n.type,t.container.prepend(t.contentContainer),k("AfterChange")},appendContent:function(e,n){t.content=e,e?t.st.showCloseBtn&&t.st.closeBtnInside&&t.currTemplate[n]===!0?t.content.find(".mfp-close").length||t.content.append(T()):t.content=e:t.content="",k(d),t.container.addClass("mfp-"+n+"-holder"),t.contentContainer.append(t.content)},parseEl:function(n){var i,o=t.items[n];if(o.tagName?o={el:e(o)}:(i=o.type,o={data:o,src:o.src}),o.el){for(var r=t.types,a=0;a<r.length;a++)if(o.el.hasClass("mfp-"+r[a])){i=r[a];break}o.src=o.el.attr("data-mfp-src"),o.src||(o.src=o.el.attr("href"))}return o.type=i||t.st.type||"inline",o.index=n,o.parsed=!0,t.items[n]=o,k("ElementParse",o),t.items[n]},addGroup:function(e,n){var i=function(i){i.mfpEl=this,t._openClick(i,e,n)};n||(n={});var o="click.magnificPopup";n.mainEl=e,n.items?(n.isObj=!0,e.off(o).on(o,i)):(n.isObj=!1,n.delegate?e.off(o).on(o,n.delegate,i):(n.items=e,e.off(o).on(o,i)))},_openClick:function(n,i,o){var r=void 0!==o.midClick?o.midClick:e.magnificPopup.defaults.midClick;if(r||2!==n.which&&!n.ctrlKey&&!n.metaKey){var a=void 0!==o.disableOn?o.disableOn:e.magnificPopup.defaults.disableOn;if(a)if(e.isFunction(a)){if(!a.call(t))return!0}else if(b.width()<a)return!0;n.type&&(n.preventDefault(),t.isOpen&&n.stopPropagation()),o.el=e(n.mfpEl),o.delegate&&(o.items=i.find(o.delegate)),t.open(o)}},updateStatus:function(e,i){if(t.preloader){n!==e&&t.container.removeClass("mfp-s-"+n),i||"loading"!==e||(i=t.st.tLoading);var o={status:e,text:i};k("UpdateStatus",o),e=o.status,i=o.text,t.preloader.html(i),t.preloader.find("a").on("click",function(e){e.stopImmediatePropagation()}),t.container.addClass("mfp-s-"+e),n=e}},_checkIfClose:function(n){if(!e(n).hasClass(C)){var i=t.st.closeOnContentClick,o=t.st.closeOnBgClick;if(i&&o)return!0;if(!t.content||e(n).hasClass("mfp-close")||t.preloader&&n===t.preloader[0])return!0;if(n===t.content[0]||e.contains(t.content[0],n)){if(i)return!0}else if(o&&e.contains(document,n))return!0;return!1}},_addClassToMFP:function(e){t.bgOverlay.addClass(e),t.wrap.addClass(e)},_removeClassFromMFP:function(e){this.bgOverlay.removeClass(e),t.wrap.removeClass(e)},_hasScrollBar:function(e){return(t.isIE7?i.height():document.body.scrollHeight)>(e||b.height())},_setFocus:function(){(t.st.focus?t.content.find(t.st.focus).eq(0):t.wrap).focus()},_onFocusIn:function(n){return n.target===t.wrap[0]||e.contains(t.wrap[0],n.target)?void 0:(t._setFocus(),!1)},_parseMarkup:function(t,n,i){var o;i.data&&(n=e.extend(i.data,n)),k(u,[t,n,i]),e.each(n,function(e,n){if(void 0===n||n===!1)return!0;if(o=e.split("_"),o.length>1){var i=t.find(g+"-"+o[0]);if(i.length>0){var r=o[1];"replaceWith"===r?i[0]!==n[0]&&i.replaceWith(n):"img"===r?i.is("img")?i.attr("src",n):i.replaceWith('<img src="'+n+'" class="'+i.attr("class")+'" />'):i.attr(o[1],n)}}else t.find(g+"-"+e).html(n)})},_getScrollbarSize:function(){if(void 0===t.scrollbarSize){var e=document.createElement("div");e.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(e),t.scrollbarSize=e.offsetWidth-e.clientWidth,document.body.removeChild(e)}return t.scrollbarSize}},e.magnificPopup={instance:null,proto:y.prototype,modules:[],open:function(t,n){return E(),t=t?e.extend(!0,{},t):{},t.isObj=!0,t.index=n||0,this.instance.open(t)},close:function(){return e.magnificPopup.instance&&e.magnificPopup.instance.close()},registerModule:function(t,n){n.options&&(e.magnificPopup.defaults[t]=n.options),e.extend(this.proto,n.proto),this.modules.push(t)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&times;</button>',tClose:"Close (Esc)",tLoading:"Loading..."}},e.fn.magnificPopup=function(n){E();var i=e(this);if("string"==typeof n)if("open"===n){var o,r=w?i.data("magnificPopup"):i[0].magnificPopup,a=parseInt(arguments[1],10)||0;r.items?o=r.items[a]:(o=i,r.delegate&&(o=o.find(r.delegate)),o=o.eq(a)),t._openClick({mfpEl:o},i,r)}else t.isOpen&&t[n].apply(t,Array.prototype.slice.call(arguments,1));else n=e.extend(!0,{},n),w?i.data("magnificPopup",n):i[0].magnificPopup=n,t.addGroup(i,n);return i};var S,P,O,z="inline",M=function(){O&&(P.after(O.addClass(S)).detach(),O=null)};e.magnificPopup.registerModule(z,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){t.types.push(z),I(s+"."+z,function(){M()})},getInline:function(n,i){if(M(),n.src){var o=t.st.inline,r=e(n.src);if(r.length){var a=r[0].parentNode;a&&a.tagName&&(P||(S=o.hiddenClass,P=x(S),S="mfp-"+S),O=r.after(P).detach().removeClass(S)),t.updateStatus("ready")}else t.updateStatus("error",o.tNotFound),r=e("<div>");return n.inlineElement=r,r}return t.updateStatus("ready"),t._parseMarkup(i,{},n),i}}});var B,F="ajax",H=function(){B&&e(document.body).removeClass(B)},L=function(){H(),t.req&&t.req.abort()};e.magnificPopup.registerModule(F,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){t.types.push(F),B=t.st.ajax.cursor,I(s+"."+F,L),I("BeforeChange."+F,L)},getAjax:function(n){B&&e(document.body).addClass(B),t.updateStatus("loading");var i=e.extend({url:n.src,success:function(i,o,r){var a={data:i,xhr:r};k("ParseAjax",a),t.appendContent(e(a.data),F),n.finished=!0,H(),t._setFocus(),setTimeout(function(){t.wrap.addClass(h)},16),t.updateStatus("ready"),k("AjaxContentAdded")},error:function(){H(),n.finished=n.loadError=!0,t.updateStatus("error",t.st.ajax.tError.replace("%url%",n.src))}},t.st.ajax.settings);return t.req=e.ajax(i),""}}});var A,j=function(n){if(n.data&&void 0!==n.data.title)return n.data.title;var i=t.st.image.titleSrc;if(i){if(e.isFunction(i))return i.call(t,n);if(n.el)return n.el.attr(i)||""}return""};e.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var n=t.st.image,i=".image";t.types.push("image"),I(p+i,function(){"image"===t.currItem.type&&n.cursor&&e(document.body).addClass(n.cursor)}),I(s+i,function(){n.cursor&&e(document.body).removeClass(n.cursor),b.off("resize"+g)}),I("Resize"+i,t.resizeImage),t.isLowIE&&I("AfterChange",t.resizeImage)},resizeImage:function(){var e=t.currItem;if(e&&e.img&&t.st.image.verticalFit){var n=0;t.isLowIE&&(n=parseInt(e.img.css("padding-top"),10)+parseInt(e.img.css("padding-bottom"),10)),e.img.css("max-height",t.wH-n)}},_onImageHasSize:function(e){e.img&&(e.hasSize=!0,A&&clearInterval(A),e.isCheckingImgSize=!1,k("ImageHasSize",e),e.imgHidden&&(t.content&&t.content.removeClass("mfp-loading"),e.imgHidden=!1))},findImageSize:function(e){var n=0,i=e.img[0],o=function(r){A&&clearInterval(A),A=setInterval(function(){return i.naturalWidth>0?void t._onImageHasSize(e):(n>200&&clearInterval(A),n++,void(3===n?o(10):40===n?o(50):100===n&&o(500)))},r)};o(1)},getImage:function(n,i){var o=0,r=function(){n&&(n.img[0].complete?(n.img.off(".mfploader"),n===t.currItem&&(t._onImageHasSize(n),t.updateStatus("ready")),n.hasSize=!0,n.loaded=!0,k("ImageLoadComplete")):(o++,200>o?setTimeout(r,100):a()))},a=function(){n&&(n.img.off(".mfploader"),n===t.currItem&&(t._onImageHasSize(n),t.updateStatus("error",s.tError.replace("%url%",n.src))),n.hasSize=!0,n.loaded=!0,n.loadError=!0)},s=t.st.image,l=i.find(".mfp-img");if(l.length){var c=document.createElement("img");c.className="mfp-img",n.el&&n.el.find("img").length&&(c.alt=n.el.find("img").attr("alt")),n.img=e(c).on("load.mfploader",r).on("error.mfploader",a),c.src=n.src,l.is("img")&&(n.img=n.img.clone()),c=n.img[0],c.naturalWidth>0?n.hasSize=!0:c.width||(n.hasSize=!1)}return t._parseMarkup(i,{title:j(n),img_replaceWith:n.img},n),t.resizeImage(),n.hasSize?(A&&clearInterval(A),n.loadError?(i.addClass("mfp-loading"),t.updateStatus("error",s.tError.replace("%url%",n.src))):(i.removeClass("mfp-loading"),t.updateStatus("ready")),i):(t.updateStatus("loading"),n.loading=!0,n.hasSize||(n.imgHidden=!0,i.addClass("mfp-loading"),t.findImageSize(n)),i)}}});var N,W=function(){return void 0===N&&(N=void 0!==document.createElement("p").style.MozTransform),N};e.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(e){return e.is("img")?e:e.find("img")}},proto:{initZoom:function(){var e,n=t.st.zoom,i=".zoom";if(n.enabled&&t.supportsTransition){var o,r,a=n.duration,c=function(e){var t=e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),i="all "+n.duration/1e3+"s "+n.easing,o={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},r="transition";return o["-webkit-"+r]=o["-moz-"+r]=o["-o-"+r]=o[r]=i,t.css(o),t},d=function(){t.content.css("visibility","visible")};I("BuildControls"+i,function(){if(t._allowZoom()){if(clearTimeout(o),t.content.css("visibility","hidden"),e=t._getItemToZoom(),!e)return void d();r=c(e),r.css(t._getOffset()),t.wrap.append(r),o=setTimeout(function(){r.css(t._getOffset(!0)),o=setTimeout(function(){d(),setTimeout(function(){r.remove(),e=r=null,k("ZoomAnimationEnded")},16)},a)},16)}}),I(l+i,function(){if(t._allowZoom()){if(clearTimeout(o),t.st.removalDelay=a,!e){if(e=t._getItemToZoom(),!e)return;r=c(e)}r.css(t._getOffset(!0)),t.wrap.append(r),t.content.css("visibility","hidden"),setTimeout(function(){r.css(t._getOffset())},16)}}),I(s+i,function(){t._allowZoom()&&(d(),r&&r.remove(),e=null)})}},_allowZoom:function(){return"image"===t.currItem.type},_getItemToZoom:function(){return t.currItem.hasSize?t.currItem.img:!1},_getOffset:function(n){var i;i=n?t.currItem.img:t.st.zoom.opener(t.currItem.el||t.currItem);var o=i.offset(),r=parseInt(i.css("padding-top"),10),a=parseInt(i.css("padding-bottom"),10);o.top-=e(window).scrollTop()-r;var s={width:i.width(),height:(w?i.innerHeight():i[0].offsetHeight)-a-r};return W()?s["-moz-transform"]=s.transform="translate("+o.left+"px,"+o.top+"px)":(s.left=o.left,s.top=o.top),s}}});var R="iframe",Z="//about:blank",q=function(e){if(t.currTemplate[R]){var n=t.currTemplate[R].find("iframe");n.length&&(e||(n[0].src=Z),t.isIE8&&n.css("display",e?"block":"none"))}};e.magnificPopup.registerModule(R,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1&rel=0"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){t.types.push(R),I("BeforeChange",function(e,t,n){t!==n&&(t===R?q():n===R&&q(!0))}),I(s+"."+R,function(){q()})},getIframe:function(n,i){var o=n.src,r=t.st.iframe;e.each(r.patterns,function(){return o.indexOf(this.index)>-1?(this.id&&(o="string"==typeof this.id?o.substr(o.lastIndexOf(this.id)+this.id.length,o.length):this.id.call(this,o)),o=this.src.replace("%id%",o),!1):void 0});var a={};return r.srcAction&&(a[r.srcAction]=o),t._parseMarkup(i,a,n),t.updateStatus("ready"),i}}});var D=function(e){var n=t.items.length;return e>n-1?e-n:0>e?n+e:e},K=function(e,t,n){return e.replace(/%curr%/gi,t+1).replace(/%total%/gi,n)};e.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var n=t.st.gallery,o=".mfp-gallery",a=Boolean(e.fn.mfpFastClick);return t.direction=!0,n&&n.enabled?(r+=" mfp-gallery",I(p+o,function(){n.navigateByImgClick&&t.wrap.on("click"+o,".mfp-img",function(){return t.items.length>1?(t.next(),!1):void 0}),i.on("keydown"+o,function(e){37===e.keyCode?t.prev():39===e.keyCode&&t.next()})}),I("UpdateStatus"+o,function(e,n){n.text&&(n.text=K(n.text,t.currItem.index,t.items.length))}),I(u+o,function(e,i,o,r){var a=t.items.length;o.counter=a>1?K(n.tCounter,r.index,a):""}),I("BuildControls"+o,function(){if(t.items.length>1&&n.arrows&&!t.arrowLeft){var i=n.arrowMarkup,o=t.arrowLeft=e(i.replace(/%title%/gi,n.tPrev).replace(/%dir%/gi,"left")).addClass(C),r=t.arrowRight=e(i.replace(/%title%/gi,n.tNext).replace(/%dir%/gi,"right")).addClass(C),s=a?"mfpFastClick":"click";o[s](function(){t.prev()}),r[s](function(){t.next()}),t.isIE7&&(x("b",o[0],!1,!0),x("a",o[0],!1,!0),x("b",r[0],!1,!0),x("a",r[0],!1,!0)),t.container.append(o.add(r))}}),I(f+o,function(){t._preloadTimeout&&clearTimeout(t._preloadTimeout),t._preloadTimeout=setTimeout(function(){t.preloadNearbyImages(),t._preloadTimeout=null},16)}),void I(s+o,function(){i.off(o),t.wrap.off("click"+o),t.arrowLeft&&a&&t.arrowLeft.add(t.arrowRight).destroyMfpFastClick(),t.arrowRight=t.arrowLeft=null})):!1},next:function(){t.direction=!0,t.index=D(t.index+1),t.updateItemHTML()},prev:function(){t.direction=!1,t.index=D(t.index-1),t.updateItemHTML()},goTo:function(e){t.direction=e>=t.index,t.index=e,t.updateItemHTML()},preloadNearbyImages:function(){var e,n=t.st.gallery.preload,i=Math.min(n[0],t.items.length),o=Math.min(n[1],t.items.length);for(e=1;e<=(t.direction?o:i);e++)t._preloadItem(t.index+e);for(e=1;e<=(t.direction?i:o);e++)t._preloadItem(t.index-e)},_preloadItem:function(n){if(n=D(n),!t.items[n].preloaded){var i=t.items[n];i.parsed||(i=t.parseEl(n)),k("LazyLoad",i),"image"===i.type&&(i.img=e('<img class="mfp-img" />').on("load.mfploader",function(){i.hasSize=!0}).on("error.mfploader",function(){i.hasSize=!0,i.loadError=!0,k("LazyLoadError",i)}).attr("src",i.src)),i.preloaded=!0}}}});var Y="retina";e.magnificPopup.registerModule(Y,{options:{replaceSrc:function(e){return e.src.replace(/\.\w+$/,function(e){return"@2x"+e})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var e=t.st.retina,n=e.ratio;n=isNaN(n)?n():n,n>1&&(I("ImageHasSize."+Y,function(e,t){t.img.css({"max-width":t.img[0].naturalWidth/n,width:"100%"})}),I("ElementParse."+Y,function(t,i){i.src=e.replaceSrc(i,n)}))}}}}),function(){var t=1e3,n="ontouchstart"in window,i=function(){b.off("touchmove"+r+" touchend"+r)},o="mfpFastClick",r="."+o;e.fn.mfpFastClick=function(o){return e(this).each(function(){var a,s=e(this);if(n){var l,c,d,u,p,f;s.on("touchstart"+r,function(e){u=!1,f=1,p=e.originalEvent?e.originalEvent.touches[0]:e.touches[0],c=p.clientX,d=p.clientY,b.on("touchmove"+r,function(e){p=e.originalEvent?e.originalEvent.touches:e.touches,f=p.length,p=p[0],(Math.abs(p.clientX-c)>10||Math.abs(p.clientY-d)>10)&&(u=!0,i())}).on("touchend"+r,function(e){i(),u||f>1||(a=!0,e.preventDefault(),clearTimeout(l),l=setTimeout(function(){a=!1},t),o())})})}s.on("click"+r,function(){a||o()})})},e.fn.destroyMfpFastClick=function(){e(this).off("touchstart"+r+" click"+r),n&&b.off("touchmove"+r+" touchend"+r)}}(),E()});
!function e(t,n,i){function o(a,s){if(!n[a]){if(!t[a]){var l="function"==typeof require&&require;if(!s&&l)return l(a,!0);if(r)return r(a,!0);var d=new Error("Cannot find module '"+a+"'");throw d.code="MODULE_NOT_FOUND",d}var c=n[a]={exports:{}};t[a][0].call(c.exports,function(e){var n=t[a][1][e];return o(n?n:e)},c,c.exports,e,t,n,i)}return n[a].exports}for(var r="function"==typeof require&&require,a=0;a<i.length;a++)o(i[a]);return o}({1:[function(e,t,n){(function(e){var n=function(e){function t(e){u.children(":nth-child("+(d.currentIndex+1||0)+")").removeClass("itemslide-active"),u.children(":nth-child("+(e+1||0)+")").addClass("itemslide-active"),e!=c.currentIndex&&(d.currentIndex=e,u.trigger("changeActiveIndex"))}function n(e){return-(e*u.children().outerWidth(!0)-(u.parent().outerWidth(!0)-u.children().outerWidth(!0))/2)}function i(){var e=Date.now()-s;return c.left_sided&&(l.currentLandPos=clamp(-(d.allSlidesWidth-u.parent().width()),0,l.currentLandPos)),u.trigger("changePos"),u.translate3d(a-easeOutBack(e,0,a-l.currentLandPos,o,r)),e>=o?void u.translate3d(l.currentLandPos):void(l.slidesGlobalID=requestAnimationFrame(i))}var o,r,a,s,l=this,d=e.vars,c=e.options,u=e.$el;l.gotoSlideByIndex=function(e,p){var f;return e>=u.children().length-1||0>=e?(f=!0,e=Math.min(Math.max(e,0),u.children().length-1)):f=!1,t(e),o=Math.max(c.duration-1920/$(window).width()*Math.abs(d.velocity)*9*(c.duration/230)-(l.isOutBoundaries()?d.distanceFromStart/15:0)*(c.duration/230),50),r=f?250*Math.abs(d.velocity)/$(window).width():0,a=u.translate3d().x,l.currentLandPos=n(e),p?void u.translate3d(n(e)):(window.cancelAnimationFrame(l.slidesGlobalID),s=Date.now(),void(l.slidesGlobalID=window.requestAnimationFrame(i)))},l.getLandingSlideIndex=function(e){for(var t=0;t<u.children().length;t++)if(u.children().outerWidth(!0)*t+u.children().outerWidth(!0)/2-u.children().outerWidth(!0)*c.pan_threshold*d.direction-n(0)>e)return c.one_item?t!=d.currentIndex?d.currentIndex+d.direction:d.currentIndex:t;return c.one_item?d.currentIndex+1:u.children().length-1},l.isOutBoundaries=function(){return Math.floor(u.translate3d().x)>n(0)&&-1==d.direction||Math.ceil(u.translate3d().x)<n(u.children().length-1)&&1==d.direction}};t.exports=n,e.matrixToArray=function(e){return e.substr(7,e.length-8).split(", ")},e.easeOutBack=function(e,t,n,i,o){return void 0==o&&(o=1.70158),n*((e=e/i-1)*e*((o+1)*e+o)+1)+t},$.fn.translate3d=function(e,t){if(null==e){var n=matrixToArray(this.css("transform"));if(null!=$.fn.jquery)return{x:parseFloat(isExplorer?n[12]:n[4]),y:parseFloat(isExplorer?n[13]:n[5])};var i=this.css("transform").replace("translate3d","").replace("(","").replace(")","").replace(" ","").replace("px","").split(",");return{x:parseFloat(i[0]),y:parseFloat(i[1])}}this.css("transform","translate3d("+e+"px,"+(t||0)+"px, 0px)")},e.clamp=function(e,t,n){return Math.min(Math.max(n,e),t)},e.getCurrentTotalWidth=function(e){var t=0;return e.children().each(function(){t+=$(this).outerWidth(!0)}),t}}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{}],2:[function(e,t,n){var i=e("./navigation"),o=e("./animation"),r=e("./slideout"),a=e("./mousewheel");t.exports={create:function(e,t){var n=this;n.$el=t,n.options=e,n.options.parent_width&&t.children().width(t.parent().outerWidth(!0)),t.css({"touch-action":"pan-y","-webkit-user-select":"none","-webkit-touch-callout":"none","-webkit-user-drag":"none","-webkit-tap-highlight-color":"rgba(0, 0, 0, 0)"}),n.options.disable_autowidth||t.css("width",t.children("li").length*t.children().outerWidth(!0)+10),n.vars={currentIndex:0,parent_width:n.options.parent_width,velocity:0,slideHeight:t.children().height(),direction:1,allSlidesWidth:getCurrentTotalWidth(t)},t.end_animation=!0,n.options.swipe_out&&r.slideout(n);var s=new o(n),l=new i(n,s);if(n.anim=s,t.translate3d(0),s.gotoSlideByIndex(n.options.start),!n.options.disable_scroll)try{a.add(n,s,l,t)}catch(d){}}}},{"./animation":1,"./mousewheel":5,"./navigation":6,"./slideout":8}],3:[function(e,t,n){t.exports={apply:function(e,t){e.gotoSlide=function(e){t.anim.gotoSlideByIndex(e)},e.next=function(){t.anim.gotoSlideByIndex(t.vars.currentIndex+1)},e.previous=function(){t.anim.gotoSlideByIndex(t.vars.currentIndex-1)},e.reload=function(){var e=t.$el,n=t.vars;n.parent_width&&e.children().width(e.parent().outerWidth(!0)),t.options.disable_autowidth||e.css("width",e.children("li").length*e.children().outerWidth(!0)+10),n.slideHeight=e.children().height(),n.allSlidesWidth=getCurrentTotalWidth(e),n.velocity=0,t.anim.gotoSlideByIndex(n.currentIndex,!0)},e.addSlide=function(e){t.$el.children("li").last().append("<li>"+e+"</li>"),t.reload()},e.removeSlide=function(e){t.$el.children(":nth-child("+(e+1||0)+")").remove(),t.vars.allSlidesWidth=getCurrentTotalWidth(t.$el)},e.getActiveIndex=function(){return t.vars.currentIndex},e.getCurrentPos=function(){return e.translate3d().x},e.getIndexByPosition=function(e){return t.anim.getLandingSlideIndex(-e)}}}},{}],4:[function(e,t,n){(function(t){"use strict";t.isExplorer=!!document.documentMode,e("./polyfills");var n=e("./carousel"),i=e("./external_funcs"),o={duration:350,swipe_sensitivity:150,disable_slide:!1,disable_clicktoslide:!1,disable_scroll:!1,start:0,one_item:!1,pan_threshold:.3,disable_autowidth:!1,parent_width:!1,swipe_out:!1,left_sided:!1};$.fn.itemslide=function(e){var t=Object.create(n);i.apply(this,t),t.create($.extend(o,e),this)}}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{"./carousel":2,"./external_funcs":3,"./polyfills":7}],5:[function(e,t,n){t.exports={add:function(e,t,n,i){var o=0,r=7;i.mousewheel(function(a){var s=a.deltaFactor>=100&&a.deltaFactor%1==0;if(!s&&(o++,o%r!=0))return void(o=0);if(!n.get_vertical_pan()){a.preventDefault();var l=e.vars.currentIndex-((0==a.deltaX?a.deltaY:a.deltaX)>0?1:-1);if(l>=i.children("li").length||0>l)return;e.vars.velocity=0,t.gotoSlideByIndex(l)}})}}},{}],6:[function(e,t,n){function i(){window.getSelection?window.getSelection().empty?window.getSelection().empty():window.getSelection().removeAllRanges&&window.getSelection().removeAllRanges():document.selection&&document.selection.empty()}function o(e){return null==$.fn.jquery?e.changedTouches[0]:e.originalEvent.touches[0]||e.originalEvent.changedTouches[0]}var r=function(e,t){function n(e){if("true"!==$(e.target).attr("no-drag")&&s.end_animation){var t;t="touchstart"==e.type?o(e):e,u=Date.now(),p=1,f=0,m=t.pageX,g=t.pageY,w=!1,h=!1,s.savedSlide=$(this),s.savedSlideIndex=s.savedSlide.index(),v=0,$(window).on("mousemove touchmove",function(e){r(e)}),i()}}function r(e){var n;if("touchmove"==e.type?(n=o(e),Math.abs(n.pageX-m)>10&&(f=1),f&&e.preventDefault()):(n=e,l.disable_slide||l.swipe_out||e.preventDefault()),-(n.pageX-m)>0?d.direction=1:d.direction=-1,t.isOutBoundaries()?x&&(y=n.pageX,x=0):(x||(t.currentLandPos=s.translate3d().x,m=n.pageX),x=1),1==v&&(s.children().css("height",d.slideHeight),s.savedSlide.wrapAll("<div class='itemslide_slideoutwrap' />"),v=-1),Math.abs(n.pageX-m)>6&&(!w&&s.end_animation&&(h=!0),window.cancelAnimationFrame(t.slidesGlobalID)),Math.abs(n.pageY-g)>6&&!h&&s.end_animation&&(w=!0),h){if(l.disable_slide)return;l.left_sided&&(t.currentLandPos=clamp(-(d.allSlidesWidth-s.parent().width()),0,t.currentLandPos)),w=!1,s.translate3d((0==x?y-m+(n.pageX-y)/4:n.pageX-m)+t.currentLandPos),s.trigger("changePos"),s.trigger("pan")}else w&&l.swipe_out&&(e.preventDefault(),$(".itemslide_slideoutwrap").translate3d(0,n.pageY-g),-1!=v&&(v=1))}function a(e){if(p){p=!1;var n;if(n="touchend"==e.type?o(e):e,$(window).off("mousemove touchmove"),w&&l.swipe_out)return w=!1,void c();if(s.end_animation&&!l.disable_slide){var i=Date.now()-u;d.velocity=-(n.pageX-m)/i,d.velocity>0?d.direction=1:d.direction=-1,d.distanceFromStart=(n.pageX-m)*d.direction*-1;var r=t.getLandingSlideIndex(d.velocity*l.swipe_sensitivity-s.translate3d().x);if(d.distanceFromStart>6)return void t.gotoSlideByIndex(r)}s.trigger({type:"clickSlide",slide:s.savedSlideIndex}),s.savedSlideIndex==d.currentIndex||l.disable_clicktoslide||(e.preventDefault(),t.gotoSlideByIndex(s.savedSlideIndex))}}var s=e.$el,l=e.options,d=e.vars,c=e.swipeOut;s.children().on("mousedown touchstart",function(e){n.call(this,e)}),$(window).on("mouseup touchend",function(e){a(e)});var u,p,f,m,g,h,v,w=!1;this.get_vertical_pan=function(){return w};var y,x};t.exports=r},{}],7:[function(e,t,n){for(var i=0,o=["ms","moz","webkit","o"],r=0;r<o.length&&!window.requestAnimationFrame;++r)window.requestAnimationFrame=window[o[r]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[o[r]+"CancelAnimationFrame"]||window[o[r]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(e,t){var n=(new Date).getTime(),o=Math.max(0,16-(n-i)),r=window.setTimeout(function(){e(n+o)},o);return i=n+o,r}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(e){clearTimeout(e)}),"function"!=typeof Object.create&&(Object.create=function(e){function t(){}return t.prototype=e,new t}),$.fn.outerWidth=function(){var e=$(this)[0],t=e.offsetWidth,n=getComputedStyle(e);return t+=parseInt(n.marginLeft)+parseInt(n.marginRight)}},{}],8:[function(e,t,n){function i(e){function t(){if(g=Date.now()-l,m)$(".itemslide_slideoutwrap").translate3d(0,d-easeOutBack(g,0,d-s,250,0)),o.savedSlide.css("opacity",p-easeOutBack(g,0,p,250,0)*(f?-1:1));else{if(f)return $(".itemslide_slideoutwrap").children().unwrap(),$(w).children().unwrap(),o.children().css("height",""),o.end_animation=!0,void(g=0);$(w).translate3d(0-easeOutBack(g-250,0,0+o.savedSlide.width(),125,0)*(v?-1:1),0)}return 1==h&&($(".itemslide_slideoutwrap").children().unwrap(),o.savedSlideIndex==a.currentIndex&&$(w).children(":nth-child(1)").addClass("itemslide-active"),o.savedSlideIndex!=o.children().length-1||v||o.savedSlideIndex!=a.currentIndex||(r.duration=200,e.anim.gotoSlideByIndex(o.children().length-2)),0==o.savedSlideIndex&&0!=a.currentIndex&&(g=500),h=-1),g>=250&&(m=!1,-1!=h&&(h=1),g>=375)?($(w).children().unwrap(),o.removeSlide(n.index()),(0==o.savedSlideIndex&&0!=a.currentIndex||v)&&e.anim.gotoSlideByIndex(a.currentIndex-1,!0),r.duration=u,g=0,void(o.end_animation=!0)):void(c=requestAnimationFrame(t))}var n,i,o=e.$el,r=e.options,a=e.vars,s=-400,l=Date.now(),d=0,c=0,u=0,p=0;o.end_animation=!0,o.savedSlideIndex=0;var f=!1;e.swipeOut=function(){d=$(".itemslide_slideoutwrap").translate3d().y,i=0>d,s=i?-400:400,Math.abs(0-d)<50?(f=!0,s=0):(f=!1,o.trigger({type:"swipeout",slide:o.savedSlideIndex})),h=0,u=r.duration,n=o.savedSlide,l=Date.now(),p=o.savedSlide.css("opacity"),o.savedSlideIndex<a.currentIndex?(v=!0,o.children(":nth-child(-n+"+(o.savedSlideIndex+1)+")").wrapAll("<div class='itemslide_move' />")):(v=!1,o.children(":nth-child(n+"+(o.savedSlideIndex+2)+")").wrapAll("<div class='itemslide_move' />")),m=!0,o.end_animation=!1,c=requestAnimationFrame(t)};var m=!0,g=0,h=0,v=!1,w=".itemslide_move"}t.exports={slideout:i}},{}]},{},[4]);
function viewportSize(){var e=document.createElement("div");e.style.cssText="position: fixed;top: 0;left: 0;bottom: 0;right: 0;",document.documentElement.insertBefore(e,document.documentElement.firstChild);var t={width:e.offsetWidth,height:e.offsetHeight};return document.documentElement.removeChild(e),t}
;$(function(){$(document).on("click","a.js-smoothScroll",function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top-100},1500),!1}})});

//# sourceMappingURL=scripts.js.map