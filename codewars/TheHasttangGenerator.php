function generateHashtag($str) {
    // Eliminar espacios en blanco y verificar si la cadena es vacía
    $str = trim($str);
    if (empty($str)) {
        return false;
    }
    
    // Dividir la cadena en palabras y formatearlas
    $words = explode(' ', $str);
    $formattedWords = array_map('ucfirst', $words);
    
    // Construir el hashtag
    $hashtag = '#' . implode('', $formattedWords);
    
    // Verificar si el hashtag es demasiado largo
    if (strlen($hashtag) > 140) {
        return false;
    }
    
    return $hashtag;
}

// Ejemplos de uso
echo generateHashtag(" Hello there thanks for trying my Kata"); // Output: "#HelloThereThanksForTryingMyKata"
echo generateHashtag("    Hello     World   ");               // Output: "#HelloWorld"
echo generateHashtag("");                                   // Output: false
