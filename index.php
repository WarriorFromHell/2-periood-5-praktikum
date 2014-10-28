<?php require("validation.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> praks 5 </title>

<body > <pre><?php print_r($_POST);?> </pre>
<form action="index.php" method="post">
	<div class="form_field">

	<div>
	<?php if ($isSubmitted) {?>
		<div class="form_message"> <?php echo ($usernameMessage); ?> </div>
	<?php } ?> 
<span>kasutajanimi </span>
<input type="text" name="username">
</div>

	<div class="form_field">
	

<input type="submit" name="saada">
</div>
</body>
</html>