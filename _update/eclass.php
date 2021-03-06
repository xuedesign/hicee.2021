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
    <link rel="stylesheet" type="text/css" href="css/eclass.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <script type="text/javascript">
    var pageName = "eclass"
    </script>
    <script type="text/javascript" src="scripts/global.js"></script>
    <!-- <script type="text/javascript" src="scripts/stage.js?t=1017"></script> -->
    <script type="text/javascript" src="scripts/eclass.js?t=0807"></script>
    <script type="text/javascript" src="scripts/product.js"></script>
    <!-- <script type="text/javascript" src="scripts/confetti.js"></script> -->
    <meta name="title" content="現在的愛紗愛上更好的自己！日本女生自我保養有一套" />
    <meta name="description" content="日本製合利他命愛喜活麗皙E-class，1天2包，有效淡化黑斑，隨時好氣色，從內而外散發健康光采！" />
    <meta property="og:title" content="現在的愛紗愛上更好的自己！日本女生自我保養有一套" />
    <meta property="og:description" content="日本製合力他命愛喜活麗皙E-class，1天2包，有效淡化黑斑，隨時好氣色，從內而外散發健康光采！" />
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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-55KQNF2');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9BFWQX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55KQNF2"
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
            <li><a href="">首頁</a></li>
            <li><a href="">愛紗的防護力隨身C帶</a></li>
            <li><a href="">愛紗的醫美級雙重防護</a></li>
