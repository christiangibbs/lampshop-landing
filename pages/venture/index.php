<?php
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

   .portfolio-nav ul li {width: 100%;}
   .portfolio-items a {text-decoration: none; color: #000000;}
 </style>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<div class="row">
  <div class="col col-1">
    <div class="panel">
      <div class="panel-head" style="background-color: #119B3C; overflow: hidden">
        <div class="col col-p-8" style="overflow: hidden">
          <h2 style="padding: 23px;">Product Filter <span style="font-size: 0.9em;">(click to filter through categories)</span></h2>
        </div>
        <div class="col col-p-3">
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
          <div class="portfolio-nav">
            <a href="#" data-filter=".son-lamps">
            </a>
            <div class="col col-1">

            </div>
            <ul style="padding: 0px;">
              <div class="col col-8">
                <li data-filter=".son-lamps">
                  <img src="images/son-lamps.JPG" alt=""><br />
                  <b>SON Lamps</b>
                </li>
              </div>
              <div class="col col-8">
                <li data-filter=".mh-de-lamps">
                  <img src="images/mh-de-lamps.JPG" alt=""><br />
                  <b>MH-DE Lamps</b>
                </li>
              </div>
              <div class="col col-8">
                <li data-filter=".open-rated-hipe">
                  <img src="images/open-rated-hipe.JPG" alt=""><br />
                  <b>Open Rated HIPE</b>
                </li>
              </div>
              <div class="col col-8">
                <li data-filter=".pulse-start-lamps">
                  <img src="images/pulse-start-lamps.JPG" alt=""><br />
                  <b>Pulse Start Lamps</b>
                </li>
              </div>
              <div class="col col-8">
                <li data-filter=".high-wattage-lamps">
                  <img src="images/high-wattage-lamps.JPG" alt=""><br />
                  <b>High Wattage</b>
                </li>
              </div>
              <div class="col col-8">
                <li data-filter=".venture-capacitors">
                  <img src="images/venture-capacitors.JPG" alt=""><br />
                  <b>Venture Capacitors</b>
                </li>
              </div>
              <div class="col col-8">
                <img src="images/logo.png" alt="Venture Logo" style="width: 100%; margin-bottom: 25px;">
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
        include('products/son-lamps.php');
        include('products/mh-de-lamps.php');
        include('products/open-rated-hipe.php');
        include('products/pulse-start-lamps.php');
        include('products/high-wattage-lamps.php');
        include('products/venture-capacitors.php');
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
