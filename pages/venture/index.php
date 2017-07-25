<?php
  include('../../components/head.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>

 <style media="screen">
   .col {margin: 0% 0 0% 1.5%;}
   .wrapper {width: 90%; margin: 10px auto;}
   .portfolio-item {float: left;}
   .product:hover{
     -webkit-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
      -moz-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
      box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
   }

   .portfolio-items a {text-decoration: none; color: #000000;}
 </style>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<div class="row">
  <div class="col col-1">
    <div class="panel">
      <div class="panel-head"  style="background-color: #119B3C;">
        <h2 style="padding: 10px;">Product Filter</h2>
      </div>
      <div class="panel-body">
        <div class="portfolio-nav">
          <ul>

            <li data-filter=".son-lamps">
              <img src="images/son-lamps.JPG" alt=""><br />
              SON Lamps
            </li>
            <li data-filter=".mh-de-lamps">
              <img src="images/mh-de-lamps.JPG" alt=""><br />
              MH-DE Lamps
            </li>
            <li data-filter=".open-rated-hipe">
              <img src="images/open-rated-hipe.JPG" alt=""><br />
              Open Rated HIPE
            </li>
            <li data-filter=".pulse-start-lamps">
              <img src="images/pulse-start-lamps.JPG" alt=""><br />
              Pulse Start Lamps
            </li>
            <li data-filter=".high-wattage-lamps">
              <img src="images/high-wattage-lamps.JPG" alt=""><br />
              High Wattage Lamps
            </li>
            <li data-filter=".venture-capacitors">
              <img src="images/venture-capacitors.JPG" alt=""><br />
              Venture Capacitors
            </li>
            <li class="active" data-filter="*">All Products</li>
          </ul>
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
      $('.portfolio-nav ul li').removeClass('active');
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
    padding: 10px 15px;
    border: 2px solid #ffffff;
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
.active {
    border: 2px solid gold !important;
}

</style>
 <?php
   include('../../components/footer.php');
  ?>
