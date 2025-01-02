x = True
y = False
z = 12
a = 10
b = not (x or not (x or y )) and True 

#1################
if b:
    print("Happy")
elif not b and x:
    print("Valentines")
else:
    print("day!")
##################


#2################
if (z > a) or (2*a > z):
    print("C2OO")
if not (z>a) or not (2*a > z):
    print("is bliss")
##################


#3################
if (x and y) or not x:
    print(a)
##################


#4################
if (2 > z) or x:
    print("1")
if 2 == 1:
    print("2")
if y and not x:
    print("3")
if y == x:
    print("4")
##################

#5################
def f(x):
    return (x==4)*100 + (x==3)*10 + (x==2)*1000 +(x!=4)*(x!=3)*(x!=3)*(x!=2)*100000

print(f(4))
print(f(3))
print(f(2))
print(f(1))
##################
if __name__=="__main__":
    print