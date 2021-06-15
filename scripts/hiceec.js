(function(n,t){var u={isAutoTop:!1,isAutoLeft:!1,isAutoRight:!1,isAutoBottom:!1,scaleTop:1,scaleLeft:1,scaleRight:1,scaleBottom:1,isAutoMarginTop:!1,isAutoMarginLeft:!1,scaleMarginTop:1,scaleMarginLeft:1,isAutoWidth:!1,isAutoHeight:!1,scaleWidth:1,scaleHeight:1,minWidth:1100,minHeight:600,maxWidth:1700,maxHeight:900,scale:1,mode:"default"},i=function(n,t){return parseInt(n,10)||t||0},r=function(i,r){var u=this,f=n(t);u.$self=n(i);n.extend(u,r);u.elementInit();f.on("resize",function(){u.update()}).trigger("resize")};r.prototype.elementInit=function(){var t=this,n=t.$self,r=n.data();r.isInit||n.data({isInit:!0,width:n.width(),height:n.height(),top:i(n.css("top")),left:i(n.css("left")),right:i(n.css("right")),bottom:i(n.css("bottom")),marginTop:i(n.css("margin-top")),marginLeft:i(n.css("margin-left")),marginRight:i(n.css("margin-right")),marginBottom:i(n.css("margin-bottom"))})};r.prototype.getScale=function(){var i=this,o=n(t),r=o.width(),u=o.height();r<i.minWidth?r=i.minWidth:r>i.maxWidth&&(r=i.maxWidth);u<i.minHeight?u=i.minHeight:u>i.maxHeight&&(u=i.maxHeight);var s=r,h=u,f=s/i.minWidth,e=h/i.minHeight;return i.mode==="width"?f:i.mode==="height"?e:f>e?e:f};r.prototype.update=function(){var n=this,i=n.$self,r=n.$self.data(),t=n.getScale(),u,f,e,o,s,h,c,l,a,v,y,p,w,b,k,d;t=(t-1)*n.scale+1;n.isAutoTop&&(u=(t-1)*n.scaleTop+1,f=r.top*u,i.css({top:f}));n.isAutoLeft&&(e=(t-1)*n.scaleLeft+1,o=r.left*e,i.css({left:o}));n.isAutoRight&&(s=(t-1)*n.scaleRight+1,h=r.right*s,i.css({right:h}));n.isAutoBottom&&(c=(t-1)*n.scaleBottom+1,l=r.bottom*c,i.css({bottom:l}));n.isAutoMarginTop&&(a=(t-1)*n.scaleMarginTop+1,v=r.marginTop*a,i.css({marginTop:v}));n.isAutoMarginLeft&&(y=(t-1)*n.scaleMarginLeft+1,p=r.marginLeft*y,i.css({marginLeft:p}));n.isAutoWidth&&(w=(t-1)*n.scaleWidth+1,b=r.width*w,i.css({width:b}));n.isAutoHeight&&(k=(t-1)*n.scaleHeight+1,d=r.height*k,i.css({height:d}))};n.fn.elementResize=function(t){return this.each(function(){new r(this,n.extend({},u,t))})}})(jQuery,window),function(n){n.fn.elementResizeWarp=function(t){var i=function(n,t){return parseInt(n,10)||t||0};return this.each(function(){var r=n(this),u=n("<div/>"),f=r.data();f.isInit||(u.css({position:"absolute",top:"50%",left:"50%",width:r.css("width"),height:r.css("height"),"margin-left":r.css("margin-left"),"margin-top":r.css("margin-top")}),r.css({position:"relative",left:"auto","margin-left":"auto","margin-top":-(i(r.css("height"))/2),"margin-right":"auto"}),r.data({isInit:!0}),r.wrap(u),r.parent().elementResize(t))})}}(jQuery,window);

