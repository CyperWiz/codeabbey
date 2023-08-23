function uniqueInOrder($sequence) {
    $result = array();

    if (is_array($sequence)) {
        $length = count($sequence);
        for ($i = 0; $i < $length; $i++) {
            if ($i === 0 || $sequence[$i] !== $sequence[$i - 1]) {
                $result[] = $sequence[$i];
            }
        }
    } elseif (is_string($sequence)) {
        $length = strlen($sequence);
        for ($i = 0; $i < $length; $i++) {
            if ($i === 0 || $sequence[$i] !== $sequence[$i - 1]) {
                $result[] = $sequence[$i];
            }
        }
    }

    return $result;
}

$input1 = "AAAABBBCCDAABBB";
$input2 = "ABBCcAD";
$input3 = array(1, 2, 2, 3, 3);

$output1 = uniqueInOrder($input1);
$output2 = uniqueInOrder($input2);
$output3 = uniqueInOrder($input3);

print_r($output1); 
print_r($output2); 
print_r($output3); 
