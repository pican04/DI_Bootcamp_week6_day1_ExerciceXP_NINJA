<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {
       
        $checked_count = count($_POST['check_list']);
        $name = $_POST['username'];
        echo $name . " 's favourite colors are " . $checked_count . " option(s): <br/>";
       
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Please you must select one option.</b>";
    }

?>