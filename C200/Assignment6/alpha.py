
def alphaFunction():
    happy = open("Assignment6/happy.txt", "r")
    count = happy.read()  
    n_list =['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q','r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']
    d={"a":0, "b":0, "c":0, "d":0, "e":0, "f":0, "g":0, "h":0, "i":0, "j":0, "k":0, "l":0, "m":0, "n":0, "o":0, "p":0, "q":0, "r":0, "s":0, "t":0, "u":0, "v":0, "w":0, "x":0, "y":0, "z":0}
    for items in count:
       if ord(items) >= 97: 
        d[items] += 1
    return d
    for key, value in d.items():
        print(" d : % d"%(key, value))
    return alphaFunction()
  


if __name__ == "__main__":
    print(__name__)
    print(alphaFunction())
  
