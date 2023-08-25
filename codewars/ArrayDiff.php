function arrayDiff($a, $b) {
    $result = array();
    
    foreach ($a as $value) {
        if (!in_array($value, $b)) {
            $result[] = $value;
        }
    }
    
    return $result;
}

$a = array(1, 2, 2, 2, 3);
$b = array(2);

$z = arrayDiff($a, $b);

echo "Resultado: ";
print_r($z);
