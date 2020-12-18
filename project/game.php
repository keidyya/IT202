<?php require_once(__DIR__ . "/partials/nav.php"); ?>
<?php
if (!is_logged_in()) {
    //this will redirect to login and kill the rest of this script (prevent it from executing)
    flash("You must be logged in to have your results saved");
    die(header("Location: index.html"));
}

if (has_role("Admin")){ 
        include 'create_competitions.php'; 
        }
include 'index.html';

?>

     