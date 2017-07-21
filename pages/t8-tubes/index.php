<?php
  include('../../components/head.php');
 ?>
 <style media="screen">
   .col {margin: 0% 0 0% 1.5%;}
 </style>

 <link rel="stylesheet" href="css/style.css">

 <div class="row blurbs" style="background-color: white; border: 1px solid #e3e3e3;">
   <div class="col col-3">
     <div class="panel panel-padding">
       <div class="panel-head details-head">
         <h4 style="padding: 10px;">
           <i class="fa fa-gbp" aria-hidden="true"></i> SEE HOW MUCH YOU CAN SAVE WITH US
         </h4>
       </div>
     </div>
   </div>
   <div class="col col-3">
     <div class="panel panel-padding">
       <div class="panel-head details-head">
         <h4 style="padding: 10px;">
           <i class="fa fa-search" aria-hidden="true"></i> FIND THE RIGHT TUBE USING OUR TUBE FINDER TOOL
         </h4>
       </div>
     </div>
   </div>
   <div class="col col-3">
     <div class="panel panel-padding">
       <div class="panel-head details-head">
         <h4 style="padding: 10px;">
           <i class="fa fa-smile-o" aria-hidden="true"></i> SEE WHAT OUR CUSTOMERS SAY ABOUT US
         </h4>
       </div>
     </div>
   </div>
 </div>

 <!-- Tube Finder -->
 <div class="row">
   <div class="col col-1">
     <div class="panel">
       <div class="panel-head" style="background-color: #808080;">
         <h2 style="padding: 10px;">
           <i class="fa fa-search" aria-hidden="true"></i> Tube Finder Tool
         </h2>
       </div>
       <div class="panel-body" style="overflow: hidden;">
         <div class="col col-2">
           <h2 style="font-weight: bold; color: black; margin-top: 10px;">Simply enter your tube reference number below</h2><br />
             <div class="search-box">
               <form action="http://www.lampshoponline.com/catalogsearch/result/" method="get">
                   <div>
                       <!--<label for="search"></label>-->
                       <input class="input-box" type="text" name="q" value="" maxlength="128" placeholder="enter tube reference number" style="font-size: 16px;">
                       <button type="submit" title="Search" class="button">
                           <i class="fa fa-search" aria-hidden="true" style="color: white; font-size:18px"></i>
                      </button>
                       <script type="text/javascript">
                       //<![CDATA[
                           var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search...');
                           searchForm.initAutocomplete('http://www.lampshoponline.com/catalogsearch/ajax/suggest/', 'search_autocomplete');
                       //]]>
                       </script>
                   </div>
               </form>
           </div>
           <div class="row logo-group" style="margin-top: 20px;">
             <div class="col col-4">
               <img src="../../images/logos/sylvania-logo-c.png" alt="Sylvania Logo">
             </div>
             <div class="col col-4">
               <img src="../../images/logos/osram-logo-c.png" alt="Osram Logo">
             </div>
             <div class="col col-4">
               <img src="../../images/logos/ge-logo-c.png" alt="GE Logo">
             </div>
             <div class="col col-4">
               <img src="../../images/logos/philips-logo-c.png" alt="Philips Logo">
             </div>
           </div>
         </div>
         <div class="col col-2">
           <img src="images/need-help.jpg" alt="Need Help?" style="width: 100%;">
         </div>
       </div>
     </div>
   </div>
 </div>

 <div class="hr"></div>

 <style media="screen">

    .temp-small {
      height: 25px;
      width: 25px;
      border-radius: 100px;
      border: 2px solid #333333;
      margin: 5px;
      float: left;
    }
    .temp {
      height: 100px;
      width: 100px;
      border-radius: 100px;
      border: 5px solid #333333;
      margin: 0 auto;
    }

   .temp827 {
     background: -webkit-radial-gradient(#fff, #FF9900); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #FF9900); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #FF9900); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #FF9900); /* Standard syntax (must be last) */
   }

   .temp830 {
     background: -webkit-radial-gradient(#fff, #FFC108); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #FFC108); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #FFC108); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #FFC108); /* Standard syntax (must be last) */
   }

   .temp835 {
     background: -webkit-radial-gradient(#fff, #D1D1D1); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #D1D1D1); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #D1D1D1); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #D1D1D1); /* Standard syntax (must be last) */
   }

   .temp840 {
     background: -webkit-radial-gradient(#fff, #D2F7FF); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #D2F7FF); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #D2F7FF); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #D2F7FF); /* Standard syntax (must be last) */
   }

   .temp865 {
     background: -webkit-radial-gradient(#fff, #BCF0FD); /* Safari 5.1 to 6.0 */
     background: -o-radial-gradient(#fff, #BCF0FD); /* For Opera 11.6 to 12.0 */
     background: -moz-radial-gradient(#fff, #BCF0FD); /* For Firefox 3.6 to 15 */
     background: radial-gradient(#fff, #BCF0FD); /* Standard syntax (must be last) */
   }

 </style>

 <div class="row">
   <div class="col col-1">
     <div class="panel">
       <div class="panel-head" style="background-color: #808080;">
         <h2 style="padding: 10px;">
           <i class="fa fa-thermometer-empty" aria-hidden="true"></i> Colour Temperature Guide
         </h2>
       </div>
       <div class="panel-body" style="overflow: hidden; text-align: center;">
        <div class="col col-5">
          <div class="temp temp827">
            <p style="line-height: 100px; margin: 0px; padding: 0px; color: #333;">827 (2700k)</p>
          </div>
        </div>
        <div class="col col-5">
          <div class="temp temp830">
            <p style="line-height: 100px; margin: 0px; padding: 0px; color: #333;">830 (3000k)</p>
          </div>
        </div>
        <div class="col col-5">
          <div class="temp temp835">
            <p style="line-height: 100px; margin: 0px; padding: 0px; color: #333;">835 (3500k)</p>
          </div>
        </div>
        <div class="col col-5">
          <div class="temp temp840">
            <p style="line-height: 100px; margin: 0px; padding: 0px; color: #333;">840 (4000k)</p>
          </div>
        </div>
        <div class="col col-5">
          <div class="temp temp865">
            <p style="line-height: 100px; margin: 0px; padding: 0px; color: #333;">865 (6000k)</p>
          </div>
        </div>
       </div>
     </div>
   </div>
 </div>

 <div class="hr"></div>

 <div class="row">
   <div class="col col-4">
     <div class="panel">
       <div class="panel panel-head" style="background-color: #119B3C;">
         <h2 style="padding: 10px;">18w 2FT T8</h2>
       </div>
       <div class="panel panel-body">
         <img style="width: 100%;" src="https://www.lampshoponline.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/8/t8_tube_94615.1324545917.800.800_37637.1362674923.800.800_54923_85816.1382621088.800__37772.jpg" alt="">
         <b>Available in:</b> <br />
         <div class="col col-1">
           <div class="temp-small temp827">
           </div>
           <div class="temp-small temp830">
           </div>
           <div class="temp-small temp835">
           </div>
           <div class="temp-small temp840">
           </div>
           <div class="temp-small temp865">
         </div>

         </div>
         <p style="color: black;">827 Extra Warm White, 830 Warm White, 835 Standard White, 840 Cool White, and 865 Daylight</p>
         <h2 style="color: #119B3C;"><b style="color: #000000;">From:</b> &pound;1.10</h2>
       </div>
       <a href="https://www.lampshoponline.com/f18w-t8-triphosphor-fluorescent-tube-2ft-18w.html">
         <button type="submit" title="Search" class="button" style="width: 100%; ">
             <h2>View Product</h2>
        </button></a>
     </div>
   </div>
   <div class="col col-4">
     <div class="panel">
       <div class="panel panel-head" style="background-color: #119B3C;">
         <h2 style="padding: 10px;">36w 4FT T8</h2>
       </div>
       <div class="panel panel-body">
         <img style="width: 100%;" src="https://www.lampshoponline.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/8/t8_tube_94615.1324545917.800.800_37637.1362674923.800.800_54923_85816.1382621088.800__37772.jpg" alt="">
         <b>Available in:</b> <br />
         <div class="col col-1">
           <div class="temp-small temp827">
           </div>
           <div class="temp-small temp830">
           </div>
           <div class="temp-small temp835">
           </div>
           <div class="temp-small temp840">
           </div>
           <div class="temp-small temp865">
         </div>

         </div>
         <p style="color: black;">827 Extra Warm White, 830 Warm White, 835 Standard White, 840 Cool White, and 865 Daylight</p>
         <h2 style="color: #119B3C;"><b style="color: #000000;">From:</b> &pound;1.40</h2>
       </div>
       <a href="https://www.lampshoponline.com/f36w-t8-triphosphor-fluorescent-tube-4ft-36w.html">
         <button type="submit" title="Search" class="button" style="width: 100%; ">
             <h2>View Product</h2>
        </button></a>
     </div>
   </div>
   <div class="col col-4">
     <div class="panel">
       <div class="panel panel-head" style="background-color: #119B3C;">
         <h2 style="padding: 10px;">58w 5FT T8</h2>
       </div>
       <div class="panel panel-body">
         <img style="width: 100%;" src="https://www.lampshoponline.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/8/t8_tube_94615.1324545917.800.800_37637.1362674923.800.800_54923_85816.1382621088.800__37772.jpg" alt="">
         <b>Available in:</b> <br />
         <div class="col col-1">
           <div class="temp-small temp827">
           </div>
           <div class="temp-small temp830">
           </div>
           <div class="temp-small temp835">
           </div>
           <div class="temp-small temp840">
           </div>
           <div class="temp-small temp865">
         </div>

         </div>
         <p style="color: black;">827 Extra Warm White, 830 Warm White, 835 Standard White, 840 Cool White, and 865 Daylight</p>
         <h2 style="color: #119B3C;"><b style="color: #000000;">From:</b> &pound;1.50</h2>
       </div>
       <a href="https://www.lampshoponline.com/f58w-t8-triphosphor-fluorescent-tube-5ft-58w.html">
         <button type="submit" title="Search" class="button" style="width: 100%; ">
             <h2>View Product</h2>
        </button></a>
     </div>
   </div>
   <div class="col col-4">
     <div class="panel">
       <div class="panel panel-head" style="background-color: #119B3C;">
         <h2 style="padding: 10px;">70w 6FT T8</h2>
       </div>
       <div class="panel panel-body">
         <img style="width: 100%;" src="https://www.lampshoponline.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/8/t8_tube_94615.1324545917.800.800_37637.1362674923.800.800_54923_85816.1382621088.800__37772.jpg" alt="">
         <b>Available in:</b> <br />
         <div class="col col-1">
           <div class="temp-small temp827">
           </div>
           <div class="temp-small temp830">
           </div>
           <div class="temp-small temp835">
           </div>
           <div class="temp-small temp840">
           </div>
           <div class="temp-small temp865">
         </div>
         </div>
         <p style="color: black;">827 Extra Warm White, 830 Warm White, 835 Standard White, 840 Cool White, and 865 Daylight</p>
         <h2 style="color: #119B3C;"><b style="color: #000000;">From:</b> &pound;2.47</h2>
       </div>
       <a href="https://www.lampshoponline.com/f70w-t8-triphosphor-fluorescent-tube-6ft-70w.html">
         <button type="submit" title="Search" class="button" style="width: 100%; ">
             <h2>View Product</h2>
        </button></a>
     </div>
   </div>
 </div>

  <div class="hr"></div>

 <!-- Comparison table -->
 <div class="row row-section">
   <div class="panel-head" style="background-color: #808080;">
     <h2 style="padding: 10px;">
       <i class="fa fa-gbp" aria-hidden="true"></i> Compare our prices against the competition
     </h2>
   </div>
   <div class="row" style="overflow-x: auto;">
       <table class="tab-compare" cellspacing="5">
           <tr>
               <th>FLUORESCENT TUBES</th>
               <th>BLT Direct</th>
               <th>Lamp Shop Online</th>
               <th>Light Bulbs Direct</th>
               <th>The Lamp Company</th>
               <th>LYCO</th>
               <th>B&amp;Q</th>
           </tr>
           <tr>
               <td><a href="https://www.lampshoponline.com/f18w-t8-triphosphor-fluorescent-tube-2ft-18w.html">18w 2FT T8</a></td>
               <td>&pound;2.99</td>
               <td id="tube6764"></td>
               <td>&pound;1.44</td>
               <td>&pound;7.30</td>
               <td>&pound;1.70</td>
               <td>N/A</td>
           </tr>
           <tr>
               <td><a href="https://www.lampshoponline.com/f36w-t8-triphosphor-fluorescent-tube-4ft-36w.html">36w 4FT T8</a></td>
               <td>&pound;2.59</td>
               <td id="tube6766"></td>
               <td>&pound;1.98</td>
               <td>&pound;4.28</td>
               <td>&pound;2.04</td>
               <td>N/A</td>
           </tr>
           <tr>
               <td><a href="https://www.lampshoponline.com/f58w-t8-triphosphor-fluorescent-tube-5ft-58w.html">58w 5FT T8</a></td>
               <td>&pound;3.49</td>
               <td id="tube6763"></td>
               <td>&pound;2.19</td>
               <td>&pound;4.94</td>
               <td>&pound;2.18</td>
               <td>N/A</td>
           </tr>
           <tr>
               <td><a href="https://www.lampshoponline.com/f70w-t8-triphosphor-fluorescent-tube-6ft-70w.html">70w 6FT T8</a></td>
               <td>&pound;5.99</td>
               <td id="tube6761"></td>
               <td>&pound;3.30</td>
               <td>&pound;9.62</td>
               <td>&pound;3.79</td>
               <td>N/A</td>
           </tr>
       </table>
       * Prices as of 21st July 2017
   </div>
 </div>

 <script type="text/javascript">
       $(document).ready(function(){
           $( "#tube6764" ).load( "https://www.lampshoponline.com/f18w-t8-triphosphor-fluorescent-tube-2ft-18w.html #price-excluding-tax-6764" );
           $( "#tube6766" ).load( "https://www.lampshoponline.com/f36w-t8-triphosphor-fluorescent-tube-4ft-36w.html #price-excluding-tax-6766" );
           $( "#tube6763" ).load( "https://www.lampshoponline.com/f58w-t8-triphosphor-fluorescent-tube-5ft-58w.html #price-excluding-tax-6763" );
           $( "#tube6761" ).load( "https://www.lampshoponline.com/f70w-t8-triphosphor-fluorescent-tube-6ft-70w.html #price-excluding-tax-6761" );
       });
 </script>

 <div class="hr"></div>

 <?php
   include('../../components/footer.php');
  ?>
