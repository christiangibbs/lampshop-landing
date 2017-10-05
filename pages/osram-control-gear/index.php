<?php
  $page = 'venture';
  include('../../components/head-minimal.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>

 <style media="screen">
   .usp {text-align: center; color: #ffffff;}
   .usp h1 {font-size: 22px; font-weight: bold; margin: 10px;}
   .thumbnail a>img, .thumbnail>img {min-height: 125px; max-height: 125px;}
   .products .product {height: auto;}
 </style>
  <body>


    <div class="row" style="margin: 0px;
    max-width: 100%;
    width: 100%;
    background: #119b3c;
    background-image: linear-gradient(#57e073,#119b3c);
    background-size: 110px 110px;
    background-repeat: repeat-x;">
      <div class="col-sm-2">
        <a href="https://www.lampshoponline.com/" class="logo-href">
          <img class="logo" src="https://www.lampshoponline.com/skin/frontend/rwd/lampshop/images/logo.png" alt="Logo">
        </a>
      </div>
    </div>

  <div class="col-sm-4 usp" style="background-color: #E28413;">
    <h1><i class="fa fa-trophy" aria-hidden="true"></i> Largest Online Stockist</h1>
  </div>
  <div class="col-sm-4 usp" style="background-color: #FFBA08;">
    <h1><i class="fa fa-gbp" aria-hidden="true"></i> Best Price Available Online</h1>
  </div>
  <div class="col-sm-4 usp" style="background-color: #DD1C1A;">
    <h1><i class="fa fa-certificate" aria-hidden="true"></i> Official Osram distributor</h1>
  </div>
  <div class="col-sm-12" style="background-color: #f2f2f2; text-align: center;">
    <img src="images/osram-logo.png" alt="Osram Logo" style="height: 150px; padding: 10px;">
  </div>
  <div class="col-sm-12" style="background-color: #e0e0e0;">
    <h1 style="position: relative; color: #333;">Osram Control Gear</h1>
  </div>
  <div class="col-sm-6" style="padding: 0px;">
    <img src="images/control-gear-banner.jpg" alt="Need Help?" style="width: 100%;">

  </div>
  <div class="col-sm-6">
    <form action="https://www.lampshoponline.com/catalogsearch/result/" method="get" style="padding: 10px;">
      <div>
        <!--<label for="search"></label>-->
        <input class="form-control" type="text" name="q" value="" maxlength="128" placeholder="enter reference number" style="font-size: 24px; border: 1px solid #FD6F32; border-right: none; border-radius: 0px; width: 95%; float: left;">
        <button type="submit" title="Search" class="btn" style="float:left; border-radius: 0px; border: none; padding: 7px; width: 5%; background-color: #FD6F32;">
            <i class="fa fa-search" aria-hidden="true" style="color: white; font-size:18px"></i>
       </button>
        <script type="text/javascript">
        //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search...');
            searchForm.initAutocomplete('https://www.lampshoponline.com/catalogsearch/ajax/suggest/', 'search_autocomplete');
        //]]>
        </script>
      </div>
    </form>
    <div class="panel-body filter">
      <div class="col-sm-12">
        <h2>Dimmable or None-Dimmable?</h2>
        <div class="panel panel-default">
          <div class="panel-heading">
            Select your Control Gear
          </div><!-- panel-heading -->
          <div class="panel-body">
            <ul class="button-group nav nav-pills" data-filter-group="wattage">
              <li data-filter class="active" role="presentation"><a href="#">Any</a></li>
              <li data-filter=".dimmable" role="presentation">
                <a href="#" data-toggle="tooltip" title="<img src='https://www.lampshoponline.com/media/catalog/category/qti-te__25744.jpg' style='height: 100px;'/>">Dimmable
                </a>
              </li>
              <li data-filter=".non-dimmable" role="presentation">
                <a href="#" data-toggle="tooltip" title="<img src='https://www.lampshoponline.com/media/catalog/category/600qtpde110.png' style='height: 100px;'/>">None-Dimmable
                </a>
              </li>
              <li data-filter=".electronic-hid-ballasts" role="presentation">
                <a href="#" data-toggle="tooltip" title="<img src='https://www.lampshoponline.com/media/catalog/category/osram-pti-gear__53317.jpg' style='height: 100px;'/>">Electronic HID Ballasts
                </a>
              </li>
            </ul>
          </div>
        </div><!-- panel panel-default -->
      </div><!-- col-sm-4 -->
    </div><!-- panel-body filter -->
  </div>
  <div class="col-sm-12">
    <h2>Results:</h2>
    <div class="products">
      <?php include('products/dimmable.php'); ?>
      <?php include('products/non-dimmable.php'); ?>
      <?php include('products/electronic-hid.php'); ?>
    </div><!-- products -->
  </div><!-- col-sm-12 -->


  <script type="text/javascript">
    // external js: isotope.pkgd.js

    // init Isotope
    var $products = $('.products').isotope({
      itemSelector: '.product'
    });

    // store filter for each group
    var filters = {};

    $('.filter').on( 'click', 'li', function() {
      var $this = $(this);
      // get group key
      var $buttonGroup = $this.parents('.button-group');
      var filterGroup = $buttonGroup.attr('data-filter-group');
      // set filter for group
      filters[ filterGroup ] = $this.attr('data-filter');
      // combine filters
      var filterValue = concatValues( filters );
      // set filter for Isotope
      $products.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('.button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'li', function() {
        $buttonGroup.find('.active').removeClass('active');
        $( this ).addClass('active');
        console.log(i);
      });

    });

    // flatten object by concatting values
    function concatValues( obj ) {
      var value = '';
      for ( var prop in obj ) {
        value += obj[ prop ];
      }
      return value;
    }

    $('a[data-toggle="tooltip"]').tooltip({
      animated: 'fade',
      placement: 'bottom',
      html: true
  });

  </script>

  <script>!function(e,t,r,n,c,h,o){function a(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return r}try{for(c=e.getElementsByTagName('a'),o='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(h=c[n]).href.indexOf(o))>-1&&(h.href='mailto:'+a(h.href,t+o.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(h=c[n]).parentNode.replaceChild(e.createTextNode(a(h.getAttribute('data-cfemail'),0)),h)}catch(e){}}catch(e){}}(document);</script><script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  </body>
</html>
