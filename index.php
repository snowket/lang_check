<?php 
// Report all errors


include 'lang/geo.php';
include 'lang/eng.php';
include 'lang/rus.php';

// foreach ($TEXT2 as $g => $value) {
// 	print_r($TEXT2);
// 	if(is_array($g)){
// 	}
// }
$arsgeo=$TEXT2;
$arskeygeo=array_keys($arsgeo);
// print_r($arsgeo);exit;

$arseng=$TEXT1;
$arskeyeng=array_keys($arseng);

$arsrus=$TEXT3;
$arskeyrus=array_keys($arsrus);

// print_r($arskeygeo);exit;




foreach ($check as $key => $value) {

	foreach ($value as $keyin => $keyvalues) {

			if(is_array($keyvalues)){

				foreach($keyvalues as $aslvl1 => $lvl1){

						if(is_array($lvl1)){

							foreach($lvl1 as $aslvl2 => $lvl2){
						
							
								if (!isset($check['eng'][$keyin][$aslvl1][$aslvl2]) ){

									$check['eng'][$keyin][$aslvl1][$aslvl2]="change";
								}

							 	if (!isset($check['geo'][$keyin][$aslvl1][$aslvl2]) ){

							 		$check['geo'][$keyin][$aslvl1][$aslvl2]="change";
								}
								if (!isset($check['rus'][$keyin][$aslvl1][$aslvl2])  ){

							 		$check['rus'][$keyin][$aslvl1][$aslvl2]="change";
								}
						
							}
						}
						else{ 
						if (!isset($check['eng'][$keyin][$aslvl1]) ){

							$check['eng'][$keyin][$aslvl1]="change";
						}

					 	if (!isset($check['geo'][$keyin][$aslvl1]) ){

					 		$check['geo'][$keyin][$aslvl1]="change";
						}
						if (!isset($check['rus'][$keyin][$aslvl1])  ){

					 		$check['rus'][$keyin][$aslvl1]="change";
						}
					}
				}
			}
			else{
			if (!isset($check['eng'][$keyin]) ){

				$check['eng'][$keyin]="change";
			}

		 	if (!isset($check['geo'][$keyin]) ){

		 		$check['geo'][$keyin]="change";
			}
			if (!isset($check['rus'][$keyin])  ){

		 		$check['rus'][$keyin]="change";
			}
		}
	}

}

// $results = print_r($check, true);
// foreach ($check as $key => $en) {

// 	$filename = "lang/".$key.".php";
// 	$text = '<?php   $TEXT=array(' ;
	
// 	foreach($en as $key => $value)
// 	{
// 		if(is_array($value)){
// 			$text.="'".$key."'=> array( \n";
// 			foreach ($value as $key1 => $value1) {
// 				if(is_array($value1)){
// 					$text.="'".$key1."'=> array( \n";
// 					foreach ($value1 as $key2 => $value2) {
// 						if(is_array($value2)){
// 						$text.="'".$key2."'=> array( \n";
// 						foreach ($value2 as $key3 => $value3) {
// 							$text .= "'".$key3."'=> '".$value3."',\n";
// 						}
// 						$text.="),\n";
// 						continue;
// 						}
// 						$text .= "'".$key2."'=> '".$value2."',\n";
// 					}
// 					$text.="),\n";
// 					continue;
// 					}	
// 				$text .= "'".$key1."'=> '".$value1."',\n";
// 			}
// 			$text.="),\n";
// 			continue;
// 		}
// 	    $text .= "'".$key."'=> '".$value."',\n";
// 	}
// 	$text.=');';
// 	$fh = fopen($filename, "w") or die("Could not open log file.");
// 	fwrite($fh, $text) or die("Could not write file!");
// 	fclose($fh);
// }
