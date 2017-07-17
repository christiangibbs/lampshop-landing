<?php
  $page = 'Fluorescent Tubes';
  include('../../components/head.php');
  $panel = "We recommend any of our Fluorescent Tubes as they are all premium brands and the highest quality.";
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/calculator.js"></script>
<script src="js/recommend.js"></script>
<title>Energy Saving Calculator</title>

<style media="screen">
  .panel-head {background-color: #808080;}
    .panel-head h2 {color: #fff; padding: 10px; margin:0px;}
  .panel-body p {color: #999;}
  .tblContainer input {height: 50px; width: 100%;}
  .tblContainer {font-size: 16px;}

  .product-list-item {background-color: #209F96; width: 90%; margin: 0 auto;}
  .product-list-item:hover {background-color: #006662; cursor: pointer;}

  .product-body {text-align: center;}

  .fa-star {color: yellow;}

  .fa-search { color: #1E9A41;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition:.5s;
  } .fa-search:hover {color: #03CC6F}

  .top-product {
     width: 65%;
     margin: 0 auto;
     padding: 10px;
     border: 1px solid #333;
     border-radius: 10px;
     margin-bottom: 5px;
  } .top-product:hover {
    background-color: #f6f6f6;
    cursor: pointer;
  } .top-product img {width: 100%;}

  .product {
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition:.5s;
  }
  .product:hover{
    -webkit-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.75);
  }
</style>

<body ng-app="calcApp" ng-init="" ng-controller="myCtrl1">
  <div class="row">
    <div class="col col-p-4">
      <div class="panel panel-padding">
        <div class="panel-head">
          <h2>Energy Saving Calculator</h2>
        </div>
        <div class="panel-body" style="background-color: #fff;">
          <p>This Energy Saving Calculator is used to determine your annual energy savings. when replacing your lighting solution. Calculate the total power (kilowatts, kW) saved by upgrading your lighting.</p></br >
          <table class="tblContainer">
            <tr>
              <td class="tblTxt">Original Watts:</td>
              <td><input ng-model="OriginalWatts" class="tblInput"></td>
            </tr>
            <tr>
              <td class="tblTxt">Replacement Watts:</td>
              <td><input ng-model="ReplacementWatts" class="tblInput"></td>
            </tr>
            <tr>
              <td class="tblTxt">Number of Lamps:</td>
              <td><input ng-model="NumberOfLamps" class="tblInput"></td>
            </tr>
            <tr>
              <td style="color:#f28c31">Total:<br />
                  KiloWatts:
              </td>
              <td style="color:#39b54a">
                {{TotalWatts()}}W (Watts)<br />
                {{KiloWatts()}}kW (KiloWatts)
              </td>
            </tr>
            <tr>
              <td class="tblTxt">Hours of use per Day:</td>
              <td><input ng-model="HoursPerDay" class="tblInput"></td>
            </tr>
            <tr>
              <td class="tblTxt">Days of use per Week:</td>
              <td><input ng-model="DaysPerWeek" class="tblInput"></td>
            </tr>
            <tr>
              <td class="tblTxt">Weeks of use per Year:</td>
              <td><input ng-model="WeeksPerYear" class="tblInput"></td>
            </tr>
            <tr>
              <td style="color:#f28c31">
                Anual Saving:
              <td style="color:#39b54a">
                {{AnualSaving() | number:2}}kW/Year
            </tr>
            <tr>
              <td class="tblTxt">Energy cost per kWh:</td>
              <td><input ng-model="EnergyCost" class="tblInput" placeholder="Typically £0.13"></td>
            </tr>
            <tr>
              <td style="color:#f28c31">
                Total Savings:
              </td>
              <td style="color:#39b54a">
                £{{TotalSavings() | number:2}}
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col col-p-8">
      <div class="panel panel-padding">
        <div class="panel-head" style="background-color: #888888;">
          <h2 style="padding: 10px;"><i class="fa fa-trophy" aria-hidden="true" style="color: gold;"></i> Our most popular LED Products</h2>
        </div>
      </div>
    </div>
    <div class="col col-p-4">
      <a href="https://www.lampshoponline.com/led/led-panels.html" style="text-decoration: none;">
        <div class="panel panel-padding">
          <div class=" product">
            <div class="panel-head" style="background-color: #279945;">
              <h2 style="padding: 10px;">LED Panels</h2>
            </div>
            <div class="panel-body product-body">
              <img src="https://www.lampshoponline.com/media/catalog/category/LED_Panel_Pro_White_copy_1.jpg" alt="" style="height: 140px;">
            </div>
          </div>
        </div>
      </a>
      <a href="https://www.lampshoponline.com/led/t8-led-tubes-high-quality.html" style="text-decoration: none;">
        <div class="panel panel-padding">
          <div class=" product">
            <div class="panel-head" style="background-color: #279945;">
              <h2 style="padding: 10px;">LED Tubes</h2>
            </div>
            <div class="panel-body product-body">
              <img src="https://www.lampshoponline.com/media/catalog/category/Frosted_LED_Pro_copy.jpg" alt="" style="height: 140px;">
            </div>
          </div>
        </div>
      </a>
      <a href="https://www.lampshoponline.com/led/led-downlights.html" style="text-decoration: none;">
        <div class="panel panel-padding">
          <div class=" product">
            <div class="panel-head" style="background-color: #279945;">
              <h2 style="padding: 10px;">LED Downlights</h2>
            </div>
            <div class="panel-body product-body">
              <img src="https://www.lampshoponline.com/media/catalog/category/pal-downlight-10w__60695.jpg" alt="" style="height: 140px;">
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col col-p-4">
      <a href="https://www.lampshoponline.com/led/led-domestic-bulbs.html" style="text-decoration: none;">
      <div class="panel panel-padding">
        <div class=" product">
          <div class="panel-head" style="background-color: #279945;">
            <h2 style="padding: 10px;">LED Domestic Bulbs</h2>
          </div>
          <div class="panel-body product-body">
            <img src="https://www.lampshoponline.com/media/catalog/category/Osram_gu10_24-11-14_1.jpg" alt="" style="height: 140px;">
          </div>
        </div>
      </div>
    </a>
    <a href="https://www.lampshoponline.com/led/led-floodlights.html" style="text-decoration: none;">
      <div class="panel panel-padding">
        <div class=" product">
          <div class="panel-head" style="background-color: #279945;">
            <h2 style="padding: 10px;">LED Floodlights</h2>
          </div>
          <div class="panel-body product-body">
            <img src="https://www.lampshoponline.com/media/catalog/category/slim_led_floodlights.jpg" alt="" style="height: 140px;">
          </div>
        </div>
      </div>
    </a>
    <a href="https://www.lampshoponline.com/led/led-corn-lights.html" style="text-decoration: none;">
      <div class="panel panel-padding">
        <div class=" product">
          <div class="panel-head" style="background-color: #279945;">
            <h2 style="padding: 10px;">LED Corn Lights</h2>
          </div>
          <div class="panel-body product-body">
            <img src="https://www.lampshoponline.com/media/catalog/category/Cornlight_Pro_Pic_copy.jpg" alt="" style="height: 140px;">
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  <?php
    include('../../components/footer.php');
   ?>
