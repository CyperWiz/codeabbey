def odd_one(arr):
    odd_index = -1
    odd_count = 0
    
    for i, num in enumerate(arr):
        if num % 2 != 0:
            odd_index = i
            odd_count += 1
        
        if odd_count > 1:
            return -1
    
    return odd_index

# Ejemplos de uso
print(odd_one([2, 4, 6, 7, 10])) # Debe imprimir: 3
print(odd_one([2, 16, 98, 10, 13, 78])) # Debe imprimir: 4
print(odd_one([4, -8, 98, -12, -7, 90, 100])) # Debe imprimir: 4
print(odd_one([2, 4, 6, 8])) # Debe imprimir: -1
