<?php
  $page = 'Emergency Batteries';
  include('../../components/head-minimal.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>

 <style media="screen">
   .usp {text-align: center; color: #ffffff;}
   .usp h1 {font-size: 22px; font-weight: bold; margin: 10px;}
 </style>
  <body>

  <div class="col-sm-4 usp" style="background-color: #E28413;">
    <h1><i class="fa fa-trophy" aria-hidden="true"></i> Largest Online Stockist</h1>
  </div>
  <div class="col-sm-4 usp" style="background-color: #FFBA08;">
    <h1><i class="fa fa-gbp" aria-hidden="true"></i> Best Price Available Online</h1>
  </div>
  <div class="col-sm-4 usp" style="background-color: #DD1C1A;">
    <h1><i class="fa fa-certificate" aria-hidden="true"></i> All major brands stocked</h1>
  </div>
  <div class="col-sm-12" style="background-color: #e0e0e0;">
    <h1 style="position: relative; color: #333;">Try Our Battery Finder Tool</h1>
  </div>
  <div class="col-sm-12">
    <div class="panel-body filter">
      <div class="col-sm-4">
        <h2>Step 1:</h2>
        <div class="panel panel-default">
          <div class="panel-heading">
            Select your Brand
          </div><!-- panel-heading -->
          <div class="panel-body">
            <ul class="button-group nav nav-pills" data-filter-group="brand">
              <li data-filter class="active" role="presentation"><a>Any</a></li>
              <li data-filter=".yuasa" role="presentation"><a>Yuasa</a></li>
              <li data-filter=".britesource" role="presentation"><a>BriteSource</a></li>
              <li data-filter=".mackwell" role="presentation"><a>Mackwell Batteries</a></li>
              <li data-filter=".elp" role="presentation"><a>ELP</a></li>
            </ul>
          </div>
        </div><!-- panel panel-default -->
      </div><!-- col-sm-4 -->
      <div class="col-sm-4">
        <h2>Step 2:</h2>
        <div class="panel panel-default">
          <div class="panel-heading">
            Select the number of Cells
          </div>
          <div class="panel-body">
            <ul class="button-group nav nav-pills" data-filter-group="cell">
              <li data-filter class="active" role="presentation"><a>Any</a></li>
              <li data-filter=".cell1" role="presentation"><a>1</a></li>
              <li data-filter=".cell2" role="presentation"><a>2</a></li>
              <li data-filter=".cell3" role="presentation"><a>3</a></li>
              <li data-filter=".cell4" role="presentation"><a>4</a></li>
              <li data-filter=".cell5" role="presentation"><a>5</a></li>
              <li data-filter=".cell6" role="presentation"><a>6</a></li>
            </ul>
          </div><!-- panel-body -->
        </div><!-- panel panel-default -->
      </div><!-- col-sm-4 -->
    </div><!-- panel-body filter -->
  </div><!-- col-sm-12 -->
  <div class="col-sm-12">
    <h2>Final Step:</h2>
    <div class="products">
      <?php include('products/britesource.php'); ?>
      <?php include('products/yuasa.php'); ?>
      <?php include('products/mackwell.php'); ?>
      <?php include('products/elp.php'); ?>
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

  </script>

  <script>!function(e,t,r,n,c,h,o){function a(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return r}try{for(c=e.getElementsByTagName('a'),o='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(h=c[n]).href.indexOf(o))>-1&&(h.href='mailto:'+a(h.href,t+o.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(h=c[n]).parentNode.replaceChild(e.createTextNode(a(h.getAttribute('data-cfemail'),0)),h)}catch(e){}}catch(e){}}(document);</script><script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  </body>
</html>
