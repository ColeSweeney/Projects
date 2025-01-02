
### Lab 3 Tasks
### 
### You will create a new folder in `Labs` called `Lab3`. The files will be called:
### fun.py
### funTest.py
### 
### You will complete the following 5 functions (in fun.py): 
### 1. Implement factorial using for-loop. (If they are unsure, they can ask for help.)
### 2. Implement a function that checks the number of letter "a" in a string. 
### 3. Implement multiplication as a function, using for-loop. Test mul(4,5) = 20
### 4. Implement division as a function, using for-loop. test div(7,3) = 2
### 5. Implement "modulo" as a function, using for-loop, minus-, and less than<.  test mod(20,6) = 2
###
### The function names are your discretion. You have to choose the number of parameters and what the functions return. 
###
### You are expected to test the functions (funTest.py)
### You must do at more than 2 tests for each function. 
###
### Paste this intro in `fun.py`
def factorialLoop(alist):
    for i in alist:
        result = 0
    for num in alist:
        result += num
    return result
TestFact = [4]

print (factorialLoop(TestFact))

def checka(alist):
    for i in alist:
        result = 1
    
    

def multiplyListFor(alist):
    result = 1
    for num in alist:
        result *= num
    return result
TestMul=[4,5]
print (multiplyListFor(TestMul))

def divideListFor(alist):
    result = 1
    for num in alist:
        result /= num
    return result
TestDiv = [3,7]
print (divideListFor(TestDiv))

def modulo(alist):
    result = 1
