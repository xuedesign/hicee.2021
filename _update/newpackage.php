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
    <link rel="stylesheet" type="text/css" href="css/newpackage.css">
    <script type="text/javascript">
    var pageName = "newpackage"
    </script>
    <script type="text/javascript" src="scripts/global.js"></script>
    <script type="text/javascript" src="scripts/jquery.twzipcode.js"></script>
    <link rel="icon" href="http://www.hicee.com.tw/images/16x16.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.hicee.com.tw/images/16x16.png" type="image/x-icon" />
    <meta name="title" content="喜新包裝上市" />
    <meta name="description" content="想要讓工作更有動力，除了平日的保養，還要加上口服補充雙管齊下，你才能毫無後顧之憂的投入工作" />
    <meta property="og:title" content="每日HICEE提升防護力，綻放妳的健康美力!" />
    <meta property="og:description" content="想要讓工作更有動力，除了平日的保養，還要加上口服補充雙管齊下，你才能毫無後顧之憂的投入工作" />
    <meta property="og:url" content="http://www.hicee.com.tw/newpackage" />
    <meta property="og:image" content="http://www.hicee.com.tw/images/share_pro2.jpg" />
    <meta property="og:type" content="website" />
    <title>喜新包裝上市</title>
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

        <div class="bread"></div>

        <div class="proContent" style="min-height: 1000px; margin-top: 0;">
            <h2><img src="images/newpackage/pic_hero.png" alt="愛喜新包裝上市"></h2>
            <br>
            <p>愛喜全系列產品業務已由台灣武田轉移至合利他命藥品有效公司，因此產品之外包裝因應此公司變更而做對應之調整。</p>
            <p>市售之產品新舊包裝銜接期間，您可能會在貨架上、產品宣傳物以及廣告上看到不同版本之愛喜產品外包裝。此不同版本之外包裝僅為公司轉移對應之包裝設計變更，不涉及產品之功效與成分，請您放心選購。</p>

            <img class="pro-title" src="images/newpackage/pic_title.png" alt="愛喜新包裝說明">

            <div class="pro-item">
                <h3><span>愛喜</span>維他命C+鈣 口嚼錠 500mg</h3>
                <img src="images/newpackage/pic_pro-01.png" alt="">
            </div>
            
            <div class="pro-item">
                <h3><span>愛喜</span>維他命C 口嚼錠 200mg</h3>
                <img src="images/newpackage/pic_pro-02.png" alt="">
            </div>
            
            <div class="pro-item">
                <h3><span>愛喜</span>活麗皙</h3>
                <img src="images/newpackage/pic_pro-03.png" alt="">
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