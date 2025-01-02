import matplotlib.pyplot as plt
import numpy as np
def mean(lst):
    mean =sum(lst)/len(lst)
    return mean
def sd(xlst):
    sx= sum(xi-mean)**2/(xlst-1)
    sy= sum(yi-mean)**2/(xlst-1)
    return sx, sy 
def r(x, y):
    rValue =((sum((xi-mean)/sx)* sum((yi-mean)/sy))/(l-1))
    return rValue 
def theGraph():
    pass
    # TODO: Implement function (D2)
if __name__ == "__main__":
    x = [[2,3],[4,3],[1,1.4],[1,.5],[5,3]]
    # TODO: Complete code (D1) by calling the important function
    print(rValue)
    # Example of creating a plot
    plt.plot([i[0] for i in x],[i[1] for i in x], 'ro')
    t = np.arange(0,6,.1)
    plt.plot(t,t*.65 + .5,'g--')
    plt.axis([0,6,0,6])
    plt.xlabel("A values")
    plt.ylabel("B value")
    plt.title("r = {0:.3}".format(rValue))
    plt.show()
    theGraph()