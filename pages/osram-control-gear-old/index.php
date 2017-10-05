<?php
  $page = 'venture';
  include('../../components/head.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>

<style media="screen">
  .col {margin: 0% 0 0% 1.5%;}
  .product p {font-size: 14px;}
  .wrapper {width: 90%; margin: 10px auto;}
  .portfolio-item {float: left;}
  .product:hover{
   -webkit-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
  }

  .product .panel-body {text-align: center;}
  .product img {max-width: 100%; height: 150px; margin: 0 auto;}
  .cat-filter img {max-width: 100%; height: 150px;}

  .portfolio-nav ul li {width: 100%;}
  .portfolio-items a {text-decoration: none; color: #000000;}
  .cat-filter ul .col-6 li b {font-size: 14px;}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
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
          <h2 style="font-weight: bold; color: black; margin-top: 10px;">Simply enter your reference number below</h2><br>
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

<div class="row">
  <div class="col col-1">
    <div class="panel">
      <div class="panel-head" style="background-color: #119B3C; overflow: hidden">
        <div class="col col-p-12" style="overflow: hidden">
          <h2 style="padding: 23px;">Product Filter <span style="font-size: 0.9em;">(click to filter through categories)</span></h2>
        </div>
      </div>

      <style media="screen">

      </style>
      <div class="panel-body" style="overflow: hidden; background-color: #fff;">
        <div class="col col-1" style="overflow: none;">
          <div class="portfolio-nav cat-filter">
            <ul style="padding: 0px;">
              <div class="col col-4">
                <li data-filter=".hf-ballasts-nd">
                  <div class="panel panel-default">
                  <div class="panel-heading" style="background-color: #119B3C;">
                    <h4 style="padding: 10px;">HF Ballasts - Non Dimmable</h4>
                  </div>
                  <div class="panel-body">
                    <img src="https://www.lampshoponline.com/media/catalog/category/TA_EVG_F_PC_TC_PRO.jpg" alt="">
                  </div>
                </div>
                </li>
              </div>
              <div class="col col-4">
                <li data-filter=".hf-ballasts-d">
                  <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #119B3C;">
                      <h4 style="padding: 10px;">HF Ballasts - Dimmable</h4>
                    </div>
                    <div class="panel-body">
                      <img src="https://www.lampshoponline.com/media/catalog/category/tridonic-pca-t5c-eco__81363.jpg" alt="">
                    </div>
                  </div>
                </li>
              </div>
              <div class="col col-4">
                <li data-filter=".hf-ballasts-d">
                  <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #119B3C;">
                      <h4 style="padding: 10px;">Electronic HID Ballasts</h4>
                    </div>
                    <div class="panel-body">
                      <img src="https://www.lampshoponline.com/media/catalog/category/hid-ballasts__49555.jpg" alt="">
                    </div>
                  </div>
                </li>
              </div>
              <div class="col col-4">
                <li class="active" data-filter="*">
                  <button type="submit" title="Search" class="button" style="width: 100%;">
                      <span style="color: #fff; font-weight: bold;"><i class="fa fa-undo"></i> Reset Filter</span>
                 </button>
                </li>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-items" style="padding-top: 10px;">

      <?php
        include('products/combo-ballasts.php');
        include('products/dimmable.php');
        include('products/emergency-inverter.php');
        include('products/non-dimmable.php');
       ?>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    $('.portfolio-items').isotope({
      itemSlector: '.item',
      layoutMode: 'fitRows'
    });

    $('.portfolio-nav ul li').click(function(){
      $('.portfolio-nav a').removeClass('active');
      $(this).addClass('active');

      var selector = $(this).attr('data-filter');
      $('.portfolio-items').isotope({
        filter: selector
      });
      return false;
    });
  });
</script>

<style>

.portfolio-nav ul  li {
    text-align: center;
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-block;
    background-color: #fff;
    cursor: pointer;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    transition: all .5s ease;
}
.portfolio-nav ul li img {
  opacity: 0.6;
}
.portfolio-nav ul li:hover img {
  opacity: 1;
}
.active img {
  opacity: 1;
}

</style>
 <?php
   include('../../components/footer.php');
  ?>
