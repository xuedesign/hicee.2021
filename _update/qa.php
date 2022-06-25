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
    <link rel="stylesheet" type="text/css" href="css/qa.css">
    <script type="text/javascript">
    var pageName = "qa"
    </script>
    <script type="text/javascript" src="scripts/global.js"></script>
    <script type="text/javascript" src="scripts/jquery.twzipcode.js"></script>
    <link rel="icon" href="http://www.hicee.com.tw/images/16x16.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.hicee.com.tw/images/16x16.png" type="image/x-icon" />
    <meta name="title" content="常見問題Q&A!" />
    <meta name="description" content="想要讓工作更有動力，除了平日的保養，還要加上口服補充雙管齊下，你才能毫無後顧之憂的投入工作" />
    <meta property="og:title" content="每日HICEE提升防護力，綻放妳的健康美力!" />
    <meta property="og:description" content="想要讓工作更有動力，除了平日的保養，還要加上口服補充雙管齊下，你才能毫無後顧之憂的投入工作" />
    <meta property="og:url" content="http://www.hicee.com.tw/hiceeca.html" />
    <meta property="og:image" content="http://www.hicee.com.tw/images/share_pro2.jpg" />
    <meta property="og:type" content="website" />
    <title>常見問題Q&A</title>
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
            
            <h2><img src="images/title_qa.png" alt="常見問題Q&A"></h2>
            
            <div class="wrapbox">
                <input type="radio" id="tab-1" name="tabs" checked>
                <label for="tab-1">
                  <div><h3>Q<span>1</span></h3>維生素C的功效有哪些?</div>
                  <div class="cross"></div>
                </label>
                <div class="content">
                  促進膠原蛋白的形成，有助於傷口癒合。維持細胞排列的緊密性。增進體內結締組織、骨骼及牙齒的生長，促進鐵的吸收，具抗氧化作用。
                </div>
            </div>
            
            <div class="wrapbox">
              <input type="radio" id="tab-2" name="tabs">
              <label for="tab-2">
                <div><h3>Q<span>2</span></h3>愛喜的服用方式?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜口嚼錠 : 一天兩次 一次一錠。<br>
                愛喜E-class 一次一包，一天1~2次。若1日服用2次，請早晚各服用1次。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-3" name="tabs">
              <label for="tab-3">
                <div><h3>Q<span>3</span></h3>愛喜口嚼錠跟E-class有什麼不同?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜口嚼錠主成分為維生素C。<br>
                愛喜E-class除了維生素C還含有維生素E以及B2，屬於醫療等級的維生素補充劑。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-4" name="tabs">
              <label for="tab-4">
                <div><h3>Q<span>4</span></h3>愛喜可以每天服用嗎?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                可以每天服用。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-5" name="tabs">
              <label for="tab-5">
                <div><h3>Q<span>5</span></h3>懷孕期間可以服用愛喜嗎?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜口嚼錠可於懷孕期間服用。<br>
                愛喜E-class使用前請先諮詢醫師藥師藥劑生。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-6" name="tabs">
              <label for="tab-6">
                <div><h3>Q<span>6</span></h3>不可使用的族群？</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜口嚼錠為食品級，無規範不可使用族群，如有疑慮，可諮詢專業醫療人員。<br>
                愛喜E-class含阿斯巴甜，苯酮尿症患者不宜使用。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-7" name="tabs">
              <label for="tab-7">
                <div><h3>Q<span>7</span></h3>幾歲以上可以服用?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜口嚼錠為食品級，無規範使用年齡限制。<br>
                您可參考國健署公布之『國人膳食營養素參考攝取量』了解各年齡的維生素C建議攝取量。<br>
                愛喜 E-class使用年齡則為15歲以上。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-8" name="tabs">
              <label for="tab-8">
                <div><h3>Q<span>8</span></h3>素食者可服用愛喜嗎?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜200mg橘子口味素食者可食，愛喜500mg檸檬口味以及愛喜E-class在製作過程中含有酒精，請素食者自行斟酌。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-9" name="tabs">
              <label for="tab-9">
                <div><h3>Q<span>9</span></h3>愛喜在什麼地方製造?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜口嚼錠為台灣生產。<br>
                愛喜E-class為日本生產進口。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-10" name="tabs">
              <label for="tab-10">
                <div><h3>Q<span>10</span></h3>使用愛喜會有過量的疑慮嗎?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                維生素C為水溶性，會經由尿液排除，故正常使用下，應無需擔憂攝取過量的問題。請依照合利他命的說明書建議用法服用愛喜。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-11" name="tabs">
              <label for="tab-11">
                <div><h3>Q<span>11</span></h3>愛喜口嚼錠應該整顆吞服還是咀嚼後吞服?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜口嚼錠食用時請嚼碎。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-12" name="tabs">
              <label for="tab-12">
                <div><h3>Q<span>12</span></h3><span class="longTitle">廣告跟網站上的愛喜產品包裝上已經沒有台灣武田商標，但為什麼我買到的產品包裝上還有台灣武田公司資訊呢?</span></div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜過去為台灣武田旗下之產品，而台灣武田已將愛喜全系列產品所有權移轉給合利他命藥品股份有限公司。正式移轉時間點為2022年4月，因此在此之前上架的產品包裝上仍為台灣武田公司資訊，為合法銷售之產品。此所有權移轉不涉及產品成分、品質，請您放心使用。
              </div>
            </div>

            <div class="wrapbox">
              <input type="radio" id="tab-13" name="tabs">
              <label for="tab-13">
                <div><h3>Q<span>13</span></h3>為什麼市面上的愛喜產品包裝有不同版本?</div>
                <div class="cross"></div>
              </label>
              <div class="content">
                愛喜過去為台灣武田藥品工業股份有限公司旗下之產品，台灣武田已將愛喜全系列產品所有權轉移至合利他命藥品股份有限公司，因此包裝上的相關資訊做對應的調整，因此短期內市面上之產品可能有不同版本。此所有權移轉不影響產品品質與成分，請您放心使用。
              </div>
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