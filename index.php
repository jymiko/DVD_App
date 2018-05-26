<?php
    include("control.php");
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        $load = new main;
        $user = new database;
        if(isset($_GET["page"])) {
            if($_GET["page"] == "shop") {
                $load->shop();
            } else if($_GET["page"] == "account") {
                $load->account();
            } else if($_GET["page"] == "cart") {
                $load->cart();
            } else if($_GET["page"] == "contact") {
                $load->contact();
            } else if($_GET["page"] == "register") {
                $load->registerpage();
            } else if($_GET["page"] == "login") {
                $load->loginpage();
            } else if($_GET["page"] == "processlogin") {
                $user->login($_POST["email"], $_POST["pass"]);
            } else if($_GET["page"] == "processregister") {
                $user->register($_POST["c_name"], $_POST["c_email"], $_POST["c_pass"], $_POST["c_phone"], $_POST["c_address"]);
            } else if($_GET["page"] == "logout") {
                $user->logout();
            }
        } else {
            $load->home();
        }
    ?>
</html>