<?php

    function userAgent($ua){
    $iphone = strstr(strtolower($ua), 'mobile'); 
    $android = strstr(strtolower($ua), 'android'); 
    $windowsPhone = strstr(strtolower($ua), 'phone'); 
    function androidTablet($ua){ 
        if(strstr(strtolower($ua), 'android') ){
            if(!strstr(strtolower($ua), 'mobile')){ 
                return true;
            }
        }
    }
    $androidTablet = androidTablet($ua);
    $ipad = strstr(strtolower($ua), 'ipad');
 
    if($androidTablet || $ipad){ 
        return 'tablet';
    }
    elseif($iphone && !$ipad || $android && !$androidTablet || $windowsPhone){ 
        return 'mobile';
    }
    else{ 
        return 'desktop';
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <?php 
        if (userAgent($_SERVER['HTTP_USER_AGENT'])=='tablet') {
    ?>
    <meta name="viewport" content="width=1280">
    <?php 
        }else{
    ?>
    <meta name="viewport" content="width=640">
    <?php 
        }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/global.css?t=2019">
    <script type="text/javascript"> var pageName="index"</script>
    <script type="text/javascript" src="scripts/global.js?t=2019"></script>
    <script type="text/javascript" src="scripts/stage.js?t=2019"></script>
    <script type="text/javascript" src="scripts/confetti.js"></script>
    <link rel="icon" href="http://www.hicee.com.tw/images/16x16.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.hicee.com.tw/images/16x16.png" type="image/x-icon" />
    <meta name="title" content="現在的愛紗愛上更好的自己！日本女生自我保養有一套" />
    <meta name="description" content="日本製武田愛喜活麗皙E-class，1天2包，有效淡化黑斑，隨時好氣色，從內而外散發健康光采！" />
    <meta property="og:title" content="現在的愛紗愛上更好的自己！日本女生自我保養有一套" />
    <meta property="og:description" content="日本製武田愛喜活麗皙E-class，1天2包，有效淡化黑斑，隨時好氣色，從內而外散發健康光采！" />
    <meta property="og:url" content="http://www.hicee.com.tw/eclass" />
    <meta property="og:image" content="http://www.hicee.com.tw/images/share_eclass.jpg" />
    <meta property="og:type" content="website" />
    <title>每日HICEE提升防護力，綻放妳的健康美力!</title>
    <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10118239'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
</head>

<body>
    <div class="loading">
        <div class="loadingBox">
            <img src="images/loading.gif">
            <span class="loadingTxt">0%</span>
        </div>
    </div>
    <div class="lightbox"  style="display: none;">
        <div class="rule">
            <div class="ruleBox">
                <div class="close-button"></div>
                <img class="pcshow" src="images/rule.png">
                <img class="mbshow" src="images/m_rule.png">
            </div>
        </div>
        <div class="wins" style="display: none;">
            <div class="winsBox">
                <div class="close-button blank"></div>
                <img src="images/wins.png">
            </div>
        </div>
    </div>
    <div class="right-btn" style="display: none;"><span></span></div>
    <div class="right-btns">
        <div class="brandpage-btn01"><a href=""></a></div>
        <div class="brandpage-btn02"><a href=""></a></div>
    </div>
    <nav>
        <div class="logo">
            <img src="images/logo.png" class="pc">
            <img src="images/m_logo.png" class="mb">
        </div>
        <div class="logo-main">
            <img src="images/logo_main_pc.png" class="pc">
            <img src="images/logo_main.png" class="mb">
        </div>
    </nav>
    <div id="navBtn" class="close">
        <span></span><span></span><span></span><span></span>
    </div>
    <div id="menuBox" class="close">
        <div><img src="images/logo_menubox.png"></div>
        <ul>
            <li><a href="">首頁</a></li>
            <li><a href="">愛紗的防護力隨身C帶</a></li>
            <li><a href="">愛紗的醫美級雙重防護</a></li>
<!--             <li><a href="">愛紗的美麗應援</a></li>
            <li><a href="">立即擁有自信光采</a></li> -->
            <li><a href="">維他命C真實解碼</a></li>
            <li><a href="">日本防護力保健專家</a></li>
            <li><a href="">常見問題Q&A</a></li>
        </ul>
    </div>
    <div class="falling-leaves"></div>
    <div class="wrap">
        <div class="kv">
            <!-- <div class="leave leave1"><img src="images/leave1.png"></div>
            <div class="leave leave2"><img src="images/leave2.png"></div> -->
            <div class="kvSlide">
                <div>
                    <a href="javascript:void(0)" onclick="
                        sendEvent('首頁banner','click','愛紗美力隨身C帶');setTimeout(function(){location.href='hiceetab';},300);
                    "></a>
                    <img class="pcshow" src="images/b_banner01.jpg">
                    <img class="mbshow" src="images/m_banner05.jpg">
                </div>
                <div>
                    <a href="javascript:void(0)" onclick="
                        sendEvent('首頁banner','click','愛紗從內到外的美麗秘密');setTimeout(function(){location.href='eclass';},300);
                    "></a>
                    <img class="pcshow" src="images/b_banner.jpg">
                    <img class="mbshow" src="images/m_banner04.jpg">
                </div>
                <!-- <div>
                    <img class="pcshow" src="images/banner02.jpg">
                    <img class="mbshow" src="images/m_banner02.jpg">
                </div>
                <div>
                    <img class="pcshow" src="images/banner03.jpg">
                    <img class="mbshow" src="images/m_banner03.jpg">
                </div> -->
            </div>
        </div>
        <div class="video">
            <div class="video-bg">
                <div class="video-box">
                    <div id="youtubePlay"></div>
                </div>
                
                <img class="pcshow" src="images/videobg.png">
                <img class="mbshow" src="images/m_videobg.png">
            </div>
            <div class="video-content">
                <img class="video-content-bg pcshow" src="images/videoCbg.png">
                <img class="video-content-bg mbshow" src="images/m_videoCbg.png">

                <div class="video-txt">
                    <img class="pcshow" src="images/videoCtxt.png">
                    <img class="mbshow" src="images/m_videoCtxt.png">
                </div>
            </div>
        </div>
        <div class="product">
            <div class="leave leave3"><img src="images/leave3.png"></div>
            <div class="leave leave4"><img src="images/leave3.png"></div>
            <div class="ptitle">
                <img class="pcshow" src="images/product_title.png">
                <img class="mbshow" src="images/m_product_title.png">
            </div>
            <div class="productContent">
                <dl> 
                    <dt class="ptitle2"><img src="images/product_title2.png"></dt> 
                    <dd class="center">
                        <div class="pBox p1">
                            <div class="pp"><img src="images/product_1_p.png"></div>
                            <div class="ptip"><!--<img src="images/product_1_tip.png">--></div>
                            <div class="pBox-r">
                                <div class="ptxt">
                                    <img src="images/product_1_txt.png"></div>
                                <div class="pbtn">
                                    <img src="images/product_1_btn.gif"></div>
                            </div>
                            
                        </div>
                        <div class="pBox p2">
                            <div class="pp"><img src="images/product_2_p.png"></div>
                            <div class="ptip"><!--<img src="images/product_2_tip.png">--></div>
                            <div class="pBox-r">
                                <div class="ptxt"><img src="images/product_2_txt.png"></div>
                                <div class="pbtn"><img src="images/product_2_btn.gif"></div>
                            </div>
                        </div>
                    </dd>
                    <dt class="line"></dt>
                    <dt class="ptitle2"><img src="images/product_title3.png"></dt> 
                    <dd>
                        <div class="pBox p3">
                            <div class="pp"><img src="images/product_3_p.png"></div>
                            <div class="ptip"><img src="images/product_3_tip.png"></div>
                            <div class="pBox-r">
                                <div class="ptxt">
                                    <img src="images/product_3_txt.png"></div>
                                <div class="pbtn">
                                    <img src="images/product_3_btn.gif"></div>
                            </div>
                            <div class="pro-tiptxt">
                            衛部藥輸字第026134號  北市衛藥廣字第108090066號<br>
            本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語與注意事項
                            </div>
                        </div>

                    </dd> 
                    
                </dl>
            </div>
        </div>
        <div class="event">
            <div class="leave leave5"><img src="images/leave1.png"></div>
            <div class="leave leave6"><img src="images/leave3.png"></div>
            <div class="leave leave7"><img src="images/leave4.png"></div>
            <div class="ptitle">
                <img class="pcshow" src="images/event_title.png">
                <img class="mbshow" src="images/m_event_title.png">
            </div>

            <div class="eventContent">
                <img class="eventbg pcshow" src="images/event_bg.png">
                <img class="eventbg mbshow" src="images/m_event_bg.png">
                <img class="eventbg mbshow" src="images/m_event_bg.png">
                <img class="eventbg mbshow" src="images/m_event_bg.png">
                <ul>
                    <li class="poker">
                        <div class="flippoker">
                            <div class="poker_front front">
                                <img src="images/event_q_1.png">
                            </div>
                            <div class="poker_back back">
                                <img src="images/event_a_1.png">
                            </div>
                        </div>
                    </li>
                    <li class="poker">
                        <img class="people1" src="images/event_people1.png">
                        <div class="flippoker">
                             <div class="poker_front front">
                                <img src="images/event_q_2.png">
                            </div>
                            <div class="poker_back back">
                                <img src="images/event_a_2.png">
                            </div>
                        </div>
                    </li>
                    <li class="poker">
                        <img class="people2" src="images/event_people2.png">
                        <div class="flippoker">
                             <div class="poker_front front">
                                <img src="images/event_q_3.png">
                            </div>
                            <div class="poker_back back">
                                <img src="images/event_a_3.png">
                            </div>
                        </div>
                    </li>
                    <li class="poker">
                        <img class="people3" src="images/event_people3.png">
                        <div class="flippoker">
                            <div class="poker_front front">
                                <img src="images/event_q_4.png">
                            </div>
                            <div class="poker_back back">
                                <img src="images/event_a_4.png">
                            </div>
                        </div>
                    </li>
                    <li class="poker">
                        <img class="people4" src="images/event_people4.png">
                        <div class="flippoker">
                             <div class="poker_front front">
                                <img src="images/event_q_5.png">
                            </div>
                            <div class="poker_back back">
                                <img src="images/event_a_5.png">
                            </div>
                        </div>
                    </li>
                    <li class="poker">
                        <div class="flippoker">
                             <div class="poker_front front">
                                <img src="images/event_q_6.png">
                            </div>
                            <div class="poker_back back">
                                <img src="images/event_a_6.png">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="line"></div>
        </div>

        <div class="album">
            <div class="ptitle">
                <img class="pcshow" src="images/album_title.png">
                <img class="mbshow" src="images/m_album_title.png">
            </div>
            <div class="area">
                <div class="leave leave8"><img src="images/leave3.png"></div>
                <div class="leave leave9"><img src="images/leave3.png"></div>
                <div class="area-l">
                    <div class="pic pic1"><img src="images/album_pic1_1.png"></div>
                    <div class="pic pic2"><img src="images/album_pic1_2.png"></div>
                    <div class="pic pic3"><img src="images/album_pic1_3.png"></div>
                </div>
                <div class="area-r">
                    <img class="area-txt1 pcshow" src="images/album_txt1.png">
                    <img class="area-txt1 mbshow" src="images/m_album_txt1.png">
                </div>
            </div>
            <div class="area">
                <div class="leave leave10"><img src="images/leave3.png"></div>
                <div class="leave leave11"><img src="images/leave3.png"></div>
                <div class="area-r area-s">
                    <img class="area-txt2 pcshow" src="images/album_txt2.png">
                    <img class="area-txt2 mbshow" src="images/m_album_txt2.png">
                </div>
                <div class="area-l">
                    <div class="pic pic1"><img src="images/album_pic2_1.png"></div>
                    <div class="pic pic3"><img src="images/album_pic2_2.png"></div>
                    <div class="pic pic2"><img src="images/album_pic2_3.png"></div>
                </div>
                
            </div>
            <div class="area">
                <div class="area-l">
                    <div class="pic pic1"><img src="images/album_pic3_1.png"></div>
                </div>
                <div class="area-r">
                    <img class="area-txt3 pcshow" src="images/album_txt3.png">
                    <img class="area-txt3 mbshow" src="images/m_album_txt3.png">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="leave leave12"><img src="images/leave5.png"></div>
        <div class="leave leave13"><img src="images/leave6.png"></div>
        <div class="footer">
            <div class="logo"><img src="images/logo_main.png"></div>
            <div class="footer-line"></div>
            <p>本網站係台灣武田藥品工業股份有限公司所擁有，其內容之著作權亦屬於台灣武田藥品工業股份有限公司，非經同意不得轉載。
                <br> Copyright © Takeda Pharmaceutical Taiwan.Ltd. 2018 台灣武田藥品工業股份有限公司版權所有
                <br>C-APROM/TW/AAS/0006 July 2021</p>
        </div>
    </footer>
</body>

</html>