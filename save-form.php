<?php

if($_POST['imgwidth'] != '' && $_POST['imgheight'] != '' && $_POST['dealer_id']){
	if(file_exists('json/logo-size.json')){

	$current_data = file_get_contents('json/logo-size.json');
	$array_data = json_decode($current_data, true);
	$new_data = array(
				'imgwidth' 	=> $_POST['imgwidth'],
				'imgheight' => $_POST['imgheight'],
				'dealer_id' => $_POST['dealer_id'],
			);

	$array_data[] = $new_data;
	$json_data = json_encode($array_data,JSON_PRETTY_PRINT);
	if(file_put_contents('json/logo-size.json', $json_data)){
		echo "<h3>Sucessfully saved data in JSON file</h3>";
	}else{
		echo "<h3>Unsucessfully saved data in JSON file</h3>";
	}
}else{
		echo "<h3>JSON file not exit</h3>";
	}

	}else{
		echo "<h3>All form field are required.</h3>";
	}


