<?php
function main() {
	$arr1 = 0[5];
	$arr2 = 1[1];
	$arr3 = 2[1];
	echo "\n\nCount total number of duplicate elements in an array:\n";
	echo "---------------------------------------------------------\n";
	echo "Input the number of elements to be stored in the array :";

	scanf("%d",&$n);
	printf("Input %d elements in the array :\n",$n);
	for ($i = 0; $i < $n; $i++) {
		printf("element - %d : ",$i);
		scanf("%d",&$arr1);
	}
	for ($i = 0; $i < $n; $i++) {
		$arr2[$i] = $arr1[$i];
		$arr3[$i] = 0;
	}
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $n; $j++) {
			if ($arr1[$i] == $arr2[$j]) {
				$arr3[$j] = $mm;
				$mm++
			}
		}
		$mm = 1;
	}
	for ($i = 0; $i < $n; $i++) {
		if ($arr3[$i] == 2) {
			$ctr++
		}
	}
	printf("The total number of duplicate elements found in the array is: %d \n",$ctr);
	echo "\n\n";
}