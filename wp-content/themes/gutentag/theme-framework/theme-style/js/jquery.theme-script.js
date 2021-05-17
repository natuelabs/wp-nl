/**
 * @package 	WordPress
 * @subpackage 	Gutentag
 * @version		1.0.0
 * 
 * Theme Scripts
 * Created by CMSMasters
 * 
 */


jQuery(document).ready(function() { 
	"use strict";
	
	/* Menu item custom colors */
	(function ($) { 
		$('.menu-item > a[data-color]').each(function () {
			$(this).attr('style', $(this).data('color'));
		} );
	} )(jQuery);
	


	/* Header Top Hide Toggle */
	(function ($) { 
		$('.header_top_but').on('click', function () { 
			var headerTopBut = $(this), 
				headerTopButArrow = headerTopBut.find('> span'), 
				headerTopOuter = headerTopBut.parents('.header_top').find('.header_top_outer');
			
			if (headerTopBut.hasClass('opened')) {
				headerTopOuter.slideUp();
				
				headerTopButArrow.removeClass('cmsmasters_theme_icon_slide_top').addClass('cmsmasters_theme_icon_slide_bottom');
				
				headerTopBut.removeClass('opened').addClass('closed');
			} else if (headerTopBut.hasClass('closed')) {
				headerTopOuter.slideDown();
				
				headerTopButArrow.removeClass('cmsmasters_theme_icon_slide_bottom').addClass('cmsmasters_theme_icon_slide_top');
				
				headerTopBut.removeClass('closed').addClass('opened');
			}
		} );
	} )(jQuery);
	
	
	
	/* Header Search Form */
	(function ($) { 
		$('.cmsmasters_header_search_but').on('click', function () { 
			$('.cmsmasters_header_search_form').addClass('cmsmasters_show');
			
			$('.cmsmasters_header_search_form').find('input[type=search]').focus();
		} );
		
		
		$('.cmsmasters_header_search_form_close').on('click', function () { 
			$('.cmsmasters_header_search_form').removeClass('cmsmasters_show');
		} );
	} )(jQuery);
	
	
	
	/* Stats Run */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_circles').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			140, 
							lineWidth : 	5, 
							lineCap : 		'square', 
							animate : 		1000, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : function () { 
								return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_theme_script.primary_color;
							}, 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_stat_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_circles').find('.cmsmasters_stat').easyPieChart( { 
				size : 			140, 
				lineWidth : 	5, 
				lineCap : 		'square', 
				animate : 		1000, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : function () { 
					return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_theme_script.primary_color;
				}, 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_counters').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_counter').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			140, 
							lineWidth : 	0, 
							lineCap : 		'square', 
							animate : 		1500, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : 		'#ffffff', 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_counter_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_counters').find('.cmsmasters_counter').easyPieChart( { 
				size : 			140, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_counter_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_bars').waypoint(function () { 
				$(this).addClass('shortcode_animated').find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					el.easyPieChart( { 
						size : 			140, 
						lineWidth : 	0, 
						lineCap : 		'square', 
						animate : 		1500, 
						scaleColor : 	false, 
						trackColor : 	false, 
						barColor : 		'#ffffff', 
						onStep : function (from, to, val) { 
							$(this.el).find('.cmsmasters_stat_counter').text(~~val);
						} 
					} );
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_bars').addClass('shortcode_animated').find('.cmsmasters_stat').easyPieChart( { 
				size : 			140, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
	} )(jQuery);
} );



/*!
 * Fixed Header Function
 */
