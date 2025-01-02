import matplotlib.pyplot as plt
### TODO: Answer question in the comments here
# Even numbers has a smaller maxium number 
#Even numbers graphs have a lot less ups and downs
#
xlst, ylst = [],[]
def f(n):
    if n%2==0:
        return n//2
    else:
        return 3*n+1
def g(n,i):
    xlst.append(i)
    ylst.append(n)
    
    if n==1:
        return 1
    else:
        g(f(n),i+1)
        print(str(n)+" ",end="")

if __name__ == "__main__":
    g(25,0)
    xmax = max(tuple(xlst))
    ymax = max(tuple(ylst))
    print("\nNumber of recursive calls: {0}\nMaximum number:{1}".format(xmax,ymax))
    plt.plot(xlst,ylst,'r--')
    plt.axis([0,xmax,0,ymax])
    plt.show()