import numpy as np
import matplotlib.pyplot as plt
import random as rn


#translates a random int into a step along the random walk
#parameters: int i for the step index, numpy array x for tracking the left/right location at index i,
#numpy array y for tracking the forward/backward location at index i
#return: none
def step(x,y,i):
    direction = rn.randint(1,4)
    if direction == 1:
        x[i]= x[i-1]+1
        y[i]=y[i-1]
        return x[i], y[i]
    elif direction == 2:
        x[i]=x[i-1]-1
        y[i]=y[i-1]
        return x[i], y[i]
    elif direction == 3:
        x[i] = x[i-1]
        y[i] = y[i-1] + 1
        return x[i], y[i]
    elif direction == 4:
        x[i] = x[i-1]
        y[i] = y[i-1] - 1
        return x[i], y[i]
def graphit(x,y,n):
    plt.title("Random {0} Walk\nLast Location {1},{2}".format(n,int(x[n-
1]),int(y[n-1])) )
    plt.plot(x,y) 
    plt.plot([x[1],x[1]],[y[1]-10,y[1]+10], "b-")
    plt.plot([x[1]-10,x[1]+10],[y[1],y[1]], "b-")
    plt.plot([x[n-1]-10,x[n-1]+10],[y[n-1],y[n-1]], "r-")
    plt.plot([x[n-1],x[n-1]],[y[n-1]-10,y[n-1]+10], "r-")
    plt.savefig("rand_walk"+str(n)+".png",bbox_inches="tight",dpi=600) 
    plt.show() 
n = int(input("Number of steps: "))
x = np.zeros(n) 
y = np.zeros(n) 
for i in range(1,n):
    step(x,y,i)
graphit(x,y,n)