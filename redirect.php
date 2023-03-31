<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
    $clothingType = $_POST['radClothingType'];

    if ($clothingType != "Shirt" AND $clothingType != "Sweater" AND $clothingType != "Jacket" AND $clothingType != "Pants" AND $clothingType != "Skirt" AND $clothingType != "Dress"
        AND $clothingType != "FullBody" AND $clothingType != "Activewear") {

//  To redirect form on a particular page
        header(print"insert". $clothingType. ".php");
    }
    else{
        ?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
    }
}
?>
