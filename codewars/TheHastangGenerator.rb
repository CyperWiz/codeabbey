def generateHashtag(str)
    # Eliminar espacios en blanco y verificar si la cadena es vacía
    str = str.strip
    return false if str.empty?
    
    # Dividir la cadena en palabras y formatearlas
    words = str.split
    formatted_words = words.map(&:capitalize)
    
    # Construir el hashtag
    hashtag = "#" + formatted_words.join
    
    # Verificar si el hashtag es demasiado largo
    return false if hashtag.length > 140
    
    hashtag
end

# Ejemplos de uso
puts generateHashtag(" Hello there thanks for trying my Kata")  # Output: "#HelloThereThanksForTryingMyKata"
puts generateHashtag("    Hello     World   ")                  # Output: "#HelloWorld"
puts generateHashtag("")                                      # Output: false
