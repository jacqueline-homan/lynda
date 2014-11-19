<?php
$suspect = false;
$pattern = '/Content-Type:|Bcc:|Cc:/i'; //Perl copatible reg-x to filter out spammers

function isSupect($val, $pattern, &$suspect) {
	if (is_array($val)) {
		foreach ($val as $item) {
			isSuspect($item, $pattern, $suspect);
		}
	}else {
		if (preg_match($pattern, $val)) {
			$suspect = true;
		}
	}
}
isSuspect($_POST, $pattern, $suspect);

if (!$suspect) {
  foreach ($_POST as $key => $value) {
	  $temp = is_array($value) ? $value : trim($value); //removes white space
      if (empty($temp) && in_array($key, $required)) {
    	  $missing[] = $key;
    	  $$key = '';
      } elseif (in_array($key, $expected)) {
    	  $$key = $temp;
      }
  }
}