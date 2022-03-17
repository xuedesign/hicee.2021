(function(n,t){var u={isAutoTop:!1,isAutoLeft:!1,isAutoRight:!1,isAutoBottom:!1,scaleTop:1,scaleLeft:1,scaleRight:1,scaleBottom:1,isAutoMarginTop:!1,isAutoMarginLeft:!1,scaleMarginTop:1,scaleMarginLeft:1,isAutoWidth:!1,isAutoHeight:!1,scaleWidth:1,scaleHeight:1,minWidth:1100,minHeight:600,maxWidth:1700,maxHeight:900,scale:1,mode:"default"},i=function(n,t){return parseInt(n,10)||t||0},r=function(i,r){var u=this,f=n(t);u.$self=n(i);n.extend(u,r);u.elementInit();f.on("resize",function(){u.update()}).trigger("resize")};r.prototype.elementInit=function(){var t=this,n=t.$self,r=n.data();r.isInit||n.data({isInit:!0,width:n.width(),height:n.height(),top:i(n.css("top")),left:i(n.css("left")),right:i(n.css("right")),bottom:i(n.css("bottom")),marginTop:i(n.css("margin-top")),marginLeft:i(n.css("margin-left")),marginRight:i(n.css("margin-right")),marginBottom:i(n.css("margin-bottom"))})};r.prototype.getScale=function(){var i=this,o=n(t),r=o.width(),u=o.height();r<i.minWidth?r=i.minWidth:r>i.maxWidth&&(r=i.maxWidth);u<i.minHeight?u=i.minHeight:u>i.maxHeight&&(u=i.maxHeight);var s=r,h=u,f=s/i.minWidth,e=h/i.minHeight;return i.mode==="width"?f:i.mode==="height"?e:f>e?e:f};r.prototype.update=function(){var n=this,i=n.$self,r=n.$self.data(),t=n.getScale(),u,f,e,o,s,h,c,l,a,v,y,p,w,b,k,d;t=(t-1)*n.scale+1;n.isAutoTop&&(u=(t-1)*n.scaleTop+1,f=r.top*u,i.css({top:f}));n.isAutoLeft&&(e=(t-1)*n.scaleLeft+1,o=r.left*e,i.css({left:o}));n.isAutoRight&&(s=(t-1)*n.scaleRight+1,h=r.right*s,i.css({right:h}));n.isAutoBottom&&(c=(t-1)*n.scaleBottom+1,l=r.bottom*c,i.css({bottom:l}));n.isAutoMarginTop&&(a=(t-1)*n.scaleMarginTop+1,v=r.marginTop*a,i.css({marginTop:v}));n.isAutoMarginLeft&&(y=(t-1)*n.scaleMarginLeft+1,p=r.marginLeft*y,i.css({marginLeft:p}));n.isAutoWidth&&(w=(t-1)*n.scaleWidth+1,b=r.width*w,i.css({width:b}));n.isAutoHeight&&(k=(t-1)*n.scaleHeight+1,d=r.height*k,i.css({height:d}))};n.fn.elementResize=function(t){return this.each(function(){new r(this,n.extend({},u,t))})}})(jQuery,window),function(n){n.fn.elementResizeWarp=function(t){var i=function(n,t){return parseInt(n,10)||t||0};return this.each(function(){var r=n(this),u=n("<div/>"),f=r.data();f.isInit||(u.css({position:"absolute",top:"50%",left:"50%",width:r.css("width"),height:r.css("height"),"margin-left":r.css("margin-left"),"margin-top":r.css("margin-top")}),r.css({position:"relative",left:"auto","margin-left":"auto","margin-top":-(i(r.css("height"))/2),"margin-right":"auto"}),r.data({isInit:!0}),r.wrap(u),r.parent().elementResize(t))})}}(jQuery,window);

