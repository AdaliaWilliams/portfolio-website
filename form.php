<?php
include 'top.php';
?>
<main class="addClothingForm">

        <h1 class="formHeader">Add To Your Online Closet</h1>
<?php
//this form will first ask the user which item of clothing they wish to insert into
//depending on the answer, the page will direct into a new page to insert into a specific table

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
$clothingType = '';


$saveData = true;



?>

    <section class="addClothing">
        <form class="form" name="addClothing" method="POST" onsubmit="submitFunction()">
            <?php

            //add an if statement before form code to print out the post array
            if(isset($_POST['btnSubmit'])) {
                if (DEBUG) {
                    print '<p>POST array:</p><pre>';
                    print_r($_POST);
                    print '</pre>';
                }
            }

            //sanitize data
            $clothingType= getData("radClothingType");

            //validate data
            if ($clothingType != "Shirt" AND $clothingType != "Sweater" AND $clothingType != "Jacket" AND $clothingType != "Pants" AND $clothingType != "Skirt" AND $clothingType != "Dress"
                AND $clothingType != "FullBody" AND $clothingType != "Activewear") {
                print '<p class="mistake"> Please choose a clothing type.</p>';
                $dataIsGood = false;
            }

            if ($saveData) {
                print '<h2> Thank you for submitting, your information was recieved.</h2>';

            }

                ?>


            <fieldset>
                <legend>What is the Clothing Type?</legend>

                <p>
                <label for="radClothingShirt">Shirt</label>
                <input type="radio" name ="radClothingType" value="Shirt" id="radClothingShirt"
                    <?php if ($clothingType == "Shirt") {print "checked";}?>
                >
                </p>

                <p>
                <label for="radClothingSweater">Sweater</label>
                <input type="radio" name ="radClothingType" value="Sweater" id="radClothingSweater"
                    <?php if ($clothingType == "Sweater") {print "checked";}?>
                >
                </p>

                <p>
                <label for="radClothingJacket">Jacket</label>
                <input type="radio" name ="radClothingType" value="Jacket" id="radClothingJacket"
                    <?php if ($clothingType == "Jacket") {print "checked";}?>
                >
                </p>

                <p>
                    <label for="radClothingPants">Pants</label>
                    <input type="radio" name ="radClothingType" value="Pants" id="radClothingPants"
                        <?php if ($clothingType == "Pants") {print "checked";}?>
                    >
                </p>


                <p>
                    <label for="radClothingSkirt">Skirt</label>
                    <input type="radio" name ="radClothingType" value="Skirt" id="radClothingSkirt"
                        <?php if ($clothingType == "Skirt") {print "checked";}?>
                    >
                </p>

                <p>
                    <label for="radClothingDress">Dress</label>
                    <input type="radio" name ="radClothingType" value="Dress" id="radClothingDress"
                        <?php if ($clothingType == "Dress") {print "checked";}?>
                    >
                </p>

                <p>
                    <label for="radClothingFullBody">Full Body</label>
                    <input type="radio" name ="radClothingType" value="FullBody" id="radClothingFullBody"
                        <?php if ($clothingType == "FullBody") {print "checked";}?>
                    >
                </p>

                <p>
                    <label for="radClothingActivewear">Activewear</label>
                    <input type="radio" name ="radClothingType" value="Activewear" id="radClothingActivewear"
                        <?php if ($clothingType == "Activewear") {print "checked";}?>
                    >
                </p>

            </fieldset>

            <fieldset>
                <!-- when the user presses the submit button, the website will direct it to a new page !-->
                <p id ="addClothingSubmit">
                    <input class="button" id="submitBtn" type="submit" value="Add" name="btnSubmit" >

                    <script>
                        document.getElementById("submitBtn").addEventListener("click",submitFunction)''
                        function submitFunction() {
                            window.location.href="<?php print "insert". $clothingType. ".php"?>";
                        }
                    </script>
                    <?php
                    include "redirect.php";
                    ?>
                </p>
            </fieldset>
        </form>
    </section>
    </main>

<script>
    //initialize data
    let clothingType;


    //sanitize

    clothingType = document.getElementById("lstClothingType");


    //validate
    function validateForm() {
        let clothingType = document.forms["addClothing"]["lstClothingType"].value;


        if (clothingType == "") {
            console.log("The clothing type seems to be blank.");
            dataIsGood = false;
        }


    }

    function verifyAlphaNum(testString) {
        //check for letters, numbers
        //make sure there is no undesired characters
        return testString.match(/^[a-zA-Z0-9]+$/);
    }


    //validate


    if ( clothingType == "") {
        console.log("Please enter the type of clothing");
        dataIsGood = false;
    } else if(!verifyAlphaNum(type)) {
        console.log("The clothing type contains invalid characters, just use letters.")
        dataIsGood = false;
    }


</script>
<?php
include 'footer.php';
?>
