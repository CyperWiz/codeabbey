def divisible_numbers(numbers, divisor):
    return [num for num in numbers if num % divisor == 0]

input_numbers = [1, 2, 3, 4, 5, 6]
divisor = 2
output = divisible_numbers(input_numbers, divisor)
print(output)  
