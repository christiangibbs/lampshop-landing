<?php
  include('../../components/head.php');
  $panel = "Tridonic are the number one manufacturers of control gear and lighting control systems.";
 ?>
 <style media="screen">
   .col {margin: 0% 0 0% 1.5%;}
   .panel {overflow: visible; }
   .panel-body {padding: 0px !important;}
   .product-nav img {max-height: 100px; height: 100px; opacity: 0.8; margin: 10px;}
   .product-nav {
     text-align:center;
     width: 100%;
     background: #ffffff;
     padding: 0;
     margin: 0;
     position:relative;
   }

   .product-nav ul {
     background: #ffffff;
     list-style:none;
     padding:0 20px;
     margin: 0;
   }


   .product-nav ul li {
     display: inline-block;
   }


   .product-nav ul li a {
     color:#333333;
     display:block;
     padding:0px 40px;
     text-decoration:none;
     float: left;
   }

   .product-nav ul li:hover img {
     opacity: 1;
   }


   .product-nav ul li:hover > a{
       color:#FFFFFF;
   }

   .product-nav ul li:hover > ul {
     display:block;
   }

   .product-nav ul ul {
     background: #ffffff;
     padding:20px 0px;
     overflow: none;
     z-index: 200;
     text-align: center;
     display:none;
       width: 100%;
     position: absolute;
     top: 165px;
     left: 0px;
   }

   .product-nav ul li:hover ul a {
     text-align: center;
     padding: 0px !important;
     width: 100%;
   }

 </style>

<div class="row">
  <div class="col col-1">
    <div class="panel panel-default">
      <div class="panel-head" style="background-color: #ffffff; border: 2px solid #119B3C;">
        <h2 style="padding: 10px; color: #119B3C;">
          Tridonic Control Gear
        </h2>
      </div>
      <div class="panel-body">
        <nav class="product-nav">
      	<ul>
      		<li>
            <a href="https://www.lampshoponline.com/control-gear/hf-ballasts-non-dimmable.html">
              <div class="col col-1">
                <div class="panel panel-default">
                  <div class="panel-heading" style="background-color: #119B3C;">
                    <h4 style="padding: 10px;">HF Ballasts - Non Dimmable</h4>
                  </div>
                  <div class="panel-body">
                    <img src="https://www.lampshoponline.com/media/catalog/category/TA_EVG_F_PC_TC_PRO.jpg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <?php
              include('categories/non-dimmable.php');
             ?>
      		</li>
          <li>
            <a href="https://www.lampshoponline.com/control-gear/hf-ballasts-dimmable.html">
              <div class="col col-1">
                <div class="panel panel-default">
                  <div class="panel-heading" style="background-color: #119B3C;">
                    <h4 style="padding: 10px;">HF Ballasts - Dimmable</h4>
                  </div>
                  <div class="panel-body">
                    <img src="https://www.lampshoponline.com/media/catalog/category/tridonic-pca-t5c-eco__81363.jpg" alt="">
                  </div>
                </div>
              </div>

            </a>
            <?php
              include('categories/dimmable.php');
             ?>
      		</li>
          <li>
            <a href="https://www.lampshoponline.com/control-gear/emergency-combo-ballasts.html">
              <div class="col col-1">
                <div class="panel panel-default">
                  <div class="panel-heading" style="background-color: #119B3C;">
                    <h4 style="padding: 10px;">Emergency Combo Ballasts</h4>
                  </div>
                  <div class="panel-body">
                    <img src="https://www.lampshoponline.com/media/catalog/category/tridonic-pc-combo__63287.jpg" alt="">
                  </div>
                </div>
              </div>

            </a>
            <?php
              include('categories/combo-ballasts.php');
             ?>
      		</li>
          <li>
            <a href="https://www.lampshoponline.com/control-gear/switch-start-chokes.html">
              <div class="col col-1">
                <div class="panel panel-default">
                  <div class="panel-heading" style="background-color: #119B3C;">
                    <h4 style="padding: 10px;">Switch Start Chokes</h4>
                  </div>
                  <div class="panel-body">
                    <img src="https://www.lampshoponline.com/media/catalog/category/4__47405.1382695069.800.800_category.png" alt="">
                  </div>
                </div>
              </div>
            </a>
      		</li>
          <li>
            <a href="https://www.lampshoponline.com/control-gear/emergency-inverter-modules.html">
              <div class="col col-1">
                <div class="panel panel-default">
                  <div class="panel-heading" style="background-color: #119B3C;">
                    <h4 style="padding: 10px;">Emergency Inverter</h4>
                  </div>
                  <div class="panel-body">
                    <img src="https://www.lampshoponline.com/media/catalog/category/tridonic-em-basic.jpg" alt="">
                  </div>
                </div>
              </div>
            </a>
            <?php
              include('categories/emergency-inverter.php');
             ?>
      		</li>
      	</ul>
      </nav>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col col-1">
    <div class="panel">
      <div class="panel-head" style="background-color: #808080;">
        <h2 style="padding: 10px;">
          <i class="fa fa-search" aria-hidden="true"></i> FIND THE RIGHT PRODUCT USING OUR PRODUCT FINDER TOOL
        </h2>
      </div>
      <div class="panel-body" style="overflow: hidden;">
        <div class="col col-2">
          <h2 style="font-weight: bold; color: black; margin-top: 10px;">Simply enter your reference number below</h2><br />
            <div class="search-box">
              <form action="https://www.lampshoponline.com/catalogsearch/result/" method="get">
                  <div>
                      <!--<label for="search"></label>-->
                      <input class="input-box" type="text" name="q" value="" maxlength="128" placeholder="enter reference number" style="font-size: 16px;">
                      <button type="submit" title="Search" class="button">
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
          </div>
        </div>
        <div class="col col-2">
          <img src="images/control-gear-banner.jpg" alt="Need Help?" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>
