<?php
$num = $_POST["num"];
$total_str = file_get_contents("file.txt");
$total = (int)$total_str;
if($num) {
	$total = $total+$num;
	$total_str = sprintf("%d",$total);
	file_put_contents("file.txt", $total_str);    
	echo $total;
	echo "<br>";
} else {
    echo $total;
	echo "<br>";
}
?>
