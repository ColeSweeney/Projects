def addition(x,y):
    return x + y

def subtraction(y, x):
    return y - x

def multiplication(v1, v2):
    return v1 * v2

def division(tomato, potato):
    if potato == 0:
        print("Can not divide by Zero")
    else:
        return tomato / potato
    


def myTestString(doing, val1, val2, result):
    return doing + " " + str(val1) + " and " + str(val2) + " peoduces " + str(result)
def myTestString2(doing, val1, val2, result):
    return doing + " " + str(val1) + " by " + str(val2) + " peoduces " + str(result)
def main():
    v1 = 1
    v2 = 2
    v3 = 5 
    v4 = -1
    v5 = 0
    v6 = 8

    ## Test Addition 
    a1 = addition(v1, v2)
    a2 = addition(v6, v2)
    print(myTestString("Adding", v6, v2, a2))

    ## Test Multiplication
    a3 = multiplication(v1, v2)
    print(myTestString("Multiplying", v1, v2, a3))

    ## Test Division
    a4 = division(v6, v2)
    print(myTestString2("Divide", v6, v2, a4 ))
    a5 = division(v1, v5)
    print(myTestString2("Divide", v1, v5, a5 ))


if __name__ == "__main__":
    main()