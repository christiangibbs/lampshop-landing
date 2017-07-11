<?php
  include('../../components/head.php');
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
 </style>

 <div class="row">
   <div class="col col-1">
     <div class="panel">
       <div class="panel-head" style="background-color: #808080;">
         <h2 style="padding: 10px;">
           <i class="fa fa-search" aria-hidden="true"></i> Tube Finder Tool
         </h2>
       </div>
       <div class="panel-body" style="overflow: hidden;">
         <div class="col col-1">
           <b>Simply enter your tube reference number below</b><br />
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
       All Metal Halides Available
     </h2>
   </div>
   <div class="panel-body all-halides">
     <div class="col col-6">
       <div class="product">
        <img src="http://localhost/lso-landing/landing-metal-halides-v2/images/cdm-td.png" alt=""><br />
       </div>
       <b>CDM-TD</b>
     </div>
     <div class="col col-6">
       <div class="product">
         <img src="http://localhost/lso-landing/landing-metal-halides-v2/images/cdm-tc.png" alt=""><br />
       </div>
       <b>CDM-TC</b>
     </div>
     <div class="col col-6">
       <div class="product">
         <img src="http://localhost/lso-landing/landing-metal-halides-v2/images/cdm-t.png" alt=""><br />
       </div>#119B3C
       <b>CDM-T</b>
     </div>
     <div class="col col-6">
       <div class="product">
         <img src="http://localhost/lso-landing/landing-metal-halides-v2/images/hqi-ts.png" alt=""><br />
       </div>
       <b>HQI-TS</b>
     </div>
     <div class="col col-6">
       <div class="product">
         <img src="http://localhost/lso-landing/landing-metal-halides-v2/images/hqi-e.png" alt=""><br />
       </div>
       <b>HQI-E</b>
     </div>
     <div class="col col-6">
       <div class="product">
         <img src="http://localhost/lso-landing/landing-metal-halides-v2/images/hqi-t.png" alt=""><br />
       </div>
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
     <a class="button pop-search" href="#">
       70w CDM-T
     </a>
     <a class="button pop-search" href="#">
       70w CDM-TC
     </a>
     <a class="button pop-search" href="#">
       70w CDM-TD
     </a>
     <a class="button pop-search" href="#">
       70w HQI-TS
     </a>
     <a class="button pop-search" href="#">
       250w HQI-T
     </a>
     <a class="button pop-search" href="#">
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
