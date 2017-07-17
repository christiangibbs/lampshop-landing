<?php
  $page = 'Fluorescent Tubes';
  include('../../components/head.php');
  $panel = "We recommend any of our Fluorescent Tubes as they are all premium brands and the highest quality.";
?>

 <style media="screen">
   .blurbs .col {margin: 0% 0 0% 1.5%;}
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

<!-- Banner -->
<div class="row">
  <div class="col col-1">
    <img src="images/banner.jpg" alt="Tube Banner" style="width: 100%;">
  </div>
</div>

<div class="hr"></div>

<!-- Best Selling Tubes t5, t8, t12 -->
<div class="row row-section">
  <div class="row">
    <h2 style="color: #00CE3E;">Our Best Selling Tubes</h2>
      <!-- T5 -->
      <a class="product-link" href="https://www.lampshoponline.com/fluorescent-tubes/t5-tubes.html">
      <div class="col col-1 bs-product">
        <div class="col col-p-3">
          <div class="circle">
            <img src="images/t5.png" alt="T5" style="margin-top: 16px;">
          </div>
          <h1>T5</h1>
        </div>
        <div class="col col-p-3">
          <ul>
            <li>- 16mm or ½ Inch Diameter</li>
            <li>- Quality Brands</li>
            <li>- A Rated Energy</li>
            <li>- Triphosphor Coating</li>
            <li>- 20,000 Hour Lamp Life.</li>
          </ul>
        </div>
        <div class="col col-p-6">
          <div class="panel" style="">
            <div class="panel-head">
              <div class="row">
                <div class="col col-4" style="">
                  <img src="../../images/logos/sylvania-logo.png" alt="Sylvania Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/osram-logo.png" alt="Osram Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/ge-logo.png" alt="GE Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/philips-logo.png" alt="Philips Logo">
                </div>
              </div>
              <div class="col col-1">
                <button type="submit" title="Search" class="button">
                    <span style="font-weight: bold; color: #fff; font-size: 16px;">click here for wattages and lengths</span>
               </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
      <!-- T8 -->
      <a class="product-link" href="https://www.lampshoponline.com/fluorescent-tubes/t8-tubes.html">
      <div class="col col-1 bs-product">
        <div class="col col-p-3">
          <div class="circle">
            <img src="images/t8.png" alt="T8" style="margin-top: 8px;">
          </div>
          <h1>T8</h1>
        </div>
        <div class="col col-p-3">
          <ul>
            <li>- 26mm or 1 inch Diameter</li>
            <li>- Quality Brands</li>
            <li>- A Rated Energy</li>
            <li>- Triphosphor Coating</li>
            <li>- 15,000 Hour Lamp Life.</li>
          </ul>
        </div>
        <div class="col col-p-6">
          <div class="panel" style="">
            <div class="panel-head">
              <div class="row">
                <div class="col col-4" style="">
                  <img src="../../images/logos/sylvania-logo.png" alt="Sylvania Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/osram-logo.png" alt="Osram Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/ge-logo.png" alt="GE Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/philips-logo.png" alt="Philips Logo">
                </div>
              </div>
              <div class="col col-1">
                <button type="submit" title="Search" class="button">
                    <span style="font-weight: bold; color: #fff; font-size: 16px;">click here for wattages and lengths</span>
               </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
      <!-- T12 -->
      <a class="product-link" href="https://www.lampshoponline.com/fluorescent-tubes/t12-tubes.html">
      <div class="col col-1 bs-product">
        <div class="col col-p-3">
          <div class="circle">
            <img src="images/t12.png" alt="T12" style="margin-top: 8px;">
          </div>
          <h1>T12</h1>
        </div>
        <div class="col col-p-3">
          <ul>
            <li>- 38mm Or 1 ½ Inch Diameter</li>
            <li>- Quality Brands</li>
            <li>- A Rated Energy</li>
            <li>- Triphosphor Coating</li>
            <li>- 15,000 Hour Lamp Life.</li>
          </ul>
        </div>
        <div class="col col-p-6">
          <div class="panel" style="">
            <div class="panel-head">
              <div class="row">
                <div class="col col-4" style="">
                  <img src="../../images/logos/sylvania-logo.png" alt="Sylvania Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/osram-logo.png" alt="Osram Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/ge-logo.png" alt="GE Logo">
                </div>
                <div class="col col-4" style="line-height: 40px; text-align: center;">
                  <img src="../../images/logos/philips-logo.png" alt="Philips Logo">
                </div>
              </div>
              <div class="col col-1">
                <button type="submit" title="Search" class="button">
                    <span style="font-weight: bold; color: #fff; font-size: 16px;">click here for wattages and lengths</span>
               </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
