<?php require_once(__DIR__ . "/partials/nav.php"); ?>
<?php
//we use this to safely get the email to display
$email = "";
if (isset($_SESSION["user"]) && isset($_SESSION["user"]["username"])) {
    $email = $_SESSION["user"]["username"];
}
?>
    <p>Welcome, <?php echo $email;?><a href="profile.php"> User Profile</a></p>
<?php require(__DIR__ . "/partials/flash.php");


