<?php require_once(__DIR__ . "/partials/nav.php"); ?>
<?php
if (!has_role("Admin")) {
    //this will redirect to login and kill the rest of this script (prevent it from executing)
    flash("You don't have permission to access this page");
    die(header("Location: login.php"));
}
?>

<form method="POST">
	<label>Name</label>
	<input name="name" placeholder="Name"/>
	<label>Score</label>
	<input type="number" min="1" name="score"/>
  <label>Reason</label>
   <input type="text" max="60" placeholder="win, lose, purchase, etc" name="reason"/>
	<input type="submit" name="save" value="Create"/>
</form>

<?php
if(isset($_POST["save"])){
	//TODO add proper validation/checks
	$name = $_POST["name"];
	$score = $_POST["score"];
  $reason = $_POST["reason"];
	$user = get_user_id();
	$db = getDB();
	$stmt = $db->prepare("INSERT INTO PointsHistory (user_id, points_change, reason) VALUES(:user, :points_change, :reason)");
	$r = $stmt->execute([
		":score"=>$score,
		":user"=>$user,
   ":reason"=>$reason
   	]);
	if($r){
		flash("Created successfully with id: " . $db->lastInsertId());
	}
	else{
		$e = $stmt->errorInfo();
		flash("Error creating: " . var_export($e, true));
	}
}
?>
<?php require(__DIR__ . "/partials/flash.php");?>