var nowpage="";
$(function(){
	var stage={};

// gtag('event','click',{'event_category':'eclass_KOL','event_label':'KOL文章'});

	stage.init=function(){
		$('.loading').fadeOut();
		$('.btn-kv').click(function(){
			sendEvent('eclass_banner','click','愛紗從內到外的美麗秘密');
			gScroll($('.info').offset().top-$('nav').height());
			return false;
		})
		$('.fixed-btn .btn').click(function(){
			sendEvent('浮動選單','click','愛紗的美麗應援');
			location.href="hiceee.html";
			return false;
		})
		$('.fixed-btn .btn2').click(function(){
			sendEvent('浮動選單','click','立即擁有自信光采');
			//gScroll($('.product-content').offset().top-$('nav').height());
			location.href="hiceee.html";
			return false;
		})
		$('.icon-fb,.btn-share').click(function(){
			sendEvent('Button','click','fb share');
			f();
			return false;
		})
		$('.product-msg a:eq(0)').click(function(){
			sendEvent('銷售通路','click','屈臣氏');
			window.open("https://www.watsons.com.tw/store-finder");
			return false;
		})
		$('.product-msg a:eq(1)').click(function(){ //康是美
			sendEvent('銷售通路','click','康是美');
			 window.dotq = window.dotq || [];
			 window.dotq.push(
			 {
			   'projectId': '10000',
			   'properties': {
			     'pixelId': '10073066',
			     'qstrings': {
			       'et': 'custom',
			       'ea': 'hicee_submit'
			     }
			 } } ); 
			 window.open("https://www.cosmed.com.tw/Contact/Shop.aspx");
			 return false;
		})
		kvTL.play();
		$(window).scroll(function(){
			var _scroll=$(this).scrollTop() + 1;
			stage.scroll(_scroll);
		});
		stage.scroll($(window).scrollTop() + 1);
		if (!Root.mobile) {
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
			if(navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/) && screen.height >=812 && Root.device=="iPhone"){
				$('.kv').css('height',window.innerHeight-70);
				$('.kv .main').css('height',window.innerHeight-135);
				$('.kv .main .title').css('margin-top','5vh');
				$('.kv .kv-pro').css('margin-top','9vh');
				$('.kv .person').css('bottom','-70px');
				$('.kv .slogan').css('top','30%');
			}else{
				window.onresize = function(){
					stageResizeMobile();
				}
				stageResizeMobile();
			}
		}
	}
	stage.start=function(){
		if (!Root.mobile) {
			$(window).bind("mousemove", function (event) {
		        var tempX = 0;

		        if (Root.system==Root.MICROSOFT) {
		            tempX = event.clientX + document.body.scrollLeft;
		            //tempY = event.clientY + document.body.scrollTop;
		        } else {
		            tempX = event.pageX;
		            //tempY = event.pageY;
		        }
		        stage.mX = tempX;
		        //stage.mY = tempY;
		        stage.move(tempX);
		    });

		    $(window).resize(stage.resize);
		    
		    $('.kv').bind("mouseout",function(){
		    	TweenMax.to($('.kv'),0.5,{ backgroundPosition:"50% 50%"});
	    		TweenMax.to($('.kv .title,.kv .kv-pro,.kv .btn-kv'),0.5,{x:0 });
	    		TweenMax.to($('.person'),0.5,{x:0 });
		    })
		}
	}
	stage.move = function (pX) {
		if(nowpage!="kv") return;
	    var cX = $(window).width() / 2;
	    var mX=cX-pX;
	    TweenMax.to($('.kv'),0.3,{ backgroundPosition:(50-(-mX / $(window).width() * 100) / 40)+"% 50%"});
	    TweenMax.to($('.kv .title,.kv .kv-pro,.kv .btn-kv'),0.4,{x:(mX / $(window).width() * 70) });
	    TweenMax.to($('.person'),0.3,{x:(mX / $(window).width() * 80) });
	    TweenMax.to($('.grass.left img'),0.2,{x:(mX / $(window).width() * 15) });
	    TweenMax.to($('.grass.right img'),0.2,{x:(mX / $(window).width() * 15) });
	}
	function stageResize(){
		zoomNumber=(6000/7000/3*(4200))/2;
		if($(window).width()<1366){
			TweenMax.to($('.kv .main'),.6,{scale:1/((1080/$(window).height()*.8)),marginLeft:50*$(window).width()/1080,transformOrigin: "50% 50%"})
		}else if($(window).width()<1900){
			TweenMax.to($('.slogan'),.6,{right:10*($(window).width()/1920)*.9+"vw"})
			TweenMax.to($('.kv .main'),.6,{scale:1/((1080/$(window).height()*.8)),marginLeft:0,transformOrigin: "50% 50%"})
			TweenMax.to($('.kv .btn-kv'),.6,{scale:1+(1-1/((1080/$(window).height()*.8))),transformOrigin: "50% 50%"})

		}else{
			TweenMax.to($('.kv .main'),.6,{scale:1,transformOrigin: "50% 50%"})
			TweenMax.to($('.kv .btn-kv'),.6,{scale:1})

		}


		if($(window).height()<800){
			TweenMax.to($('.person'),.6,{scale:1/((1080/$(window).height())*.9),bottom:-300*((1080/$(window).height()*.7)),transformOrigin: "0% 50%"})
		}else{
			TweenMax.to($('.person'),.6,{scale:1/((1080/$(window).height()*.87)),bottom:-300*((1080/$(window).height()*.87)),transformOrigin: "0% 50%"})
		}

	}
	function stageResizeTable(){
		zoomNumber=(6000/7000/3*(4200))/2;
		if(Root.mobile && $(window).width()<$(window).height()){
			$('.portrait').show();
		}else{
			$('.portrait').hide();
		}

		TweenMax.to($('.slogan'),.6,{right:5*($(window).width()/1920)*.9+"vw"})
		TweenMax.to($('.kv .main'),.6,{scale:1/((1080/$(window).height()*.8)),transformOrigin: "50% 50%"})
		TweenMax.to($('.kv .btn-kv'),.6,{scale:1+(1-1/((1080/$(window).height()*.8))),transformOrigin: "50% 50%"})

		if($(window).height()<800){
			TweenMax.to($('.person'),.6,{left:'50%',scale:1/((1080/$(window).height())*.9),bottom:-300*((1080/$(window).height()*.7)),transformOrigin: "0% 50%"})
		}else{
			TweenMax.to($('.person'),.6,{left:'50%',scale:1/((1080/$(window).height()*.87)),bottom:-300*((1080/$(window).height()*.87)),transformOrigin: "0% 50%"})
		}

	}
	function stageResizeMobile(){
		zoomNumber=(6000/7000/3*(4200))/2;
		$('.kv').height($(window).height()-70);
		if(Root.mobile && $(window).width()>$(window).height()){
			$('.landscape').show();
		}else{
			$('.landscape').hide();
		}
		// TweenMax.to($('.slogan'),.6,{right:5*($(window).width()/1920)*.9+"vw"})
		// TweenMax.to($('.kv .main'),.6,{scale:1/((1080/$(window).height()*.8)),transformOrigin: "50% 50%"})
		// TweenMax.to($('.kv .btn-kv'),.6,{scale:1+(1-1/((1080/$(window).height()*.8))),transformOrigin: "50% 50%"})
		
		if($(window).height()<900){
			TweenMax.set($('.kv .kv-pro'),{marginTop: "0vh"});
			TweenMax.set($('.person'),{bottom: "-18vh"});
			//TweenMax.to($('.person'),.6,{left:'50%',scale:1/((1080/$(window).height())*.9),bottom:-300*((1080/$(window).height()*.7)),transformOrigin: "0% 50%"})
		}else if($(window).height()<950){
			TweenMax.set($('.kv .kv-pro'),{marginTop: "0vh"});
			TweenMax.set($('.person'),{bottom: "-18vh"});
			TweenMax.set($('.signature'),{bottom: 350});
			TweenMax.set($('.btn-kv'),{bottom: 0});
			//TweenMax.to($('.person'),.6,{left:'50%',scale:1/((1080/$(window).height())*.9),bottom:-300*((1080/$(window).height()*.7)),transformOrigin: "0% 50%"})
		}else{
			TweenMax.set($('.kv .kv-pro'),{marginTop: ""});
			TweenMax.set($('.person'),{bottom: ""});
			TweenMax.set($('.signature'),{bottom: ""});
			TweenMax.set($('.btn-kv'),{bottom: ""});
			//TweenMax.to($('.person'),.6,{left:'50%',scale:1/((1080/$(window).height()*.87)),bottom:-300*((1080/$(window).height()*.87)),transformOrigin: "0% 50%"})
		}

	}

	kvTLbool=false;
	//TweenMax.set($('.kv .person'),{x:200,y:-50,opacity:0});
	var kvTL=new TimelineMax({onComplete:function(){
		if(kvTLbool)return;
    	kvTLbool=true;
    	stage.start();
    }}).pause();
	//kvTL.to($('.kv .person'), 1.2,{opacity:1, bezier:{type:"soft", values:[{x:200, y:-50}, {x:50, y:50}, {x:0, y:0}]}})
	kvTL.from($('.kv .person img'), 1.2,{opacity:1, scale:1.1,transformOrigin: "50% 50%"})
	//.from($('.kv .light'),.6,{opacity:0, ease: Power1.easeOut},"-=1.2")	
	.from($('.kv .slogan'),.6,{opacity:0,y:-50, ease: Power1.easeOut},"-=.6")	
	.from($('.kv .title'),.6,{opacity:0,y:50, ease: Power1.easeOut},"-=.8")
	.from($('.kv .kv-pro div'),.6,{opacity:0,y:50, ease: Power1.easeOut},"-=.8")
	.from($('.kv .btn-kv'),.6,{opacity:0,y:50, ease: Power1.easeOut},"-=.8")
	//.from($('.kv .signature'),.6,{opacity:0,y:20, ease: Power1.easeOut},"-=.6")	
	//.from($('.kv .title .tip img'),1,{scale:0, ease:  Elastic.easeOut.config(1, 0.3)},"-=.6")	
	//.from($('.kv .kv-pro div').eq(0),.6,{opacity:0,x:-20, ease: Power1.easeOut},"-=.6")
	//.from($('.kv .kv-pro div').eq(1),.6,{opacity:0,x:-20, ease: Power1.easeOut},"-=.4")
	//.from($('.kv .btn-kv'),.6,{opacity:0,y:-20, ease: Power1.easeOut},"-=.3")

	// var bloggerTL=new TimelineMax().pause();
	// bloggerTL.from($('.blogger-main'),.6,{opacity:0,y:50, ease: Power1.easeOut})

	var productTL=new TimelineMax().pause();
	productTL.from($('.product-main'),.6,{opacity:0,y:50, ease: Power1.easeOut})
	.from($('.set3'),.8,{scale:0,marginLeft:0,marginTop:-300, ease: Power1.easeOut})
	.from($('.set4'),.8,{scale:0,marginLeft:0,marginTop:-300, ease: Power1.easeOut},"-=.8")
	.from($('.set5'),.9,{scale:0,marginLeft:0,marginTop:-300, ease: Power1.easeOut},"-=.8")
	.from($('.set2'),1.2,{scale:0,marginLeft:0,marginTop:-300, ease: Power1.easeOut},"-=1.2")
	.from($('.set6'),1.2,{scale:0,marginLeft:0,marginTop:-300, ease: Power1.easeOut},"-=1.2")
	.from($('.set7'),1.6,{scale:0,marginLeft:0,marginTop:-300, ease: Power1.easeOut},"-=1.2")
	.from($('.set1'),1.6,{scale:0,marginLeft:0,marginTop:-300, ease: Power1.easeOut},"-=1.6")
	//.from($('.product-title'),.6,{opacity:0,y:50, ease: Power1.easeOut},"-=.6")
	.from($('.product-msg'),.6,{opacity:0,y:50, ease: Power1.easeOut},"-=1")

	var productTLbool=false;
	stage.scroll=function(_scroll){
		// if(_scroll<=$('.product-content').offset().top-$(window).height()/3*2){
  //           productTL.reverse();
		// }
		// if(_scroll>=$('.product-content').offset().top){
		// //if(_scroll>=$('.blogger').offset().top){
  //           $('.info article').removeClass('overLay');
		// }else if(_scroll>=$('.info article').eq(0).offset().top-$(window).height()/3*2){          
		// }else{
		// 	$('.info article').removeClass('overLay');
		// }

		if(_scroll>=$('.info article').eq(0).offset().top-$(window).height()/3*2){
			$('.fixed-btn').addClass('show');
		}else{
			$('.fixed-btn').removeClass('show');
		}


		// if(_scroll>=$('.product-content').offset().top-$(window).height()/3*2){
  //           if(nowpage=="product")return;
  //           nowpage="product";
  //           productTL.play();     
  //           if(pTrackBool)return;
  //           pTrackBool=true;
  //          	sendPage("eclass-"+nowpage,"/eclass-"+nowpage); 

		// }else 
		// if(_scroll>=$('.blogger').offset().top-$(window).height()/3*2){
  //           if(nowpage=="blogger")return;
  //           nowpage="blogger";
  //           bloggerTL.play();   
  //           if(bTrackBool)return;
  //           bTrackBool=true;
  //           sendPage("eclass-"+nowpage,"/eclass-"+nowpage);       
		// }
		if(_scroll>=$('.info article').eq(1).offset().top-$(window).height()/3*2){
			if(!$('.info article').eq(1).hasClass('overLay')){
				$('.info article').eq(1).addClass('overLay')
			}
            if(nowpage=="article2")return;
            nowpage="article2";
            if(aTrackBool2)return;
            aTrackBool2=true;
            sendPage("eclass-"+nowpage,"/eclass-"+nowpage);
		}else if(_scroll>=$('.info article').eq(0).offset().top-$(window).height()/3*2){
			if(!$('.info article').eq(0).hasClass('overLay')){
				$('.info article').eq(0).addClass('overLay')
			}
            if(nowpage=="article1")return;
            nowpage="article1";   
            if(aTrackBool)return;
            aTrackBool=true;
            sendPage("eclass-"+nowpage,"/eclass-"+nowpage);      
		}else{
			if(nowpage=="kv")return;
			kvTL.play();
            nowpage="kv";
            //sendPage("eclass-index","/index");   

		}

	}
	var aTrackBool=aTrackBool2=pTrackBool=bTrackBool=false;
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
            }, 2000); 
        };
        imgloader.startLoad();
    }
	stage.load();


})

function goHash(_hashname){
	if(_hashname=="product"){
		gScroll($('.product-content').offset().top-$('nav').height());
	}
}