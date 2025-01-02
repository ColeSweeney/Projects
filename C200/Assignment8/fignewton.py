ex_f = lambda x: x**6 - x - 1
ex_fp = lambda x: 6*(x**5) - 1

def fpa(f):
    h = .000001
    return lambda x: (f(x+h)-f(x-h))/(2*h)

def newton(f,fp,x,tau,MAX):
    def n(x,i):
        while f(x) > tau:
            if MAX <= i:
                print("Number of iterations exceeded. . .")
                return None
            else:
                print("{0} {1:.5f} {2:.5f}".format(i,x,f(x)))
                x = x - f(x)/fp(x)
                i += 1
        return x
    n(x,0)

if __name__ == "__main__":
    Fu =input("Function:")
    f= lambda x: eval(Fu)
    tau=float(input("tau:"))
    n=float(input("x0:"))
    MAX= int(input("interations:"))

    newton(f, fpa(f), n, tau, MAX)