</div>

<style media="screen">
  footer .col {margin: 0% 0 0% 1.5%;}

</style>
<footer>
  <div class="row">
    <div class="col col-3">
      <div class="panel panel-padding" style="margin-top: 0px; padding-top: 0px;">
        <div class="panel-head" style="background-color: #808080;">
          <h2 style="padding: 10px;"><i class="fa fa-check" aria-hidden="true"></i> Recommended Brand    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></h2>
        </div>
        <div class="panel-body" style="min-height: 60px; font-size: 16px;">
          <?php echo $panel; ?>
        </div>
      </div>
    </div>
    <div class="col col-3">
      <div class="panel panel-padding" style="margin-top: 0px; padding-top: 0px;">
        <div class="panel-head" style="background-color: #FD727A;">
          <h2 style="padding: 10px;"><i class="fa fa-truck" aria-hidden="true"></i> FREE DELIVEY on orders over &pound;40</h2>
        </div>
        <div class="panel-body" style="min-height: 60px; font-size: 16px;">
          If you spend more than £40 we will happily deliver your order for free.
          *Mainland UK only.
        </div>
      </div>
    </div>
    <div class="col col-3">
      <div class="panel panel-padding" style="margin-top: 0px; padding-top: 0px;">
        <div class="panel-head" style="background-color: #209F96;">
          <h2 style="padding: 10px;"><i class="fa fa-calendar" aria-hidden="true"></i> 30 DAYS HASSLE FREE RETURN</h2>
        </div>
        <div class="panel-body" style="min-height: 60px; font-size: 16px;">
          Bought the wrong item? We'll allow up to 30 days to return with your money back
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col col-1">
      <div class="panel panel-padding">
        <div class="panel-head">
          <div class="panel-head" style="background-color: #808080;">
            <h2 style="padding: 10px;"><i class="fa fa-smile-o" aria-hidden="true"></i> See what our customers say about us</h2>
          </div>
        </div>
        <div class="panel-body">
          Check out our reviews on reviews.co.uk below.
          This is an independent website so we have no control over what is written good or bad.
          Just honest feedback from real customers.

          <script src="https://widget.reviews.co.uk/vertical/dist.js"></script>
          <div id="full-page-widget" style="width:100%;"></div>
          <script>
          verticalWidget('full-page-widget',{
            store: 'lampshoponline',
            primaryClr: '#11CD6B',
            layout:'fullWidth',
            height: 500,
            numReviews: 21
          });
          </script>
        </div>
      </div>
    </div>
  </div>
</footer>
<style media="screen">
  .review_text {font-size: 16px;}
</style>
