# Input Parameter: a list of, possibly empty, numbers x
# Returns: the max number in list x (does not have to be unique)
def maxFor(xlst):
    Max = 0 
    for i in xlst:
#TODO: implement this function with a for loop

# Input Parameter: a list of, possibly empty, numbers x
# Returns: the max number in list x (does not have to be unique)
def maxWhile(xlst):
#TODO: implement this function with a while loop

# Input Parameter: a non-empty list of numbers x
# Returns: the minimal number value in list x (does not have to be unique)
def minFor(xlst):
#TODO: implement this function

#Input Parameters:a list of numbers lst
#Returns: the list lst with all occurrences of evens removed
def RemoveEvens(xlst):
#TODO: implement this function using for

# Input Parameters: list that contains either integers or strings
# Return Value: oldX replaced with num copies newX
def myReplace(oldX, num, newX, xlst):
#TODO: implement this function

# Input Parameters: list of numbers
# Returns: sum of the odd numbers
# if there are no odd numbers, then print zero
# if the list is empty, print the empty list
def sumOdd(xlst):
#TODO: implement this function using while

# Input Parameter: a list x of objects [x1, x2, x3,..., xn]
# Returns: a string that is the concatenation of all the strings
# in the list in order encountered
def StringConcat(xlst):
#TODO: implement this function

# Data
w = []
x = [1,42,24,22,61,100,0,42]
y = [2]
z = [555,333,222]
nlst = [w,x,y,z]
c = [0,1,1,0,2,1,4]
a = ["a","b","b", "a", "c","b","e"]
b = [1,1,2,1,1,2,1,1,2,1,3,1]
d = ["a",1,"row",0,3,"d","ef",453]

print("maxFor_____")
for i in nlst:
    print(maxFor(i))
print("\nmaxWhile_____")
for i in nlst:
    print(maxWhile(i))
print("\nminFor_____")
for i in nlst:
    print(minFor(i))
print("\nRemoveEvens_____")
print(RemoveEvens(b))
print(RemoveEvens(c))
print("\nmyReplace_____")
print(myReplace(1,2,"dog",c))
print(myReplace(1,2,1,b))
print("\nsumOdd_____")
for i in nlst:
    print(sumOdd(i))
print("\nStringConcat_____")
print(StringConcat(a))
print(StringConcat(d))


if __name__ == "main":
    pass