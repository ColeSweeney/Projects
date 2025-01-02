import numpy as np
#INPUT two matrices a,b
#RETURN product ab
def mm(a,b):
    ab= np.zeros((len(a),len(a[0])))
    for i in len(a):
        range(0,2)
    for j in len(a[0]):
        range(0,2)
    ab= a * b
    return ab
#INPUT scalar n and matrix a
#RETURN scalar product na
def sm(n,a):
    na= n* a(i,j)
    return na
#INPUT matrix n x m
#RETURN transpose matrix m x n
#def tp(a):
    #m x n= 
#return m x n
#INPUT two matrices a,b
#RETURN sum a + b
def add_m(a,b):
    sum = a(i,j)+b(i,j)
    return sum
if __name__ == "__main__":
    a = np.array([[1,2,4],[3,4,3]])
    b = np.array([[-1,0],[1,-5],[-3,1]])
    print("numpy product\n", np.dot(a,b))
    d = mm(a,b)
    print(d)
    print("numpy scalar product\n", 4*a)
    e = sm(4,a)
    print(e)
    print("numpy tranpose\n", np.transpose(a))
    f = tp(a)
    print(f)
    print("numpy addition\n", a + a)
    g = add_m(a,a)
    print(g)