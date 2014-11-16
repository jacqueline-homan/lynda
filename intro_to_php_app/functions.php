<?php
$version = phpversion();
echo $version . '<p>';

$name = 'JACQUELINE';
echo strtolower($name) . '<br>';
echo $name . '<br>';

$name = ucfirst(strtolower($name));
echo $name . '<p>';

$input = '<p>Hi, <script>alert("BOO!!");</script><a href ="http://www.example.com/">Visit my site</a>.</p>';
echo strip_tags($input);
//The second argument allows the a and p tags.
echo strip_tags($input, '<p><a>'); 
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Using a For Loop</title>
</head>
<body>
	<h1><i>Programmer Buddies</i></h1>
	<ol>
		<?php
		$chars = array('Ed', 'Leah', 'Evan', 'Miguel', 'Chris');
		sort($chars);
		for ($i = 0; $i < count($chars); $i++){						
			echo '<li>' . $chars[$i] . '</li>';			
		}
		?>

	</ol>

	<h2><i>Pair Partners at Cleveland Code Retreat</i></h2>
	  <ul>
	  	<?php
	  	$pairs = array('Rick', 'Jacob', 'Wade', 'Roxy');
	  	sort($pairs);
	  	foreach ($pairs as $name) {
	  		echo "<li>$name</li>";
	  	}
	  	?>
	  </ul><br>

	  <h2><i><u>Weekly Menu Plan</u></i></h2>
	    <?php

         $days_menu = array('Mon' => 'Hamburgers', 'Tues' => 'Spaghetti', 
         	                'Wed' => 'Tuna Noodle Casserole', 
         	                'Thurs' => 'BBQ Chicken', 'Fri' => 'Pizza');         
         
         $days_menu['Sat'] = 'Pot Roast'; 
         $days_menu['Sun'] = 'Stuffed Pepper Soup';

         /* sorts by index of elements in array 
          foreach($array_name as $key => $value){
	        do stuff
         }*/
         sort($days_menu);

         foreach($days_menu as $day => $food){
         	echo "<p>$day:  $food</p>";
         }
         echo '<br>';
 
         rsort($days_menu); // rsort is reverse sort.
         
         foreach($days_menu as $day => $food){
         	echo "<p>$day:  $food</p>";
         }

         ?>
         
         <!--Just to throw in some JavaScript humor-->
         <script>alert("BOO!!");</script>
         <p><br>
         <h3> Custom Function for Converting Seconds</h3>

</body>
</html>

<?php
function convertSeconds($seconds){
	$minutes = floor($seconds / 60);
	$seconds = $seconds % 60;
	$seconds = ($seconds < 10) ? '0' . $seconds : $seconds;
	return "$minutes : $seconds";
}

echo convertSeconds(557);
