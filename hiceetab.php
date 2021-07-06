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
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/hiceec.css">
    <script type="text/javascript">
    var pageName = "hiceetab"
    </script>
    <script type="text/javascript" src="scripts/global.js"></script>
    <!-- <script type="text/javascript" src="scripts/stage.js?t=1017"></script> -->
    <script type="text/javascript" src="scripts/hiceec.js?t=1217"></script>
    <!-- <script type="text/javascript" src="scripts/confetti.js"></script> -->
    <meta name="title" content="冬季保養，愛紗首重防護力！" />
    <meta name="description" content="日日愛喜，愛紗隨身C帶的美力小物—愛喜C口嚼錠！隨時不忘補充防護力，酸甜滋味，一錠美力！" />
    <meta property="og:title" content="冬季保養，愛紗首重防護力！" />
    <meta property="og:description" content="日日愛喜，愛紗隨身C帶的美力小物—愛喜C口嚼錠！隨時不忘補充防護力，酸甜滋味，一錠美力！" />
    <meta property="og:url" content="http://www.hicee.com.tw/hiceetab" />
    <meta property="og:image" content="http://www.hicee.com.tw/images/share_hiceec.jpg" />
    <meta property="og:type" content="website" />
    <meta property="keywords" content="台灣武田, 愛喜C, 隨身C帶, 愛紗,冬日必備, 隨時一錠, 補充美力, 補充防護力, 隨時隨地, 輕鬆給力" />
    <link rel="icon" href="http://www.hicee.com.tw/images/16x16.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.hicee.com.tw/images/16x16.png" type="image/x-icon" />

    <title>冬季保養，愛紗首重防護力！</title>
    <meta content='hiceec' name='author'>

    <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10073066'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W4S8CKV');</script>
    <!-- End Google Tag Manager -->

    <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10118239'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4S8CKV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div class="portrait" style="display: none;">
        <div><img src="images/eclass/phone.png"></div>
    </div>
    <div class="landscape" style="display: none;">
        <div><img src="images/eclass/phone02.png"></div>
    </div>
    <div class="loading">
        <div class="loadingBox">
            <img src="images/loading.gif">
            <span class="loadingTxt">0%</span>
        </div>
    </div>
    <nav>
        <div class="logo">
            <img src="images/hiceec/logo.png">
            <!-- <img src="images/hiceec/logo.png" class="mb"> -->
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
    <!-- <div class="falling-leaves"></div> -->
    <div class="fixed-btn">
        <div class="btn"><a href="#promotion"></a></div>
        <div class="btn2"><a href="#24h"></a></div>
    </div>
    <div class="wrap">
        <section class="kv">
            <div class="kv-petal1"></div>
            <div class="kv-petal2"></div>

            <div class="slogan">
                <img src="images/hiceec/kv_slogan.png" class="pc">
                <img src="images/hiceec/m_kv_slogan.png" class="mb">
            </div>
            <div class="signature">
                <img src="images/hiceec/kv_signature.png" class="pc">
                <img src="images/hiceec/m_kv_signature.png" class="mb">
            </div>
            <div class="icon-fb"></div>

            <div class="person">
                <img src="images/hiceec/kv_sperson.png" class="pc">
                <img src="images/hiceec/m_kv_sperson.png" class="mb">
                <!-- <div class="person-tip mb">
                    <img src="images/hiceec/m_kv_say.png">
                </div> -->
            </div>
            <div class="main">
                <div class="title">
                    <img src="images/hiceec/kv_title.png" class="pc">
                    <img src="images/hiceec/m_kv_title.png" class="mb">
                </div>
                <div class="kv-btns">
                    <div class="btn-kv btn-kv-1">
                        <a href="#promotion"></a>
                        <div class="kv-btn-pro"></div>
                    </div>
                    <div class="btn-kv btn-kv-2">
                        <a href="#24h"></a>
                        <div class="kv-btn-pro"></div>
                    </div>
                </div>
                
            </div>
            <div class="kv-petal3"></div>
            
        </section>
        <section class="event1">
            <div class="event1-con">

                <img src="images/hiceec/event1_sp.png" class="pc">
                <img src="images/hiceec/m_event1_sp.png" class="mb">
                <div class="event1-title">
                    <img src="images/hiceec/event1_titpe.png" class="pc">
                    <img src="images/hiceec/m_event1_titpe.png" class="mb">
                </div>
                <div class="event1-ball1">
                    <img src="images/hiceec/event1_ball1.png" class="pc">
                    <img src="images/hiceec/m_event1_ball1.png" class="mb">
                </div>
                <div class="event1-ball2">
                    <img src="images/hiceec/event1_ball2.png" class="pc">
                    <img src="images/hiceec/m_event1_ball2.png" class="mb">
                </div>
                <div class="event1-ball3">
                    <img src="images/hiceec/event1_ball3.png" class="pc">
                    <img src="images/hiceec/m_event1_ball3.png" class="mb">
                </div>
            </div>
        </section>
        <section class="event2">
            <div class="bg-petal">
                
            </div>
            <div class="bg-shadow"></div>
            <div class="area1">
                <div class="area1-border">
                    <div class="corner c-l-t"></div>
                    <div class="corner c-l-b"></div>
                    <div class="corner c-r-t"></div>
                    <div class="corner c-r-b"></div>
                </div>
                <div class="area1-top">
                    <div class="area1-t-p1">
                        <img src="images/hiceec/event2_pro1.png">
                    </div>
                    <div class="area1-t-p2">
                        <img src="images/hiceec/event2_pro2.png">
                    </div>
                    
                    <div class="area1-title">
                        <img src="images/hiceec/event2_title.png" class="pc">
                        <img src="images/hiceec/m_event2_title.png" class="mb">
                    </div>
                    <div class="area1-sp">
                        <img src="images/hiceec/event2_sp.png" class="pc">
                        <img src="images/hiceec/m_event2_sp.png" class="mb">
                    </div>
                </div>
                <div class="area1-bottom">
                    <div class="area1-blogger">
                        <div>
                            <img src="images/hiceec/blogger1.png" class="pc">
                            <img src="images/hiceec/m_blogger1.png" class="mb">
                            <div class="time mb">
                                <img src="images/hiceec/m_time1.png">
                            </div>
                        </div>
                        <div>
                            <img src="images/hiceec/blogger2.png" class="pc">
                            <img src="images/hiceec/m_blogger2.png" class="mb">
                            <div class="time mb">
                                <img src="images/hiceec/m_time2.png">
                            </div>
                        </div>
                        <div>
                            <img src="images/hiceec/blogger3.png" class="pc">
                            <img src="images/hiceec/m_blogger3.png" class="mb">
                            <div class="time mb">
                                <img src="images/hiceec/m_time3.png">
                            </div>
                        </div>
                    </div>
                    <div class="area1-timeline pc">
                        <img src="images/hiceec/time.png">
                    </div>
                </div>
            </div>

            <div class="area2">
                <div class="area2-top">
                    <div class="area2-title">
                        <!-- <img src="images/hiceec/product_title.png" class="pc">
                        <img src="images/hiceec/m_product_title.png" class="mb"> -->
                    </div>
                    <div class="area2-sp pc">
                        <!-- <img src="images/hiceec/product_sp.png"> -->                        
                    </div>
                </div>
                <div class="area2-center">
                    <div class="area2-txt">
                        <img src="images/hiceec/product_txt.png" class="pc">
                        <img src="images/hiceec/m_product_txt.png" class="mb">
                    </div>
                    <div class="area2-tip1">
                        <img src="images/hiceec/product_tip1.png" class="pc">
                        <img src="images/hiceec/m_product_tip1.png" class="mb">
                    </div>
                    <div class="area2-product">
                        <div class="product-area">
                            <div class="pro-box">
                                <div class="pro">
                                    <img src="images/hiceec/product1_pro.png" class="pc">
                                    <img src="images/hiceec/m_product1_pro.png" class="mb">
                                </div>
                                <div class="pro-con">
                                    <div class="pro-txt">
                                        <img src="images/hiceec/product1_info.png" class="pc">
                                        <img src="images/hiceec/m_product1_info.png" class="mb">
                                    </div>
                                    <div class="buy-btn">
                                        <a href="https://www.momoshop.com.tw/goods/GoodsDetail.jsp?i_code=7025892&Area=search&mdiv=403&oid=1_13&cid=index&kw=%E5%8F%B0%E7%81%A3%E6%AD%A6%E7%94%B0" target="_blank" onclick="sendEvent('MOMO限時優惠_L6pax','click','MOMO限時優惠_L6pax');"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-box">
                                <div class="pro">
                                    <img src="images/hiceec/product2_pro.png" class="pc">
                                    <img src="images/hiceec/m_product2_pro.png" class="mb">
                                </div>
                                <div class="pro-con">
                                    <div class="pro-txt">
                                        <img src="images/hiceec/product2_info.png" class="pc">
                                        <img src="images/hiceec/m_product2_info.png" class="mb">
                                    </div>
                                    <div class="buy-btn">
                                        <a href="https://www.momoshop.com.tw/goods/GoodsDetail.jsp?i_code=7026243&Area=search&mdiv=403&oid=1_15&cid=index&kw=%E5%8F%B0%E7%81%A3%E6%AD%A6%E7%94%B0" target="_blank" onclick="sendEvent('MOMO限時優惠_O6pax','click','MOMO限時優惠_O6pax');"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="area2-tip2">
                        <img src="images/hiceec/product_tip2.png" class="pc">
                        <img src="images/hiceec/m_product_tip2.png" class="mb">
                    </div>
                    <div class="area2-product area2-product2">
                        <div class="product-area">
                            <div class="pro-box">
                                <div class="pro">
                                    <img src="images/hiceec/product3_pro.png" class="pc">
                                    <img src="images/hiceec/m_product3_pro.png" class="mb">
                                </div>
                                <div class="pro-con">
                                    <div class="pro-txt">
                                        <img src="images/hiceec/product3_info.png" class="pc">
                                        <img src="images/hiceec/m_product3_info.png" class="mb">
                                    </div>
                                    <div class="buy-btn">
                                        <a href="https://www.momoshop.com.tw/goods/GoodsDetail.jsp?i_code=7045213&Area=search&mdiv=403&oid=1_14&cid=index&kw=%E5%8F%B0%E7%81%A3%E6%AD%A6%E7%94%B0" target="_blank" onclick="sendEvent('MOMO限時優惠_L3pax','click','MOMO限時優惠_L3pax');"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-box">
                                <div class="pro">
                                    <img src="images/hiceec/product4_pro.png" class="pc">
                                    <img src="images/hiceec/m_product4_pro.png" class="mb">
                                </div>
                                <div class="pro-con">
                                    <div class="pro-txt">
                                        <img src="images/hiceec/product4_info.png" class="pc">
                                        <img src="images/hiceec/m_product4_info.png" class="mb">
                                    </div>
                                    <div class="buy-btn">
                                        <a href="https://www.momoshop.com.tw/goods/GoodsDetail.jsp?i_code=7028205&Area=search&mdiv=403&oid=1_12&cid=index&kw=%E5%8F%B0%E7%81%A3%E6%AD%A6%E7%94%B0" target="_blank" onclick="sendEvent('MOMO限時優惠_O3pax','click','MOMO限時優惠_O3pax');"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
                <div class="area2-bottom" style="display: none;">
                    <img src="images/hiceec/product_bottom.png" class="pc">
                    <img src="images/hiceec/m_product_bottom.png" class="mb">
                </div>
            </div>
        </section>
        <footer>
            <div class="footer">
                <div class="logo"><img src="images/logo_main.png"></div>
                <div class="footer-line"></div>
                <p>本網站係台灣武田藥品工業股份有限公司所擁有，其內容之著作權亦屬於台灣武田藥品工業股份有限公司，非經同意不得轉載。
                    <br /> Copyright © Takeda Pharmaceutical Taiwan.Ltd. 2018 台灣武田藥品工業股份有限公司版權所有
                </p>
            </div>
        </footer>
    </div>
</body>

</html>