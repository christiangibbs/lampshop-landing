<?php
  $page = '16W 2D Lamps';
  include('../../components/head-minimal.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>

 <style media="screen">
   .usp {text-align: center; color: #ffffff;}
   .usp h1 {font-size: 22px; font-weight: bold; margin: 10px;}
 </style>
  <body>

  <div class="col-sm-12">

    <div class="panel-body filter">
      <div class="col-sm-6">
        <h2>Step 1:</h2>
        <div class="panel panel-default">
          <div class="panel-heading">
            Select your Cap Type
          </div>
          <div class="panel-body">
            <ul class="button-group nav nav-pills" data-filter-group="pin">
              <li data-filter class="active" role="presentation"><a href="#">Any</a></li>
              <li data-filter=".pin2" role="presentation"><a href="#">2 Pin</a></li>
              <li data-filter=".pin4" role="presentation"><a href="#">4 Pin</a></li>
            </ul>
          </div><!-- panel-body -->
        </div><!-- panel panel-default -->
      </div><!-- col-sm-4 -->
      <div class="col-sm-6">
        <h2>Step 2:</h2>
        <div class="panel panel-default">
          <div class="panel-heading">
            Select your Brand
          </div>
          <div class="panel-body">
            <ul class="button-group nav nav-pills" data-filter-group="brand">
              <li data-filter class="active" role="presentation"><a href="#">Any</a></li>
              <li data-filter=".branded" role="presentation"><a href="#">Branded</a></li>
              <li data-filter=".ge" role="presentation"><a href="#">GE</a></li>
              <li data-filter=".bell" role="presentation"><a href="#">Bell</a></li>
              <li data-filter=".philips" role="presentation"><a href="#">Philips</a></li>
              <li data-filter=".osram" role="presentation"><a href="#">Osram</a></li>
              <li data-filter=".sylvania" role="presentation"><a href="#">Sylvania</a></li>
            </ul>
          </div><!-- panel-body -->
        </div><!-- panel panel-default -->
      </div><!-- col-sm-4 -->
    </div><!-- panel-body filter -->
  </div><!-- col-sm-12 -->
  <div class="col-sm-12">
    <h2>Final Step:</h2>
    <div class="products">
      <?php include('products/branded.php'); ?>
      <?php include('products/ge.php'); ?>
      <?php include('products/bell.php'); ?>
      <?php include('products/philips.php'); ?>
      <?php include('products/osram.php'); ?>
      <?php include('products/sylvania.php'); ?>
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
