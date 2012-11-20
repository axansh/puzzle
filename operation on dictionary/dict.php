<?php 

$word = array();

$v = array('a','e','i','o','u');

$file_handle = fopen("words.txt", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);

   	//1) Find all the words in a dictionary that contain exactly five vowels (a, e, i, o and u) in ascending order.
	if (strpos($line, 'a') !== false AND strpos($line, 'e') !== false AND strpos($line, 'i') !== false AND strpos($line, 'o') !== false AND strpos($line, 'u') !== false)
    	{
	    	$arr1 = str_split(strtolower($line));
	    	
	    	$save = '';

	    	foreach ($arr1 as $key => $value) {
	    		
	    		if(in_array($value, $v)){
	    			$save = $save . $value;
	    		}
	    	}

	    	if(strlen($save) == 5 AND $save =='aeiou'){
	    			$word[] = $line;
	    	}
	}

	//2) Find all the words in a dictionary of length at least six that contain letters in strictly ascending alphabetical order.
	if(strlen(trim($line)) >= 6){
		//$result[] = $line;
		$remove = array("\n", "\r\n", "\r");
    		$line = str_replace($remove, ' ', $line);

		$stringParts = str_split($line);
		sort($stringParts);

		$w = implode('', $stringParts);

		if(trim($line) == trim($w)){
			$result[] = $line;
		}

	}
}
fclose($file_handle);

echo '<pre>';
print_r($word);

echo '<pre>';
print_r($result);
exit;
?>
