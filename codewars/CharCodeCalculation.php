function calc($str) {
    // Convert each character to its ASCII code and concatenate them
    $total1 = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $total1 .= ord($str[$i]);
    }

    // Replace occurrences of 7 with 1 in the concatenated number
    $total2 = str_replace('7', '1', $total1);

    // Calculate the sum of the digits in total1 and total2
    $sum_total1 = array_sum(str_split($total1));
    $sum_total2 = array_sum(str_split($total2));

    // Return the difference between the sums
    return $sum_total1 - $sum_total2;
}

// Example usage
$inputString = 'ABC';
$output = calc($inputString);
echo $output;  // Output: 6
?>
