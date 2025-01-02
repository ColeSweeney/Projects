def f(x,y,z):
    (11*x*y)+(14*y*z)+(15*x*z)

def vol(x,y,z):
    return x*y*z == 147840

#some arbitrary starting point
a,b,c = 2,2,36960

#TO DO: LOOPS SEARCHING THROUGH POSSIBLE
#VALUES

print("H W L Value")
print(a,b,c,f(a,b,c))

if __name__ == "main":
    pass