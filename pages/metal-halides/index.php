<?php
  include('../../components/head.php');
  $panel = "We recommend any of our Metal Halides as they are all premium brands and the highest quality.";
 ?>

 <style media="screen">
   .all-halides .col {text-align: center; margin: 0.75% 0 0% 1.5%;}
   .all-halides .icons img {width: 100%; margin: 10px auto; max-width: 140px;}
   .product {
      width: 50%;
      margin: 0 auto;
      padding: 10px;
      border: 1px solid #333;
      border-radius: 10px;
   } .product:hover {
     background-color: #f6f6f6;
     cursor: pointer;
   }
   .pop-search {line-height: 50px; color: #fff; text-decoration: none; margin: 20px; font-size: 16px}

   .accordion dt {background-color: #fff;}
    .accordion dt:hover {background-color: #f6f6f6;}
    .accordion dt::before {content: none;}
    .accordion dd {background-color: #333; color: #fff;}
 </style>


 <div class="row">
   <div class="col col-1">
     <div class="panel">
       <div class="panel-head" style="background-color: #808080;">
         <h2 style="padding: 10px;">
           <i class="fa fa-search" aria-hidden="true"></i> Metal Halide Finder Tool
         </h2>
       </div>
       <div class="panel-body" style="overflow: hidden;">
         <div class="col col-2">
           <h2 style="font-weight: bold; color: black; margin-top: 10px;">Simply enter your tube reference number below</h2><br />
             <div class="search-box">
               <form action="http://www.lampshoponline.com/catalogsearch/result/" method="get">
                   <div>
                       <!--<label for="search"></label>-->
                       <input class="input-box" type="text" name="q" value="" maxlength="128" placeholder="    enter tube reference number">
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
       </div>
     </div>
   </div>
 </div>
 </div>

 <div class="hr"></div>

 <div class="row" style="background-color: #fff;">
   <div class="panel-head" style="background-color: #119B3C;">
     <h2 style="padding: 10px;">
       Our Most Popular Metal Halides
     </h2>
   </div>
   <div class="panel-body all-halides">
     <div class="col col-6">
       <a href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=cdm-td">
         <div class="product">
          <img src="https://www.lampshoponline.com/landing/pages/metal-halides/images/cdm-td.png" alt="CDM-TD"><br />
         </div>
       </a>
       <b>CDM-TD</b>
     </div>
     <div class="col col-6">
       <a href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=cdm-tc">
         <div class="product">
           <img src="https://www.lampshoponline.com/landing/pages/metal-halides/images/cdm-tc.png" alt="CDM-TC"><br />
         </div>
       </a>
       <b>CDM-TC</b>
     </div>
     <div class="col col-6">
       <a href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=cdm-t">
         <div class="product">
           <img src="https://www.lampshoponline.com/landing/pages/metal-halides/images/cdm-t.png" alt="CDM-T"><br />
         </div>
       </a>
       <b>CDM-T</b>
     </div>
     <div class="col col-6">
       <a href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=hqi-ts">
         <div class="product">
           <img src="https://www.lampshoponline.com/landing/pages/metal-halides/images/hqi-ts.png" alt="HQI-TS"><br />
         </div>
       </a>
       <b>HQI-TS</b>
     </div>
     <div class="col col-6">
       <a href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=hqi-e">
         <div class="product">
           <img src="https://www.lampshoponline.com/landing/pages/metal-halides/images/hqi-e.png" alt="HQI-E"><br />
         </div>
       </a>
       <b>HQI-E</b>
     </div>
     <div class="col col-6">
       <a href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=hqi-t">
         <div class="product">
           <img src="https://www.lampshoponline.com/landing/pages/metal-halides/images/hqi-t.png" alt="HQI-T"><br />
         </div>
       </a>
       <b>HQI-T</b>
     </div>
   </div>
 </div>

 <div class="hr"></div>

 <div class="row" style="background-color: #fff;">

   <div class="panel-head" style="background-color: #808080;">
     <h2 style="padding: 10px;">
       <i class="fa fa-search"></i> Our Most Popular Halide Searches
     </h2>
   </div>

   <div class="panel-body" style="overflow: hidden;">
     <a class="button pop-search" href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=70w+cdm-t">
       70w CDM-T
     </a>
     <a class="button pop-search" href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=70w+cdm-tc">
       70w CDM-TC
     </a>
     <a class="button pop-search" href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=70w+cdm-td">
       70w CDM-TD
     </a>
     <a class="button pop-search" href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=70w+hqi-ts">
       70w HQI-TS
     </a>
     <a class="button pop-search" href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=250w+hqi-t">
       250w HQI-T
     </a>
     <a class="button pop-search" href="https://www.lampshoponline.com/catalogsearch/result/?cat=0&q=250w+hqi-e">
       250w HQI-E
     </a>

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
               <th>METAL HALIDES</th>
               <th>BLT Direct</th>
               <th>Lamp Shop Online</th>
               <th>Light Bulbs Direct</th>
               <th>The Lamp Company</th>
               <th>LYCO</th>
               <th>B&amp;Q</th>
           </tr>
           <tr>
               <td>70w CDM-T G12</td>
               <td>&pound;21.24</td>
               <td>&pound;10.00</td>
               <td>&pound;11.40</td>
               <td>&pound;20.52</td>
               <td>&pound;13.12</td>
               <td>N/A</td>
           </tr>
           <tr>
               <td>70w CDM-TC G8.5</td>
               <td>&pound;27.97</td>
               <td>&pound;10.49</td>
               <td>&pound;11.40</td>
               <td>&pound;19.44</td>
               <td>&pound;13.99</td>
               <td>N/A</td>
           </tr>
           <tr>
               <td>70w CDM-TD RX7s</td>
               <td>&pound;14.99</td>
               <td>&pound;13.33</td>
               <td>&pound;25.25</td>
               <td>&pound;19.44</td>
               <td>N/A</td>
               <td>N/A</td>
           </tr>
           <tr>
               <td>70w HQI-TS</td>
               <td>&pound;10.39</td>
               <td>&pound;7.09</td>
               <td>&pound;8.20</td>
               <td>&pound;19.44</td>
               <td>&pound;17.49</td>
               <td>N/A</td>
           </tr>
           <tr>
               <td>400w HQI-T</td>
               <td>&pound;18.45</td>
               <td>&pound;12.60</td>
               <td>&pound;15.10</td>
               <td>&pound;24.84</td>
               <td>&pound;22.74</td>
               <td>N/A</td>
           </tr>
       </table>
   </div>
 </div>


 <?php
   include('../../components/footer.php');
  ?>
