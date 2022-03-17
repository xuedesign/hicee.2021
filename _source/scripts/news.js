var dateFormat=function(){var t=/d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g,e=/\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,a=/[^-+\dA-Z]/g,m=function(t,e){for(t=String(t),e=e||2;t.length<e;)t="0"+t;return t};return function(d,n,r){var y=dateFormat;if(1!=arguments.length||"[object String]"!=Object.prototype.toString.call(d)||/\d/.test(d)||(n=d,d=void 0),d=d?new Date(d):new Date,isNaN(d))throw SyntaxError("invalid date");"UTC:"==(n=String(y.masks[n]||n||y.masks.default)).slice(0,4)&&(n=n.slice(4),r=!0);var s=r?"getUTC":"get",i=d[s+"Date"](),o=d[s+"Day"](),u=d[s+"Month"](),M=d[s+"FullYear"](),l=d[s+"Hours"](),T=d[s+"Minutes"](),h=d[s+"Seconds"](),c=d[s+"Milliseconds"](),g=r?0:d.getTimezoneOffset(),S={d:i,dd:m(i),ddd:y.i18n.dayNames[o],dddd:y.i18n.dayNames[o+7],m:u+1,mm:m(u+1),mmm:y.i18n.monthNames[u],mmmm:y.i18n.monthNames[u+12],yy:String(M).slice(2),yyyy:M,h:l%12||12,hh:m(l%12||12),H:l,HH:m(l),M:T,MM:m(T),s:h,ss:m(h),l:m(c,3),L:m(c>99?Math.round(c/10):c),t:l<12?"a":"p",tt:l<12?"am":"pm",T:l<12?"A":"P",TT:l<12?"AM":"PM",Z:r?"UTC":(String(d).match(e)||[""]).pop().replace(a,""),o:(g>0?"-":"+")+m(100*Math.floor(Math.abs(g)/60)+Math.abs(g)%60,4),S:["th","st","nd","rd"][i%10>3?0:(i%100-i%10!=10)*i%10]};return n.replace(t,function(t){return t in S?S[t]:t.slice(1,t.length-1)})}}();dateFormat.masks={default:"ddd mmm dd yyyy HH:MM:ss",shortDate:"m/d/yy",mediumDate:"mmm d, yyyy",longDate:"mmmm d, yyyy",fullDate:"dddd, mmmm d, yyyy",shortTime:"h:MM TT",mediumTime:"h:MM:ss TT",longTime:"h:MM:ss TT Z",isoDate:"yyyy-mm-dd",isoTime:"HH:MM:ss",isoDateTime:"yyyy-mm-dd'T'HH:MM:ss",isoUtcDateTime:"UTC:yyyy-mm-dd'T'HH:MM:ss'Z'"},dateFormat.i18n={dayNames:["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],monthNames:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec","January","February","March","April","May","June","July","August","September","October","November","December"]},Date.prototype.format=function(t,e){return dateFormat(this,t,e)};
$(function() {
	var _main=$('.newsContent > ul');
	var _titleBtn=$('.newsContent > ul > li > dl > dd >.title');
	_main.on('click','> li > dl > dd >.title',function(){
		var target=$(this).parents('dl');
		if($(target).hasClass('current')){
			$(target).removeClass('current');
			$(this).next().slideToggle( "slow" );
		}else{
			$('.newsContent > ul > li > dl > dd >.title').each(function(){
				var target=$(this).parents('dl');
				if($(target).hasClass('current')){
					$(target).removeClass('current');
					$(this).next().slideToggle( "slow" );
				}
			})
			$(target).addClass('current');
			$(this).next().slideToggle( "slow" );
		}
		
	})
	$('.prevBtn').click(function(){changPage(newsPage-1);})
	$('.nextBtn').click(function(){changPage(newsPage+1);})
	$('.pageList ul').on('click','li',function(){
		changPage($(this).index());
	})
	var newsPage=0;
	var newsTotalPage=0;
	newsListGet(newsPage);
	function changPage(nextp){
		if(nextp<=-1)return;
		if(nextp>=newsTotalPage)return;
		newsPage=nextp;
		newsListGet();
	}
	function newsListGet(){
		$.ajax({
            url: "api/ActivityListGet.ashx",
            type: "POST",
            dataType: "json",
            data: {page:newsPage+1,page_size:5},
            error: function (e) { 
            	//var r={"activitys":[{"content":"&amp;lt;p&amp;gt;&#36890;&#36335;&#27963;&#21205;&#36890;&#36335;&#27963;&#21205;&#36890;&#36335;&#27963;&#21205;&#36890;&#36335;&#27963;&#21205;&amp;lt;\/p&amp;gt;&#13;&#10;&#13;&#10;&amp;lt;p&amp;gt;&#36890;&#36335;&#27963;&#21205;&#36890;&#36335;&#27963;&#21205;&amp;lt;\/p&amp;gt;","end_date":"2018\/09\/25","img":"\/files\/activity\/357c182b25f145d8b32b6374da8e8013.jpg","kind":"2","start_date":"2018\/08\/13","title":"測試測試測試測試"},{"content":"&amp;lt;p&amp;gt;&#28204;&#35430;&#28204;&amp;lt;span style=&quot;font-size:22px&quot;&amp;gt;&#28204;&#28204;&#28204;&#28204;&amp;lt;img alt=&quot;&quot; src=&quot;\/files\/userfiles\/images\/20180804113657_s.jpg&quot; style=&quot;height:451px; width:640px&quot; \/&amp;gt;&amp;lt;\/span&amp;gt;&#28204;&#28204;&#28204;&#28204;&#28204;&amp;lt;\/p&amp;gt;&#13;&#10;&#13;&#10;&amp;lt;p&amp;gt;&amp;amp;nbsp;&amp;lt;\/p&amp;gt;&#13;&#10;&#13;&#10;&amp;lt;p&amp;gt;&#28204;&#28204;&#28204;&#28204;&#28204;&#28204;&#28204;&#35430;&amp;lt;\/p&amp;gt;","end_date":"2018\/08\/31","img":"\/files\/activity\/c22897215715461d995c8b2517e332c3.jpg","kind":"1","start_date":"2018\/08\/13","title":"test"},{"content":"&amp;lt;p style=&quot;margin-left:0in; text-align:left&quot;&amp;gt;&amp;lt;br \/&amp;gt;&#13;&#10;&amp;lt;span style=&quot;font-size:16.0pt&quot;&amp;gt;&amp;lt;span style=&quot;font-family:&#24494;&#36575;&#27491;&#40657;&#39636;&quot;&amp;gt;&amp;lt;span style=&quot;color:black&quot;&amp;gt;&#24819;&#35201;&#35731;&#24037;&#20316;&#26356;&#26377;&#21205;&#21147;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;span style=&quot;font-size:14.0pt&quot;&amp;gt;&amp;lt;span style=&quot;font-family:&#24494;&#36575;&#27491;&#40657;&#39636;&quot;&amp;gt;&amp;lt;span style=&quot;color:black&quot;&amp;gt;&#65292;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;span style=&quot;font-size:14.0pt&quot;&amp;gt;&amp;lt;span style=&quot;font-family:&#24494;&#36575;&#27491;&#40657;&#39636;&quot;&amp;gt;&amp;lt;span style=&quot;color:black&quot;&amp;gt;&#38500;&#20102;&#24179;&#26085;&#30340;&#20445;&#39178;&#65292;&#36996;&#35201;&#21152;&#19978;&#21475;&#26381;&#35036;&#20805;&#38617;&#31649;&#40778;&#19979;&#65292;&amp;lt;br \/&amp;gt;&#13;&#10;&#20320;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;span style=&quot;font-size:14.0pt&quot;&amp;gt;&amp;lt;span style=&quot;font-family:&#24494;&#36575;&#27491;&#40657;&#39636;&quot;&amp;gt;&amp;lt;span style=&quot;color:black&quot;&amp;gt;&#25165;&#33021;&#27627;&#28961;&#24460;&#39015;&#20043;&#24962;&#30340;&#25237;&#20837;&#24037;&#20316;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&amp;lt;\/p&amp;gt;","end_date":"2018\/08\/31","img":"\/files\/activity\/bd67f87a53de45b6be8041f2d7ddba32.jpg","kind":"1","start_date":"2018\/08\/07","title":"每日HICEE提升防護力，綻放"},{"content":"&amp;lt;p&amp;gt;&#28204;&amp;lt;span style=&quot;font-size:36px&quot;&amp;gt;&amp;lt;span style=&quot;font-family:&#24494;&#36575;&#27491;&#40657;&#39636;&quot;&amp;gt;&#35430;&amp;lt;\/span&amp;gt;&amp;lt;\/span&amp;gt;&#28204;&amp;lt;\/p&amp;gt;&#13;&#10;&#13;&#10;&amp;lt;p&amp;gt;&#35430;&amp;lt;\/p&amp;gt;&#13;&#10;&#13;&#10;&amp;lt;p&amp;gt;&#35430;&amp;lt;\/p&amp;gt;&#13;&#10;&#13;&#10;&amp;lt;p&amp;gt;&#35430;&amp;lt;\/p&amp;gt;&#13;&#10;&#13;&#10;&amp;lt;p&amp;gt;&#35430;&amp;lt;\/p&amp;gt;","end_date":"2018\/08\/31","img":"\/files\/activity\/af5c34340464408c8ac9d32726526fa2.jpg","kind":"1","start_date":"2018\/08\/06","title":"測試測試測試測試測試測試"}],"current_page":1,"message":"","result":true,"total_count":4,"total_page":2}
                //newsTotalPage=r.total_page;
                //newsPageSet(r.current_page,r.total_page,r.total_count);
                //newsListSet(r.activitys);
                 return false;},
            success: function (r) {
                if (!r.result) {
                	alert(r.message);
                } else {    
                	newsTotalPage=r.total_page;
                	newsPageSet(r.current_page,r.total_page,r.total_count);
                	newsListSet(r.activitys);
                }
            }
        });
	}
	function newsPageSet(newp,totalp,countp){
		$('.pageList ul').empty();
		for(var i=0;i<totalp;i++){
			var dot=$("<li>").html(""+(i+1)).appendTo($('.pageList ul'));
		}
		if(totalp==1){
			$('.prevBtn,.nextBtn').hide();
		}
		
	}
	function newsListSet(arr){
		$('.newsContent>ul').empty();
		for(var i=0;i<arr.length;i++){
			var newsList=$("<li>").html("<dl><dt></dt><dd><div class=\"title\"><span class=\"date\"></span><p></p></div><div class=\"content\"></div></dd></dl>").appendTo($('.newsContent>ul'));
			$(newsList).find('>dl>dt').addClass((arr[i].kind==2)?"type1":"type2");
			$(newsList).find('>dl>dd>.title>.date').html(dateFormat(new Date(arr[i].start_date), "yyyy.m.dd"));
			$(newsList).find('>dl>dd>.title>p').html(arr[i].title);
			var _content=decodeEntities(arr[i].content);
			$(newsList).find('>dl>dd>.content').append($.parseHTML(_content)[0].data);
		}
		
	}
})

function decodeEntities(encodedString) {
    var div = document.createElement('div');
    div.innerHTML = encodedString;
    return div.textContent;
}