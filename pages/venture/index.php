<?php
  $page = 'Venture Lamps';
  include('../../components/head-minimal.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>

 <style media="screen">
 .most-popular .panel-title h2 {margin: 0px; padding: 10px;}
 .most-popular .panel-body .panel-title, .product-filter .panel-title {background-color: #119B3C; color: #ffffff;}
  .most-popular .panel-body .panel-title h3, .product-filter .panel-title h3 {margin: 0px; padding: 10px; font-size: 18px;}
  .most-popular .panel-body .panel-body img {width: 100%;}

.product-filter ul {list-style-type: none; padding-left: 0px;}
.product-filter ul li {line-height: 28px; font-weight: bold;}
.products .product {padding: 5px; margin: 5px 0px; height: auto;}
.products .product .panel-footer {color: #333333; text-decoration: none;}
.products .product .panel-title {color: #119B3C;}
.active {background-color: orange; color: white;}
.product a:hover .panel-default {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.product a:hover {text-decoration: none;}
.product img {max-height: 200px; height: 200px;}
 </style>
  <body>
  <div class="col-sm-12">
    <div class="panel-body filter">
      <div class="col-sm-12">
        <h2>Product Filter:</h2>
        <div class="panel panel-default">
          <div class="panel-heading">
            Select your Category
          </div><!-- panel-heading -->
          <div class="panel-body" style="text-align: center; font-weight: bold;">
            <ul class="button-group nav nav-pills" data-filter-group="wattage">
              <li data-filter=".white-lux" role="presentation">
                <a>
                  <img src="images/white-lux.JPG" alt="White-Lux"><br />
                  White-Lux
                </a>
              </li>
              <li data-filter=".son-lamps" role="presentation">
                <a>
                  <img src="images/son-lamps.JPG" alt="SON Lamps"><br />
                  SON Lamps
                </a>
              </li>
              <li data-filter=".mh-de-lamps" role="presentation">
                <a>
                  <img src="images/mh-de-lamps.JPG" alt="MH-DE Lamps"><br />
                  MH-DE Lamps
                </a>
              </li>
              <li data-filter=".open-rated-hipe" role="presentation">
                <a>
                  <img src="images/open-rated-hipe.JPG" alt="Open Rated HIPE"><br />
                  Open Rated HIPE
                </a>
              </li>
              <li data-filter=".pulse-start-lamps" role="presentation">
                <a>
                  <img src="images/pulse-start-lamps.JPG" alt="Pulse Start Lamps"><br />
                  Pulse Start Lamps
                </a>
              </li>
              <li data-filter=".high-wattage-lamps" role="presentation">
                <a>
                  <img src="images/high-wattage-lamps.JPG" alt="High Wattage"><br />
                  High Wattage
                </a>
              </li>
              <li style="float: right;">
                <img src="images/logo.png" alt="" style="width: 100%;">
              </li>
            </ul>
          </div>
        </div><!-- panel panel-default -->
      </div><!-- col-sm-4 -->
    </div><!-- panel-body filter -->
  </div><!-- col-sm-12 -->
  <div class="col-sm-10 col-sm-offset-1">
    <div class="products">
      <?php
        include('products/white-lux.php');
        include('products/son-lamps.php');
        include('products/mh-de-lamps.php');
        include('products/open-rated-hipe.php');
        include('products/pulse-start-lamps.php');
        include('products/high-wattage-lamps.php');
       ?>
    </div><!-- products -->
  </div><!-- col-sm-12 -->

  <script>!function(e,t,r,n,c,h,o){function a(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return r}try{for(c=e.getElementsByTagName('a'),o='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(h=c[n]).href.indexOf(o))>-1&&(h.href='mailto:'+a(h.href,t+o.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(h=c[n]).parentNode.replaceChild(e.createTextNode(a(h.getAttribute('data-cfemail'),0)),h)}catch(e){}}catch(e){}}(document);</script><script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

    <script>
      $(document).ready(function(){
        $('.filter').isotope({
          layoutMode: 'fitRows'
        });

        $('.filter ul li').click(function(){
          var selector = $(this).attr('data-filter');
          $('.products').isotope({
            filter: selector
          });
          return false;
        });
      });

    </script>
  </body>
</html>
