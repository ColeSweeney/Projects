import random, string 

#Generators 
def randomValues(maxInt, length):
    """
    Iterator that produces random values
    """
    i = 0
    while i < length:
        yield random.randint(0, maxInt)
        i +=1
#Comprehension 
def dictionary1(letters):
    return {L:0 for L in letters} 

def dictionary2(flip):
    return {flip[k]: k for k in flip}

def onlyStrings(listOfKeys):
    return {k:0 for k in listOfKeys if type(k)==str}

#List Comprehension 
def matrix(rows, Columns, defaultValue):
    return[[defaultValue for c in range(Columns)] for r in range(rows)]

def evens(maxNum):
    return [i for i in range(maxNum) if i % 2 ==0]

###Memoization 
memo = {}
def combinations(n, k):
    if n ==k:
        return 1
    elif k==0:
        return 1
    else:
        if (n, k) in memo:
            print("MEMORY: n = {}, k = {}". format(n, k))
            return memo[(n,k)]
        else:
            p1= combinations(n -1, k)
            p2 = combinations(n -1, k -1)
            memo[(n, k)]=p1+p2
            return memo[(n, k)]

if __name__ == "__main__":
    ### Generator Test
    print ("Generator")
    g = randomValues(10, 10)
    print(g)
    print ([x for x in g])




    ###Comprehension Test
    print()
    print()
    print("Dictionary Comprehension")
    print(dictionary1(string.ascii_lowercase))
    print(dictionary1("SICE"))
    temp ={s:i for s,i in zip(string.hexdigits, range(0, 16))}
    print(dictionary2(temp))
    values = ["1", 1, "2", 2, 3, "3"]
    print(onlyStrings(values))

##list comprehension Test
print()
print("List Comprehension")
print(matrix(4, 5, 'a'))
print(matrix(5, 1, 0))
print(evens(10))

##Memoization
print ()
print("Memoization")
print(combinations(6, 3))