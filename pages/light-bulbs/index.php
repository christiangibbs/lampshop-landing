<?php
  // $page = 'light-bulbs';
  include('../../components/head.php');
  $panel = "We recommend any of our Light Bulbs as they are all premium brands and the highest quality.";
 ?>

 <!-- Scripts -->
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
 <script src="js/jquery-2.1.4.js"></script>
 <script src="js/calculator.js"></script>

 <style media="screen">
   .all-bulbs {overflow: hidden;}
   .all-bulbs .col {text-align: center; margin: 0.75% 0 0% 1.5%;}
   .all-bulbs .icons img {width: 100%; margin: 10px auto; max-width: 140px;}

   .col-5 b {font-size: 16px;}

   .pop-search {line-height: 50px; color: #fff; text-decoration: none; margin: 20px; font-size: 16px}

   .accordion dt {background-color: #fff;}
    .accordion dt:hover {background-color: #f6f6f6;}
    .accordion dt::before {content: none;}
    .accordion dd {background-color: #333; color: #fff;}
    .product img {opacity: 0.7; width: 75%;}
    .product img:hover {opacity: 1;}

    .tblContainer {
      background: white;
      border: 0 none;
      width: 100%; }
      .tblContainer .tblTxt {
        width: 250px; }
      .tblContainer .tblInput {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        box-sizing: border-box;
        font-size: 13px;
        padding: 5px; }

    .tblContainer input {height: 50px; width: 100%;}
    .tblContainer {font-size: 16px;}
 </style>

<body ng-app="calcApp" ng-init="" ng-controller="myCtrl1">
   <div class="row">
     <div class="col col-p-4">

       <div class="panel panel-padding">
         <div class="panel-head" style="background-color: #119B3C;">
           <h2 style="padding: 10px;">
             Energy Saving Calculator
           </h2>
         </div>
         <div class="panel-body" style="background-color: #fff;">
           <p style="color: #333333;">This Energy Saving Calculator is used to determine your annual energy savings. when replacing your lighting solution.
             Calculate the total power (kilowatts, kW) saved by upgrading your lighting.</p></br >
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
         <div class="panel-head" style="background-color: #119B3C;">
           <h2 style="padding: 10px;">
             TRADITIONAL BULBS
           </h2>
         </div>
         <div class="panel-body all-bulbs">
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/lamps/general-light-bulbs/golf-ball-shaped-bulbs.html">
                 <img src="images/golf-ball.jpg" alt="Golf Ball">
               </a>
             </div>
             <b>Golf Ball</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/lamps/general-light-bulbs/candle-bulbs.html">
                 <img src="images/candle.jpg" alt="Candle">
               </a>
             </div>
             <b>Candle</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/lamps/halogen-bulbs/gu10-lamps.html">
                 <img src="images/gu10.jpg" alt="GU10">
               </a>
             </div>
             <b>GU10</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/lamps/halogen-bulbs/mr16-12v.html">
                 <img src="images/mr16.jpg" alt="MR16">
               </a>
             </div>
             <b>MR16</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/lamps/halogen-bulbs/g9-240v-capsule-bulbs.html">
                 <img src="images/g9-capsule.jpg" alt="G9 Capsule">
               </a>
             </div>
             <b>G9 Capsule</b>
           </div>
         </div>
       </div>
       <div class="panel panel-padding">
         <div class="panel-head" style="background-color: #119B3C;">
           <h2 style="padding: 10px;">
             LED ALTERNATIVES
           </h2>
         </div>
         <div class="panel-body all-bulbs">
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/led/led-domestic-bulbs/led-gls.html">
                 <img src="images/led-gls.jpg" alt="LED GLS">
               </a>
             </div>
             <b>LED GLS</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/led/led-domestic-bulbs/led-candle-bulbs.html">
                 <img src="images/led-candle.jpg" alt="LED Candle">
               </a>
             </div>
             <b>LED Candle</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/led/led-domestic-bulbs/gu10-led-bulbs.html">
                 <img src="images/led-gu10.jpg" alt="LED GU10">
               </a>
             </div>
             <b>LED GU10</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/led/led-domestic-bulbs/led-mr16.html">
                 <img src="images/led-mr16.jpg" alt="LED MR16">
               </a>
             </div>
             <b>LED MR16</b>
           </div>
           <div class="col col-5">
             <div class="product">
               <a href="https://www.lampshoponline.com/led/bell-led-store/bell-led-g9-3w-05662.html">
                 <img src="images/led-g9-capsule.jpg" alt="LED G9 Capsule">
               </a>
             </div>
             <b>LED G9 Capsule</b>
           </div>
         </div>
       </div>
       <div class="panel panel-padding">
         <div class="panel-head" style="background-color: #119B3C;">
           <h2 style="padding: 10px;">
             Your Guide to Cap Types
           </h2>
         </div>
         <div class="panel-body" style="text-align: center;">
            <img src="images/cap-types.jpg" alt="" style="width:80%;">
         </div>
       </div>
     </div>
   </div>
     </div>
   </div>



 <?php
   include('../../components/footer.php');
  ?>
