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
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/history.css">
    <script type="text/javascript">
    var pageName = "history"
    </script>
    <script type="text/javascript" src="scripts/global.js"></script>
    <script type="text/javascript" src="scripts/jquery.twzipcode.js"></script>
    <link rel="icon" href="http://www.hicee.com.tw/images/16x16.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.hicee.com.tw/images/16x16.png" type="image/x-icon" />
    <meta name="title" content="關於合利他命藥品" />
    <meta name="description" content="想要讓工作更有動力，除了平日的保養，還要加上口服補充雙管齊下，你才能毫無後顧之憂的投入工作" />
    <meta property="og:title" content="每日HICEE提升防護力，綻放妳的健康美力!" />
    <meta property="og:description" content="想要讓工作更有動力，除了平日的保養，還要加上口服補充雙管齊下，你才能毫無後顧之憂的投入工作" />
    <meta property="og:url" content="http://www.hicee.com.tw/history" />
    <meta property="og:image" content="http://www.hicee.com.tw/images/share_pro2.jpg" />
    <meta property="og:type" content="website" />
    <title>關於合利他命藥品</title>
    <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10118239'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P9BFWQX');</script>
    <!-- End Google Tag Manager -->

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
            <li><a href="">維他命C真實解碼</a></li>
            <li><a href="">日本防護力保健專家</a></li>
            <li><a href="">常見問題Q&A</a></li>
            <li><a href="">愛喜新包裝上市</a></li>
            <li><a href="">關於合利他命藥品</a></li>
        </ul>
    </div>
    <div class="wrap">
    	
        <div class="leave pro-lemon3"><img src="images/lemon3.png"></div>
        <div class="leave pro-leave1"><img src="images/leave7.png"></div>
        <div class="leave pro-leave2"><img src="images/leave1.png"></div>
        <div class="leave pro-leave3"><img src="images/leave3.png"></div>
        <div class="leave pro-leave5"><img src="images/flip_leave1.png"></div>
        <div class="leave pro-leave6"><img src="images/flip_leave1.png"></div>

        <!-- <div class="bread"></div> -->

        <div class="proContent">
            <div class="new-info">
                <!-- <h2>邁向<span>全新的開始</span></h2> -->
                <img class="myimg" src="images/history/pic_main.jpg" alt="合利他命藥品於台灣正式成立">
                <br>
                <p>隨著全球武田藥品工業(Takeda)將消費保健品事業部的產品權利轉移至合利他命藥品(Alinamin pharmaceutical company Ltd.) 。2022年4月，合利他命藥品股份有限公司也於台灣正式成立。我們所有產品的製程將與過去相同，產品的效果與成分也完全相同，感謝您過去對武田藥品工業消費保健品的支持，未來也請您繼續支持合利他命藥品。</p>

                <p>合利他命藥品在全球擁有多個知名品牌如合利他命、BENZA、Nicorette，跨足多種不同健康保健領域。</p>

                <p>合利他命藥品在台灣同樣秉持消費者為中心的理念，提供消費者包含合利他命、必胃康、愛喜以及保能痔等消費保健產品。</p>
            </div>

            <div id="box_marquee">
                <div class="marquee">
                    <img src="images/history/pic_marquee-01.jpg" alt="愛喜C">
                    <img src="images/history/pic_marquee-02.jpg" alt="愛喜C">
                    <img src="images/history/pic_marquee-03.jpg" alt="愛喜活麗皙">
                    <img src="images/history/pic_marquee-04.jpg" alt="合利他命A25">
                    <img src="images/history/pic_marquee-05.jpg" alt="合利他命強效錠">
                    <img src="images/history/pic_marquee-06.jpg" alt="合利他命金強效錠">
                    <img src="images/history/pic_marquee-07.jpg" alt="保能痔">
                    <img src="images/history/pic_marquee-08.jpg" alt="必胃康">
                </div>
                <div class="marquee22">
                    <img src="images/history/pic_marquee-01.jpg" alt="愛喜C">
                    <img src="images/history/pic_marquee-02.jpg" alt="愛喜C">
                    <img src="images/history/pic_marquee-03.jpg" alt="愛喜活麗皙">
                    <img src="images/history/pic_marquee-04.jpg" alt="合利他命A25">
                    <img src="images/history/pic_marquee-05.jpg" alt="合利他命強效錠">
                    <img src="images/history/pic_marquee-06.jpg" alt="合利他命金強效錠">
                    <img src="images/history/pic_marquee-07.jpg" alt="保能痔">
                    <img src="images/history/pic_marquee-08.jpg" alt="必胃康">
                </div>
            </div>

            <div class="company-vision">
                <img class="pro-title" src="images/history/pic_title-01.png" alt="關於商標">
                <img class="myimg" class="pic_logo" src="images/history/pic_logo.png" alt="合利他命藥品logo">
                <p>在新商標中，蘊含著合利他命製藥公司「<strong class="txt_bold">我們的企圖心</strong>」以及「<strong class="txt_bold">我們的承諾</strong>」兩種含意。</p>
            </div>

            <div class="box_note box_note1">
                「我們的企圖心」是，加緊開拓未來的腳步以及不斷挑戰的心；<br>
                「我們的承諾」是，我們堅守地的信念（誠信、公正、正直、不屈）<br>
                <span>以及以客為尊的精神。</span>
            </div>

            <div class="company-vision">
                <img class="myimg" src="images/history/pic_logoinfo.png" alt="合利他命藥品logo涵義">
                <div class="box_note">
                    將代表合利他命製藥的字母「  <strong class="txt_bold">A</strong> 」符號化<br>
                    對各位關係人以及對於社會的「<strong class="txt_bold">承諾象徵</strong>」<br>
                    商標間的白色通道表示<strong class="txt_bold">相互扶持、彼此信賴</strong>
                </div>
                <p>三角形的三個頂點分別象徵著挑戰、信念以及以客為尊的精神; 代表合利他命製藥的A，在其中配置的三角形象徵著面對未來的轉換; 全面換新的這個新商標象徵著對各位關係人以及對於社會的承諾。</p>
            </div>

            <div>
                <img class="pro-title" src="images/history/pic_title-02.png" alt="認識合利他命藥品">
                <p style="text-align: center">讓我們帶您認識合利他命藥品所代表的精神與想法。</p>
                <div class="box_film">
                    <div class='main_film'>
                        <iframe src="https://www.youtube.com/embed/zjWhI06fHQs?&cc_load_policy=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="myTip">衛署藥製字第030689號 衛署藥輸字第025431號 衛部藥輸字第027584號 北市衛藥廣字第111060105號 本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項</div>
            </div>

        </div>

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