<?php
$i = 1;

while ($i <= 10) {
	echo $i . '<br>';
	$i++;
}

echo '<p>';

$j = 100;

do {
	echo $j . '<br>';
	$j++;
} while ($j <= 10);

echo '<p>';

$chars = array('Ed', 'Leah', 'Evan', 'Miguel', 'Chris');

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
		for ($i = 0; $i < count($chars); $i++){
			/*if ($i == 3) {
				continue; // It steps over the iteration for the array's element, 'Miguel'
			} */			
			echo '<li>' . $chars[$i] . '</li>';
			/*if ($chars[$i] == 'Evan'){
				break;
			} */ // At the iteration for the element, 'Evan', the loop breaks.
		}

		?>
	</ol>

	<h2><i>Pair Partners at Cleveland Code Retreat</i></h2>
	  <ul>
	  	<?php
	  	$pairs = array('Rick', 'Jacob', 'Wade', 'Roxy');
	  	
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
         
         // Adding Sat and Sun to our Associative Array
         $days_menu['Sat'] = 'Stuffed Pepper Soup'; 
         $days_menu['Sun'] = 'Pot Roast';
         
         // The foreach loop gives you access to the value of each array element
         foreach($days_menu as $day => $food){
         	echo "<p>$day:  $food</p>";
         }

         ?>

</body>
</html>
