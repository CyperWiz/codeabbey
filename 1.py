def add(a, b):
    while b != 0:
        carry = a & b
        a = a ^ b
        b = carry << 1
    return a

num1 = int(input("Write the first number: "))
num2 = int(input("Write the second number: "))

resultado = add(num1, num2)
print("The result of your add is:", resultado)
