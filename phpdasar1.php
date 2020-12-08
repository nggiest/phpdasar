<!DOCTYPE html>
<html>
<head>
	<title>PHP Dasar 1</title>
</head>
<body>
<?php
$nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);
$average = array_sum($nilai)/count($nilai);
$max = max($nilai);
$min = min($nilai);
?>
<h3>Test 1</h3>
<p> rata-rata = <?= $average ?> </p>
<p> nilai tertinggi = <?= $max ?> </p>
<p> nilai terendah = <?= $min ?> </p>
<br>
<?php 
$input = "TRanSISi";
$upper_case = strtoupper($input);

$sim = similar_text($input, $upper_case);
$counting = strlen($input) - $sim; ?>
<h3>Test 2</h3>
<p> Input = <?= $input ?>
<p> Hasil = <?= $counting ?>
<br>
<br>
<h3> Test 3 </h3>
<?php 
function ngram($word){
	$input = explode(' ', $word);
	$unigram = '';
	foreach ($input as $item) {
		$unigram .= $item. ',';
	}
	$unigram = substr($unigram, 0, -2);

	$x = 0 ;
	$bigram = '';
	foreach ($input as $item) {
		if ($x < 1) {
			$bigram .= $item. ' ';
			$x++;
		}
		else {
			$bigram .= $item.', ';
			$x = 0;
		}
	}
	$bigram = substr($bigram, 0, -2);

	$y = 0;
	$trigram = '';
	foreach ($input as $item) {
		if ($y < 2) {
			$trigram .= $item. ' ';
			$y++;
		}
		else {
			$trigram .= $item.', ';
			$y = 0;
		}
	}
	$trigram = substr($trigram, 0, -2);


	$result = 'Unigram : '. $unigram . '<br>';
	$result .= 'Bigram : '. $bigram . '<br>';
	$result .= 'Trigram : '. $trigram;

		return $result;
}
echo ngram('Jakarta adalah ibukota negara Republik Indonesia');
?>
</body>
</html>
