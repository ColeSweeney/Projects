ex_f = lambda x: x**6 - x - 1 # This function will not look like thefigure above

def secant(f,x0,x1,tau):
    a=f(x0)
    b=f(x1)
    while abs(b)>= tau:
        print("{0:.5f} {1:.5f} {2:.5f} {3:.5f}".format(x0,f(x0),f(x1),x0-x1))
        c=((b*x0) - (a*x1))/(b-a)
        (x0, x1)= (x1, c)
        (a, b) = (b, f(c))
   

        

if __name__ == "__main__":
    secant(ex_f,2.0,1.0,.0001)