var nowpage="";
// let vh = window.innerHeight * 0.01;
// document.documentElement.style.setProperty('--vh', `${vh}px`);
$(function(){
	var stage={};

// gtag('event','click',{'event_category':'eclass_KOL','event_label':'KOL文章'});

	stage.init=function(){
		$('.loading').fadeOut();

		$('.fixed-btn .btn,.btn-kv-1').click(function(){
			window.location.hash = 'promotion';
			sendEvent('特企頁_浮動選單_隨身C帶美力','click','特企頁_浮動選單_隨身C帶美力');
			gScroll($('.area2').offset().top-$('nav').height());
			return false;
		})
		$('.fixed-btn .btn2,.btn-kv-2').click(function(){
				window.location.hash = '24h';
			sendEvent('特企頁_浮動選單_保護力不間斷','click','特企頁_浮動選單_保護力不間斷');
			gScroll($('.area1').offset().top-$('nav').height());
			return false;
		})
		$('.icon-fb,.btn-share').click(function(){
			sendEvent('愛喜C_FB Share','click','愛喜C_FB Share');
			f();
			return false;
		})




		
		$(window).scroll(function(){
			var _scroll=$(this).scrollTop() + 1;
			stage.scroll(_scroll);
		});
		stage.scroll($(window).scrollTop() + 1);
		if (!Root.mobile ) {
			window.onresize = function(){
				stageResize();
			}
			stageResize();
		}else if ((Root.device=='iPad' && Root.mobile)||(Root.device==Root.ANDROIDTABLET && Root.mobile)) {
			window.onresize = function(){
				stageResizeTable();
			}
			stageResizeTable();
		}else{
			window.onresize = function(){
				stageResizeMobile();
			}
			stageResizeMobile();
		}
		kvTL.play();
	}
	function stageResize(){
		if($(window).height()<600){
			TweenMax.to($('.kv .main'),.6,{marginLeft:(1/(1080/$(window).height()))*-180})
			TweenMax.to($('.kv .title'),.6,{scale:(1/(1080/$(window).height()*.8)),marginTop:(1/(1080/$(window).height()))*-45+"%",marginBottom:((1080/$(window).height()))*-50,transformOrigin: "50% 50%"})
			TweenMax.to($('.person'),.6,{scale:1.1/((1080/$(window).height())),marginLeft:(1/(1080/$(window).height()))*-80,transformOrigin: "100% 50%"})
		}else if($(window).height()<800){
			TweenMax.to($('.kv .title'),.6,{scale:(1/(1080/$(window).height())),marginTop:(1/(1080/$(window).height()))*-20+"%",marginBottom:((1080/$(window).height()))*-40,transformOrigin: "50% 50%"})
			TweenMax.to($('.person'),.6,{scale:1.1/((1080/$(window).height())),transformOrigin: "100% 50%"})
		}else if($(window).height()<1080){
			TweenMax.to($('.kv .title'),.6,{scale:(1/(1080/$(window).height())),marginTop:(1/(1080/$(window).height()))*-20+"%",marginBottom:((1080/$(window).height()))*-20,transformOrigin: "50% 50%"})
			TweenMax.to($('.person'),.6,{scale:1.1/((1080/$(window).height())),transformOrigin: "100% 50%"})
		}else{
			TweenMax.to($('.kv .title'),.6,{scale:(1/(1080/$(window).height())),marginTop:"-20%",marginBottom:60,transformOrigin: "50% 50%"})
			TweenMax.to($('.person'),.6,{scale:1.1/((1080/$(window).height())),transformOrigin: "100% 50%"})
		}
	}
	function stageResizeTable(){
		zoomNumber=(6000/7000/3*(4200))/2;
		if(Root.mobile && $(window).width()<$(window).height()){
			$('.portrait').show();
		}else{
			$('.portrait').hide();
		}


		if($(window).height()<800){
			TweenMax.to($('.person'),.6,{scale:1/((1080/$(window).height())*.9),marginLeft:100*$(window).width()/1080,bottom:-790*((1080/$(window).height()*.7)),transformOrigin: "0% 50%"})
		}else{
			TweenMax.to($('.person'),.6,{scale:1/((1080/$(window).height()*.87)),marginLeft:20*$(window).width()/1080,bottom:-790*((1080/$(window).height()*.87)),transformOrigin: "0% 50%"})
		}

	}
	function stageResizeMobile(){
		$('.kv').height($(window).height()-70);
		if(Root.mobile && $(window).width()>$(window).height()){
			$('.landscape').show();
		}else{
			$('.landscape').hide();
		}		
		if($(window).height()<900){
			TweenMax.set($('.kv .title'),{marginTop: "3vh"});
			//TweenMax.set($('.person'),{bottom: -65+"%"});
			TweenMax.set($('.kv .slogan'),{top: "38%"});
			TweenMax.set($('.person'),{top:"41%"});
		}else if($(window).height()>=900 && $(window).height()<950){
			TweenMax.set($('.kv .title'),{marginTop: "3vh"});
			TweenMax.set($('.kv .slogan'),{top: "35%"});
			TweenMax.set($('.person'),{top:"38%"});
			//TweenMax.set($('.person'),{bottom: -20-(1400-$(window).height())/10+"%"});
		}else if($(window).height()>=950 && $(window).height()<1000){
			TweenMax.set($('.kv .title'),{marginTop: "4vh"});
			TweenMax.set($('.kv .slogan'),{top: "35%"});
			TweenMax.set($('.person'),{top:"38%"});
			//TweenMax.set($('.person'),{bottom: -15-(1400-$(window).height())/10+"%"});
		}else if($(window).height()>=1000 && $(window).height()<1400){
			TweenMax.set($('.kv .title'),{marginTop: ""});
			TweenMax.set($('.kv .slogan'),{top: ""});
			TweenMax.set($('.person'),{top:"62vw"});
			//TweenMax.set($('.person'),{bottom: -20-(1400-$(window).height())/10+"%"});
		}else{
			TweenMax.set($('.kv .title'),{marginTop: ""});
			TweenMax.set($('.kv .slogan'),{top: "55vw"});
			TweenMax.set($('.person'),{top:"57vw"});
			//TweenMax.set($('.person'),{bottom: -20+"%"});
			//TweenMax.set($('.signature'),{bottom: 120});
		}
		

	}

	kvTLbool=false;
	//TweenMax.set($('.kv .person'),{x:200,y:-50,opacity:0});
	var kvTL=new TimelineMax({onComplete:function(){
		if(kvTLbool)return;
    	kvTLbool=true;
    	
    }}).pause();
	//kvTL.to($('.kv .person'), 1.2,{opacity:1, bezier:{type:"soft", values:[{x:200, y:-50}, {x:50, y:50}, {x:0, y:0}]}})
	kvTL.from($('.kv .person img'), 1.2,{opacity:1,x:-50,transformOrigin: "50% 50%"})
	//.from($('.kv .light'),.6,{opacity:0, ease: Power1.easeOut},"-=1.2")	
	.from($('.kv .title'),.6,{opacity:0,x:-50, ease: Power1.easeOut},"-=.8")
	.from($('.kv .kv-btns'),.6,{opacity:0,y:50, ease: Power1.easeOut},"-=.6")
	//.from($('.kv .signature'),.6,{opacity:0,y:20, ease: Power1.easeOut},"-=.6")	
	//.from($('.kv .title .tip img'),1,{scale:0, ease:  Elastic.easeOut.config(1, 0.3)},"-=.6")	
	//.from($('.kv .kv-pro div').eq(0),.6,{opacity:0,x:-20, ease: Power1.easeOut},"-=.6")
	//.from($('.kv .kv-pro div').eq(1),.6,{opacity:0,x:-20, ease: Power1.easeOut},"-=.4")
	//.from($('.kv .btn-kv'),.6,{opacity:0,y:-20, ease: Power1.easeOut},"-=.3")

	var event1TL=new TimelineMax({onComplete:function(){
		$('.event1-ball1').addClass("move");
		setTimeout(function(){$('.event1-ball2').addClass("move");},1000);
		setTimeout(function(){$('.event1-ball3').addClass("move");},2000);
	}}).pause();
	event1TL.from($('.event1-title'),.6,{scale:0,ease:Back.easeOut.config(1.4)})
	.from($('.event1-ball1'),.8,{scale:0,ease:Back.easeOut.config(1.4),marginLeft:0,bottom:50},"-=.3")
	.from($('.event1-ball2'),.6,{scale:0,ease:Back.easeOut.config(1.4),bottom:50},"-=.4")
	.from($('.event1-ball3'),.8,{scale:0,ease:Back.easeOut.config(1.4),marginLeft:0,bottom:50},"-=.4")

	var area1TopTL=new TimelineMax().pause();
	area1TopTL.from($('.area1-t-p1'),.8,{opacity:0,x:25,y:50,ease:Back.easeOut.config(1.4)})
	.from($('.area1-t-p2'),.8,{opacity:0,x:-25,y:50,ease:Back.easeOut.config(1.4)},"-=.6")
	.from($('.area1-sp'),.8,{opacity:0,y:"100%",ease:Back.easeOut.config(1.2)},"-=.5")

	var area1BotTL=new TimelineMax().pause();
	area1BotTL.from($('.area1-blogger > div').eq(0),.8,{opacity:0,y:50,ease:Back.easeOut.config(1.2)})
	if(!Root.mobile || (Root.device==Root.IPAD || Root.device==Root.ANDROIDTABLET)){
		area1BotTL.from($('.area1-blogger > div').eq(1),.8,{opacity:0,y:50,ease:Back.easeOut.config(1.2)},"-=.5")
		.from($('.area1-blogger > div').eq(2),.8,{opacity:0,y:50,ease:Back.easeOut.config(1.2)},"-=.5")
	}
	if(Root.mobile && (Root.device!=Root.IPAD && Root.device!=Root.ANDROIDTABLET)){
		var area1Bot2TL=new TimelineMax().pause();
		area1Bot2TL.from($('.area1-blogger > div').eq(1),.8,{opacity:0,y:50,ease:Back.easeOut.config(1.2)})
		var area1Bot3TL=new TimelineMax().pause();
		area1Bot3TL.from($('.area1-blogger > div').eq(2),.8,{opacity:0,y:50,ease:Back.easeOut.config(1.2)})
	}


	var area2TL=new TimelineMax().pause();
	if(!Root.mobile || (Root.device==Root.IPAD || Root.device==Root.ANDROIDTABLET)){
		area2TL.from($('.area2-sp'),.8,{opacity:0,x:50,ease:Power3.easeOut})
	}
	area2TL.from($('.area2-title'),1,{scale:0.35,opacity:0,ease: Elastic.easeOut.config(1,.7)},"-=.2")

	var productTL=new TimelineMax().pause();
	productTL.from($('.pro-box .pro').eq(0),.8,{opacity:0,y:50, ease: Power1.easeOut})
	.from($('.pro-box .pro').eq(1),.8,{opacity:0,y:50, ease: Power1.easeOut},"-=.4");
	//if(!Root.mobile){
		//productTL.from($('.pro-box .pro').eq(2),.8,{opacity:0,y:50, ease: Power1.easeOut},"-=.4")
		//.from($('.pro-box .pro').eq(3),.8,{opacity:0,y:50, ease: Power1.easeOut},"-=.4")
	//}
	//if(Root.mobile){
		var product2TL=new TimelineMax().pause();
		product2TL.from($('.pro-box .pro').eq(2),.8,{opacity:0,y:50, ease: Power1.easeOut},"-=.4")
		.from($('.pro-box .pro').eq(3),.8,{opacity:0,y:50, ease: Power1.easeOut},"-=.4")
	//}	

	var productTLbool=false;
	stage.scroll=function(_scroll){
		var showheight=(Root.mobile)?$(window).height()/2:$(window).height()/3;
		if(_scroll>=$('.event1').eq(0).offset().top-$(window).height()/3*2){
			$('.fixed-btn').addClass('show');
		}else{
			$('.fixed-btn').removeClass('show');
		}
		var startNum=$('.event2').offset().top-$(window).height();
       	var endNum=$('.event2').offset().top+$('.event2').height();
        if(_scroll>=startNum && _scroll<=endNum){
        	//$('.pd').css('backgroundPositionY',((_scroll-startNum)/(endNum-startNum))*100+"%");
        	TweenMax.to($('.event2'),0.3,{'backgroundPositionY':((_scroll-startNum)/(endNum-startNum)*.25)*100+"%",ease:Power1.easeOut})

        }else if(_scroll<startNum){
        	TweenMax.set($('.event2'),{'backgroundPositionY':((startNum-startNum)/(endNum-startNum)*.25)*100+"%",ease:Power1.easeOut})

        }

        var startNum2=$('.bg-petal').offset().top-$(window).height();
       	var endNum2=$('.bg-petal').offset().top+$('.bg-petal').height()*0.1;
        if(_scroll>=startNum2 && _scroll<=endNum2){
        	//$('.pd').css('backgroundPositionY',((_scroll-startNum)/(endNum-startNum))*100+"%");
        	TweenMax.to($('.bg-petal'),0.3,{'y':((_scroll-startNum2)/(endNum2-startNum2)*.0625)*100+"%",ease:Power1.easeOut})
        	
        }else if(_scroll<startNum2){
        	TweenMax.set($('.bg-petal'),{'y':((startNum2-startNum2)/(endNum2-startNum2)*.0625)*100+"%",ease:Power1.easeOut})
        	
        }

		//if(_scroll>=$('.area2-tip2').offset().top-showheight){
            //product2TL.play();        
		// }else if(Root.mobile && (Root.device!=Root.IPAD && Root.device!=Root.ANDROIDTABLET) && _scroll>=$('.area2-center').offset().top-showheight){
  //           productTL.play();        
		//}else 
		if(_scroll>=$('.area2-top').offset().top-showheight){
            if(nowpage=="promotion")return;
            nowpage="promotion";
            area2TL.play();  
            setTimeout(function(){productTL.play();},300) 
            setTimeout(function(){product2TL.play();},600) 
            if(bTrackBool)return;
            bTrackBool=true;
            sendPage("hiceetab-"+nowpage,"/hiceetab-"+nowpage);       
		}else if(_scroll>=$('.area1-bottom').offset().top-showheight){
			if(Root.mobile && (Root.device!=Root.IPAD && Root.device!=Root.ANDROIDTABLET) && _scroll>=$('.area1-blogger > div').eq(2).offset().top-showheight){
				area1Bot3TL.play();   
				console.log("3")
			}else if(Root.mobile && (Root.device!=Root.IPAD && Root.device!=Root.ANDROIDTABLET) && _scroll>=$('.area1-blogger > div').eq(1).offset().top-showheight){
				area1Bot2TL.play();   
				console.log("2")
			}else{
				area1BotTL.play();    	
				console.log("1")
			}
            
		}else if(_scroll>=$('.area1').offset().top-showheight){
			
            if(nowpage=="24h")return;
            nowpage="24h";
            area1TopTL.play();
            if(Root.mobile && (Root.device!=Root.IPAD && Root.device!=Root.ANDROIDTABLET))area1BotTL.play();
            if(aTrackBool2)return;
            aTrackBool2=true;
            sendPage("hiceetab-"+nowpage,"/hiceetab-"+nowpage);      
		}else if(_scroll>=$('.event1').offset().top-showheight){
			
            if(nowpage=="reason")return;
            nowpage="reason";  
            event1TL.play(); 
            if(aTrackBool)return;
            aTrackBool=true;
            sendPage("hiceetab-"+nowpage,"/hiceetab-"+nowpage);      
		}else{
			if(nowpage=="hiceec")return;
			kvTL.play();
            nowpage="hiceec";
            if(kTrackBool)return;
            kTrackBool=true;
            //sendPage("hiceetab-index","/hiceetab-index");      

		}

	}
	var kTrackBool=aTrackBool=aTrackBool2=pTrackBool=bTrackBool=false;
	stage.load = function() {
        var loading = true;
        var imgArray = [];
        var htmlImg = $('a,li,div');
        for (var j = 0; j < htmlImg.length; j++) {
            if (htmlImg.eq(j).css('background-image') !== 'none' && htmlImg.eq(j).css('background-image').indexOf("linear-gradient") < 0) {
                var s = htmlImg.eq(j).css('background-image').replace('url("', '').replace('")', '').replace('url(', '').replace(')', '').replace('"', '').replace("'", '')
                imgArray.push(s);
            }
        }
        for (var k = 0; k < $('img').length; k++) {
            imgArray.push($('img').eq(k).attr('src'));
        }
        imgloader = new kImageLoader(imgArray, "loader");
        imgloader.onProgress = function(event) {
            var p = Math.floor((imgloader.loaded / imgloader.total) * 100);
	        $('.loadingTxt').html(p+"%");
        };
        imgloader.onComplete = function() {
        	if(location.hash.slice(1)!=""){
				goHash(location.hash.slice(1));
			} 
        	setTimeout(function() {
	            stage.init();
            }, 1000); 
            //stage.start();
        };
        imgloader.startLoad();
    }
	stage.load();


})

function goHash(_hashname){
	if(_hashname=="promotion"){
		gScroll($('.area2').offset().top-$('nav').height());
	}else if(_hashname=="24h"){
		gScroll($('.area1').offset().top-$('nav').height());
	}else if(_hashname=="reason"){
		gScroll($('.event1').offset().top-$('nav').height());
	}else if(_hashname=="index"){
		gScroll(0);
	}
}