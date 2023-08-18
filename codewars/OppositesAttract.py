def lovefunc(petals1, petals2):
    if petals1 % 2 == 0 and petals2 % 2 != 0:
        return True
    elif petals1 % 2 != 0 and petals2 % 2 == 0:
        return True
    else:
        return False


flower1_petals = 4
flower2_petals = 3

result = lovefunc(flower1_petals, flower2_petals)

if result:
    print("¡They are in love!")
else:
    print("They are not in love.")