<!--             <li><a href="">愛紗的美麗應援</a></li>
            <li><a href="">立即擁有自信光采</a></li> -->
            <li><a href="">維他命C真實解碼</a></li>
            <li><a href="">日本防護力保健專家</a></li>
            <li><a href="">常見問題Q&A</a></li>
            <li><a href="">愛喜新包裝上市</a></li>
            <li><a href="">關於合利他命藥品</a></li>
        </ul>
    </div>
    <!-- <div class="falling-leaves"></div> -->

    <!-- <div class="fixed-btn">
        <div class="btn"><a href=""></a></div>
        <div class="btn2"><a href=""></a></div>
    </div> -->
    
    <div class="wrap">
        <section class="kv">
            <!-- <div class="bottom-txt">
                <div class="icon-fb"></div>
                <div class="note"></div>
            </div> -->
            <div class="grass left"><img src="images/eclass/kv_grass1.png"></div>
            <div class="grass right"><img src="images/eclass/kv_grass2.png"></div>
            <div class="main">
                <div class="title">
                    <img src="images/eclass/kv_title.png">
                    <!-- <div class="tip">
                        <img src="images/eclass/kv_title_tip.png">
                    </div> -->
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
            <!--#202106新增-->
            <article style="padding-top: 30px;">
                <div class="leave pro-lemon1"><img src="images/lemon1.png"></div>
                <div class="leave pro-lemon2 pro-lemon4"><img src="images/lemon2.png"></div>
                <div class="leave pro-lemon3"><img src="images/lemon3.png"></div>
                <div class="leave pro-leave1"><img src="images/leave7.png"></div>
                <div class="leave pro-leave2"><img src="images/leave1.png"></div>
                <div class="leave pro-leave3"><img src="images/leave3.png"></div>
                <div class="leave pro-leave5"><img src="images/flip_leave1.png"></div>
                <div class="leave pro-leave6"><img src="images/flip_leave1.png"></div>
                <div class="proContent">
                    <div class="pro-img">
                        <div class="pro-list">
                            <div>
                                <img class="pcshow" src="images/pro_3_1.png">
                                <img class="mbshow" src="images/m_pro_3_1.png">
                            </div>
                            <div>
                                <img class="pcshow" src="images/pro_3_2.png">
                                <img class="mbshow" src="images/m_pro_3_2.png">
                            </div>
                            <div>
                                <img class="pcshow" src="images/pro_3_3.png">
                                <img class="mbshow" src="images/m_pro_3_3.png">
                            </div>
                        </div>
                        <!-- <div class="pro-tip">
                            <img src="images/pro_3_tip.png">
                        </div> -->
                        
                    </div>
                    <div class="pro-title">
                        <div><img class="pcshow" src="images/pro_3_title.png"><img class="mbshow" src="images/m_pro_3_title.png"></div>
                        <p><span class="yellow">日本製造 醫療級C+E</span><br>維生素C+E 雙重防護</p>
                    </div>
                    
                    <div class="pro-form">
                        <dl>
                            <dt>主要成份</dt>
                            <dd>
                                <img class="pcshow" src="images/pro_3_form.png">
                                <img class="mbshow" src="images/m_pro_3_form.png">
                            </dd>
                            <dd style="font-size: 13px;    line-height: 1.2em;    padding: .5em;">
                                其他成份 : Erythritol, aspartame(L-phenylalanine<br>compound), anhydrous silicic acid and corn starch
                            </dd>
                        </dl>
                        
                        <dl class="fun-2">
                            <dt>食用方法</dt>
                            <dd>請依照以下用量，直接口服，<br>或口服後以水或溫水吞服</dd>
                            <dd style="padding: 1em 0em;"><img class="pcshow" src="images/pro_3_form2.png"><img class="mbshow" src="images/m_pro_3_form2.png"></dd>
                        </dl>
                        <dl class="fun-3">
                            <dt>用途 (適應症)</dt>
                            <dd>維生素E、C、B2缺乏之補充劑</dd>
                        </dl>
                        <dl class="fun-6">
                            <dt><p>包裝</p><p>原產地</p></dt>
                            <dd><p>14包</p><p>日本</p></dd>
                        </dl>
                    </div>
                    <div class="pro-fun pro-fun2">
                        <dl class="fun-1">
                            <dt>【產品特色】</dt>
                            <dd>日本製造</dd>
                            <dd>獨特顆粒，迅速溶解於口中 </dd>
                            <dd>單包鋁箔裝，攜帶方便 隨時補充</dd>
                            <dd>免沖泡 可直接口服</dd>
                            <dd>抗氧化、改善血液循環</dd>
                            <dd>減少黑斑、雀斑、色素沉澱</dd>
                            <dd>不含糖、不含鈉</dd>
                            <dd>補充維生素E、C、B2</dd>
                        </dl>
                        <dl class="fun-1 fun-2">
                            <dt>效能</dt>
                            <dd>可緩和因日曬或皮疹所引起的黑斑、<br>雀斑、色素沉澱</dd>
                            <dd>緩和因末梢血液循環障礙所導致的肩頸酸痛、<br>手腳發麻、手腳發冷</dd>
                            <dd>在身體疲勞時、生病或病後體力衰弱時，<br>補充維生素E、C、B2</dd>
                        </dl>
                        
                        <dl class="fun-4">
                            <dt>食用方法</dt>
                            <dd>請依照以下用量，直接口服，<br>或口服後以水或溫水吞服</dd>
                            <dd style="padding: 1em 0em;"><img class="pcshow" src="images/pro_3_form2.png"><img class="mbshow" src="images/m_pro_3_form2.png"></dd>
                        </dl>
                        <dl class="fun-4">
                            <dt>每日劑量  </dt>
                            <dd>維生素E、C、B2缺乏之補充劑</dd>
                        </dl>
                        <dl class="fun-6">
                            <dt><p>包裝</p><p>原產地</p></dt>
                            <dd><p>14包</p><p>日本</p></dd>
                        </dl>
                        <dl class="fun-3">
                            <dt>販售通路</dt>
                            <dd>全台屈臣氏、康是美、各大藥局
                            <!-- <br>全聯福利中心、--></dd>
                        </dl>
                        
                    </div>
                    <div class="pro-event">
                        <dl>
                            <dd>
                                <dd>衛部藥輸字第026134號 北市衛藥廣字第110090156號 <br>本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語與注意事項</dd>
                            </dd>
                            
                        </dl>
                    </div>
                </div>
            </article>

            <article style="padding: 0;">
                <!-- <div class="area-front">
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
                </div> -->
            </article>
            <article style="padding: 0;">
                <!-- <div class="area-front">
                    <div class="article-pic">
                        <img src="images/eclass/article2_pic.png">
                        <div class="pic-msg"><img src="images/eclass/article2_pic_say.png"></div>
                    </div>
                    <div class="article-title">
                        <img src="images/eclass/article2_title.png" class="pc">
                        <!-- <img src="images/eclass/m_article2_title.png" class="mb"> -->
                <!--    </div>
                </div>
                <div class="area-back">
                    <div class="article-data">
                        <img src="images/eclass/article2_data.png">
                    </div>
                    <div class="article-txt">
                        <img src="images/eclass/article2_txt.png"  class="pc">
                        <img src="images/eclass/m_article2_txt.png" class="mb">
                    </div>
                </div> -->
            </article>
            <div class="bottom-txt">
                <!-- <div class="note s2"></div> -->
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
                <p>本網站係合利他命藥品股份有限公司所擁有，其內容之著作權亦屬於合利他命藥品股份有限公司，非經同意不得轉載。
                  <br> Copyright © Alinamin Pharmaceutical Taiwan Ltd. 2022 合利他命藥品股份有限公司版權所有
                  <!-- <br>C-APROM/TW/AAS/0006 April 2022 --></p>
            </div>
        </footer>
    </div>
</body>

</html>