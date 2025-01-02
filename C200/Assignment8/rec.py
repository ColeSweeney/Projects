#TIMER FUNCTION -- deprecated in 3.8 FYI
#so you might get messages -- you can ignore them for now
import time
def ftimer(f,args):
    time_start = time.clock()
    f(args)
    time_elapsed2 = (time.clock()-time_start)
    return time_elapsed2
#1
def even(x):
    if x%2==0:
        return 1 
    else:
        return 0
#2
def odd(x):
    if x%2!=0:
        return 1
    else:
        return 0
#3
#Recursive
#input parameter: n
#OUTPUT RE value
def b(n):
    if n==1:
        return 0
    if n==2:
        return 0
    if even(n) == 1:
        return n-1+b(n-1)
    if odd(n) == 1:
        return (n**2)+1+b(n-1)
#4
#TAIL RECURSIVE for function B
def btr(n,s):
    if n==1:
        return s
    if n==2:
        return s
    if even(n)==1:
        return btr(n-1,n-1+s)
    if odd(n)==1:
        return btr(n-1,(n**2)+1+s)

#5 
#MEMOIZATION 
#USE THIS DICTIONARY for function B
f = {2:0,1:0}
def bm(n):
    if n in f.keys():
        return f[n]
    else:
        if even(n)==1:
            return n-1+bm(n-1)
        elif odd(n)==1:
            return (n**2)+1+bm(n-1)

###################################################
#7
#input parameter: N
#output: Recursive VALUE
#RECURSIVE IMPLMENTATION
def gg(n):
    if n==0:
        return 1
    else:
        return 1+2*gg(n-1)
#8
#TAIL RECURSIVE version of gg
def gtr(n,s):
    if n==0:
        return s
    else:
        return gtr(n-1, 1+2*s)
    
#9
# MEMOIZATION DICTIONARY INSIDE version of gg
d={0:1}
def gm(n):
    if n in d.keys():
        return d[n]
    else:
        return 1+2*gm(n-1)
    
    
if __name__ == "__main__":
    # Function numbers 1 - 6
    for i in range(1,10): 
        print("f({0}) = {1}, {2}, {3}".format(i, b(i),btr(i,0),bm(i)))

    fblist = [b, lambda i: btr(i,0), bm ]
    tlist = [round(ftimer(f,700)*10**5,2) for f in fblist]
    print(tlist)

    print()
    fglist = [gg, lambda i: gtr(i,0),gm]
    # Function numbers 7 - 9 
    for i in range(0,10):
        print("f({0}) = {1}, {2}, {3}".format(i,gg(i),gtr(i,1),gm(i)))
    tlist = [round(ftimer(f,700)*10**5,2) for f in fglist]
    print(tlist)