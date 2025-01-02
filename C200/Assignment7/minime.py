def min(x,y):
#TODO: Implement function
return 1

def MIN(lst):
#TODO: Implement function recursively
return 1

# for-loop and index into list
def min1(x):
#TODO: Implement function
return 1

# for-loop and container
def min2(x):
#TODO: Implement function
return 1

# while-loop and index into list
def min3(x):
#TODO: Implement function
return 1

# while-loop and container
def min4(x):
#TODO: Implement function
# for loop reverse index
return 1

def min5(x):
    small = x[-1]
    for i in range(len(x)-1,-1,-1):
        if x[i] < small:
            small = x[i]
            return small
if __name__=="__main__":

x = [1,42,-1,22,0,12]

mf = [MIN, min1, min2, min3, min4, min5]

for f in mf:
    print("{0}({1}) = {2}".format(f.__name__,x,f(x)))