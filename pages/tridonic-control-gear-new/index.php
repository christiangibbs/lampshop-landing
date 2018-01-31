<?php
  $page = "Tridonic Control Gear";
  include('../../components/head-minimal.php');
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
.easy-autocomplete {width: 100%;}

 </style>
 <link rel="stylesheet" href="../../assets/slick-1.6.0/slick.css">
  <link rel="stylesheet" href="../../assets/slick-1.6.0/slick-theme.css">
 <script src="../../assets/slick-1.6.0/slick.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
 <!-- JS file -->
 <script src="../../assets/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js"></script>

 <!-- CSS file -->
 <link rel="stylesheet" href="../../assets/EasyAutocomplete-1.3.5/easy-autocomplete.min.css">

 <!-- Additional CSS Themes file - not required-->
 <link rel="stylesheet" href="../../assets/EasyAutocomplete-1.3.5/easy-autocomplete.themes.min.css">

 <style media="screen">
    hr {
      margin-top: 5px;
      margin-bottom: 1px;
    }
    .products {
      background-color: #e3e3e3;
    }

    .slick-prev:before, .slick-next:before {
      color: black;
    }

   .products .col-sm-6 {
     text-align: center;
   }
   .products .col-sm-6 .col-md-12 {
     background-color: #ffffff;
   }

   .products .col-sm-6 .col-md-12 .price {
     font-size: 42px;
     color: #ff6f28;
     margin-bottom: 0px;
   }

   .products .col-sm-6 .col-md-12 .price::first-letter {
     font-size: 20px;
   }

   .products .col-sm-6 .col-md-12 .exc-vat {
     font-size: 12px;
     color: #a6a6a6;
   }

   .products .btn {
     background-image: none;
     background-color: #ff6f28;
     border-radius: 0px;
   }

   .products .thumbnail {
     border: none;
   }
 </style>
</head>
<body>
  <!-- <div class="row">
    <form class="form-inline" action="https://www.lampshoponline.com/catalogsearch/result/" method="get">
      <div class="col-xs-6">
          <div class="input-group">
              <input type="text" class="form-control" id="provider-json"/>
              <button type="submit" title="Search" class="input-group-addon btn btn-warning">
                 <i class="fa fa-search" aria-hidden="true" style="color: white; font-size:18px"></i>
              </button>
          </div>
      </div>
    </form>
  </div>

    <script type="text/javascript">
    //<![CDATA[
        var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search...');
        searchForm.initAutocomplete('https://www.lampshoponline.com/catalogsearch/ajax/suggest/', 'search_autocomplete');
    //]]>
    </script>

</div> -->
<?php

  $products = [
    array(
      "id" => "4612",
      "title" => "PC 2x58 T8 Pro Sl",
      "url" => "https://www.lampshoponline.com/tridonic-pc-2x58-t8-pro-sl.html",
      "image" => "PC 2x58 T8 Pro Sl.jpg"
    ),
    array(
      "id" => "4613",
      "title" => "PC 3/4x18 T8 Pro Lp",
      "url" => "https://www.lampshoponline.com/tridonic-pc-3-4x18-t8-pro-lp.html",
      "image" => "PC 3-4x18 T8 Pro Lp.jpg"
    ),
    array(
      "id" => "1975",
      "title" => "PC 1/2x26-42 TC Pro",
      "url" => "https://www.lampshoponline.com/tridonic-pc-1-2x26-42-tc-pro.html",
      "image" => "ta_evg_f_pc_tc_pro__71590.jpg"
    ),
    array(
      "id" => "153",
      "title" => "PC 2/58 T8 Pro",
      "url" => "https://www.lampshoponline.com/tridonic-pc-2-58-t8-pro.html",
      "image" => "ta_evg_f_pc_t8_pro_sl_tarsus__68258.jpg"
    ),
    array(
      "id" => "4611",
      "title" => "PC 2x36 T8 Pro Sl",
      "url" => "https://www.lampshoponline.com/tridonic-pc-2x36-t8-pro-sl.html",
      "image" => "PC 2x36 T8 Pro Sl.jpg"
    ),
    array(
      "id" => "159",
      "title" => "PC 1/58 T8 Pro",
      "url" => "https://www.lampshoponline.com/tridonic-pc-1-58-t8-pro.html",
      "image" => "ta_evg_f_pc_t8_pro_sl_tarsus__10033.jpg"
    ),
    array(
      "id" => "152",
      "title" => "PC 2/70 T8 Pro",
      "url" => "https://www.lampshoponline.com/tridonic-pc-2-70-t8-pro.html",
      "image" => "PC 2-70 T8 Pro.png"
    ),
    array(
      "id" => "173",
      "title" => "PC 2/14-21-28-35 T5 Pro Lp",
      "url" => "https://www.lampshoponline.com/tridonic-pc-2-14-21-28-35-t5-pro-lp.html",
      "image" => "PC 2-14-21-28-35 T5 Pro Lp.jpg"
    ),
    array(
      "id" => "184",
      "title" => "PC 1x26 W Basic Square",
      "url" => "https://www.lampshoponline.com/tridonic-pc-1x26-w-basic-square.html",
      "image" => "PC 1x26 W Basic Square.jpg"
    ),
    array(
      "id" => "4608",
      "title" => "PC 1x58 T8 Pro Lp",
      "url" => "https://www.lampshoponline.com/tridonic-pc-1x58-t8-pro-lp.html",
      "image" => "PC 1x58 T8 Pro Lp.jpg"
    )
  ]
 ?>

<div class="col-sm-12" style="background-color: #ffffff; text-align: center;">
  <img src="images/tridonic-logo.png" alt="GE Logo" style="height: 75px; padding: 10px;">
</div>
<div class="col-sm-12" style="background-color: #229BDF; text-align: center;">
  <h1 style="position: relative; color: #ffffff; font-size: 20px; margin: 0px; line-height: 30px; font-weight: bold;">GE Watt-Miser&trade; (2D Lamps)</h1>
</div>
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-title">
      <h1>Our Most Popular Tridonic Control Gear Products</h1>
    </div>
    <div class="panel-body" style="background-color: #e3e3e3;">
      <div class="products">
        <?php foreach($products as $product):?>
        <div class="col-sm-6">
          <div class="col-md-12">
            <img src="images/products/<?= $product['image'] ?>" alt="<?= $product['title'] ?>">
            <hr />
            <div class="thumbnail">
              <div class="caption">
                <h5 style="font-weight: bold;"><?= $product['title'] ?></h5>
                <p class="price"><span id="price<?= $product['id']?>"></span></p>
                <p class="exc-vat">Excl.Vat</p>
                <span id="rating<?= $product['id']?>"></span>
                <a class="btn btn-warning" href="<?= $product['url'] ?>">View Product</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach;?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var options = {
	url: "resources/products.json",

	getValue: "name",

	list: {
		match: {
			enabled: true
		}
	}
};

$("#provider-json").easyAutocomplete(options);
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.products').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 6,
    autoplay: true,
    autoplaySpeed: 4500
  });
});
</script>

<script type="text/javascript">
      $(document).ready(function(){
        <?php foreach ($products as $product): ?>
          $( "#price<?= $product['id'] ?>" ).load( "<?= $product['url'] ?> #price-excluding-tax-<?= $product['id']?>" );
          $( "#rating<?= $product['id'] ?>" ).load( "<?= $product['url'] ?> .review-price-box" );
        <?php endforeach; ?>
      });
</script>

<?php include('../../components/footer-minimal.php'); ?>
