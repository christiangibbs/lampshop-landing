<?php
  include('../../components/head.php');
 ?>
 <style media="screen">
   .col {margin: 0% 0 0% 1.5%;}
   .panel {overflow: visible; }
   .panel-body {padding: 0px !important;}
   .product-nav img {max-height: 100px; height: 100px; opacity: 0.5; margin: 10px;}
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
     padding:0;
     overflow: none;
     z-index: 200;
     text-align: center;
     display:none;
       width: 100%;
     position: absolute;
     top: 120px;
     left: 0px;
   }

 </style>

<div class="row">
  <div class="col col-1">
    <div class="panel panel-default">
      <div class="panel-head" style="background-color: #119B3C;">
        <h2 style="padding: 10px;">
          Tridonic Control Gear
        </h2>
      </div>
      <div class="panel-body">
        <nav class="product-nav">
      	<ul>
      		<li>
            <a href="#">
              <img src="https://www.lampshoponline.com/media/catalog/category/non-dimmable-hf-ballasts__51257.jpg" alt="">
            </a>
            <?php
              include('categories/non-dimmable.php');
             ?>
      		</li>
          <li>
            <a href="#">
              <img src="https://www.lampshoponline.com/media/catalog/category/Untitled__14028.1384262783.800.800.jpg" alt="">
            </a>
            <?php
              include('categories/dimmable.php');
             ?>
      		</li>
          <li>
            <a href="#">
              <img src="https://www.lampshoponline.com/media/catalog/category/EXISTALITE_XCU414.3E_EMERGENCY_COMBO_UNIT.jpg" alt="">
            </a>
            <?php
              include('categories/combo-ballasts.php');
             ?>
      		</li>
          <li>
            <a href="#">
              <img src="https://www.lampshoponline.com/media/catalog/category/4__47405.1382695069.800.800_category.png" alt="">
            </a>
      		</li>
          <li>
            <a href="#">
              <img src="https://www.lampshoponline.com/media/catalog/category/non-dimmable-hf-ballasts__51257.jpg" alt="">
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


 <?php
   include('../../components/footer.php');
  ?>
