  // Function to determine replacement
  function RecommendReplacement() {
    // Get Product Name
    var SelectedProduct = document.getElementById("OriginalProducts").value;
    // Get Position in Array 1
    var PositionInArray = OriginalProducts.indexOf(SelectedProduct);
    // Match product in Array 2 to Array 1
    //document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[PositionInArray];

    var image = document.getElementById("ReplacementImg");
    var original_image = document.getElementById("SelectedImg");

    if (SelectedProduct == OriginalProducts[0]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[0];
      original_image.src = "images/600x600Old.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[0];
      image.src = "images/600x600New.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/40w-led-panel-600mm-x-600mm-c-w-driver/";
    }

    if (SelectedProduct == OriginalProducts[1]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[1];
      original_image.src = "images/1200x1200Old.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[1];
      image.src = "images/1200x1200New.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/75w-led-panel-1200mm-x-600mm/";
    }

    if (SelectedProduct == OriginalProducts[2]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[2];
      original_image.src = "images/HalogenOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[2];
      image.src = "images/HalogenNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/all-in-one-10w-led-dimmable-downlight/";
    }

    if (SelectedProduct == OriginalProducts[3]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[3];
      original_image.src = "images/HighbayOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[3];
      image.src = "images/HighbayNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/160w-led-highbay-5000k/";
    }

    if (SelectedProduct == OriginalProducts[4]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[4];
      original_image.src = "images/HighbayOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[4];
      image.src = "images/HighbayNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/160w-led-highbay-5000k/";
    }

    if (SelectedProduct == OriginalProducts[5]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[5];
      original_image.src = "images/LowbayOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[5];
      image.src = "images/LowbayNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com";
    }

    if (SelectedProduct == OriginalProducts[6]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[6];
      original_image.src = "images/LowbayOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[6];
      image.src = "images/LowbayNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com";
    }

    if (SelectedProduct == OriginalProducts[7]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[7];
      original_image.src = "images/DownlightOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[7];
      image.src = "images/DownlightNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/12w-round-led-light-panel-174mm-18w-pl-replacement/";
    }

    if (SelectedProduct == OriginalProducts[8]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[8];
      original_image.src = "images/DownlightOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[8];
      image.src = "images/DownlightNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/15w-round-led-light-panel-200mm-26w-pl-replacement/";
    }

    if (SelectedProduct == OriginalProducts[9]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[9];
      original_image.src = "images/DownlightOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[9];
      image.src = "images/DownlightNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/18w-round-led-light-panel-225mm-twin-18w-pl-replacement/";
    }

    if (SelectedProduct == OriginalProducts[10]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[10];
      original_image.src = "images/DownlightOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[10];
      image.src = "images/DownlightNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/20w-round-led-light-panel-240mm-42w-pl-t-replacement/";
    }

    if (SelectedProduct == OriginalProducts[11]){
      // Selected
      document.getElementById("RecSelectedProduct").innerHTML = OriginalProducts[11];
      original_image.src = "images/DownlightOld.jpg";

      // Replacement
      document.getElementById("ReplacementProduct").innerHTML = ReplacementProducts[11];
      image.src = "images/DownlightNew.jpg";
      document.getElementById("ReplacementURl").href = "http://www.lampshoponline.com/24w-round-led-light-panel-300mm-twin-26w-pl-replacement/eeeee";
    }
  }
