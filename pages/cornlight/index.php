<?php
  $page = 'venture';
  include('../../components/head.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>

 <style media="screen">
 .product p {font-size: 14px;}
   .wrapper {width: 90%; margin: 10px auto;}
   .portfolio-item {float: left;}
   .product:hover{
     -webkit-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
      -moz-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
      box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
   }

   .points {color: #000000; line-height: 22px; font-size: 16px;}
   .fapoint {color: #209F96; font-size: 22px; vertical-align: middle;}

   .button-container {width: 90%; margin: 5px auto;}
    .button-container button {width: 100%; border: none; border-radius: 0px; padding: 20px; color: #fff; font-size: 18px; background-color: #FB6F3F;}
      .button-container button:hover {background-color: #e7663a; cursor: pointer;}

      .product {
        text-decoration: none;
      }
      .product img {
        opacity: 0.7;
      }
      .product:hover img {
        opacity: 1;
      }


   .portfolio-nav ul li {width: 100%;}
   .portfolio-items a {text-decoration: none; color: #000000;}
   .cat-filter ul .col-7 li b {font-size: 18px;}
 </style>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<div class="row">
  <div class="col col-p-4">
    <div class="row" style="width: 95%;">
      <div class="col col-1">
        <div class="panel">
          <div class="panel-head" style="background-color: #119B3C;">
            <h2 style="padding: 10px;">
              KEY POINTS
            </h2>
          </div>
          <div class="panel-body">
            <div class="panel-head product-list-item">
              <p class="points">UP TO 73% ENERGY SAVING</p>
            </div>

            <div class="panel-head product-list-item">
              <p class="points">360&deg; BEAM ANGLE</p>
            </div>

            <div class="panel-head product-list-item">
              <p class="points">PAYBACK IN 14 MONTHS</p>
            </div>

            <div class="panel-head product-list-item">
              <p class="points">&pound;90 ANUAL ENERGY SAVING PER LAMP</p>
            </div>

            <div class="panel-head product-list-item">
              <p class="points">3 YRAR GUARANTEE</p>
            </div>

            <div class="panel-head product-list-item">
              <p class="points">50,000 HR AVERAGE LAMP LIFE</p>
            </div>

            <div class="button-container">
              <a href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=led+panel">
                <button type="button" name="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> VIEW ALL PRODUCTS</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col col-p-8" style="float: right;">
    <div class="col col-1">
      <div class="panel">
        <div class="panel-head" style="background-color: #119B3C; overflow: hidden">
          <div class="col col-p-6" style="overflow: hidden">
            <h2 style="padding: 23px;">Select your original Lamp Wattage for an LED Upgrade</h2>
          </div>
          <div class="col col-p-5" style="float: right;">
            <div class="search-box" style="margin: 0px;">
              <form action="https://www.lampshoponline.com/catalogsearch/result/" method="get">
                  <div>
                      <!--<label for="search"></label>-->
                      <input class="input-box" type="text" name="q" value="" maxlength="128" placeholder="enter your search term" style="font-size: 16px;">
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
        </div>
        <div class="panel-body" style="overflow: hidden; background-color: #fff;">
          <div class="col col-1" style="overflow: none;">
            <div class="portfolio-nav cat-filter">
              <style media="screen">
                .cat-filter ul {margin: 0px;}
              </style>
              <a href="#" data-filter=".son-lamps">
              </a>
              <ul style="padding: 0px;">
                <div class="col col-7">
                  <li data-filter=".w70">
                    <b>70W</b> 20W
                  </li>
                </div>
                <div class="col col-7">
                  <li data-filter=".w100">
                    <b>100W</b> 30W
                  </li>
                </div>
                <div class="col col-7">
                  <li data-filter=".w150">
                    <b>150W</b> 40W
                  </li>
                </div>
                <div class="col col-7">
                  <li data-filter=".w250">
                    <b>250W</b> 80/100W
                  </li>
                </div>
                <div class="col col-7">
                  <li data-filter=".w400">
                    <b>400W</b> 100/120W
                  </li>
                </div>
                <div class="col col-7">
                  <li data-filter=".w600">
                    <b>600W</b> 150/200W
                  </li>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="portfolio-items" style="padding-top: 10px;">

        <?php
          include('products/son.php');
          include('products/led.php');
         ?>
      </div>
    </div>
  </div>

</div>


<script>
  $(document).ready(function(){
    $('.portfolio-items').isotope({
      itemSlector: '.item',
      layoutMode: 'fitRows',
      filter: '.none'
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
