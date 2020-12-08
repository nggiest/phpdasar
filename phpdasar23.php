<!DOCTYPE html>
<html>
<head>
	<title>PHP Dasar 2 & 3</title>
</head>
<body>
<h3>Tugas 1 PHP Dasar 2</h3>
<?php 
function motif($input){
	$color['black'] = [1,2,5,7,10,11];
	$color['white'] = [3,4,6,8,9,12];

	if(in_array($input, $color['black'])){
		return 'style="background :black; color:white"';
	}
	else {
		return 'style="background white"';
	}
}

$no=1;
$j = 1;
echo "<table>";
for ($i = 0; $i < 8; $i++){
	 echo '<tr>';
    for($x = 0; $x < 8; $x++){
      echo '<td '.motif($j).'>';
      echo $no++;
      echo '</td>';
		if ($j==12){
			$j= 1;
		} else {
			$j++;
		}
	}
	echo '</tr>';

}
echo "</table>";
?> 
<h3>Tugas 2 PHP Dasar 2</h3>
<?php
//POLA : +1,-2,+3...

function encryption($input){
	$huruf = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	$input = strtoupper($input);
	$split = str_split($input);

	$plus = true;
	$hasil = '';
	$x = 1;
	$tmp = 0;

	for ($i=0; $i < count($split); $i++) { 
			$tmp = array_search($split[$i], $huruf);
			if ($plus == true) {
				$hasil .= $huruf[$tmp+$x];
				$plus = false;
			} else {
				$ne = $tmp-$x;
				if ($ne < 0) {
					$ne = count($huruf) + ($ne);
				}
				$hasil .= $huruf[$ne];
				$plus = true;
			}
		$x++;
	}
	return $hasil;
}
echo encryption('DFHKNQ');
?>
<br>
<h3>Tugas PHP Dasar 3</h3>
<?php
	$arr =[
		['f','g','h','i'],
		['j','k','p','q'],
		['x','a','t','u'],
	];
	if (array_key_exists('fghi', $arr)){
		echo "true";
	}
	else {
		echo "not true";
	}
?>
</body>
</html>