!function(s){"use strict";s.fn.cmsmastersFixedHeaderScroll=function(e){var o={headerTop:".header_top",headerMid:".header_mid",headerBot:".header_bot",navBlock:"nav",navList:"#navigation",navTopList:"#top_line_nav",respNavButton:".responsive_nav",respTopNavButton:".responsive_top_nav",fixedClass:".fixed_header",fixedClassBlock:"#page",respHideBlocks:"",maxWidthMid:1024,maxWidthBot:1024,changeTopHeight:!0,changeMidHeight:!0,mobileDisabled:!0},i=this,t={};(t={init:function(){t.options=t.o=s.extend({},o,e),t.el=i,t.vars=t.v={},t.v.newTopHeight=0,t.v.newMidHeight=0,t.setHeaderVars(),t.startHeader()},setHeaderVars:function(){t.v.headerMidString=t.o.headerMid,t.v.headerTop=t.el.find("> "+t.o.headerTop),t.v.headerMid=t.el.find("> "+t.v.headerMidString),t.v.headerBot=t.el.find("> "+t.o.headerBot),t.v.respNavButton=t.el.find(t.o.respNavButton),t.v.respTopNavButton=t.el.find(t.o.respTopNavButton),t.v.respHideBlocks=s(t.o.respHideBlocks),t.v.fixedClassBlock=s(t.o.fixedClassBlock),t.v.navListString=t.o.navList,t.v.navTopListString=t.o.navTopList,t.v.navBlockString=t.o.navBlock,t.v.navBlock=t.el.find(t.v.navListString).parents(t.v.navBlockString),t.v.navTopBlock=t.el.find(t.v.navTopListString).parents(t.v.navBlockString),t.v.midChangeHeightBlocks=s(t.v.headerMidString),t.v.midChangeHeightBlocksResp=s(t.v.headerMidString),t.v.topHeight=0,t.v.botHeight=0,t.v.midHeight=Number(t.v.headerMid.attr("data-height")),t.v.win=s(window),t.v.winScrollTop=t.v.win.scrollTop(),t.v.winMidScrollTop=t.v.winScrollTop-t.v.topHeight,t.v.isMobile="ontouchstart"in document.documentElement,t.v.mobileDisabled=cmsmasters_media_width()<t.o.maxWidthMid},startHeader:function(){0<t.v.headerTop.length&&(t.v.topHeight=Number(t.v.headerTop.attr("data-height"))),0<t.v.headerBot.length&&(t.v.botHeight=Number(t.v.headerBot.attr("data-height"))),t.attachEvents(),t.v.win.trigger("scroll")},attachEvents:function(){t.v.respNavButton.bind("click",function(){return t.v.respNavButton.is(":not(.active)")?(t.v.navBlock.css({display:"block"}),t.v.respHideBlocks.css({display:"none"}),t.v.respNavButton.addClass("active")):(t.v.navBlock.css({display:"none"}),t.v.respHideBlocks.css({display:"block"}),t.v.respNavButton.removeClass("active")),!1}),t.v.respTopNavButton.bind("click",function(){return t.v.respTopNavButton.is(":not(.active)")?(t.v.navTopBlock.css({display:"block"}),t.v.respHideBlocks.css({display:"none"}),t.v.respTopNavButton.addClass("active")):(t.v.navTopBlock.css({display:"none"}),t.v.respHideBlocks.css({display:"block"}),t.v.respTopNavButton.removeClass("active")),!1}),t.v.win.bind("scroll",function(){return!(t.el.parents(t.o.fixedClassBlock).is(":not("+t.o.fixedClass+")")||t.v.mobileDisabled&&t.v.isMobile)&&void(cmsmasters_media_width()>t.o.maxWidthMid&&(t.getScrollTop(),t.headerTransform()))}),t.v.win.bind("resize",function(){return!(t.el.parents(t.o.fixedClassBlock).is(":not("+t.o.fixedClass+")")||t.v.mobileDisabled&&t.v.isMobile)&&void(0<t.v.headerBot.length?t.headerResize(t.o.maxWidthBot):t.headerResize(t.o.maxWidthMid))})},getScrollTop:function(){t.v.winScrollTop=t.v.win.scrollTop(),t.v.winMidScrollTop=t.v.winScrollTop-t.v.topHeight},headerTransform:function(){t.v.fixedClassBlock.hasClass("fixed_header")&&(0<t.v.headerBot.length?t.v.winScrollTop>t.v.topHeight+t.v.midHeight?t.el.css({marginTop:-(t.v.topHeight+t.v.midHeight+t.v.botHeight),paddingTop:t.v.botHeight,opacity:1}).addClass("navi_scrolled"):t.el.removeClass("navi_scrolled").css({marginTop:-t.v.winScrollTop,paddingTop:0,opacity:1}):t.v.winScrollTop<t.v.topHeight?(t.v.headerMid.removeClass("header_mid_scroll"),t.v.headerBot.removeClass("header_bot_scroll"),t.v.newTopHeight=t.v.topHeight-t.v.winScrollTop,t.v.headerTop.css({overflow:"hidden",height:t.v.newTopHeight+"px"}),t.v.winScrollTop<=3&&t.v.headerTop.css({overflow:"inherit"}),t.v.midChangeHeightBlocks.css({height:t.v.midHeight+"px"})):(t.v.headerTop.css({overflow:"hidden",height:0}),t.v.winMidScrollTop<t.v.midHeight/3?(t.v.headerMid.removeClass("header_mid_scroll"),t.v.headerBot.removeClass("header_bot_scroll"),t.v.newMidHeight=t.v.midHeight-t.v.winMidScrollTop):(t.v.headerMid.addClass("header_mid_scroll"),t.v.headerBot.addClass("header_bot_scroll"),t.v.newMidHeight=t.v.midHeight/1.5),t.v.midChangeHeightBlocks.css({height:t.v.newMidHeight+"px"})))},headerResize:function(e){cmsmasters_media_width()>e?(t.v.navBlock.removeAttr("style"),t.v.respHideBlocks.removeAttr("style"),t.v.respNavButton.removeClass("active"),t.getScrollTop(),t.headerTransform()):(0<t.v.headerBot.length?t.v.headerTop.removeAttr("style"):(t.v.headerTop.removeAttr("style"),t.v.midChangeHeightBlocksResp.css("height","auto")),t.el.removeAttr("style").removeClass("navi_scrolled").css({opacity:1}))}}).init()}}(jQuery);



