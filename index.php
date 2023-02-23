<?php die("This is a preview. No code will be executed."); exit()?>

<!--
ATTENTION!
The code below is taken directly from EduHub's signup page backend.

This is the code that runs as soon as you submit the signup form.
-->

<?php
session_start();
if(isset($_SESSION['user'])){
	header('Location:/');
}
// The code above makes sure you aren't creating an account but you are already signed in.

$submitted = $_GET["submitted"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// The code above detects when you submit the signup form
  $name = htmlspecialchars($_POST["name"]);
// Get the username you submitted

  $email = htmlspecialchars($_POST["email"]);
// Get the email you submitted

	$bio = htmlspecialchars($_POST["bio"]);
// Get the bio you submitted

	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
// Hash the password before getting it, so your password is never directly visible on the server.
}
?>

<!--
After this, all of the values will be saved to a private database. However due to security reasons we can't show the database saving code.
-->