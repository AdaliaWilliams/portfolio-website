<?php
include 'top.php';
?>
<main class="addClothingForm">

        <h1 class="formHeader">Add an Item of Clothing</h1>
<?php


function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    }
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

//initialize data
$clothingName = '';
$type = '';
$color = '';
$graphic = '';
$imageFileName = '';
$date = '';


$saveData = true;
?>

    <section class="addClothing">
        <form class="form" name="addClothing" action="form.php" method="POST" onsubmit="return validateForm()">
            <?php

            //add an if statement before form code to print out the post array
            if(isset($_POST['btnSubmit'])) {
                if (DEBUG) {
                    print '<p>POST array:</p><pre>';
                    print_r($_POST);
                    print '</pre>';
                }



                //sanitize data

                $clothingName = getData("txtClothingName");
                $type = getData("lstClothingType");
                $color = getData("txtColor");
                $graphic = getData("txtGraphic");
                $imageFileName = getData("txtFileName");




                //validate data


                if ($clothingName == "") {
                    print '<p class="mistake">Please enter the clothing name</p>';
                    $saveData = false;
                }

                if ($type == "") {
                    print '<p class="mistake">Please choose the clothing type</p>';
                    $saveData = false;
                }
                if ($color == "") {
                    print '<p class="mistake">Please enter the clothing color</p>';
                    $saveData = false;
                }
                if ($graphic == "") {
                    print '<p class="mistake">Please enter if there is a graphic</p>';
                    $saveData = false;
                }
                if ($imageFileName == "") {
                    print '<p class="mistake">Please enter the file name</p>';
                    $saveData = false;
                }



                if ($saveData) {


                }
            }
            ?>
            <fieldset>
                <p>
                    <label for="txtClothingName">Clothing Name</label>
                    <input type="text" id="txtClothingName" name="txtClothingName" value="<?php print $clothingName;?>"
                    onfocus="this.select()" required>

                </p>
            </fieldset>

            <fieldset>
                <label for="lstClothingType" >What is the Clothing Type?</label>
                <select name="lstClothingType" id="lstClothingType" onfocus="this.select()" required>
                    <option value="top">Top</option>
                    <option value="bottom">Bottom</option>
                    <option value="dress">Dress</option>
                    <option value="shoes">Shoes</option>
                    <option value="accessory">Accessory</option>
                </select>
            </fieldset>


            <fieldset>
                <p>
                    <label for="txtColor">Color</label>
                    <input type="text" id="txtColor" name="txtColor" value="<?php print $color;?>"
                           onfocus="this.select()" required>
                </p>
            </fieldset>

            <fieldset>
                <p>
                    <label for="txtGraphic">Graphic</label>
                    <input type="text" id="txtGraphic" name="txtGraphic" value="<?php print $graphic;?>"
                        onfocus="this.select()" required>
                </p>
            </fieldset>

            <fieldset>
                <p>
                    <label for="txtFileName">Image Filename</label>
                    <input type="text" id="txtFileName" name="txtFileName" value="<?php print $imageFileName;?>"
                        onfocus="this.select()">
                </p>
            </fieldset>

            <fieldset>
                <p id ="addClothingSubmit">
                    <input class="button" type="submit" value="Add" name="btnSubmit">
                </p>
            </fieldset>
        </form>
    </section>
    </main>

<script>
    //initialize data
    let clothingName = '';
    let type = '';
    let color = '';
    let graphic = '';
    let imageFileName = '';
    let date = '';

    //sanitize
    clothingName = document.getElementById("txtClothingName");
    type = document.getElementById("lstClothingType");
    color = document.getElementById("txtColor");
    graphic = document.getElementById("txtGraphic");
    imageFileName = document.getElementById("txtFileName");
    const d = new Date();
    let dataIsGood = true;

    //validate
    function validateForm() {
        let clothingName = document.forms["addClothing"]["txtClothingName"].value;
        let clothingType = document.forms["addClothing"]["lstClothingType"].value;
        let clothingColor = document.forms["addClothing"]["txtColor"].value;
        let clothingGraphic = document.forms["addClothing"]["txtGraphic"].value;
        let fileName = document.forms["addClothing"]["txtFileName"].value;

        if (clothingName == "") {
            console.log("The clothing name must be filled out")
            dataIsGood = false;
        }
        if (clothingType == "") {
            console.log("The clothing type seems to be blank.");
            dataIsGood = false;
        }
        if (clothingColor == "") {
            console.log("The clothing color must be filled out")
            dataIsGood = false;
        }
        if (clothingGraphic == "") {
            console.log("The clothing graphic must be filled out")
            dataIsGood = false;
        }
        if (fileName == "") {
            console.log("The filename must be filled out")
            dataIsGood = false;
        }

    }

    function verifyAlphaNum(testString) {
        //check for letters, numbers
        //make sure there is no undesired characters
        return testString.match(/^[a-zA-Z0-9]+$/);
    }


    //validate
    if ( clothingName == "") {
        console.log("Please enter the clothing name");
        dataIsGood = false;
    } else if(!verifyAlphaNum(clothingName)) {
        console.log("The clothing name contains invalid characters, just use letters.")
        dataIsGood = false;
    }

    if ( type == "") {
        console.log("Please enter the type of clothing");
        dataIsGood = false;
    } else if(!verifyAlphaNum(type)) {
        console.log("The clothing type contains invalid characters, just use letters.")
        dataIsGood = false;
    }

    if ( color == "") {
        console.log("Please enter the clothing color");
        dataIsGood = false;
    } else if(!verifyAlphaNum(color)) {
        console.log("The clothing color contains invalid characters, just use letters.")
        dataIsGood = false;
    }

    if ( graphic == "") {
        console.log("Please enter if there is a graphic");
        dataIsGood = false;
    } else if(!verifyAlphaNum(clothingName)) {
        console.log("The graphic contains invalid characters, just use letters. (use N/A)")
        dataIsGood = false;
    }

    if ( imageFileName == "") {
        console.log("Please enter the image file name");
        dataIsGood = false;
    } else if(!verifyAlphaNum(imageFileName)) {
        console.log("The image file name contains invalid characters, just use letters.")
        dataIsGood = false;
    }


</script>
<?php
include 'footer.php';
?>
