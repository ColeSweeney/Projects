#
#
#
def s(n):
    if n==0:
        return 0
    else:
        return s(n-1)+n

def s1(n):
    return (n*(n+1))/2
for i in range(0,11):
    print("s1({0})={1}".format(i,s1(i)))


def p(n):
    if n==0:
        return 10000
    else:
        return (p(n-1))+0.02*(p(n-1))
for i in range(0,11):
    print("p({0})={1}".format(i,p(i)))

def p1(n):
    return ((1.02)**n)*10000
for i in range(0,11):
    print("p1({0})={1}".format(i,p(i)))

def b(n):
    if n==1:
        return 2
    if n==2:
        return 3
    else:
        return (b(n-1))+(b(n-2))
for i in range(0,11):
    print("b({0})={1}".format(i,b(i)))

def c(n):
    if n==1:
        return 9
    else: 
        return (9*c(n-1))+(10**(n-1))-(c(n-1))
for i in range(0,11):
    print("c({0})={1}".format(i,c(i)))

def d(n):
    if n==0:
        return 1
    else:
        return 3*(d(n-1))+1
for i in range(0,11):
    print("d({0})={1}".format(i,d(i)))

def d1(n):
    return ((3**(n+1))-1)/2
for i in range(0,11):
    print("d1({0})={1}".format(i,d1(i)))

def c18(n,k):
    pass
def B(n):
    pass

#if __name__=="__main__":
    #TODO: Show the first ten values of each using one for loop inside this if statement.
