<?php
include 'top.php';
print '<main>';
?>

        <h1>Add an Item of Clothing</h1>
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

//validate data
$memberId = 0;
$memberEmail = '';
$firstName = '';
$lastName = '';
$yearGrad = '';
$communication = 1;

$saveData = true;
?>

    <section class="memberForm">
        <form action="form.php" method="POST">
            <?php

            //add an if statement before form code to print out the post array
            if(isset($_POST['btnSubmit'])) {
                if (DEBUG) {
                    print '<p>POST array:</p><pre>';
                    print_r($_POST);
                    print '</pre>';
                }


                //sanitize data







                //validate data

                if (!filter_var($memberEmail, FILTER_VALIDATE_EMAIL)) {
                    print '<p class="mistake">Please choose a valid email address</p>';
                    $saveData = false;
                }

                if ($firstName == "") {
                    print '<p class="mistake">Please enter your first name</p>';
                    $saveData = false;
                }

                if ($lastName == "") {
                    print '<p class="mistake">Please enter your last name</p>';
                    $saveData = false;
                }
                if ($yearGrad == "") {
                    print '<p class="mistake">Please choose the year you are graduating</p>';
                    $saveData = false;
                }
                if ($communication == 0) {
                    print '<p class="mistake">Please check the communication box</p>';
                    $saveData = false;
                }


                if ($saveData) {

                    $sql2 = 'INSERT INTO tblMember SET ';
                    $sql2 .= 'pmkMemberId = ?, ';
                    $sql2 .= 'fldEmail = ?, ';
                    $sql2 .= 'fldFirstName = ?, ';
                    $sql2 .= 'fldLastName = ?, ';
                    $sql2 .= 'fldYearGraduating = ?, ';
                    $sql2 .= 'fldReceiveCommunication = ?';

                    $data2 = array($memberId, $memberEmail, $firstName, $lastName, $yearGrad, $communication);

                    if (DEBUG) {
                        print $thisDatabaseReader->displayQuery($sql2, $data2);
                    } else {
                        $thisDatabaseWriter->insert($sql2, $data2);
                        print "<h1> Thank You! </h1>";
                    }

                }
            }
            ?>
            <fieldset>
                <input type="hidden" name="memberId" id="memberId" value="<?php print $memberId; ?>">
            </fieldset>
            <fieldset class = "textbox">
                <p>
                    <label for="txtMemberEmail">Email Address</label>
                    <input type="email" id="txtMemberEmail" name="txtMemberEmail" value="<?php print $memberEmail; ?>">
                </p>
            </fieldset>
            <fieldset class = "textbox">
                <p>
                    <label for="txtFirstName">First Name</label>
                    <input type="text" id="txtFirstName" name="txtFirstName" value="<?php print $firstName; ?>">
                </p>
            </fieldset>
            <fieldset class = "textbox">
                <p>
                    <label for="txtLastName">Last Name</label>
                    <input type="text" id="txtLastName" name="txtLastName" value="<?php print $lastName; ?>">
                </p>
            </fieldset>
            <fieldset>
                <label for="lstYearGrad" >What Year do you plan to Graduate?</label>
                <select name="lstYearGrad" id="lstYearGrad">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                </select>
            </fieldset>
            <fieldset>
                <legend class='form-bold'>Would you like to receive emails?</legend>
                <p>
                    <label for="chkCommunication">Agree</label>
                    <input name="chkCommunication" type="hidden" value="0">
                    <input <?php if ($communication) print 'checked'; ?> type="checkbox" name="chkCommunication" id="chkCommunication" value="1">
                </p>
            </fieldset>
            <fieldset>
                <p>
                    <input type="submit" value="Join" name="btnSubmit">
                </p>
            </fieldset>
        </form>
    </section>
    </main>
<?php
include 'footer.php';
?>