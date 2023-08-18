def accum(s):
    result = []
    for i, c in enumerate(s):
        result.append(c.upper() + c.lower() * i)
    return '-'.join(result)

# Ejemplos de uso
print(accum("abcd"))    # Salida: "A-Bb-Ccc-Dddd"
print(accum("RqaEzty")) # Salida: "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
print(accum("cwAt"))    # Salida: "C-Ww-Aaa-Tttt"
