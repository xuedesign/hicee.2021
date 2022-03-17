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
    <link rel="stylesheet" type="text/css" href="css/eclass.css?t=2020">
    <script type="text/javascript">
    var pageName = "eclass"
    </script>
    <script type="text/javascript" src="scripts/global.js"></script>
    <!-- <script type="text/javascript" src="scripts/stage.js?t=1017"></script> -->
    <script type="text/javascript" src="scripts/eclass.js?t=0807"></script>
    <!-- <script type="text/javascript" src="scripts/confetti.js"></script> -->
    <meta name="title" content="現在的愛紗愛上更好的自己！日本女生自我保養有一套" />
    <meta name="description" content="日本製武田愛喜活麗皙E-class，1天2包，有效淡化黑斑，隨時好氣色，從內而外散發健康光采！" />
    <meta property="og:title" content="現在的愛紗愛上更好的自己！日本女生自我保養有一套" />
    <meta property="og:description" content="日本製武田愛喜活麗皙E-class，1天2包，有效淡化黑斑，隨時好氣色，從內而外散發健康光采！" />
    <meta property="og:url" content="http://www.hicee.com.tw/eclass" />
    <meta property="og:image" content="http://www.hicee.com.tw/images/share_eclass.jpg" />
    <meta property="og:type" content="website" />
    <link rel="icon" href="http://www.hicee.com.tw/images/16x16.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.hicee.com.tw/images/16x16.png" type="image/x-icon" />
    <title>現在的愛紗愛上更好的自己！日本女生自我保養有一套</title>
    <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10073066'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P9BFWQX');</script>
<!-- End Google Tag Manager -->
    <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10118239'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9BFWQX"
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
            <li><a href="">愛紗美力隨身C帶</a></li>
            <li><a href="">愛紗的美麗秘密</a></li>
<!--             <li><a href="">愛紗的美麗應援</a></li>
            <li><a href="">立即擁有自信光采</a></li> -->
            <li><a href="">維他命C真實解碼</a></li>
            <li><a href="">日本防護力保健專家</a></li>
            <li><a href="">首頁</a></li>
        </ul>
    </div>
    <!-- <div class="falling-leaves"></div> -->
    <div class="fixed-btn">
        <div class="btn"><a href=""></a></div>
        <!-- <div class="btn2"><a href=""></a></div> -->
    </div>
    <div class="wrap">
        <section class="kv">
            <div class="bottom-txt">
                <div class="icon-fb"></div>
                <div class="note"></div>
            </div>
            <div class="grass left"><img src="images/eclass/kv_grass1.png"></div>
            <div class="grass right"><img src="images/eclass/kv_grass2.png"></div>
            <div class="main">
                <div class="title">
                    <img src="images/eclass/kv_title.png">
                    <div class="tip">
                        <img src="images/eclass/kv_title_tip.png">
                    </div>
                </div>
                <div class="kv-pro">
                    <div><img src="images/eclass/kv_pro1.png"></div>
                    <div class="kv-ball"><img src="images/eclass/kv_pro2.png"></div>
                </div>
                <div class="btn-kv btn">
                    <a href=""></a>
                </div>
            </div>
            <div class="person">
                <img src="images/eclass/kv_sperson.png">
                <div class="signature">
                    <img src="images/eclass/kv_signature.png">
                </div>
                <!-- <div class="light"></div> -->
            </div>
            <div class="slogan">
                <img src="images/eclass/kv_slogan.png">
            </div>
        </section>
        <section class="info">
            <article>
                <div class="area-front">
                    <div class="article-pic">
                        <img src="images/eclass/article1_pic.png">
                        <div class="pic-msg"><img src="images/eclass/article1_pic_say.png"></div>
                    </div>
                    <div class="article-title">
                        <img src="images/eclass/article1_title.png" class="pc">
                        <img src="images/eclass/m_article1_title.png" class="mb">
                    </div>
                </div>
                <div class="area-back">
                    <div class="article-data">
                        <img src="images/eclass/article1_data.png" class="pc">
                        <img src="images/eclass/m_article1_data.png" class="mb">
                    </div>
                    <div class="article-txt">
                        <img src="images/eclass/article1_txt1.png" class="pc">
                        <img src="images/eclass/m_article1_txt.png" class="mb">
                        <div class="btn-share btn"><a href=""></a></div>
                    </div>
                </div>
            </article>
            <article>
                <div class="area-front">
                    <div class="article-pic">
                        <img src="images/eclass/article2_pic.png">
                        <div class="pic-msg"><img src="images/eclass/article2_pic_say.png"></div>
                    </div>
                    <div class="article-title">
                        <img src="images/eclass/article2_title.png" class="pc">
                        <!-- <img src="images/eclass/m_article2_title.png" class="mb"> -->
                    </div>
                </div>
                <div class="area-back">
                    <div class="article-data">
                        <img src="images/eclass/article2_data.png">
                    </div>
                    <div class="article-txt">
                        <img src="images/eclass/article2_txt.png"  class="pc">
                        <img src="images/eclass/m_article2_txt.png" class="mb">
                    </div>
                </div>
            </article>
            <div class="bottom-txt">
                <div class="note s2"></div>
            </div>
        </section>
<!--         <section class="blogger">
            <div class="blogger-main">                
                 <div class="btn-blogger"><a href="https://www.marieclaire.com.tw/beauty/news/43639" target="_blank"></a></div>
            </div>
            <div class="bottom-txt">
                <div class="note s5"></div>
            </div>
        </section> -->
        <!--section class="product-content pre">
            <div class="product-main">
                <img src="images/eclass/product.png">
            </div-->
            <!--div class="product-title">
                <img src="images/eclass/product_title.png" class="pc">
                <img src="images/eclass/m_product_title.png" class="mb">
            </div-->
            <!--div class="product-msg">
                <a href=""></a>
                <a href=""></a>
                <img src="images/eclass/product_data.png" class="pc">
                <img src="images/eclass/m_product_data.png" class="mb">
            </div>
            <div class="bottom-txt">
                <div class="note s3"></div>
            </div>
            <div class="ball1 set1"></div>
            <div class="ball2 set2"></div>
            <div class="ball3 set3"></div>
            <div class="ball3 set4"></div>
            <div class="ball4 set5"></div>
            <div class="ball2 set6"></div>
            <div class="ball1 set7"></div>
        </section-->
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