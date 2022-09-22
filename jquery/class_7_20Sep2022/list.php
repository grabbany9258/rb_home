<?php 
	// echo "hello";
if($_GET['mydata']=='good'){
	$good = array('kamal', 'jamal','shamim');
	echo getNames($good);
}
else if($_GET['mydata']=='bad'){
	$bad = array('rabbany', 'omar', 'rajib', 'afsar');
	echo getNames($bad);
}




function getNames($items){
	$output = "<ul>";
	for($i=0; $i<count($items);$i++){
		$output .= "<li>" .$items[$i] . "</li>";
	}
	$output .= "<ul>";
	return $output;
}





 ?>
