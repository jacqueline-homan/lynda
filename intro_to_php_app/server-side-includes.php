
<?php 
/*Turns off php error display so that webpage 
loads as normal and any missing file simply 
will not show up as a php error message*/

ini_set('display_errors', '0'); 
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
	.main {
		font-style: italic;

		
	}

	body {
		background-color: #96b1b3;
	}
	</style>
</head>

<body>
  <h1>Server-side Includes</h1>
  <p class="main">This paragraph is in the main file.</p>
  <?php include './includes/paragraphs.html'; ?>
  <p class="main">This paragraph is also in the main file.</p>
  <?php include './includes/paragraph.html'; ?>

</body>
</html>