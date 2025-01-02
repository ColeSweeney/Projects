def sumListFor(aList):
    """
    Sums all numbers in a list using a for-loop.
    Returns the sum of all numbers.
    """
    result = 0
    for number in aList:
        result += number 
    return result

Man= [1,2,3,4]
print(sumListFor(Man))




def neverGonna(listOfWrongDoings):
    """
    print out "never gonna " + doSomething
    """
    for doing in listOfWrongDoings:
        print("Never gonna "+ doing)









def multiplyListFor(aListing):
    """
    Multiply the numbers in a list together using a for-loop.
    """
    result = 1
    for num in aListing:
        result *= num
    return result