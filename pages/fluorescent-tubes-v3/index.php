<?php
  $page = '';
  include('../../components/head-minimal.php');
  $panel = "We recommend any of our Venture products as they are a premium brand and the highest quality.";
 ?>
 <div class="col-sm-12 brands">
   <div class="col-sm-2">
     <img src="../../images/logos/philips-logo.png" alt="Philips">
   </div>
   <div class="col-sm-2">
     <img src="../../images/logos/ge-logo.png" alt="GE">
   </div>
   <div class="col-sm-2">
     <img src="../../images/logos/sylvania-logo.png" alt="Sylvania">
   </div>
   <div class="col-sm-2">
     <img src="../../images/logos/osram-logo.png" alt="Osram">
   </div>
   <div class="col-sm-2">
     <img src="../../images/logos/philips-logo.png" alt="">
   </div>
   <div class="col-sm-2">
     <h4 style="font-weight: bold;">And More!</h4>
   </div>
 </div>
<style media="screen">
  .product img {max-height: 150px; min-height: 150px;}
  .product .thumbnail {margin-bottom:0px; border-radius: 0px;}
  .product h3 {margin: 0px;}
  .product .panel {border-radius:0px;}
  .products .product {height: auto;}
</style>

<style media="screen">
  .usp {text-align: center; color: #ffffff;}
  .usp h1 {font-size: 22px; font-weight: bold; margin: 10px;}
</style>
<div class="col-sm-12" style="background-color: #ffffff; padding: 0px;">
  <div class="col-sm-6" style="background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left, #e3e3e3 , white); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right, #e3e3e3, white); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, #e3e3e3, white); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right, #e3e3e3, white); /* Standard syntax */ height: 185px;">
    <form class="form-inline" action="https://www.lampshoponline.com/catalogsearch/result/" method="get" style="margin-top: 50px;">
      <div class="form-group" style="width: 100%;">
       <input class="form-control" type="text" name="q" value="" maxlength="128" placeholder="enter reference number" style="height: 80px; font-size: 34px;">
       <button type="submit" title="Search" class="btn btn-warning">
          <i class="fa fa-search" aria-hidden="true" style="color: white; font-size:50px"></i>
       </button>
      </div>
      <script type="text/javascript">
      //<![CDATA[
          var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search...');
          searchForm.initAutocomplete('https://www.lampshoponline.com/catalogsearch/ajax/suggest/', 'search_autocomplete');
      //]]>
      </script>
    </form>
  </div>
  <div class="col-sm-6" style="padding: 0px;">
    <img src="images/banner.jpg" alt="" style="float:right;">
  </div>
</div>

<div class="col-sm-12" style="height:2px; width: 100%; background-color: #e3e3e3; margin-bottom: 10px;">

</div>
<?php
  include('parts/col-left.php');
  include('parts/col-middle.php');
  include('parts/col-right.php');
 ?>
