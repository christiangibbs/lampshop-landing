<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <style media="screen">
    body {background-color: #f7f7f7; font-family: lato;}
    .panel-heading, .panel-body {border-radius: 0px;}
    .filter-container .panel-heading {background-image: none; background-color: #1E9A41; color: #ffffff;}
    .filter-container .panel-heading h2 {margin: 0px;}
    .filter .panel {border: 0px;}
    .filter .panel-heading {background-image: none; background-color: #1E9A41; color: #ffffff;}
    .nav-pills>li>a {color: #333333;}
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {background-color: #FD6F35;}
    .products .product {text-align: center; height: 350px;}
    .products .product .thumbnail {margin-bottom: 0px;}
    .products .panel-footer {overflow:hidden;}
    .temp-small {
      height: 20px;
      width: 20px;
      border-radius: 100px;
      border: 2px solid #333333;
      margin: 5px;
      float: left;
    }
    .temp {
      height: 100px;
      width: 100px;
      border-radius: 100px;
      border: 5px solid #333333;
      margin: 0 auto;
    }

   .temp827 {
     background: -webkit-radial-gradient(#fff, #FF9900); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #FF9900); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #FF9900); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #FF9900); /* Standard syntax (must be last) */
   }

   .temp830 {
     background: -webkit-radial-gradient(#fff, #FFC108); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #FFC108); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #FFC108); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #FFC108); /* Standard syntax (must be last) */
   }

   .temp835 {
     background: -webkit-radial-gradient(#fff, #D1D1D1); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #D1D1D1); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #D1D1D1); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #D1D1D1); /* Standard syntax (must be last) */
   }

   .temp840 {
     background: -webkit-radial-gradient(#fff, #D2F7FF); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #D2F7FF); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #D2F7FF); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #D2F7FF); /* Standard syntax (must be last) */
   }

   .temp865 {
     background: -webkit-radial-gradient(#fff, #BCF0FD); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #BCF0FD); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #BCF0FD); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #BCF0FD); /* Standard syntax (must be last) */
   }

  </style>
  <body>
  <div class="col-sm-12">
    <div class="panel-body filter">
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Filter by Wattage
          </div><!-- panel-heading -->
          <div class="panel-body">
            <ul class="button-group nav nav-pills" data-filter-group="wattage">
              <li data-filter class="active" role="presentation"><a href="#">Any</a></li>
              <li data-filter=".w16" role="presentation"><a href="#">16W</a></li>
              <li data-filter=".w21" role="presentation"><a href="#">21W</a></li>
              <li data-filter=".w28" role="presentation"><a href="#">28W</a></li>
              <li data-filter=".w38" role="presentation"><a href="#">38W</a></li>
              <li data-filter=".w55" role="presentation"><a href="#">55W</a></li>
            </ul>
          </div>
        </div><!-- panel panel-default -->
      </div><!-- col-sm-4 -->
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Filter by Cap Type
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
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Filter by Brand
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
