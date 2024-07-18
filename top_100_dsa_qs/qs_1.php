<h1>[[1,2,3]</br>
    [4,5,6]</br>
    [7,8,9]]</h1>
<?php
// // $array = [
// //     [1,2,3],
// //     [4,5,6],
// //     [7,8,9]
// // ];
// // // echo count($array);
// // $sumofRow = 0;
// // $sumofColumn = 0;
// // for ($i = 0; $i < count($array); $i++) {
// //     for ($j = 0; $j <= count($array); $j++) {
// //         $sumofRow = $sumofRow + $array[$i][$j];
// //     }
// //     echo ("sum of " . ($i + 1) . " row : " . $sumofRow);
// //     echo "</br>";
// //     $sumofRow = '';
// // }
// // echo "</br>";
// // for ($i = 0; $i < count($array); $i++) {
// //     for ($j = $i; $j <= count($array); $j++) {
// //         $sumofColumn = $sumofColumn + $array[$i][$j];
// //     }
// //     echo ("sum of " . ($i + 1) . " column : " . $sumofColumn);
// //     echo "</br>";
// //     $sumofColumn = '';
// // }

// // echo "</br>";echo "</br>";echo "</br>";
// // echo "sum of 1 row : ";     echo "</br>";
// // echo "sum of 2 row : ";     echo "</br>";
// // echo "sum of 3 row : ";     echo "</br>"; echo "</br>";
// // echo "sum of 1 column : ";  echo "</br>";
// // echo "sum of 2 column : ";  echo "</br>";
// // echo "sum of 3 column : ";  echo "</br>";


// // PHP program to find the sum
// // of each row and column of a matrix

// // Get the size m and n
// $m = 4;
// $n = 4;

// // Function to calculate sum of each row
// function row_sum(&$arr)
// {
// 	$sum = 0;

// 	echo "Finding Sum of each row:\n\n";

// 	// finding the row sum
// 	for ($i = 0; $i < $m; ++$i) 
// 	{
// 		for ($j = 0; $j < $n; ++$j) 
// 		{

// 			// Add the element
// 			$sum = $sum + $arr[$i][$j];
// 		}

// 		// Print the row sum
// 		echo "Sum of the row " . $i . 
// 			" = " . $sum . "\n";
			
// 		// Reset the sum
// 		$sum = 0;
// 	}
// }

// // Function to calculate sum of each column
// function column_sum(&$arr)
// {
// 	$sum = 0;

// 	echo "\nFinding Sum of each column:\n\n";

// 	// finding the column sum
// 	for ($i = 0; $i < $m; ++$i)
// 	{
// 		for ($j = 0; $j < $n; ++$j) 
// 		{

// 			// Add the element
// 			$sum = $sum + $arr[$j][$i];
// 		}

// 		// Print the column sum
// 		echo "Sum of the column " . $i . 
// 					" = " . $sum . "\n";
		
// 		// Reset the sum
// 		$sum = 0;
// 	}
// }

// // Driver code
// $arr = array_fill(0, $m, array_fill(0, $n, NULL));

// // Get the matrix elements
// $x = 1;
// for ($i = 0; $i < $m; $i++)
// 	for ($j = 0; $j < $n; $j++)
// 		$arr[$i][$j] = $x++;

// // Get each row sum
// row_sum($arr);

// // Get each column sum
// column_sum($arr);

// // This code is contributed by ita_c


function inOrder(array $node)
{
	echo "Hello"; exit;
    // We extract a possible left and right node for clarity.
    $left = $node['children'][0] ?? null;
    $right = $node['children'][1] ?? null;
 
    // We'll apply the algorithm on the left node first.
    if ($left) {
        $output[] = inOrder($left);
    }
 
    // Now we visit the node itself.
    $output[] = visit($node);
 
    // And apply the algorithm on the right node.
    if ($right) {
        $output[] = inOrder($right);
    }
 
    return implode(', ', $output);
}
 
inOrder($root); // 1, 2, 3, 4, 5, 6, 7

?>