/*!
 * Responsive Navigation Function
 */
!function(s){"use strict";s.fn.cmsmastersResponsiveNav=function(n){var t={submenu:"ul.sub-menu, ul.children",respButton:".responsive_nav",startWidth:1024},e=this,i={};i={init:function(){i.o=s.extend({},t,n),i.el=e,i.v={},i.v.pLinkText="",i.v.subLinkToggle=void 0,i.setVars(),i.restartNav()},setVars:function(){i.v.submenu=i.el.find(i.o.submenu),i.v.subLink=i.v.submenu.closest("li").find("> a"),i.v.respButton=s(i.o.respButton),i.v.startWidth=i.o.startWidth,i.v.win=s(window),i.v.trigger=!1,i.v.counter=0,i.startEvent()},buildNav:function(){i.v.trigger=!0,i.v.counter=1,i.v.subLink.each(function(){""===s(this).text()&&(i.v.pLinkText=s(this).closest("ul").closest("li").find("> a").text(),s(this).addClass("cmsmasters_resp_nav_custom_text").html('<span class="nav_item_wrap"><span class="nav_title">'+i.v.counter+'. '+i.v.pLinkText+'</span></span>'),i.v.counter+=1),s(this).append('<span class="cmsmasters_resp_nav_toggle cmsmasters_theme_icon_resp_nav_slide_down" />')}),i.v.subLinkToggle=i.v.subLink.find("> span.cmsmasters_resp_nav_toggle"),i.v.submenu.hide(),i.attachEvents()},restartNav:function(){!i.v.trigger&&cmsmasters_media_width()<=i.v.startWidth?i.buildNav():i.v.trigger&&cmsmasters_media_width()>i.v.startWidth&&i.destroyNav()},resetNav:function(){i.v.subLinkToggle.removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down"),i.v.submenu.hide()},destroyNav:function(){i.v.subLink.each(function(){s(this).hasClass("cmsmasters_resp_nav_custom_text")&&s(this).removeClass("cmsmasters_resp_nav_custom_text").text(""),s(this).find("span.cmsmasters_resp_nav_toggle").remove()}),i.v.submenu.css("display",""),i.v.trigger=!1,i.detachEvents()},startEvent:function(){i.v.win.on("resize",function(){i.restartNav()})},attachEvents:function(){i.v.subLinkToggle.on("click",function(){return s(this).hasClass("cmsmasters_theme_icon_resp_nav_slide_up")?(s(this).removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down").closest("li").find("ul.sub-menu, ul.children").hide(),s(this).closest("li").find("span.cmsmasters_resp_nav_toggle").removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down")):(s(this).removeClass("cmsmasters_theme_icon_resp_nav_slide_down").addClass("cmsmasters_theme_icon_resp_nav_slide_up"), s(this).closest("li").find("> ul.sub-menu, > ul.children").show(),s(this).closest("li").find("> div > ul.sub-menu, > div > ul.children").show()),!1}),i.v.respButton.on("click",function(){i.v.trigger&&s(this).hasClass("active")&&i.resetNav()})},detachEvents:function(){i.v.subLinkToggle.off("click")}},i.init()}}(jQuery);