<script type="text/javascript">
$(document).ready(function(){
  console.log('working');
});
</script>
  </div>
</div>

<div class="hr"></div>

<!-- Review 1 -->
<div class="row row-section">
  <div class="row">
    <div class="col col-p-2">
            <iframe src="https://widget.reviews.co.uk/badge/widget?elementId=badge-170&amp;version=1&amp;&amp;store=lampshoponline&amp;primaryClr=%2312d06c&amp;neutralClr=%23f4f4f4&amp;starsClr=%23fff&amp;textClr=%23fff" frameborder="0" width="100%" style="min-width: 140px;" height="203"></iframe>
    </div>
    <div class="col col-p-10">
      <p style="color: #333; font-size: 20px; font-style: italic;">"I have recently converted my full house to Led lighting from LampShopOnline.
      I didn't really have much of an idea of how to go about this and the task seemed to be quite daunting, however after speaking to the friendly, knowledgeable team at LampShopOnline it was actually really easy, they explained all the benefits of each bulb and found all the correct equivalents for me meaning that I just had to swap the bulbs over, it was really as easy as that! They have saved me a small fortune in energy costs over the last 9 months and I am also doing my bit for the environment too."</p>

      <p style="font-weight: bold; color: #333; font-size: 20px;">Anthony Mollett - A very happy customer</p>

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
              <td><a href="https://www.lampshoponline.com/f18w-t8-triphosphor-fluorescent-tube-2ft-18w.html">2ft 18w T8 Tube</a></td>
              <td>&pound;2.99</td>
              <td id="tube6764"></td>
              <td>&pound;3.30</td>
              <td>&pound;2.52</td>
              <td>&pound;3.59</td>
              <td>&pound;7.98</td>
          </tr>
          <tr>
              <td><a href="https://www.lampshoponline.com/f36w-t8-triphosphor-fluorescent-tube-4ft-36w.html">4ft 36w T8 Tube</a></td>
              <td>&pound;4.49</td>
              <td id="tube6766"></td>
              <td>&pound;3.76</td>
              <td>&pound;2.76</td>
              <td>&pound;3.69</td>
              <td>&pound;9.98</td>
          </tr>
          <tr>
              <td><a href="https://www.lampshoponline.com/f58w-t8-triphosphor-fluorescent-tube-5ft-58w.html">5ft 58w T8 Tube</a></td>
              <td>&pound;3.99</td>
              <td id="tube6763"></td>
              <td>&pound;4.06</td>
              <td>&pound;3.06</td>
              <td>&pound;3.99</td>
              <td>&pound;7.39</td>
          </tr>
          <tr>
              <td><a href="https://www.lampshoponline.com/f70w-t8-triphosphor-fluorescent-tube-6ft-70w.html">6ft 70w T8 Tube</a></td>
              <td>&pound;5.99</td>
              <td id="tube6761"></td>
              <td>&pound;7.34</td>
              <td>&pound;5.34</td>
              <td>&pound;4.29</td>
              <td>&pound;11.98</td>
          </tr>
          <tr>
              <td><a href="https://www.lampshoponline.com/f14w-14w-t5-high-efficiency-triphosphor-fluorescent-tube-549mm.html">14w T5 Tube</a></td>
              <td>&pound;3.99</td>
              <td id="tube6772"></td>
              <td>&pound;4.65</td>
              <td>&pound;2.88</td>
              <td>&pound;3.19</td>
              <td>N/A</td>
          </tr>
          <tr>
              <td><a href="https://www.lampshoponline.com/f21w-21w-t5-high-efficiency-triphosphor-fluorescent-tube-849mm.html">21w T5 Tube</a></td>
              <td>&pound;3.99</td>
              <td id="tube6773"></td>
              <td>&pound;4.65</td>
              <td>&pound;2.88</td>
              <td>&pound;3.19</td>
              <td>N/A</td>
          </tr>
          <tr>
              <td><a href="https://www.lampshoponline.com/f35w-35w-t5-high-efficiency-triphosphor-fluorescent-tube-1449mm.html">35w T5 Tube</a></td>
              <td>&pound;4.49</td>
              <td id="tube6775"></td>
              <td>&pound;4.65</td>
              <td>&pound;3.18</td>
              <td>&pound;3.19</td>
              <td>N/A</td>
          </tr>
          <tr>
              <td>8ft 100w T12</td>
              <td>&pound;14.99</td>
              <td id="tube477"></td>
              <td>N/A</td>
              <td>N/A</td>
              <td>N/A</td>
              <td>N/A</td>
          </tr>
      </table>
  </div>
