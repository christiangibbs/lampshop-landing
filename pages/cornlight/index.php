<?php
  $page = "LED Fittings";
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
 </style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>

<div class="col-sm-10 col-sm-offset-1">
  <div class="panel panel-default most-popular">
    <div class="panel-title">
      <h2>Our Most Popular Cornlights</h2>
    </div>
    <div class="panel-body">
      <div class="col-sm-2">
        <div class="panel panel-default">
          <div class="panel-title">
            <h3>120W LED Corn Light</h3>
          </div>
          <div class="panel-body">
            <img src="https://www.lampshoponline.com/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/c/o/cornlight_pro_pic_copy__66636.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="panel panel-default">
          <div class="panel-title">
            <h3>80W LED Corn Light</h3>
          </div>
          <div class="panel-body">
            <img src="https://www.lampshoponline.com/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/c/o/cornlight_pro_pic_copy__66636.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="panel panel-default">
          <div class="panel-title" style="background-color: #ff6f28;">
            <h3>100W LED Corn Light</h3>
          </div>
          <div class="panel-body">
            <img src="https://www.lampshoponline.com/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/c/o/cornlight_pro_pic_copy__66636.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="panel panel-default">
          <div class="panel-title">
            <h3>30W LED Corn Light e27</h3>
          </div>
          <div class="panel-body">
            <img src="https://www.lampshoponline.com/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/c/o/cornlight_pro_pic_copy__66636.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="panel panel-default">
          <div class="panel-title">
            <h3>60W LED Corn Light</h3>
          </div>
          <div class="panel-body">
            <img src="https://www.lampshoponline.com/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/c/o/cornlight_pro_pic_copy__66636.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="panel panel-default">
          <div class="panel-title">
            <h3>20W LED Corn Light e27</h3>
          </div>
          <div class="panel-body">
            <img src="https://www.lampshoponline.com/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/c/o/cornlight_pro_pic_copy__66636.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-10 col-sm-offset-1">
  <div class="col-sm-3">
    <h4 style="font-weight: bold;">Know which LED Cornlight you need?</h4>
    <ul class="button-group nav nav-pills" data-filter-group="son-wattage" style="margin-bottom: 15px;">
      <li role="presentation" data-filter=".w70"><a>Select your Cornlight from the list below</a></li>
    </ul>
    <?php
      include('products/led-thumb.php');
     ?>
  </div>
  <div class="col-sm-7">
    <h4 style="font-weight: bold;">Choose which wattage SON or Metal Halide you are replacing to show the LED alternative</h4>
    <ul class="button-group nav nav-pills" data-filter-group="son-wattage" style="margin-bottom: 15px;">
      <li role="presentation" data-filter=".w70"><a>Use our Wattage filter to find your product replacement</a></li>
    </ul>
    <div class="products col-sm-12">
      <?php
        include('products/led.php');
       ?>
    </div>
  </div>
  <div class="col-sm-2">
    <style media="screen">
      .filter ul li {width: 100%; text-align: center; font-size: 22px;}
      .filter ul li a {padding: 0px; font-size: 24px;}
      .filter ul li a div {padding: 10px;}
    </style>
    <div class="col-sm-12 filter">
      <h4 style="font-weight: bold;">Filter:</h4><br />
      <ul class="button-group nav nav-pills" data-filter-group="son-wattage">

        <li role="presentation" data-filter=".w70">
          <a>
            <div class="panel panel-default">
              <i class="fa fa-bolt" aria-hidden="true" style="color: #fef5b5"></i> 70W
            </div>
          </a>
        </li>
        <li role="presentation" data-filter=".w100">
          <a>
            <div class="panel panel-default">
              <i class="fa fa-bolt" aria-hidden="true" style="color: #fff297"></i> 100W
            </div>
          </a>
        </li>
        <li role="presentation" data-filter=".w200">
          <a>
            <div class="panel panel-default">
              <i class="fa fa-bolt" aria-hidden="true" style="color: #ffef82"></i> 200W
            </div>
          </a>
        </li>
        <li role="presentation" data-filter=".w150">
          <a>
            <div class="panel panel-default">
              <i class="fa fa-bolt" aria-hidden="true" style="color: #ffeb61"></i> 150W
            </div>
          </a>
        </li>
        <li role="presentation" data-filter=".w250">
          <a>
            <div class="panel panel-default">
              <i class="fa fa-bolt" aria-hidden="true" style="color: #ffe743"></i> 250W
            </div>
          </a>
        </li>
        <li role="presentation" data-filter=".w400">
          <a>
            <div class="panel panel-default">
              <i class="fa fa-bolt" aria-hidden="true" style="color: #ffe324"></i> 400W
            </div>
          </a>
        </li>
        <li role="presentation" data-filter=".w600">
          <a>
            <div class="panel panel-default">
              <i class="fa fa-bolt" aria-hidden="true" style="color: #ffde00"></i> 600W
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $('.filter').isotope({
      layoutMode: 'fitRows'
    });

    $('.filter ul li a div').click(function(){
      $('.filter ul li a div').removeClass('active');
      $(this).addClass('active');

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

<script type="text/javascript">


</script>
<?php include('../../components/footer-minimal.php'); ?>
