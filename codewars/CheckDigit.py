def check_digit(number, index1, index2, digit):

    if index1 > index2:
        index1, index2 = index2, index1
        
    
    snippet = str(number)[index1:index2 + 1]
    
    
    return str(digit) in snippet


print(check_digit(12345678912345, 1, 0, 1))
print(check_digit(12345678912345, 0, 1, 2))  
print(check_digit(67845123654000, 4, 2, 5)) 
print(check_digit(66688445364856, 0, 0, 6))  
print(check_digit(87996599994565, 2, 5, 1))  