</div>

<script type="text/javascript">
      $(document).ready(function(){
          $( "#tube6764" ).load( "https://www.lampshoponline.com/f18w-t8-triphosphor-fluorescent-tube-2ft-18w.html #price-excluding-tax-6764" );
          $( "#tube6766" ).load( "https://www.lampshoponline.com/f36w-t8-triphosphor-fluorescent-tube-4ft-36w.html #price-excluding-tax-6766" );
          $( "#tube6763" ).load( "https://www.lampshoponline.com/f58w-t8-triphosphor-fluorescent-tube-5ft-58w.html #price-excluding-tax-6763" );
          $( "#tube6761" ).load( "https://www.lampshoponline.com/f70w-t8-triphosphor-fluorescent-tube-6ft-70w.html #price-excluding-tax-6761" );
          $( "#tube6772" ).load( "https://www.lampshoponline.com/f14w-14w-t5-high-efficiency-triphosphor-fluorescent-tube-549mm.html #price-excluding-tax-6772" );
          $( "#tube6773" ).load( "https://www.lampshoponline.com/f21w-21w-t5-high-efficiency-triphosphor-fluorescent-tube-849mm.html #price-excluding-tax-6773" );
          $( "#tube6775" ).load( "https://www.lampshoponline.com/f35w-35w-t5-high-efficiency-triphosphor-fluorescent-tube-1449mm.html #price-excluding-tax-6775" );
          $( "#tube477" ).load( "https://www.lampshoponline.com/f100w-t12-fluorescent-tube-8ft-100w.html #price-excluding-tax-477" );
      });
</script>

<div class="hr"></div>

<!-- Review 2 -->
<div class="row row-section">
  <div class="row">
    <div class="col col-p-2">
      <iframe src="https://widget.reviews.co.uk/badge/widget?elementId=badge-170&amp;version=1&amp;&amp;store=lampshoponline&amp;primaryClr=%2312d06c&amp;neutralClr=%23f4f4f4&amp;starsClr=%23fff&amp;textClr=%23fff" frameborder="0" width="100%" style="min-width: 140px;" height="203"></iframe>
    </div>
    <div class="col col-p-10">
      <p style="color: #333; font-size: 20px; font-style: italic;">"As an SME in West Dorset we found that our annual lighting bill was too high: 90 double 5ft daylight fitments on for 59 hours per week accounts for approximately 50% of our monthly electricity bill. Our MD stipulates that we should only use daylight bulbs as she was aware of possible adverse health effects of tungsten lighting.
Gradually converting to LED was the only feasible option for us; we rely on high quality lighting to show our products to best effect. The cost of replacement LED tubes was offset by the fact that we no longer needed a ballast. The outcome has been a great success, we are gradually making replacements and look forward to not having to replace the LED tubes for up to 16 years.
Rob and the team at Lampshoponline have helped make the transition to LED convenient, accessible and affordable. Rob also advises on green government grants.
We would not hesitate to recommend Lampshoponline as a supplier."
</p>

      <p style="font-weight: bold; color: #333; font-size: 20px;">Theresa Tiso / Pp / Lilliput Textiles Ltd</p>

    </div>
  </div>
</div>

<div class="hr"></div>

<?php
  include('../../components/footer.php');
 ?>
