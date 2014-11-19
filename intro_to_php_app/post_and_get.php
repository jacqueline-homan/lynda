<?php
$errors = array();
$missing = array();
if (isset($_POST['send'])){
  $to = 'jacqueline@example.com';
  $subject = 'Feedback from contact form';
  $expected = array('name', 'email', 'comments');
  $required = array('name', 'comments');
  require './includes/mailprocess.php';
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
  <h1>Contact Us</h1>
  <?php if ($errors || $missing) { ?>
  <p class="warning">Please fix the item(s) indicated.</p>
  <?php } ?>
  <form name="contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <p>
  	<label for="name">Name</label>
    <?php if ($missing && in_array('name', $missing)) { ?>
    <span class="warning">Please enter your name</span>
    <?php } ?>
  	<input type="text" name="name" id="name">
      <?php
        if ($errors || $missing){
          echo 'value="' . htmlentities($name, ENT_COMPAT, 'utf-8') . '"';
        }
      ?>
  </p>
  <p>
  	<label for="email">Email</label>
    <?php if ($missing && in_array('email', $missing)) { ?>
    <span class="warning">Please enter your email</span>
    <?php } ?>
  	<input type="text" name="email" id="email">
      <?php
        if ($errors || $missing){
          echo 'value="' . htmlentities($email, ENT_COMPAT, 'utf-8') . '"';
        }
      ?>
  </p>
  <p>
  	<label for="comments">Comments</label>
    <?php if ($missing && in_array('comments', $missing)) { ?>
    <span class="warning">Cannot leave comments empty!</span>
    <?php } ?>
  	<textarea name="comments" id="comments"><?php 
      if ($errors || $missing) {
        echo htmlentities($comments, ENT_COMPAT, 'utf-8');
      }
      ?></textarea>
  </p>
  <p>
  	<input type="submit" name="send" id="send" value="Send Comments">
  </p>

  </form>
  <pre>
  	<?php
  	  if ($_GET){
        echo 'Contents of the $_GET array: <br>';
        print_r($_GET);
      }
      elseif ($_POST) {
        echo 'Contents of the $_POST array: <br>';
        print_r($_POST);
      }
  	?>
  </pre>
</body>
</html>