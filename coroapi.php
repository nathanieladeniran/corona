<?php

$api_url = 'https://2019ncov.asia/api/country_region';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
//$user_data = json_decode($json_data);
//echo json_encode($json_data);
//$user_data = json_encode($json_data);
//print_r($json_data);        // Dump all data of the Array
//$json_data = json_decode($json_data, true);
//var_dump(json_decode($json_data, true));
//$arr = json_decode($json_data, true);
$data = json_decode($json_data,true);
echo count($data[1]['results']);

//var_dump($data[1]['results']).'<br>'; // outputs '9'
echo '<table class="table table-bordered" border="1">
                              <thead>
                                <tr>
                                  <th scope="col">Country/Conveyance</th>
                                  
                                </tr>
                              </thead>
                              <tbody>';
for($i=0; $i<count($data[1]['results']); $i++) {
    //echo "Rating is " . $obj['reviews'][$i]["rating"] . " and the excerpt is " . $obj['reviews'][$i]["excerpt"] . "<BR>";
    echo '<tr>
                                  <td scope="row">'.print_r ($data[1]['results'][$i]['country_region']).'</td>
                                 
                                </tr>'; 
    
    //print_r($country_region = array_column($data[1]['results'], 'country_region'));
}
echo ' </tbody>
              </table>';

/*foreach ($json_data as $json_data) {

    echo     
	$json_data['results'][0]['country_region'] . ', ' .
	$json_data['results'][0]['confirmed'] . ', with a ' .
	$json_data['results'][0]['deaths'] . ' '.
	$json_data['results'][0]['recovered'] . ' core. <br>' ;
}*/
/*$iter = new RecursiveIteratorIterator( new RecursiveArrayIterator($json_data), RecursiveIteratorIterator::SELF_FIRST);

echo '<table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">Country/Conveyance</th>
                                  <th scope="col">Confirmed cases</th>
                                  <th scope="col">Deaths</th>
                                  <th scope="col">Recovered</th>
                                </tr>
                              </thead>
                              <tbody>';
                              $sn=1;

foreach($iter as $key=>$value) { 
	
   if(is_array($value))
     { echo "$key:\n"; }
   else
     { 
     	
     	echo '<tr>
                                  <td scope="row">'.$sn.'</td>
                                  <td>'.$key .'=>'. $value.'</td>
                                  <td></td>
                                  <td></td>
                                </tr>'; 
                            } 
                            $sn++;
} 
echo ' </tbody>
              </table>';
//$array = json_decode($json_data,true);

/*foreach($array as $k=>$val):
    echo '<b>results: '.$k.'</b></br>';
    $keys = array_keys($val);
    foreach($keys as $key):
        echo '&nbsp;'.ucfirst($key).' = '.$val[$key].'</br>';
    endforeach;
endforeach;*/


//$obj = json_decode($json_data,true);
//echo $obj;


// echo $obj[0]->country_region;

//echo $user_data;

// Cut long data into small & select only first 10 records
//$user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
/*foreach ($user_data as $user) {
	echo "name: ".$user->employee_name;
	echo "<br />";
	echo "name: ".$user->employee_age;
	echo "<br /> <br />";
}*/
	/*if ($obj->{'code'} == '1')
	{
	  $processed = TRUE;
	}else{
	  $ERROR_MESSAGE = $obj->{'data'};
	}

	if (!$processed && $ERROR_MESSAGE != '') {
	    echo $ERROR_MESSAGE;
	}*/

?>