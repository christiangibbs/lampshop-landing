<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LampShopOnline - <?php echo($page);?></title>

    <link rel="icon" href="https://www.lampshoponline.com/media/favicon/default/lso_logo_transparent.png" type="image/x-icon" />
    <link rel="shortcut icon" href="https://www.lampshoponline.com/media/favicon/default/lso_logo_transparent.png" type="image/x-icon" />

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="../../assets/js/actions.js" charset="utf-8"></script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <style>.async-hide { opacity: 0 !important} </style>
    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
    {'GTM-NTJKZL9':true});</script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-13062331-2', 'auto');
      ga('require', 'GTM-NTJKZL9');
      ga('send', 'pageview');
    </script>

    <style media="screen">
      body {margin: 0px; padding: 0px; background-color: #f5f5f5; font-family: lato;}

      h2, h3, h4 {margin: 0px; padding: 0px; color: #fff;}

      p {padding: 10px; color: white;}

      nav a {font-size: 16px;}
      .logo { height: 55px;}
      .logo:hover {cursor: pointer; opacity: 0.7;}

      .col {padding: 0px;}

      .panel {border-radius: 0px; margin: 0px}

        .panel-padding {padding: 5px}

      .panel-body {background-color: #fff; border: 1px solid #e3e3e3; border-top: none;}

      .hr {
        height: 4px;
        width: 90%;
        background-color: #00cf3f;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>

    <div class="row" style="background-color: #03CC6F; height: 60px;">
      <div class="col col-1" style="text-align: center;">
        <img class="logo" src="https://www.lampshoponline.com/skin/frontend/rwd/lampshop/images/logo.png" alt="Logo">
      </div>
    </div>

    <div class="row" style="background-color: #FD6F35">
      <div class="col col-1" style="margin: 0px; padding: 0px;">
        <nav class="nav-expand">
          <a class="nav-trigger">
            |||
          </a>
          <ul class="nav-ul">
            <li>
              <a href="#"><h2 style="margin: 0px; padding: 0px;">NEED HELP?</h2></a>
            </li>
            <li>
              <a href="#" onclick="openWin()" title="Live Help">
                <i class="fa fa-comments" aria-hidden="true"></i> LIVE HELP - CLICK HERE FOR CHAT
              </a>
            </li>

            <script>
                function openWin()
                {
                    var myWindow = window.open("https://v2.zopim.com/widget/livechat.html?key=AYWOmv9EtwTUoCOl48zcR4Nlc6rio6x6&lang=en&hostname=www.lampshoponline.com","","width=500,height=500");
                }
            </script>

            <li>
              <a href="tel:01138876270" title="Phone" style="font-size: 40px;">
                <i class="fa fa-phone" aria-hidden="true"></i> PHONE - CALL 0113 8876270
              </a>
            </li>
            <li>
              <a href="mailto:sales@lampshoponline.com">
                <i class="fa fa-envelope" aria-hidden="true"></i> EMAIL
              </a>
            </li>
            <li>
              <a href="http://www.lampshoponline.com/lighting-glossary">
                <i class="fa fa-question-circle" aria-hidden="true"></i> FAQ
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
